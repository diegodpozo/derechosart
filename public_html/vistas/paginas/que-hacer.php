<?php
/**
 * VISTA: QUÉ HACER ANTE UN ACCIDENTE LABORAL
 * GUIA COMPLETA PASO A PASO PARA TRABAJADORES EN ARGENTINA
 */
?>

<main class="fade-in">
    <p class="tl-dr">Qué hacer ante un accidente laboral: guía paso a paso. Desde la primera atención médica hasta la denuncia formal a la ART, el alta y el cobro de la indemnización. Conocé los plazos, la documentación que necesitás y los errores que pueden perjudicar tu reclamo. Protegé tus derechos y asegurá tu indemnización.</p>

    <!-- HERO DE LA PAGINA -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>¿Qué hacer ante un <span class="subrayado-amarillo"><strong>Accidente Laboral?</strong></span></h1>
            <p class="subtitulo-hero">Guía paso a paso sobre cómo actuar para proteger tus derechos y asegurar tu indemnización. Lo que hagas en las primeras horas define buena parte de lo que vas a cobrar.</p>
        </section>
    </section>

    <!-- RESUMEN RAPIDO -->
    <section class="seccion-texto bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion mb-30">La regla de oro: <span class="subrayado-amarillo"><strong>actuá rápido y dejá todo por escrito</strong></span></h2>
            <p class="mb-20">Cada hora que pasa sin documentar ni denunciar hace más difícil probar que el accidente ocurrió en el trabajo y en qué condiciones. Todo lo que hagas en las <strong>primeras 72 horas</strong> impacta directamente en la atención, el reconocimiento de la contingencia y el monto final de tu indemnización.</p>
        </section>
    </section>

    <!-- GUIA PASO A PASO -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">

            <!-- ETAPA 0 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">0. Lo primero: <span class="subrayado-amarillo">tu salud</span></h2>
                <p class="mb-20">Antes de cualquier trámite, atendete. Si la lesión es grave, llamá al servicio de emergencias o andá al centro de salud más cercano. <strong>No esperes autorización de nadie para recibir atención médica urgente.</strong></p>
                <p class="mb-20">Cuando llegues al médico, dejá claro desde el primer momento que se trata de un <strong>accidente laboral</strong>. Esa distinción define qué cobertura recibís, quién paga el tratamiento y qué prestaciones te corresponden después. Si pedís atención como si fuera una dolencia común, el registro puede quedar mal clasificado y te complica todo lo posterior.</p>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Atención de urgencia:</b> Si es grave, la ART está obligada a reconocer la atención de emergencia aunque haya sido fuera de su red de prestadores.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Dejá constancia:</b> Pedí y guardá todos los certificados, informes y constancias de atención. Son la base de tu reclamo.</li>
                </ul>
            </article>

            <!-- ETAPA 1 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">1. Avisá al empleador y realizá la <span class="subrayado-amarillo">denuncia</span> a la ART</h2>
                <p class="mb-20">Es el paso central de todo el proceso. El <strong>empleador</strong> tiene la obligación legal de denunciar el accidente ante la ART, pero si no lo hace, <strong>podés hacerla vos mismo</strong>. Sin denuncia formal no hay cobertura médica, no hay prestaciones económicas ni base para el reclamo posterior.</p>
                <h3 class="mb-10">¿Cómo dejás constancia de que avisaste?</h3>
                <p class="mb-20 fs-09">La notificación verbal es válida pero difícil de probar. Siempre que puedas, dejá constancia escrita: un mensaje de WhatsApp, un correo o un SMS con hora y fecha. Esa comunicación puede ser la prueba clave de que el hecho ocurrió y se reportó a tiempo.</p>
                <h3 class="mb-10">Formas de denunciar:</h3>
                <ul class="flex-column gap-15 txt-gris fs-09 mb-20">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Por teléfono:</b> Llamá a la línea gratuita de tu ART. El número figura en la credencial que tu empleador debió entregarte.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Por mail</b> a la casilla de siniestros de tu ART.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Telegrama laboral gratuito:</b> Lo envias por Correo Argentino y tiene valor probatorio ante cualquier instancia. Es la vía más segura si tenés dudas de que la ART quiera recibir tu denuncia.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>En persona:</b> En la sede de tu ART o en un prestador médico habilitado.</li>
                </ul>
                <h3 class="mb-10">Plazos que tenés que conocer:</h3>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('clock', 'txt-amarillo mr-10') ?> <b>72 horas hábiles:</b> La ART debe brindarte atención médica en este plazo desde la denuncia.</li>
                    <li><?= render_icon('clock', 'txt-amarillo mr-10') ?> <b>10 días hábiles:</b> La ART tiene este plazo para rechazar el siniestro. Puede extenderlo otros 10 días notificándote con antelación.</li>
                    <li><?= render_icon('clock', 'txt-amarillo mr-10') ?> <b>Número de siniestro:</b> Pedilo cuando se registre la denuncia y guardalo. Es el identificador de tu caso.</li>
                    <li><?= render_icon('clock', 'txt-amarillo mr-10') ?> <b>Silencio de la ART:</b> Si no se expide en plazo, se considera aceptación tácita del siniestro.</li>
                </ul>
                <div class="info-bloque b-none bl-8-amarillo mt-30">
                    <p class="fs-09 m-0"><b>Consejo:</b> Si la ART no rechaza en término, queda obligada a brindarte las prestaciones de la ley. Pero no esperes el "silencio favorable" sentado: si te cuesta conseguir turnos o se niegan, buscá asesoramiento con constancia escrita de cada interacción.</p>
                </div>
            </article>

            <!-- ETAPA 2 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">2. Reuní y conservá toda la <span class="subrayado-amarillo">documentación</span></h2>
                <p class="mb-20">La documentación es lo que sostiene cualquier reclamo. Guardá todo en formato físico y digital (PDF con copia en la nube). Estos son los documentos que la ART va a estudiar y los que vas a necesitar si el caso escala:</p>
                <section class="grid-info-doble mt-20 gap-30">
                    <article class="bg-blanco p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Documentos desde el día del hecho</h3>
                        <ul class="flex-column gap-10 txt-gris fs-09">
                            <li>– Parte o comunicación interna del accidente (fecha, hora, lugar, descripción).</li>
                            <li>– Constancia de la denuncia ante la ART y el número de siniestro.</li>
                            <li>– Comunicaciones con tu empleador (WhatsApp, mails, telegramas).</li>
                            <li>– Denuncia policial o exposición civil si el accidente fue grave o con terceros.</li>
                        </ul>
                    </article>
                    <article class="bg-blanco p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Documentos médicos</h3>
                        <ul class="flex-column gap-10 txt-gris fs-09">
                            <li>– Historia clínica completa de la primera atención de urgencia.</li>
                            <li>– Informes de urgencias, certificados de atención y baja desde el primer día.</li>
                            <li>– Estudios por imágenes: radiografías, resonancias, ecografías, tomografías.</li>
                            <li>– Partes de confirmación, evolución y el alta cuando llegue.</li>
                        </ul>
                    </article>
                </section>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Recibos de sueldo:</b> Los últimos 12 meses + 2 SAC te sirven para calcular prestaciones e indemnizaciones.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Testigos y fotos:</b> Datos de testigos (nombre, DNI, teléfono) y fotos del lugar, de la lesión y de la maquinaria o herramienta involucrada. Son difíciles de rebatir.</li>
                </ul>
            </article>

            <!-- ETAPA 3 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">3. Durante la baja: la prestación por <span class="subrayado-amarillo">ILT</span></h2>
                <p class="mb-20">Mientras dure tu incapacidad laboral temporaria (ILT), tenés derecho a una <strong>prestación económica mensual</strong> equivalente a tu ingreso habitual. La cubre la ART (los primeros 10 días los paga el empleador), y corre desde el primer día hasta el alta médica o, como máximo, dos años desde el accidente.</p>
                <p class="mb-20 fs-09">Es un derecho que muchos trabajadores desconocen y no reclaman. No es un favor: la ART debe pagártela por ley mientras no puedas trabajar.</p>
                <div class="info-bloque b-none bl-8-amarillo mt-20">
                    <p class="fs-09 m-0"><b>Importante:</b> El monto se calcula sobre tu remuneración al momento del accidente. Si tenés componentes variables (horas extra, comisiones), se usa el promedio de los últimos 6 meses. Revisá que el pago sea correcto.</p>
                </div>
            </article>

            <!-- ETAPA 4 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">4. El momento del <span class="subrayado-amarillo">Alta Médica</span></h2>
                <p class="mb-20">El alta ocurre cuando la ART considera que terminó el tratamiento. Acá se define gran parte de tu indemnización, y es donde más errores comete el trabajador desinformado. Se presentan dos escenarios:</p>
                <section class="grid-info-doble mt-20 gap-30">
                    <article class="bg-blanco p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Si estás recuperado</h3>
                        <p class="fs-09">Volvés a trabajar y tenés derecho a iniciar el reclamo por indemnización si quedaron secuelas. La ART tiene 30 días hábiles para citarte a una revisión médica y proponerte un porcentaje de incapacidad.</p>
                    </article>
                    <article class="bg-blanco p-20 border-radius-20">
                        <h3 class="mb-10 fs-11">Si seguís con dolores</h3>
                        <p class="fs-09">Tenés 5 días hábiles para pedir la reincorporación al tratamiento. Si la ART se niega, hay que intervenir ante la SRT o la Comisión Médica. Conservá pruebas de que seguís con síntomas.</p>
                    </article>
                </section>
                <div class="info-bloque b-none bl-8-amarillo mt-30">
                    <p class="fs-09 m-0"><b>No aceptes un alta con dolor sin pelear:</b> Si la ART te da el alta y vos seguís con síntomas, no te quedes quieto. Pedí la reincorporación por escrito y, si no responde, iniciá el trámite ante la Comisión Médica. El alta prematura es uno de los reclamos más comunes y ganables.</p>
                </div>
            </article>

            <!-- ETAPA 5 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">5. El cobro de la <span class="subrayado-amarillo">Indemnización</span></h2>
                <p class="mb-20">Es el resarcimiento económico por las secuelas que te dejó el accidente. <strong>No dejes que la ART decida el monto sola.</strong> La indemnización se calcula con varios factores y es el punto donde más diferencia puede hacer un especialista.</p>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Factores del cálculo:</b> Se basa en tu porcentaje de incapacidad, edad, sueldo y las circunstancias del hecho.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Revisión Médica / Junta Médica:</b> Es fundamental ir con un <strong>médico de parte</strong> para asegurar que el porcentaje de incapacidad sea el real y no el minimizado que suele proponer la ART.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Plazos:</b> Si pasaron 31 días desde el alta y la ART no te citó, iniciamos nosotros el trámite.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Trámite de valoración:</b> Si hay desacuerdo con el porcentaje, se inicia la determinación de incapacidad ante la Comisión Médica.</li>
                </ul>
                <div class="info-bloque b-none bl-8-amarillo mt-30">
                    <p class="fs-09 m-0"><b>Antes de firmar:</b> Cualquier oferta o acuerdo de la ART (convenios de pago, aceptaciones) puede implicar resignar montos muy por debajo de lo que te corresponde. No firmes nada sin antes entender el cálculo completo. Un especialista puede hacer que el porcentaje final sea muy distinto.</p>
                </div>
            </article>

            <!-- ETAPA 6 -->
            <article class="info-bloque b-none bl-8-amarillo mb-40">
                <h2 class="mb-20">6. Si la ART <span class="subrayado-amarillo">rechaza</span> el accidente</h2>
                <p class="mb-20">El rechazo del siniestro no es el final del camino, ni mucho menos. La mayoría de los rechazos de las ART son discutibles ante la Comisión Médica, y muchos terminan revertidos cuando el trabajador llega bien preparado.</p>
                <ul class="flex-column gap-15 txt-gris fs-09">
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Guardá el documento de rechazo:</b> La carta documento o notificación es el inicio del plazo para impugnar y sin ella no podés acreditar que te negaron la cobertura.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Comisión Médica:</b> Tenés 2 años desde el rechazo para iniciar el trámite, pero no conviene esperar: las pruebas se enfrían y los testigos desaparecen.</li>
                    <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <b>Con patrocinio letrado:</b> La Ley 27.348 te garantiza patrocinio legal obligatorio en los trámites ante la Comisión Médica. No vayas solo.</li>
                </ul>
            </article>

        </section>
    </section>

    <!-- SECCION ERRORES COMUNES -->
    <section class="py-60 bg-blanco">
        <section class="contenedor">
            <h2 class="titulo-seccion mb-30">Los <span class="subrayado-amarillo"><strong>errores</strong></span> que más perjudican tu reclamo</h2>
            <section class="grid-info-doble mt-20 gap-30">
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> ESPERAR</h3>
                    <p class="fs-09">Esperar a que el empleador resuelva, esperar a ver si la ART actúa, esperar antes de asesorarse. Cada hora que pasa sin documentar ni denunciar hace más difícil probar las circunstancias del accidente.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> NO DENUNCIAR</h3>
                    <p class="fs-09">Sin denuncia formal no hay cobertura médica ni prestaciones económicas. Es el punto de partida de absolutamente todo lo que viene después.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> NO CONFÍES EN CUALQUIERA</h3>
                    <p class="fs-09">Si te llaman "abogados" que consiguieron tu número sin que se lo dieras, son caranchos. Buscan bajarte el porcentaje de incapacidad para cerrar acuerdos rápidos que los benefician a ellos y no a vos.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> IR SOLO A LA JUNTA MÉDICA</h3>
                    <p class="fs-09">Sin un médico legista de tu lado, estás en desventaja frente a la ART, que siempre buscará minimizar tus lesiones para pagar menos.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> FIRMAR SIN LEER</h3>
                    <p class="fs-09">Firmar un acuerdo o una aceptación de la ART sin entenderlo puede implicar resignar montos muy por debajo de lo que te corresponde.</p>
                </article>
                <article class="info-bloque">
                    <h3 class="txt-amarillo"><?= render_icon('triangle-exclamation', 'mr-10') ?> PERDER DOCUMENTACIÓN</h3>
                    <p class="fs-09">Perder estudios, certificados o el número de siniestro debilita cualquier posición legal. Guardá todo desde el día cero.</p>
                </article>
            </section>
        </section>
    </section>

    <!-- SECCION MÉDICO DE PARTE / AYUDA -->
    <section class="py-60 bg-gris">
        <section class="contenedor">
            <h2 class="titulo-seccion mb-30">¿Necesitás ayuda con tu <span class="subrayado-amarillo"><strong>reclamo a la ART?</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris mb-30">No tenés que recorrer este proceso solo. Analizamos tu caso, revisamos tu porcentaje de incapacidad y te acompañamos en cada etapa, desde la denuncia hasta el cobro.</p>
            <article class="info-bloque b-none bl-8-amarillo">
                <h3 class="mb-10"><?= render_icon('stethoscope-solid', 'mr-10') ?> MÉDICO DE PARTE</h3>
                <p class="fs-09 m-0">Nunca vayas solo a una junta médica. Sin un médico legista de tu lado, estás en desventaja frente a la ART, que siempre buscará minimizar tus lesiones para pagar menos. Nosotros coordinamos ese acompañamiento.</p>
            </article>
        </section>
    </section>

    <!-- CTA FINAL -->
    <section class="py-60 bg-blanco centro">
        <section class="contenedor">
            <h2 class="mb-20">¿Sufriste un accidente y <span class="subrayado-amarillo"><strong>tenés dudas?</strong></span></h2>
            <p class="max-w-600 mx-auto txt-gris mb-30">Analizamos tu caso sin costo. No firmes nada con la ART sin antes hablar con especialistas que defiendan tus intereses.</p>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp', '', 'transform: scale(2.0);') ?> CONSULTANOS GRATIS POR WHATSAPP
            </a>
        </section>
    </section>
</main>
