<?php

require_once __DIR__ . '/../Modelos/AuthModel.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../src/helpers.php';
require_once __DIR__ . '/../Services/MailService.php';

class AuthController {

    public function mostrarLogin() {
        // Redirigir al panel si ya está logueado
        if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {
            header("Location: " . BASE_URL . "gestion");
            exit();
        }

        // OBTENER LA IP DEL CLIENTE PARA VERIFICAR BLOQUEO
        $IpCliente = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
        if (strpos($IpCliente, ',') !== false) {
            $PartesIp = explode(',', $IpCliente);
            $IpCliente = trim($PartesIp[0]);
        }

        // VERIFICAR SI LA IP ESTA BLOQUEADA
        $ResultadoBloqueo = $this->verificarBloqueoIp($IpCliente);
        $mensaje = $_SESSION['login_mensaje'] ?? "";
        if ($ResultadoBloqueo['bloqueado']) {
            $Horas = floor($ResultadoBloqueo['tiempo_restante'] / 3600);
            $Minutos = ceil(($ResultadoBloqueo['tiempo_restante'] % 3600) / 60);
            $mensaje = "DEMASIADOS INTENTOS FALLIDOS. ACCESO BLOQUEADO. INTENTE EN " . ($Horas > 0 ? "$Horas HORAS Y " : "") . "$Minutos MINUTOS.";
        }

        $error = $_SESSION['login_error'] ?? "";
        unset($_SESSION['login_mensaje']);
        unset($_SESSION['login_error']);
        
        view('login', [
            'pageTitle' => 'Iniciar Sesión', 
            'mensaje' => $mensaje, 
            'error' => $error,
            'hide_layout_elements' => true,
            'mostrar_header_admin' => true
        ]);
    }

    public function procesarLogin() {
        if (session_status() === PHP_SESSION_NONE) session_start();

        // OBTENER LA IP DEL CLIENTE
        $IpCliente = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
        if (strpos($IpCliente, ',') !== false) {
            $PartesIp = explode(',', $IpCliente);
            $IpCliente = trim($PartesIp[0]);
        }

        // VERIFICAR SI LA IP ESTA BLOQUEADA
        $ResultadoBloqueo = $this->verificarBloqueoIp($IpCliente);
        if ($ResultadoBloqueo['bloqueado']) {
            $Horas = floor($ResultadoBloqueo['tiempo_restante'] / 3600);
            $Minutos = ceil(($ResultadoBloqueo['tiempo_restante'] % 3600) / 60);
            $_SESSION['login_mensaje'] = "DEMASIADOS INTENTOS FALLIDOS. ACCESO BLOQUEADO. INTENTE EN " . ($Horas > 0 ? "$Horas HORAS Y " : "") . "$Minutos MINUTOS.";
            header("Location: " . BASE_URL . "login");
            exit();
        }

        $username = $_POST['nombre_usuario'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';
        $mensaje = "";

        if (empty($username) || empty($contrasena)) {
            $mensaje = "DEBE INGRESAR USUARIO Y CONTRASENA.";
        } else {
            try {
                $authModel = new AuthModel();
                $usuario = $authModel->getUserByUsername($username);
                
                if ($usuario && password_verify($contrasena, $usuario['password'])) {
                    // RESETEAR CONTADOR DE INTENTOS FALLIDOS AL INICIAR SESION CON EXITO
                    $this->resetearIntentosIp($IpCliente);

                    // --- SEGURIDAD: REGENERACION DE ID DE SESION PARA EVITAR FIXATION ---
                    session_regenerate_id(true);

                    $_SESSION['logueado'] = true;
                    $_SESSION['user_id'] = $usuario['id'];
                    $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
                    $_SESSION['rol'] = $usuario['rol'];
                    
                    header("Location: " . BASE_URL . "gestion");
                    exit();
                } else {
                    // REGISTRAR INTENTO FALLIDO
                    $this->registrarIntentoFallido($IpCliente);

                    // VALIDAR SI SE ALCANZO EL BLOQUEO INMEDIATAMENTE
                    $ResultadoBloqueoNuevo = $this->verificarBloqueoIp($IpCliente);
                    if ($ResultadoBloqueoNuevo['bloqueado']) {
                        $mensaje = "DEMASIADOS INTENTOS FALLIDOS. ACCESO BLOQUEADO POR 6 HORAS.";
                    } else {
                        $mensaje = "USUARIO O CONTRASENA INCORRECTOS.";
                    }
                }
            } catch (Exception $e) {
                $mensaje = "ERROR AL VERIFICAR CREDENCIALES: " . $e->getMessage();
            }
        }
        $_SESSION['login_mensaje'] = $mensaje;
        header("Location: " . BASE_URL . "login");
        exit();
    }

    public function mostrarCambiarContrasena() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: " . BASE_URL . "login");
            exit();
        }

