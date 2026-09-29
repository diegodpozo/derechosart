<?php
/**
 * VISTA: CUANTO PAGA LA ART POR TUNEL CARPIANO (ARTICULO DE BLOG)
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
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Cuánto paga la ART por túnel carpiano</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">CUÁNTO PAGA LA ART</span>
                <h1 class="articulo-titulo">Cuánto paga la ART por síndrome del túnel carpiano</h1>

                <p class="articulo-lead">El síndrome del túnel carpiano no tiene un porcentaje fijo: se mide según el grado de compromiso del nervio mediano que te haya dejado. En la práctica, muchos trabajadores cobran entre el 2% y el 10% de incapacidad. Te mostramos cómo se evalúa, cuánto representa con los pisos vigentes y cómo reclamarlo ante la ART.</p>

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
                                <li id="preg-1"><a href="#cuanto-paga-tunel" class="active"><span class="nav-num">1</span> Cuánto paga la ART por túnel carpiano</a></li>
                                <li id="preg-2"><a href="#como-se-mide"><span class="nav-num">2</span> Cómo se mide la incapacidad</a></li>
                                <li id="preg-3"><a href="#es-enfermedad-profesional"><span class="nav-num">3</span> ¿Es enfermedad profesional?</a></li>
                                <li id="preg-4"><a href="#pisos-minimos"><span class="nav-num">4</span> Pisos mínimos vigentes</a></li>
                                <li id="preg-5"><a href="#ejemplo-calculo"><span class="nav-num">5</span> Ejemplo de cálculo</a></li>
                                <li id="preg-6"><a href="#si-art-paga-de-menos"><span class="nav-num">6</span> Si la ART paga de menos</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés túnel carpiano por tu trabajo?";
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
                <div id="cuanto-paga-tunel" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Cuánto paga la ART por túnel carpiano</a></h2>
                    <p>El síndrome del túnel carpiano <strong>no tiene un valor fijo en el baremo</strong>: se evalúa como una lesión del <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">nervio periférico (el nervio mediano)</a>, según el grado de compromiso motor y sensitivo que tengas. Por eso dos trabajadores con el mismo diagnóstico pueden cobrar montos distintos.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El piso de hoy:</span> para incapacidades determinadas entre el 1° de septiembre de 2026 y el 28 de febrero de 2027 (Resolución SRT 39/2026), cada punto se paga como mínimo <strong>$114.354.110</strong>. Con un 5% (rango medio típico del túnel carpiano), el mínimo es de <strong>$5.717.705</strong>; con un 10%, <strong>$11.435.411</strong> (más el 20% si el caso fue en el trabajo).</p>
                    </div>

                    <p>En la práctica, los dictámenes por túnel carpiano suelen moverse en porcentajes bajos a moderados: cuanto más severa sea la compresión del nervio mediano (y si fue operado o quedó con deterioro de la fuerza de la mano), mayor es el porcentaje. Y si el cuadro afecta <strong>ambas manos</strong>, los porcentajes se suman.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="como-se-mide" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cómo se mide la incapacidad</a></h2>
                    <p>El porcentaje por túnel carpiano se determina con <strong>escalas específicas de función motora y sensitiva del nervio comprometido</strong>. Los pasos que importan:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Qué se evalúa</div>
                            <div>Qué define el porcentaje</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Electromiograma (EMG) y velocidad de conducción nerviosa</strong></div>
                            <div>El estudio clave: mide la compresión real del nervio mediano y su severidad.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compromiso motor</strong></div>
                            <div>Pérdida de fuerza, atrofia o incapacidad para mover el pulgar afectan el porcentaje.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compromiso sensitivo</strong></div>
                            <div>Hormigueo, entumecimiento o pérdida de sensibilidad en los dedos.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Si fue operado o no</strong></div>
                            <div>La cirugía (liberación del nervio) puede dejar secuelas que se evalúan aparte.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Si afecta una o ambas manos</strong></div>
                            <div>Con compromiso bilateral, los porcentajes de cada mano se suman.</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">El estudio que no puede faltar:</span> sin un electromiograma que objetive la compresión, el reclamo pierde fuerza. Andá a la evaluación con el EMG actualizado hecho por tu neurólogo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="es-enfermedad-profesional" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> ¿El túnel carpiano es una enfermedad profesional?</a></h2>
                    <p>Sí, es una de las enfermedades profesionales más frecuentes del sistema. Se reconoce como tal cuando aparece por <strong>movimientos repetitivos de la mano y la muñeca</strong> o por uso de <strong>herramientas que vibran</strong>. Los casos típicos:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Tipo de tarea</div>
                            <div>Ejemplos</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Trabajo en líneas de producción</strong></div>
                            <div>Ensamblado, empaquetado, tareas de fuerza manual repetida.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Uso intenso de la computadora</strong></div>
                            <div>Jornadas largas de tipeo o manejo de mouse sin pausas.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Herramientas vibratorias</strong></div>
                            <div>Amoladoras, martillos neumáticos, taladros.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Gastronomía y vendedores</strong></div>
                            <div>Movimientos repetidos de cortar, mezclar o escanear productos.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El rechazo típico:</span> la ART suele decir que es "habitual" o "por tu actividad extra-laboral". Si no figuraba en tu examen preocupacional y apareció con el trabajo, ese rechazo se discute ante la Comisión Médica con el EMG y la descripción de tus tareas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="pisos-minimos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Pisos mínimos vigentes</a></h2>
                    <p>Como en todo reclamo por ART, la indemnización nunca puede bajar del piso que fija la SRT. <strong>Vigentes del 1° de septiembre de 2026 al 28 de febrero de 2027</strong> (<a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>):</p>

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
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Cuidado con las fechas:</span> algunos montos que circulan son de la Resolución 15/2026, que venció el 31 de agosto de 2026. Confirmá que te paguen con los valores vigentes para tu caso.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="ejemplo-calculo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Ejemplo de cálculo</a></h2>
                    <p>Con el piso vigente y el 20% para casos en el trabajo, estos son los <strong>mínimos de referencia</strong> para los porcentajes típicos del túnel carpiano:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Incapacidad asignada</div>
                            <div>Mínimo sin el 20%</div>
                            <div>Mínimo si fue en el trabajo (+20%)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>2% (compromiso leve)</strong></div>
                            <div>$2.287.082</div>
                            <div>$2.744.499</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>5% (compromiso moderado)</strong></div>
                            <div>$5.717.705</div>
                            <div>$6.861.246</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>8% (secuela importante)</strong></div>
                            <div>$9.148.329</div>
                            <div>$10.977.995</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>10% (bilateral o con cirugía y secuelas)</strong></div>
                            <div>$11.435.411</div>
                            <div>$13.722.493</div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-15" style="margin-top:1.25rem;padding:.8rem 1rem;background:var(--gris-claro);border-radius:.9375rem;font-size:.85rem;line-height:1.4;">
                        <p class="m-0">*porcentajes a nivel explicativo. Para hacer tu cálculo personalizado, andá a</p>
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn-capsula" style="padding:.45rem 1.1rem;font-size:.8rem;white-space:nowrap;border-radius:.5rem;font-weight:700;">Calculadora de accidentes</a>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo paso a paso</h4>
                        <p class="m-0 fs-09">Una operaria de línea de producción de 45 años con un sueldo promedio de <strong>$1.300.000</strong> desarrolla túnel carpiano bilateral <strong>por su trabajo</strong> y le asignan el <strong>8%</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 1 — Fórmula:</strong> 53 × $1.300.000 × 0,08 × (65 ÷ 45) = 53 × $1.300.000 × 0,08 × 1,444 = <strong>$7.958.489</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 2 — Piso mínimo:</strong> $114.354.110 × 0,08 = <strong>$9.148.329</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 3 — Se paga el mayor:</strong> $9.148.329 (el piso supera a la fórmula).</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 4 — +20% por caso en el trabajo:</strong> $9.148.329 × 1,20 = <strong>$10.977.995</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><span class="subrayado-amarillo">Resultado:</span> la ART debe pagar <strong>al menos $10.977.995</strong> por este caso.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Calculá el tuyo:</span> estos montos son orientativos. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de accidentes</a> o escribinos y lo revisamos con vos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="si-art-paga-de-menos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué hacer si la ART paga de menos o rechaza el túnel carpiano</a></h2>
                    <p>Es un reclamo que necesita preparación, porque la ART suele minimizar el cuadro o atribuirlo a la vida personal. Los pasos que recomendamos:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Denunciá la enfermedad por escrito.</strong> Que tu empleador la denuncie a la ART. Si no lo hace, denunciala vos y guardá el comprobante.
                            </li>
                            <li>
                                <strong>2. Hacete el electromiograma (EMG).</strong> Es la prueba que objetiva la compresión del nervio mediano y define el porcentaje.
                            </li>
                            <li>
                                <strong>3. Describí por escrito tus tareas.</strong> Movimientos repetidos, fuerza manual, herramientas vibratorias: eso demuestra el vínculo con el trabajo.
                            </li>
                            <li>
                                <strong>4. No aceptes el primer porcentaje sin revisarlo.</strong> Un punto de diferencia puede ser más de un millón de pesos.
                            </li>
                            <li>
                                <strong>5. Asesorarte con una abogada laboralista</strong> antes de firmar cualquier acuerdo.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> no dejes pasar el tiempo ni te quedes con la primera negativa. El túnel carpiano bilateral y los casos con compromiso de la fuerza suelen estar subestimados en la primera evaluación.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre túnel carpiano y ART:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto paga la ART por síndrome del túnel carpiano?</summary>
                            <p class="mt-15 fs-09">No hay un valor fijo: el porcentaje se mide según el compromiso del nervio mediano (motor y sensitivo) con escalas específicas. Con el piso de la Res. SRT 39/2026, un 5% representa un mínimo de $5.717.705, y un 10%, $11.435.411 (más el 20% si el caso fue en el trabajo).</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué porcentaje me pueden dar por túnel carpiano?</summary>
                            <p class="mt-15 fs-09">Depende de la severidad de la compresión que muestre el EMG y de si quedó deterioro de fuerza. Los dictámenes suelen moverse entre el 2% y el 10%; con compromiso bilateral o secuelas de cirugía, los valores tienden a ser más altos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Si me operan del túnel carpiano cobro más?</summary>
                            <p class="mt-15 fs-09">No automáticamente: lo que se indemniza es la secuela que te queda, no la operación en sí. Si la cirugía dejó limitación funcional o el cuadro avanzó en su compromiso, eso sí puede sumar porcentaje y, por lo tanto, plata.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si tengo túnel carpiano en las dos manos?</summary>
                            <p class="mt-15 fs-09">Los porcentajes de cada mano se suman. Ese es un punto que muchas veces se pierde en la primera evaluación: el reclamo bilateral suele terminar en un porcentaje considerablemente mayor.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me paga el tratamiento del túnel carpiano?</summary>
                            <p class="mt-15 fs-09">Sí, si el cuadro tiene origen laboral: consultas, estudios (EMG), kinesiología y la cirugía si está indicada. La cobertura médica no se descuenta de la indemnización.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te rechazaron el túnel carpiano?";
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
            $FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo, art. 14 inc. 2), Ley 26.773, Ley 27.348, Decreto 658/96 y Decreto 49/2014 (enfermedades profesionales), Decreto 549/2025 (Baremo Laboral 2026) y Resolución SRT 39/2026 (pisos mínimos 01/09/2026 - 28/02/2027).';
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