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

    // PAGINAS ADMINISTRATIVAS (LOGIN, GESTION, CAMBIO DE CONTRASENA) NO SE INDEXAN
    if (!isset($MetaRobots) && $hide_layout_elements) {
        $MetaRobots = "noindex, nofollow";
    }

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

function zonasAtencionConfig() {
    return [
        'Ciudad Autónoma de Buenos Aires' => ['lat' => -34.6121, 'lng' => -58.3789, 'radio' => 90],
        'Buenos Aires'                    => ['lat' => -34.6121, 'lng' => -58.3789, 'radio' => 90],
        'Santa Fe'                        => ['lat' => -32.9452, 'lng' => -60.6523, 'radio' => 30],
        'Neuquén'                         => ['lat' => -38.9516, 'lng' => -68.0591, 'radio' => 30],
        'Río Negro'                       => ['lat' => -38.9516, 'lng' => -68.0591, 'radio' => 30],
        'Salta'                           => ['lat' => -24.7797, 'lng' => -65.4058, 'radio' => 30],
        'Córdoba'                         => ['lat' => -31.4147, 'lng' => -64.1869, 'radio' => 30],
        'Mendoza'                         => ['lat' => -32.8833, 'lng' => -68.8397, 'radio' => 30],
    ];
}

function esProvinciaZonaAtencion($nombre) {
    $zonas = zonasAtencionConfig();
    return isset($zonas[$nombre]);
}

// ============================================================
// FUENTE UNICA DE ZONAS DE ATENCION
// ============================================================

/**
 * CARGA contenido_zonas.json Y NORMALIZA TODAS LAS CLAVES A GUION NORMAL
 * (neuquen_y_rio_negro -> neuquen-y-rio-negro)
 */
function cargarZonasContenido() {
    static $zonasCache = null;
    if ($zonasCache !== null) {
        return $zonasCache;
    }
    $ruta = __DIR__ . '/../config/contenido_zonas.json';
    $zonasCache = [];
    if (file_exists($ruta)) {
        $crudo = json_decode(file_get_contents($ruta), true) ?? [];
        foreach ($crudo as $clave => $valor) {
            $zonasCache[str_replace('_', '-', $clave)] = $valor;
        }
    }
    return $zonasCache;
}

/**
 * ZONAS ESPECIALES (SIEMPRE INDEXABLES): slug => nombre de display
 */
function zonasEspecialesConfig() {
    return [
        'caba-y-gba' => 'CABA y GBA',
        'neuquen-y-rio-negro' => 'Neuquén y Río Negro',
        'rosario' => 'Rosario',
        'santa-fe' => 'Santa Fe',
        'cordoba' => 'Córdoba',
        'mendoza' => 'Mendoza',
        'alberdi' => 'Alberdi',
        'salta' => 'Salta',
    ];
}

/**
 * MAPA DE ACENTOS PARA CONVERTIR SLUG EN NOMBRE DE DISPLAY (FUENTE UNICA)
 */
function mapaAcentosZonas() {
    return [
        "Caba" => "CABA", "Gba" => "GBA", " Y " => " y ", " O " => " o ",
        "Lanus" => "Lanús", "Nunez" => "Núñez", "Agronomia" => "Agronomía", "Constitucion" => "Constitución",
        "San Cristobal" => "San Cristóbal", "San Nicolas" => "San Nicolás", "Velez Sarsfield" => "Vélez Sarsfield",
        "Villa Ortuzar" => "Villa Ortúzar", "Villa Pueyrredon" => "Villa Pueyrredón", "Moron" => "Morón",
        "General Rodriguez" => "General Rodríguez", "Sarandi" => "Sarandí", "Adrogue" => "Adrogué",
        "Esteban Echeverria" => "Esteban Echeverría", "El Jaguel" => "El Jagüel", "La Union" => "La Unión",
        "Ramos Mejia" => "Ramos Mejía", "Gonzalez Catan" => "González Catán", "Jose C Paz" => "José C. Paz",
        "Neuquen" => "Neuquén", "Rio Negro" => "Río Negro", "Cordoba" => "Córdoba", "Tucuman" => "Tucumán",
        "Parana" => "Paraná", "Gualeguaychu" => "Gualeguaychú", "Junin" => "Junín", "Ituzaingo" => "Ituzaingó",
        "Garin" => "Garín", "Benavidez" => "Benavídez", "Martin" => "Martín", "Andres" => "Andrés",
        "Leon" => "León", "Suarez" => "Suárez", "Fray Luis Beltran" => "Fray Luis Beltrán", "Perez" => "Pérez",
        "Gomez" => "Gómez", "Pinero" => "Piñero", "Munoz" => "Muñoz", "Bolson" => "Bolsón",
        "Fernandez" => "Fernández"
    ];
}

