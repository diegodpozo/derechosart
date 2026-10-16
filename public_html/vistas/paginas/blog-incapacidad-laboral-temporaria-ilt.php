<?php
/**
 * VISTA: INCAPACIDAD LABORAL TEMPORARIA (ILT): CUANTO DURA Y CUANTO COBRAS (ARTICULO DE BLOG)
 * CLONA LA ESTRUCTURA DE blog-despido-con-licencia-por-accidente.php (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css), render_icon(),
 * el componente cta-whatsapp.php y el componente bloque-autor.php.
 */

// FUENTES NORMATIVAS DEL BLOQUE DE AUTORIA (SE CONSUME AL FINAL DE LA VISTA)
$FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo), art. 7 y art. 13 de la Ley 24.557, Ley 27.348, art. 208 de la Ley 20.744 (LCT), Decreto 1694/2009 y normativa de la SRT.';
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Incapacidad laboral temporaria</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Incapacidad laboral temporaria (ILT): cuánto dura y cuánto cobrás</h1>

                <p class="articulo-lead">Si tuviste un accidente de trabajo o una enfermedad profesional y no podés hacer tus tareas por un tiempo, estás en situación de Incapacidad Laboral Temporaria (ILT): la etapa en la que la ART te cubre mientras te recuperás. Te explicamos qué es, cuánto puede durar y cuánto tenés que cobrar. El dato clave: durante la ILT te corresponde una prestación equivalente a tu ingreso habitual, no un porcentaje menor.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 8 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
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
                                <li id="preg-1"><a href="#que-es-ilt" class="active"><span class="nav-num">1</span> ¿Qué es la ILT?</a></li>
                                <li id="preg-2"><a href="#cuanto-dura"><span class="nav-num">2</span> ¿Cuánto puede durar?</a></li>
                                <li id="preg-3"><a href="#cuanto-cobras"><span class="nav-num">3</span> ¿Cuánto tenés que cobrar?</a></li>
                                <li id="preg-4"><a href="#quien-paga"><span class="nav-num">4</span> Quién paga la ILT</a></li>
                                <li id="preg-5"><a href="#diferencia-indemnizacion"><span class="nav-num">5</span> No es la indemnización final</a></li>
                                <li id="preg-6"><a href="#si-art-no-paga"><span class="nav-num">6</span> Si la ART no paga o paga de menos</a></li>
                                <li id="preg-7"><a href="#errores"><span class="nav-num">7</span> Errores que te perjudican</a></li>
                                <li id="preg-8"><a href="#preguntas-frecuentes"><span class="nav-num">8</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tu ART no te está pagando la ILT?";
                    $descripcion = "Revisamos tu caso y reclamamos la diferencia. Respondemos en el día.";
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
                <div id="que-es-ilt" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Qué es la ILT?</a></h2>
                    <p>Cuando un accidente de trabajo o una enfermedad profesional te deja sin poder hacer tus tareas por un tiempo, la ley te pone en una situación protegida: la <strong>Incapacidad Laboral Temporaria (ILT)</strong>. Es la etapa en la que estás de baja: la ART se hace cargo de tu <strong>atención médica</strong> y de una <strong>prestación en dinero mientras te recuperás</strong>.</p>
                    <p>La prestación por ILT empieza <strong>al día siguiente de la primera manifestación invalidante</strong> (es decir, del accidente o del momento en que se te manifiesta la enfermedad) y dura <strong>mientras siga la baja</strong>: hasta el alta médica, hasta que se declare una incapacidad permanente o, como máximo, hasta el tope que fija la ley.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con no mezclar:</span> la ILT es por <strong>accidente de trabajo o enfermedad profesional</strong> y la cubre la <strong>ART</strong>. Distinta es la licencia por enfermedad o accidente <strong>inculpable</strong> (no laboral), que la paga el empleador de su propio bolsillo.</p>
                    </div>

                    <p class="mt-30">Para entenderlo bien hay que separar las dos situaciones:</p>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>Quién responde mientras estás de baja</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Accidente de trabajo o enfermedad profesional (ILT)</strong></div>
                            <div>La <strong>ART</strong> te paga la prestación por ILT (los primeros 10 días los asume el empleador). Durante la ILT, en principio no devengás remuneraciones del empleador.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Enfermedad o accidente inculpable (no laboral)</strong></div>
                            <div>Lo paga el <strong>empleador</strong> como licencia con goce de sueldo, según los plazos del artículo 208 de la LCT.</div>
                        </div>
                    </div>
                    <p class="mt-20 fs-09">Si querés la respuesta rápida y sintética, la tenés en las <a href="<?= BASE_URL ?>preguntas-frecuentes/indemnizacion/que-es-la-incapacidad-laboral-temporaria" style="color:inherit;text-decoration:none;"><strong>preguntas frecuentes sobre qué es la incapacidad laboral temporaria</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="cuanto-dura" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Cuánto puede durar la ILT?</a></h2>
                    <p>La ILT <strong>no tiene una fecha fija</strong>: dura lo que necesite tu recuperación según la evaluación médica. Pero la ley fija un techo claro y las causas por las que termina.</p>
                    <p>La ILT <strong>cesa por alguna de estas cuatro causas</strong> (artículo 7 de la Ley 24.557):</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Causa de cese</div>
                            <div>Qué significa en la práctica</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Alta médica</strong></div>
                            <div>La ART te da el alta: te consideran recuperado (con o sin secuelas). Si quedan secuelas, se pasa a evaluar la incapacidad permanente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Declaración de incapacidad laboral permanente (ILP)</strong></div>
                            <div>Si del accidente queda una incapacidad permanente, se corta la ILT y empieza la etapa de la incapacidad y su indemnización.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Transcurso de dos (2) años desde la primera manifestación invalidante</strong></div>
                            <div>Es el tope máximo. Pasados los 2 años, la ILT cesa por ley aunque sigas de baja.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fallecimiento del trabajador</strong></div>
                            <div>La ILT se extingue y se pasa a las prestaciones por fallecimiento que correspondan.</div>
                        </div>
                    </div>

                    <p class="mt-30">Si te reincorporás y <strong>volvés a estar de baja por el mismo accidente o enfermedad</strong> dentro del plazo del tope, la ILT continúa hasta el alta médica. Es decir, los períodos se <strong>suman</strong> hasta completar los dos años (artículo 7, inciso 3, de la Ley 24.557).</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Ojo:</span> el tope no es de un año. La ley fija hoy <strong>dos (2) años</strong> desde la primera manifestación invalidante como duración máxima de la ILT.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="cuanto-cobras" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> ¿Cuánto tenés que cobrar durante la ILT?</a></h2>
                    <p>Este es el punto donde hay más confusión. Durante la ILT te corresponde una prestación mensual equivalente al <strong>100% de tu remuneración</strong>, es decir, tu ingreso habitual (artículo 13 de la Ley 24.557). En criollo: mientras estás de baja, <strong>cobrás como si estuvieras trabajando</strong>.</p>
                    <p><strong>No es un 70%.</strong> Ese porcentaje corresponde a otros supuestos (la incapacidad permanente en su etapa provisional, artículos 14 y 15 de la Ley 24.557), no a la ILT. Si alguien te dice que durante la baja temporaria te toca el 70% del sueldo, está mezclando dos prestaciones distintas.</p>
                    <p>¿Cómo se saca el número? Para los accidentes y enfermedades ocurridos a partir del 6 de noviembre de 2009, la prestación se calcula, liquida y ajusta conforme al artículo 208 de la Ley de Contrato de Trabajo (Decreto 1694/2009): con <strong>la remuneración que venías percibiendo al momento de la baja</strong>, más los aumentos que se acuerden en ese período. Si tu salario es <strong>variable</strong> (comisiones, horas extra), se toma el promedio del último semestre, y en ningún caso podés cobrar menos de lo que hubieras percibido si no te hubieses accidentado.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Concepto</div>
                            <div>Cómo se calcula</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Base de cálculo</strong></div>
                            <div>La remuneración que percibías al momento de la baja. Desde el Decreto 1694/2009 se liquida conforme al artículo 208 de la LCT (contingencias posteriores al 6/11/2009).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Monto de la prestación</strong></div>
                            <div>El <strong>100%</strong> de esa remuneración: es el equivalente a tu ingreso habitual (artículo 13 de la Ley 24.557).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Aumentos y salario variable</strong></div>
                            <div>Se actualiza con los aumentos de tu categoría y <strong>nunca queda por debajo</strong> de lo que hubieras cobrado de no accidentarte. Si tu sueldo varía, se usa el promedio del último semestre (SRT).</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Dato útil:</span> la prestación dineraria de la ART por ILT está <strong>exenta del Impuesto a las Ganancias</strong>.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="quien-paga" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> ¿Quién paga la ILT?</a></h2>
                    <p>La ILT <strong>no la paga siempre el mismo bolsillo</strong>. Se reparte entre el empleador y la ART según el momento de la baja:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Quién</div>
                            <div>Qué paga</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>El empleador</strong></div>
                            <div>Los <strong>primeros 10 días</strong> de ILT.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>La ART</strong></div>
                            <div>Desde el <strong>día 11</strong> y hasta el alta o el cese de la ILT.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>La ART</strong></div>
                            <div>Las <strong>prestaciones médicas</strong> (atención, estudios, rehabilitación, medicamentos) desde el primer momento.</div>
                        </div>
                    </div>

                    <p class="mt-30">El pago se hace con la <strong>misma modalidad y periodicidad que la remuneración</strong> (las reglas de la Ley de Contrato de Trabajo). Quien paga <strong>retiene los aportes, hace las contribuciones y abona las asignaciones familiares</strong> que correspondan (artículo 13, inciso 2, de la Ley 24.557).</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Un detalle clave:</span> mientras estás en ILT, en principio <strong>no devengás remuneraciones del empleador</strong> (más allá del tramo de los 10 días): la prestación la abona la ART. No te corresponde "sueldo y prestación" a la vez por el mismo período.</p>
                    </div>
                    <p class="mt-20 fs-09">Para la respuesta corta sobre este punto, mirá las <a href="<?= BASE_URL ?>preguntas-frecuentes/art-y-cobertura/quien-me-paga-mientras-estoy-de-baja-por-la-art" style="color:inherit;text-decoration:none;"><strong>preguntas frecuentes sobre quién te paga mientras estás de baja por la ART</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="diferencia-indemnizacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> La ILT no es lo mismo que la indemnización final</a></h2>
                    <p>Es común escuchar "me van a dar la indemnización de la ILT" y mezclar dos cosas distintas. Conviene separarlas:</p>
                    <p>La <strong>ILT es la prestación que cobrás mientras estás de baja</strong>, para reemplazar el ingreso que dejás de percibir. La <strong>indemnización</strong> es otra cosa: se paga cuando, terminado el tratamiento, te queda una <strong>incapacidad permanente</strong> (un porcentaje de incapacidad).</p>
                    <p>Por eso el recorrido típico es: (1) mientras estás de baja, cobrás la <strong>ILT</strong>; (2) cuando te dan el alta, si quedan secuelas, se determina el <strong>porcentaje de incapacidad</strong>; (3) recién ahí se calcula la <strong>indemnización</strong> que corresponde.</p>
                    <p>Para estimar qué puede valer tu caso según el porcentaje de incapacidad podés usar la <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;"><strong>calculadora de accidentes</strong></a>, y ver los porcentajes en la <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;"><strong>tabla de incapacidad</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="si-art-no-paga" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Si la ART no te paga o te paga de menos</a></h2>
                    <p>La prestación por ILT es <strong>irrenunciable</strong> (artículo 11 de la Ley 24.557). Si la ART te la niega, te paga tarde o te paga menos que tu ingreso, <strong>podés reclamar</strong>. La ley no te obliga a conformarte con lo que te depositen.</p>
                    <p>Hay que distinguir dos problemas distintos:</p>
                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li><strong>Si te rechazan el accidente:</strong> si la ART dice que "no corresponde", hay un procedimiento ante la Comisión Médica (Ley 27.348). Te explicamos el paso a paso en <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;">qué hacer si la ART te rechaza el accidente</a>.</li>
                            <li><strong>Si te pagan de menos:</strong> si comparás tu recibo y la prestación no llega a tu ingreso base, podés reclamar la <strong>diferencia más los intereses</strong> por la demora.</li>
                        </ul>
                    </div>
                    <p class="mt-30">El recorrido para discutir ante la Comisión Médica está explicado en <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisiones Médicas</a>. Y si la ART te dio el alta y seguís con dolor, mirá <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">qué hacer si te dieron el alta y seguís con dolor</a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="errores" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Errores que te pueden costar caro</a></h2>
                    <p>En las consultas vemos los mismos errores una y otra vez. Evitarlos puede cambiar el resultado:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error</div>
                            <div>Por qué te perjudica</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No denunciar el accidente a la ART</strong></div>
                            <div>Sin la denuncia, queda más difícil acreditar el accidente y acceder a la prestación por ILT.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Faltar a los controles de la ART</strong></div>
                            <div>Faltar a los controles se usa en tu contra. Andá siempre, aunque no estés de acuerdo con el diagnóstico.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Conformarte con un pago menor a tu ingreso</strong></div>
                            <div>Si la prestación no llega a tu ingreso base, estás cobrando de menos. La diferencia se puede reclamar con intereses.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Firmar el alta sin estar recuperado</strong></div>
                            <div>Si te dan el alta y seguís con secuelas, hay que discutirlo en tiempo y forma. Firmar y no reclamar complica tu caso.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Dejar pasar el tiempo</strong></div>
                            <div>Los reclamos prescriben. Una consulta a tiempo evita perder el derecho a cobrar.</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas que más recibimos sobre la Incapacidad Laboral Temporaria:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo puede durar la ILT?</summary>
                            <p class="mt-15 fs-09">No tiene una duración fija: depende de tu recuperación y de la evaluación médica. La ley pone un tope de <strong>dos (2) años</strong> desde la primera manifestación invalidante, y la ILT también cesa antes si recibís el alta médica o si se declara una incapacidad permanente. Si recaés por el mismo accidente, los períodos se suman hasta ese tope.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto cobro durante la ILT: el 70% o el 100%?</summary>
                            <p class="mt-15 fs-09">El <strong>100% de tu remuneración</strong>, equivalente a tu ingreso habitual (artículo 13 de la Ley 24.557). El 70% corresponde a otros supuestos, como la incapacidad permanente en su etapa provisional (artículos 14 y 15), no a la ILT. Si te están pagando menos que tu ingreso, podés reclamar la diferencia.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Quién me paga los primeros días de la ILT?</summary>
                            <p class="mt-15 fs-09">Los <strong>primeros 10 días</strong> los asume el <strong>empleador</strong>. Desde el <strong>día 11</strong> los paga la <strong>ART</strong> y así sigue hasta el alta o el cese de la ILT. Las prestaciones médicas las cubre la ART desde el primer momento.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la ART me da el alta y sigo con dolor?</summary>
                            <p class="mt-15 fs-09">Si no estás de acuerdo con el alta, podés plantear la <strong>divergencia del alta</strong> ante la Comisión Médica Jurisdiccional, dentro de un plazo breve desde la notificación. No dejes pasar los días. Tenés el detalle en la guía sobre <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">el alta de la ART y el dolor persistente</a>.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ILT es lo mismo que la indemnización?</summary>
                            <p class="mt-15 fs-09">No. La ILT es la prestación que cobrás <strong>mientras estás de baja</strong>. La indemnización se paga cuando, terminado el tratamiento, te queda una <strong>incapacidad permanente</strong>. Son etapas distintas: primero la ILT y, si quedan secuelas, después la indemnización por el porcentaje de incapacidad.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo seguir cobrando la ILT mientras tramito un juicio?</summary>
                            <p class="mt-15 fs-09">Sí. Son trámites independientes: mientras dure la incapacidad temporaria, la ART tiene que seguir pagando la prestación, sin que el juicio por incapacidad permanente lo interrumpa. El detalle está en las <a href="<?= BASE_URL ?>preguntas-frecuentes/juicio-laboral/puedo-seguir-cobrando-el-subsidio-mientras-hago-el-juicio" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre cobrar el subsidio mientras hacés el juicio</a>.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Tenés dudas con tu ILT?";
                            $descripcion = "Consultá gratis con una abogada especializada en accidentes. Evaluamos tu caso sin cargo y sin compromiso.";
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

<!-- SCRIPT PARA NAVEGACION STICKY Y ACTIVE STATE -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.sidebar-nav a');
    const sections = document.querySelectorAll('.seccion-bloque');

    function changeActiveLink() {
        let index = sections.length;
        while(--index && window.scrollY + 100 < sections[index].offsetTop) {}
        links.forEach((link) => link.classList.remove('active'));
        links[index].classList.add('active');
    }

    window.addEventListener('scroll', changeActiveLink);
    changeActiveLink();
});
</script>
