<?php
/**
 * VISTA: AMPUTACION DE DEDO ART - INDENMIZACION Y PORCENTAJES (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <p class="tl-dr">Amputación de un dedo por accidente laboral: porcentajes de incapacidad según el Baremo 2026, cuánto paga la ART y ejemplos reales de indemnización por cada tipo de lesión.</p>
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Amputación de Dedo</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Amputación de dedo por accidente laboral: porcentajes, cuánto paga la ART y cómo reclamar</h1>

                <p class="articulo-lead">Si sufriste la amputación de un dedo trabajando, la ART está obligada a cubrir tu tratamiento y pagarte una indemnización. Te explicamos los porcentajes reales del Baremo 2026 y cómo se calcula tu caso.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 10 min</span>
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
                                <li id="preg-1"><a href="#que-es-amputacion" class="active"><span class="nav-num">1</span> Qué cubre la ART ante una amputación</a></li>
                                <li id="preg-2"><a href="#porcentajes-mano"><span class="nav-num">2</span> Porcentajes por amputación de dedos de la mano</a></li>
                                <li id="preg-3"><a href="#porcentajes-pie"><span class="nav-num">3</span> Porcentajes por amputación de dedos del pie</a></li>
                                <li id="preg-4"><a href="#miembro-habil"><span class="nav-num">4</span> Miembro hábil: el 5% extra que pocos conocen</a></li>
                                <li id="preg-5"><a href="#como-se-calcula"><span class="nav-num">5</span> Cómo se calcula tu indemnización</a></li>
                                <li id="preg-6"><a href="#ejemplos-reales"><span class="nav-num">6</span> Ejemplos reales de indemnizaciones</a></li>
                                <li id="preg-7"><a href="#errores-comunes"><span class="nav-num">7</span> Errores que perjudican tu reclamo</a></li>
                                <li id="preg-8"><a href="#preguntas-frecuentes-dedo"><span class="nav-num">8</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te amputaron un dedo en el trabajo?";
                    $descripcion = "Revisamos tu caso y te asesoramos sin cargo sobre tu indemnización.";
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
                <div id="que-es-amputacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué cubre la ART ante una amputación de dedo</a></h2>
                    <p>La <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">amputación de un dedo en un accidente laboral</a> es una de las lesiones más comunes en determinados rubros: industria, construcción, gastronomía, agro, logística. Si te pasó mientras trabajabas —o yendo o viniendo del trabajo—, la ART tiene obligación de cubrirte el tratamiento médico completo y, después, pagarte una indemnización por la incapacidad permanente que te deje la lesión.</p>
                    <p>No importa si fue un dedo de la mano o del pie. No importa si fue total o parcial. Lo que importa es que la lesión tenga relación con tu actividad laboral y que la hayas denunciado a tiempo.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo más importante:</span> la ART no puede rechazar tu amputación argumentando que "no es grave enough". Cualquier pérdida parcial o total de un dedo en el trabajo genera derecho a cobertura e indemnización. No dejes que te digan lo contrario.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="porcentajes-mano" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Porcentajes de incapacidad por amputación de dedos de la mano</a></h2>
                    <p>El <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral vigente</a> (Decreto 549/2025) asigna un porcentaje fijo a cada tipo de amputación según el dedo afectado y el nivel de la sección. A mayor nivel de la mano (más cercano a la base), mayor porcentaje.</p>

                    <h3 class="mt-30 mb-15">Pulgar</h3>
                    <p>El pulgar es el dedo más importante para la función de la mano. Perderlo afecta directamente la capacidad de prensión y oposición.</p>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica (base del pulgar)</div>
                            <div><strong>30%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Primera falange</div>
                            <div><strong>25%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica</div>
                            <div><strong>15%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Distal (pulpejo)</div>
                            <div><strong>8%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Índice</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica</div>
                            <div><strong>14%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica proximal</div>
                            <div><strong>11%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica distal</div>
                            <div><strong>9%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Distal</div>
                            <div><strong>6%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Dedo mayor (anular)</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica</div>
                            <div><strong>11%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica proximal</div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica distal</div>
                            <div><strong>6%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Distal</div>
                            <div><strong>2%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Anular</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica</div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica proximal</div>
                            <div><strong>6%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica distal</div>
                            <div><strong>5%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Distal</div>
                            <div><strong>3%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Meñique</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica</div>
                            <div><strong>5%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica proximal</div>
                            <div><strong>4%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica distal</div>
                            <div><strong>3%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Distal</div>
                            <div><strong>1%</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Caso especial — amputación total de los 10 dedos:</span> equivale al 100% de incapacidad. Si perdiste 5 dedos, el rango va entre 40% y 60%, dependiendo de cuáles y a qué nivel. Cuatro dedos (excepto pulgar) al nivel metacarpofalángico equivale a 40%.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="porcentajes-pie" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Porcentajes de incapacidad por amputación de dedos del pie</a></h2>
                    <p>La amputación de dedos del pie también genera derecho a indemnización. Los porcentajes son menores que los de la mano, pero siguen siendo significativos, sobre todo si afectan al dedo gordo.</p>

                    <h3 class="mt-30 mb-15">Dedo gordo (hallux)</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Sin metatarsiano</div>
                            <div><strong>15%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Con metatarsiano</div>
                            <div><strong>17%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange distal del hallux</div>
                            <div><strong>6%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Dedos 2° al 5°</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Con metatarsiano</div>
                            <div><strong>12%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Cualquier otro dedo (sin metatarsiano)</div>
                            <div><strong>2%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Dos falanges del 2° al 5° dedo</div>
                            <div><strong>1,5%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Una falange del 2° al 5° dedo</div>
                            <div><strong>1%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Amputaciones más extensas del pie</h3>
                    <ul class="lista-items-blog mt-20">
                        <li><strong>Amputación parcial del pie con conservación del calcáneo (mediotarsiana o tarsometatarsiana):</strong> entre 20% y 40%.</li>
                        <li><strong>Transmetatarsiana:</strong> entre 15% y 25%.</li>
                        <li><strong>Amputación de los 5 dedos:</strong> entre 10% y 20%.</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="miembro-habil" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Miembro hábil: el 5% extra que pocos conocen</a></h2>
                    <p>Hay un detalle que mucha gente ignora y que puede sumar puntos importantes a tu porcentaje de incapacidad: si la amputación afecta al <strong>miembro superior hábil</strong> (es decir, la mano con la que escribís y hacés la mayoría de las tareas), se le suma un <strong>5% adicional</strong> al porcentaje base.</p>

                    <div class="situacion-blog p-25 bg-verde-claro border-radius-15 mb-20">
                        <p class="m-0 fs-09"><?= render_icon('check', 'txt-verde mr-10') ?> <span class="subrayado-amarillo">Ejemplo:</span> si perdiste el pulgar a nivel interfalángico (15%) y era tu mano hábil, el porcentaje final sería 15% + 5% = 20%. Esa diferencia se traduce directamente en más plata en tu indemnización.</p>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">No dejes que lo omitan:</span> muchos dictámenes de la ART no computan este 5% adicional. Si tu lesión fue en la mano hábil, asegurate de que quede registrado en la pericia médica y en toda la documentación del reclamo.</p>
                    </div>

                    <p class="mt-20">Además del daño físico, la legislación también contempla el <strong>daño psicológico</strong> por tratarse de una lesión grave con pérdida permanente. Esto puede sumar un porcentaje adicional al total de incapacidad, dependiendo de cada caso.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="como-se-calcula" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Cómo se calcula tu indemnización</a></h2>
                    <p>El porcentaje de incapacidad es solo una parte del cálculo. La fórmula legal de la indemnización por accidente de trabajo cruza varios datos:</p>

                    <div class="tabla-plazos mt-30">
                        <h4 class="mb-20"><span style="font-size: 1.3em;">🧮</span> Fórmula de cálculo:</h4>
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Componente</div>
                                <div>Qué representa</div>
                            </div>
                            <div class="tr-blog">
                                <div><strong>53 × Ingreso Base Mensual</strong></div>
                                <div>El promedio actualizado de tus salarios del último año</div>
                            </div>
                            <div class="tr-blog">
                                <div><strong>× % de incapacidad</strong></div>
                                <div>El porcentaje que te asignen (con factores de ponderación)</div>
                            </div>
                            <div class="tr-blog">
                                <div><strong>× (65 / edad)</strong></div>
                                <div>Factor según tu edad al momento del accidente</div>
                            </div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-40 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Piso mínimo garantizado:</span> ninguna indemnización puede ser inferior al piso que fija periódicamente la SRT. Si el resultado de la fórmula es menor que el piso, se aplica el piso. Si es mayor, se aplica la fórmula. <strong>Siempre se cobra el valor más alto de los dos.</strong></p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Usá nuestra calculadora:</span> para tener una referencia rápida de cuánto podrías cobrar, entrá a nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">Calculadora de Indemnización por Accidente de Trabajo</a>. Es un estimativo inicial — el número exacto lo define la pericia médica y, si es necesario, la justicia.</p>
                    </div>

                    <p class="mt-20">Además del porcentaje base de la tabla, hay factores que pueden incrementar tu monto:</p>
                    <ul class="lista-items-blog mt-20">
                        <li><strong>Factores de ponderación por edad:</strong> a menor edad, mayor incremento (hasta 5% para menores de 21 años).</li>
                        <li><strong>Factores de ponderación por actividad:</strong> si tu trabajo requiere destreza manual fina, el porcentaje puede incrementarse entre 10% y 20%.</li>
                        <li><strong>Daño psicológico:</strong> la amputación de un dedo puede generar secuelas psicológicas que se evalúan por separado.</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="ejemplos-reales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Ejemplos reales de indemnizaciones</a></h2>
                    <p>Para que tengas una referencia concreta, estos son casos reales de indemnizaciones otorgadas por la Justicia argentina a trabajadores con amputación de dedos:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Caso</div>
                            <div>Incapacidad</div>
                            <div>Indemnización</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Marinero embarcado, 40 años</strong> — Amputación de dedos</div>
                            <div>60%</div>
                            <div><strong>$482.143.832</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Marinero embarcado, 42 años</strong> — Amputación de dedos</div>
                            <div>35,70%</div>
                            <div><strong>$33.060.111</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Cajera de supermercado, 25 años</strong> — Amputación de dedo</div>
                            <div>28,80%</div>
                            <div><strong>$56.840.114</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Marinero embarcado, 27 años</strong> — Amputación de dedo</div>
                            <div>15%</div>
                            <div><strong>$65.094.968</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">¿Por qué varía tanto?</span> Porque la fórmula depende de la edad, el salario base y el tipo de actividad. Un marinero con 60% de incapacidad y 40 años cobra mucho más que alguien con menor porcentaje y sueldo más bajo. Tu caso es particular y merece un cálculo a medida.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="errores-comunes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Errores que perjudican tu reclamo</a></h2>
                    <p>Estos son los descuidos que más vemos cuando alguien llega con un caso de amputación de dedo:</p>

                    <ul class="lista-items-blog blog-errores mt-30">
                        <li><span style="font-size: 1.3em;">❌</span> No denunciar el accidente a la ART a tiempo, lo que complica demostrar la relación con el trabajo.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Aceptar el primer porcentaje de incapacidad sin que lo revise un abogado laboralista.</li>
                        <li><span style="font-size: 1.3em;">❌</span> No guardar los estudios médicos, radiografías y constancias de atención.</li>
                        <li><span style="font-size: 1.3em;">❌</span> No registrar que la lesión fue en la mano hábil, perdiendo el 5% adicional.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Firmar un acuerdo con la ART sin entender bien qué estás aceptando.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Creer que si te dieron el alta ya no podés reclamar más.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El error más caro:</span> firmar el acuerdo de la ART sin revisar el porcentaje contra el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">baremo vigente</a>. Unos pocos puntos de diferencia en amputación de dedos pueden representar millones de pesos de diferencia en la indemnización.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="preguntas-frecuentes-dedo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Preguntas frecuentes sobre amputación de dedos y ART</a></h2>
                    <p>Respondemos las dudas más comunes. También podés visitar nuestra sección de <a href="<?= BASE_URL ?>faq" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre ART</a> para más información.</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto cobro por la amputación de un dedo de la mano?</summary>
                            <p class="mt-15 fs-09">Depende de qué dedo fue y a qué nivel. Por ejemplo, un pulgar amputado a nivel metacarpofalángico vale 30% de incapacidad, mientras que un meñique distal vale solo 1%. El porcentaje final se usa en la fórmula de la indemnización junto con tu edad y tu salario.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Me corresponden más puntos si fue en la mano hábil?</summary>
                            <p class="mt-15 fs-09">Sí. Si la amputación afecta al miembro superior hábil (la mano con la que escribís y hacés la mayoría de las tareas), se suma un 5% adicional al porcentaje base de la tabla. Es un incremento que muchos dictámenes omiten, por eso conviene que quede registrado.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART puede rechazar mi reclamo por amputación de dedo?</summary>
                            <p class="mt-15 fs-09">No debería, pero si lo hace, podés impugnar la decisión ante la Comisión Médica de la SRT. Lo importante es que el accidente haya ocurrido en relación con el trabajo y que lo hayas denunciado. Contá con abogados que te asesoren sin costo desde el primer día.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tarda en definirse la indemnización?</summary>
                            <p class="mt-15 fs-09">Depende del caso: desde la denuncia hasta la fijación definitiva de incapacidad pueden pasar varios meses. Si la ART no avanza con la junta médica o si hay desacuerdo con el porcentaje, el trámite puede extenderse más. Cuanto antes actúes, más rápido avanza.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si me dieron el alta y ya estoy trabajando?</summary>
                            <p class="mt-15 fs-09">Sí. El alta médica no cierra tu derecho a reclamar la incapacidad permanente. Si te quedó una secuela (dolor, limitación de movimiento, pérdida de fuerza), la ART tiene que evaluarte y pagarte la indemnización que corresponda.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te amputaron un dedo en el trabajo?";
                            $descripcion = "Escribinos y te asesoramos sin costo sobre tu caso particular.";
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