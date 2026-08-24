<?php
/**
 * VISTA: ¿CUÁL ES MI ART?
 * CONTENIDO AMPLIADO SEGÚN DERECHOSART.COM.AR
 */
?>

<main class="fade-in">
    <p class="tl-dr">Consultá cuál es tu ART con tu CUIL. Encontrá datos de contacto, teléfono y procedimiento para denuncias de accidentes de trabajo y enfermedades profesionales.</p>
    <!-- HERO DE LA PAGINA -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>¿Cuál es mi <span class="subrayado-amarillo"><strong>ART?</strong></span></h1>
            <p class="subtitulo-hero">Consultá tu aseguradora actual y conocé todos sus medios de contacto para realizar denuncias o reclamos.</p>
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

    <!-- 2. TELEFONOS DE LAS ART -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">Teléfonos de las <span class="subrayado-amarillo"><strong>principales ART</strong></span></h2>
            <p class="centro max-w-600 mx-auto txt-gris mb-40">Listado actualizado de números gratuitos para denuncias de siniestros y consultas generales.</p>
            
            <article class="info-bloque b-none" style="overflow-x: auto; padding: 0;">
                <table class="w-100" style="border-collapse: collapse; min-width: 37.5rem;">
                    <thead>
                        <tr style="background-color: var(--azul); color: var(--blanco);">
                            <th style="padding: 0.9375rem; text-align: left; border: 0.0625rem solid #ddd;">ART</th>
                            <th style="padding: 0.9375rem; text-align: left; border: 0.0625rem solid #ddd;">Denuncia de Siniestros</th>
                            <th style="padding: 0.9375rem; text-align: left; border: 0.0625rem solid #ddd;">Consultas y Reclamos</th>
                        </tr>
                    </thead>
                    <tbody class="fs-09">
                        <tr><td style="padding: 0.75rem; border: 0.0625rem solid #ddd;"><b>Berkley</b></td><td style="padding: 0.75rem; border: 0.0625rem solid #ddd;">0-800-777-2020</td><td style="padding: 0.75rem; border: 0.0625rem solid #ddd;">0-800-333-3031</td></tr>
                        <tr style="background-color: var(--gris-claro);"><td><b>Prevención</b></td><td>0800-444-4278</td><td>0800-555-5278</td></tr>
                        <tr><td><b>Experta</b></td><td>0800-888-0200</td><td>0800-777-7278</td></tr>
                        <tr style="background-color: var(--gris-claro);"><td><b>Provincia</b></td><td>0800-333-1333</td><td>0800-333-1278</td></tr>
                        <tr><td><b>La Segunda</b></td><td>0800-444-2782</td><td>0800-777-0036</td></tr>
                        <tr style="background-color: var(--gris-claro);"><td><b>Federación Patronal</b></td><td>0800-222-2322</td><td>0800-222-3535</td></tr>
                        <tr><td><b>Swiss Medical</b></td><td>0800-666-2000</td><td>0800-222-7854</td></tr>
                        <tr style="background-color: var(--gris-claro);"><td><b>Asociart</b></td><td>0800-888-0095</td><td>0800-888-0093</td></tr>
                        <tr><td><b>Omint</b></td><td>0800-888-6060</td><td>0800-555-0278</td></tr>
                        <tr style="background-color: var(--gris-claro);"><td><b>SMG</b></td><td>0800-222-2278</td><td>0800-999-2255</td></tr>
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

