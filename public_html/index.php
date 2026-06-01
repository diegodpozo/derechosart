<?php

/**
 * FRONT CONTROLLER - DERECHOS ART
 * CENTRALIZA TODAS LAS SOLICITUDES Y LAS DERIVA A LOS CONTROLADORES CORRESPONDIENTES.
 */

// --- SEGURIDAD: DESACTIVAR MOSTRAR ERRORES EN PANTALLA ---
error_reporting(E_ALL);
ini_set('display_errors', 0); 
ini_set('log_errors', 1);

// CONFIGURACION GLOBAL DE ZONA HORARIA
date_default_timezone_set('America/Argentina/Buenos_Aires');

// --- 1. CALCULAR RUTA BASE (Universal Local/Hostinger) ---
$script_name = $_SERVER['SCRIPT_NAME'];
$base_path = str_replace(['index.php', 'INDEX.PHP'], '', $script_name);

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_path); // Usamos ruta relativa para máxima compatibilidad
}

// --- 2. CONFIGURACION DE SESION ---
$is_localhost = ($_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '::1' || $_SERVER['HTTP_HOST'] === 'localhost');
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
             (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');

if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        // En localhost desactivamos 'secure' para que funcione con SSL tachado
        'secure' => ($is_localhost) ? false : $is_https,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

// --- SEGURIDAD: GENERAR TOKEN CSRF SI NO EXISTE ---
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// ===== PUNTO DE ENTRADA UNICO (FRONT CONTROLLER) =====

// --- 3. Carga de archivos base ---
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/src/helpers.php';

// --- 4. Sistema de Enrutamiento (Router) ---
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');

// Limpiar la base del path de la URL para obtener la ruta "pura"
if ($base_path !== '/' && strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

// Normalizar: siempre empieza con / y no termina con /
$request_uri = '/' . ltrim($request_uri, '/');
if ($request_uri !== '/') {
    $request_uri = rtrim($request_uri, '/');
}

// Limpiar rastro de index.php
$request_uri = str_replace('/index.php', '', $request_uri);
if (empty($request_uri)) $request_uri = '/';

// --- 5. Carga de Controladores ---
require_once __DIR__ . '/aplicacion/Controladores/PaginasControlador.php';
require_once __DIR__ . '/aplicacion/Controladores/AuthController.php';
require_once __DIR__ . '/aplicacion/Controladores/GestionController.php';
require_once __DIR__ . '/aplicacion/Controladores/ApiController.php';
require_once __DIR__ . '/aplicacion/Controladores/UbicacionController.php';

$paginas = new PaginasControlador();
$auth = new AuthController();
$gestion = new GestionController();
$api = new ApiController();
$ubicacion = new UbicacionController();

// --- 6. Despacho de Rutas ---
switch ($request_uri) {
    case '/':
    case '/inicio':
        $paginas->Inicio();
        break;

    case '/quienes-somos':
        $paginas->QuienesSomos();
        break;
        
    case '/accidentes-de-trabajo':
        $paginas->Accidentes();
        break;

    case '/despidos':
        $paginas->Despidos();
        break;

    case '/enfermedades-profesionales':
        $paginas->Enfermedades();
        break;

    case '/calculadora-indemnizacion':
        $paginas->CalculadoraIndemnizacion();
        break;

    case '/calculadora-despidos':
        $paginas->CalculadoraDespidos();
        break;

    case '/calculadora-accidentes':
    case '/calculadora': 
        $paginas->CalculadoraAccidentes();
        break;

    case '/comisiones-medicas':
        $paginas->ComisionesMedicas();
        break;

    case '/que-hacer':
        $paginas->QueHacer();
        break;

    case '/que-hacer-accidente':
        $paginas->QueHacerAccidente();
        break;

    case '/cual-es-mi-art':
        $paginas->CualEsMiArt();
        break;

    case '/formularios-srt':
        $paginas->FormulariosSrt();
        break;

    case '/buscador-comisiones':
        $paginas->BuscadorComisiones();
        break;

    case '/tabla-incapacidad':
        $paginas->TablaIncapacidad();
        break;

    case '/contacto':
        $paginas->Contacto();
        break;

    case '/faq':
        $paginas->Faq();
        break;

    case '/zonas-atencion':
        $paginas->ZonasAtencion();
        break;

    case '/gestion':
        $gestion->mostrarPanel();
        break;

    case '/gestion/eliminados':
        $gestion->mostrarEliminados();
        break;

    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->procesarLogin();
        } else {
            $auth->mostrarLogin();
        }
        break;

    case '/logout':
        $auth->logout();
        break;

    case '/cambiar-contrasena':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->procesarCambiarContrasena();
        } else {
            $auth->mostrarCambiarContrasena();
        }
        break;

    case '/usuarios/alta':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->procesarAltaUsuario();
        }
        break;

    // --- API ENDPOINTS ---
    case '/api/arts':
        $api->getArtList();
        break;

    case '/api/eliminar_art':
        $api->handleDeleteArt();
        break;

    case '/api/agregar-art':
        $api->handleAgregarArt();
        break;

    case '/api/localidades':
        $ubicacion->getJsonLocalidadesByProvinciaId();
        break;

    case '/api/sincronizar-ubicaciones':
        $ubicacion->sincronizarUbicaciones();
        break;

    case '/api/consultas/nueva':
        $api->procesarNuevaConsulta();
        break;

    case '/api/consultas/toggle-leido':
        $api->toggleEstadoLeido();
        break;

    case '/api/consultas/asignar':
        $api->handleAsignarConsulta();
        break;

    case '/api/datos-cliente':
        $api->handleDatosCliente();
        break;

    case '/api/cliente/actualizar':
        $api->actualizarCliente();
        break;

    case '/api/eliminar-consulta':
        $api->handleEliminarConsulta();
        break;

    case '/api/restaurar-consulta':
        $api->handleRestaurarConsulta();
        break;

    default:
        // MANEJO DE LANDINGS DINAMICAS (EJ: /abogados-art-palermo)
        if (preg_match('/^\/abogados-art-([a-z0-9-]+)$/', $request_uri, $matches)) {
            $slug = 'abogados-art-' . $matches[1];
            $paginas->LandingZona($slug);
        } else {
            http_response_code(404);
            $MetaTitulo = "404 - Página no encontrada | DerechosART";
            require_once __DIR__ . '/vistas/encabezado.php';
            echo '<main class="contenedor centro py-60"><h1>404</h1><p>LA PAGINA NO EXISTE.</p><a href="'.BASE_URL.'" class="btn btn-amarillo">VOLVER</a></main>';
            require_once __DIR__ . '/vistas/pie_pagina.php';
        }
        break;
}

exit();
