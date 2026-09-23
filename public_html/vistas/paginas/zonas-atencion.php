<?php
/**
 * VISTA: ZONAS DE ATENCION - SOLO 6 OFICINAS PRINCIPALES
 */
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Zonas de <span class="subrayado-amarillo"><strong>Atención</strong></span></h1>
            <p class="subtitulo-hero">Brindamos asesoramiento legal especializado. Conocé nuestras oficinas.</p>
        </section>
    </section>

    <!-- CARDS DE OFICINAS -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <section class="grid-zonas">
                <?php foreach ($regiones as $region): ?>
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-<?= $region['slug_base'] ?>"><?= render_icon($region['icono'], 'txt-amarillo') ?> Abogados ART en <?= htmlspecialchars($region['titulo']) ?></a>
                    </h2>
                    <p class="txt-gris fs-08 mb-10"><?= htmlspecialchars($region['direccion']) ?></p>
                    <div class="zona-botones">
                        <a href="<?= $region['maps_url'] ?>" target="_blank" class="btn btn-ubicacion">
                            <?= render_icon('location-dot') ?> VER UBICACIÓN
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>

        </section>
    </section>
</main>