/**
 * CONVIERTE UN SLUG DE ZONA EN NOMBRE DE DISPLAY (ej: "la-boca" -> "La Boca")
 */
function slugAZonaNombre($slug) {
    $nombre = ucwords(str_replace("-", " ", $slug));
    return str_ireplace(array_keys(mapaAcentosZonas()), array_values(mapaAcentosZonas()), $nombre);
}

/**
 * CLAVES JSON SIN LOCALIDAD EN BD: slug => ['coord_clave' => 'Nombre|Provincia']
 * SU NOMBRE DE DISPLAY YA SALE DE slugAZonaNombre() O DE LA ZONA ESPECIAL.
 */
function zonasJsonSinBDConfig() {
    return [
        'la-boca' => ['coord_clave' => 'Boca|Ciudad Autónoma de Buenos Aires'],
        'la-paternal' => ['coord_clave' => 'Paternal|Ciudad Autónoma de Buenos Aires'],
        'boulogne' => ['coord_clave' => 'Boulogne Sur Mer|Buenos Aires'],
        'acassuso' => ['coord_clave' => 'Acasusso|Buenos Aires'],
        'don-torcuato' => ['coord_clave' => 'Don Torcuato Este|Buenos Aires'],
        'jose-leon-suarez' => ['coord_clave' => 'Villa José León Suárez|Buenos Aires'],
        'villa-tesei' => ['coord_clave' => 'Villa Santos Tesei|Buenos Aires'],
        'william-morris' => ['coord_clave' => 'William C. Morris|Buenos Aires'],
        'villa-udaondo' => ['coord_clave' => 'Villa Gobernador Udadondo|Buenos Aires'],
        'parque-san-martin' => ['coord_clave' => 'Barrio Parque General San Martín|Buenos Aires'],
        'hudson' => ['coord_clave' => 'Guillermo Enrique Hudson|Buenos Aires'],
        'zeballos' => ['coord_clave' => 'Estanislao Severo Zeballos|Buenos Aires'],
        'laferrere' => ['coord_clave' => 'Gregorio de Laferrere|Buenos Aires'],
        'sol-y-verde' => ['coord_clave' => 'José C. Paz|Buenos Aires'],
        'alberdi' => ['coord_clave' => 'Rosario|Santa Fe'],
        'centro' => ['coord_clave' => 'Rosario|Santa Fe'],
        'fisherton' => ['coord_clave' => 'Rosario|Santa Fe'],
        'neuquen-y-rio-negro' => ['coord_clave' => 'Neuquén|Neuquén'],
        'fernandez-oro' => ['coord_clave' => 'General Fernández Oro|Río Negro'],
    ];
}

/**
 * FUENTE UNICA DE ZONAS DE ATENCION.
 * DEVUELVE ARRAY AGRUPADO POR PROVINCIA, CADA ZONA CON:
 * id, nombre, provincia, provincia_id, slug, lat, lon, tiene_contenido, es_especial
 */
