<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- METADATOS SEO DINAMICOS -->
    <title><?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?></title>
    <meta name="description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta name="keywords" content="abogados accidentes de trabajo, reclamos art, indemnizacion despido argentina, estudio juridico laboral, abogados art rosario, abogados art caba, abogados art neuquen, enfermedades profesionales srt, calculo incapacidad laboral, abogados laboralistas gratuitos">
    <link rel="canonical" href="<?php echo isset($MetaCanonical) ? $MetaCanonical : 'https://derechosartconsultas.com/'; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="publico/img/Logo_blanco_fondoNegro.png">
    <link rel="apple-touch-icon" href="publico/img/Logo_blanco_fondoNegro.png">

    <!-- OPEN GRAPH (FACEBOOK, WHATSAPP, ETC) -->
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta property="og:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta property="og:url" content="<?php echo isset($MetaCanonical) ? $MetaCanonical : 'https://derechosartconsultas.com/'; ?>">
    <meta property="og:site_name" content="DerechosART">
    <meta property="og:image" content="https://derechosartconsultas.com/publico/img/derechosart-og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($MetaTitulo) ? $MetaTitulo : 'Abogados especialistas en accidentes de trabajo y despidos - DerechosART'; ?>">
    <meta name="twitter:description" content="<?php echo isset($MetaDescripcion) ? $MetaDescripcion : 'Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales. Expertos en reclamos a la ART y tramites en SRT.'; ?>">
    <meta name="twitter:image" content="https://derechosartconsultas.com/publico/img/derechosart-og-image.jpg">

    <!-- DATOS ESTRUCTURADOS (SCHEMA.ORG) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "name": "DerechosART",
      "description": "Estudio Juridico especializado en accidentes laborales, despidos y enfermedades profesionales en Argentina.",
      "url": "https://derechosartconsultas.com/",
      "logo": "https://derechosartconsultas.com/publico/img/Logo_negro-DerechosART.webp",
      "image": "https://derechosartconsultas.com/publico/img/derechosart-og-image.jpg",
      "telephone": "+5491124786144",
      "email": "consultas@derechosart.com",
      "address": [
        {
          "@type": "PostalAddress",
          "streetAddress": "Ayacucho 283",
          "addressLocality": "CABA",
          "addressRegion": "Buenos Aires",
          "addressCountry": "AR"
        },
        {
          "@type": "PostalAddress",
          "streetAddress": "Rioja 644",
          "addressLocality": "Rosario",
          "addressRegion": "Santa Fe",
          "addressCountry": "AR"
        },
        {
          "@type": "PostalAddress",
          "addressLocality": "Neuquén",
          "addressRegion": "Neuquén",
          "addressCountry": "AR"
        }
      ],
      "priceRange": "$$",
      "openingHours": "Mo-Fr 09:00-18:00"
    }
    </script>

    <!-- FUENTES E ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@400;700&family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Kalam:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- ESTILOS PROPIOS (LIMPIOS Y MODULARES) -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>publico/css/Base.css?v=1.9">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>publico/css/Header.css?v=1.9">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>publico/css/Componentes.css?v=1.9">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>publico/css/Paginas.css?v=1.9">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>publico/css/Footer.css?v=1.9">

</head>
<body class="<?php echo $ClaseBody; ?>">

<header class="sitio-header">
    <section class="barra-superior bg-azul txt-blanco">
        <section class="contenedor flex-header">
            <address class="info-contacto">
                <span class="item"><i class="fas fa-envelope txt-dorado"></i> consultas@derechosart.com</span>
                <span class="item"><a href="https://wa.me/5491124786144" target="_blank" style="color: inherit;"><i class="fab fa-whatsapp txt-dorado"></i> 11-2478-6144</a></span>
                <span class="item"><i class="fas fa-map-marker-alt txt-dorado"></i> CABA, GBA, ROSARIO Y NEUQUÉN</span>
            </address>
            <nav class="redes-sociales">
                <a href="https://www.instagram.com/derechosart/" class="red-social ig"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@derechosart" class="red-social tk"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.facebook.com/Derechosart" class="red-social fb"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/@DerechosART" class="red-social yt"><i class="fab fa-youtube"></i></a>
            </nav>
        </section>
    </section>

    <section class="navegacion-principal">
        <section class="contenedor flex-header">
            <figure class="logo">
                <a href="?url=inicio">
                    <img src="<?php echo BASE_URL; ?>publico/img/Logo_negro-DerechosART.webp" alt="DerechosART Logo">
                </a>
            </figure>
            <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menu">
                <i class="fas fa-bars"></i>
            </button>

            <nav class="menu-escritorio">
                <ul>
                    <li><a href="?url=inicio">INICIO</a></li>
                    <li><a href="?url=quienes-somos">NUESTRO EQUIPO</a></li>
                    <li>
                        <a href="#" class="has-dropdown">CALCULA TU INDEMNIZACION</a>
                        <ul class="dropdown-menu">
                            <li><a href="?url=calculadora-accidentes">ACCIDENTES</a></li>
                            <li><a href="?url=calculadora-despidos">DESPIDOS</a></li>
                        </ul>
                    </li>
                    <li><a href="?url=faq">PREGUNTAS FRECUENTES</a></li>
                    <li><a href="?url=contacto">CONTACTO</a></li>
                    <li><a href="https://www.instagram.com/derechosart" target="_blank" style="color: black; font-size: 1.3rem;"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.tiktok.com/@derechosart" target="_blank" style="color: black; font-size: 1.3rem;"><i class="fab fa-tiktok"></i></a></li>
                    <li>
                        <a href="https://wa.me/5491124786144" target="_blank" style="color: black; font-size: 1.5rem; display: flex; align-items: center;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

        <!-- MENU MOVIL (FUERA DEL FLEX PARA EVITAR CONFLICTOS) -->
        <nav class="menu-movil" id="menu-movil">
            <ul>
                <li><a href="?url=inicio">INICIO</a></li>
                <li><a href="?url=quienes-somos">SOBRE NOSOTRAS</a></li>
                <li class="item-dropdown-movil">
                    <a href="#" id="trigger-calculadora">CALCULA TU INDEMNIZACION <i class="fas fa-chevron-down flecha-movil"></i></a>
                    <ul class="dropdown-movil" id="dropdown-calculadora">
                        <li><a href="?url=calculadora-accidentes">ACCIDENTES</a></li>
                        <li><a href="?url=calculadora-despidos">DESPIDOS</a></li>
                    </ul>
                </li>
                <li><a href="?url=faq">PREGUNTAS FRECUENTES</a></li>
                <li><a href="?url=contacto">CONTACTO</a></li>
                <li style="display: flex; gap: 25px; padding: 20px 25px; align-items: center;">
                    <a href="https://www.instagram.com/derechosart" target="_blank" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@derechosart" target="_blank" style="color: black; font-size: 1.8rem; padding: 0; border: none;"><i class="fab fa-tiktok"></i></a>
                    <a href="https://wa.me/5491124786144" target="_blank" style="color: black; font-size: 2.1rem; padding: 0; border: none;"><i class="fab fa-whatsapp"></i></a>
                </li>
            </ul>
        </nav>
    </section>
</header>
