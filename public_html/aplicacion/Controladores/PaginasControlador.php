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
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/zonas-atencion.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
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
        $es_zona_valida = in_array($nombre_zona_plano, $zonas_especiales_permitidas) || $modeloUbicacion->existeZona($nombre_zona_plano);

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

        $is_subfolder = strpos($_SERVER["REQUEST_URI"], "/landings/") !== false;
        $MetaCanonical = $this->baseUrl . ($is_subfolder ? "landings/" : "") . $slug;

        $ClaseBody = "home zona-land";

        if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", $nombre_zona_html);
        if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", $nombre_zona_plano);
        if (!defined("ZONA_TIPO")) define("ZONA_TIPO", $tipo_landing);
        if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", $es_caba_gba);
        if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", $texto_dinamico);

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/inicio.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

    public function blog($slug = null) {
        if (!$slug) {
            $this->Inicio(); 
            return;
        }

        $vista = null;
        $seo_slug = null;

        if ($slug === "accidente-laboral-guia-2026") {
            $vista = "blog-guia-accidentes";
            $seo_slug = "blog-accidente-laboral";
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
        $FechaPublicacionBlog = "2026-05-14T09:00:00-03:00";
        $FechaModificacionBlog = "2026-06-03T18:00:00-03:00";
        $AutorBlogSlug = "nair-chemes"; // ENLAZADO CON DRA. NAIR CHEMES EN SEO_CONFIG

        require_once __DIR__ . "/../../vistas/encabezado.php";
        require_once __DIR__ . "/../../vistas/paginas/$vista.php";
        require_once __DIR__ . "/../../vistas/pie_pagina.php";
    }

}
