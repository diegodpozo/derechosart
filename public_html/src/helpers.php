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
 * SOLO LAS 6 ZONAS DONDE EL ESTUDIO TIENE OFICINA PROPIA
 */
function zonasEspecialesConfig() {
    return [
        'caba-y-gba' => 'CABA y GBA',
        'neuquen-y-rio-negro' => 'Neuquén y Río Negro',
        'rosario' => 'Rosario',
        'cordoba' => 'Córdoba',
        'mendoza' => 'Mendoza',
        'salta' => 'Salta',
    ];
}

/**
 * LISTA CANONICA DE NOMBRES DE ZONAS DE ATENCION (DERIVADA DE zonasEspecialesConfig).
 * FUENTE UNICA DE DISPLAY PARA HOME, QUIENES-SOMOS Y LLMS-FULL (NO DUPLICAR TEXTOS).
 */
function zonasAtencionNombres() {
    return array_values(zonasEspecialesConfig());
}

/**
 * ENUMERA LAS ZONAS EN ESPANOL NATURAL: "A, B, C y D".
 */
function enumerarZonasAtencion() {
    $nombres = zonasAtencionNombres();
    if (count($nombres) <= 1) {
        return implode(', ', $nombres);
    }
    $ultimo = array_pop($nombres);
    return implode(', ', $nombres) . ' y ' . $ultimo;
}

/**
 * MAPA DE ACENTOS PARA CONVERTIR SLUG EN NOMBRE DE DISPLAY (FUENTE UNICA)
 */
