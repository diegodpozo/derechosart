<?php
/**
 * VISTA: TELEGRAMA LABORAL Y COMUNICACIONES POR ACCIDENTE O DESPIDO (ARTICULO DE BLOG)
 * ESTRUCTURA CANONICA DE BLOG SEGUN AGENTS.MD
 * CLONA LA ESTRUCTURA DE blog-que-cubre-la-art.php (SIN CSS EMBEBIDO)
 * USA SOLO CLASES DEL CSS DEL SITIO (estilos.css), render_icon(),
 * COMPONENTE cta-whatsapp.php Y COMPONENTE bloque-autor.php
 */

$FuentesNormativasBlog = 'Ley 23.789 (Telegrama Gratuito), Ley 20.744 de Contrato de Trabajo (arts. 10, 80, 240, 242, 243, 245, 246), Ley 24.557 de Riesgos del Trabajo y resoluciones de la SRT.';
?>

<main class="blog-container fade-in" data-scrollspy-blog>
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Telegrama laboral: cuándo comunicarte</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Telegrama laboral: cuándo comunicarte por un accidente o despido</h1>

                <p class="articulo-lead">El telegrama laboral puede servir para dejar constancia de una comunicación, pero no existe un texto único para todos los conflictos. Te explicamos cuándo puede ser relevante comunicarte antes de un despido, qué hacer durante una licencia, cómo actuar si no te reincorporan o te acusan de abandono y por qué conviene revisar cada paso con asesoramiento.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 9 min</span>
                    <button class="articulo-print" type="button" data-print-page><?= render_icon('bookmark-solid', 'mr-5') ?> Imprimir esta guía</button>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <div class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#que-es-telegrama" class="active"><span class="nav-num">1</span> ¿Qué es el telegrama obrero?</a></li>
                                <li id="preg-2"><a href="#cuando-mandarlo"><span class="nav-num">2</span> ¿Cuándo corresponde mandarlo?</a></li>
                                <li id="preg-3"><a href="#modelos-accidente"><span class="nav-num">3</span> Accidente laboral y constancias</a></li>
                                <li id="preg-4"><a href="#modelos-despido"><span class="nav-num">4</span> Despido, licencia y reincorporación</a></li>
                                <li id="preg-5"><a href="#como-enviarlo"><span class="nav-num">5</span> Acusación de abandono</a></li>
                                <li id="preg-6"><a href="#errores-fatales"><span class="nav-num">6</span> Riesgos al comunicarte</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés que mandar un telegrama?";
                    $descripcion = "Revisamos tu caso antes de enviar el telegrama. Evitá errores fatales. Respondemos en el día.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
                    <span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.
                </p>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <!-- SECCION 1 -->
                <div id="que-es-telegrama" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Qué es el telegrama obrero y por qué es 100% gratuito?</a></h2>
                    
                    <p>El telegrama laboral es una comunicación postal formal regulada por la <strong>Ley 23.789</strong> que garantiza a todo trabajador dependiente y jubilado el derecho a despachar notificaciones legales en forma <strong>totalmente gratuita</strong> a través del Correo Argentino. Su costo está exento de franqueo e impuestos para asegurar el acceso a la justicia y la defensa de derechos.</p>

                    <p>Es un medio formal para dejar constancia de una comunicación laboral. La recepción, el domicilio usado, el contenido y las circunstancias de entrega pueden ser relevantes; una constancia de envío o un intento de entrega no resuelve por sí solo todos los efectos jurídicos del caso. Los correos, mensajes y otros registros tampoco tienen un valor probatorio automáticamente nulo: su alcance se analiza junto con el resto de la prueba.</p>

                    <p>La Ley 23.789 establece la gratuidad del telegrama laboral en los supuestos previstos por la norma. Antes de usarlo para un reclamo ante la ART u otro organismo, verificá que sea el canal adecuado para ese trámite. No toda comunicación requiere telegrama ni existe un texto único aplicable a todos los conflictos.</p>

                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Tipo de comunicación</div>
                            <div>Quién la envía</div>
                            <div>Costo</div>
                            <div>Efecto legal</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Telegrama Laboral (Ley 23.789)</strong></div>
                            <div>Trabajador / Jubilado</div>
                            <div><strong>Gratuito (0 pesos)</strong></div>
                            <div>Puede servir como constancia; su alcance depende de la comunicación y la entrega</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Carta Documento</strong></div>
                            <div>Empleador / Empresa / ART</div>
                            <div>Arancel postal oficial</div>
                            <div>Puede servir como constancia; su alcance depende de la comunicación y la entrega</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>WhatsApp / Email / Verbal</strong></div>
                            <div>Cualquiera de las partes</div>
                            <div>Gratis / Costo corriente</div>
                            <div>Su valor se analiza junto con el resto de la prueba</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="cuando-mandarlo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Cuándo corresponde mandar un telegrama (y cuándo conviene esperar)?</a></h2>
                    
                    <p>Una comunicación fehaciente puede ser útil para dejar constancia de un problema laboral —por ejemplo, una negativa de tareas, salarios impagos o una dificultad para denunciar un accidente—, incluso antes de que exista un despido. La necesidad, el momento y el canal dependen del objetivo y de los hechos. No hay que esperar al despido para pedir orientación, pero tampoco conviene enviar una intimación sin analizar sus efectos.</p>

                    <p>Las comunicaciones pueden integrar la prueba del conflicto, pero no determinan por sí solas todos los derechos ni reemplazan la documentación médica, laboral o administrativa. Si todavía estás trabajando y detectás un problema, consultar a tiempo puede ayudar a definir si conviene dejar constancia formal antes de que la relación se interrumpa.</p>

                    <ul class="lista-items-blog flex-column gap-15 mt-20">
                        <li><strong>Ante una negativa de tareas o una comunicación verbal sobre el vínculo:</strong> dejá constancia de lo ocurrido y buscá asesoramiento para determinar el estado de la relación y la respuesta adecuada.</li>
                        <li><strong>Si no se denuncia un accidente a la ART:</strong> la persona trabajadora puede efectuar la denuncia por los canales habilitados; guardá el número de siniestro y los comprobantes, y verificá con la SRT qué vía corresponde.</li>
                        <li><strong>Ante salarios impagos o diferencias:</strong> reuní recibos, registros y comunicaciones antes de definir una intimación o cualquier otra medida.</li>
                        <li><strong>Si recibís una comunicación de despido o una imputación de faltas:</strong> conservá el documento completo y consultá enseguida. La respuesta debe guardar relación con la causal y los hechos comunicados.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Cuándo no conviene actuar apurado:</span> no presentes una renuncia, no te consideres despedido ni dejes de concurrir al trabajo sin comprender las consecuencias. La calificación depende de los hechos y las comunicaciones; una abogada laboralista puede revisar el caso antes de que tomes una decisión difícil de revertir.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="modelos-accidente" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Si sufriste un accidente laboral y necesitás dejar constancia</a></h2>
                    <p>Si la empresa no denuncia el accidente, podés informar el hecho directamente a la ART por los canales habilitados. Conservá el número de siniestro y los registros de la atención. Si la ART rechaza la contingencia o no responde, pedí asesoramiento sobre el trámite que corresponda ante la SRT; los requisitos y plazos dependen del procedimiento vigente y de la jurisdicción.</p>
                    <p>Una comunicación formal al empleador puede ser pertinente si necesitás dejar asentado que ocurrió un accidente, que no se hizo la denuncia o que hay una situación laboral que requiere respuesta. <strong>No es un requisito universal para todos los reclamos</strong>, y el momento y el contenido deben definirse con asesoramiento para no perjudicar otros derechos.</p>
                    <p>No se incluye un modelo de telegrama ni un texto para copiar. Para ampliar, consultá nuestra guía sobre <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral"><strong>qué hacer si la ART rechaza el accidente laboral</strong></a> y la explicación de la <a href="<?= BASE_URL ?>blog/incapacidad-laboral-temporaria-ilt"><strong>ILT</strong></a>.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="modelos-despido" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Despido durante una licencia y vuelta al trabajo</a></h2>
                    <p>Si recibís una comunicación de despido mientras estás de licencia, conservá el documento y revisá la causa, la fecha y el régimen que cubre la ausencia. El artículo 213 de la LCT regula el despido durante licencias pagas por accidentes o enfermedades <strong>inculpables</strong>; no debe extrapolarse automáticamente a una ILT por contingencia laboral cubierta por la ART. Consultá la guía sobre <a href="<?= BASE_URL ?>blog/despido-con-licencia-por-accidente-de-trabajo"><strong>despido con licencia por accidente</strong></a> para distinguir los supuestos.</p>
                    <p>Si el alta indica que podés volver y la empresa no te reincorpora o no aclara qué tareas realizarás, guardá el alta, las restricciones médicas y las comunicaciones. El análisis de tareas compatibles y de las consecuencias previstas por la LCT depende del encuadre; revisá también nuestra guía sobre <a href="<?= BASE_URL ?>blog/alta-medica-vuelta-al-trabajo-empleador-no-reincorpora"><strong>alta médica y falta de reincorporación</strong></a>.</p>
                    <p>La orientación profesional es especialmente importante antes de enviar una intimación, considerar extinguido el vínculo o aceptar un acuerdo. No se ofrece aquí ningún texto para copiar.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="como-enviarlo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Si tu empleador te acusa de abandono del trabajo</a></h2>
                    <p>Una ausencia no debe analizarse aislada de su causa, las comunicaciones y la situación médica. El artículo 244 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/texact.htm" target="_blank" rel="noopener">LCT vigente</a> establece que el abandono como incumplimiento requiere una constitución previa en mora mediante intimación fehaciente a reintegrarse, por el plazo que impongan las modalidades del caso.</p>
                    <p>Si recibís una intimación de ese tipo, no la ignores: registrá la fecha de recepción, revisá si estabas de licencia o tenías restricciones médicas, reuní los certificados y constancias de aviso, y pedí asesoramiento para responder. No existe una respuesta única que sirva para todos los conflictos y no conviene dejar de concurrir sin aclarar la situación.</p>
                    <p>Si te impiden volver o te comunican un despido, conservá la notificación y la prueba de lo ocurrido. El efecto de una comunicación depende de su contenido, de cuándo llegó y de las circunstancias del vínculo. La consulta temprana permite evaluar la respuesta sin recurrir a frases genéricas.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="errores-fatales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Errores y riesgos al comunicarte en un conflicto laboral</a></h2>
                    <p>Una comunicación puede tener consecuencias importantes, pero no hay una fórmula única. Evitá tomar decisiones irreversibles o aplicar plazos genéricos sin analizar los hechos, el régimen y la notificación recibida.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error habitual</div>
                            <div>Riesgo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Usar una fórmula genérica o no consultar</strong></div>
                            <div>Puede no reflejar los hechos, el canal adecuado ni el objetivo jurídico de la comunicación.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Renunciar o considerarte despedido por impulso</strong></div>
                            <div>La decisión puede afectar el vínculo y los reclamos disponibles; su validez y efectos dependen de las circunstancias.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Aplicar un plazo fijo para cualquier intimación</strong></div>
                            <div>No hay un plazo general de 48 horas que resuelva todas las obligaciones laborales; verificá la norma y el caso.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No atender una intimación por abandono</strong></div>
                            <div>El artículo 244 LCT requiere intimación fehaciente previa y un plazo acorde al caso, pero hay que contestar y acreditar la situación sin demoras.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No conservar las constancias</strong></div>
                            <div>Perdés elementos que pueden servir para acreditar el envío, la recepción, el estado de salud o lo sucedido en el lugar de trabajo.</div>
                        </div>
                    </div>

                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'icono-chico mr-10') ?> <span class="subrayado-amarillo">INSTAGRAM</span> — El riesgo de enviar un telegrama sin asesoramiento</h4>
                        <p class="mb-20 fs-09 txt-gris-medio italic">En esta publicación de DerechosART advertimos que una redacción incorrecta puede perjudicar un reclamo. El efecto depende del contenido, los hechos y el contexto: no hay un texto único que sirva para todos los casos.</p>
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DesGlKnFfzp/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;">
                                    <a href="https://www.instagram.com/p/DesGlKnFfzp/" target="_blank" rel="noopener noreferrer">Ver esta publicación de DerechosART en Instagram</a>
                                </blockquote>
                            </div>
                        </div>
                        <script async src="https://www.instagram.com/embed.js"></script>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><strong>Antes de comunicar:</strong> pedí que una abogada revise el documento recibido, los antecedentes y el objetivo de la respuesta. Esta guía no ofrece telegramas, plantillas ni textos listos para enviar.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes sobre el telegrama laboral</a></h2>
                    
                    <p>Estas respuestas son conceptuales: no contienen modelos ni textos listos para enviar. El paso adecuado depende de los hechos y de la documentación disponible.</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Conviene dejar constancia antes de que me despidan?</summary>
                            <p class="mt-15 fs-09">Puede ser útil si existe un problema que necesitás documentar, pero no es un requisito universal ni toda situación requiere el mismo canal. Consultá antes de enviar una intimación para definir el objetivo, el destinatario y sus efectos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué hago si me despiden durante una licencia médica?</summary>
                            <p class="mt-15 fs-09">Guardá la notificación y comprobantes de la licencia. El artículo 213 de la LCT regula licencias por accidentes o enfermedades inculpables; no se aplica automáticamente a una ILT por contingencia laboral. Revisá el régimen con asesoramiento y consultá la guía sobre <a href="<?= BASE_URL ?>blog/despido-con-licencia-por-accidente-de-trabajo">despido con licencia por accidente</a>.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si el empleador no me reincorpora tras el alta?</summary>
                            <p class="mt-15 fs-09">Conservá el alta, las restricciones médicas y los registros de tus comunicaciones. La asignación de tareas compatibles y las consecuencias de una negativa dependen del régimen aplicable; el artículo 212 de la LCT no genera automáticamente una indemnización para toda contingencia laboral. Consultá la guía sobre <a href="<?= BASE_URL ?>blog/alta-medica-vuelta-al-trabajo-empleador-no-reincorpora">reincorporación tras el alta</a>.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuándo se considera abandono del trabajo?</summary>
                            <p class="mt-15 fs-09">El artículo 244 de la LCT exige una intimación fehaciente previa para reintegrarse y un plazo acorde a las modalidades del caso. Si recibís una intimación, revisá la fecha, la licencia o restricciones vigentes y la prueba de tus avisos; no ignores la notificación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART tiene un plazo único de 10 días más otros 10 para responder?</summary>
                            <p class="mt-15 fs-09">No afirmamos ese plazo como regla general sin identificar el trámite y verificar la normativa actual. El silencio o la demora no equivalen automáticamente a aceptar el siniestro. Revisá el procedimiento vigente en la <a href="https://www.argentina.gob.ar/srt/comisionesmedicas/tramites" target="_blank" rel="noopener">SRT</a> y consultá cuál es la vía aplicable.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Necesito asesoramiento antes de enviar una comunicación?</summary>
                            <p class="mt-15 fs-09">Es recomendable que una abogada revise el documento recibido, los hechos y la respuesta que querés dar. Además, ante las Comisiones Médicas el patrocinio letrado es obligatorio conforme a la Ley 27.348; sus honorarios y gastos se rigen por esa norma y sus excepciones.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Necesitás revisar una comunicación laboral?";
                            $descripcion = "Consultá con una abogada laboralista antes de tomar una decisión sobre tu caso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <div class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                    <span><span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.</span>
                    <span class="italic"><span style="font-size: 2em;">⚖️</span> DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                </div>

            </section>
        </article>

        <?php include __DIR__ . '/../componentes/bloque-autor.php'; ?>

    </div>
</main>
