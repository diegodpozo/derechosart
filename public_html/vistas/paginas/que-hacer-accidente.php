<?php
/**
 * VISTA: GUIA PASO A PASO - ¿QUE HACER EN CASO DE ACCIDENTE LABORAL?
 */
?>

<main class="fade-in">
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Guía: ¿Qué hacer en caso de <span class="subrayado-amarillo"><strong>Accidente Laboral?</strong></span></h1>
            <p class="subtitulo-hero">Pasos detallados desde el momento del siniestro hasta el cobro de tu indemnización final.</p>
        </section>
    </section>

    <!-- CONTENIDO DETALLADO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <article class="max-w-900 mx-auto bg-blanco p-40 border-radius-20 shadow-light">
                
                <h2 class="mb-30"><span class="subrayado-amarillo">Etapa 1:</span> La Denuncia</h2>
                <p>Lo primero que debés hacer tras un accidente, ya sea en tu lugar de trabajo o en el trayecto (in itinere), es realizar la denuncia a la ART.</p>
                
                <h3 class="mt-30 fs-115">¿Quién puede hacer la denuncia?</h3>
                <ul class="lista-check mt-15">
                    <li><strong>El empleador:</strong> Es el responsable principal de informar el hecho a la ART.</li>
                    <li><strong>El trabajador:</strong> Si tu empleador no hace la denuncia, podés realizarla vos directamente.</li>
                </ul>

                <h3 class="mt-30 fs-115">¿Cómo se realiza?</h3>
                <p class="mt-15">Podés comunicarte por teléfono a la línea de emergencias de tu ART, enviar un telegrama gratuito por Correo Argentino o presentar una nota en su sede. La denuncia debe ser precisa en cuanto a fecha, hora y lugar.</p>

                <div class="info-bloque b-none bl-8-amarillo bg-gris p-20 mt-30">
                    <p><strong>Si la ART acepta:</strong> Deben brindarte atención médica en un plazo máximo de 72 horas hábiles.</p>
                    <p><strong>Si la ART rechaza:</strong> Tenés derecho a iniciar un expediente en la Comisión Médica con patrocinio de un abogado especializado.</p>
                </div>

                <hr class="my-40">

                <h2 class="mb-30"><span class="subrayado-amarillo">Etapa 2:</span> Prestaciones Médicas</h2>
                <p>Una vez aceptada la denuncia, tenés derecho a recibir de forma gratuita y obligatoria:</p>
                <section class="grid-iconos mt-30">
                    <article class="icono-item">
                        <?= render_icon('user-doctor', 'txt-amarillo') ?>
                        <p><strong>Asistencia</strong> médica y farmacéutica integral.</p>
                    </article>
                    <article class="icono-item">
                        <?= render_icon('wheelchair', 'txt-amarillo') ?>
                        <p><strong>Rehabilitación</strong> y prótesis si fuera necesario.</p>
                    </article>
                    <article class="icono-item">
                        <?= render_icon('truck-medical', 'txt-amarillo') ?>
                        <p><strong>Traslados</strong> hacia los centros de atención sin costo.</p>
                    </article>
                </section>

                <hr class="my-40">

                <h2 class="mb-30"><span class="subrayado-amarillo">Etapa 3:</span> El Alta Médica</h2>
                <p>Al finalizar el tratamiento, la ART te otorgará el alta médica. Pueden ocurrir dos escenarios:</p>
                
                <h3 class="mt-30 fs-115">A. Alta con recuperación total</h3>
                <p class="mt-15">Te reincorporás a tus tareas, pero conservás el derecho a iniciar el reclamo de <strong>indemnización por incapacidad</strong> si quedaron secuelas.</p>

                <h3 class="mt-30 fs-115">B. Alta con dolencias persistentes</h3>
                <p class="mt-15">Si seguís con dolor o no podés trabajar, tenés un plazo de 5 días hábiles para solicitar el reingreso al tratamiento mediante una "Divergencia en el Alta".</p>

                <hr class="my-40">

                <h2 class="mb-30"><span class="subrayado-amarillo">Etapa 4:</span> La Indemnización</h2>
                <p>Es la compensación económica por las secuelas incapacitantes. El monto final depende de tres factores clave:</p>
                <ol class="lista-numerica mt-20">
                    <li><strong>Porcentaje de Incapacidad:</strong> Determinado por médicos de la SRT.</li>
                    <li><strong>Edad:</strong> Al momento de ocurrir el accidente.</li>
                    <li><strong>Sueldo:</strong> Tu Ingreso Base Mensual (IBM).</li>
                </ol>

                <div class="destacado-v2 mt-30 centro">
                    <p class="fs-120 fw-700 mb-15">¿Sabés cuánto te corresponde cobrar?</p>
                    <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn btn-amarillo">USAR CALCULADORA ONLINE</a>
                </div>

                <hr class="my-40">

                <h2 class="mb-30">Consejo <span class="subrayado-amarillo"><strong>Profesional</strong></span></h2>
                <p>Es fundamental contar con un médico de parte y un abogado especializado durante todo el proceso, especialmente en las juntas médicas. Esto asegura que el porcentaje de incapacidad asignado sea el real y que cobres lo que por ley te corresponde.</p>
                
                <section class="centro mt-40">
                    <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                        <?= render_icon('whatsapp', 'mr-10') ?> CONSULTANOS POR WHATSAPP
                    </a>
                </section>

            </article>

        </section>
    </section>
</main>
