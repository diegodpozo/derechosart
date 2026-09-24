<?php
/**
 * VISTA: AMPUTACION DE DEDO ART - INDENMIZACION Y PORCENTAJES (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
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
                                <li id="preg-4"><a href="#factores-ponderacion"><span class="nav-num">4</span> Factores de ponderación: la clave del porcentaje</a></li>
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
                            <div>Trapeciometacarpiana</div>
                            <div><strong>40%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpiano</div>
                            <div><strong>35%</strong></div>
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
                            <div>Falange distal</div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Pulpejo (sin lesión ósea)</div>
                            <div><strong>2%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Índice, mayor, anular o meñique</h3>
                    <p>El Baremo 549/2025 asigna los mismos porcentajes a los cuatro dedos restantes según el nivel de amputación.</p>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Carpo</div>
                            <div><strong>15%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpiano</div>
                            <div><strong>11%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Metacarpofalángica</div>
                            <div><strong>10%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange proximal</div>
                            <div><strong>9%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica proximal</div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange media</div>
                            <div><strong>7%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Interfalángica distal</div>
                            <div><strong>6%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange distal</div>
                            <div><strong>3%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Pulpejo (sin lesión ósea)</div>
                            <div><strong>1%</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Caso especial — amputaciones múltiples:</span> la amputación de los cinco dedos a nivel del carpo o metacarpofalángico (mano completa) equivale a <strong>50%</strong> (tope del sector mano y/o muñeca). Los cuatro dedos excepto el pulgar a nivel metacarpofalángico equivalen a <strong>40%</strong>.</p>
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
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange proximal</div>
                            <div><strong>12%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange distal</div>
                            <div><strong>6%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Dedos 2° al 5°</h3>
                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Nivel de amputación</div>
                            <div>Incapacidad</div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange proximal</div>
                            <div><strong>3%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange media</div>
                            <div><strong>2%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div>Falange distal</div>
                            <div><strong>1%</strong></div>
                        </div>
                    </div>

                    <h3 class="mt-40 mb-15">Amputaciones más extensas del pie</h3>
                    <ul class="lista-items-blog mt-20">
                        <li><strong>Amputación transmetatarsiana (los cinco rayos):</strong> 28%.</li>
                        <li><strong>Amputación transmetatarsiana del 1° rayo (el del hallux):</strong> 15%.</li>
                        <li><strong>Amputación transmetatarsiana del 2°, 3° o 4° rayo:</strong> 5% cada uno.</li>
                        <li><strong>Amputación transmetatarsiana del 5° rayo:</strong> 8%.</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="factores-ponderacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Factores de ponderación: la clave para sumar puntos</a></h2>
                    <p>El porcentaje base de la tabla no es el número final. El Baremo 549/2025 agrega <strong>factores de ponderación</strong> que lo ajustan hacia arriba. Son dos: la <strong>dificultad para la realización de tus tareas habituales</strong> (Leve 5%, Intermedia 10% o Alta 20%) y tu <strong>edad</strong> (5%, 4%, 3% o 2% según el tramo etario, con más porcentaje cuanto más joven sos).</p>

                    <div class="situacion-blog p-25 bg-verde-claro border-radius-15 mb-20">
                        <p class="m-0 fs-09"><?= render_icon('check', 'txt-verde mr-10') ?> <span class="subrayado-amarillo">Ejemplo:</span> perdiste el pulgar a nivel metacarpofalángico (30%) y tu trabajo requiere destreza manual fina (dificultad intermedia, 10%) y tenés menos de 21 años (edad 5%). La suma de factores es 15% y se aplica sobre el porcentaje base: 30% × 1,15 = 34,5% de incapacidad.</p>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con el mito del "5% por mano hábil":</span> circula mucha información vieja sobre un supuesto 5% adicional por lesión en la mano hábil. Ese concepto correspondía al baremo anterior y <strong>no existe en el Decreto 549/2025</strong>. Los únicos incrementos admitidos hoy son los factores de ponderación por dificultad de tareas y por edad, siempre que estén debidamente acreditados en la pericia médica.</p>
                    </div>

                    <p class="mt-20">Además del daño físico, la ley también contempla el <strong>daño psicológico</strong>. En el nuevo baremo las secuelas psíquicas forman parte de la evaluación psicofísica integral y pueden sumar al porcentaje final cuando se acreditan con fundamento pericial.</p>
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
                        <li><strong>Factores de ponderación por edad:</strong> a menor edad, mayor incremento: 5% (menores de 21), 4%, 3% o 2% según el tramo etario.</li>
                        <li><strong>Factores de ponderación por actividad:</strong> si tu trabajo requiere destreza manual fina, el porcentaje puede incrementarse (Leve 5%, Intermedia 10% o Alta 20%).</li>
                        <li><strong>Daño psicológico:</strong> la amputación de un dedo puede generar secuelas psíquicas que forman parte de la evaluación psicofísica integral cuando se acreditan con fundamento pericial.</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="ejemplos-reales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Ejemplos de cálculo para dimensionar tu indemnización</a></h2>
                    <p>La indemnización de pago único se calcula con la fórmula del art. 14 de la Ley 24.557: <strong>53 × Ingreso Base Mensual (IBM) × % de incapacidad × (65 / edad al accidente)</strong>. Usando esa fórmula, mostramos dos ejemplos orientativos (con un IBM hipotético de $1.200.000) para que dimensiones cómo reacciona el monto según el dedo afectado:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Caso (IBM $1.200.000)</div>
                            <div>Incapacidad</div>
                            <div>Indemnización aprox.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Trabajador de 30 años</strong> — amputación del pulgar a nivel metacarpofalángico (30%, sin ponderación)</div>
                            <div>30%</div>
                            <div><strong>≈ $41.340.000</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Trabajador de 40 años</strong> — amputación de un dedo a nivel metacarpofalángico (10%, sin ponderación)</div>
                            <div>10%</div>
                            <div><strong>≈ $10.335.000</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Trabajador de 25 años</strong> — amputación de dos dedos a nivel metacarpofalángico (10% + 10%, sin ponderación)</div>
                            <div>20%</div>
                            <div><strong>≈ $33.072.000</strong></div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Trabajador de 45 años</strong> — amputación de un dedo a nivel interfalángica distal (6%, sin ponderación)</div>
                            <div>6%</div>
                            <div><strong>≈ $5.512.000</strong></div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Estos montos son referenciales:</span> el resultado real varía con tu IBM, tu edad y los factores de ponderación (edad y dificultad de tus tareas). Además, la ART compara el resultado con los pisos mínimos que fija la SRT y pagas el mayor. Para una estimación a tu medida, usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de accidentes de trabajo</a>.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">¿Por qué varía tanto?</span> Porque la fórmula depende de la edad, el salario base, el porcentaje y los factores de ponderación. Dos personas con la misma lesión pueden cobrar montos muy distintos según la fecha del accidente y el ingreso. Tu caso es particular y merece un cálculo a medida.</p>
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
                        <li><span style="font-size: 1.3em;">❌</span> No asegurarse de que se apliquen correctamente los factores de ponderación (edad y dificultad de tareas) en la pericia.</li>
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
                            <p class="mt-15 fs-09">Depende de qué dedo fue y a qué nivel. Por ejemplo, un pulgar amputado a nivel metacarpofalángico vale 30% de incapacidad, mientras que un dedo amputado a nivel del pulpejo (sin lesión ósea) vale 1%. El porcentaje final se usa en la fórmula de la indemnización junto con tu edad y tu salario.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Me corresponden puntos extra si la lesión fue en la mano hábil?</summary>
                            <p class="mt-15 fs-09">Es un mito muy difundido. El Decreto 549/2025 <strong>no contempla ningún 5% adicional por miembro hábil</strong>. Lo que existe son los factores de ponderación por dificultad de las tareas habituales (5%, 10% o 20%) y por edad (5%, 4%, 3% o 2%), que se suman al porcentaje base siempre que estén acreditados en la pericia. Desconfiá de quien te prometa ese "+5% por mano hábil": no está en el baremo vigente.</p>
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