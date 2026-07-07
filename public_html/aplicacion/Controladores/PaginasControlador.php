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
        $MetaTitulo = "Tabla de Incapacidad Laboral (Baremo) - DerechosART";
        $MetaDescripcion = "Consulta la tabla oficial de porcentajes de incapacidad por accidentes y enfermedades laborales según el Decreto 659/96.";
        $MetaKeywords = "tabla incapacidad, baremo SRT, decreto 659/96, porcentaje incapacidad";
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
        $provincias = $formModel->getProvincias();
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

        // REORGANIZAR EN 5 REGIONES FIJAS PARA LAS COLUMNAS
        $mapaRegiones = [
            [
                'id' => 'caba-gba',
                'titulo' => 'CABA y GBA',
                'slug_base' => 'caba-y-gba',
                'subgrupos' => [
                    ['nombre' => 'CABA', 'provincia' => 'Ciudad Autónoma de Buenos Aires'],
                    ['nombre' => 'GBA', 'provincia' => 'Buenos Aires'],
                ],
            ],
            [
                'id' => 'rosario',
                'titulo' => 'Rosario y Alrededores',
                'slug_base' => 'rosario',
                'subgrupos' => [
                    ['nombre' => 'Santa Fe', 'provincia' => 'Santa Fe'],
                ],
            ],
            [
                'id' => 'neuquen-rio-negro',
                'titulo' => 'Neuquén y Río Negro',
                'slug_base' => 'neuquen-y-rio-negro',
                'subgrupos' => [
                    ['nombre' => 'Neuquén', 'provincia' => 'Neuquén'],
                    ['nombre' => 'Río Negro', 'provincia' => 'Río Negro'],
                ],
            ],
            [
                'id' => 'salta',
                'titulo' => 'Salta',
                'slug_base' => 'salta',
                'subgrupos' => [
                    ['nombre' => 'Salta', 'provincia' => 'Salta'],
                ],
            ],
            [
                'id' => 'cordoba',
                'titulo' => 'Córdoba',
                'slug_base' => 'cordoba',
                'subgrupos' => [
                    ['nombre' => 'Córdoba', 'provincia' => 'Córdoba'],
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
                $subgrupos[] = [
                    'nombre' => $sub['nombre'],
                    'localidades' => $localidades,
                ];
            }
            $regiones[] = [
                'id' => $config['id'],
                'titulo' => $config['titulo'],
                'slug_base' => $config['slug_base'],
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
        if (isset($ContenidoZonas[$slug_puro])) {
            $ZonaContenidoUnico = $ContenidoZonas[$slug_puro]['parrafo_local'] ?? '';
        }
        if (!defined("ZONA_CONTENIDO_UNICO")) define("ZONA_CONTENIDO_UNICO", $ZonaContenidoUnico);

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/inicio.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
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

    public function blog($slug = null) {
        if (!$slug) {
            header("Location: " . $this->baseUrl . "blog");
            exit;
        }

        $vista = null;
        $seo_slug = null;

        if ($slug === "accidente-laboral-guia-2026") {
            $vista = "blog-guia-accidentes";
            $seo_slug = "blog-accidente-laboral";
        } elseif ($slug === "art-rechazo-accidente-laboral") {
            $vista = "blog-art-rechazo";
            $seo_slug = "blog-art-rechazo";
        } elseif ($slug === "me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer") {
            $vista = "blog-alta-medica-dolor";
            $seo_slug = "blog-alta-medica-dolor";
        }

        if (!$vista) {
            header("Location: " . $this->baseUrl . "inicio");
            exit;
        }

        $seoData = getSEOData($seo_slug);
        $MetaTitulo = $seoData['titulo'];
        $MetaDescripcion = $seoData['descripcion'];
        $MetaKeywords = $seoData['keywords'];
        $MetaCanonical = $this->baseUrl . "blog/" . $slug;
        $ClaseBody = "blog-post-page";

        // VARIABLES EN PASCALCASE EN ESPANOL Y SIN ACENTOS PARA ALIMENTAR EL SCHEMA DEL BLOG
        if ($slug === "art-rechazo-accidente-laboral") {
            $FechaPublicacionBlog = "2026-06-25T10:00:00-03:00";
            $FechaModificacionBlog = "2026-06-25T10:00:00-03:00";
            $AutorBlogSlug = "maria-jose-zalazar"; // ENLAZADO CON DRA. MARIA JOSE ZALAZAR EN SEO_CONFIG
        } elseif ($slug === "me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer") {
            $FechaPublicacionBlog = "2026-07-02T12:00:00-03:00";
            $FechaModificacionBlog = "2026-07-02T12:00:00-03:00";
            $AutorBlogSlug = "romina-koniuch"; // ENLAZADO CON DRA. ROMINA KOÑIUCH EN SEO_CONFIG
        } else {
            $FechaPublicacionBlog = "2026-05-14T09:00:00-03:00";
            $FechaModificacionBlog = "2026-06-03T18:00:00-03:00";
            $AutorBlogSlug = "nair-chemes"; // ENLAZADO CON DRA. NAIR CHEMES EN SEO_CONFIG
        }

        // EXTRACTO DE 5000 CARACTERES PARA articleBody EN SCHEMA BLOGPOSTING
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
    public function Sitemap() {
        header('Content-Type: application/xml; charset=utf-8');

        $siteUrl = rtrim(SITE_URL, '/');
        $hoy = date('Y-m-d');

        // PAGINAS PRINCIPALES (ESTATICAS)
        $paginasPrincipales = [
            ['loc' => '/', 'priority' => '1.00'],
            ['loc' => '/quienes-somos', 'priority' => '0.80'],
            ['loc' => '/accidentes-de-trabajo', 'priority' => '0.90'],
            ['loc' => '/despidos', 'priority' => '0.90'],
            ['loc' => '/enfermedades-profesionales', 'priority' => '0.85'],
            ['loc' => '/comisiones-medicas', 'priority' => '0.85'],
            ['loc' => '/faq', 'priority' => '0.95'],
            ['loc' => '/contacto', 'priority' => '0.80'],
            ['loc' => '/calculadora-accidentes', 'priority' => '0.90'],
            ['loc' => '/calculadora-despidos', 'priority' => '0.90'],
            ['loc' => '/que-hacer', 'priority' => '0.85'],
            ['loc' => '/cual-es-mi-art', 'priority' => '0.80'],
            ['loc' => '/zonas-atencion', 'priority' => '0.90'],
            ['loc' => '/blog/accidente-laboral-guia-2026', 'priority' => '0.80'],
            ['loc' => '/blog/art-rechazo-accidente-laboral', 'priority' => '0.80'],
            ['loc' => '/abogados-art-despidos', 'priority' => '0.80'],
            ['loc' => '/abogados-art-accidentes', 'priority' => '0.80'],
        ];

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

}
