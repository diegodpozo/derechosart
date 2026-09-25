<?php
/**
 * VISTA: NUEVOS PISOS MINIMOS EN INDEMNIZACION POR ACCIDENTES (ARTICULO DE BLOG)
 * PORTADO desde maqueta-cuanto-cobro-accidente.html (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css), render_icon(),
 * el componente cta-whatsapp.php y el componente bloque-autor.php.
 * MONTOS VIGENTES: Resolucion SRT 39/2026 (01/09/2026 - 28/02/2027).
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Nuevos pisos mínimos</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Nuevos pisos mínimos en indemnización por accidentes</h1>

                <h2 class="articulo-lead fw-800">¿Cuánto me corresponde cobrar por un accidente de trabajo en 2026?</h2>

                <p class="articulo-lead">No hay un monto único: tu indemnización depende de tu sueldo, tu edad, el porcentaje de incapacidad que te asignen y un piso mínimo que la SRT actualiza cada 6 meses. Te explicamos la fórmula exacta, los valores vigentes hoy y te damos ejemplos reales de cálculo para que sepas cuánto te corresponde antes de que la ART te haga una oferta.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 9 min</span>
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
                                <li id="preg-1"><a href="#respuesta-corta" class="active"><span class="nav-num">1</span> La respuesta corta</a></li>
                                <li id="preg-2"><a href="#formula-oficial"><span class="nav-num">2</span> La fórmula oficial</a></li>
                                <li id="preg-3"><a href="#pisos-minimos-vigentes"><span class="nav-num">3</span> Pisos mínimos vigentes (sept. 2026)</a></li>
                                <li id="preg-4"><a href="#ejemplos-reales"><span class="nav-num">4</span> Ejemplos de cálculo reales</a></li>
                                <li id="preg-5"><a href="#que-no-es-indemnizacion"><span class="nav-num">5</span> Qué pagos NO son la indemnización</a></li>
                                <li id="preg-6"><a href="#art-ofrece-menos"><span class="nav-num">6</span> Por qué la ART ofrece de menos</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te hicieron una oferta?";
                    $descripcion = "Revisamos tu liquidación sin costo y te decimos si el número que te ofrecen es el correcto.";
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
                <div id="respuesta-corta" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> La respuesta corta</a></h2>
                    <p>La indemnización por un accidente de trabajo se calcula con la fórmula del <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/200000-204999/202008/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 14, inc. 2, ap. a) de la Ley 24.557</a>, pero la ley garantiza que nunca cobres menos que un <strong>piso mínimo</strong> que la SRT actualiza cada seis meses. La respuesta, entonces, es doble:</p>

                    <div class="recuadro-ejemplos bg-gris p-25 border-radius-20 mt-20">
                        <p class="m-0 fs-09"><strong>Si la fórmula da más:</strong> cobrás el resultado de la fórmula.<br>
                        <strong>Si la fórmula da menos:</strong> cobrás el piso mínimo.<br>
                        <span class="subrayado-amarillo"><strong>Siempre se paga el valor más alto. Y si el accidente fue en el trabajo (no de ida o vuelta), se suma un 20% adicional.</strong></span></p>
                    </div>

                    <p>El piso mínimo que rige <strong>ahora mismo</strong> (del 1° de septiembre de 2026 al 28 de febrero de 2027, <a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>) es de <strong>$114.354.110 por cada punto de incapacidad</strong>. O sea:</p>

                    <div class="alerta-importante mt-20 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">En criollo:</span> si te asignan un 10% de incapacidad, tu indemnización <strong>nunca puede ser menor a $11.435.411</strong> (más el 20% si no fue in itinere). Si te asignan un 20%, nunca menos de $22.870.822. Y así con cualquier porcentaje.</p>
                    </div>

                    <div class="grid-iconos-blog mt-30">
                        <div class="item-ejemplo">
                            <?= render_icon('dollar-sign-solid', 'icono-grande') ?>
                            <span>1. Tu salario (el promedio del último año, actualizado)</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('calendar-day-solid', 'icono-grande') ?>
                            <span>2. Tu edad al momento del accidente</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('chart-simple', 'icono-grande') ?>
                            <span>3. El porcentaje de incapacidad que te determine el baremo</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('shield-halved', 'icono-grande') ?>
                            <span>4. El piso mínimo de la SRT (siempre se paga el mayor)</span>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">La forma más rápida de saber cuánto te corresponde:</span> cargá tus datos en nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de indemnización por accidente de trabajo</a>. Te da una primera referencia en un minuto, sin dejar tus datos personales.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="formula-oficial" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> La fórmula oficial del cálculo</a></h2>
                    <p>La indemnización de pago único por incapacidad laboral permanente parcial se calcula, por mandato del <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/200000-204999/202008/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 14, inc. 2, ap. a) de la Ley 24.557</a>, con esta fórmula:</p>

                    <div class="recuadro-ejemplos bg-gris p-25 border-radius-20 mt-20">
                        <p class="m-0 fs-09" style="font-size:1.15rem;font-weight:700;">Indemnización = 53 × Ingreso Base Mensual × % de incapacidad × (65 ÷ tu edad)</p>
                    </div>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Variable</div>
                            <div>Qué significa</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>53</strong></div>
                            <div>El multiplicador que fija la ley para convertir tus sueldos anuales en la indemnización.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ingreso Base Mensual</strong></div>
                            <div>El promedio de tu salario del último año, <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">actualizado por el índice RIPTE</a> para que no pierda valor frente a la inflación. Si sufriste un accidente en negro, es el salario real que cobrabas.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>% de incapacidad</strong></div>
                            <div>El porcentaje que te asigne la Comisión Médica según el <a href="<?= BASE_URL ?>blog/baremo-2026-completo-explicado" style="color:inherit;text-decoration:none;">Baremo Laboral 2026</a> (Decreto 549/2025), sumando los factores por edad y tipo de tarea.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>65 ÷ tu edad</strong></div>
                            <div>El coeficiente por edad: cuanto más joven sos, mayor valor se le asigna a tu capacidad laboral perdida. Nunca menor que 1: se toma la edad que tenías al momento del accidente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>+ 20%</strong></div>
                            <div>Adicional del 20% (art. 3, Ley 26.773) si el accidente ocurrió en el lugar de trabajo o mientras estabas a disposición del empleador. <span class="subrayado-amarillo">No aplica en accidentes in itinere (de ida o vuelta al trabajo).</span></div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El dato que casi todos pierden:</span> el porcentaje de incapacidad <strong>no lo decide la ART</strong>. Lo determina la Comisión Médica de la SRT según el baremo de tu lesión, con sus estudios médicos. Si la ART te ofrece un monto "estimado" antes de que esa evaluación ocurra, estás negociando con un número que puede no ser el que te corresponde.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="pisos-minimos-vigentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Pisos mínimos vigentes hoy (septiembre de 2026)</a></h2>
                    <p>La SRT actualiza estos valores cada seis meses con el índice RIPTE. <strong>Los montos vigentes para accidentes e incapacidades determinadas entre el 1° de septiembre de 2026 y el 28 de febrero de 2027</strong> son los de la <a href="https://www.boletinoficial.gob.ar/detalleAviso/primera/346792/20260902" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Resolución SRT 39/2026</a>:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Prestación</div>
                            <div>Monto mínimo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por incapacidad permanente (art. 14.2, inc. a) y b)</strong></div>
                            <div><strong>$114.354.110</strong> × el porcentaje de incapacidad que te hayan asignado</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional (art. 11.4, inc. a)</strong> — incapacidad mayor al 50%</div>
                            <div><strong>$50.824.055</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional (art. 11.4, inc. b)</strong> — incapacidad igual o mayor al 66%</div>
                            <div><strong>$63.530.069</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Compensación adicional por fallecimiento (art. 11.4, inc. c)</strong></div>
                            <div><strong>$76.236.060</strong></div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Adicional del 20% (art. 3, Ley 26.773)</strong> — piso para casos de muerte o incapacidad total</div>
                            <div><strong>$21.656.176</strong></div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Cómo leer la tabla:</span> si tu incapacidad es del 50% o más, además de la indemnización por incapacidad te corresponde una compensación adicional de pago único. Y si el accidente fue en el trabajo, todo eso se incrementa en un 20%. La <a href="<?= BASE_URL ?>baremo/pisos-minimos-indemnizacion" style="color:inherit;text-decoration:none;">página de pisos mínimos</a> tiene el detalle completo de cómo se aplican.</p>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con los totales que se actualizan:</span> los montos que viste en otras páginas o blogs (incluso de estudios jurídicos) pueden ser de la <strong>Resolución anterior (15/2026), que venció el 31 de agosto de 2026</strong>. Antes de cerrar con un monto, confirmá que estén aplicando los valores vigentes para la fecha de tu caso, o revisá los pisos vigentes acá.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="ejemplos-reales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Ejemplos de cálculo con los valores de hoy</a></h2>
                    <p>Tomando el piso mínimo vigente ($114.354.110) y el adicional del 20% para accidentes ocurridos en el trabajo, estos son los <strong>mínimos que la ART debe pagar</strong> en los escenarios más comunes. Recordá: si la fórmula da más, se paga la fórmula; esto es lo que nunca puede bajar:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Incapacidad asignada</div>
                            <div>Mínimo sin el 20%</div>
                            <div>Mínimo si fue en el trabajo (+20%)</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>5%</strong></div>
                            <div>$5.717.705</div>
                            <div>$6.861.246</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>10%</strong></div>
                            <div>$11.435.411</div>
                            <div>$13.722.493</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>20%</strong></div>
                            <div>$22.870.822</div>
                            <div>$27.444.986</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>30%</strong></div>
                            <div>$34.306.233</div>
                            <div>$41.167.479</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>50% (suma la compensación del art. 11.4, inc. a)</strong></div>
                            <div>$57.177.055 + $50.824.055</div>
                            <div>$129.601.332</div>
                        </div>
                    </div>

                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20 mt-30">
                        <h4 class="mb-15">📋 Ejemplo paso a paso</h4>
                        <p class="m-0 fs-09">Un trabajador de 40 años con un sueldo promedio de $1.200.000 por mes sufre un accidente <strong>en el trabajo</strong> y le asignan un <strong>12% de incapacidad</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 1 — Fórmula:</strong> 53 × $1.200.000 × 0,12 × (65 ÷ 40) = 53 × $1.200.000 × 0,12 × 1,625 = <strong>$12.401.000</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 2 — Piso mínimo:</strong> $114.354.110 × 0,12 = <strong>$13.722.493</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 3 — Se paga el mayor:</strong> $13.722.493 (el piso supera a la fórmula).</p>
                        <p class="m-0 fs-09 mt-15"><strong>Paso 4 — +20% por accidente en el trabajo:</strong> $13.722.493 × 1,20 = <strong>$16.466.991</strong>.</p>
                        <p class="m-0 fs-09 mt-15"><span class="subrayado-amarillo">Resultado:</span> la ART debe pagar <strong>al menos $16.466.991</strong> por este caso.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Calculá el tuyo:</span> estos cálculos son orientativos con el piso vigente. Tu caso exacto depende de tu sueldo real, tu edad, tu artículo del baremo y los factores de ponderación. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de indemnización por accidente</a> para una estimación a tu medida, o escribinos y lo revisamos con vos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="que-no-es-indemnizacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué pagos NO son la indemnización (y a qué tenés derecho aparte)</a></h2>
                    <p>La indemnización por incapacidad es solo una parte de lo que la ley te reconoce. Mientras dura tu recuperación y después del alta, hay otras prestaciones que <strong>no se descuentan de tu indemnización</strong>:</p>

                    <ul class="lista-items-blog mt-20">
                        <li><strong>Prestación dineraria durante la baja (ILT):</strong> mientras estás de baja, la ley te paga un haber mensual equivalente a tu salario. Los primeros 10 días los cubre tu empleador y desde el día 11 la ART. Es un pago diferente de la indemnización final.</li>
                        <li><strong>Atención médica completa:</strong> consultas, estudios, cirugías, prótesis, rehabilitación, medicamentos y traslados. Todo lo paga la ART y no te lo pueden descontar de lo que te corresponde por la incapacidad.</li>
                        <li><strong>Gran invalidez:</strong> si tu incapacidad te deja con asistencia permanente de otra persona, además de la indemnización corresponde una renta mensual de por vida.</li>
                        <li><strong>Daño moral y daños extra:</strong> cuando el accidente genera daños que el sistema de la LRT no cubre (por ejemplo, la culpa grave del empleador o el daño moral), pueden reclamarse aparte, en juicio.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">🚨</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Si te ofrecen "x plata y listo":</span> otro error típico es que la ART pretenda que con el pago de la indemnización "queda todo saldado". La indemnización no reemplaza ni condiciona las prestaciones en especie (médicas) ni el pago de la baja. Lo que firmás como "finiquito" puede cerrarte las puertas a lo demás.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="art-ofrece-menos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Por qué la ART casi siempre te ofrece de menos</a></h2>
                    <p>Esto no es una opinión: es un diseño del sistema. Los médicos de la ART dependen de la aseguradora, y la ART paga menos cuando el porcentaje de incapacidad es menor. Las prácticas más frecuentes son:</p>

                    <ul class="lista-items-blog blog-errores mt-30">
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Subestimar el porcentaje</strong>: asignarte menos puntos de incapacidad que los que marca el baremo para tu lesión (por ejemplo, no sumar el factor de ponderación por edad y tipo de tarea).</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Base de cálculo vieja</strong>: calcular el Ingreso Base con sueldos no actualizados por RIPTE o con un salario menor al que realmente cobrabas.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>No aplicar el piso mínimo vigente</strong>: liquidar con los montos de la resolución vencida (la 15/2026) en lugar de la 39/2026.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Omitir el 20%</strong>: no sumar el adicional del art. 3 de la Ley 26.773 cuando el accidente fue en el trabajo.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Alta médica apresurada</strong>: darte el alta cuando todavía no estás recuperado para cerrar tu caso con un porcentaje menor.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Qué podés hacer:</span> el <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">alta médica se puede impugnar</a> y un porcentaje que no respeta el baremo <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;">se puede objetar ante la Comisión Médica</a>. Los plazos corren desde la notificación. Por eso: <strong>nunca firmes la homologación sin que un abogado revise el número primero.</strong></p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📌</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">El momento clave:</span> cuando la ART te presenta el acuerdo de "valoración de daño" para que lo homologues ante la Comisión Médica, <strong>ese es el momento de revisar el cálculo</strong>. Después de firmado, revertirlo cuesta muchísimo más. Una consulta previa con un abogado laboralista puede significar decenas de millones de diferencia.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas que más nos llegan cuando alguien quiere saber cuánto le toca cobrar:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto me pagan por un accidente de trabajo si me dieron el alta?</summary>
                            <p class="mt-15 fs-09">Depende del porcentaje de incapacidad que te hayan determinado, tu sueldo y tu edad. Con el piso mínimo vigente (Res. SRT 39/2026, $114.354.110 por punto de incapacidad), un 10% nunca puede cobrar menos de $11.435.411, y si el accidente fue en el trabajo se suma el 20%: $13.722.493. Si tu caso da más por la fórmula, se paga la fórmula.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la ART me ofrece $3.000.000 por un 10% de incapacidad?</summary>
                            <p class="mt-15 fs-09">Ese ofrecimiento está por debajo del piso mínimo vigente: para un 10% lo mínimo es $11.435.411 (más 20% si fue en el trabajo). Antes de firmar cualquier acuerdo, revisá que el cálculo use la resolución vigente y el porcentaje correcto. Si te ofrecen menos que el piso, hay margen para reclamar.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Tengo que pagar algo para reclamar mi indemnización?</summary>
                            <p class="mt-15 fs-09">No. El reclamo no tiene costo de inicio para el trabajador y los honorarios del abogado se pactan contra el resultado (solo cobrás si vos cobrás). Los gastos médicos y legales del reclamo no corren por tu bolsillo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La indemnización es igual si estoy trabajando en negro?</summary>
                            <p class="mt-15 fs-09">No perdés derechos por no estar registrado: la relación laboral existe aunque no haya recibo ni alta. La base de cálculo es tu salario real. El punto clave en estos casos es probar el vínculo y el sueldo que cobrabas con testigos, mensajes y transferencias.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué plazo tengo para reclamar si no estoy de acuerdo con el monto?</summary>
                            <p class="mt-15 fs-09">El plazo general de prescripción de la acción es de dos años desde el accidente o desde que el derecho pudo ejercerse, según el artículo 44 de la Ley 24.557. Además, hay plazos cortos específicos para impugnar el porcentaje o el alta ante la Comisión Médica: por eso conviene actuar apenas recibís el dictamen y no dejar pasar el tiempo.</p>
                        </details>
                    </div>

                    <p class="mt-30">Te puede servir también nuestra guía sobre <a href="<?= BASE_URL ?>blog/que-cubre-la-art-y-que-no" style="color:inherit;text-decoration:none;">qué cubre la ART y qué no</a> y la <a href="<?= BASE_URL ?>blog/baremo-2026-completo-explicado" style="color:inherit;text-decoration:none;">guía completa del baremo 2026 con los porcentajes</a>.</p>

                    <!-- CTA CALCULADORA -->
                    <div class="mt-40">
                        <a href="<?= BASE_URL ?>calculadora-accidentes" class="btn btn-amarillo" style="display:inline-flex;align-items:center;gap:.5rem;font-weight:700;padding:1rem 1.6rem;border-radius:10px;">🧮 CALCULÁ TU INDEMNIZACIÓN EN 1 MINUTO <?= render_icon('chevron-right', 'ml-5') ?></a>
                    </div>

                    <!-- CTA WHATSAPP -->
                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te hicieron una oferta y no sabés si es justa?";
                            $descripcion = "Revisamos tu liquidación sin cargo y te decimos si lo que te ofrecen es el monto correcto. Consultá hoy.";
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
            $FuentesNormativasBlog = 'Ley 24.557 (art. 14, inc. 2), art. 3 de la Ley 26.773, Decreto 549/2025 (Baremo Laboral 2026), Resolución SRT 39/2026 (pisos mínimos 01/09/2026 - 28/02/2027) y Resolución SRT 15/2026 (anterior).';
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