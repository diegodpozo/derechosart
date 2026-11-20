<?php
/**
 * VISTA: FALLO OLIVA CORTE SUPREMA - INTERESES INDEMNIZACION LABORAL
 * ESTRUCTURA FIJA DE ARTICULO DE BLOG DE DERECHOSART.COM.AR
 * JURISPRUDENCIA: CSJN, 29/02/2024, "Oliva, Fabio Omar c/ COMA S.A. s/ despido".
 * NORMATIVA: Art. 770 CCyCN, Acta 2783/2024 y 2784/2024 CNAT, IPC INDEC, Ley 20.744.
 */

$FuentesNormativasBlog = 'Fallo "Oliva" (CSJN 29/02/2024), Acta 2783/2024 y Res. 3/2024 CNAT, Art. 770 del Código Civil y Comercial de la Nación (CCyCN) y Ley de Contrato de Trabajo N.° 20.744.';
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Fallo Oliva: Intereses de Indemnización</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Fallo Oliva de la Corte Suprema: cómo se calculan hoy los intereses de tu indemnización laboral</h1>

                <p class="articulo-lead">El 29 de febrero de 2024 la Corte Suprema de Justicia de la Nación dictó el histórico fallo "Oliva", frenando la capitalización anual sucesiva de intereses (Acta 2764 de la CNAT) que multiplicaba créditos laborales a cifras desproporcionadas. Tras este pronunciamiento, la Cámara Nacional del Trabajo aprobó la nueva Acta 2783/2024: las deudas laborales se actualizan por inflación real mediante el índice IPC (INDEC) más una tasa pura anual del 3% o 6%. Te explicamos en criollo qué resolvió la Corte, cómo se liquida tu indemnización hoy para que no pierda frente a la inflación y qué mirar si estás negociando un acuerdo o juicio laboral.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Noviembre 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 11 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <?php
            $TldrTexto = "El fallo 'Oliva' de la Corte Suprema (29/02/2024) declaró inconstitucional la capitalización anual acumulada de intereses (anatocismo) del Acta 2764 de la CNAT. Para reemplazar ese criterio, la Cámara fijó el Acta 2783/2024: el capital histórico se actualiza según la variación real del IPC (INDEC) desde el despido más una tasa de interés pura del 3% anual (o 6% en ciertos supuestos). El trabajador sigue protegido contra la inflación, pero sobre una base jurídica firme que la Corte no va a anular.";
            $TldrFuente = "CSJN, 'Oliva c/ COMA S.A.' (29/02/2024) y Acta 2783/2024 CNAT";
            $TldrFuenteUrl = "https://www.pjn.gov.ar/";
            $TldrCalcUrl = "calculadora-despidos";
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
                                <li id="preg-1"><a href="#que-es-fallo-oliva" class="active"><span class="nav-num">1</span> Qué es el Fallo Oliva y por qué cambió todo</a></li>
                                <li id="preg-2"><a href="#los-hechos-del-caso"><span class="nav-num">2</span> El caso real: de $2 millones a $165 millones</a></li>
                                <li id="preg-3"><a href="#que-dijo-la-corte"><span class="nav-num">3</span> La decisión de la Corte Suprema: freno al anatocismo</a></li>
                                <li id="preg-4"><a href="#acta-2783-nueva-formula"><span class="nav-num">4</span> La nueva fórmula: Acta 2783/2024 (IPC + Tasa pura)</a></li>
                                <li id="preg-5"><a href="#como-impacta-en-tu-caso"><span class="nav-num">5</span> Cómo impacta en tu juicio o acuerdo laboral</a></li>
                                <li id="preg-6"><a href="#comparativa-actas"><span class="nav-num">6</span> Comparativa: Acta 2764 vs. Régimen actual</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes sobre el Fallo Oliva</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés un reclamo o juicio por despido?";
                    $descripcion = "Analizamos la liquidación de tu indemnización y los intereses aplicables según la doctrina vigente de la Corte Suprema. Consulta online sin cargo.";
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
                <div id="que-es-fallo-oliva" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es el Fallo Oliva y por qué cambió todo</a></h2>
                    <p>Durante los últimos años en Argentina, con una inflación de dos y tres dígitos, uno de los mayores dilemas de la Justicia del Trabajo fue cómo evitar que las indemnizaciones por despido se pulvericen mientras dura un juicio (que suele demorar entre 3 y 6 años).</p>

                    <p>Para compensar esa demora, en septiembre de 2022 la Cámara Nacional de Apelaciones del Trabajo (CNAT) dictó el <strong>Acta 2764</strong>, implementando una capitalización anual sucesiva de intereses (sumar los intereses acumulados al capital una vez por año para que vuelvan a devengar nuevos intereses sobre intereses). Aunque la intención era preservar el poder adquisitivo del trabajador, la fórmula matemática generó un efecto multiplicador exponencial totalmente descalzado de la inflación real.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">La sentencia que ordenó la cancha:</span> El 29 de febrero de 2024, en la causa <em>"Oliva, Fabio Omar c/ COMA S.A. s/ despido"</em>, la <strong>Corte Suprema de Justicia de la Nación (CSJN)</strong> declaró de forma unánime que esa capitalización anual reiterada era inconstitucional y arbitraria, ordenando que los jueces laborales utilicen métodos de actualización razonables basados en la ley.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="los-hechos-del-caso" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> El caso real: de $2 millones a $165 millones</a></h2>
                    <p>Para entender por qué intervino la Corte Suprema hay que mirar los números reales del expediente judicial del trabajador Fabio Omar Oliva:</p>

                    <ul class="flex-column gap-15 txt-gris fs-095 mt-20">
                        <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <strong>Año 2015:</strong> El trabajador es despedido. La liquidación indemnizatoria histórica de origen era de <strong>$2.107.531</strong>.</li>
                        <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <strong>Año 2023 (Sentencia de Cámara Sala IX):</strong> Los jueces aplicaron el Acta 2764 capitalizando anualmente intereses. El crédito subió a la increíble cifra de <strong>$165.342.185</strong>.</li>
                        <li><?= render_icon('check', 'txt-amarillo mr-10') ?> <strong>El desfasaje:</strong> El monto inicial se multiplicó un <strong>7.745%</strong>, cuando la inflación acumulada real medida por el IPC en el mismo período había sido del 3.414%. Es decir, el crédito superó en más del doble a la inflación real de la economía.</li>
                    </ul>

                    <p>La empresa demandada (COMA S.A.) interpuso un recurso extraordinario federal ante la Corte Suprema alegando que semejante liquidación confiscaba su patrimonio y violaba el derecho constitucional de propiedad (artículo 17 de la Constitución Nacional).</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="que-dijo-la-corte" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> La decisión de la Corte Suprema: freno al anatocismo</a></h2>
                    <p>La Corte Suprema, con el voto de los doctores Horacio Rosatti, Carlos Rosenkrantz, Juan Carlos Maqueda y Ricardo Lorenzetti, descalificó la sentencia de la Cámara con argumentos jurídicos contundentes:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-2cols-equal header">
                            <div>Pilar del Fallo Oliva</div>
                            <div>Fundamento de la Corte Suprema (CSJN)</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>Prohibición legal del anatocismo</strong></div>
                            <div>El artículo 770 del Código Civil y Comercial de la Nación (CCyCN) prohíbe taxativamente la capitalización de intereses, salvo excepciones expresas y acotadas (como la notificación de la demanda o un acuerdo posterior).</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>Falta de sustento legal de las Actas</strong></div>
                            <div>Las actas de la Cámara Nacional del Trabajo son recomendaciones de jueces, no leyes del Congreso. No tienen jerarquía jurídica para inventar una capitalización anual periódica que la ley prohíbe.</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>Enriquecimiento sin causa</strong></div>
                            <div>La fórmula arrojó un resultado desproporcionado que no guardaba ninguna relación económica razonable con el perjuicio efectivamente sufrido por el trabajador.</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="acta-2783-nueva-formula" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> La nueva fórmula: Acta 2783/2024 (IPC + Tasa pura)</a></h2>
                    <p>Tras el golpe de la Corte en "Oliva", la Cámara Nacional de Apelaciones del Trabajo se reunió de urgencia el 13 de marzo de 2024 y aprobó el <strong>Acta 2783/2024</strong> (y su complementaria Acta 2784/2024), fijando el nuevo criterio que rige hoy en los juzgados laborales:</p>

                    <div class="grid-info-doble mt-30">
                        <article class="info-bloque b-none bl-8-amarillo">
                            <h3 class="mb-15 fs-11">1. Actualización por Índice de Precios (IPC)</h3>
                            <p class="txt-gris fs-09 mb-0">El capital de condena (indemnización por antigüedad, preaviso, integración y salarios caídos) se actualiza desde que fue exigible (fecha del despido) hasta la fecha de liquidación conforme a la variación del <strong>Índice de Precios al Consumidor (IPC)</strong> publicado mensualmente por el INDEC.</p>
                        </article>

                        <article class="info-bloque b-none bl-8-amarillo">
                            <h3 class="mb-15 fs-11">2. Tasa de Interés Pura Adicional (3% anual)</h3>
                            <p class="txt-gris fs-09 mb-0">Sobre ese capital actualizado por IPC se aplica una <strong>tasa de interés pura del 3% anual</strong> (que se eleva al 6% anual en supuestos específicos de mora grave o créditos derivados de accidentes) en concepto de compensación por la privación del uso del dinero.</p>
                        </article>
                    </div>

                    <div class="mt-40 p-20 bg-gris border-radius-15 fs-09 txt-gris">
                        <p class="m-0"><strong>Unica capitalización permitida (Art. 770 inc. b CCyCN):</strong> Al momento de notificar la demanda judicial, el empleador queda formalmente en mora judicial y se produce <strong>por única vez</strong> la acumulación de intereses al capital. A partir de allí no hay más capitalizaciones periódicas.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="como-impacta-en-tu-caso" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Cómo impacta en tu juicio o acuerdo laboral</a></h2>
                    <p>Si fuiste despedido, estás atravesando un reclamo en el SECLO o tenés un juicio laboral en trámite, el fallo "Oliva" tiene un impacto directo y muy positivo en tu estrategia:</p>

                    <ul class="flex-column gap-15 txt-gris fs-095 mt-20">
                        <li><?= render_icon('check', 'txt-verde mr-10') ?> <strong>Certeza y cobro efectivo:</strong> Ya no existen liquidaciones de fantasía que luego una empresa puede apelar hasta la Corte Suprema para voltear el juicio. Las liquidaciones actuales son firmes y sostenibles.</li>
                        <li><?= render_icon('check', 'txt-verde mr-10') ?> <strong>Protección real contra la inflación:</strong> El mecanismo del IPC garantiza que el valor adquisitivo de tu indemnización se mantenga idéntico al del día en que te despidieron. Si con tu sueldo podías comprar 10 canastas básicas, el cálculo indexado preserva ese poder de compra.</li>
                        <li><?= render_icon('check', 'txt-verde mr-10') ?> <strong>Acuerdos más rápidos en conciliación (SECLO):</strong> Antes del fallo Oliva, muchas empresas preferían dilatar los juicios especulando con la nulidad del Acta 2764. Hoy, con una regla clara y avalada por la Corte, los empleadores están mucho más dispuestos a cerrar acuerdos conciliatorios rápidos.</li>
                    </ul>

                    <section class="flex-between flex-wrap gap-15 bg-gris p-20 border-radius-15 fs-09 mt-30">
                        <p class="m-0">¿Querés saber cuánto te corresponde cobrar de indemnización base antes de intereses?</p>
                        <a href="<?= BASE_URL ?>calculadora-despidos" class="btn-capsula">Calculadora de Despidos</a>
                    </section>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="comparativa-actas" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Comparativa: Acta 2764 vs. Régimen actual</a></h2>
                    <p>La siguiente tabla resume las diferencias clave entre el esquema anulado por la Corte Suprema y el sistema vigente tras el Fallo Oliva:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Parámetro</div>
                            <div>Régimen Anterior (Acta 2764 - Anulada)</div>
                            <div>Régimen Actual (Fallo Oliva y Acta 2783)</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Mecanismo de cálculo</strong></div>
                            <div>Capitalización anual sucesiva de tasa activa Banco Nación (interés sobre interés).</div>
                            <div>Actualización del capital por índice IPC (INDEC) + 3% anual de tasa pura.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Validez constitucional</strong></div>
                            <div>Inconstitucional y arbitraria según la Corte Suprema (CSJN).</div>
                            <div>Plenamente válida y ajustada al artículo 770 del CCyCN.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Riesgo para el trabajador</strong></div>
                            <div>Altísimo riesgo de apelación extraordinaria y anulación de sentencia tras años de litigio.</div>
                            <div>Sentencias firmes, ejecutables y cobrables sin dilaciones indebidas.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Efecto en acuerdos</strong></div>
                            <div>Trabas y litigiosidad prolongada por incertidumbre de montos.</div>
                            <div>Mayor rapidez para arribar a acuerdos en audiencias de conciliación (SECLO).</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7: PREGUNTAS FRECUENTES -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes sobre el Fallo Oliva</a></h2>

                    <div class="lista-faq-blog mt-30">
                        <details>
                            <summary><h3>¿El fallo Oliva significa que los trabajadores van a cobrar menos en sus juicios?</h3></summary>
                            <article class="respuesta">
                                <p>No significa que cobres menos de lo que corresponde por ley, sino que desaparecen los montos desproporcionados que la Corte consideró confiscatorios y que en la práctica eran incobrables porque terminaban quebrando a las empresas o siendo revocados. Con el régimen actual de IPC más tasa pura del 3%, el trabajador tiene garantizada la actualización real contra la inflación sin el riesgo de que la Corte Suprema anule su sentencia tras 6 u 8 años de litigio.</p>
                            </article>
                        </details>

                        <details>
                            <summary><h3>¿Qué pasa si mi juicio laboral ya tenía sentencia firme antes del fallo Oliva?</h3></summary>
                            <article class="respuesta">
                                <p>Si tu sentencia ya estaba firme, consentida y con liquidación aprobada sin que la parte demandada haya interpuesto recurso extraordinario federal en tiempo y forma, rige el principio de <strong>cosa juzgada</strong> y el fallo Oliva no puede aplicarse de manera retroactiva para reabrir debates cerrados. En cambio, si el expediente estaba apelado ante la Cámara o la Corte, los jueces deben aplicar la nueva doctrina.</p>
                            </article>
                        </details>

                        <details>
                            <summary><h3>¿Se aplica el fallo Oliva también a las indemnizaciones por accidentes de trabajo y ART?</h3></summary>
                            <article class="respuesta">
                                <p>Las indemnizaciones por accidentes de trabajo y enfermedades profesionales bajo la <strong>Ley 24.557</strong> tienen su propio régimen específico de actualización: el Ingreso Base Mensual (IBM) se actualiza por variación del índice <strong>RIPTE</strong> (artículo 12 LRT modificado por Ley 27.348), y los pisos mínimos se ajustan semestralmente por resoluciones de la Secretaría de Seguridad Social. No obstante, si el reclamo deriva en una demanda judicial civil integral o cobro de diferencias, los tribunales aplican la pauta del fallo Oliva para evitar capitalizaciones indebidas.</p>
                            </article>
                        </details>

                        <details>
                            <summary><h3>¿Puedo reclamar que mi indemnización se actualice por IPC en el SECLO o acuerdo privado?</h3></summary>
                            <article class="respuesta">
                                <p>Sí. En las instancias de negociación previa prejudicial (SECLO en CABA o Ministerio de Trabajo en Provincia de Buenos Aires), la doctrina del fallo Oliva y el Acta 2783 sirven como parámetro objetivo para exigir que el ofrecimiento de la empresa contemple la inflación transcurrida desde el despido y no se calcule sobre valores históricos desactualizados.</p>
                            </article>
                        </details>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', 'mr-5') ?> Volver al índice</a>
                </div>

                <!-- FOOTER DEL ARTICULO -->
                <footer class="articulo-footer-meta mt-50 flex-between fs-08">
                    <span>✅ Solo cobramos si vos cobrás.</span>
                    <span>DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                </footer>

                <!-- CTA FINAL DE WHATSAPP -->
                <div class="mt-40">
                    <?php
                        $titulo = "¿Tenés dudas sobre cómo calcular tu indemnización o reclamo laboral?";
                        $descripcion = "Escribinos por WhatsApp. Analizamos tu caso sin cargo y te explicamos tus derechos con total claridad.";
                        $ancho = "100%";
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>
                </div>

                <!-- BLOQUE DE AUTOR Y REVISOR LEGAL -->
                <?php
                    $AutorSlug = 'romina-koniuch';
                    include __DIR__ . '/../componentes/bloque-autor.php';
                ?>

            </section>
        </article>

    </div>
</main>
