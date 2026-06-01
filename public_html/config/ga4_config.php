<?php
/**
 * Google Analytics 4 - Configuración y Eventos del Servidor
 * Versión: 1.0
 * Descripción: Funciones helper para GA4 eventos desde PHP
 */

class GA4Event {
    private static $measurement_id = 'G-SBNESCYEYL';
    private static $api_key = ''; // Se configura después
    
    /**
     * Registra evento de GA4 en el frontend
     * @param string $eventName Nombre del evento
     * @param array $eventData Datos del evento
     */
    public static function trackEvent($eventName, $eventData = []) {
        $eventDataJson = json_encode($eventData);
        echo "<script>
        if (typeof gtag !== 'undefined') {
            gtag('event', '{$eventName}', {$eventDataJson});
        }
        </script>";
    }
    
    /**
     * Registra envío de formulario de contacto
     * @param string $categoria Categoría del formulario (accidentes, despidos, etc)
     * @param string $nombre Nombre de la persona
     */
    public static function trackContactForm($categoria, $nombre = '') {
        $eventData = [
            'event_category' => 'contacto',
            'categoria' => $categoria,
            'nombre' => substr($nombre, 0, 1), // Solo primer carácter por privacidad
            'timestamp' => date('c')
        ];
        self::trackEvent('form_submit', $eventData);
    }
    
    /**
     * Registra consulta guardada en base de datos
     * @param string $categoria Categoría (accidentes, despidos, enfermedades)
     * @param string $provincia Provincia
     */
    public static function trackConsultaGuardada($categoria, $provincia = '') {
        $eventData = [
            'event_category' => 'consulta',
            'categoria' => $categoria,
            'provincia' => $provincia,
            'timestamp' => date('c')
        ];
        self::trackEvent('consulta_guardada', $eventData);
    }
    
    /**
     * Registra error en formulario
     * @param string $errorType Tipo de error
     */
    public static function trackFormError($errorType) {
        $eventData = [
            'event_category' => 'error',
            'error_type' => $errorType,
            'timestamp' => date('c')
        ];
        self::trackEvent('form_error', $eventData);
    }
    
    /**
     * Registra acceso a página de gestión (para usuarios logueados)
     * @param string $pageType Tipo de página (panel, consultas, usuarios, etc)
     * @param string $userId ID del usuario (enmascarado)
     */
    public static function trackAdminAccess($pageType, $userId = '') {
        $eventData = [
            'event_category' => 'admin',
            'page_type' => $pageType,
            'timestamp' => date('c')
        ];
        self::trackEvent('admin_access', $eventData);
    }
    
    /**
     * Retorna el ID de medición
     */
    public static function getMeasurementId() {
        return self::$measurement_id;
    }
}

// Alias cortos para uso fácil
function ga4_track_event($eventName, $data = []) {
    GA4Event::trackEvent($eventName, $data);
}

function ga4_track_contact($categoria, $nombre = '') {
    GA4Event::trackContactForm($categoria, $nombre);
}

function ga4_track_consulta($categoria, $provincia = '') {
    GA4Event::trackConsultaGuardada($categoria, $provincia);
}

function ga4_track_error($errorType) {
    GA4Event::trackFormError($errorType);
}

function ga4_track_admin($pageType, $userId = '') {
    GA4Event::trackAdminAccess($pageType, $userId);
}
