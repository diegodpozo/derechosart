<?php
/**
 * VISTA: CUANTO PAGA LA ART POR ROTURA DE MENISCOS (ARTICULO DE BLOG)
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
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Cuánto paga la ART por rotura de meniscos</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">CUÁNTO PAGA LA ART</span>
                <h1 class="articulo-titulo">Cuánto paga la ART por rotura de meniscos</h1>

                <p class="articulo-lead">La rotura de meniscos es una de las lesiones de rodilla más comunes por esfuerzo laboral. La ART paga según tu porcentaje de incapacidad: en el baremo vigente una lesión meniscal operada vale 4% y una no operada con secuelas, 8%. Te mostramos cuánto te puede tocar con los pisos vigentes y cómo se calcula tu caso.</p>

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
                                <li id="preg-1"><a href="#cuanto-paga-meniscos" class="active"><span class="nav-num">1</span> Cuánto paga la ART por meniscos</a></li>
                                <li id="preg-2"><a href="#porcentajes-meniscos"><span class="nav-num">2</span> Porcentajes de meniscos en el baremo</a></li>
                                <li id="preg-3"><a href="#rodilla-accidente-trabajo"><span class="nav-num">3</span> Cuándo cubre la ART la rodilla</a></li>
                                <li id="preg-4"><a href="#pisos-minimos"><span class="nav-num">4</span> Pisos mínimos vigentes</a></li>
                                <li id="preg-5"><a href="#ejemplo-calculo"><span class="nav-num">5</span> Ejemplo de cálculo</a></li>
                                <li id="preg-6"><a href="#si-art-paga-de-menos"><span class="nav-num">6</span> Si la ART paga de menos</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te lesionaste la rodilla en el trabajo?";
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
                <div id="cuanto-paga-meniscos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Cuánto paga la ART por rotura de meniscos</a></h2>
                    <p>La ART paga una indemnización por la rotura de meniscos cuando la lesión tiene origen laboral, y el monto se arma con tu porcentaje de incapacidad, tu sueldo y tu edad. El valor de la tabla (4% u 8%) es apenas el punto de partida.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El piso de hoy:</span> para incapacidades determinadas entre el 1° de septiembre de 2026 y el 28 de febrero de 2027 (Resolución SRT 39/2026), el mínimo garantizado es de <strong>$114.354.110 por cada punto de incapacidad</strong>. Con el 4% de una meniscectomía, eso significa un mínimo de <strong>$4.574.164</strong>; con el 8% de una lesión no operada con secuelas, <strong>$9.148.329</strong> (en ambos casos, más el 20% si el accidente fue en el trabajo).</p>
                    </div>

                    <p>Ojo con un mito: la mayoría de las "roturas de meniscos" laborales se producen por torsión de la rodilla al girar, al levantar carga o al aterrizar mal de un salto. Si eso te pasó durante tu jornada (o yendo o volviendo del trabajo), la ART tiene que cubrirte el tratamiento completo y, si quedan secuelas, la indemnización.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="porcentajes-meniscos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Porcentajes de meniscos en el baremo vigente</a></h2>
                    <p>El <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral 2026</a> (Decreto 549/2025) asigna porcentajes fijos a las lesiones de rodilla. Para meniscos, los valores de la tabla son:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Lesión meniscal</div>
                            <div>% Decreto 549/2025</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Lesión meniscal operada</strong> (meniscectomía, meniscoplastia o sutura)</div>
                            <div><strong>4%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Lesión meniscal NO operada con hipotrofia muscular, hidrartrosis o bloqueo</strong></div>
                            <div><strong>8%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ruptura completa de ligamento cruzado anterior (LCA)</strong> — lesión que suele acompañar a los meniscos</div>
                            <div><strong>7%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ruptura completa de ligamento cruzado posterior (LCP)</strong></div>
                            <div><strong>4%</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Artroscopia diagnóstica-terapéutica</strong> (lavado, drenaje, exploración)</div>
                            <div><strong>1%</strong></div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-15" style="margin-top:1.25rem;padding:.8rem 1rem;background:var(--gris-claro);border-radius:.9375rem;font-size:.85rem;line-height:1.4;">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula" style="padding:.45rem 1.1rem;font-size:.8rem;white-space:nowrap;border-radius:.5rem;font-weight:700;">Calculadora de accidentes</a>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Tope del miembro inferior:</span> las secuelas de la pierna se suman aritméticamente entre sí, pero sin superar el tope: pie/tobillo 35%, sumando pierna 40%, sumando rodilla 55%, sumando muslo y cadera 70%. Y a todo esto se le agregan los factores de ponderación por edad y dificultad de tareas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="rodilla-accidente-trabajo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cuándo cubre la ART una lesión de rodilla</a></h2>
                    <p>La rodilla es de las articulaciones que más se lesionan en el trabajo. La ART cubre cuando la lesión está <strong>vinculada con tu tarea</strong>:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Situación</div>
                            <div>¿Cubre la ART?</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Torsión de rodilla al levantar carga o al girar durante la jornada</strong></div>
                            <div><strong>SÍ</strong> — es un accidente de trabajo típico.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Rotura de menisco por movimientos repetitivos o posturas forzadas</strong></div>
                            <div><strong>SÍ</strong> — puede encuadrar como enfermedad profesional.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Accidente yendo o volviendo del trabajo (in itinere)</strong></div>
                            <div><strong>SÍ</strong> — con el trayecto habitual declarado.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Lesión jugando al fútbol el fin de semana, sin relación laboral</strong></div>
                            <div><strong>NO</strong> — no guarda vínculo con tu trabajo.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El rechazo típico:</span> la ART suele alegar que la lesión meniscal es "degenerativa" o "preexistente". Si tu examen preocupacional no la registraba y surgió en el trabajo, ese rechazo se puede discutir ante la Comisión Médica.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="pisos-minimos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Pisos mínimos vigentes</a></h2>
                    <p>Como en todos los reclamos por accidente de trabajo, la indemnización nunca puede ser inferior al piso que actualiza la SRT cada seis meses. <strong>Vigentes del 1° de septiembre de 2026 al 28 de febrero de 2027</strong> (<a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>):</p>

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
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Regla simple:</span> se calcula la fórmula (53 × sueldo × % × 65/edad) y se calcula el piso (generalmente más alto para incapacidades bajas). Se paga el mayor de los dos, y si el accidente fue en el trabajo, se suma un 20% adicional.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="ejemplo-calculo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Ejemplo de cálculo</a></h2>
                    <p>Con el piso vigente y el 20% para accidentes en el trabajo, estos son los <strong>mínimos de referencia para lesiones de rodilla con meniscos</strong>:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Incapacidad asignada</div>
                            <div>Mínimo sin el 20%</div>
                            <div>Mínimo si fue en el trabajo (+20%)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>4% (lesión meniscal operada)</strong></div>
                            <div>$4.574.164</div>
                            <div>$5.488.997</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>7% (ruptura de LCA, lesión asociada)</strong></div>
                            <div>$8.004.788</div>
                            <div>$9.605.745</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>8% (lesión meniscal no operada con secuelas)</strong></div>
                            <div>$9.148.329</div>
                            <div>$10.977.995</div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-15" style="margin-top:1.25rem;padding:.8rem 1rem;background:var(--gris-claro);border-radius:.9375rem;font-size:.85rem;line-height:1.4;">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula" style="padding:.45rem 1.1rem;font-size:.8rem;white-space:nowrap;border-radius:.5rem;font-weight:700;">Calculadora de accidentes</a>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo paso a paso</h4>
                        <p class="m-0 fs-09">Un trabajador de 35 años con un sueldo promedio de <strong>$1.400.000</strong> se torció la rodilla <strong>en el trabajo</strong> y le asignan un <strong>8% de incapacidad</strong> por lesión meniscal no operada con secuelas.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 1 — Fórmula:</strong> 53 × $1.400.000 × 0,08 × (65 ÷ 35) = 53 × $1.400.000 × 0,08 × 1,857 = <strong>$11.023.952</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 2 — Piso mínimo:</strong> $114.354.110 × 0,08 = <strong>$9.148.329</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 3 — Se paga el mayor:</strong> $11.023.952 (aquí la fórmula supera al piso).</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 4 — +20% por accidente en el trabajo:</strong> $11.023.952 × 1,20 = <strong>$13.228.742</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><span class="subrayado-amarillo">Resultado:</span> la ART debe pagar <strong>al menos $13.228.742</strong> por este caso.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Calculá el tuyo:</span> estos cálculos son orientativos. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de accidentes</a> o escribinos y lo revisamos con vos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="si-art-paga-de-menos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué hacer si la ART paga de menos o rechaza la rodilla</a></h2>
                    <p>Los reclamos de rodilla se complican cuando la ART alega que la lesión venía de antes o que no fue en el trabajo. Nuestro consejo para que no pierdas plata:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Denunciá el accidente por escrito.</strong> Que tu empleador lo denuncie a la ART. Si no lo hace, denuncialo vos y guardá el comprobante.
                            </li>
                            <li>
                                <strong>2. Conseguí la resonancia y el informe del traumatólogo.</strong> La resonancia es la prueba reina de los meniscos: muestra la lesión y su grado.
                            </li>
                            <li>
                                <strong>3. Nunca aceptes el primer porcentaje sin revisarlo.</strong> Un 4% en vez de 8% (o el riesgo de que no se sumen las secuelas de ligamentos) puede ser millones de diferencia.
                            </li>
                            <li>
                                <strong>4. Asesorarte con una abogada laboralista</strong> antes de firmar el acuerdo de la ART.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo clave:</span> si la ART te ofrece plata "para cerrar ya", revisá antes los estudios. La meniscopatía muchas veces se subestima porque la resonancia no fue bien leída o porque no se ponderan las secuelas asociadas de ligamentos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre meniscos y reclamos a la ART:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto paga la ART por una meniscectomía?</summary>
                            <p class="mt-15 fs-09">En el baremo vigente, la lesión meniscal operada (meniscectomía, meniscoplastia o sutura) vale <strong>4% de incapacidad</strong>. Con el piso de la Res. SRT 39/2026 eso da un mínimo de $4.574.164, más el 20% si el accidente fue en el trabajo, y si tu fórmula supera ese piso se paga la fórmula.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La lesión de menisco sin operar vale más o menos?</summary>
                            <p class="mt-15 fs-09">Puede valer más. La lesión meniscal <strong>no operada con hipotrofia, hidrartrosis o bloqueo</strong> vale <strong>8%</strong> en el Decreto 549/2025, el doble que la operada. No te guíes por la intuición de "mejor sin cirugía": la tabla tiene sus propios criterios.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si además tengo el ligamento cruzado roto?</summary>
                            <p class="mt-15 fs-09">Se suman las secuelas del mismo miembro: por ejemplo, ruptura de LCA (7%) + lesión meniscal operada (4%) = 11%, siempre dentro del tope del miembro inferior que se va acumulando. El porcentaje final se combina con los factores de ponderación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART cubre la cirugía de menisco?</summary>
                            <p class="mt-15 fs-09">Sí. Si la lesión tiene origen laboral, la ART debe cubrir los estudios, la cirugía indicada, la rehabilitación y los medicamentos. Eso no se descuenta de tu indemnización: son prestaciones en especie.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si mis meniscos se rompieron por hacer fuerza todos los días, sin un golpe puntual?</summary>
                            <p class="mt-15 fs-09">Sí. Puede tratarse de una enfermedad profesional o de un accidente por sobreesfuerzo. Lo importante es demostrar el vínculo con la tarea (carga, rotación, posturas) y tener los estudios que lo respalden.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Tuviste una lesión de rodilla en el trabajo?";
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
                            'titulo' => 'Porcentajes de incapacidad por lesión de meniscos',
                            'url' => 'baremo/lesion-rodilla',
                            'descripcion' => 'La tabla completa de rodilla: meniscos, ligamentos, fracturas y prótesis.',
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