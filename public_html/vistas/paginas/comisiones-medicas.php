<?php
/**
 * VISTA: COMISIONES MEDICAS - OPTIMIZADA AUTONOMAMENTE PARA SEO Y CONTENIDO LEGAL
 */
?>

<style>
    .grid-servicios {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    .tarjeta-paso {
        background: var(--blanco);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        position: relative;
        transition: transform 0.3s ease;
        border-top: 4px solid var(--amarillo);
    }
    .tarjeta-paso:hover {
        transform: translateY(-5px);
    }
    .paso-numero {
        font-size: 3rem;
        font-weight: 800;
        color: rgba(0,0,0,0.05);
        position: absolute;
        top: 10px;
        right: 20px;
        line-height: 1;
    }
    .tarjeta-paso h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 2;
    }
    .tarjeta-paso p {
        font-size: 0.95rem;
        color: var(--gris-texto);
        position: relative;
        z-index: 2;
    }
</style>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Comisiones <span class="subrayado-amarillo"><strong>Médicas SRT</strong></span></h1>
            <p class="subtitulo-hero">Trámites ante la Superintendencia de Riesgos del Trabajo para el cobro de indemnizaciones.</p>
        </section>
    </section>

    <!-- INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿QUÉ SON LAS <span class="subrayado-amarillo">COMISIONES</span> MÉDICAS?</h2>
            <p class="txt-gris">Son los organismos administrativos de la <strong>Superintendencia de Riesgos del Trabajo (SRT)</strong> encargados de resolver las discrepancias entre los trabajadores y las ART. Su función principal es determinar si un accidente o enfermedad es laboral, evaluar el grado de incapacidad física o psíquica y establecer el monto de la indemnización que te corresponde.</p>
            <p class="txt-gris">Es una instancia <strong>obligatoria y gratuita</strong>. Sin embargo, para que tus derechos sean respetados y no te asignen un porcentaje menor al real, es fundamental contar con un abogado especialista desde el inicio del trámite.</p>
        </section>
    </section>

    <!-- PASOS DEL PROCESO -->
    <section class="seccion-texto bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">PASOS PARA TU <span class="subrayado-amarillo">RECLAMO</span></h2>
            <section class="grid-servicios mt-40">
                <article class="tarjeta-paso">
                    <span class="paso-numero">01</span>
                    <h3>INICIO DEL TRÁMITE</h3>
                    <p>Tras el alta médica, se presenta el reclamo formal ante la Comisión Médica correspondiente a tu domicilio o lugar de trabajo.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">02</span>
                    <h3>AUDIENCIA MÉDICA</h3>
                    <p>Médicos de la SRT te evalúan físicamente. Aquí es donde nuestro equipo asegura que se considere cada lesión según el Baremo legal.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">03</span>
                    <h3>DICTAMEN MÉDICO</h3>
                    <p>La Comisión emite un dictamen con el porcentaje de incapacidad. Analizamos si este número refleja fielmente tu daño real.</p>
                </article>
                <article class="tarjeta-paso">
                    <span class="paso-numero">04</span>
                    <h3>AUDIENCIA DE ACUERDO</h3>
                    <p>Si estamos conformes, se firma un acuerdo para el pago de la indemnización. Si no, se procede a la etapa de apelación judicial.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- DUDAS Y RECHAZOS -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿LA ART <span class="subrayado-amarillo">RECHAZÓ</span> TU ACCIDENTE?</h2>
            <p class="txt-gris">Es común que las ART rechacen siniestros alegando que la patología es "preexistente" o que el hecho no ocurrió en ocasión del trabajo. Ante un rechazo, tenés derecho a que la Comisión Médica revise el caso y obligue a la ART a brindarte cobertura y pagarte la indemnización.</p>
            
            <section class="grid-info-doble mt-40">
                <article class="info-bloque">
                    <?= render_icon('file-circle-xmark', 'mb-10', 'fs-2') ?>
                    <h3>RECHAZO DE SINIESTRO</h3>
                    <p>Si te llegó una carta documento rechazando tu accidente, contactanos de inmediato para apelar la decisión ante la SRT.</p>
                </article>
                <article class="info-bloque">
                    <?= render_icon('chart-line-down', 'mb-10', 'fs-2') ?>
                    <h3>DIVERGENCIA EN LA INCAPACIDAD</h3>
                    <p>Si la ART reconoce el accidente pero te ofrece un porcentaje de incapacidad ridículo, peleamos por una reevaluación justa.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- FAQ ESPECIFICO COMISIONES -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion">PREGUNTAS <span class="subrayado-amarillo">FRECUENTES</span> SRT</h2>
            <section class="max-w-900 mx-auto mt-40">
                <section class="lista-faq mt-0">
                    <details>
                        <summary><h3>¿Cuánto se demora un trámite en Comisión Médica?</h3></summary>
                        <article class="respuesta">
                            <p>Los plazos legales varían, pero un trámite normal desde el inicio hasta la audiencia de acuerdo suele demorar entre <strong>4 y 8 meses</strong>, dependiendo de la jurisdicción y la complejidad del caso médico.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué pasa si no estoy de acuerdo con el porcentaje que me dieron?</h3></summary>
                        <article class="respuesta">
                            <p>Tenés derecho a <strong>apelar</strong> el dictamen médico ante la Comisión Médica Central o directamente ante los tribunales laborales competentes. Nosotros evaluamos si vale la pena la espera judicial para obtener un monto mayor.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Tengo que pagar para ir a la Comisión Médica?</h3></summary>
                        <article class="respuesta">
                            <p><strong>No.</strong> El trámite es gratuito para el trabajador. Los honorarios de tu abogado en esta etapa son pagados por la ART o acordados sobre el resultado, sin que vos tengas que adelantar dinero.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué es el Baremo de evaluación de incapacidades?</h3></summary>
                        <article class="respuesta">
                            <p>Es la tabla oficial (Decreto 659/96) que establece cuántos "puntos" de incapacidad corresponden a cada lesión. Por ejemplo, una hernia de disco o una fractura tienen puntajes específicos que sumados determinan tu indemnización final.</p>
                        </article>
                    </details>
                </section>
            </section>
        </section>
    </section>

    <!-- RECURSOS TRAMITES -->
    <section class="seccion-texto bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">HERRAMIENTAS PARA <span class="subrayado-amarillo">TU TRÁMITE</span></h2>
            <section class="grid-iconos mt-40">
                <a href="<?= BASE_URL ?>formularios-srt" class="derecho-item">
                    <?= render_icon('file-lines') ?>
                    <h3>FORMULARIOS SRT</h3>
                </a>
                <a href="<?= BASE_URL ?>buscador-comisiones" class="derecho-item">
                    <?= render_icon('location-dot') ?>
                    <h3>BUSCADOR DE SEDES</h3>
                </a>
                <a href="<?= BASE_URL ?>tabla-incapacidad" class="derecho-item">
                    <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/dedo.png" alt="Tabla de Incapacidad" style="width: 3rem; height: 3rem; object-fit: contain; margin-bottom: 5px;">
                    <h3>TABLA DE INCAPACIDAD</h3>
                </a>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-negro-final txt-blanco">
        <section class="contenedor flex-between">
            <article>
                <h3>¿NECESITÁS ASESORAMIENTO PARA TU JUNTA MÉDICA?</h3>
                <p class="txt-blanco-opaco">No vayas solo/a. Asegurá tu indemnización con expertas en derecho laboral.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                CONSULTAR POR WHATSAPP
            </a>
        </section>
    </section>
</main>
