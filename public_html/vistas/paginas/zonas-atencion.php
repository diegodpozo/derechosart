<?php
/**
 * VISTA: ZONAS DE ATENCION - GENERADO DINAMICAMENTE DESDE BD
 */
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Zonas de <span class="subrayado-amarillo"><strong>Atención</strong></span></h1>
            <p class="subtitulo-hero">Brindamos asesoramiento legal especializado en todo el país. Conocé nuestras áreas de cobertura.</p>
        </section>
    </section>

    <!-- LISTADO DE LOCALIDADES -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <section class="grid-zonas">
                
                <!-- CABA Y GBA -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-caba-y-gba"><?= render_icon('city', 'txt-amarillo') ?> Abogados ART en CABA y GBA</a>
                    </h2>
                    <a href="https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!3m1!4b1!4m6!3m5!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11w8jvhmkp" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN<br><span class="fs-07">EN CABA Y GBA</span>
                    </a>
                </article>

                <!-- ROSARIO -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-rosario"><?= render_icon('landmark', 'txt-amarillo') ?> Abogados ART en Rosario</a>
                    </h2>
                    <a href="https://www.google.com.ar/maps/place/DerechosART+Rosario+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-32.9488217,-60.6325779,19.83z/data=!4m6!3m5!1s0x95b7abd41f51e0f7:0x7d49a7c112d2fcfe!8m2!3d-32.9488527!4d-60.6322239!16s%2Fg%2F11x98t34k7" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN<br><span class="fs-07">EN ROSARIO</span>
                    </a>
                </article>

                <!-- SUR -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-neuquen-y-rio-negro"><?= render_icon('mountain', 'txt-amarillo') ?> Abogados ART en Neuquén y Río Negro</a>
                    </h2>
                    <a href="https://www.google.com/maps/place/DerechosART+Neuqu%C3%A9n+Abogados+-+Accidentes+de+trabajo+y+Despidos/@-38.949361,-68.0691958,17z/data=!3m1!4b1!4m6!3m5!1s0x960a33f6c915bc75:0xc722f152dcea3961!8m2!3d-38.949361!4d-68.0691958!16s%2Fg%2F11y_t7z_pq" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN<br><span class="fs-07">EN NEUQUÉN Y RÍO NEGRO</span>
                    </a>
                </article>

                <!-- SALTA -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-salta"><?= render_icon('flag', 'txt-amarillo') ?> Abogados ART en Salta</a>
                    </h2>
                    <a href="https://www.google.com/maps/place/Gral.+Mart%C3%ADn+G%C3%BCemes+1548,+A4400+Salta" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN<br><span class="fs-07">EN SALTA</span>
                    </a>
                </article>

                <!-- CORDOBA -->
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-cordoba"><?= render_icon('building', 'txt-amarillo') ?> Abogados ART en Córdoba</a>
                    </h2>
                    <a href="https://www.google.com/maps/place/27+de+Abril+276,+X5000AEF+C%C3%B3rdoba" target="_blank" class="btn btn-amarillo mt-10">
                        <?= render_icon('location-dot') ?> VER UBICACIÓN<br><span class="fs-07">EN CÓRDOBA</span>
                    </a>
                </article>

            </section>

            <!-- LISTADO DINAMICO DESDE BD - 5 REGIONES FIJAS -->
            <section class="mt-60 pt-40 border-top">
                <h3 class="centro mb-30">Todas nuestras localidades de cobertura</h3>
                
                <section class="grid-zonas-seo">
                    <?php if (!empty($regiones)): ?>
                        <?php foreach ($regiones as $region): 
                            $esCabaGba = ($region['id'] === 'caba-gba');
                        ?>
                        <article class="col-seo">
                            <h4 class="fw-700 mb-10 border-bottom pb-5">
                                <a href="<?= BASE_URL ?>abogados-art-<?= $region['slug_base'] ?>"><?= htmlspecialchars($region['titulo']) ?></a>
                            </h4>
                            
                            <?php foreach ($region['subgrupos'] as $i => $sub): 
                                $locales = $sub['localidades'];
                                $total = count($locales);
                                $esGBA = ($esCabaGba && $i === 1);
                            ?>
                                
                                <?php if ($esGBA): ?>
                                    <!-- GBA: TODO DENTRO DE VER MAS -->
                                    <?php if ($total > 0): ?>
                                    <details class="mt-10">
                                        <summary class="cursor-pointer txt-gris fs-08">Ver más en GBA</summary>
                                        <div class="flex-column gap-5 mt-5 pl-10">
                                            <?php foreach ($locales as $loc): ?>
                                            <a href="<?= BASE_URL ?>abogados-art-<?= $loc['slug'] ?>"><?= htmlspecialchars($loc['nombre']) ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </details>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <!-- CABA U OTRAS REGIONES: PRIMERAS 6 LUEGO VER MAS -->
                                    <div class="lista-seo-links">
                                        <?php foreach ($locales as $j => $loc): ?>
                                            <?php if ($j === 6 && $total > 6): ?>
                                                <details>
                                                    <summary class="cursor-pointer txt-gris fs-08">Ver más en <?= htmlspecialchars($sub['nombre']) ?></summary>
                                                    <div class="flex-column gap-5 mt-5 pl-10">
                                            <?php endif; ?>
                                            <a href="<?= BASE_URL ?>abogados-art-<?= $loc['slug'] ?>"><?= htmlspecialchars($loc['nombre']) ?></a>
                                        <?php endforeach; ?>
                                        <?php if ($total > 6): ?>
                                                </div>
                                            </details>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </article>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="centro txt-gris">No hay localidades cargadas en este momento.</p>
                    <?php endif; ?>
                </section>
            </section>

        </section>
    </section>
</main>
