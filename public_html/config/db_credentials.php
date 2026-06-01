<?php
/**
 * CREDENCIALES DE BASE DE DATOS
 * DETECCION AUTOMATICA DE ENTORNO (LOCAL VS HOSTINGER)
 */

$is_local = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1');

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
        'DB_PASS' => 'Adridie2332@'
    ];
}