function mapaAcentosZonas() {
    return [
        "Caba" => "CABA", "Gba" => "GBA", " Y " => " y ",
        "Neuquen" => "Neuquén", "Rio Negro" => "Río Negro", "Cordoba" => "Córdoba",
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
 * VACIO: TODAS LAS ZONAS BARRIO FUERON ELIMINADAS, SOLO QUEDAN LAS 6 ZONAS PRINCIPALES
 */
function zonasJsonSinBDConfig() {
    return [];
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

/**
 * FUENTE UNICA DE FUENTES LEGALES OFICIALES (INFOLEG / ARGENTINA.GOB.AR).
 * PATRON: SOLO SE ENLAZAN MENCIONES PLAZOS/LEYES/ARTICULOS YA EXISTENTES EN EL CONTENIDO
 * (NUNCA SE AGREGA NUEVO CONTENIDO VISIBLE).
 * URLs = TEXTO OFICIAL VERIFICADO (dominio .gob.ar, indexadas por Google).
 * SI SE AGREGA UNA NUEVA LEY/PLAZO EN EL CONTENIDO, REGISTRARLA ACA (NUNCA hardcodear URLs en las vistas).
 */
function fuentesOficialesConfig(): array {
    return [
        'ley-24557' => [
            'patron' => '/Ley\s*(?:de\s*Riesgos\s*del\s*Trabajo\s*)?(?:N[°º]?\s*)?24\.?557|L\.?R\.?T\.?(?=\s)|24\.?557/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm',
            'etiqueta' => 'LRT - Ley 24.557',
        ],
        'ley-20744' => [
            'patron' => '/Ley\s*(?:de\s*Contrato\s*de\s*Trabajo\s*)?(?:N[°º]?\s*)?20\.?744|20\.?744/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/norma.htm',
            'etiqueta' => 'LCT - Ley 20.744',
        ],
        'ley-26773' => [
            'patron' => '/Ley\s*(?:N[°º]?\s*)?26\.?773|26\.?773/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/200000-204999/203798/norma.htm',
            'etiqueta' => 'Ley 26.773',
        ],
        'ley-19587' => [
            'patron' => '/Ley\s*(?:de\s*Higiene\s+y\s*Seguridad\s*en\s*el\s*Trabajo\s*)?(?:N[°º]?\s*)?19\.?587|19\.?587/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/15000-19999/17612/norma.htm',
            'etiqueta' => 'Ley 19.587 - Higiene y Seguridad en el Trabajo',
        ],
        'ley-23592' => [
            'patron' => '/Ley\s*(?:de\s*Actos\s*Discriminatorios\s*)?(?:N[°º]?\s*)?23\.?592|23\.?592/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/20000-24999/20465/norma.htm',
            'etiqueta' => 'Ley 23.592 - Actos Discriminatorios',
        ],
        'decreto-658-96' => [
            'patron' => '/Decreto\s*(?:N[°º]?\s*)?658\s*(?:\/\s*9?6|de\s*1996)?|658\s*\/\s*9?6/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/35000-39999/37572/norma.htm',
            'etiqueta' => 'Decreto 658/96 - Listado de Enfermedades Profesionales',
        ],
        'decreto-49-2014' => [
            'patron' => '/Decreto\s*(?:N[°º]?\s*)?49\s*(?:\/\s*2?0?14|de\s*2014)?|49\s*\/\s*2?0?14/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/225000-229999/225309/norma.htm',
            'etiqueta' => 'Decreto 49/2014 - Listado de Enfermedades Profesionales',
        ],
        'decreto-1567-74' => [
            'patron' => '/Decreto\s*(?:N[°º]?\s*)?1567\s*(?:\/\s*7?4|de\s*1974)?|1567\s*\/\s*7?4/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/20000-24999/24301/norma.htm',
            'etiqueta' => 'Decreto 1567/74 - Seguro de Vida Obligatorio',
        ],
        'decreto-1694-2009' => [
            'patron' => '/Decreto\s*(?:N[°º]?\s*)?1694\s*(?:\/\s*0?9|de\s*2009)?|1694\s*\/\s*0?9/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/155000-159999/159765/norma.htm',
            'etiqueta' => 'Decreto 1694/09 - Incremento de las prestaciones dinerarias',
        ],
        'ley-27348' => [
            'patron' => '/Ley\s*(?:Complementaria\s*de\s*la\s*Ley\s*sobre\s*Riesgos\s*del\s*Trabajo\s*)?(?:N[°º]?\s*)?27\.?348|27\.?348/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm',
            'etiqueta' => 'Ley 27.348 - Comisiones Médicas',
        ],
        'prescripcion' => [
            'patron' => '/prescripci[oó]n\s*(?:de\s*)?(?:la\s*acci[oó]n\s*)?(?:del\s*trabajador\s*)?(?:de\s*)?\d{1,2}\s*a[ñn]os?/i',
            'url' => 'https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm',
            'etiqueta' => 'prescripción (art. 44 LRT)',
        ],
    ];
}

/**
 * ENLAZA LAS MENCIONES LEGALES EXISTENTES HACIA SU TEXTO OFICIAL (INFOLEG).
 * SOLO NODOS DE TEXTO: LOS <a> YA EXISTENTES SE PROTEGEN CON PLACEHOLDER PARA NUNCA ANIDAR LINKS
 * NI ALTERAR ATRIBUTOS DE TAGS. NO AGREGA NI MODIFICA CONTENIDO VISIBLE (SOLO LO VUELVE LINK).
 */
function enlazarFuentesLegales(string $html): string {
    $fuentes = fuentesOficialesConfig();
    if ($fuentes === []) {
        return $html;
    }

    // 0. PROTEGER BLOQUES <script> Y <style> (JSON-LD, JS, CSS) PARA NUNCA ENLAZAR DENTRO DE ELLOS.
    //    EL MOTOR DE NODOS DE TEXTO DE LA ETAPA 2 TOMARIA TODO EL JSON-LD COMO UN NODO
    //    (NO HAY "<" ENTRE "<script" Y "</script>") Y ENVOLVERIA MENCIONES LEGALES EN <a href="...">
    //    CON COMILLAS SIN ESCAPAR, CORROMPIENDO EL STRUCTURED DATA (BUG DETECTADO 2026-09-24 VIA GSC).
    //    Metadatos GSC: "Unparsable structured data - Faltan caracteres , o ] en la declaracion de la matriz"
    $bloquesProtegidos = [];
    $j = 0;
    $html = preg_replace_callback('#<(script|style)\b[^>]*>.*?</\1>#is', function ($m) use (&$bloquesProtegidos, &$j) {
        $token = '__BLOQUE_PROTEGIDO_' . $j++ . '__';
        $bloquesProtegidos[$token] = $m[0];
        return $token;
    }, $html);

    // 1. PROTEGER ANCLAS YA EXISTENTES (EVITA ANIDADO Y NO TOCA ATRIBUTOS)
    $anclasExistentes = [];
    $i = 0;
    $html = preg_replace_callback('#<a\b[^>]*>.*?</a>#is', function ($m) use (&$anclasExistentes, &$i) {
        $token = '__ANCLA_LEGAL_' . $i++ . '__';
        $anclasExistentes[$token] = $m[0];
        return $token;
    }, $html);

    // 2. DENTRO DE CADA NODO DE TEXTO, ENVOLVER SOLO EL TEXTO DE LA MENCION (NO LOS TAGS)
    $html = preg_replace_callback('#>[^<]+<#', function ($m) use ($fuentes) {
        $nodo = $m[0];
        foreach ($fuentes as $cfg) {
            $nodo = preg_replace(
                $cfg['patron'],
                '<a href="' . $cfg['url'] . '" class="fuente-legal" target="_blank" rel="noopener" title="' . htmlspecialchars($cfg['etiqueta'], ENT_QUOTES, 'UTF-8') . '">$0</a>',
                $nodo,
                1
            );
        }
        return $nodo;
    }, $html);

    // 3. RESTAURAR ANCLAS Y BLOQUES PREEXISTENTES
    return strtr($html, $anclasExistentes + $bloquesProtegidos);
}
