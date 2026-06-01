<?php
/**
 * FRONT CONTROLLER PARA LANDINGS POR BARRIO
 * ESTE ARCHIVO PERMITE GENERAR DINAMICAMENTE MILES DE LANDINGS 
 * SIN NECESIDAD DE CREAR ARCHIVOS FISICOS POR CADA BARRIO.
 */

// 1. CALCULAR RUTA BASE RELATIVA (Universal Local/Hostinger)
$script_name = $_SERVER['SCRIPT_NAME']; // ej: /landings/index.php
$base_path = str_replace('landings/index.php', '', $script_name);

if (!defined('BASE_URL')) {
    define('BASE_URL', $base_path);
}

// 2. CONFIGURACION DE SESION (Sincronizada con index principal)
$is_localhost = ($_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '::1' || $_SERVER['HTTP_HOST'] === 'localhost');
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
             (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');

if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => ($is_localhost) ? false : $is_https,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

header('Content-Type: text/html; charset=utf-8');

// 3. CARGAR EL CONTROLADOR DESDE LA RAIZ (SUBIENDO UN NIVEL)
require_once __DIR__ . '/../aplicacion/Controladores/PaginasControlador.php';

// 4. CAPTURAR LA URL (EJ: abogados-art-palermo)
$Ruta = isset($_GET['url']) ? $_GET['url'] : '';

if (empty($Ruta)) {
    // SI ENTRAN A /landings/ SIN NADA, REDIRIGIR A INICIO
    header("Location: " . BASE_URL);
    exit();
}

// 5. PROCESAR LA LANDING DINAMICAMENTE
$Controlador = new PaginasControlador();

// --- RUTAS ESPECIALES ESTATICAS ---
if ($Ruta === 'abogados-art-despidos') {
    $Controlador->LandingZona('abogados-art-despidos');
    exit();
}

if ($Ruta === 'abogados-art-accidentes') {
    $Controlador->LandingZona('abogados-art-accidentes');
    exit();
}

// EL CONTROLADOR YA TIENE LA LOGICA PARA MANEJAR EL SLUG Y SETEAR ZONA_NOMBRE_SEO
$Controlador->LandingZona($Ruta);
exit();