function obtenerZonasDeAtencion() {
    require_once __DIR__ . '/../aplicacion/Modelos/UbicacionModel.php';
    $modelo = new UbicacionModel();
    $zonasPorProvincia = $modelo->getLocalidadesValidasParaZonas();
    $coordenadas = cargarCoordenadasLocalidades();
    $contenido = cargarZonasContenido();
    $especiales = zonasEspecialesConfig();

    $resultado = [];
    foreach ($zonasPorProvincia as $provincia => $localidades) {
        foreach ($localidades as $loc) {
            $clave = $loc['nombre'] . '|' . $provincia;
            $resultado[$provincia][] = [
                'id' => $loc['id'],
                'nombre' => $loc['nombre'],
                'provincia' => $provincia,
                'provincia_id' => $loc['provincia_id'],
                'slug' => $loc['slug'],
                'lat' => $coordenadas[$clave]['lat'] ?? null,
                'lon' => $coordenadas[$clave]['lon'] ?? null,
                'tiene_contenido' => isset($contenido[$loc['slug']]),
                'es_especial' => isset($especiales[$loc['slug']]),
            ];
        }
    }

    // AGREGAR CLAVES JSON SIN LOCALIDAD EN BD (CON COORDS DE SU CIUDAD DE REFERENCIA)
    foreach (zonasJsonSinBDConfig() as $slug => $cfg) {
        list($nombreCoord, $provincia) = explode('|', $cfg['coord_clave']);
        $provinciaId = null;
        if (!empty($resultado[$provincia])) {
            $provinciaId = $resultado[$provincia][0]['provincia_id'];
        }
        $esEspecial = isset($especiales[$slug]);
        $resultado[$provincia][] = [
            'id' => null,
            'nombre' => $esEspecial ? $especiales[$slug] : slugAZonaNombre($slug),
            'provincia' => $provincia,
            'provincia_id' => $provinciaId,
            'slug' => $slug,
            'lat' => $coordenadas[$cfg['coord_clave']]['lat'] ?? null,
            'lon' => $coordenadas[$cfg['coord_clave']]['lon'] ?? null,
            'tiene_contenido' => true,
            'es_especial' => $esEspecial,
        ];
    }

    return $resultado;
}

/**
 * FILTRA ZONAS POR DISTANCIA USANDO LAS COORDENADAS EMBEBIDAS EN CADA ZONA
 */
function filtrarZonasPorDistancia($zonas, $latCentro, $lonCentro, $radioKm = 30) {
    $filtradas = [];
    foreach ($zonas as $zona) {
        if ($zona['lat'] === null || $zona['lon'] === null) {
            continue;
        }
        $distancia = distanciaHaversine($latCentro, $lonCentro, $zona['lat'], $zona['lon']);
        if ($distancia <= $radioKm) {
            $filtradas[] = $zona;
        }
    }
    return $filtradas;
}

/**
 * OBTIENE LA IP REAL DEL CLIENTE DE FORMA SEGURA.
 * PRIORIDAD: HEADER DE CLOUDFLARE (CF-CONNECTING-IP) Y LUEGO REMOTE_ADDR (IP DE NIVEL TCP, NO SPOOFEABLE).
 * NUNCA CONFIAR EN HTTP_CLIENT_IP NI X-Forwarded-For TOMADOS DE CABEZA: EL CLIENTE LOS PUEDE FALSIFICAR.
 */
function obtenerIpClienteReal(): string {
    $ipCandidata = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
    if (filter_var($ipCandidata, FILTER_VALIDATE_IP)) {
        return $ipCandidata;
    }
    return '0.0.0.0';
}

/**
 * VALIDA EL TOKEN CSRF ENVIADO POR HEADER (PANEL DE GESTION VIA gestiondb.js).
 * SI EL TOKEN NO ES VALIDO RESUELVE 403 Y SALTA. USAR EN ENDPOINTS DE TIPO POST.
 */
function verificarTokenCsrfHeader(): bool {
    $tokenRecibido = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
    $tokenSesion = $_SESSION['csrf_token'] ?? '';
    if ($tokenRecibido === '' || $tokenSesion === '' || !hash_equals($tokenSesion, $tokenRecibido)) {
        header('Content-Type: application/json');
        http_response_code(403);
        echo json_encode(['success' => false, 'message' => 'TOKEN CSRF INVALIDO.']);
        exit();
    }
    return true;
}
