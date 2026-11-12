<?php
/**
 * VISTA: ACCIDENTE IN ITINERE: COMO DENUNCIARLO PASO A PASO Y QUE CUBRE LA ART (ARTICULO DE BLOG)
 * CLONA LA ESTRUCTURA DE blog-incapacidad-laboral-temporaria-ilt.php (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css), render_icon(),
 * el componente cta-whatsapp.php y el componente bloque-autor.php.
 */

// FUENTES NORMATIVAS DEL BLOQUE DE AUTORIA (SE CONSUME AL FINAL DE LA VISTA)
$FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo), artículo 6; Ley 27.348; Ley 26.773, artículo 3; Decreto 1278/2000 y normativa de la SRT.';
?>

<main class="blog-container fade-in" data-scrollspy-blog>
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Accidente in itinere</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Accidente in itinere: cómo denunciarlo paso a paso y qué cubre la ART</h1>

                <p class="articulo-lead">Si te accidentaste yendo o volviendo del trabajo, ese hecho se considera un accidente laboral: es el <strong>accidente in itinere</strong>. Te explicamos qué cubre la ART, cómo denunciar un accidente in itinere paso a paso, cuánto tiempo tenés para hacerlo y cómo probar que ocurrió en el trayecto. La clave está en no perder tiempo ni constancias.</p>

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
                                <li id="preg-1"><a href="#que-es" class="active"><span class="nav-num">1</span> ¿Qué es y qué cubre?</a></li>
                                <li id="preg-2"><a href="#requisitos-trayecto"><span class="nav-num">2</span> Los requisitos del trayecto</a></li>
                                <li id="preg-3"><a href="#como-denunciar"><span class="nav-num">3</span> Cómo denunciarlo paso a paso</a></li>
                                <li id="preg-4"><a href="#plazos"><span class="nav-num">4</span> Los plazos clave</a></li>
                                <li id="preg-5"><a href="#probar-trayecto"><span class="nav-num">5</span> Cómo probar el trayecto</a></li>
                                <li id="preg-6"><a href="#no-corresponde"><span class="nav-num">6</span> Qué NO te corresponde</a></li>
                                <li id="preg-7"><a href="#si-art-rechaza"><span class="nav-num">7</span> Si la ART te rechaza</a></li>
                                <li id="preg-8"><a href="#tercero-responsable"><span class="nav-num">8</span> Si intervino un tercero</a></li>
                                <li id="preg-9"><a href="#preguntas-frecuentes"><span class="nav-num">9</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te rechazaron un accidente in itinere?";
                    $descripcion = "Revisamos tu caso y te guiamos con la denuncia. Respondemos en el día.";
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
                <div id="que-es" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Qué es un accidente in itinere y qué cubre la ART?</a></h2>
                    <p>El <strong>accidente in itinere</strong> es el que sufrís en el <strong>trayecto entre tu domicilio y el lugar de trabajo</strong> (y viceversa). La ley lo trata como un accidente de trabajo: la <strong>ART te tiene que cubrir</strong> igual que si te hubieras lesionado dentro del establecimiento.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📜</div>
                        <p class="m-0 fs-09 italic">Así lo define la ley (artículo 6 de la Ley 24.557): hay accidente de trabajo cuando el hecho ocurre <strong>&ldquo;en el trayecto entre el domicilio del trabajador y el lugar de trabajo, siempre y cuando el damnificado no hubiere interrumpido o alterado dicho trayecto por causas ajenas al trabajo&rdquo;</strong>.</p>
                    </div>

                    <p class="mt-30">Si el hecho encuadra como in itinere, la ART responde con las mismas prestaciones que en cualquier accidente laboral:</p>

                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Qué te cubre</div>
                            <div>En qué consiste</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Prestaciones médicas</strong></div>
                            <div>Atención, estudios, medicamentos, rehabilitación y traslados, desde el primer momento y sin límite.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Prestación dineraria por la baja</strong></div>
                            <div>Mientras no podés trabajar te corresponde la Incapacidad Laboral Temporaria (ILT): el 100% de tu ingreso base. Los primeros 10 días los paga el empleador y desde el día 11 la ART.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por incapacidad</strong></div>
                            <div>Si del accidente te queda una incapacidad permanente, se determina el porcentaje y se paga la indemnización correspondiente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Prestaciones por fallecimiento</strong></div>
                            <div>Si el accidente causa la muerte, tus derechohabientes cobran las prestaciones que fija la ley.</div>
                        </div>
                    </div>

                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'icono-chico mr-10') ?> <span class="subrayado-amarillo">CASO REAL RELACIONADO</span> — Accidente camino al tren</h4>
                        <p class="mb-20 fs-09 txt-gris-medio italic">En este reel de DerechosART contamos el caso de una persona que se accidentó corriendo para tomar el tren y cobró $9 millones. Es un resultado particular: el monto depende de las circunstancias y los datos de cada reclamo.</p>
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Db4B7cHoO4Q/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;">
                                    <a href="https://www.instagram.com/reel/Db4B7cHoO4Q/" target="_blank" rel="noopener noreferrer">Ver este reel de DerechosART en Instagram</a>
                                </blockquote>
                            </div>
                        </div>
                        <script async src="https://www.instagram.com/embed.js"></script>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo:</span> no todo accidente &ldquo;en la calle&rdquo; es in itinere. Si tu trabajo se desarrolla en la vía pública, o si te trasladás de un puesto de trabajo a otro durante la jornada, la ART no lo trata como in itinere. Tiene que ser el trayecto de tu casa al trabajo o del trabajo a tu casa.</p>
                    </div>

                    <p class="mt-30 fs-09"><a href="<?= BASE_URL ?>preguntas-frecuentes/accidente-in-itinere" style="color:inherit;text-decoration:none;"><strong>Ampliá todas las consultas sobre accidentes in itinere</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="requisitos-trayecto" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Los requisitos del trayecto (y cuándo se pierde la cobertura)</a></h2>
                    <p>Para que la ART reconozca un in itinere se analizan tres cosas: que el hecho haya ocurrido <strong>en el trayecto habitual</strong>, que no hayas <strong>interrumpido o alterado</strong> ese trayecto por causas ajenas al trabajo, y que exista una <strong>relación causal</strong> entre el traslado y la lesión. El trayecto es la <strong>ruta usual y habitual</strong> entre tu domicilio declarado y el trabajo.</p>
                    <p>La normativa <strong>no fija un tiempo máximo</strong> de viaje, pero sí importa la razonabilidad: la SRT evalúa la relación entre la distancia y el medio de transporte que usaste.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>Qué dice la normativa</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Trayecto directo entre tu casa y el trabajo</strong></div>
                            <div>Cubierto. Es el caso típico del in itinere (artículo 6 de la Ley 24.557).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Te desviás por estudio, otro empleo o para atender a un familiar directo enfermo que no vive con vos</strong></div>
                            <div>Cubierto <strong>si lo declarás por escrito a tu empleador</strong> y éste lo informa a la ART <strong>dentro de las 72 horas</strong>. A pedido del empleador tenés que presentar el certificado del desvío dentro de los 3 días hábiles.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Interrumpís o alterás el trayecto por causas ajenas al trabajo</strong></div>
                            <div>Puede quedar fuera de cobertura: es la llamada &ldquo;interrupción del trayecto&rdquo;. Cuanto más se aparte de la ruta habitual y sin justificación, más difícil se vuelve sostener el in itinere.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Te trasladás entre dos empleos</strong></div>
                            <div>Responde la ART del empleo hacia el cual te estabas dirigiendo al momento del siniestro (criterio de la SRT).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Tu trabajo se desarrolla en la vía pública</strong></div>
                            <div>No es in itinere: la ley solo cubre el trayecto de tu casa al trabajo (y vuelta), no el traslado dentro de la jornada.</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Dato práctico:</span> el domicilio habitual de residencia es el que declaraste (y que la ART tiene registrado). Si te mudás, conviene actualizarlo: un trayecto desde otra dirección puede discutirse.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-denunciar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo denunciar un accidente in itinere paso a paso</a></h2>
                    <p>En el in itinere la denuncia es todo: la ART suele discutir si el hecho realmente ocurrió en el traslado. Por eso conviene hacerlo <strong>rápido, por escrito y quedándote con constancias</strong>. El recorrido es este:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li><strong>1. Avisá de inmediato a tu empleador.</strong> Comunicá por escrito (mensaje, mail o telegrama) qué pasó, dónde y cuándo, y que estabas yendo o volviendo del trabajo.</li>
                            <li><strong>2. Atendete sin demora.</strong> Si es una urgencia, andá al hospital o a la guardia más cercana. Que quede registrado el día y la hora de la atención es clave para probar el nexo con el traslado.</li>
                            <li><strong>3. Denunciá ante la ART y pedí tu número de siniestro.</strong> Podés hacerlo por la línea gratuita de la ART, por <strong>telegrama laboral gratuito</strong>, por nota en su sede o en un prestador médico habilitado. Anotá el número de siniestro: es tu comprobante.</li>
                            <li><strong>4. Si tu empleador no denuncia, denunciá vos.</strong> Tenés derecho a hacer la denuncia directa ante la ART. Cualquier testigo que haya tomado conocimiento del hecho también puede denunciarlo.</li>
                            <li><strong>5. Guardá toda la prueba.</strong> Constancia de la denuncia, denuncia policial si hubo un siniestro vial, fotos del lugar, datos de testigos, tickets de transporte y toda la documentación médica.</li>
                            <li><strong>6. Seguí los controles de la ART.</strong> No falces a las citaciones: faltar se usa en tu contra. Si no estás de acuerdo con el diagnóstico, discutílo por los canales formales, no dejando de ir.</li>
                        </ul>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Si denunciás vos:</span> hacelo siempre de forma fehaciente y quedate con la constancia. El <strong>telegrama laboral es gratuito</strong> y sirve para dejar registrado que avisaste y cuándo. Si la ART no te recibe la denuncia, esa constancia te respalda.</p>
                    </div>

                    <p class="mt-30 fs-09">¿No tenés a mano el nombre de tu ART o querés confirmarla antes de denunciar? Podés consultarla en <a href="<?= BASE_URL ?>cual-es-mi-art" style="color:inherit;text-decoration:none;"><strong>¿cuál es mi ART?</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="plazos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Plazos que hay que verificar según el trámite</a></h2>
                    <p>No todos los plazos del sistema corren desde el mismo momento ni aplican a cualquier reclamo. Denunciá cuanto antes y verificá la regla vigente para tu trámite y jurisdicción.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Plazo</div>
                            <div>Qué significa</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Atención y denuncia</strong></div>
                            <div>Avisá el accidente cuanto antes por los canales habilitados y conservá la constancia. La atención y los pasos posteriores dependen del caso y del procedimiento vigente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Respuesta o rechazo de la ART</strong></div>
                            <div>No apliques como regla general un plazo de 10 días más otros 10 sin verificar que corresponda a la contingencia y al procedimiento actual. Pedí la decisión por escrito y consultá la normativa vigente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Silencio o falta de atención</strong></div>
                            <div>La SRT prevé trámites específicos, pero el inicio y los requisitos dependen del procedimiento aplicable. No asumas un día de inicio sin verificarlo.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Cambio autorizado del trayecto</strong></div>
                            <div>La Ley 24.557 contempla supuestos de modificación del recorrido; si aplica uno, conservá la declaración y verificá con el empleador qué comunicación exige la norma.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Prescripción de prestaciones LRT</strong></div>
                            <div>El artículo 44, apartado 1, de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a> establece dos años desde que la prestación debió abonarse o prestarse y, en todo caso, desde el cese de la relación laboral. El cómputo concreto depende del reclamo.</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">⏳</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Recordá:</span> un plazo para que la ART responda no es lo mismo que el plazo de prescripción de una prestación ni que el término para iniciar un trámite ante la SRT. Revisá las notificaciones y consultá sin demora.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="probar-trayecto" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Cómo probar que fue un accidente in itinere</a></h2>
                    <p>En el in itinere la discusión casi siempre gira en torno a dos preguntas: <strong>¿ocurrió en el trayecto?</strong> y <strong>¿fue en el trayecto habitual y sin interrupciones?</strong>. Cuanto mejor sea tu prueba, más difícil le queda a la ART rechazarlo. Estas son las pruebas que suman:</p>

                    <ul class="lista-items-blog flex-column gap-15 mt-20">
                        <li><strong>Denuncia policial o acta del siniestro:</strong> si hubo un choque o un hecho en la vía pública, la intervención policial deja asentado dónde y cuándo ocurrió.</li>
                        <li><strong>Constancia de la denuncia a la ART:</strong> conservá el número de siniestro y los comprobantes del canal que utilizaste.</li>
                        <li><strong>Atención médica inmediata:</strong> la historia clínica del día del hecho conecta la lesión con el accidente.</li>
                        <li><strong>Comprobantes de transporte:</strong> tickets, SUBE, registros de tu tarjeta o de la app de viajes ayudan a ubicar el horario y la zona.</li>
                        <li><strong>Registros del celular:</strong> ubicación, mensajes o llamadas a esa hora refuerzan el trayecto.</li>
                        <li><strong>Testigos:</strong> compañeros, familiares o cualquier persona que vio el hecho o que sabe que te dirigías al trabajo.</li>
                        <li><strong>Fotos del lugar y del vehículo:</strong> si podés, sacá fotos en el momento.</li>
                        <li><strong>Declaración del domicilio habitual y del desvío:</strong> el domicilio que declaraste y, si corresponde, la declaración por escrito del desvío permitido.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El error más común:</span> no avisar a nadie en el momento y no guardar constancias. Si al hecho lo descubren semanas después &mdash;por una lesión que apareció después o porque no denunciaste&mdash;, probar que ocurrió en el trayecto se vuelve mucho más difícil.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="no-corresponde" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué NO te corresponde en un in itinere</a></h2>
                    <p>Hay un punto que casi nadie aclara y conviene saberlo de entrada: en los accidentes <strong>in itinere</strong> no corresponde el <strong>adicional de pago único del 20%</strong> que sí se paga en los accidentes ocurridos <em>en el lugar de trabajo</em> (artículo 3 de la Ley 26.773).</p>
                    <p>La Corte Suprema de Justicia de la Nación interpretó que ese adicional está pensado para los daños sufridos en el establecimiento o mientras estás a disposición del empleador, y <strong>no alcanza a los accidentes in itinere</strong>. La Suprema Corte de la Provincia de Buenos Aires siguió el mismo criterio.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Que no te confundan:</span> que no vaya ese 20% adicional <strong>no significa que no tengas derecho a nada</strong>. En un in itinere sí cobrás las prestaciones médicas, la ILT mientras estás de baja y la <strong>indemnización por incapacidad</strong> que corresponda. Lo que no entra es ese adicional específico.</p>
                    </div>

                    <p class="mt-30 fs-09">Podés estimar qué puede valer tu caso según el porcentaje de incapacidad con la <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;"><strong>calculadora de accidentes</strong></a> y ver los porcentajes en la <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;"><strong>tabla de incapacidad</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="si-art-rechaza" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Qué hacer si la ART rechaza el accidente in itinere</a></h2>
                    <p>El rechazo es frecuente en el in itinere: la ART suele alegar que el trayecto se interrumpió o que no fue el habitual. Si te rechaza la denuncia, <strong>no quedás sin herramientas</strong>: podés discutirlo ante la <strong>Comisión Médica</strong>.</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li><strong>Pedí el rechazo por escrito.</strong> Necesitás el documento donde la ART (o el empleador no asegurado) rechaza la denuncia: es lo que da inicio al trámite.</li>
                            <li><strong>Iniciá el trámite por rechazo.</strong> Se presenta en la Comisión Médica que corresponde a tu domicilio o al lugar donde trabajás, con la denuncia del accidente, el rechazo y tu DNI.</li>
                            <li><strong>Si la ART no responde o no brinda atención</strong>, consultá el trámite vigente de silencio ante la SRT. El inicio y la documentación pueden depender del procedimiento aplicable y de la jurisdicción.</li>
                            <li><strong>No firmes nada que no entiendas.</strong> Si te ofrecen un pago o un acuerdo, consultalo antes. Muchos acuerdos en in itinere terminan reconociendo menos de lo que corresponde.</li>
                        </ul>
                    </div>

                    <p class="mt-30">El procedimiento completo está explicado en <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;">qué hacer si la ART te rechaza el accidente</a> y en la guía de <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisiones Médicas</a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="tercero-responsable" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Si el accidente fue causado por un tercero</a></h2>
                    <p>En un choque durante el trayecto, por ejemplo, puede haber una persona distinta de tu empleador o de la ART a quien atribuirle responsabilidad. El artículo 39, apartado 4, de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a> contempla el reclamo contra el tercero responsable conforme a las normas civiles, con consideración de las prestaciones de la ART.</p>
                    <p>Eso <strong>no significa que se puedan acumular sin límite dos reparaciones completas</strong>. El artículo 4 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/200000-204999/203798/norma.htm" target="_blank" rel="noopener">Ley 26.773</a> regula una opción excluyente entre el sistema de riesgos del trabajo y otros sistemas de responsabilidad; el artículo 5 aclara que recibir prestaciones en especie o pagos por incapacidad laboral temporaria no implica, por sí solo, haber elegido la vía civil. La secuencia, los créditos y la notificación exigible deben revisarse antes de iniciar una acción.</p>
                    <p>Guardá los datos del vehículo y de su conductor, la denuncia policial, constancias médicas y cualquier registro del recorrido. No demores la consulta: hay que coordinar el reclamo ante la ART con el análisis de una eventual acción contra el responsable y su aseguradora.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 9 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-9"><span class="num-sec">9</span> Preguntas frecuentes sobre el accidente in itinere</a></h2>
                    <p>Las dudas que más nos llegan sobre el trayecto:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué cubre la ART en un accidente in itinere?</summary>
                            <p class="mt-15 fs-09">Las mismas prestaciones que en cualquier accidente laboral: atención médica, estudios, medicamentos, rehabilitación y traslados; la prestación dineraria por la baja (ILT, el 100% de tu ingreso base); la indemnización si queda una incapacidad permanente; y las prestaciones por fallecimiento si correspondieran.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo tengo para denunciar un accidente in itinere?</summary>
                            <p class="mt-15 fs-09">Denuncialo <strong>de inmediato</strong>: avisale a tu empleador y a la ART cuanto antes y quedate con la constancia. Para las prestaciones de la LRT, el artículo 44 establece dos años desde que la prestación debió abonarse o prestarse y, en todo caso, desde el cese de la relación laboral. El cómputo y los plazos de otros trámites requieren revisar el reclamo concreto.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Me corresponde el 20% adicional en un accidente in itinere?</summary>
                            <p class="mt-15 fs-09">No. El adicional de pago único del 20% (artículo 3 de la Ley 26.773) está previsto para los daños ocurridos en el lugar de trabajo o a disposición del empleador, y la Corte Suprema lo excluyó expresamente para los in itinere. Igual sí te corresponden las prestaciones médicas, la ILT y la indemnización por incapacidad.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué hago si la ART rechaza el accidente in itinere?</summary>
                            <p class="mt-15 fs-09">Pedí el rechazo por escrito y verificá el trámite que corresponde ante la Comisión Médica de tu jurisdicción. Si la ART no responde o no brinda atención, consultá el procedimiento vigente para el silencio; no uses un plazo de otro trámite sin confirmar que aplica. Tenés el paso a paso general en la guía sobre <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral">el rechazo de la ART</a>.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo denunciar si mi empleador no hace la denuncia?</summary>
                            <p class="mt-15 fs-09">Sí. Si tu empleador no denuncia el accidente, podés hacerlo vos directamente ante la ART (por teléfono, en la sede o a través del prestador médico). Dejá constancia por escrito de que le avisaste apenas ocurrió y quedate con la copia. Cualquier persona que haya tomado conocimiento del hecho también puede denunciarlo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pruebas conviene reunir el mismo día del accidente?</summary>
                            <p class="mt-15 fs-09">Guardá la constancia de la denuncia con el número de siniestro de la ART, fotos del lugar y de tus lesiones, el parte policial o de la guardia médica, los datos de testigos y los comprobantes del viaje (boleto, SUBE, combustible o peaje). Cuanto antes reúnas esa prueba, más fácil es demostrar que ibas o volvías del trabajo por tu recorrido habitual.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si el accidente in itinere lo causó otra persona?</summary>
                            <p class="mt-15 fs-09">Puede analizarse un reclamo contra el tercero responsable además del trámite de la ART, pero no se deben sumar automáticamente reparaciones completas. Los artículos 4 y 5 de la Ley 26.773 regulan la opción entre sistemas y aclaran que ciertas prestaciones de la LRT no implican por sí solas haber elegido la vía civil. Consultá antes de iniciar una acción para revisar la notificación y los créditos aplicables.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te accidentaste yendo o volviendo del trabajo?";
                            $descripcion = "Contanos qué pasó y te orientamos gratis. Revisamos si te corresponde la cobertura y cómo denunciarlo.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <p class="m-0"><strong>Seguí leyendo sobre tu caso:</strong> si la ART te rechazó el accidente, tenés el paso a paso en <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;">qué hacer ante el rechazo de la ART</a>. Si querés el panorama completo de qué te cubre y qué no, mirá <a href="<?= BASE_URL ?>blog/que-cubre-la-art-y-que-no" style="color:inherit;text-decoration:none;">qué cubre la ART y qué no</a>, y mientras estás de baja, <a href="<?= BASE_URL ?>blog/incapacidad-laboral-temporaria-ilt" style="color:inherit;text-decoration:none;">cuánto cobrás por la ILT</a>. Si ya te dieron el alta y seguís con dolor, te explicamos <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">qué hacer con el alta y el dolor</a>.</p>
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
