<?php
// VISTA: BUSCADOR DE COMISIONES MÉDICAS
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna bg-azul txt-blanco">
        <section class="contenedor">
            <h1>BUSCADOR DE COMISIONES</h1>
            <p class="subtitulo-hero">Encontrá la sede de la Superintendencia (SRT) más cercana a tu domicilio</p>
        </section>
    </section>

    <!-- EXPLICACION BUSCADOR -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿CÓMO BUSCAR TU SEDE?</h2>
            <article class="info-bloque">
                <p>Podés localizar la Comisión Médica que te corresponde ingresando tu localidad, partido o dirección exacta en el buscador oficial de la SRT. Es fundamental realizar el trámite en la jurisdicción correcta para evitar rechazos.</p>
                <section class="centro mt-50">
                    <a href="https://www.srt.gob.ar/index.php/comisiones-medicas/" target="_blank" class="btn btn-amarillo">IR AL MAPA DE COMISIONES SRT</a>
                </section>

                <section class="grid-info-doble mt-50">
                    <article class="info-bloque">
                        <h3>¿QUÉ DATOS OBTENÉS?</h3>
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
            </article>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="seccion-cta bg-gris" style="padding: 3.75rem 0;">
        <section class="contenedor centro">
            <h3>¿TENÉS QUE IR A UNA COMISIÓN MÉDICA?</h3>
            <p class="descripcion-seccion">Recordá que para determinar tu incapacidad es obligatorio contar con patrocinio letrado (nuestras abogadas). Consultanos ahora sin compromiso.</p>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                CONTACTO
            </a>
        </section>
    </section>
</main>
