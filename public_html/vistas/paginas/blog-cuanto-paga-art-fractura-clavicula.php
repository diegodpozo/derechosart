<?php
/**
 * VISTA: CUANTO PAGA LA ART POR FRACTURA DE CLAVICULA (ARTICULO DE BLOG)
 * ESTRUCTURA FIJA DE ARTICULO DE BLOG DE DERECHOSART.COM.AR
 * MONTOS VIGENTES: Resolucion SRT 39/2026 (01/09/2026 - 28/02/2027). Baremo: Decreto 549/2025 y Ley 24.557.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Cuánto paga la ART por fractura de clavícula</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">CUÁNTO PAGA LA ART</span>
                <h1 class="articulo-titulo">Cuánto paga la ART por fractura de clavícula</h1>

                <p class="articulo-lead">La fractura de clavícula es una de las lesiones más frecuentes en caídas laborales y accidentes de tránsito in itinere. No existe un monto cerrado "por hueso roto": la ART debe indemnizarte según la limitación funcional del hombro, el callo óseo vicioso o la pérdida de fuerza que te haya quedado, con un piso garantizado por ley que supera los $114.000.000 por cada punto de incapacidad. Te mostramos los porcentajes del Baremo 2026, cómo se calcula tu caso y qué hacer si la aseguradora te quiere dar el alta médica con 0%.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Noviembre 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 10 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <?php
            $TldrTexto = "La fractura de clavícula NO tiene un precio fijo: se indemniza según las secuelas funcionales que te queden en el hombro y la cintura escapular (habitualmente entre 3% y 20% según consolidación viciosa, pseudoartrosis o limitación de movilidad). El monto se calcula con la fórmula de la Ley 24.557 (53 x sueldo x % incapacidad x 65 / edad) más el 20% adicional de la Ley 26.773 si ocurrió en el trabajo, y nunca puede ser inferior al piso mínimo vigente de \$114.354.110 por punto (Resolución SRT 39/2026).";
            $TldrFuente = "Decreto 549/2025 (Baremo), Ley 24.557 y Res. SRT 39/2026";
            $TldrFuenteUrl = "https://www.argentina.gob.ar/srt";
            $TldrCalcUrl = "calculadora-accidentes";
            include __DIR__ . '/../componentes/bloque-tldr.php';
        ?>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <div class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#cuanto-paga-clavicula" class="active"><span class="nav-num">1</span> Cuánto paga la ART por fractura de clavícula</a></li>
                                <li id="preg-2"><a href="#como-se-calcula"><span class="nav-num">2</span> Cómo se calcula la indemnización</a></li>
                                <li id="preg-3"><a href="#porcentajes-baremo"><span class="nav-num">3</span> Porcentajes de clavícula en el Baremo 2026</a></li>
                                <li id="preg-4"><a href="#pisos-minimos"><span class="nav-num">4</span> Pisos mínimos vigentes</a></li>
                                <li id="preg-5"><a href="#ejemplos-liquidacion"><span class="nav-num">5</span> Ejemplos de liquidación real</a></li>
                                <li id="preg-6"><a href="#si-art-da-cero"><span class="nav-num">6</span> Si la ART te da el alta con 0%</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Sufriste una fractura de clavícula trabajando?";
                    $descripcion = "Consultá gratis con una abogada especialista en ART. Calculamos tu indemnización real y defendemos tus derechos ante la Comisión Médica.";
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
                <div id="cuanto-paga-clavicula" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Cuánto paga la ART por fractura de clavícula</a></h2>
                    <p>La respuesta concreta: <strong>no existe un monto estándar cerrado por tener la clavícula fracturada</strong>. La Ley de Riesgos del Trabajo N.° 24.557 no fija precios por hueso roto, sino que indemniza la <strong>incapacidad física permanente</strong> que la lesión te deja una vez terminado el tratamiento médico.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El piso legal de hoy:</span> Para cualquier indemnización laboral determinada entre el 1° de septiembre de 2026 y el 28 de febrero de 2027 (Resolución SRT 39/2026), el piso mínimo garantizado es de <strong>$114.354.110 por punto de incapacidad</strong>. Si te reconocen un 6%, nunca podés cobrar menos de <strong>$6.861.246</strong> (monto que sube a <strong>$8.233.496</strong> con el 20% adicional de la Ley 26.773 si el siniestro ocurrió en tu lugar de trabajo).</p>
                    </div>

                    <p>La clavícula cumple un rol fundamental como puntal entre el esternón y el omóplato, sosteniendo todo el peso del brazo y facilitando los movimientos de elevación y rotación del hombro. Por eso, ya sea que te hayan tratado de forma conservadora (con cabestrillo o vendaje en ocho) o con cirugía (osteosíntesis con placa de titanio y tornillos), lo que determina cuánto paga la ART son las <strong>secuelas anatómicas y funcionales comprobables</strong>:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Tipo de secuela en clavícula</div>
                            <div>Qué evalúa la Comisión Médica</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Callo óseo vicioso o deformidad</strong></div>
                            <div>Consolidación con cabalgamiento o deformidad visible en el tercio medio o distal de la clavícula que altera la biomecánica escapular.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Limitación de movilidad en hombro</strong></div>
                            <div>Pérdida de grados en la elevación anterior (flexión), abducción lateral o rotaciones del brazo, medida con goniómetro.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Pseudoartrosis (falta de unión ósea)</strong></div>
                            <div>El hueso no llegó a soldar tras meses de evolución, generando dolor crónico, movilidad anormal y pérdida severa de fuerza.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Secuelas quirúrgicas</strong></div>
                            <div>Cicatrices retráctiles, intolerancia o dolor por material de osteosíntesis (placas/tornillos) que requiera o no segunda cirugía.</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="como-se-calcula" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cómo se calcula la indemnización</a></h2>
                    <p>Para determinar cuánto dinero debe transferirte la ART a tu cuenta bancaria, se aplica la fórmula legal obligatoria del <strong>artículo 14, inciso 2, de la Ley 24.557</strong>, que cruza tres variables exactas:</p>

                    <ol class="lista-ordenada mt-20">
                        <li><strong>Tu sueldo promedio (Ingreso Base Mensual - IBM):</strong> Se calcula promediando las remuneraciones sujetas a aportes de los últimos 12 meses anteriores al accidente, actualizadas por el índice RIPTE (según Ley 27.348).</li>
                        <li><strong>El porcentaje de incapacidad integral:</strong> Es el porcentaje médico que surge del Baremo Laboral más los factores de ponderación (dificultad para tus tareas laborales, necesidad de recalificación y edad).</li>
                        <li><strong>El coeficiente por edad:</strong> Se divide 65 por tu edad al momento del accidente. Cuanto más joven sos, mayor es el multiplicador indemnizatorio.</li>
                    </ol>

                    <div class="bg-gris p-25 border-radius-15 mt-30 centro">
                        <p class="fs-12 fw-700 m-0">Fórmula Legal Básica:</p>
                        <p class="fs-11 txt-amarillo fw-800 my-10">53 × IBM × % Incapacidad × (65 ÷ Edad)</p>
                        <p class="fs-085 txt-gris-medio m-0">Si el accidente fue en el lugar de trabajo: se suma el <strong>20% adicional de la Ley 26.773</strong>.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">La garantía del piso legal:</span> Si el resultado de la fórmula matemática da por debajo del piso legal establecido por la Superintendencia de Riesgos del Trabajo, la aseguradora está obligada por ley a pagar el <strong>monto del piso mínimo</strong>. La ART nunca puede liquidar por debajo de ese resguardo legal.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="porcentajes-baremo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Porcentajes de clavícula en el Baremo 2026</a></h2>
                    <p>En el sistema de riesgos del trabajo rige la Tabla de Evaluación de Incapacidades Laborales del Decreto 659/96 y las pautas actualizadas del <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral 2026</a> (Decreto 549/2025). Las secuelas de clavícula y cintura escapular se dividen de la siguiente manera:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Diagnóstico / Secuela en Clavícula</div>
                            <div>% Incapacidad Baremo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Consolidación viciosa con callo deforme o acortamiento</strong></div>
                            <div><strong>3% a 6%</strong> (habitualmente 4% a 8% según brazo dominante hábil o no hábil)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Pseudoartrosis de clavícula (no consolidada)</strong></div>
                            <div><strong>10% a 18%</strong> según movilidad de fragmentos y dolor residual</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Limitación de movilidad de hombro (abducción &lt; 90°)</strong></div>
                            <div><strong>8% a 20%</strong> medido por goniometría de la cintura escapular</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Luxación acromioclavicular o esternoclavicular recidivante</strong></div>
                            <div><strong>5% a 12%</strong> según inestabilidad articular y secuelas funcionales</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Cicatriz quirúrgica retráctil o dolorosa (post placa)</strong></div>
                            <div><strong>1% a 4%</strong> según extensión estética y compromiso funcional</div>
                        </div>
                    </div>

                    <section class="flex-between flex-wrap gap-15 bg-gris p-15 border-radius-15 fs-08">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula">Calculadora de accidentes</a>
                    </section>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Factores de ponderación:</span> Al porcentaje que da la tabla médica se le suman obligatoriamente puntos adicionales por: dificultad para realizar tu trabajo habitual (hasta +20%), si necesitás recalificación laboral (+10%) y por tu edad (hasta +5%). En trabajadores de la construcción, metalúrgicos, repositores o choferes, estos factores elevan considerablemente el cobro final.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="pisos-minimos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Pisos mínimos vigentes</a></h2>
                    <p>La Superintendencia de Riesgos del Trabajo (SRT) actualiza los importes mínimos semestralmente según el índice RIPTE. Los valores oficiales vigentes para incapacidades notificadas entre el <strong>1° de septiembre de 2026 y el 28 de febrero de 2027</strong> (<a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" target="_blank" rel="noopener">Resolución SRT 39/2026</a>) son:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Concepto Indemnizatorio</div>
                            <div>Piso Mínimo Garantizado</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por Incapacidad Permanente Parcial (art. 14.2)</strong></div>
                            <div><strong>$114.354.110</strong> × el porcentaje de incapacidad que dictamine la SRT</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Piso mínimo por cada 1% de incapacidad</strong></div>
                            <div><strong>$1.143.541</strong> netos como base absoluta de resguardo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional de pago único (art. 11.4 inc. a)</strong></div>
                            <div><strong>$50.824.055</strong> (aplicable si la incapacidad supera el 50%)</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="ejemplos-liquidacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Ejemplos de liquidación real</a></h2>
                    <p>Tomando como base el piso vigente de la Resolución SRT 39/2026 ($114.354.110), te presentamos cuánto representan los pisos mínimos legales garantizados para los grados de incapacidad más habituales en fracturas de clavícula. Recordá que si la fórmula con tu sueldo da más alto, se te abona la fórmula:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>% Incapacidad Estimado</div>
                            <div>Piso Mínimo Legal</div>
                            <div>Con Adicional 20% (Ley 26.773)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>5%</strong> (Callo deforme sin limitación grave)</div>
                            <div><strong>$5.717.705</strong></div>
                            <div><strong>$6.861.246</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>8%</strong> (Callo con limitación leve de hombro)</div>
                            <div><strong>$9.148.329</strong></div>
                            <div><strong>$10.977.995</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>12%</strong> (Cirugía con placa y pérdida de movilidad)</div>
                            <div><strong>$13.722.493</strong></div>
                            <div><strong>$16.466.992</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>16%</strong> (Pseudoartrosis o limitación severa de brazo)</div>
                            <div><strong>$18.296.658</strong></div>
                            <div><strong>$21.955.989</strong></div>
                        </div>
                    </div>

                    <section class="flex-between flex-wrap gap-15 bg-gris p-15 border-radius-15 fs-08">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula">Calculadora de accidentes</a>
                    </section>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">¿Cuándo aplica el 20% adicional?</span> Si la fractura ocurrió dentro del establecimiento laboral o en cumplimiento de tareas encomendadas por tu empleador, la Ley 26.773 (art. 3) suma un 20% directo de compensación adicional. Si el accidente fue <em>in itinere</em> (en el trayecto de ida o vuelta del trabajo), se abona la indemnización de la Ley 24.557 pero sin ese adicional del 20%.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="si-art-da-cero" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Si la ART te da el alta con 0%</a></h2>
                    <p>Esta es la maniobra más repetida por los médicos de las aseguradoras: cuando los rayos X muestran que la línea de fractura se cerró, emiten el <strong>alta médica sin incapacidad (0%)</strong>, argumentando que el hueso consolidó y que ya podés reintegrarte a trabajar con normalidad.</p>
                    <p>Sin embargo, en la enorme mayoría de los casos persisten secuelas como:</p>
                    <ul class="lista-check mt-15">
                        <li>Dolor al levantar peso o levantar el brazo por encima de los 90 grados.</li>
                        <li>Pérdida notoria de fuerza muscular en el brazo afectado.</li>
                        <li>Deformidad visible en el hombro o roce doloroso de la placa de fijación.</li>
                        <li>Imposibilidad de realizar las mismas tareas pesadas que hacías antes.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <div>
                            <h4 class="m-0 fs-10 fw-700">Cómo actuar ante el alta médica:</h4>
                            <p class="m-0 fs-09 mt-10">1. <strong>No te resignes al alta médica con dolor:</strong> Si la ART te da el alta y no estás en condiciones de trabajar, tenés 3 días hábiles para iniciar el trámite de <em>Divergencia en el Alta Médica</em> ante la Comisión Médica de la SRT.<br>
                            2. <strong>Iniciá la Determinación de la Incapacidad:</strong> Si ya pasaron los tratamientos y quedaste con secuelas, se debe abrir el expediente para que los médicos oficiales te evalúen y fijen tu indemnización.<br>
                            3. <strong>Patrocinio letrado obligatorio y gratuito:</strong> La Ley 27.348 exige que asistas con un abogado especialista. Los honorarios de la etapa administrativa están a cargo de la ART; vos nunca tenés que adelantar dinero.</p>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes sobre fractura de clavícula y ART</a></h2>

                    <div class="lista-faq-blog">
                        <details class="bg-gris p-25 border-radius-15 mt-25" open>
                            <summary class="fw-700 pointer">¿Cuánto tarda la ART en pagar la indemnización por fractura de clavícula?</summary>
                            <div class="mt-15">
                                <p class="m-0">Una vez que la Comisión Médica emite el dictamen final con el porcentaje de incapacidad y las partes firman el acuerdo de homologación en el Servicio de Homologación de la SRT, la ART tiene un plazo legal de <strong>15 días hábiles</strong> para depositar el dinero directamente en tu cuenta bancaria (CBU).</p>
                            </div>
                        </details>

                        <details class="bg-gris p-25 border-radius-15 mt-15">
                            <summary class="fw-700 pointer">¿Me corresponde indemnización si la fractura curó sin cirugía?</summary>
                            <div class="mt-15">
                                <p class="m-0">Sí, absolutamente. El derecho a cobrar la indemnización no depende de si te operaron o si usaste un cabestrillo o yeso, sino de las <strong>secuelas físicas</strong> que te quedaron. Si el hueso consolidó con acortamiento, deformidad o si tenés dolor y menor movilidad en el hombro, te corresponde indemnización por baremo.</p>
                            </div>
                        </details>

                        <details class="bg-gris p-25 border-radius-15 mt-15">
                            <summary class="fw-700 pointer">¿La ART debe cubrir la cirugía para retirar la placa y los tornillos?</summary>
                            <div class="mt-15">
                                <p class="m-0">Sí. El material de osteosíntesis muchas veces genera molestias o intolerancia. La ART tiene la obligación de brindar todas las prestaciones médicas necesarias, lo que incluye la intervención quirúrgica de extracción de material, los controles postoperatorios y la rehabilitación kinesiológica correspondiente.</p>
                            </div>
                        </details>

                        <details class="bg-gris p-25 border-radius-15 mt-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la fractura de clavícula fue en moto o colectivo yendo a trabajar?</summary>
                            <div class="mt-15">
                                <p class="m-0">Se trata de un accidente <em>in itinere</em> (art. 6 Ley 24.557). La ART tiene la obligación plena de cubrir la atención médica, los sueldos durante la licencia y la indemnización final por incapacidad. La única diferencia con un accidente en el trabajo es que en el <em>in itinere</em> no aplica el adicional del 20% de la Ley 26.773.</p>
                            </div>
                        </details>

                        <details class="bg-gris p-25 border-radius-15 mt-15">
                            <summary class="fw-700 pointer">¿Puedo perder mi empleo por reclamar la indemnización de la ART?</summary>
                            <div class="mt-15">
                                <p class="m-0">No. La indemnización por incapacidad laboral la paga exclusivamente la compañía aseguradora (la ART), no tu empleador. Reclamar lo que por ley te corresponde por una secuela física es un derecho consagrado que no afecta la relación laboral con la empresa.</p>
                            </div>
                        </details>

                        <details class="bg-gris p-25 border-radius-15 mt-15">
                            <summary class="fw-700 pointer">¿Quién paga los honorarios de la abogada que me representa ante la Comisión Médica?</summary>
                            <div class="mt-15">
                                <p class="m-0">Conforme a la Ley 27.348, los honorarios y gastos del abogado patrocinante en el trámite ante las Comisiones Médicas de la SRT están <strong>a cargo exclusivo de la ART</strong>. En DerechosART trabajamos con el compromiso de que vos no adelantás ningún gasto: solo cobramos si vos cobrás.</p>
                            </div>
                        </details>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <?php
                    $guiasRelacionadas = [
                        [
                            'titulo' => 'Calculadora de indemnizaciones por accidente de ART',
                            'url' => 'calculadora-accidentes',
                            'descripcion' => 'Calculá tu indemnización estimada según tus secuelas, tu edad y tu sueldo.',
                        ],
                        [
                            'titulo' => 'Tabla de incapacidad por lesiones laborales (Baremo 2026)',
                            'url' => 'tabla-incapacidad',
                            'descripcion' => 'Cómo se valúan las secuelas de cintura escapular y hombro según el Decreto 549/2025.',
                        ],
                        [
                            'titulo' => 'Cuánto paga la ART por tendinitis de hombro',
                            'url' => 'blog/cuanto-paga-la-art-por-tendinitis-de-hombro',
                            'descripcion' => 'Valores vigentes y cómo se miden las limitaciones funcionales del manguito rotador.',
                        ],
                        [
                            'titulo' => '¿Qué hacer ante un accidente de trabajo?',
                            'url' => 'que-hacer',
                            'descripcion' => 'Guía paso a paso sobre cómo denunciar el accidente y proteger tus derechos desde el primer día.',
                        ],
                    ];
                    $tituloBloque = 'Guías y herramientas relacionadas';
                    $introBloque = 'Si querés conocer más sobre cómo calcular tu caso o consultar el baremo oficial:';
                    include __DIR__ . '/../componentes/bloque-guias-relacionadas.php';
                ?>

                <div class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                    <span><span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.</span>
                    <span class="italic"><span style="font-size: 2em;">⚖️</span> DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                </div>

                <div class="mt-40">
                    <?php
                        $titulo = "¿Querés saber cuánto te corresponde por tu fractura de clavícula?";
                        $descripcion = "Escribinos por WhatsApp y una abogada especialista de nuestro equipo revisará tu caso y estudios sin cargo.";
                        $ancho = "100%";
                        $margen_top = "1";
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>
                </div>

            </section>
        </article>

        <?php
            $FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo, art. 14 inc. 2), Ley 26.773 (art. 3), Ley 27.348, Decreto 549/2025 (Baremo Laboral 2026) y Resolución SRT 39/2026 (pisos mínimos 01/09/2026 - 28/02/2027).';
            include __DIR__ . '/../componentes/bloque-autor.php';
        ?>

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
