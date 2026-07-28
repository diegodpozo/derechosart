<?php
/**
 * VISTA: BAREMO 2026 COMPLETO EXPLICADO CON EJEMPLOS REALES (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>tabla-incapacidad">Baremo Laboral 2026</a> &gt; <span class="txt-amarillo">Baremo Completo</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">BAREMO 2026</span>
                <h1 class="articulo-titulo">Baremo Laboral 2026: los porcentajes reales del Decreto 549/2025 y cómo defender tu incapacidad</h1>

                <p class="articulo-lead">Si tuviste un accidente de trabajo o una enfermedad profesional, hay un número que define todo: el porcentaje de incapacidad que te asignen. De ahí sale el monto de tu indemnización. Desde febrero de 2026 ese número se calcula con una tabla nueva, el Baremo Laboral del Decreto 549/2025, que reemplazó a la que se usaba desde 1996. Repasamos el texto oficial completo y te mostramos, con los porcentajes reales de la norma, cómo se calcula tu caso y qué mirar para que no te liquiden de menos.</p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>BAREMO 2026</strong>
                            <span>Decreto 549/2025</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('calendar-day-solid') ?></div>
                        <div class="char-texto">
                            <strong>VIGENTE</strong>
                            <span>desde 01/02/2026</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('calculator') ?></div>
                        <div class="char-texto">
                            <strong>PORCENTAJES</strong>
                            <span>del anexo oficial</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('handshake-regular') ?></div>
                        <div class="char-texto">
                            <strong>ASESORAMIENTO</strong>
                            <span>sin cargo</span>
                        </div>
                    </div>
                </div>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Julio 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 12 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <li id="preg-1"><a href="#que-es-baremo" class="active"><span class="nav-num">1</span> Qué es el Baremo Laboral 2026</a></li>
                            <li id="preg-2"><a href="#que-cambio"><span class="nav-num">2</span> Qué cambió con el Decreto 549/2025</a></li>
                            <li id="preg-3"><a href="#factores-ponderacion"><span class="nav-num">3</span> Cómo se calcula tu porcentaje</a></li>
                            <li id="preg-4"><a href="#ilpp-ilpt"><span class="nav-num">4</span> ILPP, ILPT y Gran Invalidez</a></li>
                            <li id="preg-5"><a href="#porcentajes-modulo"><span class="nav-num">5</span> Porcentajes reales por módulo</a></li>
                            <li id="preg-6"><a href="#que-se-puede-sumar"><span class="nav-num">6</span> Qué se puede sumar y qué no</a></li>
                            <li id="preg-7"><a href="#impacto-indemnizacion"><span class="nav-num">7</span> Cómo impacta en la indemnización</a></li>
                            <li id="preg-8"><a href="#errores-comunes"><span class="nav-num">8</span> Errores comunes</a></li>
                            <li id="preg-9"><a href="#preguntas-frecuentes-baremo"><span class="nav-num">9</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Te asignaron un porcentaje bajo?";
                    $descripcion = "Revisamos tu caso sin costo y te decimos si te están liquidando de menos.";
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
                <div id="que-es-baremo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es el Baremo Laboral 2026</a></h2>
                    <p>El Baremo Laboral es la tabla oficial que usan las Comisiones Médicas de la SRT —y también los juzgados laborales— para traducir una lesión concreta en un número: el porcentaje de incapacidad laboral permanente. Es obligatoria en todo el país, para que dos personas con la misma secuela reciban el mismo tratamiento, estén en Salta o en CABA.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo primero que tenés que saber:</span> el baremo no lo redacta la ART. Es una norma nacional (Anexo del Decreto 549/2025) que la aseguradora está obligada a respetar al milímetro. Si te asignan un porcentaje que no surge de la tabla, podés impugnarlo ante la Comisión Médica.</p>
                    </div>

                    <p>Después de casi 30 años sin actualizarse, el Poder Ejecutivo aprobó el <strong>Decreto 549/2025</strong>, publicado en el Boletín Oficial el 6 de agosto de 2025, que sustituyó por completo al viejo Anexo I del Decreto 659/1996. Entró en vigencia obligatoria a los 180 días corridos de su publicación, es decir, desde el 1° de febrero de 2026.</p>

                    <p>El nuevo anexo organiza el baremo en capítulos por sistema u órgano: Piel, Osteoarticular, Cabeza y Rostro, Oftalmología, Otorrinolaringología, Sistema Respiratorio, Cardiovascular, Digestivo, Nefro-urológico, Aparato Genital (masculino y femenino), Sistema Hematopoyético, Sistema Nervioso, Psiquiatría, Infectología, Oncología y Toxicología. Cada capítulo tiene su propia tabla de porcentajes fijos.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="que-cambio" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué cambió con el Decreto 549/2025</a></h2>
                    <p>Para quien ya conocía el baremo viejo, estas son las diferencias que más pesan en la práctica, verificadas contra el texto oficial del anexo:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Diferencia</div>
                            <div>Antes (Decreto 659/96)</div>
                            <div>Ahora (Decreto 549/2025)</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Forma del porcentaje</strong></div>
                            <div>Rangos de valoración</div>
                            <div>Porcentaje fijo por secuela, sin intervalos, "con el fin de reducir la discrecionalidad del evaluador"</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>El dolor</strong></div>
                            <div>Podía ponderarse como factor subjetivo</div>
                            <div>Queda expresamente excluido de las tablas por su "carácter subjetivo y variable"</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Metodología ante varias secuelas</strong></div>
                            <div>Más flexible</div>
                            <div>Regla general: método de Capacidad Restante. Excepción expresa: suma aritmética, solo cuando el propio capítulo de la tabla lo indica (columna vertebral y secuelas dentro de un mismo miembro y lateralidad)</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Factores de ponderación</strong></div>
                            <div>Criterios más laxos</div>
                            <div>Dos escalas fijas y taxativas: dificultad para tareas habituales (Leve 5% / Intermedia 10% / Alta 20%) y edad (5%, 4%, 3% o 2% según el tramo etario)</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Examen físico</strong></div>
                            <div>Práctica habitual</div>
                            <div>El anexo deja a criterio del evaluador si es necesario cuando la documentación ya alcanza para identificar la secuela</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Efecto concreto:</span> Que el porcentaje ahora sea fijo tiene un efecto concreto: ya no hay margen para que un buen perito de parte "empuje" tu caso al techo de un rango, como pasaba antes. Eso traslada buena parte de la discusión real a los estudios que respaldan tu diagnóstico y, si el tope de la tabla te resulta insuficiente, a la instancia judicial.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="factores-ponderacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo se calcula tu porcentaje: factores de ponderación con ejemplo</a></h2>
                    <p>El artículo 8°, apartado 3 de la Ley 24.557 exige ponderar, además de la lesión, la edad del trabajador, el tipo de actividad y las posibilidades de reubicación laboral. El anexo del Decreto 549/2025 fijó exactamente cómo se hace ese cálculo:</p>

                    <div class="tabla-plazos mt-30">
                        <h4 class="mb-15">Factor Tipo de Actividad / Reubicación Laboral</h4>
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Grado de dificultad</div>
                                <div>Valor</div>
                            </div>
                            <div class="tr-blog">
                                <div>LEVE — daño principalmente estético, sin necesidad de reubicación</div>
                                <div><strong>5%</strong></div>
                            </div>
                            <div class="tr-blog">
                                <div>INTERMEDIA — excede lo estético pero no amerita reubicación</div>
                                <div><strong>10%</strong></div>
                            </div>
                            <div class="tr-blog">
                                <div>ALTA — el trabajador fue reubicado, necesita serlo, o presenta Incapacidad Total</div>
                                <div><strong>20%</strong></div>
                            </div>
                        </div>
                    </div>

                    <div class="tabla-plazos mt-30">
                        <h4 class="mb-15">Factor Edad</h4>
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Edad del trabajador</div>
                                <div>Valor</div>
                            </div>
                            <div class="tr-blog">
                                <div>Menos de 21 años</div>
                                <div><strong>5%</strong></div>
                            </div>
                            <div class="tr-blog">
                                <div>De 21 a 35 años</div>
                                <div><strong>4%</strong></div>
                            </div>
                            <div class="tr-blog">
                                <div>De 36 a 45 años</div>
                                <div><strong>3%</strong></div>
                            </div>
                            <div class="tr-blog">
                                <div>46 años o más</div>
                                <div><strong>2%</strong></div>
                            </div>
                        </div>
                    </div>

                    <p class="mt-30">Estos dos valores se suman entre sí, y el resultado se aplica como un porcentaje de incremento sobre el porcentaje de la lesión —no se suma en puntos directos—. Así lo muestra el ejemplo del propio anexo oficial:</p>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo del anexo oficial</h4>
                        <p class="m-0 fs-09">Trabajador de 22 años, fractura de húmero derecho sin secuelas (8% según tabla). Dificultad Intermedia (10%) + Edad 4% = 14% de factor de ponderación. El 14% se aplica sobre el 8% base: 1,12 puntos adicionales. <strong>Porcentaje final: 9,12%.</strong></p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">El porcentaje de la tabla es apenas el primer paso.</span> El factor de ponderación puede sumar más de un punto extra según tu edad y tu actividad —y en incapacidades más altas, ese incremento se traduce en más plata—. Por eso conviene que el perito registre bien tu tipo de tareas habituales y si hubo reubicación laboral.</p>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Un dato clave del nuevo baremo:</span> exige que la secuela sea objetivable con estudios complementarios. El dolor, por su carácter subjetivo, dejó de tener un valor propio en las tablas. Esto hace todavía más importante no faltar a ningún control médico ni perder ningún estudio por imágenes.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="ilpp-ilpt" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> ILPP, ILPT y Gran Invalidez: el detalle que muy pocos conocen</a></h2>
                    <p>La Ley 24.557 define tres niveles de incapacidad permanente:</p>

                    <ul class="lista-items-blog mt-20">
                        <li><span class="subrayado-amarillo"><strong>Incapacidad Laboral Permanente Parcial (ILPP):</strong></span> el grado de incapacidad es inferior al 66%. Da derecho a una indemnización de pago único.</li>
                        <li><span class="subrayado-amarillo"><strong>Incapacidad Laboral Permanente Total (ILPT):</strong></span> el daño alcanza o supera el 66%. Habilita una prestación distinta, de pago mensual más una indemnización adicional.</li>
                        <li><span class="subrayado-amarillo"><strong>Gran Invalidez:</strong></span> se suma cuando, además de una ILPT, el trabajador necesita asistencia de otra persona para los actos elementales de la vida diaria.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Esto es lo que casi nadie te explica:</span> el propio anexo del Decreto 549/2025 aclara que si tu lesión está clasificada como Parcial en la tabla, y el factor de ponderación (edad + actividad) hace que el cálculo llegue al 66% o más, el porcentaje queda topado en 65,99%. Es decir, no pasa a ser Incapacidad Total solo por el efecto de la ponderación: para que sea Total, la propia tabla tiene que haberla clasificado así desde el vamos. En cambio, si la tabla te clasifica directamente como Total, el factor de ponderación sí puede llevarte hasta el 100%.</p>
                    </div>

                    <p>Esto significa que cruzar el umbral del 66% depende del tipo de lesión que dice la tabla, no solo de la suma final. Es un punto que conviene revisar con un abogado antes de aceptar cualquier porcentaje que quede "justo debajo" del 66%.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="porcentajes-modulo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Porcentajes reales por módulo clínico</a></h2>
                    <p>Estos son ejemplos concretos, tomados directamente del anexo oficial, para que veas cómo se aplica la tabla en la práctica. Recordá que a cada uno de estos valores todavía hay que sumarle el factor de ponderación por edad y actividad.</p>

                    <h3 class="mt-30 mb-15">Columna vertebral</h3>
                    <ul class="lista-items-blog">
                        <li><strong>Hernia de disco operada: 5%.</strong> Es el único valor específico que el anexo asigna a la hernia discal en la Tabla de Lesiones Discales y Ligamentarias. Si además hay una limitación funcional objetivada por goniometría, esa limitación se pondera aparte.</li>
                        <li><strong>Fracturas vertebrales:</strong> por ejemplo, una fractura de vértebra cervical C3-C7 sin secuelas vale 4%, con secuelas (acuñamiento, aplastamiento, espondilolistesis) 8%, y con pseudoartrosis 12%. Una fractura lumbar L1 sin secuelas vale 8%, con secuelas 16%, con pseudoartrosis 24%.</li>
                        <li><strong>Topes por sector:</strong> la suma de todas las secuelas del sector cervical no puede superar el 40%; la del sector dorsolumbar, el 60%.</li>
                    </ul>

                    <h3 class="mt-30 mb-15">Miembro superior (rodilla, hombro, mano)</h3>
                    <ul class="lista-items-blog">
                        <li><strong>Amputación del pulgar</strong> a nivel de la articulación trapeciometacarpiana: 40%. A nivel de la metacarpofalángica: 30%. A nivel del pulpejo sin lesión ósea: 2%.</li>
                        <li><strong>Amputación de índice, mayor, anular o meñique</strong> a nivel de la metacarpofalángica: 10%. A nivel de la falange distal: 3%.</li>
                        <li><strong>Amputación de los cinco dedos</strong> a nivel del carpo o metacarpofalángico (mano completa): 50%.</li>
                        <li><strong>Ruptura completa del ligamento cruzado anterior:</strong> 7%. Ligamento cruzado posterior: 4%. Ligamento lateral interno o externo: 3% cada uno.</li>
                        <li><strong>Lesión meniscal operada</strong> (meniscectomía, meniscoplastia o sutura): 4%. No operada, con hipotrofia muscular, hidrartrosis o bloqueo: 8%.</li>
                        <li><strong>Topes de suma en el miembro superior:</strong> mano y/o muñeca no puede superar el 50%; sumando antebrazo, el 55%; sumando codo y/o brazo, el 60%; sumando la cintura escapular, el 66% (equivalente a la amputación interescapulotorácica).</li>
                    </ul>

                    <h3 class="mt-30 mb-15">Miembro inferior (tobillo, cadera, pie)</h3>
                    <ul class="lista-items-blog">
                        <li><strong>Desarticulación coxofemoral (cadera):</strong> 70%. Es el tope máximo para el miembro inferior completo.</li>
                        <li><strong>Amputación a nivel de la pierna:</strong> 40%. Amputación tipo Syme (tobillo): 35%.</li>
                        <li><strong>Fractura de tobillo</strong> (cualquiera de los tres maléolos), sin secuelas: 3%; con secuelas: 6%; con pseudoartrosis: 9%.</li>
                        <li><strong>Topes de suma en el miembro inferior:</strong> pie y/o tobillo no puede superar el 35%; sumando pierna, el 40%; sumando rodilla, el 55%; sumando muslo, cadera y/o hemipelvis, el 70%.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Estos son solo algunos ejemplos representativos.</span> El anexo completo tiene decenas de tablas —goniometría, artroplastias, lesiones músculo-tendinosas, nervios periféricos— con reglas propias para cada secuela. El porcentaje final de tu caso puntual solo lo puede determinar un perito médico revisando tu diagnóstico específico contra la tabla completa.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Lo que muchas veces no te cuentan:</span> el anexo habilita a las Comisiones Médicas a resolver "por vía documental" cuando el diagnóstico ya identifica la secuela sin necesidad de examen físico. Si dejás que tu trámite avance sin intervenir, corrés el riesgo de que solo se mire el expediente de la ART. Presentarte con estudios propios (electromiograma, resonancia, goniometría) actualizados cambia el resultado.</p>
                    </div>

                    <!-- ENLACES A PAGINAS DETALLADAS -->
                    <div class="recuadro-ejemplos bg-gris p-25 border-radius-20 mt-30">
                        <h4 class="mb-15">Consultá los porcentajes por zona del cuerpo</h4>
                        <ul class="lista-items-blog">
                            <li><a href="<?= BASE_URL ?>baremo/fracturas-vertebrales" style="color:var(--amarillo);text-decoration:underline;">Columna vertebral: fracturas, hernia de disco y más</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-rodilla" style="color:var(--amarillo);text-decoration:underline;">Rodilla: ligamentos, meniscos y artroscopía</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-hombro" style="color:var(--amarillo);text-decoration:underline;">Hombro y cintura escapular</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-mano-dedo" style="color:var(--amarillo);text-decoration:underline;">Mano, muñeca y dedos</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-femur" style="color:var(--amarillo);text-decoration:underline;">Fémur</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-tibia-perone" style="color:var(--amarillo);text-decoration:underline;">Tibia y peroné</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-tobillo" style="color:var(--amarillo);text-decoration:underline;">Tobillo</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesion-cadera" style="color:var(--amarillo);text-decoration:underline;">Cadera</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/amputaciones-miembro-superior" style="color:var(--amarillo);text-decoration:underline;">Amputaciones del miembro superior</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/lesiones-oculares" style="color:var(--amarillo);text-decoration:underline;">Lesiones oculares</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/cicatrices-rostro" style="color:var(--amarillo);text-decoration:underline;">Cicatrices en rostro</a></li>
                            <li><a href="<?= BASE_URL ?>baremo/enfermedades-profesionales" style="color:var(--amarillo);text-decoration:underline;">Enfermedades profesionales</a></li>
                        </ul>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="que-se-puede-sumar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué se puede sumar y qué no</a></h2>
                    <p>El anexo distingue con precisión cuándo se suma y cuándo no:</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Suma aritmética dentro de un mismo sector o miembro</span> (regla específica del capítulo Osteoarticular): las secuelas de columna vertebral dentro de un mismo sector (cervical, dorsolumbar, sacrococcígeo), y las secuelas osteoarticulares o neurológicas dentro de un mismo miembro y lateralidad, se suman directamente —pero sin superar el tope de ese sector o miembro que vimos en la sección anterior—.</p>
                    </div>

                    <div class="situacion-blog p-25 bg-verde-claro border-radius-15 mb-20">
                        <p class="m-0 fs-09"><?= render_icon('check', 'txt-verde mr-10') ?> <span class="subrayado-amarillo">Capacidad restante</span> (regla general): cuando las secuelas están en distinta región topográfica o distinta lateralidad (por ejemplo, una lesión de rodilla derecha y una hernia de disco), la incapacidad mayor se descuenta primero de la capacidad total; la segunda secuela se calcula sobre lo que queda.</p>
                    </div>

                    <div class="alerta-importante p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Preexistencias:</span> si ya tenías una incapacidad reconocida en la misma zona del cuerpo, se resta el porcentaje puro (sin factores de ponderación) de esa preexistencia antes de calcular el nuevo daño.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="impacto-indemnizacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Cómo impacta tu porcentaje en la indemnización</a></h2>
                    <p>El porcentaje de incapacidad es la variable central, pero la fórmula legal de la indemnización cruza otros datos:</p>

                    <ul class="lista-items-blog mt-20">
                        <li>El porcentaje final, ya con los factores de ponderación aplicados.</li>
                        <li>Tu edad al momento del accidente o de la primera manifestación invalidante.</li>
                        <li>El Ingreso Base Mensual (el promedio actualizado de tus salarios del último año trabajado).</li>
                        <li>Los pisos mínimos indemnizatorios que fija periódicamente la SRT.</li>
                    </ul>

                    <div class="alerta-importante mt-40 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">No aceptes el primer número que te ofrece la ART sin revisarlo con un abogado.</span> Unos pocos puntos de diferencia en el porcentaje pueden representar una diferencia enorme en el monto final. Podés usar nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">Calculadora de Indemnización</a> como primera referencia.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">❓</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">¿Y si la ART no te cita a la junta médica después del alta?</span> Los plazos para reclamar corren igual: tenés 2 años desde el accidente (o desde que el derecho pudo ejercerse) para iniciar el reclamo, conforme al artículo 44 de la Ley 24.557. No te quedes esperando.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="errores-comunes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Errores comunes que le cuestan plata al trabajador</a></h2>
                    <p>Estos son los descuidos que más vemos en el estudio cuando alguien llega después de haber firmado un acuerdo perjudicial o de haber dejado vencer un plazo:</p>

                    <ul class="lista-items-blog blog-errores mt-30">
                        <li><span style="font-size: 1.3em;">❌</span> Aceptar el primer porcentaje que ofrece la ART sin que lo revise un abogado laboralista.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Ir a la junta médica sin estudios propios, confiando solo en los informes de la aseguradora.</li>
                        <li><span style="font-size: 1.3em;">❌</span> No guardar el alta médica, recetas, informes y constancias de cada atención.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Creer que un alta con dolor persistente cierra la posibilidad de reclamar indemnización.</li>
                        <li><span style="font-size: 1.3em;">❌</span> Dejar pasar los plazos formales para impugnar un porcentaje bajo o un rechazo de la contingencia.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El error más caro:</span> firmar el acuerdo de la ART sin auditar el porcentaje contra el baremo vigente. Una vez homologado, revertirlo es mucho más difícil. Si te dieron el alta y no estás de acuerdo con el número, es el momento de consultar, no después de firmar.</p>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">Artículo relacionado</h4>
                        <p class="m-0 fs-09">Si la ART directamente te rechazó el accidente en lugar de asignarte un porcentaje, la vía es distinta. Te la explicamos paso a paso en <a href="<?= BASE_URL ?>blog/art-rechazo-accidente" style="color:inherit;text-decoration:none;">La ART rechazó mi accidente laboral: qué hacer paso a paso</a>.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 9 -->
                <div id="preguntas-frecuentes-baremo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-9"><span class="num-sec">9</span> Preguntas frecuentes sobre el Baremo Laboral 2026</a></h2>
                    <p>Respondemos las dudas más comunes. Cada respuesta es completa en sí misma.</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué es el Baremo Laboral 2026?</summary>
                            <p class="mt-15 fs-09">Es la tabla oficial, aprobada como Anexo del Decreto 549/2025, que usan las Comisiones Médicas de la SRT y los juzgados laborales para asignar un porcentaje de incapacidad a cada tipo de lesión o enfermedad profesional. Entró en vigencia obligatoria el 1° de febrero de 2026 y reemplazó a la tabla que regía desde 1996.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto vale una hernia de disco en el nuevo baremo?</summary>
                            <p class="mt-15 fs-09">El anexo asigna un valor fijo de 5% a la hernia de disco operada. Si además hay una limitación funcional objetivada (por goniometría) o una secuela discal-ligamentaria distinta, esos porcentajes se ponderan de manera adicional según las tablas correspondientes. Es un valor bajo frente a lo que muchos trabajadores esperan, por eso conviene que un especialista revise si corresponden factores adicionales en tu caso.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué diferencia hay entre ILPP, ILPT y Gran Invalidez?</summary>
                            <p class="mt-15 fs-09">La ILPP se da cuando el porcentaje de incapacidad es menor al 66% y da derecho a una indemnización de pago único. La ILPT se configura cuando la propia tabla clasifica la lesión como Total y el porcentaje alcanza o supera el 66%. Un dato importante: si la tabla clasifica tu lesión como Parcial, el porcentaje nunca puede llegar a 66% solo por el efecto de los factores de ponderación —queda topado en 65,99%—. La Gran Invalidez se suma cuando, además de una ILPT, la persona necesita asistencia de otra persona para su vida diaria.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cómo se calculan los factores de ponderación por edad y actividad?</summary>
                            <p class="mt-15 fs-09">Se suman dos valores fijos: uno según la dificultad que la secuela genera para tus tareas habituales (5%, 10% o 20%) y otro según tu edad (5%, 4%, 3% o 2%, siendo más alto cuanto más joven sos). La suma de ambos se aplica como un incremento porcentual sobre el valor de la lesión —no se suma en puntos directos—.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART puede asignarme un porcentaje más bajo que el que marca el baremo?</summary>
                            <p class="mt-15 fs-09">No debería, pero es una práctica frecuente para reducir el costo de la indemnización. Si el dictamen no respeta los parámetros del Decreto 549/2025 para tu lesión, podés impugnarlo e iniciar el trámite de revisión ante la Comisión Médica.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Necesito un abogado para que me revisen el porcentaje que me dio la ART?</summary>
                            <p class="mt-15 fs-09">Para impugnar un porcentaje ante la Comisión Médica, el patrocinio letrado es obligatorio por ley. Además, la ART siempre concurre con equipos médicos y legales propios; ir acompañado de un abogado laboralista y un perito de parte es la forma de asegurarte una valoración justa.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo tengo para reclamar si no estoy de acuerdo con mi porcentaje?</summary>
                            <p class="mt-15 fs-09">El plazo general de prescripción es de 2 años desde el accidente o desde que el derecho pudo ejercerse, según el artículo 44 de la Ley 24.557. Cuanto antes actúes, más fácil es reunir la prueba médica que respalda tu reclamo.</p>
                        </details>
                    </div>

                    <p class="mt-30">Respondemos las dudas más comunes sobre el baremo y cómo se usa. También podés visitar nuestra sección de <a href="<?= BASE_URL ?>faq" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre ART</a> para más información.</p>

                    <!-- CTA WHATSAPP -->
                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te asignaron un porcentaje que no te cierra?";
                            $descripcion = "En DerechosART evaluamos tu caso sin costo y te decimos si el número que te dieron respeta el baremo vigente.";
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
