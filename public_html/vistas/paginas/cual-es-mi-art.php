<?php
/**
 * VISTA: ¿CUÁL ES MI ART?
 * CONTENIDO AMPLIADO SEGÚN DERECHOSART.COM.AR
 */
?>

<main class="fade-in">
    <!-- HERO DE LA PAGINA -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>¿Cuál es mi <span class="subrayado-amarillo"><strong>ART?</strong></span></h1>
            <p class="subtitulo-hero">Averiguá gratis cuál es tu ART con tu CUIL o el CUIT del empleador, y conocé los teléfonos de denuncia de cada aseguradora.</p>
        </section>
    </section>

    <!-- 1. CONSULTA ONLINE (SRT) -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <section class="grid-info-doble mt-0 al-inicio">
                <article class="info-bloque b-none bl-8-amarillo">
                    <h2 class="mb-20">Consulta <span class="subrayado-amarillo">Online</span> (SRT)</h2>
                    <p class="mb-20">La forma más directa y oficial de saber qué ART tenés es a través del buscador de la <strong>Superintendencia de Riesgos del Trabajo (SRT)</strong>.</p>
                    <ul class="flex-column gap-15 txt-gris fs-09 mb-30">
                        <li><?= render_icon('check', 'mr-10') ?> Necesitás tu número de <b>CUIL</b> (sin puntos ni guiones).</li>
                        <li><?= render_icon('check', 'mr-10') ?> No se puede consultar solo con el número de DNI.</li>
                        <li><?= render_icon('check', 'mr-10') ?> También podés consultar con el <b>CUIT del empleador</b>.</li>
                    </ul>
                    <a href="https://www.srt.gob.ar/arg/art_busqueda_art-08.php" target="_blank" class="btn btn-amarillo">
                        IR AL BUSCADOR OFICIAL SRT
                    </a>
                </article>

                <article class="info-bloque b-none">
                    <h3 class="mb-20">¿Qué es una ART?</h3>
                    <p class="txt-gris fs-09">Las Aseguradoras de Riesgos del Trabajo (ART) son empresas privadas contratadas por los empleadores para asesorarlos en medidas de prevención y para reparar los daños en casos de accidentes de trabajo o enfermedades profesionales.</p>
                    <p class="txt-gris fs-09 mt-15">Están obligadas a brindar asistencia médica, farmacéutica, prótesis, rehabilitación y traslados de forma inmediata tras la denuncia.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 1B. COMO SABER CUAL ES MI ART - PASO A PASO -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">Cómo saber <span class="subrayado-amarillo"><strong>cuál es mi ART</strong></span> paso a paso</h2>
            <p class="centro max-w-600 mx-auto txt-gris mb-40">La consulta es oficial y gratuita: solo necesitás tu CUIL (o el CUIT del empleador).</p>
            <section class="pasos-horizontal mt-30 relative flex-between al-inicio">
                <article class="linea-conector"></article>
                <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                    <article class="circulo-blanco z-3"><?= render_icon('mobile-screen-button', '', 'transform: scale(1.05);', 'var(--amarillo)') ?></article>
                    <article class="numero">1</article>
                    <p class="autor bg-transparent m-0 centro">Tené a mano tu CUIL</p>
                    <p class="fs-09 txt-gris m-0 centro">El buscador pide el CUIL (sin puntos ni guiones) o el CUIT del empleador. Si no lo recordás, averigualo en Mi ANSES.</p>
                </article>
                <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                    <article class="circulo-blanco z-3"><?= render_icon('magnifying-glass', '', 'transform: scale(1.05);', 'var(--amarillo)') ?></article>
                    <article class="numero">2</article>
                    <p class="autor bg-transparent m-0 centro">Entrá al buscador de la SRT</p>
                    <p class="fs-09 txt-gris m-0 centro">Ingresá al sitio de la Superintendencia de Riesgos del Trabajo y abrí la sección «Cuál es mi ART».</p>
                </article>
                <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                    <article class="circulo-blanco z-3"><?= render_icon('laptop-solid-full', '', 'transform: scale(1.05);', 'var(--amarillo)') ?></article>
                    <article class="numero">3</article>
                    <p class="autor bg-transparent m-0 centro">Cargá el CUIL y consultá</p>
                    <p class="fs-09 txt-gris m-0 centro">Escribí tu CUIL (o el CUIT del empleador) y presioná Buscar. El sistema te muestra la ART asignada.</p>
                </article>
                <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                    <article class="circulo-blanco z-3"><?= render_icon('phone', '', 'transform: scale(1.05);', 'var(--amarillo)') ?></article>
                    <article class="numero">4</article>
                    <p class="autor bg-transparent m-0 centro">Anotá tu ART y sus teléfonos</p>
                    <p class="fs-09 txt-gris m-0 centro">Guardá el nombre de tu ART y su 0800 de denuncia (los tenés más abajo) por si sufrís un accidente.</p>
                </article>
            </section>
            <div class="centro mt-40">
                <a href="https://www.srt.gob.ar/arg/art_busqueda_art-08.php" target="_blank" rel="noopener" class="btn btn-amarillo">
                    <?= render_icon('magnifying-glass', 'mr-10') ?> CONSULTAR EN EL BUSCADOR SRT
                </a>
            </div>
        </section>
    </section>

    <!-- 2. TELEFONOS DE LAS ART -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">Teléfonos de las <span class="subrayado-amarillo"><strong>principales ART</strong></span></h2>
            <p class="centro max-w-600 mx-auto txt-gris mb-40">Listado actualizado de números gratuitos para denuncias de siniestros y consultas generales.</p>
            
            <article class="info-bloque b-none" style="overflow-x: auto; padding: 0;">
                <table class="tabla-art">
                    <thead>
                        <tr>
                            <th>ART</th>
                            <th>Denuncia de Siniestros</th>
                            <th>Consultas y Reclamos</th>
                        </tr>
                    </thead>
                    <tbody class="fs-09">
                        <tr><td><b>Berkley</b></td><td>0-800-777-2020</td><td>0-800-333-3031</td></tr>
                        <tr><td><b>Prevención</b></td><td>0800-444-4278</td><td>0800-555-5278</td></tr>
                        <tr><td><b>Experta</b></td><td>0800-888-0200</td><td>0800-777-7278</td></tr>
                        <tr><td><b>Provincia</b></td><td>0800-333-1333</td><td>0800-333-1278</td></tr>
                        <tr><td><b>La Segunda</b></td><td>0800-444-2782</td><td>0800-777-0036</td></tr>
                        <tr><td><b>Federación Patronal</b></td><td>0800-222-2322</td><td>0800-222-3535</td></tr>
                        <tr><td><b>Swiss Medical</b></td><td>0800-666-2000</td><td>0800-222-7854</td></tr>
                        <tr><td><b>Asociart</b></td><td>0800-888-0095</td><td>0800-888-0093</td></tr>
                        <tr><td><b>Omint</b></td><td>0800-888-6060</td><td>0800-555-0278</td></tr>
                        <tr><td><b>SMG</b></td><td>0800-222-2278</td><td>0800-999-2255</td></tr>
                    </tbody>
                </table>
            </article>
        </section>
    </section>

    <!-- 3. INFORMACION ADICIONAL -->
    <section class="py-60 bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion">Lo que tenés que <span class="subrayado-amarillo"><strong>saber</strong></span></h2>
            <section class="grid-iconos mt-40">
                <article class="icono-item bg-blanco p-30 border-radius-20">
                    <?= render_icon('car', 'mb-20', '', 'var(--amarillo)') ?>
                    <h4>Gastos de Traslado</h4>
                    <p class="fs-09 txt-gris">La ART debe cubrir el costo del transporte público para ir y volver de los centros de atención. Si no podés viajar por tus medios, deben enviarte un remis o ambulancia.</p>
                </article>
                <article class="icono-item bg-blanco p-30 border-radius-20">
                    <?= render_icon('pills-solid-full', 'mb-20', '', 'var(--amarillo)') ?>
                    <h4>Farmacia y Prótesis</h4>
                    <p class="fs-09 txt-gris">Toda la medicación recetada por los médicos de la ART debe ser entregada sin costo. También deben proveer prótesis y elementos de ortopedia si fueran necesarios.</p>
                </article>
                <article class="icono-item bg-blanco p-30 border-radius-20">
                    <?= render_icon('shield-halved', 'mb-20', '', 'var(--amarillo)') ?>
                    <h4>Cobertura In Itinere</h4>
                    <p class="fs-09 txt-gris">Recordá que estás cubierto tanto en tu lugar de trabajo como en el trayecto directo entre tu domicilio y la empresa (accidente in itinere).</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 3B. PREGUNTAS FRECUENTES SOBRE TU ART -->
    <section class="py-60 bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion">Preguntas frecuentes sobre <span class="subrayado-amarillo"><strong>tu ART</strong></span></h2>
            <section class="max-w-900 mx-auto mt-40">
                <section class="lista-faq mt-0">
                    <details>
                        <summary><h3>¿Puedo consultar cuál es mi ART solo con el DNI?</h3></summary>
                        <article class="respuesta">
                            <p>No. El buscador oficial de la SRT pide el <strong>CUIL</strong> del trabajador o el <strong>CUIT del empleador</strong>. El DNI por sí solo no alcanza: si únicamente tenés el DNI, primero averiguá tu CUIL (por ejemplo, desde Mi ANSES) y con ese número hacés la consulta.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué hago si el buscador dice que no tengo ART?</h3></summary>
                        <article class="respuesta">
                            <p>Si el sistema no te muestra una ART vigente, puede ser que tu empleador no te haya declarado o no tenga la cobertura al día. Ante un accidente en esa situación, la <strong>Ley 24.557</strong> pone la responsabilidad en cabeza del empleador, que debe responder con su propio patrimonio. Te conviene consultar con un abogado para analizar tu caso.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Puedo elegir o cambiar la ART que tengo?</h3></summary>
                        <article class="respuesta">
                            <p>La ART la contrata el empleador, no el trabajador. Vos podés consultar con tu CUIL qué ART te corresponde, pero la elección o el cambio de aseguradora es una decisión del empleador.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿A qué teléfono denuncio un accidente si no sé cuál es mi ART?</h3></summary>
                        <article class="respuesta">
                            <p>Primero averiguá tu ART con el buscador de la SRT y usá el 0800 de denuncia de siniestros de esa aseguradora. En esta página tenés los teléfonos de las principales ART. Si tu empleador no hace la denuncia, podés hacerla vos directamente a la ART.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿La consulta de cuál es mi ART tiene costo?</h3></summary>
                        <article class="respuesta">
                            <p>No. El buscador de la Superintendencia de Riesgos del Trabajo (SRT) es oficial, gratuito y no requiere intermediarios. Solo necesitás tu CUIL o el CUIT del empleador.</p>
                        </article>
                    </details>
                </section>
            </section>
        </section>
    </section>

    <!-- 4. ABOGADO ESPECIALISTA EN ART -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">¿Necesitás un <span class="subrayado-amarillo"><strong>abogado especialista en ART?</strong></span></h2>
            <section class="grid-info-doble mt-40">
                <article class="info-bloque b-none bl-8-amarillo">
                    <h3 class="mb-20">Saber cuál es tu ART es solo el primer paso</h3>
                    <p class="txt-gris fs-09 mb-15">Si ya sabés qué ART tenés pero rechazaron tu accidente, te dieron el alta antes de curarte, no te pagan la indemnización o el monto no coincide con tu lesión, hablar con un abogado laboral puede cambiar el resultado.</p>
                    <ul class="flex-column gap-15 txt-gris fs-09 mb-30">
                        <li><?= render_icon('check', 'mr-10') ?> Abogados especializados en <b>accidentes de trabajo y ART</b>.</li>
                        <li><?= render_icon('check', 'mr-10') ?> Analizamos el rechazo, el alta y el porcentaje de incapacidad asignado.</li>
                        <li><?= render_icon('check', 'mr-10') ?> <b>Solo cobramos si vos cobrás</b>.</li>
                    </ul>
                    <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                        <?= render_icon('whatsapp', 'mr-10') ?> CONSULTÁ TU CASO SIN CARGO
                    </a>
                </article>

                <article class="info-bloque b-none">
                    <h3 class="mb-20">Consultas que resolvemos seguido</h3>
                    <ul class="flex-column gap-15 txt-gris fs-09 mb-30">
                        <li><?= render_icon('chevron-right', 'mr-10') ?> <a href="<?= BASE_URL ?>accidentes-de-trabajo">Reclamo por accidente de trabajo</a></li>
                        <li><?= render_icon('chevron-right', 'mr-10') ?> <a href="<?= BASE_URL ?>comisiones-medicas">Alta médica y recurso ante la Comisión Médica</a></li>
                        <li><?= render_icon('chevron-right', 'mr-10') ?> <a href="<?= BASE_URL ?>tabla-incapacidad">Porcentaje de incapacidad y cálculo de la indemnización</a></li>
                        <li><?= render_icon('chevron-right', 'mr-10') ?> <a href="<?= BASE_URL ?>calculadora-accidentes">Calculadora de indemnización por accidente</a></li>
                    </ul>
                </article>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-blanco centro">
        <section class="contenedor">
            <h2 class="mb-20">¿Tu ART no te <span class="subrayado-amarillo"><strong>responde?</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris mb-30">Si la ART rechazó tu accidente, te dio el alta sin haberte curado o no te citó para fijar tu indemnización, consultanos sin cargo.</p>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> CONSULTANOS POR WHATSAPP
            </a>
        </section>
    </section>
</main>

