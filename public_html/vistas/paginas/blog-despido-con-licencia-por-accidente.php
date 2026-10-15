<?php
/**
 * VISTA: ME DESPIDIERON CON LICENCIA POR ACCIDENTE DE TRABAJO (ARTICULO DE BLOG)
 * CLONA LA ESTRUCTURA DE blog-que-cubre-la-art.php (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css), render_icon(),
 * el componente cta-whatsapp.php y el componente bloque-autor.php.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Despido con licencia por accidente</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Me despidieron con licencia por accidente de trabajo: qué hacer</h1>

                <p class="articulo-lead">Si te despidieron mientras estabas de licencia por un accidente de trabajo, no estás desprotegido: esa decisión puede tener consecuencias económicas para tu empleador. Te explicamos qué es un despido con licencia por accidente, qué podés reclamar, cuándo puede corresponder una indemnización agravada y cómo avanzar sin dejar pasar el tiempo.</p>

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
                                <li id="preg-1"><a href="#pueden-despedirme" class="active"><span class="nav-num">1</span> ¿Pueden despedirme estando de licencia?</a></li>
                                <li id="preg-2"><a href="#que-te-corresponde"><span class="nav-num">2</span> Qué te corresponde cobrar</a></li>
                                <li id="preg-3"><a href="#art-213"><span class="nav-num">3</span> El pago extra del art. 213 LCT</a></li>
                                <li id="preg-4"><a href="#despido-discriminatorio"><span class="nav-num">4</span> Si el despido es discriminatorio</a></li>
                                <li id="preg-5"><a href="#periodo-de-prueba"><span class="nav-num">5</span> Si estabas en período de prueba</a></li>
                                <li id="preg-6"><a href="#la-art-sigue"><span class="nav-num">6</span> La ART sigue cubriendo tu accidente</a></li>
                                <li id="preg-7"><a href="#que-hacer"><span class="nav-num">7</span> Qué hacer paso a paso</a></li>
                                <li id="preg-8"><a href="#errores"><span class="nav-num">8</span> Errores que complican tu reclamo</a></li>
                                <li id="preg-9"><a href="#preguntas-frecuentes"><span class="nav-num">9</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te despidieron estando de baja?";
                    $descripcion = "Consultá gratis con una abogada especializada en despidos. Respondemos en el día.";
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
                <div id="pueden-despedirme" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Pueden despedirme estando de licencia por accidente?</a></h2>
                    <p>La respuesta corta es <strong>sí, pueden</strong>: en el régimen general de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/25552/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley de Contrato de Trabajo (20.744)</a> no existe una "estabilidad propia" que te garantice el puesto de por vida. El empleador puede despedirte <strong>sin invocar causa</strong>, pero lo tiene que hacer pagando la indemnización que corresponde. Lo que no puede es despedirte "gratis".</p>
                    <p>La respuesta larga es más importante: <strong>el momento del despido cambia su costo</strong>. Si te despiden mientras estás de licencia por un accidente de trabajo, entran en juego rubros y protecciones que no aparecen en un despido común. Y si el despido está vinculado a tu accidente o a las secuelas que te dejó, puede llegar a encuadrarse como <strong>discriminatorio</strong>.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con no mezclar regímenes:</span> no es lo mismo una licencia por <strong>accidente de trabajo</strong> (la que cubre la ART, llamada <strong>Incapacidad Laboral Temporaria o ILT</strong>) que una licencia por <strong>enfermedad o accidente inculpable</strong> (la que paga el empleador de su bolsillo). El encuadre correcto cambia qué podés reclamar.</p>
                    </div>

                    <p class="mt-30">Para entenderlo bien hay que separar dos situaciones:</p>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Tipo de licencia</div>
                            <div>Quién paga mientras estás de baja</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Accidente de trabajo (ILT, ART)</strong></div>
                            <div>La <strong>ART</strong> te paga una prestación mensual (los primeros 10 días los asume el empleador). Durante la ILT, en principio no devengás remuneraciones del empleador.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Enfermedad o accidente inculpable</strong></div>
                            <div>Lo paga el <strong>empleador</strong> como licencia con goce de sueldo, según los plazos del artículo 208 de la LCT.</div>
                        </div>
                    </div>
                    <p class="mt-20 fs-09 txt-gris-medio italic">Nota: la ILT por accidente de trabajo cesa por el alta médica, por la declaración de incapacidad laboral permanente, por el transcurso de dos (2) años desde la primera manifestación invalidante o por el fallecimiento del trabajador (artículo 7 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley 24.557</a>).</p>
                    <p class="mt-20 fs-09">Si querés la respuesta puntual a si pueden despedirte estando de baja, la tenés resumida en las <a href="<?= BASE_URL ?>preguntas-frecuentes/juicio-laboral/me-pueden-despedir-mientras-estoy-de-baja-por-un-accidente-de-trabajo" style="color:inherit;text-decoration:none;"><strong>preguntas frecuentes sobre despido estando de baja por accidente</strong></a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="que-te-corresponde" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué te corresponde cobrar si te despiden</a></h2>
                    <p>Un despido sin causa se paga igual estés o no de licencia. Estos son los rubros que normalmente entran en la liquidación final por un despido sin causa:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Rubro</div>
                            <div>En qué consiste</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por antigüedad</strong></div>
                            <div>Un (1) mes de sueldo por cada año de servicio o fracción mayor de tres (3) meses, calculado sobre la mejor remuneración mensual normal y habitual (artículo 245 de la LCT).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Preaviso omitido</strong></div>
                            <div>Si no te avisaron con la anticipación legal, corresponde la indemnización sustitutiva del preaviso (artículo 232 de la LCT).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Integración del mes de despido</strong></div>
                            <div>Los días que faltan para completar el mes en que te despidieron (artículo 233 de la LCT).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>SAC y vacaciones proporcionales</strong></div>
                            <div>El aguinaldo y las vacaciones no gozadas hasta la fecha de egreso.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Salarios adeudados</strong></div>
                            <div>Todo lo que te debían a la fecha del despido, más los certificados de trabajo (artículo 80 de la LCT).</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Importante:</span> la indemnización por despido es una cosa y la <strong>prestación de la ART por tu accidente es otra distinta</strong>. Son dos reclamos separados y podés cobrar los dos: el despido ante el empleador y las prestaciones por el accidente ante la ART.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="art-213" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> El pago extra del art. 213 LCT</a></h2>
                    <p>Hay una norma pensada justamente para desalentar el despido durante una licencia: el <strong>artículo 213 de la LCT</strong>. Establece que si el empleador te despide durante el plazo de las licencias pagas por <strong>accidente o enfermedad inculpable</strong>, además de las indemnizaciones por despido injustificado, debe pagarte <strong>los salarios que faltaban hasta el vencimiento de la licencia o hasta la fecha del alta médica</strong>.</p>
                    <p>La lógica es simple: si el empleador pudiera despedirte durante la licencia, podría "ahorrarse" los meses de licencia que faltaban. La ley neutraliza eso y lo obliga a pagar esos salarios igual, sumados a la indemnización.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El detalle que importa:</span> el texto del artículo 213 está pensado para la licencia por accidente o enfermedad <strong>inculpable</strong> (la que paga el empleador). Cuando el accidente es <strong>de trabajo y lo cubre la ART</strong>, el encuadre no es automático, porque durante la ILT quien paga la prestación es la ART y no el empleador. La protección del empleo durante el tratamiento de un accidente laboral se analiza en la misma línea, pero cada caso depende de cómo se encuadre la contingencia. Por eso conviene asesorarse.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="despido-discriminatorio" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Si el despido es discriminatorio: indemnización agravada</a></h2>
                    <p>Acá está el rubro más importante en muchos casos. Si el despido está vinculado a tu <strong>accidente</strong> o a las <strong>secuelas físicas o la discapacidad</strong> que te dejó, puede considerarse un acto de discriminación. La ley argentina protege la salud y la condición psicofísica del trabajador.</p>
                    <p>La <strong>Ley 27.742</strong> incorporó el <strong>artículo 245 bis de la LCT</strong>, que prevé un agravamiento de la indemnización por antigüedad de <strong>entre el 50% y el 100%</strong> cuando el despido tiene como causa, entre otros motivos, los <strong>caracteres físicos o la discapacidad</strong> del trabajador. El porcentaje concreto dentro de esa franja depende de la gravedad de los hechos.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Punto clave</div>
                            <div>Qué significa</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Quién prueba la discriminación</strong></div>
                            <div>La carga de la prueba del acto discriminatorio recae, en principio, en quien lo invoca. En la práctica se valoran <strong>indicios</strong> (por ejemplo, que te despidieron al volver del accidente o por tus limitaciones).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No se acumula con otros regímenes</strong></div>
                            <div>El agravante del art. 245 bis no se acumula con otros regímenes especiales que contemplen agravamiento indemnizatorio.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Se extingue el vínculo</strong></div>
                            <div>El régimen del art. 245 bis contempla la extinción definitiva del vínculo: la respuesta es económica y no hay reincorporación.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ley 23.592 (actos discriminatorios)</strong></div>
                            <div>Convive con la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/20000-24999/20465/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley 23.592</a>, que tiene una formulación amplia de qué es un acto discriminatorio y prevé una reparación integral.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">En la práctica:</span> que te despidan al volver de un accidente, por las tareas que no podés hacer o por tus secuelas es, muchas veces, la señal más fuerte de que el despido es discriminatorio. La jurisprudencia viene reconociendo estos casos. Por eso es clave <strong>guardar toda la prueba</strong> de cómo se produjo el despido.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="periodo-de-prueba" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Si estabas en período de prueba</a></h2>
                    <p>Durante el <strong>período de prueba</strong>, el empleador puede rescindir el contrato sin invocar causa y sin indemnización (dentro de los plazos del artículo 92 bis de la LCT). Pero eso <strong>no lo habilita a discriminar</strong>.</p>
                    <p>La ley reconoce que, si te rescinden el contrato dentro del período de prueba, tenés derecho a las <strong>prestaciones por accidente o enfermedad del trabajo</strong>. Y si el despido encubre una discriminación por el accidente o por tus secuelas, la Justicia lo ha tratado como un despido discriminatorio, con las consecuencias del caso. El período de prueba no es un escudo para despedir a alguien por haberse accidentado.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="la-art-sigue" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Aunque te despidan, la ART sigue cubriendo tu accidente</a></h2>
                    <p>Es un punto que suele generar dudas: <strong>el despido no borra el accidente</strong>. Si ya denunciaste el accidente de trabajo y la ART reconoció la contingencia, tiene que seguir brindándote las prestaciones que correspondan por ese siniestro, incluidas la atención médica, la rehabilitación y la prestación por la incapacidad que quede.</p>
                    <p>En otras palabras: el reclamo por <strong>tu accidente contra la ART</strong> y el reclamo por <strong>el despido contra tu empleador</strong> son dos caminos distintos. El primero no se cae porque te hayan despedido. Si todavía no denunciaste el accidente, hacelo cuanto antes: te conviene dejar todo por escrito.</p>
                    <p>Podés ver qué cubre y qué no la ART en esta guía: <a href="<?= BASE_URL ?>blog/que-cubre-la-art-y-que-no" style="color:inherit;text-decoration:none;">qué cubre la ART y qué no</a>.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="que-hacer" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Qué hacer paso a paso</a></h2>
                    <p>Si te despidieron estando de licencia por un accidente de trabajo, esto es lo que conviene hacer, en orden:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. No firmes la renuncia ni aceptes un acuerdo sin asesorarte.</strong> Cualquier papel que firmes bajo presión puede complicar tu reclamo. Si te apuran para firmar, frená: tenés derecho a consultar antes.
                            </li>
                            <li>
                                <strong>2. Junta toda la prueba del despido y de la licencia.</strong> Guardá la notificación del despido (carta documento, telegrama, mail o mensajes), los certificados médicos, los partes de la ART y las constancias de la licencia.
                            </li>
                            <li>
                                <strong>3. Reclamá por escrito los rubros que correspondan.</strong> La intimación fehaciente (por ejemplo, con un telegrama laboral, que es gratuito) deja asentado qué reclamás y desde cuándo. Un abogado te ayuda a redactarla mejor.
                            </li>
                            <li>
                                <strong>4. Evaluá si el despido es discriminatorio.</strong> Si te despidieron por el accidente, por tus secuelas o por las tareas que no podés hacer, puede corresponder el agravante del art. 245 bis. Ahí la estrategia y la prueba son decisivas.
                            </li>
                            <li>
                                <strong>5. Consultá con una abogada laboralista.</strong> El encuadre correcto (licencia, art. 213, discriminación, período de prueba) define cuánto podés reclamar. Verlo a tiempo evita perder rubros.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">⏳</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Los plazos corren:</span> los reclamos laborales tienen plazos de prescripción y, si dejas pasar el tiempo, podés perder el derecho a cobrar. No dejes la consulta "para más adelante".</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="errores" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Errores que complican tu reclamo</a></h2>
                    <p>En las consultas vemos los mismos errores una y otra vez. Evitarlos puede cambiar el resultado:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error</div>
                            <div>Por qué te perjudica</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Firmar la renuncia bajo presión</strong></div>
                            <div>La renuncia firmada es difícil de revertir. Si fue producto de un engaño o de presión, hay que demostrarlo.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Aceptar un acuerdo sin asesorarte</strong></div>
                            <div>Los acuerdos suelen ofrecerse por menos de lo que te corresponde. Una vez homologado, es muy difícil volver atrás.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No denunciar el accidente de trabajo</strong></div>
                            <div>Sin la denuncia ante la ART, queda más difícil acreditar el accidente y acceder a las prestaciones.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Faltar a los controles de la ART</strong></div>
                            <div>Faltar a los controles se usa en tu contra. Andá siempre, aunque no estés de acuerdo con el diagnóstico.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No guardar pruebas</strong></div>
                            <div>Sin constancias (mensajes, certificados, notificaciones) es más difícil probar cómo se produjo el despido.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Dejar pasar el tiempo</strong></div>
                            <div>Los reclamos prescriben. Una consulta a tiempo es la diferencia entre cobrar o perder el derecho.</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 9 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-9"><span class="num-sec">9</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas que más recibimos cuando alguien fue despedido estando de licencia por un accidente:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Es legal que te despidan estando de licencia por ART?</summary>
                            <p class="mt-15 fs-09">Es legal en el sentido de que el régimen general no te garantiza el puesto de por vida, pero el empleador debe pagar la indemnización por despido y, si el despido se relaciona con tu accidente o con las secuelas que te dejó, puede tratarse de un despido discriminatorio que sume el agravante del art. 245 bis de la LCT. Tenés el detalle en las <a href="<?= BASE_URL ?>preguntas-frecuentes/juicio-laboral/me-pueden-despedir-mientras-estoy-de-baja-por-un-accidente-de-trabajo" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre el despido estando de baja</a>.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué es el "despido con licencia por accidente" y por qué tiene un costo extra?</summary>
                            <p class="mt-15 fs-09">Es el despido dispuesto mientras estás de baja por un accidente. Tiene un costo extra porque, además de la indemnización por despido, pueden jugar rubros como los salarios de la licencia que faltaban (art. 213 de la LCT, pensado para la licencia inculpable) y el agravante por despido discriminatorio cuando el despido se relaciona con el accidente.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo cobrar la indemnización del despido y la de la ART a la vez?</summary>
                            <p class="mt-15 fs-09">Sí, son reclamos distintos. La indemnización por despido la paga el empleador en el marco de la LCT; las prestaciones por el accidente (ILT, incapacidad) las cubre la ART en el marco de la Ley 24.557. Una cosa no excluye a la otra.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto dura la licencia por accidente de trabajo?</summary>
                            <p class="mt-15 fs-09">La duración depende de tu recuperación y de la evaluación médica: la ILT cesa con el alta, con la declaración de incapacidad permanente o al cumplirse los plazos legales. No es un plazo fijo de antemano: lo define la evolución de tu lesión y la determinación de la ART o de la Comisión Médica.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Y si me despidieron en el período de prueba?</summary>
                            <p class="mt-15 fs-09">Aunque el período de prueba permite rescindir sin causa dentro de sus plazos, eso no habilita a discriminar. Tenés derecho a las prestaciones por el accidente y, si el despido encubre una discriminación por tu accidente o secuelas, la Justicia lo ha tratado como discriminación. Consultá cuanto antes.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué tengo que hacer primero si me despidieron estando de baja?</summary>
                            <p class="mt-15 fs-09">No firmes la renuncia ni aceptes acuerdos sin asesorarte, guardá toda la prueba (notificación del despido, certificados, partes de la ART) y consultá con una abogada laboralista. Los reclamos tienen plazos de prescripción: no dejes pasar el tiempo.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te despidieron estando de licencia?";
                            $descripcion = "Consultá gratis con una abogada especializada en despidos. Evaluamos tu caso sin cargo y sin compromiso.";
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
