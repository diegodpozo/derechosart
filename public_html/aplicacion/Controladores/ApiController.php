<?php

require_once __DIR__ . '/../Modelos/GestionModel.php';
require_once __DIR__ . '/../Modelos/FormModel.php'; // Nueva dependencia
require_once __DIR__ . '/../../config/database.php';

class ApiController {
    private $gestionModel;
    private $formModel;

    private function getGestionModel() {
        if ($this->gestionModel === null) {
            $this->gestionModel = new GestionModel();
        }
        return $this->gestionModel;
    }

    private function getFormModel() {
        if ($this->formModel === null) {
            $this->formModel = new FormModel();
        }
        return $this->formModel;
    }

    private function checkAuthentication() {
        // Asegurar que la sesión esté iniciada si no lo está
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header('Content-Type: application/json');
            http_response_code(401); // Unauthorized
            echo json_encode(['success' => false, 'message' => 'SESION EXPIRADA O ACCESO NO AUTORIZADO.']);
            exit();
        }
    }



public function handleDatosCliente() {
    $this->checkAuthentication(); 
    header('Content-Type: application/json');
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);
        if (!$id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'ID de cliente inválido.']);
            exit();
        }

        // --- SEGURIDAD: CONTROL DE ACCESO (IDOR) ---
        // Si no es administrador (rol 1), solo puede ver clientes asignados a su ID.
        $userIdFiltro = ($_SESSION['rol'] == 1) ? null : $_SESSION['user_id'];
        
        $cliente = $this->getGestionModel()->getConsultaById($id, null, $userIdFiltro);
        
        if ($cliente) {
            echo json_encode(['success' => true, 'data' => $cliente]);
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Cliente no encontrado o acceso denegado.']);
        }
        exit();
    } else {
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
        exit();
    }
}



    public function handleEliminarConsulta() {
        $this->checkAuthentication(); // Autenticación requerida
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // CLOUDFLARE COMPATIBLE: Decodificar JSON ANTES de validar CSRF
            $json_data = json_decode(file_get_contents('php://input'), true);
            $id = filter_var($json_data['id'] ?? $_POST['id'] ?? null, FILTER_VALIDATE_INT);
            
            if (!$id) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'ID de consulta inválido.']);
                exit();
            }
            // SEGURIDAD: CONTROL DE ACCESO (IDOR)
            $userIdFiltro = ($_SESSION['rol'] == 1) ? null : $_SESSION['user_id'];
            $result = $this->getGestionModel()->eliminarConsulta($id, $userIdFiltro);
            if ($result['success']) {
                echo json_encode($result);
            } else {
                http_response_code(500); // Internal Server Error
                echo json_encode($result);
            }
            exit();
        } else {
            http_response_code(405); // Method Not Allowed
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }
    }

    public function handleRestaurarConsulta() {
        $this->checkAuthentication(); // Autenticación requerida
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            
            $id = filter_var($data['id'] ?? null, FILTER_VALIDATE_INT);

            if (!$id) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'ID de consulta inválido.']);
                exit();
            }

            // SEGURIDAD: CONTROL DE ACCESO (IDOR)
            $userIdFiltro = ($_SESSION['rol'] == 1) ? null : $_SESSION['user_id'];
            $result = $this->getGestionModel()->restaurarConsulta($id, $userIdFiltro);

            if ($result['success']) {
                echo json_encode($result);
            } else {
                http_response_code(500); // Internal Server Error
                echo json_encode($result);
            }
            exit();
        } else {
            http_response_code(405); // Method Not Allowed
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }
    }

    public function procesarNuevaConsulta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // ===== PROTECCION ANTISPAM =====

            // 1. VALIDACION CSRF: RECHAZA BOTS QUE HACEN POST DIRECTO SIN TOKEN DE SESION
            $token_recibido = $_POST['csrf_token'] ?? '';
            $token_sesion = $_SESSION['csrf_token'] ?? '';
            if ($token_recibido === '' || $token_sesion === '' || !hash_equals($token_sesion, $token_recibido)) {
                error_log("[ANTISPAM] CSRF invalido desde IP " . ($_SERVER['REMOTE_ADDR'] ?? 'desconocida'));
                $_SESSION['form_errors'] = 'LA SESION EXPIRÓ O EL FORMULARIO NO ES VALIDO. RECARGÁ LA PAGINA E INTENTÁ DE NUEVO.';
                session_write_close();
                header("Location: " . BASE_URL . "contacto");
                exit();
            }

            // 2. CAMPO TRAMPA (HONEYPOT): SI EL BOT LO COMPLETO, ES SPAM
            if (!empty($_POST['website'])) {
                error_log("[ANTISPAM] Honeypot activado desde IP " . ($_SERVER['REMOTE_ADDR'] ?? 'desconocida'));
                // REENVIA COMO EXITO PARA NO REVELAR LA DEFENSA AL BOT
                $_SESSION['form_success_message'] = 'CONSULTA REGISTRADA CORRECTAMENTE. ANALIZAREMOS TU CASO A LA BREVEDAD.';
                session_write_close();
                header("Location: " . BASE_URL . "contacto");
                exit();
            }

            // 3. RATE LIMITING BASICO: MAXIMO 3 INTENTOS POR IP EN 60 SEGUNDOS
            if (!$this->permitirIntentoPorIp()) {
                error_log("[ANTISPAM] Rate limit excedido desde IP " . ($_SERVER['REMOTE_ADDR'] ?? 'desconocida'));
                $_SESSION['form_errors'] = 'DEMASIADOS ENVIOS EN POCO TIEMPO. ESPERÁ UN MOMENTO Y VOLVÉ A INTENTAR.';
                session_write_close();
                header("Location: " . BASE_URL . "contacto");
                exit();
            }

            $datos_formulario = $_POST;
            $result = $this->getGestionModel()->guardarNuevaConsulta($datos_formulario);

            if ($result['success']) {
                $_SESSION['form_success_message'] = $result['message'];
                unset($_SESSION['form_data']); 
            } else {
                $_SESSION['form_errors'] = $result['message'];
                $_SESSION['form_data'] = $datos_formulario;
            }
            
            // FORZAR GUARDADO DE SESION ANTES DE REDIRIGIR (PARA EVITAR PERDIDA EN PRODUCCION)
            session_write_close();
            header("Location: " . BASE_URL . "contacto"); 
            exit();
        } else {
            header("Location: " . BASE_URL . "contacto");
            exit();
        }
    }

    /**
     * RATE LIMITING LIGERO POR IP USANDO LA TABLA rate_limit_consultas.
     * PERMITE MAXIMO 3 REGISTROS POR IP EN 60 SEGUNDOS.
     */
    private function permitirIntentoPorIp(): bool {
        try {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? 'desconocida';

            // LIMPIEZA PERIODICA DE IPs VIEJAS (1 DE CADA 50 VECES)
            if (random_int(1, 50) === 1) {
                $this->getGestionModel()->limpiarRateLimit();
            }

            return $this->getGestionModel()->registrarIntentoRateLimit($ip);
        } catch (\Throwable $e) {
            // SI EL RATE LIMIT FALLA, NO BLOQUEAR AL USUARIO LEGITIMO
            error_log("[ANTISPAM] Error en rate limit: " . $e->getMessage());
            return true;
        }
    }

    public function actualizarCliente() {
        $this->checkAuthentication(); // Autenticación requerida
        
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }
        
        $data = json_decode(file_get_contents('php://input'), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Solicitud inválida o JSON mal formado.']);
            exit();
        }
        
        $id = filter_var($data['id'] ?? null, FILTER_VALIDATE_INT);

        if (!$id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'ID de cliente inválido.']);
            exit();
        }

        // SEGURIDAD: CONTROL DE ACCESO (IDOR)
        $userIdFiltro = ($_SESSION['rol'] == 1) ? null : $_SESSION['user_id'];

        // Llamar al método de actualización completa del modelo de gestión
        $result = $this->getGestionModel()->updateConsultaCompleta($data, $userIdFiltro);

        if ($result['success']) {
            echo json_encode($result);
        } else {
            http_response_code(500);
            echo json_encode($result);
        }
        exit();
    }

    public function toggleEstadoLeido() {
        $this->checkAuthentication(); // Autenticación requerida
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405); // Method Not Allowed
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }

        $data = json_decode(file_get_contents('php://input'), true);
        
        
        $id = filter_var($data['id'] ?? null, FILTER_VALIDATE_INT);

        if (!$id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'ID de consulta inválido.']);
            exit();
        }

        // SEGURIDAD: CONTROL DE ACCESO (IDOR)
        $userIdFiltro = ($_SESSION['rol'] == 1) ? null : $_SESSION['user_id'];
        $result = $this->getGestionModel()->toggleLeido($id, $userIdFiltro);

        if ($result['success']) {
            echo json_encode($result);
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode($result);
        }
        exit();
    }

    public function handleAsignarConsulta() {
        $this->checkAuthentication();
        header('Content-Type: application/json');

        $data = json_decode(file_get_contents('php://input'), true);
        
        
        $consultaId = filter_var($data['consulta_id'] ?? null, FILTER_VALIDATE_INT);
        $usuarioId = filter_var($data['usuario_id'] ?? null, FILTER_VALIDATE_INT);

        if (!$consultaId || !$usuarioId) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'DATOS INVALIDOS PARA ASIGNACION.']);
            exit();
        }

        $result = $this->getGestionModel()->asignarConsulta($consultaId, $usuarioId);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'CONSULTA ASIGNADA CORRECTAMENTE.']);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'ERROR AL ASIGNAR CONSULTA.']);
        }
        exit();
    }

    public function getUsuariosList() {
        $this->checkAuthentication();
        header('Content-Type: application/json');

        require_once __DIR__ . '/../Models/AuthModel.php';
        $authModel = new AuthModel();
        $usuarios = $authModel->getAllUsuarios();

        echo json_encode(['success' => true, 'usuarios' => $usuarios]);
        exit();
    }

    /**
     * Procesa el formulario "Agregar ART" del menú lateral (drawer) en /gestion.
     * Redirige a /gestion tras insertar o en caso de error.
     */
    public function handleAgregarArt() {
        $this->checkAuthentication(); // Autenticación requerida
        
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $_SESSION['gestion_error_art'] = 'MÉTODO NO PERMITIDO PARA AGREGAR ART.';
            header('Location: ' . BASE_URL . 'gestion');
            exit();
        }

        $nombre = trim($_POST['nombre_art'] ?? '');
        if ($nombre === '') {
            $_SESSION['gestion_error_art'] = 'EL NOMBRE DE LA ART NO PUEDE ESTAR VACIO.';
            header('Location: ' . BASE_URL . 'gestion');
            exit();
        }
        try {
            $pdo = Database::getConnection();
            $stmt = $pdo->prepare('INSERT INTO art (nombre) VALUES (:nombre)');
            $stmt->execute([':nombre' => $nombre]);
            $_SESSION['gestion_mensaje_art'] = 'ART AGREGADA CON EXITO.';
            header('Location: ' . BASE_URL . 'gestion');
            exit();
        } catch (PDOException $e) {
            error_log('ERROR AL AGREGAR ART: ' . $e->getMessage());
            if ($e->getCode() == '23000') { // Código para UNIQUE constraint violation
                $_SESSION['gestion_error_art'] = 'ERROR: LA ART CON ESE NOMBRE YA EXISTE.';
            } else {
                $_SESSION['gestion_error_art'] = 'ERROR AL AGREGAR ART: ' . $e->getMessage();
            }
            header('Location: ' . BASE_URL . 'gestion');
            exit();
        }
    }

    /**
     * Devuelve una lista de todas las ARTs en formato JSON.
     * Endpoint: /api/arts
     */
    public function getArtList() {
        $this->checkAuthentication(); // Autenticación requerida
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $arts = $this->getFormModel()->getArtEmpresas();
            echo json_encode(['success' => true, 'arts' => $arts]);
            exit();
        } else {
            http_response_code(405); // Method Not Allowed
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }
    }

    /**
     * Procesa la solicitud para eliminar una ART.
     * Endpoint: /api/eliminar_art
     */
    public function handleDeleteArt() {
        $this->checkAuthentication(); // Autenticación requerida
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $json_data = json_decode(file_get_contents('php://input'), true);
            $id = filter_var($json_data['id'] ?? $_POST['id'] ?? null, FILTER_VALIDATE_INT);
            
            if (!$id) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'ID de ART inválido.']);
                exit();
            }

            $result = $this->getFormModel()->eliminarArt($id);

            if ($result['success']) {
                echo json_encode($result);
            } else {
                http_response_code(400); // Bad Request por error de lógica o dependencia
                echo json_encode($result);
            }
            exit();
        } else { // Añadido el else para manejar métodos no permitidos
            http_response_code(405); // Method Not Allowed
            echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
            exit();
        }
    }
}
