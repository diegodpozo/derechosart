<?php

/**
 * CONFIGURACION DE CORREO ELECTRONICO
 * SEPARA LOCAL DE PRODUCCION BASADO EN MULTIPLES CRITERIOS ROBUSTOS.
 */

// --- DETECCION ROBUSTA DE ENTORNO ---
// Considera: hostname real, presencia de localhost, variables de entorno
$is_local = false;

if (isset($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['HTTP_HOST'];
    $is_local = (
        $host === 'localhost' || 
        $host === '127.0.0.1' || 
        strpos($host, 'localhost') === 0 ||
        strpos($host, '127.0.0.1') === 0 ||
        strpos($host, ':8080') !== false || // Puerto de desarrollo
        strpos($host, ':3000') !== false    // Puerto alternativo
    );
}

// --- FALLBACK: Si no se detecta bien, usar variable de entorno ---
if (getenv('APP_ENV') === 'local') {
    $is_local = true;
} elseif (getenv('APP_ENV') === 'production') {
    $is_local = false;
}

if ($is_local) {
    // === CONFIGURACION LOCAL (XAMPP/Docker) ===
    define('SMTP_HOST', 'smtp.hostinger.com');
    define('SMTP_USER', 'info@derechosart.com.ar');
    define('SMTP_PASS', 'Adridie2332@');
    define('SMTP_PORT', 465);
    define('SMTP_SECURE', 'ssl');
    
    // En LOCAL enviamos a un email de prueba diferente
    define('MAIL_DESTINATARIO', 'diegodpozo@hotmail.com'); // EMAIL DE TEST LOCAL
    define('MAIL_DESTINATARIO_SEGURIDAD', 'diegodpozo@hotmail.com'); // ALERTAS DE SEGURIDAD EN LOCAL
    
    // === LOGGING ACTIVADO EN LOCAL PARA DEBUGGEO ===
    define('SMTP_DEBUG', true);
} else {
    // === CONFIGURACION PRODUCCION (HOSTINGER) ===
    define('SMTP_HOST', 'smtp.hostinger.com');
    define('SMTP_USER', 'info@derechosart.com.ar');
    define('SMTP_PASS', 'Adridie2332@');
    define('SMTP_PORT', 465);
    define('SMTP_SECURE', 'ssl');
    
    // En PRODUCCION enviamos al email real de negocio
    define('MAIL_DESTINATARIO', 'rominakoniuch@gmail.com'); // EMAIL REAL DE NEGOCIO (CONSULTAS)
    define('MAIL_DESTINATARIO_SEGURIDAD', 'diegodpozo@hotmail.com'); // ALERTAS DE SEGURIDAD (FUERZA BRUTA)
    
    // === LOGGING DESACTIVADO EN PRODUCCION POR SEGURIDAD ===
    define('SMTP_DEBUG', false);
}

// === COMUN A AMBOS ENTORNOS ===
define('MAIL_FROM', 'info@derechosart.com.ar');
define('MAIL_FROM_NAME', 'SISTEMA DE CONSULTAS');
define('MAIL_REPLY_TO', 'info@derechosart.com.ar');

// === PARAMETROS SMTP ===
define('SMTP_TIMEOUT', 30); // segundos
define('SMTP_KEEPALIVE', false);

// === VARIABLE GLOBAL DE ENTORNO PARA REFERENCIA ===
define('IS_LOCAL_ENV', $is_local);
