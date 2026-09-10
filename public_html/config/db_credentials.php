<?php
/**
 * CREDENCIALES DE BASE DE DATOS
 * DETECCION AUTOMATICA DE ENTORNO (LOCAL VS HOSTINGER)
 */

$is_local = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1');

// --- CARGA DE CREDENCIALES SENSIBLES (ARCHIVO IGNORADO POR GIT) ---
// LA CONTRASENA DE LA BD NO VIVE EN EL CODIGO VERSIONADO: VIVE EN credenciales.php.
$_credenciales = [];
if (file_exists(__DIR__ . '/credenciales.php')) {
    $_credenciales = require __DIR__ . '/credenciales.php';
}
$_dbPass = $_credenciales['DB_PASS'] ?? 'REEMPLAZAR_EN_config/credenciales.php';
unset($_credenciales);

if ($is_local) {
    return [
        'DB_HOST' => 'localhost',
        'DB_NAME' => 'registro_consultas',
        'DB_USER' => 'root',
        'DB_PASS' => ''
    ];
} else {
    // DATOS DE HOSTINGER SEGUN TUS NOTAS
    return [
        'DB_HOST' => 'localhost',
        'DB_NAME' => 'u538722186_gestion_client',
        'DB_USER' => 'u538722186_gestion_client',
        'DB_PASS' => $_dbPass
    ];
}
