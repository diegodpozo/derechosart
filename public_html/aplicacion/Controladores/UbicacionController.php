<?php

require_once __DIR__ . '/../Modelos/UbicacionModel.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../src/helpers.php';

class UbicacionController {

    public function getJsonLocalidadesByProvinciaId() {
        header('Content-Type: application/json');

        $provincia_id = filter_var($_GET['provincia_id'] ?? null, FILTER_VALIDATE_INT);

        if (!$provincia_id) {
            echo json_encode(['success' => false, 'message' => 'ID de provincia inválido o no proporcionado.']);
            exit();
        }

        $ubicacionModel = new UbicacionModel();
        $nombreProvincia = $ubicacionModel->getNombreProvinciaById($provincia_id);

        if (!$nombreProvincia || !esProvinciaZonaAtencion($nombreProvincia)) {
            echo json_encode(['success' => true, 'localidades' => []]);
            exit();
        }

        $localidades = $ubicacionModel->getLocalidadesByProvinciaId($provincia_id);

        if ($localidades === false) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error interno del servidor al obtener localidades.']);
            exit();
        }

        $coordenadas = cargarCoordenadasLocalidades();
        $localidades = filtrarLocalidadesDeProvincia($localidades, $nombreProvincia, $coordenadas);

        echo json_encode(['success' => true, 'localidades' => $localidades]);
        exit();
    }

    public function sincronizarUbicaciones() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        header('Content-Type: application/json');

        // Verificar autenticación
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'ERROR: NO AUTORIZADO.']);
            exit();
        }

        // --- AUMENTAR TIMEOUTS PARA OPERACION LARGA ---
        set_time_limit(300); // 5 minutos
        ini_set('default_socket_timeout', 60);

        try {
            $pdo = Database::getConnection();
            
            // --- VERIFICACION DE ESTRUCTURA (PROTECCION EXTRA) ---
            $pdo->exec("CREATE TABLE IF NOT EXISTS provincias (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                codigo_georef VARCHAR(50) UNIQUE
            )");
            
            $pdo->exec("CREATE TABLE IF NOT EXISTS localidades (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                provincia_id INT NOT NULL,
                codigo_georef VARCHAR(50) UNIQUE,
                FOREIGN KEY (provincia_id) REFERENCES provincias(id) ON DELETE CASCADE
            )");

            $pdo->exec("SET FOREIGN_KEY_CHECKS=0;");

            // ---- 1. SINCRONIZAR PROVINCIAS ----
            error_log("INICIANDO SINCRONIZACION DE PROVINCIAS");
            $api_provincias_data = $this->callGeorefApi('provincias', ['max' => 50]);
            if (!$api_provincias_data || !isset($api_provincias_data['provincias'])) {
                throw new Exception("NO SE PUDIERON OBTENER LAS PROVINCIAS DE LA API GEOREF.");
            }
            $api_provincias = $api_provincias_data['provincias'];
            error_log("PROVINCIAS OBTENIDAS: " . count($api_provincias));

            $stmt_insert_provincia = $pdo->prepare("INSERT INTO provincias (nombre, codigo_georef) VALUES (:nombre, :codigo_georef) ON DUPLICATE KEY UPDATE nombre = VALUES(nombre)");
            
            $provincias_sincronizadas_ids = [];
            
            foreach ($api_provincias as $provincia_api) {
                $codigo_georef = (string)$provincia_api['id'];
                $nombre_provincia = $provincia_api['nombre'];

                $stmt_insert_provincia->execute([':nombre' => $nombre_provincia, ':codigo_georef' => $codigo_georef]);
                
                $stmt_get_local_prov_id = $pdo->prepare("SELECT id FROM provincias WHERE codigo_georef = :codigo_georef");
                $stmt_get_local_prov_id->execute([':codigo_georef' => $codigo_georef]);
                $local_provincia_id = $stmt_get_local_prov_id->fetchColumn();
                
                if ($local_provincia_id) {
                    $provincias_sincronizadas_ids[$codigo_georef] = ['local_id' => $local_provincia_id, 'nombre' => $nombre_provincia];
                }
            }
            error_log("PROVINCIAS SINCRONIZADAS: " . count($provincias_sincronizadas_ids));

            // ---- 2. SINCRONIZAR LOCALIDADES (POR PROVINCIA PARA EVITAR TIMEOUTS) ----
            error_log("INICIANDO SINCRONIZACION DE LOCALIDADES");
            $stmt_insert_localidad = $pdo->prepare("INSERT INTO localidades (nombre, provincia_id, codigo_georef) VALUES (:nombre, :provincia_id, :codigo_georef) ON DUPLICATE KEY UPDATE nombre = VALUES(nombre), provincia_id = VALUES(provincia_id)");
            
            $total_localidades = 0;
            foreach ($provincias_sincronizadas_ids as $api_provincia_id => $prov_data) {
                $local_provincia_id = $prov_data['local_id'];
                $nombre_provincia_api = $prov_data['nombre'];

                error_log("SINCRONIZANDO LOCALIDADES DE: $nombre_provincia_api");

                // Pequeña pausa para evitar bloqueos de la API
                usleep(100000); // 100ms entre llamadas

                $api_localidades_data = $this->callGeorefApi('localidades', ['provincia' => $nombre_provincia_api, 'max' => 5000]);

                if (!$api_localidades_data || !isset($api_localidades_data['localidades'])) {
                    error_log("ADVERTENCIA: NO SE OBTUVIERON LOCALIDADES PARA: $nombre_provincia_api");
                    continue;
                }

                $localidades_provincia = count($api_localidades_data['localidades']);
                error_log("LOCALIDADES PARA $nombre_provincia_api: $localidades_provincia");

                foreach ($api_localidades_data['localidades'] as $localidad_api) {
                    $stmt_insert_localidad->execute([
                        ':nombre' => $localidad_api['nombre'],
                        ':provincia_id' => $local_provincia_id,
                        ':codigo_georef' => (string)$localidad_api['id']
                    ]);
                    $total_localidades++;
                }
            }

            $pdo->exec("SET FOREIGN_KEY_CHECKS=1;");
            error_log("SINCRONIZACION COMPLETADA: $total_localidades localidades sincronizadas");
            echo json_encode(['success' => true, 'message' => "SINCRONIZACION COMPLETADA CON EXITO. SE PROCESARON $total_localidades LOCALIDADES."]);

        } catch (Exception $e) {
            error_log("ERROR EN LA SINCRONIZACION: " . $e->getMessage());
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => "ERROR: " . $e->getMessage()]);
        }
        exit();
    }

    private function callGeorefApi($endpoint, $params = []) {
        $url = "https://apis.datos.gob.ar/georef/api/{$endpoint}?" . http_build_query($params);
        
        $context = stream_context_create([
            'http' => [
                'timeout' => 30,
                'header' => "User-Agent: DerechosART-System/1.0\r\n",
                'ignore_errors' => true // PERMITIR LEER RESPUESTAS DE ERROR
            ],
            'ssl' => [
                'verify_peer' => false, // PARA EVITAR PROBLEMAS DE CERTIFICADOS EN HOSTINGER
                'verify_peer_name' => false
            ]
        ]);
        
        error_log("LLAMANDO API GEOREF: $url");
        
        try {
            $response = @file_get_contents($url, false, $context);
            
            if ($response === FALSE) {
                error_log("ERROR: No se pudo conectar a la API Georef");
                return null;
            }
            
            $decoded = json_decode($response, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log("ERROR: Respuesta inválida de API Georef: " . json_last_error_msg());
                return null;
            }
            
            return $decoded;
        } catch (Exception $e) {
            error_log("EXCEPCION EN callGeorefApi: " . $e->getMessage());
            return null;
        }
    }
}
