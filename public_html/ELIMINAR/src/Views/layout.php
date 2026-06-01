<?php
/**
 * LAYOUT PRINCIPAL - DERECHOS ART CONSULTAS
 */

// 1. CONFIGURACION DE VALORES PREDETERMINADOS
$pageTitle = $pageTitle ?? 'REGISTRO DE CONSULTAS';
$hide_layout_elements = $hide_layout_elements ?? false;

// Usamos BASE_URL definido en index.php
$url_base = rtrim(BASE_URL, '/');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- FAVICON -->
    <link rel="icon" href="<?= $url_base ?>/favicom.ico" type="image/x-icon">
    
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="<?= $url_base ?>/css/estilos.css?v=2.0">
    <link rel="stylesheet" href="<?= $url_base ?>/css/modal.css?v=2.0">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>

    <?php if (!$hide_layout_elements): ?>
    <header class="site-header">
        <nav class="main-nav">
            <div class="container-flex">
                <!-- LOGO PRINCIPAL (SIEMPRE A LA IZQUIERDA) -->
                <a href="<?= $url_base ?>/" class="logo-link">
                    <img src="<?= $url_base ?>/Logo_blanco_fondotrans.png" alt="DERECHOS ART LOGO" class="logo-img" width="90" fetchpriority="high">
                </a>

                <!-- MENU HAMBURGUESA (A LA DERECHA EN MOVIL) -->
                <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="menu-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </label>

                <!-- ENLACES DE NAVEGACION -->
                <div class="nav-menu-wrapper">
                    <ul class="nav-links">
                        <li><a href="<?= $url_base ?>/">INICIO</a></li>
                        <li><a href="<?= $url_base ?>/calculadora">CALCULAR INDEMNIZACION</a></li>
                        <li><a href="https://derechosart.com/quienes-somos/" target="_blank" rel="noopener noreferrer">SOBRE NOSOTROS</a></li>
                        <li><a href="https://www.instagram.com/derechosart/" target="_blank" rel="noopener noreferrer">CONTACTO</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php endif; ?>

    <main class="main-content">
        <?php
        if (isset($_viewPath) && file_exists($_viewPath)) {
            require $_viewPath;
        } else {
            echo "<div class='container'><p>ERROR: NO SE PUDO CARGAR EL CONTENIDO DE LA PAGINA.</p></div>";
        }
        ?>
    </main>

    <?php if (!$hide_layout_elements): ?>
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <a href="<?= $url_base ?>/" class="logo-footer">
                    <img src="<?= $url_base ?>/Logo_blanco_fondotrans.png" alt="DERECHOS ART LOGO" class="logo-img" width="90" loading="lazy">
                </a>
                <p>NOS DEDICAMOS A PROTEGER SUS DERECHOS COMO TRABAJADOR, BRINDANDO ASESORAMIENTO EXPERTO Y REPRESENTACION LEGAL DE LA MÁS ALTA CALIDAD.</p>
            </div>

            <div class="footer-column">
                <h4>ACCESOS DIRECTOS</h4>
                <ul>
                    <li><a href="<?= $url_base ?>/">INICIO</a></li>
                    <li><a href="<?= $url_base ?>/calculadora">CALCULAR INDEMNIZACION</a></li>
                    <li><a href="https://derechosart.com/accidentes-de-trabajo/" target="_blank" rel="noopener noreferrer">SERVICIOS</a></li>
                    <li><a href="https://derechosart.com/quienes-somos/" target="_blank" rel="noopener noreferrer">SOBRE NOSOTROS</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>CONTACTO</h4>
                <p>📍 <a href="https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!4m17!1m8!3m7!1s0x95bccaea03aeace5:0xc937d4db1ce80993!2sAyacucho+283,+C1025AAE+Cdad.+Aut%C3%B3noma+de+Buenos+Aires!3b1!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11wc17cjbf!3m7!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!9m1!1b1!16s%2Fg%2F11w8jvhmkp?entry=ttu&g_ep=EgoyMDI2MDEyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">AYACUCHO 283, CABA. ARGENTINA</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date("Y") ?> DERECHOS ART. TODOS LOS DERECHOS RESERVADOS.</p>
        </div>
    </footer>
    <?php endif; ?>
    
</body>
</html>