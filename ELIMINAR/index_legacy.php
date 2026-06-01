<?php
/**
 * PUNTODE ENTRADA UNICO (FRONT CONTROLLER)
 * Este archivo centraliza todas las peticiones y las deriva a los controladores correspondientes.
 */

// --- CONFIGURACION DE SESION ---
// Forzar el inicio de sesion de la manera mas compatible posible
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- 1. Carga de archivos base ---
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/src/helpers.php';

// --- 2. Sistema de Enrutamiento (Router) ---
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$script_name = $_SERVER['SCRIPT_NAME'];
$base_path = dirname($script_name);

// Limpiar el path de la URL (quitar query string)
$path = parse_url($request_uri, PHP_URL_PATH);

// Si el proyecto NO está en la raíz, quitar el prefijo
if ($base_path !== '/' && $base_path !== '\\' && $base_path !== '') {
    $path = str_replace($base_path, '', $path);
}

// Asegurar que el path siempre empiece con una barra / y sea consistente
if (strpos($path, '/') !== 0) {
    $path = '/' . $path;
}

// Ruta por defecto
if ($path === '' || $path === '/') {
    $path = '/inicio';
}

// Definir constante BASE_URL para usar en las vistas
define('BASE_URL', rtrim($base_path, '/\\'));

switch ($path) {
    case '/inicio':
        require_once __DIR__ . '/src/Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        exit();
        break;

    case '/calculadora':
        require_once __DIR__ . '/src/Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->calculadora();
        exit();
        break;

    case '/gestion':
        require_once __DIR__ . '/src/Controllers/GestionController.php';
        $controller = new GestionController();
        $controller->mostrarPanel();
        exit();
        break;

    case '/gestion/eliminados':
        require_once __DIR__ . '/src/Controllers/GestionController.php';
        $controller = new GestionController();
        $controller->mostrarEliminados();
        exit();
        break;

    case '/login':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->procesarLogin();
        } else {
            $controller->mostrarLogin();
        }
        exit();
        break;

    case '/logout':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        exit();
        break;

    case '/cambiar-contrasena':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->procesarCambiarContrasena();
        } else {
            $controller->mostrarCambiarContrasena();
        }
        exit();
        break;

    case '/usuarios/alta':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->procesarAltaUsuario();
        exit();
        break;

    // --- API ENDPOINTS ---
    case '/api/arts': // Según usa js/gestiondb.js L319
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->getArtList();
        exit();
        break;

    case '/api/localidades': // Según usa js/gestiondb.js L284
        require_once __DIR__ . '/src/Controllers/UbicacionController.php';
        $ubicacionController = new UbicacionController();
        $ubicacionController->getJsonLocalidadesByProvinciaId();
        exit();
        break;

    case '/api/sincronizar-ubicaciones':
        require_once __DIR__ . '/src/Controllers/UbicacionController.php';
        $ubicacionController = new UbicacionController();
        $ubicacionController->sincronizarUbicaciones();
        exit();
        break;

    case '/api/datos-cliente':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleDatosCliente();
        exit();
        break;

    case '/api/eliminar-consulta':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleEliminarConsulta();
        exit();
        break;

    case '/api/restaurar-consulta':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleRestaurarConsulta();
        exit();
        break;

    case '/api/consultas/nueva':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->procesarNuevaConsulta();
        exit();
        break;

    case '/api/cliente/actualizar':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->actualizarCliente();
        exit();
        break;

    case '/api/agregar-art':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleAgregarArt();
        exit();
        break;

    case '/api/eliminar_art':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleDeleteArt();
        exit();
        break;

    case '/api/consultas/toggle-leido':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->toggleEstadoLeido();
        exit();
        break;

    case '/api/consultas/asignar':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->handleAsignarConsulta();
        exit();
        break;

    case '/api/usuarios-list':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->getUsuariosList();
        exit();
        break;

    default:
        // Opcional: registrar ruta no encontrada para depuración
        // error_log("404 Not Found: " . $path);
        require_once __DIR__ . '/src/Views/404.php';
        exit();
        break;
}
