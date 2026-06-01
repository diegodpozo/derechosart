<?php

require_once __DIR__ . '/../Models/AuthModel.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../helpers.php';

class AuthController {

    public function mostrarLogin() {
        // La sesión ya se inicia en index.php
        $mensaje = $_SESSION['login_mensaje'] ?? "";
        $error = $_SESSION['login_error'] ?? "";
        unset($_SESSION['login_mensaje']);
        unset($_SESSION['login_error']);
        
        view('login', ['pageTitle' => 'Iniciar Sesión', 'mensaje' => $mensaje, 'error' => $error]);
    }

    public function procesarLogin() {
        if (session_status() === PHP_SESSION_NONE) session_start();

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
                    // --- SEGURIDAD: REGENERAR ID DE SESION (COMENTADO POR COMPATIBILIDAD) ---
                    // session_regenerate_id(true);

                    $_SESSION['logueado'] = true;
                    $_SESSION['user_id'] = $usuario['id'];
                    $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
                    $_SESSION['rol'] = $usuario['rol'];
                    
                    header("Location: " . BASE_URL . "/gestion");
                    exit();
                } else {
                    $mensaje = "USUARIO O CONTRASENA INCORRECTOS.";
                }
            } catch (Exception $e) {
                $mensaje = "ERROR AL VERIFICAR CREDENCIALES: " . $e->getMessage();
            }
        }
        $_SESSION['login_mensaje'] = $mensaje;
        header("Location: " . BASE_URL . "/login");
        exit();
    }

    public function mostrarCambiarContrasena() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: " . BASE_URL . "/login");
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
            'usuarios' => $usuarios
        ]);
    }

    public function procesarCambiarContrasena() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
            header("Location: " . BASE_URL . "/login");
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
                header("Location: " . BASE_URL . "/gestion");
                exit();
            } else {
                $errores[] = "Error interno al actualizar la contraseña.";
            }
        }
        
        $_SESSION['errores_cambio'] = $errores;
        header("Location: " . BASE_URL . "/cambiar-contrasena");
        exit();
    }

    public function procesarAltaUsuario() {
        if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true || $_SESSION['rol'] != 1) {
            header("Location: " . BASE_URL . "/login");
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

        header("Location: " . BASE_URL . "/cambiar-contrasena");
        exit();
    }

    public function logout() {
        // La sesión ya se inicia en index.php
        $_SESSION = array();
        session_destroy();
        header("Location: " . BASE_URL . "/login");
        exit();
    }
}
