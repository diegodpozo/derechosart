<?php

require_once __DIR__ . '/../../config/SEO_CONFIG.php';

class PaginasControlador {

    private $baseUrl;

    public function __construct() {
        $this->baseUrl = BASE_URL;
    }

    public function Inicio() {
        $seoData = getSEOData('inicio');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl;
        $ClaseBody = "home";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/inicio.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function QuienesSomos() {
        $seoData = getSEOData('quienes-somos');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "quienes-somos";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/quienes-somos.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function Accidentes() {
        $seoData = getSEOData('accidentes-de-trabajo');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "accidentes-de-trabajo";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/accidentes-de-trabajo.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function Despidos() {
        $seoData = getSEOData('despidos');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "despidos";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/despidos.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function Enfermedades() {
        $seoData = getSEOData('enfermedades-profesionales');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "enfermedades-profesionales";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/enfermedades-profesionales.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function CalculadoraIndemnizacion() {
        $seoData = getSEOData('calculadora-accidentes');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "calculadora-indemnizacion";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/calculadora-indemnizacion.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function CalculadoraDespidos() {
        $seoData = getSEOData('calculadora-despidos');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "calculadora-despidos";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/calculadora-despidos.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function CalculadoraAccidentes() {
        $seoData = getSEOData('calculadora-accidentes');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "calculadora-accidentes";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/calculadora-accidentes.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function ComisionesMedicas() {
        $seoData = getSEOData('comisiones-medicas');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "comisiones-medicas";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/comisiones-medicas.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function QueHacer() {
        $seoData = getSEOData('que-hacer');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "que-hacer";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/que-hacer.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function QueHacerAccidente() {
        $MetaTitulo = "Guía: Qué hacer en caso de Accidente Laboral - DerechosART";
        $MetaDescripcion = "Pasos detallados desde la denuncia a la ART hasta el cobro de la indemnización. Guía completa para trabajadores accidentados en Argentina.";
        $MetaKeywords = "que hacer accidente trabajo, denuncia ART, procedimiento accidente laboral, pasos indemnización";
        $MetaCanonical = $this->baseUrl . "que-hacer-accidente";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/que-hacer-accidente.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function CualEsMiArt() {
        $seoData = getSEOData('cual-es-mi-art');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "cual-es-mi-art";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/cual-es-mi-art.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function FormulariosSrt() {
        $MetaTitulo = "Formularios SRT para trámites de ART - DerechosART";
        $MetaDescripcion = "Descarga y guía para completar los formularios necesarios para tus reclamos ante la Superintendencia de Riesgos del Trabajo.";
        $MetaKeywords = "formularios SRT, descarga formularios, reclamos SRT, trámites ART";
        $MetaCanonical = $this->baseUrl . "formularios-srt";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/formularios-srt.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function TramitesSrt() {
        $MetaTitulo = "Trámites SRT | Guía Completa para Iniciar tu Reclamo ante Comisiones Médicas";
        $MetaDescripcion = "Conocé todos los trámites que podés iniciar ante las Comisiones Médicas de la SRT: rechazo del siniestro, divergencia en la incapacidad, determinación y más.";
        $MetaKeywords = "trámites SRT, reclamos ART, comisiones médicas, iniciar trámite SRT, que trámite hacer en la SRT";
        $MetaCanonical = $this->baseUrl . "tramites-srt";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/tramites-srt.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function BuscadorComisiones() {
        $MetaTitulo = "Buscador de Comisiones Médicas SRT - DerechosART";
        $MetaDescripcion = "Encontrá la sede de la Superintendencia de Riesgos del Trabajo más cercana a tu domicilio o lugar de trabajo.";
        $MetaKeywords = "comisiones médicas, buscador SRT, sedes SRT argentina, dónde está la comisión médica";
        $MetaCanonical = $this->baseUrl . "buscador-comisiones";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/buscador-comisiones.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function TablaIncapacidad() {
        $seoData = getSEOData('tabla-incapacidad');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "tabla-incapacidad";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/tabla-incapacidad.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function Contacto() {
        // CARGA BAJO DEMANDA DE MODELOS PESADOS (OPTIMIZACION DE VELOCIDAD)
        require_once __DIR__ . '/../Modelos/FormModel.php';
        $formModel = new FormModel();
        $provincias = array_filter($formModel->getProvincias(), function($p) {
            return esProvinciaZonaAtencion($p['nombre']);
        });
        $provincias = array_values($provincias); // REINDEXAR
        $categorias = $formModel->getCategorias();
        $art_empresas = $formModel->getArtEmpresas();
        $catIds = $formModel->getCategoriaIds();

        $seoData = getSEOData('contacto');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "contacto";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/contacto.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function Faq() {
        $seoData = getSEOData('faq');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "faq";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/faq.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function ZonasAtencion() {
        $seoData = getSEOData('zonas-atencion');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "zonas-atencion";
        $ClaseBody = "interna pag-zonas";

        $modeloUbicacion = new \UbicacionModel();
        $zonasPorProvincia = $modeloUbicacion->getLocalidadesValidasParaZonas();

        $coordenadas = cargarCoordenadasLocalidades();

        // REORGANIZAR EN REGIONES FIJAS PARA LAS CARDS
        $mapaRegiones = [
            [
                'id' => 'caba-gba',
                'titulo' => 'CABA y GBA',
                'slug_base' => 'caba-y-gba',
                'icono' => 'landmark',
                'direccion' => 'Ayacucho 283',
                'maps_url' => 'https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!3m1!4b1!4m6!3m5!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11w8jvhmkp',
                'lat' => -34.6121,
                'lng' => -58.3789,
                'subgrupos' => [
                    ['nombre' => 'CABA', 'provincia' => 'Ciudad Autónoma de Buenos Aires'],
                    ['nombre' => 'GBA', 'provincia' => 'Buenos Aires'],
                ],
            ],
            [
                'id' => 'rosario',
                'titulo' => 'Rosario',
                'slug_base' => 'rosario',
                'icono' => 'landmark',
                'direccion' => 'Rioja 644',
                'maps_url' => 'https://www.google.com.ar/maps/place/DerechosART+Rosario+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-32.9488217,-60.6325779,19.83z/data=!4m6!3m5!1s0x95b7abd41f51e0f7:0x7d49a7c112d2fcfe!8m2!3d-32.9488527!4d-60.6322239!16s%2Fg%2F11x98t34k7',
                'lat' => -32.9452,
                'lng' => -60.6523,
                'subgrupos' => [
                    ['nombre' => 'Santa Fe', 'provincia' => 'Santa Fe'],
                ],
            ],
            [
                'id' => 'neuquen-rio-negro',
                'titulo' => 'Neuquén y Río Negro',
                'slug_base' => 'neuquen-y-rio-negro',
                'icono' => 'landmark',
                'direccion' => 'Fotheringham 516',
                'maps_url' => 'https://www.google.com/maps/place/DerechosART+Neuqu%C3%A9n+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-38.949361,-68.0691958,17z/data=!3m1!4b1!4m6!3m5!1s0x960a33f6c915bc75:0xc722f152dcea3961!8m2!3d-38.949361!4d-68.0691958!16s%2Fg%2F11y_t7z_pq',
                'lat' => -38.9516,
                'lng' => -68.0591,
                'subgrupos' => [
                    ['nombre' => 'Neuquén', 'provincia' => 'Neuquén'],
                    ['nombre' => 'Río Negro', 'provincia' => 'Río Negro'],
                ],
            ],
            [
                'id' => 'salta',
                'titulo' => 'Salta',
                'slug_base' => 'salta',
                'icono' => 'landmark',
                'direccion' => 'Gral. Martín Güemes 1548',
                'maps_url' => 'https://www.google.com/maps/place/Gral.+Mart%C3%ADn+G%C3%BCemes+1548,+A4400+Salta',
                'lat' => -24.7797,
                'lng' => -65.4058,
                'subgrupos' => [
                    ['nombre' => 'Salta', 'provincia' => 'Salta'],
                ],
            ],
            [
                'id' => 'cordoba',
                'titulo' => 'Córdoba',
                'slug_base' => 'cordoba',
                'icono' => 'landmark',
                'direccion' => '27 de Abril 276',
                'maps_url' => 'https://www.google.com/maps/place/27+de+Abril+276,+X5000AEF+C%C3%B3rdoba',
                'lat' => -31.4147,
                'lng' => -64.1869,
                'subgrupos' => [
                    ['nombre' => 'Córdoba', 'provincia' => 'Córdoba'],
                ],
            ],
            [
                'id' => 'mendoza',
                'titulo' => 'Mendoza',
                'slug_base' => 'mendoza',
                'icono' => 'landmark',
                'direccion' => 'Patricias Mendocinas 539, Piso 2, Of. B',
                'maps_url' => 'https://www.google.com/maps/place/Patricias+Mendocinas+539,+Mendoza',
                'lat' => -32.8833,
                'lng' => -68.8397,
                'subgrupos' => [
                    ['nombre' => 'Mendoza', 'provincia' => 'Mendoza'],
                ],
            ],
        ];

        $regiones = [];
        foreach ($mapaRegiones as $config) {
            $subgrupos = [];
            foreach ($config['subgrupos'] as $sub) {
                $localidades = isset($zonasPorProvincia[$sub['provincia']])
                    ? $zonasPorProvincia[$sub['provincia']]
                    : [];
                $radio = ($config['id'] === 'caba-gba') ? 90 : 30;
                $localidades = filtrarPorDistancia($localidades, $config['lat'], $config['lng'], $coordenadas, $radio);
                $subgrupos[] = [
                    'nombre' => $sub['nombre'],
                    'localidades' => $localidades,
                ];
            }
            // SI ES CABA/GBA, EXCLUIR DE GBA LAS LOCALIDADES QUE YA APARECEN EN CABA
            if ($config['id'] === 'caba-gba' && isset($subgrupos[0], $subgrupos[1])) {
                $nombresCABA = array_column($subgrupos[0]['localidades'], 'nombre');
                $subgrupos[1]['localidades'] = array_values(
                    array_filter($subgrupos[1]['localidades'], function($loc) use ($nombresCABA) {
                        return !in_array($loc['nombre'], $nombresCABA);
                    })
                );
            }

            $regiones[] = [
                'id' => $config['id'],
                'titulo' => $config['titulo'],
                'slug_base' => $config['slug_base'],
                'icono' => $config['icono'],
                'direccion' => $config['direccion'],
                'maps_url' => $config['maps_url'],
                'subgrupos' => $subgrupos,
            ];
        }

        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/zonas-atencion.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function LandingEspecialDespidos() {
        $seoData = getSEOData('abogados-art-despidos');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "abogados-art-despidos";
        $ClaseBody = "home zona-land";

        if (!defined("ZONA_TIPO")) define("ZONA_TIPO", "despidos");
        if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", "<strong>CABA</strong><span style=\"font-weight: normal;\"> y </span><strong>GBA</strong>");
        if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", "CABA y GBA");
        if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", true);
        if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", "");

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/inicio.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    public function LandingEspecialAccidentes() {
        $seoData = getSEOData('abogados-art-accidentes');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "abogados-art-accidentes";
        $ClaseBody = "home zona-land";

        if (!defined("ZONA_TIPO")) define("ZONA_TIPO", "accidentes");
        if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", "<strong>CABA</strong><span style=\"font-weight: normal;\"> y </span><strong>GBA</strong>");
        if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", "CABA y GBA");
        if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", true);
        if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", "");

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/inicio.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    public function LandingZona($slug) {
        $slug = trim($slug);
        require_once __DIR__ . '/../Modelos/UbicacionModel.php';
        $modeloUbicacion = new UbicacionModel();
        
        // 1. DETERMINAR TIPO DE LANDING Y LIMPIAR SLUG
        $tipo_landing = "accidentes"; // DEFAULT
        $slug_puro = $slug;

        if (strpos($slug, "abogados-despidos-") === 0) {
            $tipo_landing = "despidos";
            $slug_puro = str_replace("abogados-despidos-", "", $slug);
        } elseif ($slug === "abogados-art-despidos") {
            $tipo_landing = "despidos";
            $slug_puro = "caba-o-gba";
        } else {
            $slug_puro = str_replace("abogados-art-", "", $slug);
        }

        // 2. FORMATEAR NOMBRE DE LA ZONA (Texto Plano para SEO y Búsquedas)
        $nombre_zona_plano = ucwords(str_replace("-", " ", $slug_puro));
        
        $mapa_acentos = [
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
            "Gomez" => "Gómez", "Pinero" => "Piñero", "Munoz" => "Muñoz", "Bolson" => "Bolsón"
        ];
        $nombre_zona_plano = str_ireplace(array_keys($mapa_acentos), array_values($mapa_acentos), $nombre_zona_plano);

        if ($slug === "abogados-art-despidos" || $slug === "abogados-art-accidentes") {
            $nombre_zona_plano = "CABA y GBA";
        }

        // --- VALIDACION DE ZONA ---
        $zonas_especiales_permitidas = ["CABA y GBA", "Neuquén y Río Negro", "Rosario", "Santa Fe", "Córdoba", "Mendoza", "Alberdi", "Salta"];

        // TAMBIEN VALIDAR CONTRA contenido_zonas.json (FALLBACK PARA LOCALIDADES SIN BD)
        $rutaJsonZona = __DIR__ . '/../../config/contenido_zonas.json';
        $existeEnJson = false;
        if (file_exists($rutaJsonZona)) {
            $jsonZonas = json_decode(file_get_contents($rutaJsonZona), true);
            $slugJson = str_replace('-', '_', $slug_puro);
            $existeEnJson = isset($jsonZonas[$slugJson]);
        }

        $es_zona_valida = in_array($nombre_zona_plano, $zonas_especiales_permitidas)
                        || $modeloUbicacion->existeZona($nombre_zona_plano)
                        || $existeEnJson;

        if (!$es_zona_valida) {
            header("Location: " . BASE_URL);
            exit();
        }
        // --- FIN VALIDACION ---

        // DETECTAR SI ES CABA/GBA (para cambiar H1 y contenido)
        $es_caba_gba = ($nombre_zona_plano === "CABA y GBA") || $modeloUbicacion->esCABAoGBA($nombre_zona_plano);

        // CONSTRUIR TEXTO DINAMICO CON EL NOMBRE DE LA ZONA
        $texto_dinamico = "";
        $zona_nombre_resaltado = "";
        
        if ($nombre_zona_plano !== "CABA y GBA") {
            // Dividir el nombre en palabras para resaltar cada una individualmente
            $palabras_zona = explode(" ", $nombre_zona_plano);
            $palabras_resaltadas = array_map(function($palabra) {
                return '<span class="subrayado-amarillo">' . $palabra . '</span>';
            }, $palabras_zona);
            $zona_nombre_resaltado = implode(" ", $palabras_resaltadas);
            
            if ($es_caba_gba) {
                $texto_dinamico = "Somos abogados especialistas en accidentes de trabajo y despidos en " . $zona_nombre_resaltado . ", CABA y GBA.";
            } else {
                $texto_dinamico = "Somos abogados especialistas en accidentes de trabajo en " . $zona_nombre_resaltado . ".";
            }
        }

        // VERSION HTML PARA VISUALIZACION (Negrita en nombres, normal en conectores)
        $conector_y_html = '<span style="font-weight: normal;"> y </span>';
        $conector_o_html = '<span style="font-weight: normal;"> o </span>';
        
        if ($nombre_zona_plano === "CABA y GBA") {
            $nombre_zona_html = '<strong>CABA</strong>' . $conector_y_html . '<strong>GBA</strong>';
        } else {
            $palabras = explode(" ", $nombre_zona_plano);
            $palabras_formateadas = array_map(function($p) use ($conector_y_html, $conector_o_html) {
                $p_lower = strtolower($p);
                if ($p_lower === "y") return $conector_y_html;
                if ($p_lower === "o") return $conector_o_html;
                return "<strong>$p</strong>";
            }, $palabras);
            $nombre_zona_html = implode(" ", $palabras_formateadas);
            $nombre_zona_html = str_replace("  ", " ", $nombre_zona_html);
        }

        // DETERMINAR LA CANONICAL CORRECTA PARA EVITAR CONTENIDO DUPLICADO EN LANDINGS
        // AHORA TODAS LAS LANDINGS SE ENCUENTRAN DIRECTAMENTE EN LA RAIZ DEL SITIO
        $MetaCanonical = $this->baseUrl . $slug;

        $ClaseBody = "home zona-land";

        if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", $nombre_zona_html);
        if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", $nombre_zona_plano);
        if (!defined("ZONA_TIPO")) define("ZONA_TIPO", $tipo_landing);
        if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", $es_caba_gba);
        if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", $texto_dinamico);

        // CARGAR CONTENIDO UNICO POR ZONA DESDE JSON (PARA EVITAR DUPLICATE CONTENT)
        $ContenidoZonas = [];
        $RutaJsonZonas = __DIR__ . '/../../config/contenido_zonas.json';
        if (file_exists($RutaJsonZonas)) {
            $ContenidoZonas = json_decode(file_get_contents($RutaJsonZonas), true) ?? [];
        }
        $ZonaContenidoUnico = '';
        $slugJsonBusqueda = str_replace('-', '_', $slug_puro);
        if (isset($ContenidoZonas[$slugJsonBusqueda])) {
            $ZonaContenidoUnico = $ContenidoZonas[$slugJsonBusqueda]['parrafo_local'] ?? '';
        }

        // FALLBACK: FRASE GENERICA SI NO HAY CONTENIDO PERSONALIZADO
        if (empty($ZonaContenidoUnico)) {
            $frasesAccidentes = [
                "Si sufriste un accidente de trabajo en %s, podes reclamar una indemnizacion. Te ayudamos en todo el proceso, desde la denuncia hasta el cobro.",
                "En %s ofrecemos asesoramiento legal especializado para trabajadores que sufrieron accidentes laborales. Consultanos sin costo y conoce tus derechos.",
                "Si trabajas en %s y sufriste un accidente de trabajo, nuestro equipo de abogados laboralistas esta listo para ayudarte a reclamar tu indemnizacion.",
                "En %s brindamos atencion personalizada a trabajadores que necesitan reclamar una indemnizacion por accidente laboral. Te explicamos todo en palabras simples.",
                "Nuestro estudio juridico en %s esta dedicado a defender los derechos de los trabajadores accidentados. Tenemos la experiencia para asesorarte.",
                "Si sufriste un accidente laboral en %s, no esperes mas. Reclama la indemnizacion que te corresponde por ley. Te acompanamos en cada paso.",
                "En %s ayudamos a trabajadores que sufrieron accidentes en su lugar de trabajo. Gestionamos tu reclamo ante la ART para que cobres lo justo.",
                "Si te accidentaste trabajando en %s, la ART debe indemnizarte. Te explicamos tus derechos y te guiamos en el reclamo sin costo.",
                "En %s contamos con abogados especialistas en accidentes de trabajo. Analizamos tu caso y te representamos ante la ART y comisiones medicas.",
                "Si sufriste un accidente en %s mientras trabajabas, podes obtener una indemnizacion. Te ayudamos desde la denuncia inicial hasta el cobro final."
            ];
            $indice = abs(crc32($slug_puro)) % count($frasesAccidentes);
            $ZonaContenidoUnico = sprintf($frasesAccidentes[$indice], $nombre_zona_plano);
        }

        if (!defined("ZONA_CONTENIDO_UNICO")) define("ZONA_CONTENIDO_UNICO", $ZonaContenidoUnico);

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/inicio.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    // ============================================================
    // BAREMO LABORAL 2026 - PAGINAS DE LESIONES
    // ============================================================
    private function getBaremoLesiones() {
        $rutaData = __DIR__ . '/../../vistas/paginas/lesiones_data.php';
        if (file_exists($rutaData)) {
            return require $rutaData;
        }
        return [];
    }

    public function BaremoLesion($slug = null) {
        if (!$slug) {
            header("Location: " . $this->baseUrl . "tabla-incapacidad");
            exit;
        }

        $lesiones = $this->getBaremoLesiones();
        if (!isset($lesiones[$slug])) {
            header("Location: " . $this->baseUrl . "tabla-incapacidad");
            exit;
        }

        $baremo = $lesiones[$slug];
        $seoData = getSEOData('baremo-' . $slug);
        $MetaTitulo = $seoData['titulo'] ?? ($baremo['titulo'] . ' | DerechosART');
        $MetaDescripcion = $seoData['descripcion'] ?? $baremo['lead'];
        $MetaKeywords = $seoData['keywords'] ?? 'baremo 2026, incapacidad laboral, ' . $baremo['tag'];
        $MetaCanonical = $this->baseUrl . "baremo/" . $slug;
        $ClaseBody = "interna";

        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/baremo-lesion.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    // ============================================================
    // PREGUNTAS FRECUENTES IA - 500 RESPUESTAS
    // ============================================================
    public function PreguntasFrecuentes($categoria = null) {
        $rutaData = __DIR__ . '/../../vistas/paginas/preguntas_ia.php';
        if (!file_exists($rutaData)) {
            header("Location: " . $this->baseUrl . "faq");
            exit;
        }
        $preguntas = require $rutaData;

        // FILTRAR POR CATEGORIA SI SE SOLICITA
        $categoriaActual = null;
        if ($categoria) {
            $categoriaLimpia = strtolower(htmlspecialchars_decode(urldecode($categoria)));
            foreach ($preguntas as $p) {
                if (strtolower($p['categoria']) === $categoriaLimpia) {
                    $categoriaActual = $p['categoria'];
                    break;
                }
            }
        }

        // OBTENER CATEGORIAS UNICAS
        $categorias = [];
        foreach ($preguntas as $p) {
            if (!in_array($p['categoria'], $categorias)) {
                $categorias[] = $p['categoria'];
            }
        }
        sort($categorias);

        // FILTRAR PREGUNTAS
        $preguntasFiltradas = $categoriaActual
            ? array_filter($preguntas, function($p) use ($categoriaActual) {
                return $p['categoria'] === $categoriaActual;
            })
            : $preguntas;

        $seoData = getSEOData('preguntas-frecuentes');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "preguntas-frecuentes" . ($categoriaActual ? "/" . urlencode(str_replace(' ', '-', strtolower($categoriaActual))) : "");
        $ClaseBody = "interna";

        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/preguntas-frecuentes.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function blogIndex() {
        $seoData = getSEOData('blog-index');
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "blog";
        $ClaseBody = "blog-index-page";

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/blog-index.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    private function getBlogPosts() {
        return [
            [
                'slug' => 'accidente-laboral-guia-2026',
                'vista' => 'blog-guia-accidentes',
                'seo_slug' => 'blog-accidente-laboral',
                'fecha_publicacion' => '2026-05-14T09:00:00-03:00',
                'fecha_modificacion' => '2026-06-03T18:00:00-03:00',
                'autor' => 'nair-chemes',
            ],
            [
                'slug' => 'art-rechazo-accidente-laboral',
                'vista' => 'blog-art-rechazo',
                'seo_slug' => 'blog-art-rechazo',
                'fecha_publicacion' => '2026-06-25T10:00:00-03:00',
                'fecha_modificacion' => '2026-06-25T10:00:00-03:00',
                'autor' => 'maria-jose-zalazar',
            ],
            [
                'slug' => 'me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer',
                'vista' => 'blog-alta-medica-dolor',
                'seo_slug' => 'blog-alta-medica-dolor',
                'fecha_publicacion' => '2026-07-02T12:00:00-03:00',
                'fecha_modificacion' => '2026-07-02T12:00:00-03:00',
                'autor' => 'romina-koniuch',
            ],
        ];
    }

    public function blog($slug = null) {
        if (!$slug) {
            header("Location: " . $this->baseUrl . "blog");
            exit;
        }

        $post = null;
        foreach ($this->getBlogPosts() as $p) {
            if ($p['slug'] === $slug) {
                $post = $p;
                break;
            }
        }

        if (!$post) {
            header("Location: " . $this->baseUrl . "inicio");
            exit;
        }

        $seoData = getSEOData($post['seo_slug']);
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "blog/" . $slug;
        $ClaseBody = "blog-post-page";

        $FechaPublicacionBlog = $post['fecha_publicacion'];
        $FechaModificacionBlog = $post['fecha_modificacion'];
        $AutorBlogSlug = $post['autor'];

        // EXTRACTO DE 5000 CARACTERES PARA articleBody EN SCHEMA BLOGPOSTING
        $vista = $post['vista'];
        $RutaVistaBlog = __DIR__ . "/../../vistas/paginas/$vista.php";
        if (file_exists($RutaVistaBlog)) {
            $HtmlBlog = file_get_contents($RutaVistaBlog);
            $HtmlBlog = preg_replace('/<\?php.*?\?>/s', '', $HtmlBlog); // STRIP PHP
            $TextoPlano = strip_tags($HtmlBlog); // STRIP HTML
            $TextoPlano = preg_replace('/\s+/', ' ', $TextoPlano); // NORMALIZAR ESPACIOS
            $CuerpoArticuloBlog = mb_substr(trim($TextoPlano), 0, 5000);
        } else {
            $CuerpoArticuloBlog = '';
        }

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/$vista.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    // ============================================================
    // GENERADOR DINAMICO DE SITEMAP.XML (DESDE BD + contenido_zonas.json)
    // ============================================================
    private function getPaginasPrincipales() {
        return [
            ['loc' => '/', 'priority' => '1.00'],
            ['loc' => '/quienes-somos', 'priority' => '0.80'],
            ['loc' => '/accidentes-de-trabajo', 'priority' => '0.90'],
            ['loc' => '/despidos', 'priority' => '0.90'],
            ['loc' => '/enfermedades-profesionales', 'priority' => '0.85'],
            ['loc' => '/comisiones-medicas', 'priority' => '0.85'],
            ['loc' => '/buscador-comisiones', 'priority' => '0.85'],
            ['loc' => '/tramites-srt', 'priority' => '0.85'],
            ['loc' => '/faq', 'priority' => '0.95'],
            ['loc' => '/contacto', 'priority' => '0.80'],
            ['loc' => '/calculadora-accidentes', 'priority' => '0.90'],
            ['loc' => '/calculadora-despidos', 'priority' => '0.90'],
            ['loc' => '/que-hacer', 'priority' => '0.85'],
            ['loc' => '/cual-es-mi-art', 'priority' => '0.80'],
            ['loc' => '/zonas-atencion', 'priority' => '0.90'],
            ['loc' => '/blog', 'priority' => '0.90'],
            ['loc' => '/preguntas-frecuentes', 'priority' => '0.90'],
            ['loc' => '/abogados-art-despidos', 'priority' => '0.80'],
            ['loc' => '/abogados-art-accidentes', 'priority' => '0.80'],
            ['loc' => '/rechazo-del-siniestro', 'priority' => '0.70'],
            ['loc' => '/rechazo-de-enfermedad-no-listada', 'priority' => '0.70'],
            ['loc' => '/divergencia-en-el-alta-medica', 'priority' => '0.70'],
            ['loc' => '/divergencia-en-las-prestaciones', 'priority' => '0.70'],
            ['loc' => '/reingreso-al-tratamiento', 'priority' => '0.70'],
            ['loc' => '/divergencia-en-la-incapacidad', 'priority' => '0.70'],
            ['loc' => '/determinacion-de-incapacidad', 'priority' => '0.70'],
            ['loc' => '/valoracion-de-dano', 'priority' => '0.70'],
            ['loc' => '/fallecimiento-del-trabajador', 'priority' => '0.70'],
            ['loc' => '/baremo/fracturas-vertebrales', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-hombro', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-rodilla', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-mano-dedo', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-femur', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-tibia-perone', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-tobillo', 'priority' => '0.85'],
            ['loc' => '/baremo/amputaciones-miembro-superior', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-brazo-radio-cubito', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-cadera', 'priority' => '0.85'],
            ['loc' => '/baremo/lesion-dedos-pie', 'priority' => '0.85'],
            ['loc' => '/baremo/cicatrices-rostro', 'priority' => '0.85'],
            ['loc' => '/baremo/lesiones-oculares', 'priority' => '0.85'],
            ['loc' => '/baremo/enfermedades-profesionales', 'priority' => '0.85'],
            ['loc' => '/baremo/gran-invalidez', 'priority' => '0.85'],
            ['loc' => '/baremo/pisos-minimos-indemnizacion', 'priority' => '0.85'],
            ['loc' => '/baremo/fallecimiento-trabajador', 'priority' => '0.85'],
        ];
    }

    public function Sitemap() {
        header('Content-Type: application/xml; charset=utf-8');

        $siteUrl = rtrim(SITE_URL, '/');
        $hoy = date('Y-m-d');

        $paginasPrincipales = $this->getPaginasPrincipales();

        // ZONAS ESPECIALES (SIEMPRE INCLUIDAS AUNQUE NO ESTEN EN BD)
        $zonasEspeciales = [
            'neuquen-y-rio-negro', 'cordoba', 'mendoza', 'salta',
            'rosario', 'caba-y-gba', 'santa-fe', 'alberdi'
        ];

        // CARGAR contenido_zonas.json PARA OBTENER SLUGS VALIDOS
        $rutaJson = __DIR__ . '/../../config/contenido_zonas.json';
        $slugsValidos = [];
        if (file_exists($rutaJson)) {
            $contenidoJson = json_decode(file_get_contents($rutaJson), true);
            if ($contenidoJson) {
                // CONVERTIR KEYS DEL JSON (guion_bajo -> guion-normal)
                foreach ($contenidoJson as $key => $value) {
                    $slug = str_replace('_', '-', $key);
                    $slugsValidos[] = $slug;
                }
            }
        }

        // MAPA DE ACENTOS (MISMO QUE EN LandingZona)
        $mapaAcentos = [
            'Caba' => 'CABA', 'Gba' => 'GBA', ' Y ' => ' y ', ' O ' => ' o ',
            'Lanus' => 'Lanús', 'Nunez' => 'Núñez', 'Agronomia' => 'Agronomía',
            'Constitucion' => 'Constitución', 'San Cristobal' => 'San Cristóbal',
            'San Nicolas' => 'San Nicolás', 'Velez Sarsfield' => 'Vélez Sarsfield',
            'Villa Ortuzar' => 'Villa Ortúzar', 'Villa Pueyrredon' => 'Villa Pueyrredón',
            'Moron' => 'Morón', 'General Rodriguez' => 'General Rodríguez',
            'Sarandi' => 'Sarandí', 'Adrogue' => 'Adrogué',
            'Esteban Echeverria' => 'Esteban Echeverría', 'El Jaguel' => 'El Jagüel',
            'La Union' => 'La Unión', 'Ramos Mejia' => 'Ramos Mejía',
            'Gonzalez Catan' => 'González Catán', 'Jose C Paz' => 'José C. Paz',
            'Neuquen' => 'Neuquén', 'Rio Negro' => 'Río Negro',
            'Cordoba' => 'Córdoba', 'Tucuman' => 'Tucumán',
            'Parana' => 'Paraná', 'Gualeguaychu' => 'Gualeguaychú',
            'Junin' => 'Junín', 'Ituzaingo' => 'Ituzaingó',
            'Garin' => 'Garín', 'Benavidez' => 'Benavídez',
            'Martin' => 'Martín', 'Andres' => 'Andrés',
            'Leon' => 'León', 'Suarez' => 'Suárez',
            'Fray Luis Beltran' => 'Fray Luis Beltrán', 'Perez' => 'Pérez',
            'Gomez' => 'Gómez', 'Pinero' => 'Piñero',
            'Munoz' => 'Muñoz', 'Bolson' => 'Bolsón'
        ];

        $modeloUbicacion = new \UbicacionModel();

        // AGREGAR TODAS LAS LOCALIDADES DE LA BD
        require_once __DIR__ . '/../../config/database.php';
        try {
            $pdoLoc = Database::getConnection();
            $stmtLoc = $pdoLoc->query("SELECT nombre FROM localidades ORDER BY nombre");
            while ($loc = $stmtLoc->fetch(PDO::FETCH_ASSOC)) {
                $slugsValidos[] = $modeloUbicacion->nombreASlug($loc['nombre']);
            }
        } catch (Exception $e) {
            error_log("ERROR EN SITEMAP AL OBTENER LOCALIDADES: " . $e->getMessage());
        }

        // ZONAS ESPECIALES QUE SIEMPRE SON VALIDAS
        $zonasEspecialesPermitidas = ["CABA y GBA", "Neuquén y Río Negro", "Rosario",
                                       "Santa Fe", "Córdoba", "Mendoza", "Alberdi", "Salta"];

        $slugsZona = array_unique(array_merge($zonasEspeciales, $slugsValidos));
        sort($slugsZona);

        // ARMAR XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // PAGINAS PRINCIPALES
        foreach ($paginasPrincipales as $pag) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>{$siteUrl}{$pag['loc']}</loc>\n";
            $xml .= "    <lastmod>{$hoy}</lastmod>\n";
            $xml .= "    <priority>{$pag['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        // POSTS DEL BLOG (DINAMICO DESDE getBlogPosts())
        foreach ($this->getBlogPosts() as $post) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>{$siteUrl}/blog/{$post['slug']}</loc>\n";
            $xml .= "    <lastmod>" . substr($post['fecha_modificacion'], 0, 10) . "</lastmod>\n";
            $xml .= "    <priority>0.80</priority>\n";
            $xml .= "  </url>\n";
        }

        // LANDINGS DE ZONAS
        foreach ($slugsZona as $slug) {
            // CONVERTIR SLUG A NOMBRE DE ZONA
            $nombreZona = ucwords(str_replace('-', ' ', $slug));
            $nombreZona = str_ireplace(array_keys($mapaAcentos), array_values($mapaAcentos), $nombreZona);

            // VALIDAR CONTRA BD O LISTA DE ZONAS ESPECIALES
            $esValida = in_array($nombreZona, $zonasEspecialesPermitidas)
                        || $modeloUbicacion->existeZona($nombreZona);

            if (!$esValida) continue;

            $xml .= "  <url>\n";
            $xml .= "    <loc>{$siteUrl}/abogados-art-{$slug}</loc>\n";
            $xml .= "    <lastmod>{$hoy}</lastmod>\n";
            $xml .= "    <priority>0.60</priority>\n";
            $xml .= "  </url>\n";

            $xml .= "  <url>\n";
            $xml .= "    <loc>{$siteUrl}/abogados-despidos-{$slug}</loc>\n";
            $xml .= "    <lastmod>{$hoy}</lastmod>\n";
            $xml .= "    <priority>0.60</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        echo $xml;
        exit();
    }

    public function TramiteGenerico($slug) {
        $tramites = [
            'rechazo-del-siniestro' => [
                'titulo' => 'Rechazo del Siniestro',
                'descripcion' => 'Se usa cuando denunciaste tu accidente o enfermedad profesional y la ART te dijo que no corresponde cobertura.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando denunciaste tu accidente o enfermedad profesional y la ART te dijo que no corresponde cobertura.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador, con abogado</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Sin plazo fijo para vos; la ART tiene un plazo corto (10 días hábiles, prorrogables por 10 más) para notificarte el rechazo desde la denuncia</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Tu abogado tiene que presentar el reclamo en la Comisión Médica correspondiente</td>
                </tr>
            </tbody>
        </table>

        <h3 class="mt-30">Documentación que conviene tener a mano</h3>
        <p class="txt-gris">DNI, historia clínica y estudios médicos, descripción de cómo ocurrió el hecho, datos del empleador y la ART, y la notificación del rechazo.</p>
    </section>
</section>'
            ],
            'rechazo-de-enfermedad-no-listada' => [
                'titulo' => 'Rechazo de Enfermedad No Listada',
                'descripcion' => 'Se usa cuando tu enfermedad no figura en el listado oficial de enfermedades profesionales (Decreto 658/96), pero podés demostrar que la causaron tus tareas.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando tu enfermedad no figura en el listado oficial de enfermedades profesionales (Decreto 658/96), pero podés demostrar que la causaron tus tareas.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador, con abogado</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Sin plazo fijo; conviene iniciarlo apenas tengas el diagnóstico</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí, y es clave para armar la prueba del nexo causal</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Tu abogado tiene que presentar el reclamo en la Comisión Médica correspondiente</td>
                </tr>
            </tbody>
        </table>

        <h3 class="mt-30">Documentación que conviene tener a mano</h3>
        <p class="txt-gris">Petición firmada por un médico y prueba de las condiciones de trabajo (descripción de tareas, testigos).</p>
    </section>
</section>'
            ],
            'divergencia-en-el-alta-medica' => [
                'titulo' => 'Divergencia en el Alta Médica',
                'descripcion' => 'Se usa cuando te dieron el alta pero seguís con dolor, secuelas, o sentís que el tratamiento quedó incompleto.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando te dieron el alta pero seguís con dolor, secuelas, o sentís que el tratamiento quedó incompleto.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador, no requiere abogado</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Dentro de los 5 días hábiles posteriores al alta médica</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>No es obligatorio, pero conviene presentarse acompañado</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Presencial ante la Comisión Médica</td>
                </tr>
            </tbody>
        </table>

        <h3 class="mt-30">Documentación que conviene tener a mano</h3>
        <p class="txt-gris">El alta médica y tu DNI.</p>
    </section>
</section>'
            ],
            'divergencia-en-las-prestaciones' => [
                'titulo' => 'Divergencia en las Prestaciones',
                'descripcion' => 'Se usa cuando la ART aceptó tu accidente pero no te da el tratamiento que necesitás: niega estudios, no autoriza una cirugía, no cubre medicación o rehabilitación.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando la ART aceptó tu accidente pero no te da el tratamiento que necesitás: niega estudios, no autoriza una cirugía, no cubre medicación o rehabilitación.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Sin plazo fijo, mientras persista el conflicto con la prestación</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>No es obligatorio, pero muy recomendable</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Presencial ante la Comisión Médica</td>
                </tr>
            </tbody>
        </table>
    </section>
</section>'
            ],
            'reingreso-al-tratamiento' => [
                'titulo' => 'Reingreso al Tratamiento',
                'descripcion' => 'Se usa cuando ya te habían dado el alta, pero las secuelas reaparecieron o empeoraron y necesitás volver a ser atendido por tu ART.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando ya te habían dado el alta, pero las secuelas reaparecieron o empeoraron y necesitás volver a ser atendido por tu ART.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Hasta 2 años desde el accidente o desde que se agotó el tratamiento original</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>No es obligatorio</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Primero se solicita a la ART; si rechaza o no responde, se eleva a la Comisión Médica</td>
                </tr>
            </tbody>
        </table>
    </section>
</section>'
            ],
            'divergencia-en-la-incapacidad' => [
                'titulo' => 'Divergencia en la Incapacidad',
                'descripcion' => 'Este es, en la mayoría de los casos, el trámite más importante en términos económicos. Se usa cuando ya tenés el alta pero la ART no te convocó a la evaluación de tu incapacidad (Valoración del daño) o cuando fuiste y no se llegó a un acuerdo sobre el porcentaje.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Este es, en la mayoría de los casos, el <span class="subrayado-amarillo">trámite más importante en términos económicos</span>. Se usa cuando ya tenés el alta pero la ART no te convocó a la evaluación de tu incapacidad (Valoración del daño) o cuando fuiste y no se llegó a un acuerdo sobre el porcentaje.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>El trabajador, con su abogado</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>21 días hábiles luego del Alta Médica</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí, es muy recomendable un abogado especialista en el tema que cuente con equipo de médicos legistas</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Online (obligatorio en provincias adheridas a la Ley 27.348)</td>
                </tr>
            </tbody>
        </table>
    </section>
</section>'
            ],
            'determinacion-de-incapacidad' => [
                'titulo' => 'Determinación de Incapacidad',
                'descripcion' => 'Después del alta, es la ART la que tiene que iniciar el trámite para fijar tu porcentaje de incapacidad.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Después del alta, es la ART la que tiene que iniciar el trámite para fijar tu porcentaje de incapacidad.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>La ART</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>30 días hábiles contados desde el alta médica</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí, sobre todo antes de aceptar o rechazar la liquidación que te ofrezcan</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Online</td>
                </tr>
            </tbody>
        </table>

        <p class="txt-gris mt-20"><strong>Importante:</strong> Si la ART se demora, tu abogado puede adelantarse iniciando el trámite de divergencia en la determinación de la incapacidad, que tiene el mismo efecto.</p>
    </section>
</section>'
            ],
            'valoracion-de-dano' => [
                'titulo' => 'Valoración de Daño',
                'descripcion' => 'Es la instancia en la que, si con tu abogado deciden presentarse a la valoración médica de la ART, puede llegar a firmarse un preacuerdo que después debe homologar la SRT.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Es la instancia en la que, si con tu abogado deciden presentarse a la valoración médica de la ART, puede llegar a firmarse un preacuerdo que después debe homologar la SRT.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>La ART, tras la cita de valoración (no es obligatoria para el trabajador)</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>21 días hábiles desde el alta médica</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí, indispensable antes de firmar cualquier preacuerdo</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>Presencial (consultorio médico de la ART) + homologación posterior por la SRT</td>
                </tr>
            </tbody>
        </table>

        <p class="txt-gris mt-20"><strong>Importante:</strong> un acuerdo homologado es muy difícil de anular después. Nunca firmes sin que lo revise antes un abogado especialista.</p>
        <p class="txt-gris mt-10">El abogado que te acompañe a la revisación médica realizada por la ART es indispensable que cuente con médico legista de parte, quien te acompañe y asesore en la revisación médica.</p>
    </section>
</section>'
            ],
            'fallecimiento-del-trabajador' => [
                'titulo' => 'Fallecimiento del Trabajador',
                'descripcion' => 'Se usa cuando el accidente o la enfermedad profesional termina en el fallecimiento del trabajador, y son los derechohabientes (cónyuge, hijos, padres) quienes tienen derecho a la indemnización.',
                'hero_texto' => '¿Conocés tus derechos frente a la ART? ⚖️
Si tuviste un accidente laboral o una enfermedad profesional y la ART no está respondiendo como debería, tenés derechos y herramientas para reclamar.
Las Comisiones Médicas de la SRT son la vía administrativa para resolver muchas de estas situaciones. En esta guía te explicamos, en un lenguaje simple:
✅ Qué derechos podés reclamar.
✅ Qué trámite corresponde según tu caso.
✅ Quién puede iniciarlo.
✅ Cuáles son los plazos para no perder derechos.
✅ Cuándo necesitás un abogado.
No dejes pasar el tiempo. Muchos trámites tienen plazos legales, y actuar a tiempo puede marcar la diferencia.',
                'contenido_extra' => '
<section class="seccion-texto bg-gris">
    <section class="contenedor">
        <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
        <p class="txt-gris">Se usa cuando el accidente o la enfermedad profesional termina en el fallecimiento del trabajador, y son los derechohabientes (cónyuge, hijos, padres) quienes tienen derecho a la indemnización.</p>

        <h3 class="mt-30">Datos clave del trámite</h3>
        <table class="tabla-datos mt-20">
            <tbody>
                <tr>
                    <td><strong>¿Quién lo inicia?</strong></td>
                    <td>La ART, junto con los derechohabientes</td>
                </tr>
                <tr>
                    <td><strong>Plazo para iniciarlo</strong></td>
                    <td>Sin plazo fijo publicado; si la ART no se contacta, se la puede intimar por carta documento</td>
                </tr>
                <tr>
                    <td><strong>¿Necesita abogado?</strong></td>
                    <td>Sí, imprescindible para representar a la familia en la homologación</td>
                </tr>
                <tr>
                    <td><strong>Modalidad</strong></td>
                    <td>La ART promueve el preacuerdo y lo eleva a homologación ante la SRT</td>
                </tr>
            </tbody>
        </table>
    </section>
</section>'
            ]
        ];

        if (!isset($tramites[$slug])) {
            http_response_code(404);
            $MetaTitulo = "404 - Página no encontrada | DerechosART";
            require_once __DIR__ . '/../../vistas/encabezado.php';
            echo '<main class="contenedor centro py-60"><h1>404</h1><p>LA PAGINA NO EXISTE.</p><a href="'.BASE_URL.'" class="btn btn-amarillo">VOLVER</a></main>';
            require_once __DIR__ . '/../../vistas/pie_pagina.php';
            exit();
        }

        $tramite = $tramites[$slug];
        $seoData = getSEOData($slug);
        $MetaTitulo = $seoData['titulo'] ?? $tramite['titulo'] . ' | DerechosART';
        $MetaDescripcion = $seoData['descripcion'] ?? $tramite['descripcion'];
        $MetaKeywords = $seoData['keywords'] ?? '';
        $MetaCanonical = $this->baseUrl . $slug;
        $ClaseBody = "interna";

        $TramiteTitulo = $tramite['titulo'];
        $TramiteDescripcion = $tramite['descripcion'];
        $TramiteHeroTexto = $tramite['hero_texto'];
        $TramiteContenido = $tramite['contenido_extra'];

        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/tramite-generico.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

}
