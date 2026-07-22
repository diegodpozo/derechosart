<?php
/**
 * VISTA: PAGINA DE LESION DEL BAREMO LABORAL 2026
 * TEMPLATE DINAMICO - RECIBE DATOS DESDE $baremo (PaginasControlador)
 */
$secciones = $baremo['secciones'] ?? [];
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">
        
        <!-- CABECERA CON H1 -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>inicio">Inicio</a> &gt;
                    <a href="<?= BASE_URL ?>tabla-incapacidad">Baremo Laboral 2026</a> &gt;
                    <span class="txt-amarillo"><?= htmlspecialchars($baremo['breadcrumb_categoria']) ?></span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15"><?= htmlspecialchars(strtoupper($baremo['tag'])) ?></span>
                <h1 class="articulo-titulo"><?= htmlspecialchars($baremo['titulo']) ?></h1>
                
                <p class="articulo-lead"><?= htmlspecialchars($baremo['lead']) ?></p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('file-lines', 'mr-5') ?> <?= htmlspecialchars($baremo['meta_fuente']) ?></span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: <?= htmlspecialchars($baremo['meta_lectura']) ?></span>
                    <span><?= render_icon('chart-simple', 'mr-5') ?> Incapacidad: <?= htmlspecialchars($baremo['meta_rango']) ?></span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DERECHO -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo">En esta pagina</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <?php foreach ($secciones as $i => $sec): ?>
                                <li><a href="#<?= $sec['id'] ?>"><span class="nav-num"><?= $sec['num'] ?></span> <?= htmlspecialchars($sec['titulo']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </details>

                <?php 
                    $titulo = "Tenes una lesion laboral?";
                    $descripcion = "Revisamos tu caso y te asesoramos sin cargo.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro">
                    <span style="font-size: 2em;">&#10004;</span> Solo cobramos si vos cobras.
                </p>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">
                <?php foreach ($secciones as $sec): ?>
                    <div id="<?= $sec['id'] ?>" class="seccion-bloque">
                        <h2 class="titulo-seccion-blog">
                            <span class="num-sec"><?= $sec['num'] ?></span>
                            <?= htmlspecialchars($sec['titulo']) ?>
                        </h2>
                        <?= $sec['contenido_html'] ?>
                        <a href="#" class="link-volver-indice">
                            <?= render_icon('arrow-up', 'mr-5') ?> Volver al inicio
                        </a>
                    </div>
                <?php endforeach; ?>
            </section>

            <div class="articulo-footer-meta">
                <span><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#10004;</span> Solo cobramos si vos cobras.</span>
                <span class="italic" style="font-style:italic;"><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#9878;</span> DerechosART &middot; derechosart.com.ar</span>
            </div>
        </article>

    </div>
</main>