        $authModel = new AuthModel();
        $usuarios = [];
        if ($_SESSION['rol'] == 1) { // Si es Admin, traer todos los usuarios
            $usuarios = $authModel->getAllUsuarios();
        }

        $mensaje_cambio = $_SESSION['mensaje_cambio'] ?? '';
        $errores = $_SESSION['errores_cambio'] ?? [];
        unset($_SESSION['mensaje_cambio']);
        unset($_SESSION['errores_cambio']);

        view('cambiar_contrasena', [
            'pageTitle' => 'Gestion de Usuarios', 
            'mensaje_cambio' => $mensaje_cambio, 
            'errores' => $errores,
            'usuarios' => $usuarios,
            'hide_layout_elements' => true
        ]);
    }

    public function procesarCambiarContrasena() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: " . BASE_URL . "login");
            exit();
        }

        $authModel = new AuthModel();

        $userId = $_SESSION['user_id'];
        $contrasena_actual = $_POST['contrasena_actual'] ?? '';
        $nueva_contrasena = $_POST['nueva_contrasena'] ?? '';
        $confirmar_contrasena = $_POST['confirmar_contrasena'] ?? '';
        $errores = [];

        $storedHashedPassword = $authModel->getStoredPassword($userId);
        if (!$storedHashedPassword || !password_verify($contrasena_actual, $storedHashedPassword)) {
            $errores[] = "La contraseña actual es incorrecta.";
        }
        
        if (strlen($nueva_contrasena) < 4) {
            $errores[] = "La nueva contraseña debe tener al menos 4 caracteres.";
        }
        
        if ($nueva_contrasena !== $confirmar_contrasena) {
            $errores[] = "Las contraseñas no coinciden.";
        }
        
        if (empty($errores)) {
            $nueva_contrasena_hash = password_hash($nueva_contrasena, PASSWORD_DEFAULT);
            if ($authModel->updatePassword($userId, $nueva_contrasena_hash)) {
                $_SESSION['mensaje_cambio'] = "Contraseña actualizada correctamente.";
                header("Location: " . BASE_URL . "gestion");
                exit();
            } else {
                $errores[] = "Error interno al actualizar la contraseña.";
            }
        }
        
        $_SESSION['errores_cambio'] = $errores;
        header("Location: " . BASE_URL . "cambiar-contrasena");
        exit();
    }

    public function procesarAltaUsuario() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true || $_SESSION['rol'] != 1) {
            header("Location: " . BASE_URL . "login");
            exit();
        }

        $username = trim($_POST['nuevo_usuario'] ?? '');

        $password = $_POST['nueva_contrasena_usuario'] ?? '';
        $rol = (int)($_POST['rol_usuario'] ?? 2);
        $errores = [];

        if (empty($username) || strlen($username) < 4) {
            $errores[] = "El nombre de usuario debe tener al menos 4 caracteres.";
        }
        if (strlen($password) < 4) {
            $errores[] = "La contraseña debe tener al menos 4 caracteres.";
        }

        if (empty($errores)) {
            $authModel = new AuthModel();
            $hash = password_hash($password, PASSWORD_DEFAULT);
            if ($authModel->createUsuario($username, $hash, $rol)) {
                $_SESSION['mensaje_cambio'] = "Usuario '{$username}' creado correctamente.";
            } else {
                $_SESSION['errores_cambio'] = ["Error al crear el usuario. ¿Quizás el nombre ya existe?"];
            }
        } else {
            $_SESSION['errores_cambio'] = $errores;
        }

        header("Location: " . BASE_URL . "cambiar-contrasena");
        exit();
    }

    public function logout() {
        // La sesión ya se inicia en index.php
        $_SESSION = array();
        session_destroy();
        header("Location: " . BASE_URL . "login");
        exit();
    }

    /**
     * OBTENER LA RUTA DEL ARCHIVO DE INTENTOS PARA UNA IP ESPECIFICA.
     */
    private function obtenerRutaArchivoIntentos(string $IpCliente): string {
        $DirectorioIntentos = __DIR__ . '/../../src/tmp/intentos_login';
        if (!is_dir($DirectorioIntentos)) {
            mkdir($DirectorioIntentos, 0777, true);
        }
        $HashIp = md5($IpCliente);
        return $DirectorioIntentos . '/' . $HashIp . '.json';
    }

    /**
     * VERIFICA SI UNA DIRECCION IP ESTA BLOQUEADA.
     * RETORNA UN ARRAY CON EL ESTADO Y EL TIEMPO RESTANTE EN SEGUNDOS.
     */
    private function verificarBloqueoIp(string $IpCliente): array {
        $RutaArchivo = $this->obtenerRutaArchivoIntentos($IpCliente);
        if (!file_exists($RutaArchivo)) {
            return ['bloqueado' => false, 'tiempo_restante' => 0];
        }

        $Contenido = file_get_contents($RutaArchivo);
        $Datos = json_decode($Contenido, true);
        if (!$Datos) {
            return ['bloqueado' => false, 'tiempo_restante' => 0];
        }

        $TiempoActual = time();
        $BloqueadoHasta = $Datos['bloqueado_hasta'] ?? 0;

        if ($BloqueadoHasta > $TiempoActual) {
            return [
                'bloqueado' => true, 
                'tiempo_restante' => $BloqueadoHasta - $TiempoActual
            ];
        }

        // SI EL TIEMPO DE BLOQUEO YA PASO, SE LIMPIA EL BLOQUEO PERO MANTIENE INTENTOS EN 0
        if ($BloqueadoHasta > 0 && $TiempoActual >= $BloqueadoHasta) {
            $Datos['intentos'] = 0;
            $Datos['bloqueado_hasta'] = 0;
            file_put_contents($RutaArchivo, json_encode($Datos));
        }

        return ['bloqueado' => false, 'tiempo_restante' => 0];
    }

    /**
     * REGISTRA UN INTENTO FALLIDO DE INICIO DE SESION.
     */
    private function registrarIntentoFallido(string $IpCliente): void {
        $RutaArchivo = $this->obtenerRutaArchivoIntentos($IpCliente);
        $Intentos = 0;
        $BloqueadoHasta = 0;

        if (file_exists($RutaArchivo)) {
            $Contenido = file_get_contents($RutaArchivo);
            $Datos = json_decode($Contenido, true);
            if ($Datos) {
                $Intentos = $Datos['intentos'] ?? 0;
            }
        }

        $Intentos++;

        if ($Intentos >= 3) {
            // BLOQUEO POR 6 HORAS (6 * 3600 SEGUNDOS)
            $BloqueadoHasta = time() + (6 * 3600);

            // ENVIAR ALERTA DE SEGURIDAD POR MAIL AL LOGRAR EL BLOQUEO
            try {
                MailService::enviarAvisoBloqueoIp($IpCliente);
            } catch (Exception $e) {
                error_log("ERROR AL INTENTAR ENVIAR MAIL DE SEGURIDAD DESDE AUTHCONTROLLER: " . $e->getMessage());
            }
        }

        $NuevosDatos = [
            'intentos' => $Intentos,
            'bloqueado_hasta' => $BloqueadoHasta
        ];

        file_put_contents($RutaArchivo, json_encode($NuevosDatos));
    }

    /**
     * RESETEA EL CONTADOR DE INTENTOS FALLIDOS CUANDO EL LOGIN ES EXITOSO.
     */
    private function resetearIntentosIp(string $IpCliente): void {
        $RutaArchivo = $this->obtenerRutaArchivoIntentos($IpCliente);
        if (file_exists($RutaArchivo)) {
            unlink($RutaArchivo);
        }
    }
}
