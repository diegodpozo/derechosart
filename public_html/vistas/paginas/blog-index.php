<?php
/**
 * VISTA: INDICE DE BLOG
 */
?>

<main class="blog-index-container fade-in">
    <p class="tl-dr">Blog de DerechosART: guías sobre accidentes laborales, ART, despidos, comisiones médicas y baremo 2026. Información clara y actualizada para trabajadores argentinos.</p>
    <div class="contenedor">

        <!-- HERO DEL BLOG -->
        <section class="blog-index-hero">
            <h1 class="blog-index-titulo">Blog de DerechosART</h1>
            <p class="blog-index-descripcion">Todo lo que necesitás saber sobre accidentes laborales, ART, despidos y tus derechos como trabajador en Argentina. <span class="subrayado-amarillo">Guías claras, sin palabras difíciles.</span></p>
        </section>

        <!-- GRILLETA DE ARTICULOS -->
        <div class="blog-index-grid">

            <!-- ARTICULO 1 - AMPUTACION DE DEDO -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">✋</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#EAB308;color:#000;">ACCIDENTES LABORALES</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/amputacion-dedo-accidente-laboral">Amputación de dedo: porcentajes, cuánto paga la ART y cómo reclamar</a>
                    </h2>
                    <p class="blog-card-excerpt">Si sufriste la amputación de un dedo trabajando, la ART debe cubrir tu tratamiento e indemnizarte. Conocé los porcentajes reales del Baremo 2026 y cómo se calcula tu caso.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Agosto 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 10 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/amputacion-dedo-accidente-laboral" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 2 - COMISION MEDICA NEUQUEN -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">📍</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#0B2545;color:#fff;">COMISIÓN MÉDICA</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/comision-medica-neuquen-guia">Comisión Médica de Neuquén (CM N° 9): dirección, mapa y trámite paso a paso</a>
                    </h2>
                    <p class="blog-card-excerpt">Si trabajás o vivís en Neuquén y tuviste un accidente laboral, el trámite ante la SRT se hace en esta Comisión Médica. Dónde queda, qué llevar y qué hacer si no estás de acuerdo.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Agosto 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 6 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/comision-medica-neuquen-guia" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 3 - COMISION MEDICA CIPOLLETTI -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">🗺️</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#0B2545;color:#fff;">COMISIÓN MÉDICA</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/comision-medica-cipolletti-guia">Comisión Médica de Cipolletti (CM 35.3): dirección, mapa y trámite paso a paso</a>
                    </h2>
                    <p class="blog-card-excerpt">Si trabajás o vivís en Cipolletti o el Alto Valle de Río Negro, el trámite ante la SRT se hace en esta Comisión Médica. Dónde queda, qué llevar y qué hacer si no estás de acuerdo.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Agosto 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 6 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/comision-medica-cipolletti-guia" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 4 - BAREMO 2026 -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">📊</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#2563EB;color:#fff;">BAREMO LABORAL</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/baremo-2026-completo-explicado">Baremo 2026 completo explicado con ejemplos reales</a>
                    </h2>
                    <p class="blog-card-excerpt">Conocé el Baremo Laboral 2026 con porcentajes de incapacidad, cómo se calcula tu indemnización y ejemplos de lesiones reales.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Julio 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 12 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/baremo-2026-completo-explicado" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 5 - ALTA MEDICA CON DOLOR -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">🩹</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#4B5563;color:#fff;">DIVERGENCIA DE ALTA</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer">Me dieron el alta de la ART pero sigo con dolor: qué hacer paso a paso</a>
                    </h2>
                    <p class="blog-card-excerpt">Si te dieron el alta pero no estás recuperado, conocé cómo interponer la divergencia ante la SRT, los plazos perentorios y cómo reclamar tu indemnización.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Julio 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 8 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 6 - RECHAZO ART -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">⚖️</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#DC2626;color:#fff;">RECHAZO ART</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral">La ART rechazó mi accidente laboral: qué hacer paso a paso</a>
                    </h2>
                    <p class="blog-card-excerpt">Si la ART rechazó tu accidente, el caso no está perdido. Conocé los pasos para impugnar el rechazo, los plazos que tenés y cómo reclamar tu indemnización.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Junio 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 9 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

            <!-- ARTICULO 7 - GUIA ACCIDENTES -->
            <article class="blog-card">
                <div class="blog-card-img">
                    <div class="blog-card-icon">🛡️</div>
                </div>
                <div class="blog-card-body">
                    <span class="blog-card-tag" style="background:#EAB308;color:#000;">ACCIDENTES LABORALES</span>
                    <h2 class="blog-card-titulo">
                        <a href="<?= BASE_URL ?>blog/accidente-laboral-guia-2026">Accidente laboral: qué hacer, tus derechos y cómo reclamar</a>
                    </h2>
                    <p class="blog-card-excerpt">Guía completa 2026 con todo lo que necesitás saber: cómo denunciar, qué cubre la ART, cómo funciona la indemnización y qué hacer si te rechazan.</p>
                    <div class="blog-card-meta">
                        <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Mayo 2026</span>
                        <span><?= render_icon('clock-solid', 'mr-5') ?> 12 min</span>
                    </div>
                    <a href="<?= BASE_URL ?>blog/accidente-laboral-guia-2026" class="blog-card-link">Leer artículo <?= render_icon('chevron-right', 'ml-5') ?></a>
                </div>
            </article>

        </div>

        <!-- FOOTER DEL INDICE -->
        <div class="blog-index-footer">
            <p class="txt-gris-medio centro fs-09">Más artículos en camino. <span class="subrayado-amarillo">Solo cobramos si vos cobrás.</span></p>
        </div>

    </div>
</main>

<!-- SCRIPT PARA TARJETAS CLICKEABLES -->
<script>
document.querySelectorAll('.blog-card').forEach(function(card) {
    card.addEventListener('click', function(e) {
        if (e.target.closest('a')) return;
        var link = this.querySelector('.blog-card-link');
        if (link) window.location.href = link.getAttribute('href');
    });
});
</script>
