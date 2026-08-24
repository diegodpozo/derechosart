<?php
/**
 * VISTA: QUÉ HACER ANTE UN ACCIDENTE LABORAL
 * CONTENIDO EXTRAIDO DE DERECHOSART.COM.AR
 */
?>

<main class="fade-in">
    <p class="tl-dr">Qué hacer ante un accidente laboral: guía paso a paso. Desde la primera aténción médica hasta la denuncia formal a la ART. Protegé tus derechos y asegurá tu indemnización.</p>
    <!-- HERO DE LA PAGINA -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>¿Qué hacer ante un <span class="subrayado-amarillo"><strong>Accidente Laboral?</strong></span></h1>
            <p class="subtitulo-hero">Guía paso a paso sobre cómo actuar para proteger tus derechos y asegurar tu indemnización.</p>
        </section>
    </section>

    <!-- GUIA PASO A PASO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <!-- ETAPA 1: LA DENUNCIA -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">1. Realizá la <span class="subrayado-amarillo">denuncia</span> a la ART</h2>
                <p class="mb-20">Es el primer paso fundamental. El empleador tiene la obligación de denunciar el hecho, pero si no lo hace, <strong>podés hacerla vos mismo</strong>.</p>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Formas de denunciar:</b> Por teléfono, mail o enviando un telegrama gratuito por Correo Argentino.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Aceptación:</b> La ART debe brindarte atención médica en un plazo máximo de 72 horas hábiles.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Rechazo:</b> La ART tiene 10 días hábiles (prorrogables) para notificarte si rechaza el accidente.</li>
                </ul>
            </article>

            <!-- ETAPA 2: EL ALTA MEDICA -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">2. El momento del <span class="subrayado-amarillo">Alta Médica</span></h2>
                <p class="mb-20">El alta ocurre cuando la ART considera que terminó el tratamiento. Se presentan dos escenarios:</p>
                <section class="grid-info-doble mt-20 gap-30">
                    <article class="bg-gris p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Si estás recuperado</h3>
                        <p class="fs-09">Volvés a trabajar y tenés derecho a iniciar el reclamo por indemnización si quedaron secuelas. La ART tiene 30 días para citarte.</p>
                    </article>
                    <article class="bg-gris p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Si seguís con dolores</h3>
                        <p class="fs-09">Tenés 5 días hábiles para pedir la reincorporación al tratamiento. Si la ART se niega, debemos intervenir ante la SRT.</p>
                    </article>
                </section>
            </article>

            <!-- ETAPA 3: LA INDEMNIZACION -->
            <article class="info-bloque b-none bl-8-amarillo">
                <h2 class="mb-20">3. El cobro de la <span class="subrayado-amarillo">Indemnización</span></h2>
                <p class="mb-20">Es el resarcimiento económico por las secuelas que te dejó el accidente. No dejes que la ART decida el monto sola.</p>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Factores del cálculo:</b> Se basa en tu porcentaje de incapacidad, edad, sueldo y lugar del hecho.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Revisión Médica:</b> Es fundamental ir a la junta médica con un <strong>médico de parte</strong> para asegurar que el porcentaje de incapacidad sea el real.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Plazos:</b> Si pasaron 31 días desde el alta y la ART no te citó, iniciamos nosotros el trámite.</li>
                </ul>
            </article>

        </section>
    </section>

    <!-- SECCION ADVERTENCIAS -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion">Consejos <span class="subrayado-amarillo"><strong>importantes</strong></span></h2>
            <section class="grid-info-doble mt-30">
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> NO CONFÍES</h3>
                    <p class="fs-09">Si te llaman "abogados" que consiguieron tu número sin que se lo dieras, son caranchos. Buscan bajarte el porcentaje de incapacidad para cerrar acuerdos rápidos que los benefician a ellos y no a vos.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('stethoscope-solid', 'mr-10') ?> MÉDICO DE PARTE</h3>
                    <p class="fs-09">Nunca vayas solo a una junta médica. Sin un médico legista de tu lado, estás en desventaja frente a la ART, que siempre buscará minimizar tus lesiones para pagar menos.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-gris centro">
        <section class="contenedor">
            <h2 class="mb-20">¿Sufriste un accidente y <span class="subrayado-amarillo"><strong>tenés dudas?</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris mb-30">Analizamos tu caso sin costo. No firmes nada con la ART sin antes hablar con especialistas que defiendan tus intereses.</p>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> CONSULTANOS GRATIS POR WHATSAPP
            </a>
        </section>
    </section>
</main>
