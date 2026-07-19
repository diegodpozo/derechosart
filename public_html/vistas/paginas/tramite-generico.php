<?php
// VISTA GENERICA PARA PAGINAS DE TRAMITES DE COMISIONES MEDICAS
$heroParrafos = explode("\n", trim($TramiteHeroTexto ?? ''));
?>
<style>
    .hero-tramite {
        text-align: left;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 6rem 0;
    }
    .hero-tramite .contenedor {
        width: 100%;
    }
    .hero-tramite h1 {
        max-width: 56.25rem;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    .hero-tramite h1 .h1-titulo {
        font-size: 0.7em;
    }
    .hero-tramite h1 .h1-sub {
        display: block;
        font-size: 0.5em;
        font-weight: 400;
        margin-top: 0.5rem;
    }
    .hero-tramite .subtitulo-hero {
        max-width: 56.25rem;
        margin: 0 0 0.5rem 0;
        line-height: 1.7;
    }
    .hero-tramite .subtitulo-hero.centrado {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 48rem) {
        .hero-tramite {
            min-height: auto;
            padding: 4rem 0;
        }
    }
</style>
<main class="fade-in">
    <section class="hero-interna hero-tramite">
        <section class="contenedor">
            <h1><span class="h1-titulo"><?= htmlspecialchars($TramiteTitulo) ?> SRT:</span><span class="h1-sub">guía completa para trabajadores accidentados 2026</span></h1>
            <?php foreach ($heroParrafos as $parrafo): $parrafo = trim($parrafo); if ($parrafo === '') continue; ?>
                <?php if (str_starts_with($parrafo, '✅') || str_starts_with($parrafo, '-')): ?>
                    <p class="subtitulo-hero" style="font-size:0.95rem;"><?= htmlspecialchars($parrafo) ?></p>
                <?php elseif (str_contains($parrafo, '⚖️')): ?>
                    <p class="subtitulo-hero centrado" style="font-weight:600;font-size:1.15rem;"><?= htmlspecialchars($parrafo) ?></p>
                <?php else: ?>
                    <p class="subtitulo-hero"><?= htmlspecialchars($parrafo) ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
    </section>

    <?php if (!empty($TramiteContenido)): ?>
        <?= $TramiteContenido ?>
    <?php else: ?>
        <section class="seccion-texto">
            <section class="contenedor">
                <h2 class="titulo-seccion al-izq">¿En qué <span class="subrayado-amarillo">consiste</span>?</h2>
                <p class="txt-gris"><?= htmlspecialchars($TramiteDescripcion) ?></p>
            </section>
        </section>
    <?php endif; ?>

    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Cómo se inician los <span class="subrayado-amarillo">trámites</span>?</h2>
            <p class="txt-gris">La mayoría se inician online, a través del sistema de e-Servicios SRT, con tu CUIL y Clave Fiscal de AFIP nivel 3. Las excepciones son la divergencia en el alta y la divergencia en las prestaciones, que se hacen de forma presencial ante la Comisión Médica que te corresponde.</p>
        </section>
    </section>

    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Plazos <span class="subrayado-amarillo">importantes</span></h2>
            <p class="txt-gris">A lo largo de un reclamo por un accidente de trabajo o una enfermedad profesional, hay plazos que son muy importantes. Conocerlos puede hacer la diferencia para no perder ninguno de tus derechos.</p>
            <table class="tabla-plazos mt-20">
                <thead>
                    <tr>
                        <th>¿Qué trámite o situación?</th>
                        <th>Plazo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiempo que tiene la ART para rechazar el accidente o la enfermedad profesional</td>
                        <td>10 días hábiles (prorrogable por 10 días hábiles más)</td>
                    </tr>
                    <tr>
                        <td>Tiempo que tiene la ART para iniciar el trámite de determinación de incapacidad después del alta</td>
                        <td>30 días hábiles</td>
                    </tr>
                    <tr>
                        <td>Si no estás de acuerdo con el alta médica, plazo para manifestar tu disconformidad</td>
                        <td>5 días hábiles desde el alta</td>
                    </tr>
                    <tr>
                        <td>Tiempo que tiene la Comisión Médica para dictar una resolución</td>
                        <td>60 días (prorrogable por 30 días hábiles más – Res. 5/2026)</td>
                    </tr>
                    <tr>
                        <td>Plazo para que se pague la indemnización una vez homologado el acuerdo o dictamen</td>
                        <td>10 días hábiles</td>
                    </tr>
                    <tr>
                        <td>Tiempo para apelar la resolución ante la Comisión Médica Central</td>
                        <td>10 días hábiles desde la notificación</td>
                    </tr>
                    <tr>
                        <td>Plazo máximo para iniciar el reclamo</td>
                        <td>2 años desde el accidente o desde el diagnóstico de la enfermedad profesional</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </section>

    <section class="seccion-texto bg-blanco">
        <section class="contenedor centro">
            <section class="mt-30">
                <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">CONSULTAR POR WHATSAPP</a>
            </section>
            <section class="mt-30">
                <a href="<?= BASE_URL ?>comisiones-medicas" class="btn" style="background:var(--gris-claro);color:var(--gris-texto);">← VOLVER A COMISIONES MÉDICAS</a>
            </section>
        </section>
    </section>
</main>
