<?php
/**
 * COMPONENTE: CABECERA DEL ARTICULO
 */
?>
<header class="articulo-header">
    <nav class="breadcrumb-blog mb-20">
        <a href="<?= BASE_URL ?>inicio">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Guía 2026</span>
    </nav>

    <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
    <h1 class="articulo-titulo">Accidente laboral: qué hacer, cuáles son tus derechos y cómo reclamar lo que te corresponde</h1>
    
    <p class="articulo-lead">Si te accidentaste trabajando o camino al trabajo, esta guía te explica paso a paso qué hacer con la ART, qué cubre el tratamiento y cómo reclamar tu indemnización. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

    <div class="grid-caracteristicas-articulo mt-40">
        <div class="char-item">
            <div class="char-icon"><?= render_icon('stethoscope-solid') ?></div>
            <div class="char-texto">
                <strong>ATENCIÓN MÉDICA</strong>
                <span>100% cubierta</span>
            </div>
        </div>
        <div class="char-item">
            <div class="char-icon"><?= render_icon('shield-checkmark-outline') ?></div>
            <div class="char-texto">
                <strong>PROTECCIÓN</strong>
                <span>de tus derechos</span>
            </div>
        </div>
        <div class="char-item">
            <div class="char-icon"><?= render_icon('handshake-regular') ?></div>
            <div class="char-texto">
                <strong>ASESORAMIENTO</strong>
                <span>especializado</span>
            </div>
        </div>
        <div class="char-item">
            <div class="char-icon"><?= render_icon('dollar-sign-solid') ?></div>
            <div class="char-texto">
                <strong>INDEMNIZACIÓN</strong>
                <span>por tus secuelas</span>
            </div>
        </div>
    </div>

    <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Mayo 2026</span>
        <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 12 min</span>
        <span class="pointer"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
    </div>
</header>
