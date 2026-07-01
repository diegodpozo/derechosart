<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// DEFINIMOS LA RUTA BASE DEL PROYECTO DE FORMA ABSOLUTA
// Desde public_html/aplicacion/Services/ -> sube 2 niveles a public_html/
$basePath = dirname(__DIR__, 2); 

// CARGAMOS EL AUTOLOAD DE COMPOSER Y LA CONFIGURACION
require_once $basePath . '/vendor/autoload.php';
require_once $basePath . '/config/mail.php';

class MailService {

    /**
     * ENVIA UN MAIL DE AVISO POR UNA NUEVA CONSULTA RECIBIDA.
     * Con deteccion de entorno y logging mejorado.
     */
    public static function enviarAvisoNuevaConsulta(array $datos_consulta) {
        $mail = new PHPMailer(true);
        
        // HABILITAR DEBUG SEGUN EL ENTORNO
        if (defined('SMTP_DEBUG') && SMTP_DEBUG) {
            $mail->SMTPDebug = 2; // Verboso
            // REDIRIGIR DEBUG AL LOG DE ERRORES EN LUGAR DE LA PANTALLA
            $mail->Debugoutput = function($str, $level) {
                error_log("SMTP DEBUG [$level]: $str");
            };
        }

        try {
            // --- CONFIGURACION DEL SERVIDOR SMTP ---
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->Port       = SMTP_PORT;
            $mail->CharSet    = 'UTF-8';
            
            // --- TIMEOUT CONFIGURABLE ---
            if (defined('SMTP_TIMEOUT')) {
                $mail->Timeout = SMTP_TIMEOUT;
            }
            if (defined('SMTP_KEEPALIVE')) {
                $mail->SMTPKeepAlive = SMTP_KEEPALIVE;
            }

            // --- OPCIONES SSL EXTRA PARA HOSTINGER ---
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // --- DESTINATARIOS ---
            $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
            $mail->addAddress(MAIL_DESTINATARIO);
            if (defined('MAIL_REPLY_TO')) {
                $mail->addReplyTo(MAIL_REPLY_TO, MAIL_FROM_NAME);
            }

            // --- CABECERAS EXTRA PARA MEJORAR ENTREGABILIDAD ---
            $mail->XMailer = 'DerechosART System v3.5';
            $mail->Priority = 1;
            $mail->addCustomHeader('X-Priority', '1 (Highest)');
            $mail->addCustomHeader('Importance', 'High');
            $mail->addCustomHeader('X-MSMail-Priority', 'High');

            // --- CONTENIDO ---
            $mail->isHTML(true);
            $mail->Subject = '[NUEVA CONSULTA] ' . strtoupper(($datos_consulta['nombre'] ?? '') . ' ' . ($datos_consulta['apellido'] ?? ''));
            
            // CONFIGURAR HORA DE ARGENTINA (UTC-3)
            $fecha_ar = new DateTime('now', new DateTimeZone('America/Argentina/Buenos_Aires'));
            $timestamp_ar = $fecha_ar->format('d/m/Y H:i:s');

            $cuerpo = "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px;'>";
            $cuerpo .= "<h1 style='color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 10px;'>NUEVA CONSULTA RECIBIDA</h1>";
            $cuerpo .= "<p><strong>NOMBRE COMPLETO:</strong> " . strtoupper(($datos_consulta['nombre'] ?? '') . " " . ($datos_consulta['apellido'] ?? '')) . "</p>";
            $cuerpo .= "<p><strong>TELEFONO:</strong> " . ($datos_consulta['telefono'] ?? 'N/A') . "</p>";
            
            // MOSTRAR NOMBRE DE CATEGORIA
            $categoria = strtoupper($datos_consulta['nombre_categoria'] ?? 'OTRO');
            $cuerpo .= "<p><strong>CATEGORIA:</strong> " . $categoria . "</p>";
            
            // CAMPOS ESPECIFICOS SEGUN CATEGORIA
            if (strpos($categoria, 'ACCIDENTES') !== false) {
                $descripcion = strtoupper($datos_consulta['descripcion_lesion_acc'] ?? 'N/A');
                $cuerpo .= "<p><strong>DESCRIPCION DE LA LESION:</strong> " . $descripcion . "</p>";
            } elseif (strpos($categoria, 'ENFERMEDADES') !== false) {
                $descripcion_enf = strtoupper($datos_consulta['descripcion_lesion_enf'] ?? 'N/A');
                $antiguedad = $datos_consulta['antiguedad_laboral'] ?? 'N/A';
                $cuerpo .= "<p><strong>DESCRIPCION DE LA ENFERMEDAD:</strong> " . $descripcion_enf . "</p>";
                $cuerpo .= "<p><strong>ANTIGÜEDAD LABORAL:</strong> " . $antiguedad . " AÑOS</p>";
            } elseif (strpos($categoria, 'DESPIDOS') !== false) {
                $situacion = strtoupper($datos_consulta['situacion_actual'] ?? 'N/A');
                $fecha_ingreso = $datos_consulta['fecha_ingreso_desp'] ?? 'N/A';
                $cuerpo .= "<p><strong>SITUACION ACTUAL:</strong> " . $situacion . "</p>";
                $cuerpo .= "<p><strong>FECHA DE INGRESO AL TRABAJO:</strong> " . $fecha_ingreso . "</p>";
            }

            $cuerpo .= "<p><strong>FECHA DE REGISTRO:</strong> " . $timestamp_ar . "</p>";
            $cuerpo .= "<p style='background-color: #f9f9f9; padding: 10px; border-left: 5px solid #2c3e50;'>";
            $cuerpo .= "<a href='https://derechosart.com.ar/gestion' style='color: #2c3e50; text-decoration: none; font-weight: bold;'>INGRESA AL PANEL DE GESTION PARA VER LA FICHA COMPLETA.</a>";
            $cuerpo .= "</p>";
            $cuerpo .= "<hr>";
            $cuerpo .= "<p style='font-size: 12px; color: #7f8c8d;'>ESTE ES UN MENSAJE AUTOMATICO DEL SISTEMA DE DERECHOS ART CONSULTAS. | ENTORNO: " . (defined('IS_LOCAL_ENV') && IS_LOCAL_ENV ? 'LOCAL' : 'PRODUCCION') . "</p>";
            $cuerpo .= "</div>";

            $mail->Body = $cuerpo;
            $mail->AltBody = strip_tags($cuerpo);

            $mail->send();
            
            error_log("CORREO ENVIADO EXITOSAMENTE A: " . MAIL_DESTINATARIO);
            return true;
        } catch (\Throwable $e) {
            error_log("ERROR CRITICO AL ENVIAR EL MAIL: " . $e->getMessage());
            if ($mail->ErrorInfo) {
                error_log("DETALLE SMTP: " . $mail->ErrorInfo);
            }
            // Log adicional del entorno
            error_log("ENTORNO: " . (defined('IS_LOCAL_ENV') && IS_LOCAL_ENV ? 'LOCAL' : 'PRODUCCION'));
            error_log("HOST: " . ($_SERVER['HTTP_HOST'] ?? 'DESCONOCIDO'));
            error_log("DESTINATARIO INTENTADO: " . MAIL_DESTINATARIO);
            return false;
        }
    }

