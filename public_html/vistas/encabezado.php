<?php 
require_once __DIR__ . '/../config/SEO_CONFIG.php'; 
require_once __DIR__ . '/../src/helpers_images.php';
require_once __DIR__ . '/../src/helpers_icons.php';
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
    <!-- PRELOAD RECURSOS CRITICOS -->
    <link rel="preconnect" href="https://www.googletagmanager.com">

    
    <!-- PRELOAD FUENTES (Evita Flash of Unstyled Text) -->
    <link rel="preload" href="<?= BASE_URL ?>publico/fuentes/montserrat/montserrat-e56e84e5.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>publico/fuentes/montserrat/montserrat-b2c533f9.woff2" as="font" type="font/woff2" crossorigin>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- METADATOS SEO DINAMICOS -->
    <title><?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?></title>
    <meta name="description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Jurídico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y trámites en SRT.'; ?>">
    <meta name="keywords" content="<?php echo isset($MetaKeywords) ? $MetaKeywords : 'abogados accidentes de trabajo, reclamos art, indemnización despido argentina, estudio jurídico laboral'; ?>">
    <link rel="canonical" href="<?php 
        $canonico = isset($MetaCanonical) ? $MetaCanonical : SITE_URL;
        if (strpos($canonico, 'http') !== 0) {
            $canonico = rtrim(SITE_URL, '/') . '/' . ltrim($canonico, '/');
        }
        echo rtrim($canonico, '/');
    ?>">
    <!-- HREFLANG AUTORREFERENCIAL: CADA PAGINA APUNTA A SU PROPIA URL CANONICA -->
    <link rel="alternate" hreflang="es-AR" href="<?php echo rtrim($canonico, '/'); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo rtrim($canonico, '/'); ?>">
    <meta name="robots" content="<?php echo isset($MetaRobots) ? $MetaRobots : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'; ?>">
    <meta name="language" content="es-AR">
    <meta name="author" content="DerechosART">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" sizes="96x96" href="<?= BASE_URL ?>publico/img/favicon.png">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>publico/img/Logo_blanco_fondoNegro.png">

    <!-- OPEN GRAPH (FACEBOOK, WHATSAPP, ETC) -->
    <meta property="og:locale" content="es_AR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta property="og:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Jurídico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y trámites en SRT.'; ?>">
    <meta property="og:url" content="<?php echo rtrim($canonico, '/'); ?>">
    <meta property="og:site_name" content="DerechosART">
    <meta property="og:image" content="<?= SITE_OG_IMAGE ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="DerechosART - Especialistas en Accidentes de Trabajo">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta name="twitter:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Jurídico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y trámites en SRT.'; ?>">
    <meta name="twitter:image" content="<?= SITE_OG_IMAGE ?>">
    <meta name="twitter:image:alt" content="DerechosART">

    <!-- GOOGLE TAG (GTAG.JS) - GOOGLE ANALYTICS 4 & ADS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WW4QKYFDN9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      // CONFIGURACION DE GOOGLE ANALYTICS (G-WW4QKYFDN9)
      gtag('config', 'G-WW4QKYFDN9', { 'send_page_view': true });
      gtag('config', 'AW-16664008840');

      // FUNCIONES DE CONVERSION PARA GOOGLE ADS
      function reportConversionWhatsApp() {
        if (typeof gtag === 'function') {
          gtag('event', 'conversion', {
              'send_to': 'AW-16664008840/1q5-CMi2hbEcEIixgoo-',
              'value': 1.0,
              'currency': 'ARS'
          });
        }
      }

      function reportConversionForm() {
        if (typeof gtag === 'function') {
          gtag('event', 'conversion', {
              'send_to': 'AW-16664008840/mXiiCNXbhbEcEIixgoo-',
              'value': 1.0,
              'currency': 'ARS'
          });
        }
      }
    </script>

    <!-- DATOS ESTRUCTURADOS (SCHEMA.ORG) -->
    <!-- WebSite Schema (SearchAction) -->
    <script type="application/ld+json"><?php echo generateWebSiteSchema(); ?></script>

    <!-- Organization Schema -->
    <script type="application/ld+json"><?php echo generateOrganizationSchema(); ?></script>

    <?php if(defined('ZONA_ES_CABA_GBA') && ZONA_ES_CABA_GBA): ?>
        <!-- LocalBusiness Schema (Sede CABA) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchema(); ?></script>
    <?php elseif(isset($MetaCanonical) && strpos($MetaCanonical, 'rosario') !== false): ?>
        <!-- LocalBusiness Schema (Sede Rosario) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchemaRosario(); ?></script>
    <?php elseif(isset($MetaCanonical) && (strpos($MetaCanonical, 'neuquen') !== false || strpos($MetaCanonical, 'rio-negro') !== false)): ?>
        <!-- LocalBusiness Schema (Sede Neuquén) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchemaNeuquen(); ?></script>
    <?php elseif(isset($MetaCanonical) && strpos($MetaCanonical, 'salta') !== false): ?>
        <!-- LocalBusiness Schema (Sede Salta) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchemaSalta(); ?></script>
    <?php elseif(isset($MetaCanonical) && strpos($MetaCanonical, 'cordoba') !== false): ?>
        <!-- LocalBusiness Schema (Sede Córdoba) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchemaCordoba(); ?></script>
    <?php elseif(isset($MetaCanonical) && strpos($MetaCanonical, 'mendoza') !== false): ?>
        <!-- LocalBusiness Schema (Sede Mendoza) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchemaMendoza(); ?></script>
    <?php endif; ?>

    <?php if(isset($MetaCanonical) && strpos($MetaCanonical, 'quienes-somos') !== false): ?>
        <!-- Team Schema (E-E-A-T) -->
        <script type="application/ld+json"><?php echo generateTeamSchema(); ?></script>
    <?php endif; ?>

    <!-- Breadcrumb Schema -->
    <?php 
    $breadcrumbSchema = generateBreadcrumbSchema(isset($MetaCanonical) ? $MetaCanonical : 'https://derechosart.com.ar/');
    if ($breadcrumbSchema): ?>
        <script type="application/ld+json"><?php echo $breadcrumbSchema; ?></script>
    <?php endif; ?>

    <?php if(strpos($_SERVER['REQUEST_URI'], 'faq') !== false): ?>
        <!-- FAQ Schema (General) -->
        <script type="application/ld+json"><?php echo generateFAQSchema(); ?></script>
    <?php elseif(isset($MetaCanonical) && preg_match('#/(que-hacer)(/)?$#', $MetaCanonical)): ?>
        <!-- FAQ Schema (Qué hacer ante un accidente laboral) -->
        <script type="application/ld+json"><?php echo generateQueHacerFAQSchema(); ?></script>
        <!-- HowTo Schema (Qué hacer ante un accidente laboral) -->
        <script type="application/ld+json"><?php echo generateQueHacerHowToSchema(); ?></script>
        <!-- Speakable Schema (Voice Search) -->
        <script type="application/ld+json"><?php echo generateSpeakableSchema(isset($MetaCanonical) ? $MetaCanonical : SITE_URL, ['h1', '.subtitulo-hero']); ?></script>
    <?php elseif(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
        <!-- FAQ Schema (Despidos) -->
        <script type="application/ld+json"><?php echo generateFAQSchemaDespidos(); ?></script>
    <?php elseif(defined('ZONA_TIPO') && ZONA_TIPO === 'accidentes'): ?>
        <!-- FAQ Schema (Accidentes) -->
        <script type="application/ld+json"><?php echo generateFAQSchema(); ?></script>
    <?php endif; ?>

    <?php if(isset($FechaPublicacionBlog) && isset($AutorBlogSlug)): ?>
        <!-- BlogPosting Schema (GEO) -->
        <script type="application/ld+json"><?php echo GenerarSchemaArticuloBlog($MetaTitulo, $MetaDescripcion, $MetaCanonical, $FechaPublicacionBlog, $FechaModificacionBlog, $AutorBlogSlug, $CuerpoArticuloBlog ?? ''); ?></script>
    <?php endif; ?>

    <?php if(isset($ClaseBody) && $ClaseBody === 'home'): ?>
        <!-- Review Schema Individual (GEO) -->
        <script type="application/ld+json"><?php echo generateReviewSchemas(); ?></script>
        <!-- Speakable Schema (Voice Search) -->
        <script type="application/ld+json"><?php echo generateSpeakableSchema(SITE_URL, ['h1', '.titulo-hero']); ?></script>
    <?php endif; ?>

    <?php if(isset($MetaCanonical) && (strpos($MetaCanonical, 'calculadora-accidentes') !== false)): ?>
        <!-- WebApplication Schema (Calculator) -->
        <script type="application/ld+json"><?php echo generateWebApplicationSchema('accidentes'); ?></script>
        <!-- HowTo Schema (Calculator Steps) -->
        <script type="application/ld+json"><?php echo generateHowToSchema('accidentes'); ?></script>
    <?php elseif(isset($MetaCanonical) && (strpos($MetaCanonical, 'calculadora-despidos') !== false)): ?>
        <!-- WebApplication Schema (Calculator) -->
        <script type="application/ld+json"><?php echo generateWebApplicationSchema('despidos'); ?></script>
        <!-- HowTo Schema (Calculator Steps) -->
        <script type="application/ld+json"><?php echo generateHowToSchema('despidos'); ?></script>
    <?php endif; ?>

    <?php if(strpos($_SERVER['REQUEST_URI'], 'blog/') !== false): ?>
        <!-- Speakable Schema (Blog - Voice Search) -->
        <script type="application/ld+json"><?php echo generateSpeakableSchema(isset($MetaCanonical) ? $MetaCanonical : SITE_URL, ['h1', '.articulo-lead', '.articulo-titulo']); ?></script>
        <!-- FAQ Schema (Blog) -->
        <?php $ruta_blog = $_SERVER['REQUEST_URI']; ?>
        <?php if(strpos($ruta_blog, 'art-rechazo-accidente-laboral') !== false): ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchemaRechazo(); ?></script>
        <?php elseif(strpos($ruta_blog, 'comision-medica-neuquen') !== false): ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchemaComision('neuquen'); ?></script>
        <?php elseif(strpos($ruta_blog, 'comision-medica-cipolletti') !== false): ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchemaComision('cipolletti'); ?></script>
        <?php elseif(strpos($ruta_blog, 'baremo-2026') !== false): ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchemaBaremo(); ?></script>
        <?php elseif(strpos($ruta_blog, 'sigo-con-dolor') !== false): ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchemaAltaDolor(); ?></script>
        <?php else: ?>
        <script type="application/ld+json"><?php echo generateBlogFAQSchema(); ?></script>
        <?php endif; ?>
    <?php endif; ?>

    <!-- ========== ESTILOS Y FUENTES LOCALES ========== -->

    <?php if (isset($hide_layout_elements) && $hide_layout_elements): ?>
        <!-- ESTILOS ADMINISTRATIVOS -->
        <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/admin.css?v=3.2">
    <?php else: ?>
        <!-- ESTILOS COMERCIALES -->
        <style>
            <?php 
                $critical_css = file_get_contents(__DIR__ . '/../publico/css/critical.css');
                echo str_replace('../fuentes/', BASE_URL . 'publico/fuentes/', $critical_css);
            ?>
        </style>
        
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/fuentes.min.css?v=3.0" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/estilos.min.css?v=3.9" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/fuentes.min.css?v=3.0">
        <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/estilos.min.css?v=3.9">
    </noscript>

    <?php endif; ?>

</head>
<body class="<?php echo isset($ClaseBody) ? $ClaseBody : 'interna'; ?>">
<script>const BASE_URL = '<?= BASE_URL ?>';</script>

<?php if (isset($mostrar_header_admin) && $mostrar_header_admin): ?>
    <!-- HEADER ADMINISTRATIVO (SOLO LOGIN) -->
    <header class="site-header-admin">
        <nav class="main-nav-admin">
            <div class="container-flex-admin">
                <a href="<?= BASE_URL ?>inicio" class="logo-link-admin">
                    <?= render_img('Logo_blanco_fondotrans.png', 'DERECHOS ART', ['class' => 'logo-img-admin', 'width' => '80', 'loading' => 'eager']) ?>
                </a>
                <div class="nav-admin-title">Sistema de Gestión</div>
                <div class="nav-admin-links">
                    <a href="<?= BASE_URL ?>inicio" class="btn-volver-sitio"><?= render_icon('arrow-up-right-from-square') ?> Volver al sitio</a>
                </div>
            </div>
        </nav>
    </header>
<?php elseif (!isset($hide_layout_elements) || !$hide_layout_elements): ?>
    <!-- HEADER COMERCIAL -->
    <header class="sitio-header">

    <section class="navegacion-principal">
        <section class="contenedor contenedor-header flex-header">
            <figure class="logo">
                <a href="<?= BASE_URL ?>inicio">
                    <?= render_img('Logo_negro-DerechosART.webp', 'DerechosART - Abogados Accidentes de Trabajo y Despidos', [
                        'loading' => 'eager',
                        'fetchpriority' => 'high'
                    ]) ?>
                </a>
            </figure>
            <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menú">
                <?= render_icon('bars', '', '', '#000000') ?>
            </button>

            <nav class="menu-escritorio">
                <ul>
<li><a href="<?= BASE_URL ?>quienes-somos">Nuestro Equipo</a></li>
                    <li>
                        <a href="#" class="has-dropdown">ACCIDENTES</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= BASE_URL ?>tabla-incapacidad">Baremo 2026</a></li>
                            <li><a href="<?= BASE_URL ?>calculadora-accidentes">Calculadora indemnización</a></li>
                            <li><a href="<?= BASE_URL ?>comisiones-medicas">Comisiones médicas</a></li>
                            <li><a href="<?= BASE_URL ?>formularios-srt">Formularios SRT</a></li>
                            <li><a href="<?= BASE_URL ?>que-hacer">Qué hacer ante un accidente</a></li>
                            <li><a href="<?= BASE_URL ?>tramites-srt">Trámites SRT</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="has-dropdown">DESPIDOS</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= BASE_URL ?>calculadora-despidos">Calculadora indemnización</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.instagram.com/derechosart" target="_blank" aria-label="Instagram de DerechosART" style="color: black; font-size: 1.3rem; display: flex; align-items: center;"><?= render_icon('instagram', '', '', '#000000') ?></a></li>
                    <li><a href="https://www.youtube.com/@DerechosART" target="_blank" aria-label="YouTube de DerechosART" style="color: black; font-size: 1.3rem; display: flex; align-items: center;"><?= render_icon('youtube', '', '', '#000000') ?></a></li>
                    <li><a href="https://www.tiktok.com/@derechosart" target="_blank" aria-label="TikTok de DerechosART" style="color: black; font-size: 1.3rem; display: flex; align-items: center;"><?= render_icon('tiktok', '', '', '#000000') ?></a></li>
                    <li>
                        <a href="https://wa.me/5491124786144" target="_blank" aria-label="WhatsApp de DerechosART" style="color: black; font-size: 1.5rem; display: flex; align-items: center;">
                            <?= render_icon('whatsapp', '', '', '#000000') ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
</header>

<!-- MENU MOVIL (FUERA DE TODO CONTENEDOR PARA EVITAR OVERFLOW HIDDEN) -->
<nav class="menu-movil" id="menu-movil">
    <ul>
        <li><a href="<?= BASE_URL ?>quienes-somos">EQUIPO</a></li>
        <li class="item-dropdown-movil">
            <a href="#" id="trigger-accidentes">ACCIDENTES <?= render_icon('chevron-down', '', '', '#000000') ?></a>
            <ul class="dropdown-movil" id="dropdown-accidentes">
                <li><a href="<?= BASE_URL ?>tabla-incapacidad">Baremo 2026</a></li>
                <li><a href="<?= BASE_URL ?>calculadora-accidentes">Calculadora indemnización</a></li>
                <li><a href="<?= BASE_URL ?>comisiones-medicas">Comisiones médicas</a></li>
                <li><a href="<?= BASE_URL ?>formularios-srt">Formularios SRT</a></li>
                <li><a href="<?= BASE_URL ?>que-hacer">Qué hacer ante un accidente</a></li>
                <li><a href="<?= BASE_URL ?>tramites-srt">Trámites SRT</a></li>
            </ul>
        </li>
        <li class="item-dropdown-movil">
            <a href="#" id="trigger-despidos">DESPIDOS <?= render_icon('chevron-down', '', '', '#000000') ?></a>
            <ul class="dropdown-movil" id="dropdown-despidos">
                <li><a href="<?= BASE_URL ?>calculadora-despidos">Calculadora indemnización</a></li>
            </ul>
        </li>
        <li style="display: flex; gap: 1.5625rem; padding: 1.25rem 1.5625rem; align-items: center;">
            <a href="https://www.instagram.com/derechosart" target="_blank" aria-label="Instagram de DerechosART" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><?= render_icon('instagram', '', '', '#000000') ?></a>
            <a href="https://www.youtube.com/@DerechosART" target="_blank" aria-label="YouTube de DerechosART" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><?= render_icon('youtube', '', '', '#000000') ?></a>
            <a href="https://www.tiktok.com/@derechosart" target="_blank" aria-label="TikTok de DerechosART" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><?= render_icon('tiktok', '', '', '#000000') ?></a>
            <a href="https://wa.me/5491124786144" target="_blank" aria-label="WhatsApp de DerechosART" style="color: black; font-size: 2.1rem; padding: 0; border: none;"><?= render_icon('whatsapp', '', '', '#000000') ?></a>
        </li>
    </ul>
</nav>
<?php endif; ?>

<!-- BREADCRUMB VISIBLE -->
<?php if (!isset($hide_layout_elements) || !$hide_layout_elements):
    $uri_bread = $_SERVER['REQUEST_URI'];
    $is_home = ($uri_bread === '/' || $uri_bread === '/inicio' || $uri_bread === '/index.php');
    if (!$is_home):
        $es_blog_article = preg_match('#^/blog/.+#', $uri_bread);
        $es_blog_index = ($uri_bread === '/blog');
?>
<nav aria-label="Breadcrumb" style="font-size:0.75rem;color:#aaa;padding:0.5rem 1.25rem 0;max-width:73.125rem;margin:0 auto;line-height:1.4;">
    <a href="<?= BASE_URL ?>inicio" style="color:#aaa;text-decoration:none;">Inicio</a>
    <span style="margin:0 0.25rem;color:#ccc;">›</span>
    <?php if (defined('ZONA_NOMBRE_BUSQUEDA')): ?>
        <a href="<?= BASE_URL ?>zonas-atencion" style="color:#aaa;text-decoration:none;">Zonas de Atención</a>
        <span style="margin:0 0.25rem;color:#ccc;">›</span>
        <?php $tipo_b = (defined('ZONA_TIPO') && ZONA_TIPO === 'despidos') ? 'Despidos' : 'Accidentes'; ?>
        <span style="color:#888;">Abogados <?= $tipo_b ?> en <?= htmlspecialchars(ZONA_NOMBRE_BUSQUEDA) ?></span>
    <?php elseif ($es_blog_article): ?>
        <a href="<?= BASE_URL ?>blog" style="color:#aaa;text-decoration:none;">Blog</a>
        <span style="margin:0 0.25rem;color:#ccc;">›</span>
        <?php $titulo_corto = isset($MetaTitulo) ? trim(explode('|', $MetaTitulo)[0]) : 'Artículo'; ?>
        <span style="color:#888;"><?= htmlspecialchars($titulo_corto) ?></span>
    <?php elseif ($es_blog_index): ?>
        <span style="color:#888;">Blog</span>
    <?php else: ?>
        <?php if (isset($MetaTitulo)): ?>
            <span style="color:#888;"><?= htmlspecialchars(trim(explode('|', $MetaTitulo)[0])) ?></span>
        <?php else: ?>
            <?php $slug_b = basename(parse_url($uri_bread, PHP_URL_PATH)); ?>
            <span style="color:#888;"><?= htmlspecialchars(ucwords(str_replace('-', ' ', $slug_b))) ?></span>
        <?php endif; ?>
    <?php endif; ?>
</nav>
<?php endif; endif; ?>

<!-- SCRIPT CONSOLIDADO APP.JS (NAVEGACION + SUBRAYADO + GA4 + PERFORMANCE) -->
<script src="<?= BASE_URL ?>publico/js/app.min.js?v=1.0" defer></script>
