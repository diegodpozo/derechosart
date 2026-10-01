<?php
/**
 * VISTA: CUANTO PAGA LA ART POR HERNIA DE DISCO (ARTICULO DE BLOG)
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
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Cuánto paga la ART por hernia de disco</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">CUÁNTO PAGA LA ART</span>
                <h1 class="articulo-titulo">Cuánto paga la ART por hernia de disco</h1>

                <p class="articulo-lead">La hernia de disco es una de las enfermedades profesionales más reclamadas y, a la vez, de las más rechazadas por la ART. En el baremo vigente, la hernia de disco operada tiene un valor fijo del 5% de incapacidad. Te mostramos cuánto representa eso en plata con los pisos actuales, cuándo te corresponde y cómo defenderte del típico rechazo por "degenerativa".</p>

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
                                <li id="preg-1"><a href="#cuanto-paga-hernia" class="active"><span class="nav-num">1</span> Cuánto paga la ART por hernia de disco</a></li>
                                <li id="preg-2"><a href="#es-enfermedad-profesional"><span class="nav-num">2</span> ¿Es enfermedad profesional?</a></li>
                                <li id="preg-3"><a href="#porcentajes-columna"><span class="nav-num">3</span> Porcentajes de columna en el baremo</a></li>
                                <li id="preg-4"><a href="#pisos-minimos"><span class="nav-num">4</span> Pisos mínimos vigentes</a></li>
                                <li id="preg-5"><a href="#ejemplo-calculo"><span class="nav-num">5</span> Ejemplo de cálculo</a></li>
                                <li id="preg-6"><a href="#art-la-rechaza"><span class="nav-num">6</span> Si la ART la rechaza</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te diagnosticaron hernia de disco por el trabajo?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento, sin cargo.";
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
                <div id="cuanto-paga-hernia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Cuánto paga la ART por hernia de disco</a></h2>
                    <p>El baremo vigente asigna a la hernia de disco operada un valor fijo del <strong>5% de incapacidad</strong>. Es el dato que casi nadie conoce antes de reclamar y que hoy se traduce en un mínimo de <strong>$5.717.705</strong>, que sube a <strong>$6.861.246</strong> si tu accidente o enfermedad fue en el trabajo (con el +20%).</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El piso de hoy:</span> para incapacidades determinadas entre el 1° de septiembre de 2026 y el 28 de febrero de 2027 (Resolución SRT 39/2026), cada punto de incapacidad se paga como mínimo <strong>$114.354.110</strong>. El 5% de la hernia operada se multiplica por ese piso y el resultado es <strong>$5.717.705</strong>.</p>
                    </div>

                    <p>Atención: ese 5% es la base. Si además tenés una <strong>limitación funcional de la columna objetivada</strong> (por goniometría) u otras secuelas del mismo sector, se suman dentro del tope del 60% para el sector dorsolumbar (o 40% para el cervical). Y después se agregan los factores de ponderación por edad y dificultad de tareas. El 5% suele ser el punto de partida, no el techo.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="es-enfermedad-profesional" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿La hernia de disco es una enfermedad profesional?</a></h2>
                    <p>Sí, en los casos típicos. La <strong>hernia discal lumbosacra</strong> está reconocida como enfermedad profesional desde el <strong>Decreto 49/2014</strong>, que la incorporó para tareas que requieren <strong>levantar, trasladar, mover o empujar objetos pesados</strong>, así como movimientos repetitivos o posiciones forzadas de la columna lumbosacra.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Tipo de tarea</div>
                            <div>Riesgo de hernia de disco</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Carga y manipulación de pesos</strong></div>
                            <div>Mudanzas, depósitos, construcción, industria: el esfuerzo de columna es el riesgo número uno.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Movimientos repetitivos de columna</strong></div>
                            <div>Líneas de producción, tareas que exigen agacharse y enderezarse todo el día.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Posturas forzadas mantenidas</strong></div>
                            <div>Enfermería (movilizar pacientes), conductores, operadores de maquinaria con vibración.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Operadores de perforadoras, tractores y grúas</strong></div>
                            <div>La vibración de cuerpo entero es agente de riesgo contemplado por el Decreto 49/2014.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El rechazo típico de la ART:</span> "es degenerativa", "es preexistente". Es el argumento más usado, y la mayoría de las veces se desmonta con estudios (resonancia) que muestran la hernia y la causa del trabajo. No te conformes con la primera negativa.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="porcentajes-columna" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Porcentajes de columna en el baremo vigente</a></h2>
                    <p>El <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral 2026</a> (Decreto 549/2025) asigna valores fijos a las secuelas de columna. Los que más se ven en reclamos por hernia de disco:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Secuela de columna</div>
                            <div>% Decreto 549/2025</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Hernia de disco operada</strong> (cualquier nivel)</div>
                            <div><strong>5%</strong> (más limitación funcional objetivada si corresponde)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura vertebral cervical</strong> sin secuelas / con secuelas / pseudoartrosis</div>
                            <div><strong>4% / 8% / 12%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Fractura vertebral lumbar</strong> sin secuelas / con secuelas / pseudoartrosis</div>
                            <div><strong>8% / 16% / 24%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Luxación vertebral con espondilolistesis residual &lt; 50%</strong></div>
                            <div><strong>15%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Luxación vertebral con espondilolistesis residual ≥ 50%</strong></div>
                            <div><strong>20%</strong></div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-15" style="margin-top:1.25rem;padding:.8rem 1rem;background:var(--gris-claro);border-radius:.9375rem;font-size:.85rem;line-height:1.4;">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula" style="padding:.45rem 1.1rem;font-size:.8rem;white-space:nowrap;border-radius:.5rem;font-weight:700;">Calculadora de accidentes</a>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Topes por sector:</span> todas las secuelas del sector dorsolumbar se suman entre sí, pero sin pasar del <strong>60%</strong>; las del sector cervical, del <strong>40%</strong>. El dolor solo no suma puntos: necesitás estudios que objetiven la secuela. Si querés ver todas las lesiones de columna que cubre la ART y sus valores, mirá las <a href="<?= BASE_URL ?>preguntas-frecuentes/lesiones" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre lesiones de columna</a>.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="pisos-minimos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Pisos mínimos vigentes</a></h2>
                    <p>La indemnízación nunca puede ser inferior al piso que actualiza la SRT cada seis meses. <strong>Vigentes del 1° de septiembre de 2026 al 28 de febrero de 2027</strong> (<a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>):</p>

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
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Cuidado con las fechas de los montos:</span> la Resolución anterior (15/2026) venció el 31 de agosto de 2026. Asegurate de que te liquidem con los valores vigentes para tu caso.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="ejemplo-calculo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Ejemplo de cálculo</a></h2>
                    <p>Con el piso vigente y el 20% para casos en el trabajo, estos son los <strong>mínimos de referencia</strong> según el porcentaje que te asignen por una hernia de disco y secuelas de columna:</p>

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
                            <div><strong>10% (con limitación funcional)</strong></div>
                            <div>$11.435.411</div>
                            <div>$13.722.493</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>16% (con fractura lumbar con secuelas)</strong></div>
                            <div>$18.296.658</div>
                            <div>$21.955.989</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>24% (con fractura lumbar con pseudoartrosis)</strong></div>
                            <div>$27.444.986</div>
                            <div>$32.933.983</div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-15" style="margin-top:1.25rem;padding:.8rem 1rem;background:var(--gris-claro);border-radius:.9375rem;font-size:.85rem;line-height:1.4;">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula" style="padding:.45rem 1.1rem;font-size:.8rem;white-space:nowrap;border-radius:.5rem;font-weight:700;">Calculadora de accidentes</a>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo paso a paso</h4>
                        <p class="m-0 fs-09">Un operario de depósito de 38 años con un sueldo promedio de <strong>$1.500.000</strong> sufre una hernia de disco lumbar operada <strong>en el trabajo</strong> y le asignan el <strong>5%</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 1 — Fórmula:</strong> 53 × $1.500.000 × 0,05 × (65 ÷ 38) = 53 × $1.500.000 × 0,05 × 1,71 = <strong>$6.797.368</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 2 — Piso mínimo:</strong> $114.354.110 × 0,05 = <strong>$5.717.705</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 3 — Se paga el mayor:</strong> $6.797.368 (aquí la fórmula supera al piso).</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 4 — +20% por caso en el trabajo:</strong> $6.797.368 × 1,20 = <strong>$8.156.841</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><span class="subrayado-amarillo">Resultado:</span> la ART debe pagar <strong>al menos $8.156.841</strong> por este caso.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Calculá el tuyo:</span> estos cálculos son orientativos y el resultado real varía con tu sueldo, tu edad y los factores de ponderación. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de accidentes</a> o escribinos y lo revisamos con vos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="art-la-rechaza" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué hacer si la ART rechaza tu hernia de disco</a></h2>
                    <p>Es el reclamo de ART con más rechazos injustificados del sistema. Si te dijeron que es "degenerativa" o "preexistente", estos son los pasos que recomendamos:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Pedí la negativa por escrito.</strong> Ahí quedan los motivos exactos del rechazo y eso es lo que se impugna.
                            </li>
                            <li>
                                <strong>2. Guardá la resonancia y el informe del neurocirujano.</strong> La RMN es la prueba clave: muestra la hernia, el nivel y la compresión nerviosa.
                            </li>
                            <li>
                                <strong>3. Revisá si tu examen preocupacional la registraba.</strong> Si no figuraba, el argumento de la "preexistencia" se cae.
                            </li>
                            <li>
                                <strong>4. Iniciá el reclamo ante la Comisión Médica</strong> y, si el resultado no te conforma, se avanza en la instancia que corresponda.
                            </li>
                            <li>
                                <strong>5. Asesorarte con una abogada laboralista</strong> lo antes posible: los plazos de impugnación son acotados.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Dato que ayuda:</span> las hernias de disco por trabajo suelen aparecer en trabajadores jóvenes sin antecedentes degenerativos. El perfil del paciente + el tipo de tarea son argumentos fuertes para el origen laboral.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre hernia de disco y ART:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto paga la ART por una hernia de disco operada?</summary>
                            <p class="mt-15 fs-09">El baremo vigente (Decreto 549/2025) asigna un valor fijo del <strong>5%</strong> a la hernia de disco operada, sin distinguir el nivel. Con el piso de la Res. SRT 39/2026 eso da un mínimo de $5.717.705, que puede crecer con la limitación funcional objetivada, los factores de ponderación y el +20% si el caso fue en el trabajo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La hernia de disco sin operar se indemniza?</summary>
                            <p class="mt-15 fs-09">Depende de las secuelas. Si no se opera pero te quedó una limitación funcional objetivada (goniometría) o compromiso radicular, se valora con las tablas de columna. Lo que no suma por sí solo es el dolor: el baremo exige secuela comprobada con estudios.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tarda el trámite de una hernia de disco laboral?</summary>
                            <p class="mt-15 fs-09">Depende del caso: desde la denuncia hasta la determinación de la incapacidad pueden pasar varios meses. Si la ART rechaza o no avanza con la evaluación, el trámite se extiende. Cuanto antes actúes, más rápido avanza.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me cubre la cirugía de la hernia?</summary>
                            <p class="mt-15 fs-09">Sí, si el cuadro tiene origen laboral. La ART debe cubrir estudios, cirugía, internación, rehabilitación y medicamentos. La cobertura médica no se descuenta de la indemnización.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">Si la hernia es cervical por levantar peso, ¿es igual de válida que la lumbar?</summary>
                            <p class="mt-15 fs-09">Sí, la hernia discal puede aparecer en distintos niveles y todas se evalúan con las tablas de columna del baremo. El sector cervical tiene su propio tope (40%) y las tareas de esfuerzo cervical (posturas, sobreesfuerzo) también habilitan el reclamo.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te rechazaron la hernia de disco?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento, sin cargo y sin compromiso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- CRUCE SEO/GEO: EL BLOG EXPLICA EL CASO, LA PAGINA DE BAREMO DA EL DATO OFICIAL -->
                <?php
                    $guias = [
                        [
                            'titulo' => 'Tabla de porcentajes por hernia de disco',
                            'url' => 'baremo/enfermedades-profesionales',
                            'descripcion' => 'Qué incapacidad asigna el Baremo 2026 a la hernia discal como enfermedad profesional.',
                        ],
                    ];
                    $tituloBloque = 'Ver los porcentajes oficiales';
                    $introBloque = 'Esta guía explica el monto y el reclamo. Si lo que querés es el <strong>porcentaje de incapacidad que establece la tabla</strong>, está en:';
                    include __DIR__ . '/../componentes/bloque-guias-relacionadas.php';
                ?>

                <div class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                    <span><span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.</span>
                    <span class="italic"><span style="font-size: 2em;">⚖️</span> DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                </div>

            </section>
        </article>

        <?php
            $FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo, art. 14 inc. 2), Ley 26.773, Ley 27.348, Decreto 49/2014 (enfermedades profesionales), Decreto 549/2025 (Baremo Laboral 2026) y Resolución SRT 39/2026 (pisos mínimos 01/09/2026 - 28/02/2027).';
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