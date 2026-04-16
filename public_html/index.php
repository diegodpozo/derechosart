<?php

// --- SEGURIDAD: DESACTIVAR MOSTRAR ERRORES EN PANTALLA ---
// Guardamos los errores en logs internos pero no los mostramos al usuario
error_reporting(E_ALL);
ini_set('display_errors', 0); 
ini_set('log_errors', 1);

// CONFIGURACION GLOBAL DE ZONA HORARIA
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Ajustar parámetros de cookie de sesión para mayor seguridad
$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
$cookieParams = [
    'lifetime' => 0,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'] ?? '',
    'secure' => $secure,
    'httponly' => true,
    'samesite' => 'Lax'
];
if (PHP_VERSION_ID >= 70300) {
    session_set_cookie_params($cookieParams);
} else {
    session_set_cookie_params(
        $cookieParams['lifetime'],
        $cookieParams['path'] . '; SameSite=' . $cookieParams['samesite'],
        $cookieParams['domain'],
        $cookieParams['secure'],
        $cookieParams['httponly']
    );
}

session_start();

// --- SEGURIDAD: GENERAR TOKEN CSRF SI NO EXISTE ---
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// ===== PUNTO DE ENTRADA UNICO (FRONT CONTROLLER) =====

// --- 1. Carga de archivos base ---
// Cargamos la configuración de la base de datos y los helpers.
// No se usan directamente aquí, pero los controladores los necesitarán.
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/src/helpers.php';

// --- 2. Sistema de Enrutamiento (Router) Básico ---
// Obtenemos la URL solicitada, sin query string.
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');

// Obtenemos la base del script actual (ej. /gestion_clientes/public/index.php)
$script_name = $_SERVER['SCRIPT_NAME'];

// Calculamos la base del directorio de la aplicación (ej. /gestion_clientes/public)
$base_path = str_replace('/index.php', '', $script_name);

// Definimos la URL base completa
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_path;
define('BASE_URL', $base_url);

// Eliminamos la base del path de la URL solicitada para obtener la ruta "limpia"
// Aseguramos que la ruta limpia siempre empiece con '/'
if (strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

// Si después de la limpieza la URI está vacía, asumimos que es la raíz.
if (empty($request_uri)) {
    $request_uri = '/';
}

// NUEVA LÍNEA: Eliminar '/index.php' si todavía está al principio (sin .htaccess)
if (strpos($request_uri, '/index.php') === 0) {
    $request_uri = substr($request_uri, strlen('/index.php'));
}

// --- 3. Definición de Rutas y Despacho al Controlador ---
// Comparamos la URL solicitada con nuestras rutas definidas.
switch ($request_uri) {
    case '/':
    case '/index.php':
        // Carga el controlador de la página de inicio.
        require_once __DIR__ . '/src/Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        exit(); // Aseguramos el fin de la ejecución
        break;

    case '/calculadora':
        // Carga el controlador para la calculadora.
        require_once __DIR__ . '/src/Controllers/HomeController.php';
        $controller = new HomeController();
        $controller->calculadora();
        exit();
        break;

    case '/gestion':
        // Carga el controlador del panel de gestión.
        require_once __DIR__ . '/src/Controllers/GestionController.php';
        $controller = new GestionController();
        $controller->mostrarPanel();
        exit(); // Aseguramos el fin de la ejecución
        break;

    case '/gestion/eliminados':
        // Carga el controlador del panel de gestión para mostrar eliminados.
        require_once __DIR__ . '/src/Controllers/GestionController.php';
        $controller = new GestionController();
        $controller->mostrarEliminados();
        exit(); // Aseguramos el fin de la ejecución
        break;

    case '/login':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->procesarLogin();
        } else {
            $controller->mostrarLogin();
        }
        exit(); // Aseguramos el fin de la ejecución
        break;

    case '/logout':
        require_once __DIR__ . '/src/Controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        exit(); // Aseguramos el fin de la ejecución
        break;

    // --- API ENDPOINTS ---
    case '/api/arts':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->getArtList();
        exit();
        break;

    case '/api/csrf-refresh':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->csrfRefresh();
        exit();
        break;

    case '/api/localidades':
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

    case '/api/datos-cliente': // O considerar /api/cliente para ser más RESTful
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

    case '/api/consultas/nueva': // Nueva ruta para procesar nuevas consultas
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->procesarNuevaConsulta();
        exit();
        break;

    case '/api/cliente/actualizar': // Nueva ruta para actualizar clientes
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

    case '/api/usuarios':
        require_once __DIR__ . '/src/Controllers/ApiController.php';
        $apiController = new ApiController();
        $apiController->getUsuariosList();
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->procesarAltaUsuario();
        }
        exit();
        break;

    // --- MANEJO DE ARCHIVOS ESTÁTICOS ---
    // Si la solicitud es para un archivo existente en 'public' (css, js, etc.),
    // el servidor web (Apache/Nginx) debería servirlo directamente.
    // Si no, y la ruta no coincide con nada, es un 404.
    
    default:
        // Si la ruta no coincide con ninguna de las anteriores,
        // podría ser un archivo estático o un error 404.
        // Un servidor web bien configurado (ver .htaccess) no debería llegar aquí
        // para archivos CSS/JS/imágenes existentes.
        http_response_code(404);
        require_once __DIR__ . '/src/Views/404.php'; // Creamos una vista simple de 404
        exit(); // Aseguramos el fin de la ejecución
        break;
}