<?php

/**
 * CONFIGURACION DE CORREO ELECTRONICO
 * SEPARA LOCAL DE PRODUCCION BASADO EN EL HOSTNAME.
 */

$is_local = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1');

if ($is_local) {
    // CONFIGURACION LOCAL (XAMPP)
    // PODES USAR LOS MISMOS DE HOSTINGER SI TU RED PERMITE SALIDA SMTP
    define('SMTP_HOST', 'smtp.hostinger.com');
    define('SMTP_USER', 'consultas@derechosartconsultas.com');
    define('SMTP_PASS', 'Rocaso0809@');
    define('SMTP_PORT', 465);
    define('SMTP_SECURE', 'ssl'); // O 'tls' PARA PUERTO 587
} else {
    // CONFIGURACION PRODUCCION (HOSTINGER)
    define('SMTP_HOST', 'smtp.hostinger.com');
    define('SMTP_USER', 'consultas@derechosartconsultas.com');
    define('SMTP_PASS', 'Rocaso0809@');
    define('SMTP_PORT', 465);
    define('SMTP_SECURE', 'ssl');
}

define('MAIL_FROM', 'consultas@derechosartconsultas.com');
define('MAIL_FROM_NAME', 'SISTEMA DE CONSULTAS');
define('MAIL_DESTINATARIO', 'diegodpozo2332@gmail.com');
