<?php
// VISTA: QUIÉNES SOMOS - ESTÉTICA REFINADA 2026
?>

<main class="fade-in">
    <!-- 1. HERO REFINADO -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Expertas en <span class="subrayado-amarillo"><strong>Accidentes de Trabajo y ART</strong></span></h1>
            <p class="subtitulo-hero">Más de 8 años defendiendo los derechos de los trabajadores con transparencia y compromiso profesional.</p>
        </section>
    </section>

    <!-- 2. NUESTRA ESENCIA -->
    <section class="seccion-texto">
        <section class="contenedor">
            <section class="grid-info-doble mt-0 al-centro-v">
                <article>
                    <h2 class="titulo-seccion al-izq">Nuestra <span class="subrayado-amarillo">Misión Profesional</span></h2>
                    <p class="txt-gris fs-115 lh-18">En <b>DerechosART</b>, comprendemos que detrás de cada consulta hay una historia de vida, familia y esfuerzo. No solo resolvemos casos legales; brindamos la tranquilidad y seguridad de saber que tenés a alguien que te defiende de verdad en tu <strong>reclamo de indemnización</strong>.</p>
                    <h3 class="fuente-manuscrita mt-30 txt-negro fs-18">
                        <span class="subrayado-amarillo">Te acompañamos en cada paso del proceso.</span>
                    </h3>
                </article>
                <article class="info-bloque b-none bl-8-amarillo">
                    <p><b>Experiencia y Resultados:</b> Trabajamos en CABA, GBA, Rosario, Neuquén y Río Negro con un sistema virtual eficiente que elimina demoras y traslados innecesarios.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 3. SECCION EQUIPO -->
    <section class="bg-blanco py-100">
        <section class="contenedor">
            <h2 class="titulo-seccion">Nuestro <span class="subrayado-amarillo">Equipo de Especialistas</span></h2>
            <section class="grid-equipo mt-60">
                <!-- DRA. ROMINA -->
                <article class="miembro-equipo">
                    <figure class="foto-circulo">
                        <?= render_img('equipo/romi.jpg', 'Dra. Romina Koñiuch - Especialista en Accidentes de Trabajo', ['width' => '180', 'height' => '180']) ?>
                    </figure>
                    <h3>Dra. Romina Koñiuch</h3>
                    <p class="especialidad">Especialista en <br> Accidentes Laborales y ART</p>
                    <p class="matriculas">
                        Tº 124 Fº 403 – C.P.A.C.F.<br>
                        Tº 53 Fº 331 – C.A.S.I.
                    </p>
                </article>

                <!-- DRA. ATHINA -->
                <article class="miembro-equipo">
                    <figure class="foto-circulo">
                        <?= render_img('equipo/athi.jpg', 'Dra. Athina B. Pereyra - Especialista en Despidos', ['width' => '180', 'height' => '180']) ?>
                    </figure>
                    <h3>Dra. Athina B. Pereyra</h3>
                    <p class="especialidad">Especialista en <br> Despidos e Indemnizaciones</p>
                    <p class="matriculas">
                        Tº 124 Fº 846 – C.P.A.C.F.<br>
                        Tº 49 Fº 269 – C.A.S.I.
                    </p>
                </article>

                <!-- DRA. NAIR -->
                <article class="miembro-equipo">
                    <figure class="foto-circulo">
                        <?= render_img('equipo/nair.jpg', 'Dra. Nair Chemes - Experta en Enfermedades Profesionales', ['width' => '180', 'height' => '180']) ?>
                    </figure>
                    <h3>Dra. Nair Chemes</h3>
                    <p class="especialidad">Experta en Accidentes <br> y Enfermedades Profesionales</p>
                    <p class="matriculas">
                        Libro 47 Fº 365 – Col. Ab. Rosario<br>
                        Tº 404 Fº 503 – Mat. Federal
                    </p>
                </article>

                <!-- DRA. MARIA JOSE -->
                <article class="miembro-equipo">
                    <figure class="foto-circulo">
                        <?= render_img('equipo/maria.jpeg', 'Dra. María José Zalazar - Abogada Laboralista Neuquén', ['width' => '180', 'height' => '180']) ?>
                    </figure>
                    <h3>Dra. María José Zalazar</h3>
                    <p class="especialidad">Especialista en <br> Accidentes Laborales</p>
                    <p class="matriculas">
                        Mat. N° 4235 CAYPN (Neuquén)<br>
                        Mat. N° 6507 CAAVO (Río Negro)<br>
                        Mat. Fed. T° 145 – F° 188
                    </p>
                </article>
            </section>
        </section>
    </section>

    <!-- 4. DIFERENCIALES -->
    <section class="seccion-texto">
        <section class="contenedor centro">
            <h2 class="titulo-seccion">Por qué <span class="subrayado-amarillo">Elegir nuestro Estudio Jurídico</span></h2>
            <section class="grid-iconos mt-60">
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('dollar-sign-solid', '', '', '#000000') ?></article>
                    <h3>Sin costos iniciales</h3>
                    <p>Cubrimos todos los gastos del reclamo. Vos no pagás nada hasta que cobres tu <strong>indemnización de ART</strong>.</p>
                </article>
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('handshake-regular', '', '', '#000000') ?></article>
                    <h3>Asesoramiento Real</h3>
                    <p>Hablás directamente con abogadas especialistas, garantizando un <strong>servicio legal transparente</strong>.</p>
                </article>
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('laptop-solid-full', '', '', '#000000') ?></article>
                    <h3>Tecnología y Rapidez</h3>
                    <p>Iniciamos tu reclamo de forma 100% online y eficiente en todo el país.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 5. CTA FINAL -->
    <section class="py-100">
        <section class="contenedor">
            <article class="info-bloque b-none bl-8-amarillo py-40 px-50 bg-gris-claro">
                <h2 class="fs-25 mb-10">Tu trabajo y tus derechos <span class="subrayado-amarillo">no se negocian.</span></h2>
                <div style="display: inline-flex; flex-direction: column; align-items: flex-end;">
                    <p class="txt-gris fs-12" style="margin-bottom: 0.9375rem; text-align: left;">Estamos listos para escucharte y analizar tu <strong>caso de accidente o despido</strong> hoy mismo.</p>
                    <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo" style="width: auto;">
                        CONTACTO
                    </a>
                </div>
            </article>
        </section>
    </section>
</main>
