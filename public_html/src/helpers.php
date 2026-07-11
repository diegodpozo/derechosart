<?php

/**
 * Carga una vista y le pasa datos, integrando el layout (encabezado/pie).
 *
 * @param string $viewName El nombre del archivo de la vista (sin .php) dentro de vistas/paginas/
 * @param array $data Un array asociativo de datos para extraer en la vista.
 */
function view(string $viewName, array $data = []) {
    // Convertir las claves del array en variables disponibles para las vistas.
    extract($data);

    // Preparar variables esperadas por encabezado.php
    $MetaTitulo = $pageTitle ?? $MetaTitulo ?? 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART';
    $MetaDescripcion = $MetaDescripcion ?? 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales.';
    $MetaKeywords = $MetaKeywords ?? 'abogados accidentes de trabajo, reclamos art, estudio juridico laboral';
    $MetaCanonical = $MetaCanonical ?? (defined('BASE_URL') ? BASE_URL . $viewName : 'https://derechosart.com.ar/');
    $hide_layout_elements = $hide_layout_elements ?? false;
    $ClaseBody = $ClaseBody ?? ($hide_layout_elements ? 'body-gestion' : 'interna');

    // Ruta al archivo de la vista específica.
    $viewPath = __DIR__ . "/../vistas/paginas/{$viewName}.php";

    // Verificación de existencia.
    if (!file_exists($viewPath)) {
        http_response_code(500);
        echo "Error: No se encontró el archivo de la vista: {$viewName}.php";
        return;
    }
    
    // Incluir encabezado (layout superior)
    require_once __DIR__ . '/../vistas/encabezado.php';

    // Incluir la vista específica
    require $viewPath;

    // Incluir pie de página (layout inferior)
    require_once __DIR__ . '/../vistas/pie_pagina.php';
}

/**
 * Formatea un número con apóstrofo como separador de miles.
 */
function format_number($number) {
    if (!is_numeric($number) || $number === null) {
        return 'N/A';
    }
    return number_format($number, 0, ',', "'");
}

/**
 * Formatea una fecha para mostrarla correctamente.
 */
function convertir_fecha_buenos_aires(string $fecha): string {
    if (empty($fecha)) return 'N/A';
    try {
        $dateTime = new DateTime($fecha);
        return $dateTime->format('Y-m-d H:i');
    } catch (Exception $e) {
        return $fecha; 
    }
}

function distanciaHaversine($lat1, $lon1, $lat2, $lon2) {
    $radioTierra = 6371;
    $dlat = deg2rad($lat2 - $lat1);
    $dlon = deg2rad($lon2 - $lon1);
    $a = sin($dlat / 2) * sin($dlat / 2)
       + cos(deg2rad($lat1)) * cos(deg2rad($lat2))
       * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    return $radioTierra * $c;
}

function cargarCoordenadasLocalidades() {
    $archivo = __DIR__ . '/../config/coordenadas_localidades.json';
    if (!file_exists($archivo)) {
        return [];
    }
    $contenido = file_get_contents($archivo);
    $datos = json_decode($contenido, true);
    return $datos ?: [];
}

function filtrarPorDistancia($localidades, $latCentro, $lonCentro, $coordenadas, $radioKm = 30) {
    $filtradas = [];
    foreach ($localidades as $loc) {
        $clave = $loc['nombre'] . '|' . $loc['provincia'];
        if (isset($coordenadas[$clave])) {
            $coord = $coordenadas[$clave];
            $distancia = distanciaHaversine($latCentro, $lonCentro, $coord['lat'], $coord['lon']);
            if ($distancia <= $radioKm) {
                $filtradas[] = $loc;
            }
        }
    }
    return $filtradas;
}
