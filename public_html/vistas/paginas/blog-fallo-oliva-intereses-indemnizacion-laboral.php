<?php
/**
 * VISTA: FALLO OLIVA CORTE SUPREMA Y LEY 27.802 - INTERESES INDEMNIZACION LABORAL
 * ESTRUCTURA FIJA DE ARTICULO DE BLOG DE DERECHOSART.COM.AR
 * TEXTO 100% LITERAL SEGUN DOCUMENTO FUENTE PRIMARIA CON EMOJIS DINAMICOS
 * JURISPRUDENCIA: CSJN "OLIVA" (29/02/2024), "LACUADRA" (2024) Y "CABANA OPANASIUK" (05/11/2026); SCBA "FERNANDEZ" (21/10/2026).
 * NORMATIVA: LEY 27.802 (ARTS. 54 Y 55), LEY 20.744 (LCT), LEY 24.557 (LRT) Y LEY 27.348, ART. 770 CCYCN.
 */

$FuentesNormativasBlog = 'CSJN, "Oliva, Fabio Omar c/ COMA S.A." (29/02/2024); CSJN, "Lacuadra" (2024); CSJN, "Cabana Opanasiuk, Leonardo c/ Unir S.A." (05/11/2026); SCBA, "Fernández" (21/10/2026); Actas CNAT 2764, 2783, 2784 y 2788; Ley 27.802 (BO 06/03/2026); Ley 20.744 (LCT); Ley 24.557 (LRT) y Ley 27.348; art. 770 del Código Civil y Comercial de la Nación.';
?>

