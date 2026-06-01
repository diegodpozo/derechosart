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
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    
    <!-- PRELOAD FUENTES (Evita Flash of Unstyled Text) -->
    <link rel="preload" href="<?= BASE_URL ?>publico/fuentes/montserrat/montserrat-e56e84e5.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>publico/fuentes/montserrat/montserrat-b2c533f9.woff2" as="font" type="font/woff2" crossorigin>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- METADATOS SEO DINAMICOS -->
    <title><?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?></title>
    <meta name="description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta name="keywords" content="<?php echo isset($MetaKeywords) ? $MetaKeywords : 'abogados accidentes de trabajo, reclamos art, indemnizacion despido argentina, estudio juridico laboral'; ?>">
    <link rel="canonical" href="<?php echo isset($MetaCanonical) ? $MetaCanonical : 'https://derechosart.com.ar/'; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="es-AR">
    <meta name="author" content="DerechosART">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>publico/img/Logo_blanco_fondoNegro.png">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>publico/img/Logo_blanco_fondoNegro.png">

    <!-- OPEN GRAPH (FACEBOOK, WHATSAPP, ETC) -->
    <meta property="og:locale" content="es_AR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta property="og:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta property="og:url" content="<?php echo isset($MetaCanonical) ? $MetaCanonical : 'https://derechosart.com.ar/'; ?>">
    <meta property="og:site_name" content="DerechosART">
    <meta property="og:image" content="<?= SITE_OG_IMAGE ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="DerechosART - Especialistas en Accidentes de Trabajo">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta name="twitter:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta name="twitter:image" content="<?= SITE_OG_IMAGE ?>">
    <meta name="twitter:image:alt" content="DerechosART">

    <!-- GOOGLE ADS & ANALYTICS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WW4QKYFDN9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      // Configuración de Google Analytics (Existente)
      gtag('config', 'G-SBNESCYEYL', {
        'page_path': window.location.pathname,
        'page_title': document.title,
        'anonymize_ip': true,
        'cookie_domain': 'derechosart.com.ar',
        'allow_google_signals': false
      });
      
      // Configuración de Google Ads / Nueva GA4
      gtag('config', 'G-WW4QKYFDN9');

      // Funciones de Conversión para Google Ads
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
    <!-- Organization Schema -->
    <script type="application/ld+json"><?php echo generateOrganizationSchema(); ?></script>

    <?php if(defined('ZONA_ES_CABA_GBA') && ZONA_ES_CABA_GBA): ?>
        <!-- LocalBusiness Schema (Sede CABA) -->
        <script type="application/ld+json"><?php echo generateLocalBusinessSchema(); ?></script>
    <?php endif; ?>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json"><?php echo generateBreadcrumbSchema(isset($MetaCanonical) ? $MetaCanonical : 'https://derechosart.com.ar/'); ?></script>

    <?php if(strpos($_SERVER['REQUEST_URI'], 'faq') !== false): ?>
        <!-- FAQ Schema (General) -->
        <script type="application/ld+json"><?php echo generateFAQSchema(); ?></script>
    <?php elseif(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
        <!-- FAQ Schema (Despidos) -->
        <script type="application/ld+json"><?php echo generateFAQSchemaDespidos(); ?></script>
    <?php elseif(defined('ZONA_TIPO') && ZONA_TIPO === 'accidentes'): ?>
        <!-- FAQ Schema (Accidentes) -->
        <script type="application/ld+json"><?php echo generateFAQSchema(); ?></script>
    <?php endif; ?>

    <!-- ========== ESTILOS Y FUENTES LOCALES ========== -->
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/fuentes.css">

    <!-- OPTIMIZACION MOBILE -->
    <script>const BASE_URL = '<?= BASE_URL ?>';</script>

    <?php if (isset($hide_layout_elements) && $hide_layout_elements): ?>
        <!-- ESTILOS ADMINISTRATIVOS -->
        <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/admin.css?v=3.0">
        <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/iconos-fix.css?v=1.0">
    <?php else: ?>
        <!-- ESTILOS COMERCIALES -->
        <style>
            <?php 
                $critical_css = file_get_contents(__DIR__ . '/../publico/css/critical.css');
                // Convertimos rutas relativas a absolutas para que funcionen "inline"
                echo str_replace('../fuentes/', BASE_URL . 'publico/fuentes/', $critical_css);
            ?>
        </style>
        
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/estilos.css?v=3.0" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="<?= BASE_URL ?>publico/css/estilos.css?v=3.0"></noscript>
    
    <!-- FIX PARA ICONOS SVG FA 6.5.1 -->
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/iconos-fix.css?v=1.0">
    
    <!-- RESPONSIVE CSS RESEÑAS - OPTIMIZADO -->
    <link rel="stylesheet" href="<?= BASE_URL ?>publico/css/resenyas-responsive.css?v=2.0">

    <style>
        /* Neutralizar negritas en conectores de zonas */
        .titulo-hero span span, 
        .subrayado-amarillo span { 
            font-weight: 400 !important; 
        }
    </style>
    
    <script src="<?= BASE_URL ?>publico/js/performance-optimization.js?v=1.0" async></script>
    <?php endif; ?>

</head>
<body class="<?php echo isset($ClaseBody) ? $ClaseBody : 'interna'; ?>">

<?php if (isset($mostrar_header_admin) && $mostrar_header_admin): ?>
    <!-- HEADER ADMINISTRATIVO (SOLO LOGIN) -->
    <header class="site-header-admin">
        <nav class="main-nav-admin">
            <div class="container-flex-admin">
                <a href="<?= BASE_URL ?>inicio" class="logo-link-admin">
                    <?= render_img('Logo_blanco_fondotrans.png', 'DERECHOS ART', ['class' => 'logo-img-admin', 'width' => '80', 'loading' => 'eager']) ?>
                </a>
                <div class="nav-admin-title">SISTEMA DE GESTION</div>
                <div class="nav-admin-links">
                    <a href="<?= BASE_URL ?>inicio" class="btn-volver-sitio"><?= render_icon('arrow-up-right-from-square') ?> VOLVER AL SITIO</a>
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
                        'width' => '240', 
                        'height' => '80', 
                        'loading' => 'eager',
                        'fetchpriority' => 'high'
                    ]) ?>
                </a>
            </figure>
            <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menu">
                <?= render_icon('bars', '', '', '#000000') ?>
            </button>

            <nav class="menu-escritorio">
                <ul>
                    <li><a href="<?= BASE_URL ?>inicio">INICIO</a></li>
                    <li><a href="<?= BASE_URL ?>quienes-somos">NUESTRO EQUIPO</a></li>
                    <li>
                        <a href="#" class="has-dropdown">CALCULA TU INDEMNIZACION</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= BASE_URL ?>calculadora-accidentes">ACCIDENTES</a></li>
                            <li><a href="<?= BASE_URL ?>calculadora-despidos">DESPIDOS</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= BASE_URL ?>faq">PREGUNTAS FRECUENTES</a></li>
                    <li><a href="<?= BASE_URL ?>contacto">CONTACTO</a></li>
                    <li><a href="https://www.instagram.com/derechosart" target="_blank" style="color: black; font-size: 1.3rem; display: flex; align-items: center;"><?= render_icon('instagram', '', '', '#000000') ?></a></li>
                    <li><a href="https://www.tiktok.com/@derechosart" target="_blank" style="color: black; font-size: 1.3rem; display: flex; align-items: center;"><?= render_icon('tiktok', '', '', '#000000') ?></a></li>
                    <li>
                        <a href="https://wa.me/5491124786144" target="_blank" style="color: black; font-size: 1.5rem; display: flex; align-items: center;">
                            <?= render_icon('whatsapp', '', '', '#000000') ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

        <!-- MENU MOVIL (FUERA DEL FLEX PARA EVITAR CONFLICTOS) -->
        <nav class="menu-movil" id="menu-movil">
            <ul>
                <li><a href="<?= BASE_URL ?>inicio">INICIO</a></li>
                <li><a href="<?= BASE_URL ?>quienes-somos">NUESTRO EQUIPO</a></li>
                <li class="item-dropdown-movil">
                    <a href="#" id="trigger-calculadora">CALCULA TU INDEMNIZACION <?= render_icon('chevron-down', '', '', '#000000') ?></a>
                    <ul class="dropdown-movil" id="dropdown-calculadora">
                        <li><a href="<?= BASE_URL ?>calculadora-accidentes">ACCIDENTES</a></li>
                        <li><a href="<?= BASE_URL ?>calculadora-despidos">DESPIDOS</a></li>
                    </ul>
                </li>
                <li><a href="<?= BASE_URL ?>faq">PREGUNTAS FRECUENTES</a></li>
                <li><a href="<?= BASE_URL ?>contacto">CONTACTO</a></li>
                <li style="display: flex; gap: 25px; padding: 20px 25px; align-items: center;">
                    <a href="https://www.instagram.com/derechosart" target="_blank" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><?= render_icon('instagram', '', '', '#000000') ?></a>
                    <a href="https://www.tiktok.com/@derechosart" target="_blank" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><?= render_icon('tiktok', '', '', '#000000') ?></a>
                    <a href="https://wa.me/5491124786144" target="_blank" style="color: black; font-size: 2.1rem; padding: 0; border: none;"><?= render_icon('whatsapp', '', '', '#000000') ?></a>
                </li>
            </ul>
        </nav>
    </section>
</header>
<?php endif; ?>

<!-- SCRIPT MINIFICADO (Deferred, improve INP/FID) -->
<script src="<?= BASE_URL ?>publico/js/navegacion.min.js?v=3.0" defer></script>

<!-- ANALYTICS EVENTS -->
<script src="<?= BASE_URL ?>publico/js/ga4_events.js?v=1.0" defer></script>