    /**
     * ENVIA UN CORREO DE ALERTA AL DETECTAR EL BLOQUEO DE UNA IP POR INTENTOS FALLIDOS.
     */
    public static function enviarAvisoBloqueoIp(string $IpCliente) {
        $mail = new PHPMailer(true);
        
        if (defined('SMTP_DEBUG') && SMTP_DEBUG) {
            $mail->SMTPDebug = 2;
            $mail->Debugoutput = function($str, $level) {
                error_log("SMTP DEBUG [$level]: $str");
            };
        }

        try {
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->Port       = SMTP_PORT;
            $mail->CharSet    = 'UTF-8';
            
            if (defined('SMTP_TIMEOUT')) {
                $mail->Timeout = SMTP_TIMEOUT;
            }

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
            $mail->addAddress(defined('MAIL_DESTINATARIO_SEGURIDAD') ? MAIL_DESTINATARIO_SEGURIDAD : MAIL_DESTINATARIO);

            $mail->XMailer = 'DerechosART System Security v3.5';
            $mail->Priority = 1;
            $mail->addCustomHeader('X-Priority', '1 (Highest)');
            $mail->addCustomHeader('Importance', 'High');

            $mail->isHTML(true);
            $mail->Subject = '[ALERTA DE SEGURIDAD] IP BLOQUEADA - DERECHOS ART';

            $fecha_ar = new DateTime('now', new DateTimeZone('America/Argentina/Buenos_Aires'));
            $timestamp_ar = $fecha_ar->format('d/m/Y H:i:s');

            $cuerpo = "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 2px solid #c0392b; padding: 20px;'>";
            $cuerpo .= "<h1 style='color: #c0392b; border-bottom: 2px solid #c0392b; padding-bottom: 10px;'>ALERTA DE SEGURIDAD: IP BLOQUEADA</h1>";
            $cuerpo .= "<p>SE DETECTO UN BLOQUEO DE ACCESO AL PANEL DE GESTION POR INTENTOS DE INGRESO FALLIDOS.</p>";
            $cuerpo .= "<p><strong>DIRECCION IP ORIGEN:</strong> " . $IpCliente . "</p>";
            $cuerpo .= "<p><strong>CANTIDAD DE INTENTOS FALLIDOS:</strong> 3</p>";
            $cuerpo .= "<p><strong>DURACION DEL BLOQUEO:</strong> 6 HORAS</p>";
            $cuerpo .= "<p><strong>FECHA Y HORA DEL BLOQUEO (ARGENTINA):</strong> " . $timestamp_ar . "</p>";
            $cuerpo .= "<hr>";
            $cuerpo .= "<p style='font-size: 12px; color: #7f8c8d;'>ESTE ES UN MENSAJE AUTOMATICO DEL SISTEMA DE SEGURIDAD DE DERECHOS ART.</p>";
            $cuerpo .= "</div>";

            $mail->Body = $cuerpo;
            $mail->AltBody = strip_tags($cuerpo);

            $mail->send();
            
            error_log("ALERTA DE SEGURIDAD ENVIADA POR IP BLOQUEADA: " . $IpCliente);
            return true;
        } catch (\Throwable $e) {
            error_log("ERROR AL ENVIAR ALERTA DE SEGURIDAD POR IP BLOQUEADA: " . $e->getMessage());
            return false;
        }
    }
}