<main class="blog-container fade-in">
    <section class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <section class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Fallo Oliva y la Ley 27.802</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">💼 DESPIDOS</span>
                <h1 class="articulo-titulo">Fallo Oliva y la Ley 27.802: cómo se actualizan hoy los intereses de una indemnización laboral</h1>

                <section class="articulo-meta mt-20 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span>👩‍⚖️ Revisado por: Dra. Romina Koñiuch</span>
                    <span>📅 Actualizado: noviembre de 2026</span>
                    <span class="pointer" data-print-page><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </section>
            </header>
        </section>

        <?php
            $TldrTexto = 'El fallo "Oliva" de la Corte Suprema (29/02/2024) dejó sin efecto la capitalización anual sucesiva de intereses que aplicaba la Cámara Nacional del Trabajo (Acta 2764). El reemplazo que dictó la Cámara (Acta 2783, con CER más 6% anual) también fue descalificado por la Corte en "Lacuadra" y la Cámara lo dejó sin efecto en agosto de 2024.<br><br>Desde el 6 de marzo de 2026 rige la Ley 27.802 de Modernización Laboral: como regla general, los créditos laborales se actualizan por IPC más 3% anual (art. 276 LCT) y, para los juicios que estaban en trámite sin sentencia definitiva a esa fecha, se aplica el sistema especial del art. 55 (tasa pasiva del BCRA con un techo y un piso). El 5 de noviembre de 2026 la Corte Suprema ordenó aplicar ese art. 55 en "Cabana Opanasiuk". Todavía hay debate sobre su constitucionalidad en distintas jurisdicciones.';
            $TldrFuente = 'CSJN, "Oliva" (29/02/2024) y "Cabana Opanasiuk" (05/11/2026); Ley 27.802; Ley 20.744.';
            $TldrFuenteUrl = 'https://www.pjn.gov.ar/';
            $TldrCalcUrl = 'calculadora-despidos';
            include __DIR__ . '/../componentes/bloque-tldr.php';
        ?>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <section class="sidebar-sticky">
                <div class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#que-es-oliva" class="active"><span class="nav-num">1</span> ⚖️ Qué es el fallo Oliva y por qué importó</a></li>
                                <li id="preg-2"><a href="#el-caso-concreto"><span class="nav-num">2</span> 📈 El caso: de $2 millones a $165 millones</a></li>
                                <li id="preg-3"><a href="#que-decidio-corte"><span class="nav-num">3</span> 🏛️ Qué decidió la Corte Suprema</a></li>
                                <li id="preg-4"><a href="#despues-de-oliva"><span class="nav-num">4</span> 📜 Después de Oliva: Acta 2783, "Lacuadra" y Acta 2788</a></li>
                                <li id="preg-5"><a href="#regimen-actual-ley"><span class="nav-num">5</span> ⚖️ El régimen actual: Ley 27.802 (arts. 54 y 55)</a></li>
                                <li id="preg-6"><a href="#impacto-juicio"><span class="nav-num">6</span> 💼 Cómo impacta en tu juicio o acuerdo</a></li>
                                <li id="preg-7"><a href="#comparativa-criterios"><span class="nav-num">7</span> 📊 Comparativa de los distintos criterios</a></li>
                                <li id="preg-8"><a href="#preguntas-frecuentes"><span class="nav-num">8</span> ❓ Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <!-- CTA WHATSAPP SIDEBAR -->
                <?php
                    $titulo = "💬 ¿Tenés un reclamo por despido?";
                    $descripcion = "Analizamos tu caso y los criterios de actualización que corresponden según tu jurisdicción y la fecha de inicio. Escribinos por WhatsApp · Consulta online sin cargo.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
                    <span class="fs-18">✅</span> Solo cobramos si vos cobrás.
                </p>
            </section>
        </aside>

        <!-- CUERPO PRINCIPAL DEL ARTICULO -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto">

                <!-- SECCION 1 -->
                <section id="que-es-oliva" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-1"><span class="num-sec">1</span> ⚖️ Qué es el fallo Oliva y por qué importó</a>
                    </h2>

                    <p>Durante años, con inflación alta, uno de los grandes problemas de la Justicia del Trabajo fue cómo evitar que una indemnización se licuara mientras el juicio duraba varios años.</p>

                    <p>En septiembre de 2022, la Cámara Nacional de Apelaciones del Trabajo (CNAT) dictó el Acta 2764, que ordenaba capitalizar intereses una vez por año (sumar los intereses al capital para que generaran nuevos intereses). La intención era proteger el poder adquisitivo del trabajador, pero en juicios largos el resultado crecía de manera exponencial.</p>

                    <p>El 29 de febrero de 2024, en la causa "Oliva, Fabio Omar c/ COMA S.A. s/ despido", la Corte Suprema de Justicia de la Nación consideró arbitraria la sentencia que había aplicado ese mecanismo y la dejó sin efecto, ordenando dictar una nueva con intereses razonables.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 2 -->
                <section id="el-caso-concreto" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-2"><span class="num-sec">2</span> 📈 El caso: de $2 millones a $165 millones</a>
                    </h2>

                    <p>Los números del expediente explican la intervención de la Corte:</p>

                    <ul class="lista-con-check">
                        <li>🗓️ <strong>2015:</strong> el trabajador es despedido. La liquidación de origen era de $2.107.531.</li>
                        <li>📊 <strong>2023:</strong> la sentencia de la Sala IX aplicó el Acta 2764 y el crédito llegó a $165.342.185.</li>
                        <li>💥 <strong>Resultado:</strong> el capital original se incrementó un 7.745%.</li>
                    </ul>

                    <aside class="bg-gris p-15 border-radius-15 fs-09 mb-20">
                        ⚖️ La empresa demandada interpuso recurso extraordinario alegando que la liquidación afectaba su derecho de propiedad (art. 17 de la Constitución Nacional).
                    </aside>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 3 -->
                <section id="que-decidio-corte" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-3"><span class="num-sec">3</span> 🏛️ Qué decidió la Corte Suprema</a>
                    </h2>

                    <p>Los fundamentos centrales del fallo fueron estos:</p>

                    <aside class="bg-gris p-15 border-radius-15 fs-09 mb-20">
                        ⚠️ <strong>Importante:</strong> la Corte no fijó una tasa o un índice para todos los casos. Descalificó la sentencia concreta y el mecanismo de capitalización periódica.
                    </aside>

                    <div class="custom-table-blog">
                        <div class="tr-blog-2cols-equal tr-blog-header font-bold">
                            <div>Fundamento</div>
                            <div>Qué dijo la Corte</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>🚫 Prohibición del anatocismo</strong></div>
                            <div>El art. 770 del Código Civil y Comercial prohíbe, como regla, capitalizar intereses, salvo las excepciones que la propia norma prevé (por ejemplo, desde la notificación de la demanda).</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>📜 Falta de sustento legal de las Actas</strong></div>
                            <div>Las actas de la Cámara son pautas de los jueces, no leyes. No pueden crear una capitalización periódica que la ley no autoriza.</div>
                        </div>
                        <div class="tr-blog-2cols-equal">
                            <div><strong>⚖️ Resultado desproporcionado</strong></div>
                            <div>La liquidación arrojaba un monto sin relación razonable con el perjuicio efectivamente sufrido.</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 4 -->
                <section id="despues-de-oliva" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-4"><span class="num-sec">4</span> 📜 Después de Oliva: Acta 2783, "Lacuadra" y Acta 2788</a>
                    </h2>

                    <p>Pocos días después del fallo, el 13 de marzo de 2024, la CNAT dictó el Acta 2783 (completada por la Resolución 3/2024 y el Acta 2784). Ese criterio no era IPC más 3%: ajustaba los créditos por el CER (Coeficiente de Estabilización de Referencia) más una tasa pura del 6% anual, con una única capitalización.</p>

                    <p>En agosto de 2024, en el precedente "Lacuadra", la Corte Suprema descalificó una liquidación hecha con ese esquema. Señaló que el CER no es una tasa de interés reglamentada por el BCRA, sino un coeficiente de actualización del capital. A los pocos días, la CNAT dictó el Acta 2788, que dejó sin efecto la recomendación del Acta 2783 y no estableció otro criterio uniforme: cada sala y cada tribunal quedó liberado a su propio criterio.</p>

                    <aside class="bg-gris p-15 border-radius-15 fs-085 mt-20">
                        📌 <strong>En síntesis:</strong> el Acta 2783 ya no es el criterio vigente.
                    </aside>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 5 -->
                <section id="regimen-actual-ley" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-5"><span class="num-sec">5</span> ⚖️ El régimen actual: Ley 27.802 (arts. 54 y 55)</a>
                    </h2>

                    <p>La Ley 27.802 de Modernización Laboral se publicó en el Boletín Oficial el 6 de marzo de 2026 y fijó por primera vez un criterio legal de actualización para los créditos laborales:</p>

                    <ul class="lista-con-check">
                        <li>
                            🟢 <strong>Regla general (art. 54, que modifica el art. 276 de la LCT).</strong> Los créditos provenientes de relaciones individuales de trabajo se actualizan por la variación del IPC (Nivel General, INDEC), con más una tasa de interés del 3% anual, desde que cada suma es debida hasta el efectivo pago.
                        </li>
                        <li>
                            ⏳ <strong>Régimen transitorio (art. 55).</strong> Para los juicios en trámite y pendientes de sentencia definitiva al 6 de marzo de 2026, incluidas las quejas pendientes de resolución, se aplican intereses moratorios a la tasa pasiva que determine el BCRA, con dos límites: no puede superar el resultado de actualizar el capital por IPC más 3% anual, ni quedar por debajo del 67% de ese resultado.
                        </li>
                        <li>
                            📋 <strong>Otros cambios relevantes.</strong> La ley derogó la sanción por temeridad y malicia que duplicaba intereses, y reformuló el régimen de pago de sentencias en juicio (art. 277 LCT).
                        </li>
                        <li>
                            🏛️ <strong>Qué dijo la Corte Suprema después.</strong> El 5 de noviembre de 2026, en "Cabana Opanasiuk, Leonardo c/ Unir S.A.", la Corte dejó sin efecto ocho sentencias de la Sala II de la CNAT que habían actualizado por IPC más 3% y ordenó dictar nuevos fallos aplicando el art. 55. Antes, el 21 de octubre de 2026, la Suprema Corte de la Provincia de Buenos Aires había rechazado la inconstitucionalidad de ese artículo en el caso "Fernández".
                        </li>
                        <li>
                            ⚖️ <strong>Qué sigue abierto.</strong> Algunas salas de la CNAT y otros tribunales declararon inconstitucional el art. 55 por considerar que reduce el valor del crédito en los juicios en trámite. La Corte indicó que esos planteos exigen demostrar el perjuicio concreto en cada caso. Por eso, el criterio aplicable a tu juicio depende de la fecha en que se inició, de la jurisdicción y del estado de la causa.
                        </li>
                    </ul>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 6 -->
                <section id="impacto-juicio" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-6"><span class="num-sec">6</span> 💼 Cómo impacta en tu juicio o acuerdo</a>
                    </h2>

                    <ul class="lista-con-check">
                        <li>
                            📁 Si tu juicio ya estaba en trámite el 6/3/2026 y no tiene sentencia definitiva: el criterio de referencia es el del art. 55, con los planteos de inconstitucionalidad que corresponda evaluar según el caso.
                        </li>
                        <li>
                            🆕 Si el reclamo se inició después de esa fecha: rige la regla general del art. 54 (IPC más 3% anual).
                        </li>
                        <li>
                            🔒 Si tenés sentencia firme anterior a estos cambios: en principio rige la cosa juzgada y los criterios nuevos no reabren la liquidación. Conviene revisarlo con tu abogado.
                        </li>
                        <li>
                            🤝 Si estás en una conciliación (SECLO o Ministerio de Trabajo provincial): la actualización desde el despido es un parámetro objetivo para evaluar si la oferta de la empresa es razonable. Un abogado puede explicarte cuál corresponde a tu situación.
                        </li>
                    </ul>

                    <p>El monto final siempre depende de tu antigüedad, tu remuneración, la fecha del despido y el criterio que aplique el tribunal. Para una estimación del rubro base podés usar nuestra calculadora de despidos.</p>

                    <section class="flex-between flex-wrap gap-15 bg-gris p-15 border-radius-15 fs-08 mt-20">
                        <p class="m-0">Estimá tu indemnización laboral:</p>
                        <a href="<?= BASE_URL ?>calculadora-despidos" class="btn-capsula">🧮 Calculadora de despidos</a>
                    </section>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 7 -->
                <section id="comparativa-criterios" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-7"><span class="num-sec">7</span> 📊 Comparativa de los distintos criterios</a>
                    </h2>

                    <div class="custom-table-blog">
                        <div class="tr-blog-3cols tr-blog-header font-bold">
                            <div>Criterio</div>
                            <div>Qué establecía</div>
                            <div>Estado actual</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>❌ Acta 2764 (CNAT, 2022)</strong></div>
                            <div>Capitalización anual sucesiva de intereses</div>
                            <div>Descalificada por la Corte en "Oliva" (2024)</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>❌ Acta 2783/2784 (CNAT, 2024)</strong></div>
                            <div>CER más 6% anual, con una única capitalización</div>
                            <div>Descalificada en "Lacuadra" y dejada sin efecto por el Acta 2788</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>🔄 Acta 2788 (CNAT, 2024)</strong></div>
                            <div>Sin criterio uniforme: cada tribunal decide</div>
                            <div>Reemplazada en la práctica por la Ley 27.802</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>✅ Art. 54 Ley 27.802 (art. 276 LCT)</strong></div>
                            <div>IPC más 3% anual</div>
                            <div>Vigente desde el 6/3/2026 como regla general</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>⚖️ Art. 55 Ley 27.802</strong></div>
                            <div>Tasa pasiva BCRA, con techo y piso, para juicios en trámite al 6/3/2026</div>
                            <div>Aplicable según la Corte (5/11/2026); con debate de constitucionalidad en algunas jurisdicciones</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

                <!-- SECCION 8 -->
                <section id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog">
                        <a href="#preg-8"><span class="num-sec">8</span> ❓ Preguntas frecuentes</a>
                    </h2>

                    <div class="lista-faq-blog">
                        <details class="faq-item">
                            <summary class="faq-pregunta">¿El fallo Oliva significa que los trabajadores van a cobrar menos?</summary>
                            <p class="faq-respuesta">Oliva eliminó la capitalización periódica que generaba resultados que la Corte consideró desproporcionados. Cuánto se cobra hoy depende del criterio que aplique el tribunal en cada caso (arts. 54 y 55 de la Ley 27.802) y de la fecha de inicio del juicio. Por eso es clave que un abogado analice tu situación puntual.</p>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-pregunta">¿Qué pasa si mi juicio ya tenía sentencia firme antes de Oliva?</summary>
                            <p class="faq-respuesta">Si la sentencia estaba firme y consentida, rige la cosa juzgada y no se reabre la liquidación. Si el expediente seguía abierto o apelado, los jueces debían aplicar la doctrina de la Corte.</p>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-pregunta">¿Se aplica todo esto a los accidentes de trabajo y reclamos contra la ART?</summary>
                            <p class="faq-respuesta">Los reclamos por accidentes y enfermedades profesionales se rigen por la Ley 24.557 (LRT), que tiene su propio sistema: el ingreso base se actualiza por RIPTE y el art. 12 prevé intereses según su texto vigente (Ley 27.348). Los pisos mínimos se ajustan cada semestre por resolución de la Secretaría de Seguridad Social. La Ley 27.802 no modificó la LRT, y hoy se discute si sus arts. 54 y 55 alcanzan a los créditos del sistema de riesgos del trabajo. Hay sentencias que, para esos créditos, actualizaron por RIPTE y aplicaron intereses solo en caso de mora. Cada caso requiere análisis individual.</p>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-pregunta">¿Puedo reclamar la actualización desde el despido en una conciliación?</summary>
                            <p class="faq-respuesta">Sí. En las instancias prejudiciales (SECLO en CABA o el Ministerio de Trabajo de la Provincia), la actualización del crédito desde la fecha del despido es un parámetro razonable para evaluar la oferta de la empresa. Te recomendamos hacerlo con asesoramiento letrado.</p>
                        </details>
                    </div>

                    <!-- CTA WHATSAPP FINAL -->
                    <?php
                        $titulo = "💬 ¿Tenés un reclamo por despido?";
                        $descripcion = "Analizamos tu caso y los criterios de actualización que corresponden según tu jurisdicción y la fecha de inicio. Escribinos por WhatsApp · Consulta online sin cargo.";
                        $ancho = "100%";
                        $margen_top = "2.5";
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>

                    <!-- AUTORIA Y FUENTES -->
                    <?php
                        $AutorBlogSlug = 'romina-koniuch';
                        include __DIR__ . '/../componentes/bloque-autor.php';
                    ?>

                    <a href="#que-es-guia" class="link-volver-indice mt-30">&#8593; Volver al índice</a>
                </section>

            </section>
        </article>

    </section>
</main>
