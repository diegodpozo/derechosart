<?php
/**
 * VISTA: CUANTO PAGA LA ART POR LUMBALGIA (ARTICULO DE BLOG)
 * CLONADO DE blog-que-cubre-la-art.php (ESTRUCTURA FIJA DE ARTICULO).
 * MONTOS VIGENTES: Resolucion SRT 39/2026 (01/09/2026 - 28/02/2027). Baremo: Decreto 549/2025.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Cuánto paga la ART por lumbalgia</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">CUÁNTO PAGA LA ART</span>
                <h1 class="articulo-titulo">Cuánto paga la ART por lumbalgia</h1>

                <p class="articulo-lead">La ART no paga "un precio por lumbar": paga según el porcentaje de incapacidad que te reconozcan y los pisos mínimos vigentes. En 2026 el piso es de $114.354.110 por cada punto de incapacidad. Te mostramos cuánto te puede tocar por una lumbalgia, qué lesiones de columna suman más y qué hacer si la ART te da de menos.</p>

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
                                <li id="preg-1"><a href="#cuanto-paga-lumbalgia" class="active"><span class="nav-num">1</span> Cuánto paga la ART por lumbalgia</a></li>
                                <li id="preg-2"><a href="#de-que-depende"><span class="nav-num">2</span> De qué depende el monto</a></li>
                                <li id="preg-3"><a href="#porcentajes-columna"><span class="nav-num">3</span> Porcentajes de columna en el baremo</a></li>
                                <li id="preg-4"><a href="#pisos-minimos"><span class="nav-num">4</span> Pisos mínimos vigentes</a></li>
                                <li id="preg-5"><a href="#ejemplo-calculo"><span class="nav-num">5</span> Ejemplo de cálculo</a></li>
                                <li id="preg-6"><a href="#si-art-paga-de-menos"><span class="nav-num">6</span> Si la ART paga de menos</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés lumbalgia por el trabajo?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos cuánto te puede corresponder, sin cargo.";
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
                <div id="cuanto-paga-lumbalgia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Cuánto paga la ART por lumbalgia</a></h2>
                    <p>La respuesta corta: <strong>no existe un monto fijo "por lumbalgia"</strong>. La ART paga una indemnización que se calcula con tu porcentaje de incapacidad, tu sueldo y tu edad, y que nunca puede ser menor al piso que fija la SRT.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El piso de hoy:</span> para los casos con incapacidad determinada entre el 1° de septiembre de 2026 y el 28 de febrero de 2027 (Resolución SRT 39/2026), el mínimo garantizado es de <strong>$114.354.110 por cada punto de incapacidad</strong>. Si te asignan un 10%, nunca podes cobrar menos de <strong>$11.435.411</strong> (más el 20% si el accidente fue en el trabajo).</p>
                    </div>

                    <p>Punto clave: una "lumbalgia" como síntoma (dolor lumbar) <strong>no suma porcentaje por sí sola</strong> en el baremo vigente. Lo que se indemniza es la secuela objetiva que te haya quedado: una hernia de disco, una fractura vertebral, un compromiso radicular o una limitación de movimiento comprobada con estudios. Cuanto más grave y más comprobada sea esa secuela, mayor es el porcentaje y, por lo tanto, el monto.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>Qué puede indicar</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Dolor lumbar sin lesión objetiva</strong></div>
                            <div>Por regla no genera incapacidad indemnizable en el baremo actual: exige secuela objetivada.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Lumbalgia por sobreesfuerzo laboral</strong></div>
                            <div>Si quedó limitación o lesión de disco, sí se evalúa con estudios (RMN, EMG, goniometría).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Hernia de disco lumbar operada</strong></div>
                            <div>El anexo del Decreto 549/2025 asigna un valor fijo del 5% de incapacidad.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura vertebral lumbar con secuelas</strong></div>
                            <div>Puede llegar a 8% (sin secuelas), 16% (con secuelas) o 24% (con pseudoartrosis).</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="de-que-depende" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> De qué depende el monto</a></h2>
                    <p>Dos trabajadores con la misma lesión de columna pueden cobrar montos muy distintos. La indemnización de pago único se calcula con la fórmula del <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 14, inc. 2, ap. a) de la Ley 24.557</a>:</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic" style="font-size:1.15rem;font-weight:700;">Indemnización = 53 × Ingreso Base Mensual × % de incapacidad × (65 ÷ tu edad)</p>
                    </div>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Qué influye</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Porcentaje de incapacidad</strong></div>
                            <div>El que determina la Comisión Médica según el baremo (Decreto 549/2025) y tus estudios, no el que "opina" la ART.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ingreso Base Mensual (IBM)</strong></div>
                            <div>El promedio de tu sueldo del último año, actualizado por RIPTE para que no pierda valor frente a la inflación.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Tu edad</strong></div>
                            <div>La fórmula (65 ÷ edad) beneficia a los más jóvenes, dándoles un coeficiente mayor.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Factores de ponderación</strong></div>
                            <div>Se suman al porcentaje base según la dificultad de tus tareas (5%, 10% o 20%) y tu edad (2% a 5%).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Piso mínimo de la SRT</strong></div>
                            <div>Siempre se paga el mayor entre el resultado de la fórmula y el piso vigente.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El dato que casi todos pierden:</span> el porcentaje no lo fija la ART. Si te ofrecen un monto "estimado" antes de la evaluación de la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a>, estás negociando con un número que puede no ser el que te corresponde.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="porcentajes-columna" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Porcentajes de columna en el baremo vigente</a></h2>
                    <p>El <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral 2026</a> (Decreto 549/2025) dejó de usar rangos: casi todas las secuelas tienen un porcentaje fijo, y recién después se suman los factores de ponderación. Los valores más comunes en casos de lumbalgia laboral:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Secuela de columna lumbosacra</div>
                            <div>% Decreto 549/2025</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Hernia de disco operada</strong></div>
                            <div><strong>5%</strong> (valor fijo; se puede sumar la limitación funcional objetivada por goniometría)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura lumbar sin secuelas</strong></div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura lumbar con secuelas</strong></div>
                            <div><strong>16%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura lumbar con pseudoartrosis</strong></div>
                            <div><strong>24%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura cervical sin secuelas / con secuelas / pseudoartrosis</strong></div>
                            <div><strong>4% / 8% / 12%</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Topes por sector:</span> la suma de todas las secuelas del sector cervical no puede superar el 40%; la del sector dorsolumbar, el 60%. El dolor, por ser subjetivo, ya no suma puntos solo: por eso es clave no perderse ningún estudio ni control.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="pisos-minimos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Pisos mínimos vigentes</a></h2>
                    <p>La SRT actualiza los pisos cada seis meses con el índice RIPTE. <strong>Los montos vigentes para incapacidades determinadas entre el 1° de septiembre de 2026 y el 28 de febrero de 2027</strong> (<a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>) son:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Prestación</div>
                            <div>Monto mínimo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por incapacidad permanente (art. 14.2, inc. a) y b)</strong></div>
                            <div><strong>$114.354.110</strong> × el porcentaje de incapacidad que te asignen</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional (art. 11.4, inc. a)</strong> — incapacidad mayor al 50%</div>
                            <div><strong>$50.824.055</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional (art. 11.4, inc. b)</strong> — incapacidad igual o mayor al 66%</div>
                            <div><strong>$63.530.069</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Ojo con las fechas:</span> hay estudios que todavía muestran los pisos de la Resolución anterior (15/2026), que venció el 31 de agosto de 2026. Confirmá siempre que te apliquen los valores vigentes para la fecha de tu caso.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="ejemplo-calculo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Ejemplo de cálculo</a></h2>
                    <p>Con el piso vigente ($114.354.110) y el adicional del 20% para accidentes ocurridos en el trabajo, estos son los <strong>mínimos que la ART debe pagar</strong> por las incapacidades más comunes de columna. Si la fórmula da más, se paga la fórmula; esto es lo que nunca puede bajar:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Incapacidad asignada</div>
                            <div>Mínimo sin el 20%</div>
                            <div>Mínimo si fue en el trabajo (+20%)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>5% (hernia de disco operada)</strong></div>
                            <div>$5.717.705</div>
                            <div>$6.861.246</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>8% (fractura lumbar sin secuelas)</strong></div>
                            <div>$9.148.329</div>
                            <div>$10.977.995</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>16% (fractura lumbar con secuelas)</strong></div>
                            <div>$18.296.658</div>
                            <div>$21.955.989</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>24% (fractura lumbar con pseudoartrosis)</strong></div>
                            <div>$27.444.986</div>
                            <div>$32.933.983</div>
                        </div>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo paso a paso</h4>
                        <p class="m-0 fs-09">Un trabajador de 40 años con un sueldo promedio de <strong>$1.200.000</strong> sufre un accidente <strong>en el trabajo</strong> y le asignan un <strong>10% de incapacidad</strong> por una lumbalgia con secuelas.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 1 — Fórmula:</strong> 53 × $1.200.000 × 0,10 × (65 ÷ 40) = <strong>$10.335.000</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 2 — Piso mínimo:</strong> $114.354.110 × 0,10 = <strong>$11.435.411</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 3 — Se paga el mayor:</strong> $11.435.411 (el piso supera a la fórmula).</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 4 — +20% por accidente en el trabajo:</strong> $11.435.411 × 1,20 = <strong>$13.722.493</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><span class="subrayado-amarillo">Resultado:</span> la ART debe pagar <strong>al menos $13.722.493</strong> por este caso.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Calculá el tuyo:</span> estos cálculos son orientativos. Tu caso exacto depende de tu sueldo real, tu edad y los factores de ponderación. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de accidentes</a> o escribinos y lo revisamos con vos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="si-art-paga-de-menos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué hacer si la ART paga de menos o rechaza tu lumbalgia</a></h2>
                    <p>La lumbalgia y las patologías de columna son de los reclamos más discutidos: la ART suele alegar que el cuadro es "degenerativo", "preexistente" o "ajeno al trabajo". Ese rechazo <strong>no es definitivo</strong>, pero hay que actuar con estudios y con patrocinio letrado.</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Denunciá siempre por escrito.</strong> Que tu empleador denuncie el accidente a la ART. Si no lo hace, denuncialo vos. Guardá comprobante y toda constancia médica desde el primer día.
                            </li>
                            <li>
                                <strong>2. Juntá tus estudios.</strong> Resonancia, electromiograma, informes del traumatólogo. El baremo actual exige secuela objetivada: sin estudios, el dolor solo no alcanza.
                            </li>
                            <li>
                                <strong>3. No aceptes el primer porcentaje.</strong> Si la Comisión Médica te da un número que no refleja tu cuadro, se puede impugnar. Unos pocos puntos pueden ser millones de pesos de diferencia.
                            </li>
                            <li>
                                <strong>4. Asesorarte con una abogada laboralista</strong> antes de firmar cualquier acuerdo. Todo lo que firmás vale si estás bien asesorada.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> no dejes pasar el tiempo. La acción prescribe y, además, la negativa de la ART se impugna dentro de plazos acotados. Cuanto antes actúes, más rápido avanza tu reclamo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre lumbalgia y reclamos a la ART:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La lumbalgia por esfuerzo laboral es una enfermedad profesional?</summary>
                            <p class="mt-15 fs-09">Si trabajás con carga, posturas forzadas o gestos repetitivos de la columna y desarrollás un cuadro de columna lumbosacra, puede encuadrar como enfermedad profesional. El Decreto 49/2014 incorporó la hernia discal lumbosacra por esas tareas. Como la ART suele rechazar estos cuadros, muchas veces el origen laboral se acredita ante la Comisión Médica o en la Justicia.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto me dan por una lumbalgia en el baremo actual?</summary>
                            <p class="mt-15 fs-09">La lumbalgia no tiene un porcentaje fijo en el baremo: se valora según la secuela que te quede objetivada, como una limitación funcional de la columna medida con goniometría o un compromiso radicular. Por eso los dictámenes pueden ir de unos pocos puntos hasta porcentajes mayores, y lo que define el caso son tus estudios y cómo te evalúen.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me paga el tratamiento de la lumbalgia?</summary>
                            <p class="mt-15 fs-09">Sí, mientras el cuadro tenga origen laboral. La ART debe cubrir tratamientos, rehabilitación, estudios y medicamentos, incluso la cirugía si está indicada. La cobertura médica no se descuenta de la indemnización.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la ART dice que mi lumbalgia es "degenerativa"?</summary>
                            <p class="mt-15 fs-09">Ese es el rechazo más común. Si tu trabajo agravó o generó la lesión, el cuadro puede ser indemnizable igual. Ese origen se discute con tus estudios médicos y, si la ART mantiene la negativa, ante la Comisión Médica.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuántos puntos me pueden dar por lumbalgia?</summary>
                            <p class="mt-15 fs-09">Solo los que estén objetivados: como el dolor no suma por sí mismo, el porcentaje surge de la secuela comprobada (hernia de disco, fractura, compromiso radicular o limitación funcional con goniometría). Por eso conviene presentarse con todos los estudios a la evaluación.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te rechazaron la cobertura o te dieron de menos?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento, sin cargo y sin compromiso.";
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

        <?php
            $FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo, art. 14 inc. 2), Ley 26.773, Ley 27.348, Decreto 549/2025 (Baremo Laboral 2026) y Resolución SRT 39/2026 (pisos mínimos 01/09/2026 - 28/02/2027).';
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