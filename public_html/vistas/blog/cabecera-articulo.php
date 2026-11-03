<?php
/**
 * COMPONENTE: CABECERA DEL ARTICULO
 */
?>
<?php if (isset($DatosCabeceraBlog) && is_array($DatosCabeceraBlog)): ?>
<header class="articulo-header">
    <nav class="breadcrumb-blog mb-20">
        <a href="<?= BASE_URL ?>blog">Blog</a> &gt;
        <a href="<?= BASE_URL ?><?= htmlspecialchars($DatosCabeceraBlog['categoria_url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($DatosCabeceraBlog['categoria_miga'], ENT_QUOTES, 'UTF-8') ?></a>
        &gt; <span class="txt-amarillo"><?= htmlspecialchars($DatosCabeceraBlog['miga'], ENT_QUOTES, 'UTF-8') ?></span>
    </nav>

    <span class="tag-categoria bg-amarillo mb-15"><?= htmlspecialchars($DatosCabeceraBlog['categoria'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="articulo-titulo"><?= htmlspecialchars($DatosCabeceraBlog['titulo'], ENT_QUOTES, 'UTF-8') ?></h1>
    <p class="articulo-lead"><?= htmlspecialchars($DatosCabeceraBlog['lead'], ENT_QUOTES, 'UTF-8') ?> <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

    <section class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio" aria-label="Datos del artículo">
        <span><?= render_icon('calendar-day-solid', 'mr-5', '', '', true) ?> Actualizado: <?= htmlspecialchars($DatosCabeceraBlog['actualizado'], ENT_QUOTES, 'UTF-8') ?></span>
        <span><?= render_icon('clock-solid', 'mr-5', '', '', true) ?> Lectura: <?= htmlspecialchars($DatosCabeceraBlog['lectura'], ENT_QUOTES, 'UTF-8') ?></span>
        <button type="button" class="articulo-print pointer" data-print-page><?= render_icon('bookmark-solid', 'mr-5', '', '', true) ?> Guardá esta guía</button>
    </section>
</header>
<?php else: ?>
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

    <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio" style="flex-wrap: wrap; gap: 1rem;">
        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
        <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 12 min</span>
        <span style="color: #ffffff; opacity: 0.99; position: relative; z-index: -1; font-size: 0.8rem; pointer-events: none;"><?= render_icon('user-check', 'mr-5', '', '#ffffff') ?> Revisado por: <strong>Dra. Romina Koñiuch (Mat. C.P.A.C.F. T° 126 F° 403 / C.A.S.I. T° 53 F° 331)</strong></span>
    </div>
</header>
<?php endif; ?>
