<?php
// VISTA: ABOGADOS DE DESPIDOS E INDEMNIZACIONES LABORALES
?>

<main class="fade-in">
    <!-- 1. HERO -->
    <section class="hero-interna">
        <section class="contenedor">
            <?= renderBadgeResenas(null, 'mb-15') ?>
            <h1>Abogados de <span class="subrayado-amarillo">Despidos e Indemnizaciones</span></h1>
            <p class="subtitulo-hero">Defensa integral de trabajadores: cálculo de liquidación final, reclamos por trabajo no registrado y audiencias de conciliación.</p>
        </section>
    </section>

    <!-- 2. INTRODUCCION -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Te despidieron? <span class="subrayado-amarillo">Tus derechos</span> según la ley argentina</h2>
            <p class="txt-gris">El despido es una situación crítica que exige actuar con rapidez y rigor técnico. En Argentina, las relaciones laborales están tuteladas por el principio protectorio del artículo 14 bis de la Constitución Nacional y la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/texact.htm" target="_blank" rel="noopener noreferrer">Ley de Contrato de Trabajo N.° 20.744 (LCT)</a>.</p>
            <p class="txt-gris mt-10">Si recibiste una carta documento de despido, te comunicaron el cese de forma verbal o te negaron tareas en tu lugar habitual de laburo, <strong>no firmes ningún papel en disconformidad ni renuncies</strong>. Contás con el derecho de exigir una liquidación legal íntegra y de reclamar todos los rubros salariales e indemnizatorios adeudados.</p>
        </section>
    </section>

    <!-- 3. TIPOS DE DESPIDO -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Tipos de <span class="subrayado-amarillo">Despido</span> y qué te corresponde</h2>
            <p class="txt-gris mb-40 centro max-w-800 mx-auto">La legislación laboral argentina contempla diferentes modalidades de extinción laboral. Cada una genera consecuencias indemnizatorias específicas:</p>
            
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3>Despido sin justa causa (Art. 245 LCT)</h3>
                    <p>Ocurre cuando el empleador decide rescindir el contrato de trabajo de forma unilateral sin invocar una causa grave imputable al trabajador. Da derecho al cobro de la <strong>indemnización por antigüedad</strong> (un mes de sueldo por cada año de servicio o fracción mayor a tres meses), indemnización sustitutiva de preaviso con SAC, integración del mes de despido y liquidación proporcional final.</p>
                </article>
                <article class="info-bloque">
                    <h3>Despido indirecto o autodespido (Art. 246 LCT)</h3>
                    <p>Se produce cuando el empleador incurre en injurias graves que impiden continuar el vínculo laboral: falta de pago de salarios, negativa de tareas, falta de registración o registración deficiente ("en negro" o con sueldo adulterado). Tras una intimación previa por telegrama laboral no subsanada, el trabajador se considera despedido con derecho a <strong>todas las indemnizaciones del despido incausado</strong>.</p>
                </article>
            </section>

            <section class="grid-info-doble mt-20">
                <article class="info-bloque">
                    <h3>Despido con falsa causa (Art. 242 LCT)</h3>
                    <p>Frecuentemente el empleador intenta eludir el pago indemnizatorio inventando una causa disciplinaria (falsa pérdida de confianza, supuestas llegadas tarde o desobediencia). Esta causal debe ser <strong>rechazada de inmediato por telegrama laboral</strong>. Si la empresa no logra probar judicialmente la gravedad de la falta, la Justicia condena al pago de la indemnización completa.</p>
                </article>
                <article class="info-bloque">
                    <h3>Despido en período de prueba o licencia médica</h3>
                    <p>Durante el período de prueba (Art. 92 bis LCT) no corresponde indemnización por antigüedad, pero el empleador está <strong>obligado a preavisar con 15 días</strong> o pagar la sustitución equivalente. Si el despido se produce durante una licencia médica paga (Art. 213 LCT), el empleador debe abonar los salarios completos hasta la fecha del alta médica o fin del plazo legal.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 4. RUBROS DE LA LIQUIDACION FINAL -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Qué rubros integran tu <span class="subrayado-amarillo">liquidación final</span>?</h2>
            <p class="txt-gris">Al producirse la extinción de la relación laboral, la liquidación debe liquidar cada uno de los conceptos exigidos por la LCT:</p>
            
            <section class="lista-derechos mt-40">
                <article class="derecho-item">
                    <?= render_icon('file-invoice-dollar-solid-full') ?>
                    <h3>Indemnización por antigüedad</h3>
                    <p>1 mes de la mejor remuneración mensual normal y habitual por año trabajado o fracción mayor a 3 meses (Art. 245 LCT).</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('calendar-day-solid') ?>
                    <h3>Indemnización de preaviso</h3>
                    <p>15 días en período de prueba, 1 mes con antigüedad menor a 5 años y 2 meses con antigüedad mayor, más su SAC proporcional (Arts. 231 y 232 LCT).</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('clock-solid') ?>
                    <h3>Integración mes de despido</h3>
                    <p>Si el despido sin preaviso no coincide con el último día del mes, se pagan los días restantes hasta fin de mes (Art. 233 LCT).</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('dollar-sign-solid') ?>
                    <h3>Días trabajados del mes</h3>
                    <p>Salario devengado por las jornadas efectivamente trabajadas durante el mes en que ocurrió la notificación del cese.</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('scale-balanced') ?>
                    <h3>Vacaciones no gozadas</h3>
                    <p>Compensación económica por los días de descanso anual proporcionales al tiempo trabajado en el año, más su incidencia en el SAC (Art. 156 LCT).</p>
                </article>
                <article class="derecho-item">
                    <?= render_icon('sack-dollar') ?>
                    <h3>Aguinaldo proporcional (SAC)</h3>
                    <p>Parte proporcional del Sueldo Anual Complementario devengado en el semestre en curso hasta el día de la baja (Ley 23.041).</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 5. PLAZOS CLAVE -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor">
            <h2 class="titulo-seccion">Plazos legales <span class="subrayado-amarillo">obligatorios</span></h2>
            <p class="txt-gris mb-40 centro max-w-800 mx-auto">En derecho del trabajo, los plazos están regulados expresamente para proteger el sustento del trabajador:</p>
            
            <section class="grid-info-doble">
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Plazo de pago: 4 días hábiles</h3>
                    <p>Conforme a los artículos 128 y 255 bis de la LCT, el empleador tiene un plazo perentorio de <strong>4 días hábiles</strong> posteriores a la fecha de despido para depositar la totalidad de la liquidación final y entregar los certificados de trabajo del artículo 80.</p>
                </article>
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Plazo de prescripción: 2 años</h3>
                    <p>El artículo 256 de la Ley 20.744 fija un plazo de <strong>2 años</strong> desde el momento de la desvinculación para iniciar cualquier reclamo administrativo o demanda judicial por indemnizaciones o diferencias salariales impagas.</p>
                </article>
            </section>
            <section class="grid-info-doble mt-20">
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Rechazo de causa: inmediato</h3>
                    <p>Si la empresa te despide con una falsa causa o te suspende injustamente, tenés que responder y rechazar la imputación por telegrama laboral dentro de las <strong>48 a 72 horas hábiles</strong> para evitar que tu silencio se interprete como consentimiento tácito.</p>
                </article>
                <article class="info-bloque">
                    <h3><?= render_icon('clock-solid', 'txt-amarillo mr-10', '', 'var(--amarillo)') ?> Certificado de trabajo: 30 días</h3>
                    <p>Pasados 30 días corridos desde la extinción laboral sin que te entreguen el certificado de trabajo con aportes reales, podés intimar por 2 días hábiles para exigir la indemnización sancionatoria prevista en el artículo 80 de la LCT.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- 6. PASO A PASO ANTE UN DESPIDO -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">¿Qué hacer ante un despido? <span class="subrayado-amarillo">Paso a paso</span></h2>
            <p class="txt-gris mb-40">Seguí este procedimiento para resguardar tus derechos y evitar maniobras abusivas:</p>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 1: No firmes acuerdos ni renuncies</h3>
                <p class="txt-gris">Nunca firmes renuncias, convenios privados ante escribano ni recibos en blanco. El principio de irrenunciabilidad (Art. 12 LCT) prohíbe que renuncies a tus derechos. Si te exigen firmar la recepción de la carta documento en mano, firmá únicamente aclarando <em>"en disconformidad"</em> y la fecha exacta.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 2: Enviá telegrama laboral gratuito</h3>
                <p class="txt-gris">Por la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/0-4999/547/norma.htm" target="_blank" rel="noopener noreferrer">Ley N.° 23.789</a>, todos los telegramas de comunicación laboral cursados a través del Correo Oficial son <strong>100% gratuitos para el trabajador</strong>. Nuestro equipo redacta el texto exacto para rechazar la falsa causa o intimar la correcta liquidación sin costo.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 3: Calculá tu indemnización real</h3>
                <p class="txt-gris">Utilizá nuestra <a href="<?= BASE_URL ?>calculadora-despidos">calculadora de indemnización por despido</a> para contrastar lo que la empresa pretende liquidarte frente al valor legal real según tu mejor remuneración mensual normal y habitual.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h3 class="mb-10">Paso 4: Instancia de conciliación obligatoria (SECLO o Ministerio)</h3>
                <p class="txt-gris">En el ámbito de la Ciudad Autónoma de Buenos Aires rige la conciliación prejudicial obligatoria ante el <a href="https://www.argentina.gob.ar/servicio/iniciar-tramite-de-conciliacion-laboral-obligatoria-seclo" target="_blank" rel="noopener noreferrer">SECLO (Ley 24.635)</a>. En la Provincia de Buenos Aires y el interior del país intervienen las delegaciones del Ministerio de Trabajo. Esta etapa permite acordar el pago íntegro en pocas semanas sin necesidad de juicio.</p>
            </article>

            <article class="info-bloque b-none bl-8-amarillo">
                <h3 class="mb-10">Paso 5: Demanda judicial en caso de falta de acuerdo</h3>
                <p class="txt-gris">Si el empleador no se presenta o no ofrece un monto justo, se cierra la etapa conciliatoria y se interpone la demanda laboral ante los Juzgados Nacionales del Trabajo o Tribunales del Trabajo provinciales, reclamando la liquidación, intereses y multas legales.</p>
            </article>
        </section>
    </section>

    <!-- 7. RECURSO CALCULADORA -->
    <section class="seccion-recursos bg-gris py-80">
        <section class="contenedor centro">
            <h2 class="titulo-seccion">Calculá tu <span class="subrayado-amarillo">Indemnización por Despido</span></h2>
            <p class="descripcion-seccion max-w-600 mx-auto">Estimá de forma inmediata y precisa los rubros legales que te corresponden por ley según tu fecha de ingreso, despido y mejor salario.</p>
            <div class="centro mt-30">
                <a href="<?= BASE_URL ?>calculadora-despidos" class="btn btn-amarillo">
                    <?= render_icon('calculator-outline') ?> IR A LA CALCULADORA DE DESPIDOS
                </a>
            </div>
        </section>
    </section>

    <!-- 8. PREGUNTAS FRECUENTES SOBRE DESPIDOS -->
    <section class="seccion-texto">
        <section class="contenedor">
            <h2 class="titulo-seccion al-izq">Preguntas Frecuentes sobre <span class="subrayado-amarillo">Despidos Laborales</span></h2>
            <section class="max-w-900 mx-auto mt-40">
                <section class="lista-faq mt-0">
                    <details>
                        <summary><h3>¿Qué hago si me despidieron verbalmente o me negaron el ingreso al trabajo?</h3></summary>
                        <article class="respuesta">
                            <p>El despido verbal carece de validez jurídica en la Argentina, ya que la ley exige comunicación por escrito (carta documento o telegrama). Ante una negativa de tareas, debés enviar un telegrama laboral gratuito intimando al empleador a que aclare la situación laboral y te permita el ingreso bajo apercibimiento de considerarte despedido por su culpa (despido indirecto).</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Puedo cobrar indemnización si trabajaba en negro o cobraba parte del sueldo en mano?</h3></summary>
                        <article class="respuesta">
                            <p>Sí, absolutamente. La falta de registración o la registración deficiente (figurar con media jornada o con salario inferior al real) constituye un fraude laboral. Tu liquidación indemnizatoria debe calcularse sobre la totalidad de tu remuneración real y la antigüedad real efectiva.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Qué es el SECLO y cómo funciona la audiencia de conciliación?</h3></summary>
                        <article class="respuesta">
                            <p>El SECLO (Servicio de Conciliación Laboral Obligatoria) es el organismo oficial dependiente del Ministerio de Capital Humano en el que las partes deben presentarse con patrocinio letrado obligatorio antes de promover un juicio laboral en CABA. Allí un conciliador laboral homologa acuerdos de pago que tienen el mismo valor que una sentencia judicial firme.</p>
                        </article>
                    </details>
                    <details>
                        <summary><h3>¿Tengo que pagar honorarios por adelantado para iniciar mi reclamo de despido?</h3></summary>
                        <article class="respuesta">
                            <p>No. En DerechosART trabajamos con pacto de cuotalitis: no cobramos ningún gasto inicial ni adelanto. Nuestro estudio percibe sus honorarios profesionales únicamente si vos cobrás tu liquidación o indemnización laboral.</p>
                        </article>
                    </details>
                </section>
            </section>
        </section>
    </section>

    <!-- 9. CTA FINAL -->
    <section class="py-60 bg-negro-final txt-blanco">
        <section class="contenedor flex-between">
            <article>
                <h3>¿Te despidieron o tenés problemas laborales?</h3>
                <p class="txt-blanco-opaco">Analizamos tu telegrama y recibo de sueldo sin cargo. Solo cobramos si vos cobrás.</p>
            </article>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp') ?> Consulta gratuita por WhatsApp
            </a>
        </section>
    </section>
</main>
