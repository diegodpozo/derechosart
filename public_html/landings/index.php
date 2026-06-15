<?php
/**
 * CONTROLADOR DE REDIRECCION - DERECHOS ART
 * REDIRIGE 301 DE FORMA PERMANENTE TODAS LAS SOLICITUDES DESDE /landings/ HACIA LA RAIZ.
 */

$ScriptNombre = $_SERVER['SCRIPT_NAME'];
$RutaBase = str_replace('landings/index.php', '', $ScriptNombre);

if (!defined('BASE_URL')) {
    define('BASE_URL', $RutaBase);
}

$Ruta = isset($_GET['url']) ? $_GET['url'] : '';

if (!empty($Ruta)) {
    // SI CONTIENE RUTA, REDIRIGIR A LA NUEVA UBICACION EN LA RAIZ
    header("Location: " . BASE_URL . $Ruta, true, 301);
    exit();
} else {
    // SI NO CONTIENE RUTA, REDIRIGIR A LA HOMEPAGE
    header("Location: " . BASE_URL, true, 301);
    exit();
}
