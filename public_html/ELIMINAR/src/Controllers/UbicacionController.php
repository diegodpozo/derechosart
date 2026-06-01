<?php

require_once __DIR__ . '/../Models/UbicacionModel.php';
require_once __DIR__ . '/../helpers.php';

class UbicacionController {

    public function mostrarUbicaciones() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Si el usuario no está logueado, redirigir a la página de login
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: /login");
            exit();
        }

        $ubicacionModel = new UbicacionModel();

        $provincias_raw = $ubicacionModel->getProvincias();
        $localidades_raw = $ubicacionModel->getLocalidades();

        // Preparar datos para la vista
        $provincias = [];
        $mensaje_provincias = '';
        if (isset($provincias_raw['mensaje_error'])) {
            $mensaje_provincias = $provincias_raw['mensaje_error'];
        } else {
            $provincias = $provincias_raw;
        }

        $localidades = [];
        $mensaje_localidades = '';
        if (isset($localidades_raw['mensaje_error'])) {
            $mensaje_localidades = $localidades_raw['mensaje_error'];
        } else {
            $localidades = $localidades_raw;
        }

        $data = [
            'pageTitle' => 'Administración de Ubicaciones',
            'provincias' => $provincias,
            'localidades' => $localidades,
            'mensaje_provincias' => $mensaje_provincias,
            'mensaje_localidades' => $mensaje_localidades,
        ];

        // Renderizar la vista
        view('ubicaciones', $data);
    }

    public function getJsonLocalidadesByProvinciaId() {
        header('Content-Type: application/json');

        $provincia_id = filter_var($_GET['provincia_id'] ?? null, FILTER_VALIDATE_INT);

        if (!$provincia_id) {
            echo json_encode(['success' => false, 'message' => 'ID de provincia inválido o no proporcionado.']);
            exit();
        }

        $ubicacionModel = new UbicacionModel();
        $localidades = $ubicacionModel->getLocalidadesByProvinciaId($provincia_id);

        if ($localidades === false) { // Suponiendo que el modelo devuelve false en caso de error
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error interno del servidor al obtener localidades.']);
        } elseif (empty($localidades)) {
            echo json_encode(['success' => true, 'localidades' => [], 'message' => 'No se encontraron localidades para la provincia seleccionada.']);
        } else {
            echo json_encode(['success' => true, 'localidades' => $localidades]);
        }
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

        try {
            $pdo = Database::getConnection();
            $pdo->exec("SET FOREIGN_KEY_CHECKS=0;");

            // ---- SINCRONIZAR PROVINCIAS ----
            $api_provincias_data = $this->callGeorefApi('provincias', ['max' => 50]);
            if (!$api_provincias_data || !isset($api_provincias_data['provincias'])) {
                throw new Exception("NO SE PUDIERON OBTENER LAS PROVINCIAS DE LA API GEOREF.");
            }
            $api_provincias = $api_provincias_data['provincias'];

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

            // ---- SINCRONIZAR LOCALIDADES ----
            $stmt_insert_localidad = $pdo->prepare("INSERT INTO localidades (nombre, provincia_id, codigo_georef) VALUES (:nombre, :provincia_id, :codigo_georef) ON DUPLICATE KEY UPDATE nombre = VALUES(nombre), provincia_id = VALUES(provincia_id)");
            
            foreach ($provincias_sincronizadas_ids as $api_provincia_id => $prov_data) {
                $local_provincia_id = $prov_data['local_id'];
                $nombre_provincia_api = $prov_data['nombre'];

                $api_localidades_data = $this->callGeorefApi('localidades', ['provincia' => $nombre_provincia_api, 'max' => 5000]);

                if (!$api_localidades_data || !isset($api_localidades_data['localidades'])) {
                    error_log("NO SE PUDIERON OBTENER LAS LOCALIDADES DE LA API GEOREF PARA PROVINCIA: " . $nombre_provincia_api);
                    continue;
                }
                $api_localidades = $api_localidades_data['localidades'];

                foreach ($api_localidades as $localidad_api) {
                    $codigo_georef_loc = (string)$localidad_api['id'];
                    $nombre_localidad = $localidad_api['nombre'];

                    $stmt_insert_localidad->execute([
                        ':nombre' => $nombre_localidad,
                        ':provincia_id' => $local_provincia_id,
                        ':codigo_georef' => $codigo_georef_loc
                    ]);
                }
            }

            $pdo->exec("SET FOREIGN_KEY_CHECKS=1;");
            echo json_encode(['success' => true, 'message' => "SINCRONIZACION CON LA API GEOREF COMPLETADA CON EXITO."]);

        } catch (Exception $e) {
            error_log("ERROR EN LA SINCRONIZACION: " . $e->getMessage());
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => "ERROR EN LA SINCRONIZACION: " . $e->getMessage()]);
        }
        exit();
    }

    private function callGeorefApi($endpoint, $params = []) {
        $url = "https://apis.datos.gob.ar/georef/api/{$endpoint}?" . http_build_query($params);
        $context = stream_context_create(['http' => ['timeout' => 60]]);
        $response = @file_get_contents($url, false, $context);

        if ($response === FALSE) {
            error_log("ERROR AL CONECTAR CON LA API GEOREF: " . $url);
            return null;
        }
        return json_decode($response, true);
    }
}
