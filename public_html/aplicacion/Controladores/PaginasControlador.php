<?php

require_once __DIR__ . '/../Modelos/FormModel.php';
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
        $MetaKeywords = "formularios SRT, descarga formularios, reclamos SRT, tramites ART";
        $MetaCanonical = $this->baseUrl . "formularios-srt";
        $ClaseBody = "interna";
        require_once __DIR__ . '/../../vistas/encabezado.php';
        require_once __DIR__ . '/../../vistas/paginas/formularios-srt.php';
        require_once __DIR__ . '/../../vistas/pie_pagina.php';
    }

    public function BuscadorComisiones() {
        $MetaTitulo = "Buscador de Comisiones Médicas SRT - DerechosART";
        $MetaDescripcion = "Encontrá la sede de la Superintendencia de Riesgos del Trabajo más cercana a tu domicilio o lugar de trabajo.";
        $MetaKeywords = "comisiones medicas, buscador SRT, sedes SRT argentina, donde esta la comisión medica";
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
        $nombre_zona_plano = str_ireplace(["Caba", "Gba", " Y ", " O "], ["CABA", "GBA", " y ", " o "], $nombre_zona_plano);

        if ($slug === "abogados-art-despidos" || $slug === "abogados-art-accidentes") {
            $nombre_zona_plano = "CABA y GBA";
        }

        // --- VALIDACION DE ZONA ---
        $zonas_especiales_permitidas = ["CABA y GBA", "Neuquen y Rio Negro", "Rosario", "Santa Fe", "Cordoba", "Mendoza"];
        $es_zona_valida = in_array($nombre_zona_plano, $zonas_especiales_permitidas) || $modeloUbicacion->existeZona($nombre_zona_plano);

        if (!$es_zona_valida) {
            header("Location: " . BASE_URL);
            exit();
        }
        // --- FIN VALIDACION ---

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

        // 3. DETERMINAR SI PERTENECE A CABA/GBA
        $zonas_caba_gba = [
            "palermo", "belgrano", "avellaneda", "lanus", "quilmes", "san-isidro", "caballito", "flores", "recoleta", "almagro", "nunez", "villa-urquiza", 
            "agronomia", "balvanera", "barracas", "boedo", "chacarita", "coghlan", "colegiales", "constitucion", "floresta", "la-boca", "la-paternal", 
            "liniers", "mataderos", "monte-castro", "monserrat", "nueva-pompeya", "parque-avellaneda", "parque-chacabuco", "parque-chas", "parque-patricios", 
            "puerto-madero", "retiro", "saavedra", "san-cristobal", "san-nicolas", "san-telmo", "velez-sarsfield", "versalles", "villa-crespo", 
            "villa-del-parque", "villa-devoto", "villa-general-mitre", "villa-lugano", "villa-luro", "villa-ortuzar", "villa-pueyrredon", "villa-real", 
            "villa-riachuelo", "villa-santa-rita", "villa-soldati", "lomas-de-zamora", "vicente-lopez", "tigre", "moron", "olivos", "florida", "la-lucila", 
            "munro", "carapachay", "villa-adelina", "martinez", "boulogne", "beccar", "acassuso", "san-fernando", "victoria", "virreyes", "general-pacheco", 
            "don-torcuato", "benavidez", "rincon-de-milberg", "el-talar", "escobar", "belen-de-escobar", "garin", "ingeniero-maschwitz", "pilar", "del-viso", 
            "presidente-derqui", "villa-rosa", "san-martin", "villa-ballester", "san-andres", "jose-leon-suarez", "villa-lynch", "tres-de-febrero", 
            "caseros", "ciudadela", "santos-lugares", "loma-hermosa", "castelar", "haedo", "el-palomar", "hurlingham", "villa-tesei", "william-morris", 
            "ituzaingo", "villa-udaondo", "merlo", "san-antonio-de-padua", "parque-san-martin", "moreno", "paso-del-rey", "la-reja", "francisco-alvarez", 
            "general-rodriguez", "sarandi", "wilde", "dock-sud", "lanus-este", "lanus-oeste", "remedios-de-escalada", "banfield", "temperley", 
            "turdera", "bernal", "ezpeleta", "san-francisco-solano", "berazategui", "ranelagh", "hudson", "florencio-varela", "bosques", "zeballos", 
            "almirante-brown", "adrogue", "burzaco", "glew", "claypole", "rafael-calzada", "esteban-echeverria", "monte-grande", "el-jaguel", "canning", 
            "ezeiza", "tristan-suarez", "la-union", "la-matanza", "san-justo", "ramos-mejia", "lomas-del-mirador", "laferrere", "gonzalez-catan", 
            "virrey-del-pino", "malvinas-argentinas", "los-polvorines", "tortuguitas", "grand-bourg", "villa-de-mayo", "jose-c-paz", "sol-y-verde", 
            "san-miguel", "bella-vista", "campo-de-mayo", "caba-o-gba"
        ];

        $es_caba_gba = in_array($slug_puro, $zonas_caba_gba);

        // 4. CONFIGURAR TEXTOS Y SEO SEGUN TIPO Y ZONA
        $seo_slug = null;
        if ($tipo_landing === "despidos" && $es_caba_gba) {
            $seo_slug = "abogados-art-despidos";
        } elseif ($slug === "abogados-art-accidentes") {
            $seo_slug = "abogados-art-accidentes";
        } elseif ($slug === "abogados-art-rosario") {
            $seo_slug = "abogados-art-rosario";
        } elseif ($slug === "abogados-art-neuquen" || $slug === "abogados-art-neuquen-y-rio-negro") {
            $seo_slug = "abogados-art-neuquen";
        }

        $seoData = $seo_slug ? getSEOData($seo_slug) : null;

        if ($seoData) {
            $MetaTitulo = str_replace("CABA y GBA", $nombre_zona_plano, $seoData['titulo']);
            $MetaDescripcion = str_replace("CABA o GBA", $nombre_zona_plano, $seoData['descripcion']);
            $MetaKeywords = $seoData['keywords'];
            $landing_texto = ($tipo_landing === "despidos") 
                ? "Si fuiste despedido/a en $nombre_zona_plano, estamos para defenderte. Somos un equipo de abogados especializados en derecho laboral. Atendemos en $nombre_zona_plano. Analizamos tu caso sin costo y te acompañamos para que cobres la indemnización máxima que te corresponde por ley."
                : "Si tuviste un accidente de trabajo o camino a él (in itinere), nosotros estamos para defenderte. Somos un equipo de abogados laboralistas especialistas en ART. Atendemos en $nombre_zona_plano, brindando asistencia jurídica para tus trámites ante la Superintendencia de Riesgos del Trabajo (SRT). Analizamos tu caso de manera gratuita y te acompañamos para que cobres la máxima indemnización posible que te corresponde por ley.";
        } else {
            // FALLBACK O LOCALIDADES ESPECIFICAS
            if ($tipo_landing === "despidos") {
                $MetaTitulo = "Abogados Especialistas en Despidos en $nombre_zona_plano";
                $MetaDescripcion = "¿Te despidieron en $nombre_zona_plano? Defendemos tus derechos para que cobres la indemnización máxima. Especialistas en derecho laboral. Consultá sin costo.";
                $landing_texto = "Si fuiste despedido/a en $nombre_zona_plano, estamos para defenderte. Somos un equipo de abogados especializados en derecho laboral. Atendemos en $nombre_zona_plano. Analizamos tu caso sin costo y te acompañamos para que cobres la indemnización máxima que te corresponde por ley.";
            } else {
                $MetaTitulo = "Abogados de ART en $nombre_zona_plano – ¿Accidente de Trabajo? Consultá Gratis";
                $MetaDescripcion = "¿Buscás abogados en $nombre_zona_plano especialistas en ART? Te ayudamos a cobrar tu indemnización por accidente laboral o enfermedad. Atención en $nombre_zona_plano sin costo inicial.";
                $landing_texto = "Si tuviste un accidente de trabajo o camino a él (in itinere), nosotros estamos para defenderte. Somos un equipo de abogados laboralistas especialistas en ART. Atendemos en $nombre_zona_plano, brindando asistencia jurídica para tus trámites ante la Superintendencia de Riesgos del Trabajo (SRT). Analizamos tu caso de manera gratuita y te acompañamos para que cobres la máxima indemnización posible que te corresponde por ley.";
            }
        }
        
        if ($tipo_landing === "despidos") {
            if (!defined("ZONA_H1_ESPECIAL")) define("ZONA_H1_ESPECIAL", "Abogados Especialistas en Despidos en $nombre_zona_html");
        } else {
            if (!defined("ZONA_H1_ESPECIAL")) define("ZONA_H1_ESPECIAL", "Abogados de ART en $nombre_zona_html");
        }
        
        if (!isset($MetaKeywords)) {
            $MetaKeywords = "abogados $nombre_zona_plano, accidentes trabajo $nombre_zona_plano, abogados ART $nombre_zona_plano, despidos $nombre_zona_plano, indemnizacion $nombre_zona_plano";
        }

        $is_subfolder = strpos($_SERVER["REQUEST_URI"], "/landings/") !== false;
        $MetaCanonical = $this->baseUrl . ($is_subfolder ? "landings/" : "") . $slug;

        $ClaseBody = "home zona-land";

        if (!defined("ZONA_NOMBRE_SEO")) define("ZONA_NOMBRE_SEO", $nombre_zona_html);
        if (!defined("ZONA_NOMBRE_BUSQUEDA")) define("ZONA_NOMBRE_BUSQUEDA", $nombre_zona_plano);
        if (!defined("ZONA_TIPO")) define("ZONA_TIPO", $tipo_landing);
        if (!defined("ZONA_ES_CABA_GBA")) define("ZONA_ES_CABA_GBA", $es_caba_gba);
        if (!defined("ZONA_TEXTO_DINAMICO")) define("ZONA_TEXTO_DINAMICO", $landing_texto);

        require __DIR__ . "/../../vistas/encabezado.php";
        require __DIR__ . "/../../vistas/paginas/inicio.php";
        require __DIR__ . "/../../vistas/pie_pagina.php";
    }

    /**
     * MANEJA LA SECCION DEL BLOG (ESCALABLE)
     */
    public function blog($slug = null) {
        if (!$slug) {
            $this->inicio(); 
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

        require __DIR__ . "/../../vistas/encabezado.php";
        require __DIR__ . "/../../vistas/paginas/$vista.php";
        require __DIR__ . "/../../vistas/pie_pagina.php";
    }

}
