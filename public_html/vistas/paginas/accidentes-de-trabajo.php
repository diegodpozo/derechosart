<?php
// VISTA: ACCIDENTES DE TRABAJO - TEXTO SEGUN DOCX
?>

<main class="fade-in">
    <p class="tl-dr">Todo sobre accidentes de trabajo en Argentina: qué es, plazos para denunciar, derechos del trabajador y cómo reclamar la indemnización a la ART. Guía completa 2026 con la Ley de Riesgos del Trabajo.</p>
    <!-- HERO -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Accidentes de Trabajo</h1>
            <p class="subtitulo-hero">Tus derechos, plazos y cómo reclamar tu indemnización</p>
        </section>
    </section>

    <!-- INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Qué es un <span class="subrayado-amarillo">Accidente</span> de Trabajo?</h2>
            <p class="txt-gris">Un accidente de trabajo es todo hecho súbito y violento que le ocurre al trabajador <strong>por el hecho o en ocasión del trabajo</strong>, o en el trayecto directo entre su domicilio y el lugar de laburo. Está regulado por la <strong>Ley de Riesgos del Trabajo N.° 24.557</strong> y su Decreto Reglamentario N.° 170/96.</p>
            <p class="txt-gris mt-10">Si sufriste un accidente laboral, la ART (Aseguradora de Riesgos del Trabajo) tiene la obligación de brindarte asistencia médica, farmacéutica y, en su caso, una indemnización por la incapacidad que te haya quedado.</p>
        </section>
    </section>

    <!-- TIPOS DE ACCIDENTE -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Tipos de <span class="subrayado-amarillo">Accidente</span></h2>
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3>Accidente en ocasión del trabajo</h3>
                    <p>Es el que ocurre mientras el trabajador está realizando sus tareas habituales o por orden del empleador, dentro o fuera del establecimiento. Ejemplo: un corte con una herramienta, una caída en la obra, un accidente manipulando maquinaria.</p>
                </article>
                <article class="info-bloque">
                    <h3>Accidente in itinere</h3>
                    <p>Es el que ocurre en el trayecto <strong>directo e ininterrumpido</strong> entre el domicilio del trabajador y el lugar de trabajo. No se considera in itinere si el recorrido fue interrumpido por intereses particulares (hacer una compra, pasar por la casa de un amigo, etc.).</p>
                </article>
            </section>
            <section class="grid-info-doble mt-20">
                <article class="info-bloque">
                    <h3>Enfermedad profesional</h3>
                    <p>Aunque no es técnicamente un "accidente", la enfermedad profesional tiene el mismo tratamiento legal. Son las enfermedades causadas por la exposición a factores de riesgo inherentes a la actividad laboral (hernia discal, túnel carpiano, varices, hipoacusia).</p>
                    <p class="mt-10"><strong>Aclaración:</strong> Si sufrís un accidente en los centros de rehabilitación de la ART o camino a ellos, la ART debe cubrir ese siniestro.</p>
                </article>
                <article class="info-bloque"></article>
            </section>
        </section>
    </section>

    <!-- QUE CUBRE LA ART -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Qué <span class="subrayado-amarillo">Cubre</span> la ART?</h2>
            <p class="txt-gris">Desde el momento en que la ART acepta tu denuncia, tenés derecho a recibir las siguientes prestaciones <strong>sin costo alguno</strong>:</p>
            <section class="lista-derechos mt-40">
                <article class="derecho-item">
                    <?= render_icon('user-doctor') ?>
                    <h3>Atención médica</h3>
                    <p>Consultas, estudios, internaciones y todo tratamiento que necesites.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('pills') ?>
                    <h3>Medicamentos</h3>
                    <p>Toda la medicación derivada del accidente o enfermedad laboral.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('wheelchair') ?>
                    <h3>Prótesis y ortopedia</h3>
                    <p>Dispositivos necesarios para tu recuperación o adaptación.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('stethoscope-solid') ?>
                    <h3>Rehabilitación</h3>
                    <p>Fisioterapia, kinesiología y tratamientos de rehabilitación hasta el alta médica.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('sack-dollar') ?>
                    <h3>Indemnización</h3>
                    <p>Si te quedó una incapacidad permanente, cobrás una indemnización según el baremo 2026.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('scale-balanced') ?>
                    <h3>Gastos de traslado</h3>
                    <p>Si necesitás viajar para recibir atención médica, la ART debe cubrir los costos.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- PLAZOS CLAVE -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Plazos <span class="subrayado-amarillo">Clave</span></h2>
            <p class="txt-gris mb-40">Los plazos en temas de ART son estrictos. Si los perdés, podés perder derechos importantes.</p>
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Denuncia: sin plazo</h3>
                    <p>No hay plazo legal para denunciar el accidente ante la ART. Sin embargo, cuanto antes lo hagas, mejor. La ART tiene <strong>10 días</strong> para aceptar o rechazar tu denuncia, prorrogables por <strong>10 días</strong> más, siempre que te haya notificado que va a hacer uso de esa prórroga.</p>
                </article>
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Alta médica: 5 días</h3>
                    <p>Si la ART te da el alta y estás disconforme, tenés <strong>5 días hábiles</strong> para pedir la reapertura del caso ante la SRT.</p>
                </article>
            </section>
            <section class="grid-info-doble mt-20">
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Rechazo: 10 días</h3>
                    <p>Si la ART tiene <strong>10 días</strong> para rechazar tu accidente, prorrogables por <strong>10 días</strong> más. Este rechazo puede ser apelado ante la Comisión Médica correspondiente.</p>
                </article>
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Indemnización: 2 años</h3>
                    <p>Para reclamar la indemnización por incapacidad, contás con un plazo de <strong>1 año</strong> desde la fecha del alta médica definitiva.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- QUE HACER PASO A PASO -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq" style="font-weight: normal;">¿Qué Hacer <span class="subrayado-amarillo" style="font-weight: 400;">Paso a Paso</span>?</h2>
            <p class="txt-gris mb-40">Si sufriste un accidente laboral, seguí estos pasos para proteger tus derechos:</p>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 1: Denuncia ante la ART</h3>
                <p class="txt-gris">Comunicate con tu ART lo antes posible. Podés hacerlo por teléfono, correo electrónico o enviando un telegrama gratuito por Correo Argentino. Si tu empleador se niega a denunciar, podés hacerlo vos directamente.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 2: Atención médica inmediata</h3>
                <p class="txt-gris">La ART debe brindarte atención médica en un plazo máximo de 72 horas hábiles desde la denuncia. Si no te atienden, podés ir a cualquier médico y la ART está obligada a reembolsar los gastos.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 3: Seguí el tratamiento</h3>
                <p class="txt-gris">Asistí a todas las citas médicas y seguí las indicaciones. Si dejás de ir, la ART puede darte el alta injustificadamente. Guardá todos los comprobantes y estudios.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 4: Alta médica e indemnización</h3>
                <p class="txt-gris">Cuando la ART te dé el alta, si te quedó una secuela, tenés derecho a una indemnización. El monto se calcula según el baremo 2026. Si el porcentaje es bajo, podemos impugnar ante la Comisión Médica.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo">
                <h3 class="mb-10">Paso 5: Si la ART rechaza</h3>
                <p class="txt-gris">Si la ART rechaza tu accidente o te da un porcentaje de incapacidad injusto, no te preocupes. Tenés derecho a apelar ante la Comisión Médica. Contamos con abogados especialistas en estos trámites.</p>
            </article>
        </section>
    </section>

    <!-- HERRAMIENTAS GRATUITAS -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Herramientas Gratuitas</h2>
            <section class="grid-iconos" style="grid-template-columns: repeat(2, 1fr);">
                <a href="<?= BASE_URL ?>calculadora-accidentes" class="derecho-item">
                    <?= render_icon('calculator-outline') ?>
                    <h3>Calculadora de indemnización</h3>
                    <p>Estimá cuánto te corresponde</p>
                </a>
                <a href="<?= BASE_URL ?>que-hacer" class="derecho-item">
                    <?= render_icon('list') ?>
                    <h3>Guía paso a paso</h3>
                    <p>Todo el procedimiento detallado</p>
                </a>
                <a href="<?= BASE_URL ?>tabla-incapacidad" class="derecho-item">
                    <?= render_icon('chart-simple') ?>
                    <h3>Tabla de incapacidades</h3>
                    <p>Porcentajes del baremo 2026</p>
                </a>
                <a href="<?= BASE_URL ?>cual-es-mi-art" class="derecho-item">
                    <?= render_icon('magnifying-glass') ?>
                    <h3>¿Cuál es mi ART?</h3>
                    <p>Consultá tu aseguradora</p>
                </a>
            </section>
        </section>
    </section>

    <!-- ARTICULOS RELACIONADOS -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Artículos Relacionados</h2>
            <section class="grid-info-doble">
                <a href="<?= BASE_URL ?>blog/accidente-laboral-guia-2026" class="info-bloque" style="text-decoration:none;">
                    <h3>Accidente laboral: qué hacer</h3>
                    <p>Guía completa con todos los pasos desde el momento del accidente hasta el cobro de la indemnización.</p>
                </a>
                <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" class="info-bloque" style="text-decoration:none;">
                    <h3>La ART rechazó mi accidente</h3>
                    <p>Si la ART no reconoce tu accidente, no está todo perdido. Conocé cómo impugnar el rechazo.</p>
                </a>
                <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" class="info-bloque" style="text-decoration:none;">
                    <h3>Me dieron el alta pero sigo con dolor</h3>
                    <p>¿Te dieron el alta médica pero seguís con limitaciones? Te explicamos cómo impugnar ante la SRT.</p>
                </a>
                <a href="<?= BASE_URL ?>tabla-incapacidad" class="info-bloque" style="text-decoration:none;">
                    <h3>Baremo 2026: tabla completa</h3>
                    <p>Consultá todos los porcentajes de incapacidad del nuevo baremo laboral vigente desde febrero 2026.</p>
                </a>
            </section>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-negro-final txt-blanco">
        <section class="contenedor flex-between">
            <article>
                <h3>¿Tuviste un accidente laboral?</h3>
                <p class="txt-blanco-opaco">Analizamos tu caso sin costo. No cobramos gastos de inicio.</p>
            </article>
            <a href="<?= BASE_URL ?>contacto" class="btn btn-amarillo">
                Consulta gratuita
            </a>
        </section>
    </section>
</main>
