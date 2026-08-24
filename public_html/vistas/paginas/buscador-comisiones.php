<?php
// VISTA: BUSCADOR DE COMISIONES MÉDICAS
?>

<main class="fade-in">
    <p class="tl-dr">Buscador de comisiones médicas de la SRT. Ingresá tu domicilio y encontrá la sede de la Superintendencia de Riesgos del Trabajo más cercana para hacer tu pericia médica.</p>
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Buscador de <span class="subrayado-amarillo"><strong>Comisiones Médicas</strong></span></h1>
            <p class="subtitulo-hero">Encontrá la sede de la Superintendencia (SRT) más cercana a tu domicilio</p>
        </section>
    </section>

    <section class="centro mt-30">
        <a href="<?= BASE_URL ?>comisiones-medicas" class="btn btn-amarillo">BUSCADOR DE COMISIONES</a>
    </section>

    <!-- EXPLICACION BUSCADOR -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Encontrá tu <span class="subrayado-amarillo">sede</span> SRT</h2>
            <p class="txt-gris">Podés localizar la Comisión Médica que te corresponde ingresando tu localidad, partido o dirección exacta en el buscador oficial de la SRT. Es fundamental realizar el trámite en la jurisdicción correcta para evitar rechazos.</p>
            <section class="centro mt-50">
                <a href="https://www.srt.gob.ar/arg/mapa.php" target="_blank" class="btn btn-amarillo">IR AL MAPA DE COMISIONES SRT</a>
            </section>

            <section class="grid-info-doble mt-50">
                <article class="info-bloque">
                    <h3>QUÉ DATOS OBTENÉS</h3>
                    <ul class="lista-simple">
                        <li><?= render_icon('location-dot') ?> Dirección exacta y número de sede.</li>
                        <li><?= render_icon('clock') ?> Horarios de atención al público.</li>
                        <li><?= render_icon('scale-balanced') ?> Competencia territorial (qué zonas cubre).</li>
                    </ul>
                </article>
                <article class="info-bloque">
                    <h3>EJEMPLOS DE BÚSQUEDA</h3>
                    <p>Podés buscar por: "Lanús", "San Martín", "Rosario" o por el número de comisión como "CM 11".</p>
                </article>
            </section>

            <h3 class="mt-40"><strong>TE PUEDE INTERESAR:</strong></h3>
            <p class="txt-gris al-izq" style="line-height:2">
                <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;">🔗 Qué hacer si rechazaron mi trámite</a><br>
                <a href="<?= BASE_URL ?>blog/accidente-laboral-guia-2026" style="color:inherit;text-decoration:none;">🔗 Cuáles son mis derechos ante un accidente</a>
            </p>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section style="background: #1A1A1A; padding: 2.5rem 0; color: var(--blanco);">
        <section class="contenedor" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.875rem;">
            <article>
                <h3>¿TENÉS QUE IR A UNA COMISIÓN MÉDICA?</h3>
                <p style="color: #CCC;">Recordá que para determinar tu incapacidad es obligatorio contar con patrocinio letrado. Consultanos ahora sin compromiso.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">CONTACTO</a>
        </section>
    </section>
</main>
