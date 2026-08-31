<?php
/**
 * VISTA: ME DIERON EL ALTA DE LA ART PERO SIGO CON DOLOR (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <p class="tl-dr">Te dieron el alta de la ART pero seguís con dolor: tus derechos, cómo impugnar el alta médica, plazos para reclamar y qué hacer si la ART no te cubre.</p>
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Alta con Dolor</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ALTA MEDICA</span>
                <h1 class="articulo-titulo">Me dieron el alta de la ART pero sigo con dolor: qué hacer paso a paso</h1>

                <p class="articulo-lead">Sufrir un accidente laboral o padecer una enfermedad profesional es una experiencia sumamente estresante. Sin embargo, para miles de trabajadores en Argentina, el verdadero calvario empieza cuando la Aseguradora de Riesgos del Trabajo (ART) decide emitir un alta médica con dolor. Te encontrás de pronto con un papel que dice que estás "curado", pero tu cuerpo te dice todo lo contrario: seguís con molestias, rengueando, sin fuerza o con dolores crónicos que te impiden retornar tus tareas habituales.</p>
                <p class="articulo-lead">Sentirse desamparado en esta instancia es completamente normal, pero es vital que dejes de lado la angustia y pases a la acción de forma inmediata. La legislación laboral argentina te otorga herramientas legales para frenar este abuso. Si te dieron el alta pero no estás recuperado, en esta guía te explicamos detalladamente qué hacer, cómo defender tu salud y cómo resguardar tu futura indemnización.</p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>DIVERGENCIA</strong>
                            <span>de alta ante SRT</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('calendar-day-solid') ?></div>
                        <div class="char-texto">
                            <strong>5 DIAS HABILES</strong>
                            <span>para impugnar</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>PRUEBAS Y ESTUDIOS</strong>
                            <span>propios necesarios</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('handshake-regular') ?></div>
                        <div class="char-texto">
                            <strong>ASESORAMIENTO</strong>
                            <span>gratuito y online</span>
                        </div>
                    </div>
                </div>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Julio 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 8 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DE NAVEGACION (ID DE ENLACES PARA NAVEGACION SIMETRICA) -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <li id="preg-1"><a href="#por-que-alta" class="active"><span class="nav-num">1</span> ¿Por qué la ART da el alta con dolor?</a></li>
                            <li id="preg-2"><a href="#que-es-divergencia"><span class="nav-num">2</span> ¿Qué es la divergencia en el alta?</a></li>
                            <li id="preg-3"><a href="#paso-a-paso-impugnar"><span class="nav-num">3</span> Paso a paso para impugnar el alta</a></li>
                            <li id="preg-4"><a href="#que-pasa-si-vence-plazo"><span class="nav-num">4</span> ¿Qué pasa si no impugnás a tiempo?</a></li>
                            <li id="preg-5"><a href="#alta-e-indemnizacion"><span class="nav-num">5</span> ¿El alta cancela la indemnización?</a></li>
                            <li id="preg-6"><a href="#preguntas-frecuentes-alta"><span class="nav-num">6</span> Preguntas frecuentes (FAQ)</a></li>
                        </ul>
                    </nav>
                </details>

                <!-- BOTON DE WHATSAPP COMPARTIDO -->
                <?php
                    $titulo = "¿Tenés el alta con dolor?";
                    $descripcion = "Analizamos tu caso sin costo, te ayudamos ante la ART";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
                    <span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.
                </p>
            </div>
        </aside>

        <!-- CUERPO PRINCIPAL DEL POST -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <!-- SECCION 1 -->
                <div id="por-que-alta" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Por qué la ART te da el alta aunque tengas dolor?</a></h2>
                    <p>Para entender cómo actuar, primero hay que comprender cómo operan las Aseguradoras de Riesgos del Trabajo en nuestro país. Las ART, aunque forman parte del sistema de seguridad social regulado por la Superintendencia de Riesgos del Trabajo (SRT), son empresas privadas con fines de lucro. Cada día de tratamiento médico, cada sesión de kinesiología, cada prótesis, cada estudio de alta complejidad y cada peso pagado en concepto de Incapacidad Laboral Temporaria (ILT) representa un costo operativo directo para ellas.</p>
                    <p>Por este motivo, otorgar un alta médica con dolor es una práctica sumamente frecuente y sistemática. Las aseguradoras buscan acelerar los tiempos de curación "en los papeles" para sacarse de encima el gasto prestacional en especie y trasladar la carga de tu salud a tu Obra Social o al sistema de salud pública.</p>
                    <p>Sin embargo, que la ART te firme el alta no significa bajo ningún punto de vista que estés médicamente recuperado. La normativa argentina es clara: el tratamiento médico debe ser integral y durar hasta que se logre la curación completa o se consolide una secuela irreversible. Cortar las prestaciones cuando el trabajador aún manifiesta dolencias físicas es una violación directa a las obligaciones contractuales y legales de la aseguradora. Si venís de sufrir un accidente laboral complejo, debés saber que tenés el derecho legal de exigir que te sigan atendiendo hasta que tu capacidad laboral esté verdaderamente restablecida.</p>
                    
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="que-es-divergencia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Qué es la divergencia en el alta?</a></h2>
                    <p>Cuando estás en desacuerdo con la finalización del tratamiento médico dictaminado por la aseguradora, la ley te otorga una herramienta jurídica específica: el trámite por divergencia en el alta. Este es un recurso administrativo formal que se interpone ante las Comisiones Médicas de la SRT con el objetivo de que un cuerpo de peritos médicos independientes y oficiales revise tu caso, evalúe tus síntomas reales y ordene la reapertura inmediata del tratamiento si determina que el alta fue prematura.</p>
                    <p>Al iniciar este procedimiento, estás impugnando formalmente la decisión de la aseguradora, obligándola a rendir cuentas ante el organismo de control estatal.</p>
                    
                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">ALERTA: Tenés 5 días hábiles para impugnar</span><br>El tiempo es tu peor enemigo en este momento. El ordenamiento legal argentino estipula un plazo fatal y perentorio de 5 días hábiles (no corren sábados, domingos ni feriados), contados a partir del día hábil siguiente a aquel en que fuiste notificado del alta por escrito de forma fehaciente. Si dejas pasar este plazo sin realizar la presentación correspondiente, el alta médica quedará firme en el ámbito administrativo regular, y revertir la situación se volverá un proceso considerablemente más lento y burocrático. No dejes pasar el tiempo.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="paso-a-paso-impugnar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Paso a paso para impugnar el alta</a></h2>
                    <p>Si la ART te notificó el cese de las prestaciones médicas pero continuás padeciendo síntomas físicos, debés seguir rigurosamente este mapa de ruta de 5 pasos para forzar la reapertura de tu caso:</p>
                    
                    <div class="pasos-denuncia mt-30">
                        <h4 class="mb-20"><span style="font-size: 1.3em;">🗺️</span> Mapa de ruta de 5 pasos:</h4>
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Pedí el alta por escrito:</strong> Jamás te retires de un centro médico de la ART o de sus oficinas tras una comunicación verbal de alta. Exigí que te entreguen el instrumento físico o digital definitivo (formulario de alta médica), donde conste con claridad la fecha exacta de emisión, la firma del profesional interviniente, su correspondiente matrícula médica y el diagnóstico de cierre. Este documento es el puntapié inicial obligatorio para cualquier reclamo posterior.
                            </li>
                            <li>
                                <strong>2. Iniciá divergencia en Comisión Médica:</strong> Con el alta en mano, debés radicar la denuncia por divergencia. Este trámite se puede realizar de forma presencial asistiendo a la Comisión Médica jurisdiccional que te corresponda según tu domicilio o el lugar de prestación de tareas.
                            </li>
                            <li>
                                <strong>3. Presentá estudios médicos propios:</strong> La Comisión Médica de la SRT no va a resolver a tu favor únicamente basándose en tu manifestación verbal de dolor; necesitás pruebas tangibles. Es fundamental que consultes de forma urgente a médicos particulares, especialistas o profesionales de tu Obra Social. Solicitá que te realicen estudios de control (como resonancias magnéticas, ecografías, radiografías o electromiogramas) y exigí certificados médicos detallados donde conste tu diagnóstico actual, tus limitaciones funcionales y la indicación explícita de que no te encontrás en condiciones físicas de retomar tus actividades laborales.
                            </li>
                            <li>
                                <strong>4. Asistí a la junta médica:</strong> Una vez que el trámite es admitido por la SRT, se te notificará una fecha y hora para que te presents a una junta médica presencial. En esta audiencia, los médicos peritos oficiales te revisarán físicamente y evaluarán toda la documentación que aportaste. Es un derecho fundamental del trabajador asistir a esta junta acompañado por un médico perito de confianza o por un abogado matriculado especializado en la materia para garantizar que tus intereses estén correctamente protegidos.
                            </li>
                            <li>
                                <strong>5. Esperá el dictamen:</strong> Tras evaluar los antecedentes y realizar el examen físico, la Comisión Médica emitirá un Dictamen Médico obligatorio. Si la resolución determina que efectivamente seguís con dolencias asociadas al siniestro, fallará a tu favor ordenándole a la ART la reapertura inmediata del caso. Esto implica que la aseguradora deberá reanudar las sesiones de kinesiología, proveerte la medicación necesaria, realizar las intervenciones que correspondan y continuar abonándote los salarios caídos mientras dure esta nueva etapa de recuperación.
                            </li>
                        </ul>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="que-pasa-si-vence-plazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> ¿Qué pasa si no impugnás a tiempo?</a></h2>
                    <p>Una de las dudas más recurrentes en las consultas que recibimos en nuestro estudio es qué sucede si, por desconocimiento o confusión, el trabajador deja vencer el plazo de los 5 días hábiles establecido por la ley. Dejar pasar este término altera por completo la estrategia legal, pero de ninguna manera significa que hayas perdido todos tus derechos.</p>
                    <p>A continuación, te presentamos una tabla comparativa detallada para comprender los escenarios posibles según el momento exacto en el que decidas actuar:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Plazo Legal</div>
                            <div>Qué pasa con tu situación médica y laboral</div>
                            <div>Acción legal disponible</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Dentro de los 5 días hábiles</strong></div>
                            <div>El alta médica de la ART entra en estado de disputa legal. No queda firme.</div>
                            <div>Podés impugnar el alta médica mediante el trámite de Divergencia en el Alta ante la SRT para reactivar el tratamiento médico de manera prioritaria.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Después de los 5 días hábiles</strong></div>
                            <div>El alta queda firme en la vía administrativa rápida. Ya no podés exigir la reapertura automática de la atención kinesiológica o médica regular por esa vía.</div>
                            <div>Perdés el derecho a impugnar el alta médica de forma directa, pero no perdés tu derecho a reclamar. Tu vía legal será iniciar un trámite por Determinación de Incapacidad para exigir cobrar la indemnización en dinero por las secuelas que te quedaron o bien solicitar el reingreso al tratamiento de la ART.</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="alta-e-indemnizacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> ¿El alta cancela tu derecho a indemnización?</a></h2>
                    <p>Existe un mito muy instalado en los ámbitos laborales que indica que si el trabajador firma el alta médica en conformidad, retorna a su puesto de trabajo o deja vencer los plazos de impugnación, está renunciando implícitamente a cobrar cualquier tipo de resarcimiento económico. Esto es completamente falso.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">TIP: El alta no cierra tu reclamo</span><br>Recibir un alta de la ART sin incapacidad no es una palabra sagrada ni definitiva; representa únicamente la postura unilateral e interesada de la ART. El dolor crónico, la pérdida de movilidad o cualquier disminución de fuerza son secuelas físicas concretas del accidente. La ley argentina determina que estas secuelas deben ser tasadas mediante un baremo médico legal y compensadas económicamente en dinero.</p>
                    </div>

                    <!-- TEXTO RECOMENDADO EN ROJO APROBADO POR EL USUARIO -->
                    <p style="color: red; font-weight: bold; margin-top: 25px;" class="fs-105">Ya sea que tu caso haya comenzado con un rechazo del accidente laboral que tuviste que revertir, o con una atención médica deficiente que derivó en un alta apresurada, la vía para cuantificar tus secuelas físicas permanentes y reclamar la indemnización que te corresponde por ley permanece abierta e inalterable.</p>

                    <!-- EMBED DE PUBLICACION DE INSTAGRAM DE LA NOTA -->
                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'icono-chico mr-10') ?> <span class="subrayado-amarillo">INSTAGRAM</span> — Seguí de cerca nuestra explicación</h4>
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DXsNnuXlYcM/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:16px;"> 
                                        <a href="https://www.instagram.com/p/DXsNnuXlYcM/?utm_source=ig_embed&amp;utm_campaign=loading" style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                                            <div style="display: flex; flex-direction: row; align-items: center;">
                                                <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                    <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                    <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                </div>
                                            </div>
                                            <div style="padding: 19% 0;"></div>
                                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg>
                                            </div>
                                            <div style="padding-top: 8px;">
                                                <div style="color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div>
                                            </div>
                                            <div style="padding: 12.5% 0;"></div>
                                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                <div>
                                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                    <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                </div>
                                                <div style="margin-left: 8px;">
                                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                    <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                </div>
                                                <div style="margin-left: auto;">
                                                    <div style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                    <div style="background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                    <div style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                </div>
                                            </div>
                                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                            </div>
                                        </a>
                                        <p style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/DXsNnuXlYcM/?utm_source=ig_embed&amp;utm_campaign=loading" style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de Derechos Art | Abogados accidentes laborales y despidos (@derechosart)</a>
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="preguntas-frecuentes-alta" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Preguntas frecuentes (FAQ)</a></h2>
                    <p>Respondemos las dudas más recurrentes sobre el alta médica de la ART. Si querés más información general, podés visitar nuestra sección de <a href="<?= BASE_URL ?>faq" style="color:inherit;text-decoration:none;">preguntas frecuentes</a>.</p>

                    <div class="lista-faq-blog mt-30">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo cambiar de médico si no estoy de acuerdo con el alta?</summary>
                            <p class="mt-15 fs-09">Sí, absolutamente. De hecho, es lo más recomendable. Si los médicos prestadores de la ART minimizan tus síntomas o se niegan a revisarte adecuadamente, podes acudir a médicos especialistas de forma particular o a través de la cobertura de tu Obra Social. Los informes médicos detallados, las órdenes de reposo y los estudios de diagnóstico por imágenes que obtengas por fuera de la ART constituyen la prueba documental de mayor peso para desarticular los informes sesgados de la aseguradora cuando te presentes ante la Superintendencia de Riesgos del Trabajo.</p>
                        </details>
                        
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si mi empleador me exige volver a trabajar pero no puedo moverme del dolor?</summary>
                            <p class="mt-15 fs-09">Desde el momento en que la ART emite el alta, para el sistema laboral estás apto; por ende, si no te presentás a trabajar, corrés el riesgo de que el empleador compute las ausencias como abandono de trabajo o procesa a sancionarte.</p>
                            <p class="mt-15 fs-09">Para proteger tu puesto de trabajo mientras tramitás la divergencia ante la SRT, debés presentarle a tu empleador un certificado médico emitido por un profesional particular o de tu Obra Social que indique explícitamente que tenés una "inaptitud física temporal" y que requerís días de reposo. De esta manera, tu situación laboral pasará a encuadrarse temporalmente bajo el régimen de licencias por enfermedad inculpable (según el Artículo 208 de la Ley de Contrato de Trabajo N° 20.744), garantizando la justificación de tus inasistencias y el cobro de tus salarios directos a cargo de la empresa.</p>
                        </details>
                        
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Necesito un abogado para iniciar la divergencia en el alta?</summary>
                            <p class="mt-15 fs-09">Para la presentación administrativa inicial de los primeros 5 días hábiles, la normativa de la SRT no exige de manera obligatoria el patrocinio de un letrado. Sin embargo, en la práctica, contar con un estudio jurídico especializado en derecho laboral y accidentes desde el minuto uno es sumamente recomendable.</p>
                            
                            <!-- AMPLIACION EN ROJO APROBADA POR EL USUARIO -->
                            <p style="color: red; font-weight: bold;" class="mt-15 fs-09">No obstante, tené en cuenta que la junta médica es una instancia técnica compleja donde los médicos de la ART intentarán minimizar tus secuelas para pagar de menos. Contar con un abogado experto y un médico perito propio te garantiza que tus lesiones se valoren de forma real, evitando que te fijen un porcentaje de incapacidad menor y termines cobrando una indemnización injusta.</p>
                            
                            <p class="mt-15 fs-09">Si te encontrás atravesando esta delicada situación y sentís que tus derechos de salud están siendo vulnerados por la decisión de la ART, queremos ayudarte a evaluar tu caso de forma personalizada.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tengo de plazo para presentar la divergencia en el alta?</summary>
                            <p class="mt-15 fs-09">El plazo es de 5 días hábiles desde la notificación del alta (Resolución SRT 5/2026). Si dejás pasar ese plazo sin presentarte, la ART puede considerar el alta firme y cortar las prestaciones. Aun así, pasado ese plazo seguís pudiendo reclamar la determinación de tu incapacidad ante la Comisión Médica.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la Comisión Médica acepta mi divergencia en el alta?</summary>
                            <p class="mt-15 fs-09">Si la Comisión Médica admite tu divergencia, el alta queda sin efecto: la ART debe restablecer el pago de las prestaciones y continuar con el tratamiento hasta el alta definitiva. Mientras tanto, conviene acompañar el trámite con certificados médicos propios para justificar las ausencias ante tu empleador (Artículo 208 de la Ley de Contrato de Trabajo N° 20.744).</p>
                        </details>
                    </div>

                    <!-- COMPONENTE FINAL CTA DE WHATSAPP -->
                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te dieron el alta médica y seguís con dolor?";
                            $descripcion = "Escribinos por WhatsApp y analizamos tu caso sin costo.";
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

<!-- SCRIPT PARA INSTAGRAM EMBED -->
<script async src="//www.instagram.com/embed.js"></script>

<!-- SCRIPT PARA NAVEGACION STICKY Y ACTIVE STATE EN EL INDEX -->
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
