<?php
// VISTA: ACCIDENTES DE TRABAJO - NUEVA ESTETICA
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>ACCIDENTES DE TRABAJO</h1>
            <p class="subtitulo-hero">Todo lo que necesitás saber sobre tus derechos y reclamos</p>
        </section>
    </section>

    <!-- INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">TODO LO QUE <span class="subrayado-amarillo">NECESITÁS</span> SABER</h2>
            <p class="txt-gris">Te dejamos estos recursos e información de calidad para que sepas qué ART tenés, cómo y dónde realizar la denuncia, y para que puedas <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calcular el monto de tu indemnización</a>.</p>
        </section>
    </section>

    <!-- RECURSOS DESTACADOS -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">SI TUVISTE UN ACCIDENTE <span class="subrayado-amarillo">NECESITÁS ESTO</span></h2>
            <section class="grid-iconos">
                <a href="<?= BASE_URL ?>calculadora-indemnizacion" class="derecho-item">
                    <?= render_icon('calculator') ?>
                    <h3>CALCULADORA DE INDEMNIZACIÓN</h3>
                </a>
                <a href="<?= BASE_URL ?>contacto" class="derecho-item">
                    <?= render_icon('whatsapp') ?>
                    <h3>CONSULTA GRATUITA</h3>
                </a>
            </section>
        </section>
    </section>

    <!-- DEFINICION Y TIPOS -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿QUÉ SE CONSIDERA <span class="subrayado-amarillo">ACCIDENTE</span> DE TRABAJO?</h2>
            <p class="txt-gris">Los accidentes laborales son hechos súbitos y violentos que le ocurren al trabajador por el hecho o en ocasión del trabajo, o en el trayecto entre el domicilio del trabajador y el lugar de trabajo.</p>
            
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3>ACCIDENTE EN OCASIÓN</h3>
                    <p>Es aquel que ocurre mientras el trabajador está realizando sus tareas habituales o por orden del empleador.</p>
                </article>
                <article class="info-bloque">
                    <h3>ACCIDENTE IN ITINERE</h3>
                    <p>Es el que ocurre en el trayecto directo entre el domicilio y el lugar de trabajo, siempre que no haya sido interrumpido por intereses particulares.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- DERECHOS -->
    <section class="seccion-derechos">
        <section class="contenedor">
            <h2 class="titulo-seccion">DERECHOS DEL <span class="subrayado-amarillo">TRABAJADOR</span></h2>
            <section class="lista-derechos">
                <article class="derecho-item">
                    <?= render_icon('user-doctor') ?>
                    <h3>Asistencia médica</h3>
                    <p>Y farmacéutica gratuita.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('wheelchair') ?>
                    <h3>Prótesis</h3>
                    <p>Y ortopedia necesaria.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('pills') ?>
                    <h3>Rehabilitación</h3>
                    <p>Hasta el alta médica.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('money-bill-wave') ?>
                    <h3>Indemnización</h3>
                    <p>Por incapacidad laboral.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-negro-final txt-blanco">
        <section class="contenedor flex-between">
            <article>
                <h3>¿QUERÉS SABER QUÉ INDEMNIZACIÓN TE CORRESPONDE?</h3>
                <p class="txt-blanco-opaco">Nuestras expertas analizan tu caso sin costo. No cobramos gastos de inicio.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                CONTACTO
            </a>
        </section>
    </section>
</main>
n>
</main>
