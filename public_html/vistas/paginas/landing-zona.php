<?php
/**
 * VISTA DE LANDING DE ZONA PRINCIPAL - CONTENIDO DIFERENCIADO POR ZONA
 */
?>
<main class="fade-in">

    <!-- 1. HERO -->
    <section class="contenedor hero-v2">
        <article class="hero-v2-texto">
            <?php $zona_tipo_h1 = (defined('ZONA_TIPO') && ZONA_TIPO === 'despidos') ? 'Despidos' : 'Accidentes de Trabajo'; ?>
            <h1 class="titulo-hero">Abogados Especialistas en <?= $zona_tipo_h1 ?> <span class="subrayado-amarillo">en <?= defined('ZONA_NOMBRE_SEO') ? ZONA_NOMBRE_SEO : '' ?></span></h1>
            <p><strong>Estudio Jurídico Laboral en Argentina</strong><br><?= defined('ZONA_CONTENIDO_UNICO') ? ZONA_CONTENIDO_UNICO : '' ?></p>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> Consulta Gratuita
            </a>
        </article>

        <article class="hero-v2-card">
            <ul>
                <li>
                    <article class="icon-box"><?= render_icon('comments', '', '', 'var(--amarillo)') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te escuchamos</span>
                        <p>Entendemos tu caso y tus dudas.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('file-lines', '', '', 'var(--amarillo)') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te explicamos</span>
                        <p>En lenguaje claro y sin palabras complicadas.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('scale-balanced', '', '', 'var(--amarillo)') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te acompañamos</span>
                        <p>En todo el proceso, paso a paso.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('check', '', '', 'var(--amarillo)') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Solo cobramos si vos cobrás.</span>
                        <p>Sin adelantos, sin riesgos.</p>
                    </article>
                </li>
            </ul>
        </article>
    </section>

    <!-- 2. QUIENES SOMOS / TEXTO LOCAL -->
    <?php if (defined('ZONA_CONTENIDO_UNICO') && ZONA_CONTENIDO_UNICO): ?>
    <section class="py-40 centro bg-gris-claro">
        <div class="contenedor max-w-800">
            <h2 class="fs-24 lh-14 mb-20" style="color: black !important; font-weight: 400;">
                Abogados de ART en <span class="subrayado-amarillo" style="font-weight: 400;"><?= defined('ZONA_NOMBRE_SEO') ? ZONA_NOMBRE_SEO : '' ?></span>
            </h2>
            <p class="txt-gris mt-20"><?= ZONA_CONTENIDO_UNICO ?></p>
        </div>
    </section>
    <?php endif; ?>

    <!-- 3. OFICINA INFO (SOLO PARA ZONAS PRINCIPALES) -->
    <?php if (defined('ZONA_DIRECCION') && ZONA_DIRECCION): ?>
    <section class="contenedor py-40">
        <section class="flex-between" style="align-items: stretch;">
            <article class="flex-1 flex-column bg-gris-claro p-30 border-radius-20" style="min-width:280px;">
                <h3 class="mb-30"><span class="subrayado-amarillo">Oficina en <?= defined('ZONA_NOMBRE_SEO') ? ZONA_NOMBRE_SEO : '' ?></span></h3>
                <div class="flex-1">
                    <ul class="flex-column gap-15">
                        <li>
                            <?= render_icon('location-dot', 'txt-amarillo', '', 'var(--amarillo)') ?>
                            <strong>Dirección:</strong> <?= ZONA_DIRECCION ?>
                        </li>
                        <li>
                            <?= render_icon('phone', 'txt-amarillo', '', 'var(--amarillo)') ?>
                            <strong>Teléfono:</strong> <a href="https://wa.me/549<?= ZONA_TELEFONO ?>" target="_blank"><?= ZONA_TELEFONO ?></a>
                        </li>
                        <li>
                            <?= render_icon('clock', 'txt-amarillo', 'transform: scale(1.05);', 'var(--amarillo)') ?>
                            <strong>Horarios:</strong> <?= ZONA_HORARIOS ?>
                        </li>
                    </ul>
                </div>
                <?php if (defined('ZONA_MAPS_URL') && ZONA_MAPS_URL): ?>
                <div class="centro" style="margin-top: auto;">
                    <a href="<?= ZONA_MAPS_URL ?>" target="_blank" class="btn btn-amarillo" style="padding:0.5rem 0.75rem;font-size:0.8rem;min-height:unset;min-width:180px;">
                        <?= render_icon('location-dot', '', '') ?> VER UBICACIÓN
                    </a>
                </div>
                <?php endif; ?>
            </article>
            <article class="flex-1 flex-column bg-gris-claro p-30 border-radius-20" style="min-width:280px;">
                <h3 class="mb-30"><span class="subrayado-amarillo">Atención presencial y virtual</span></h3>
                <div class="flex-1">
                    <p>Podés visitarnos en nuestra oficina de <?= defined('ZONA_NOMBRE_BUSQUEDA') ? ZONA_NOMBRE_BUSQUEDA : '' ?> o coordinar una videollamada. Atendemos de lunes a viernes con cita previa.</p>
                </div>
                <div class="centro" style="margin-top: auto;">
                    <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo" style="padding:0.5rem 0.75rem;font-size:0.8rem;min-height:unset;min-width:180px;">
                        <?= render_icon('whatsapp', '', '') ?> Consultanos al WhatsApp
                    </a>
                </div>
            </article>
        </section>
    </section>
    <?php endif; ?>

    <!-- 4. SERVICIOS -->
    <?php if (defined('ZONA_SERVICIOS') && !empty(ZONA_SERVICIOS)): $servicios = ZONA_SERVICIOS; ?>
    <section class="seccion-iconos py-40">
        <section class="contenedor">
            <h2 class="titulo-seccion">Servicios Legales en <span class="subrayado-amarillo"><?= defined('ZONA_NOMBRE_SEO') ? ZONA_NOMBRE_SEO : '' ?></span></h2>
            <section class="grid-iconos mt-30">
                <?php foreach ($servicios as $servicio): ?>
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('circle-check', '', '', 'var(--amarillo)') ?></article>
                    <p><?= htmlspecialchars($servicio) ?></p>
                </article>
                <?php endforeach; ?>
            </section>
        </section>
    </section>
    <?php endif; ?>

    <!-- 5. COMO TRABAJAMOS -->
    <section class="bg-gris py-40">
        <section class="contenedor">
            <h2 class="mb-30 centro"><span class="subrayado-amarillo">¿Cómo trabajamos?</span></h2>
            <section class="flex-between al-inicio gap-20">
                <article class="flex-1 min-w-200 centro">
                    <article class="circulo-blanco mb-15" style="width:70px;height:70px;margin:0 auto 15px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:var(--bg-hero-card);">
                        <?= render_icon('whatsapp', '', 'transform: scale(1.3);', 'var(--amarillo)') ?>
                    </article>
                    <span class="fw-800 display-block mb-5">1. Nos escribís</span>
                    <p class="txt-gris fs-09">Por WhatsApp o formulario web</p>
                </article>
                <article class="flex-1 min-w-200 centro">
                    <article class="circulo-blanco mb-15" style="width:70px;height:70px;margin:0 auto 15px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:var(--bg-hero-card);">
                        <?= render_icon('file-invoice-dollar-solid-full', '', 'transform: scale(1.3);', 'var(--amarillo)') ?>
                    </article>
                    <span class="fw-800 display-block mb-5">2. Analizamos tu caso</span>
                    <p class="txt-gris fs-09">Sin costo y sin compromiso</p>
                </article>
                <article class="flex-1 min-w-200 centro">
                    <article class="circulo-blanco mb-15" style="width:70px;height:70px;margin:0 auto 15px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:var(--bg-hero-card);">
                        <?= render_icon('lightbulb', '', 'transform: scale(1.3);', 'var(--amarillo)') ?>
                    </article>
                    <span class="fw-800 display-block mb-5">3. Te explicamos</span>
                    <p class="txt-gris fs-09">En palabras simples</p>
                </article>
                <article class="flex-1 min-w-200 centro">
                    <article class="circulo-blanco mb-15" style="width:70px;height:70px;margin:0 auto 15px;display:flex;align-items:center;justify-content:center;border-radius:50%;background:var(--bg-hero-card);">
                        <?= render_icon('user-check', '', 'transform: scale(1.3);', 'var(--amarillo)') ?>
                    </article>
                    <span class="fw-800 display-block mb-5">4. Te acompañamos</span>
                    <p class="txt-gris fs-09">Hasta el cobro final</p>
                </article>
            </section>
            <section class="centro mt-40">
                <span class="btn-capsula">
                    <?= render_icon('heart', 'mr-10', 'transform: scale(1.05);', 'var(--amarillo)') ?> Solo cobramos si vos cobrás.
                </span>
            </section>
        </section>
    </section>

    <!-- 6. PREGUNTAS FRECUENTES (SOLO PARA ZONAS PRINCIPALES) -->
    <?php if (defined('ZONA_FAQS') && !empty(ZONA_FAQS)): $faqs = ZONA_FAQS; ?>
    <section class="py-40 bg-gris-claro">
        <section class="contenedor max-w-800">
            <h2 class="centro mb-30">Preguntas Frecuentes sobre <span class="subrayado-amarillo">Accidentes de Trabajo en <?= defined('ZONA_NOMBRE_SEO') ? ZONA_NOMBRE_SEO : '' ?></span></h2>
            <section class="flex-column gap-10">
                <?php foreach ($faqs as $i => $faq): ?>
                <details class="faq-item" <?= $i === 0 ? 'open' : '' ?>>
                    <summary class="faq-pregunta"><?= htmlspecialchars($faq['pregunta']) ?></summary>
                    <p class="faq-respuesta"><?= htmlspecialchars($faq['respuesta']) ?></p>
                </details>
                <?php endforeach; ?>
            </section>
        </section>
    </section>
    <?php endif; ?>

    <!-- 7. RESENIAS DE GOOGLE (PARCIAL REUTILIZABLE) -->
    <?php
    // DATOS DE RESENIAS DE ESTA SUCURSAL DESDE contenido_zonas.json (FUENTE UNICA)
    $resenas = defined('ZONA_RESENAS_DATOS') ? ZONA_RESENAS_DATOS : [];
    $resenas_h2_html = defined('ZONA_RESENAS_H2_HTML') ? ZONA_RESENAS_H2_HTML : 'Opiniones sobre nuestro <span class="subrayado-amarillo">Estudio Juridico de ART</span>';
    $resenas_maps_url = defined('ZONA_RESENAS_MAPS_URL') ? ZONA_RESENAS_MAPS_URL : '';
$resenas_promedio_global = defined('ZONA_RESENAS_PROMEDIO_GLOBAL') ? ZONA_RESENAS_PROMEDIO_GLOBAL : null;
$resenas_total_global = defined('ZONA_RESENAS_TOTAL_GLOBAL') ? ZONA_RESENAS_TOTAL_GLOBAL : null;
// CARPETA DE FOTOS DE RESEÑAS DENTRO DE publico/img/ (EJ: 'rosario' -> publico/img/rosario/)
$resenas_directorio_fotos = defined('ZONA_RESENAS_DIRECTORIO_FOTOS') ? ZONA_RESENAS_DIRECTORIO_FOTOS : '';
include __DIR__ . '/../partials/resenas-google.php';
    ?>

</main>
