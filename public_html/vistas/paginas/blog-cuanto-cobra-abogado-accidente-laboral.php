<?php
/**
 * VISTA: CUANTO COBRA UN ABOGADO POR UN ACCIDENTE LABORAL
 * Clonada desde blog-que-cubre-la-art.php
 */
?>
<main class="blog-container fade-in" data-scrollspy-blog>
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes laborales</a> &gt; <span class="txt-amarillo">Cuánto cobra un abogado por un accidente laboral</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Cuánto cobra un abogado por un accidente laboral</h1>

                <p class="articulo-lead">Los honorarios de un abogado por un accidente laboral dependen de la etapa, la jurisdicción y el acuerdo profesional. Además, el patrocinio ante las Comisiones Médicas es obligatorio y la Ley 27.348 regula quién paga esos honorarios y gastos. Te explicamos las diferencias y qué conviene preguntar antes de contratar.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 7 min</span>
                    <button class="articulo-print" type="button" data-print-page><?= render_icon('bookmark-solid', 'mr-5') ?> Imprimir esta guía</button>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <div class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="abogado-accidente-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#como-cobra" class="active"><span class="nav-num">1</span> ¿Cómo cobra un abogado por un accidente laboral?</a></li>
                                <li id="preg-2"><a href="#cuota-litis"><span class="nav-num">2</span> Cuota litis vs otros sistemas</a></li>
                                <li id="preg-3"><a href="#gastos-iniciales"><span class="nav-num">3</span> ¿Hay gastos iniciales?</a></li>
                                <li id="preg-4"><a href="#cuanto-se-lleva"><span class="nav-num">4</span> ¿Cuánto se lleva el abogado?</a></li>
                                <li id="preg-5"><a href="#cuando-conviene"><span class="nav-num">5</span> ¿Cuándo conviene contratar un abogado?</a></li>
                                <li id="preg-6"><a href="#preguntas-frecuentes"><span class="nav-num">6</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te rechazaron el reclamo o te ofrecen poco?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento.";
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
                <div id="como-cobra" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Cómo cobra un abogado por un accidente laboral?</a></h2>
                    <p>El costo no tiene una única respuesta para todas las etapas. Para el trámite ante la Comisión Médica, la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348, artículo 1</a>, exige patrocinio letrado desde la primera presentación y pone los honorarios y gastos de esa instancia a cargo de la ART, salvo la excepción legal prevista para ciertos trabajadores no registrados.</p>
                    <p>La etapa judicial y otras gestiones tienen reglas propias. No des por sentado que la cobertura legal de honorarios ante la Comisión Médica también paga todo trabajo extrajudicial o judicial, ni que un abogado solo cobra si se obtiene un resultado favorable. El alcance económico debe aclararse antes de contratar.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Importante:</span> preguntá qué tareas cubre el patrocinio obligatorio de la Comisión Médica, qué gastos están a cargo de la ART y qué honorarios podrían corresponder por otras etapas. Pedí que el acuerdo profesional detalle cada concepto.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="cuota-litis" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cuota litis vs otros sistemas</a></h2>
                    <p>Hay que distinguir el procedimiento ante la Comisión Médica de la eventual etapa judicial. La normativa aplicable y el acuerdo profesional definen los honorarios y los gastos de cada intervención; no supongas que una modalidad sirve para todos los casos.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Sistema</div>
                            <div>Explicación</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Comisión Médica</strong></div>
                            <div>El patrocinio letrado es obligatorio. Los honorarios y gastos de esta instancia están a cargo de la ART, con la excepción prevista en el artículo 1 de la Ley 27.348 para ciertos trabajadores no registrados.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Etapa judicial</strong></div>
                            <div>Los honorarios, costas y requisitos se determinan conforme a la normativa profesional y procesal de la jurisdicción. No hay un porcentaje nacional único aplicable a todo caso.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Otras gestiones</strong></div>
                            <div>El alcance y el costo deben explicarse antes de iniciar el trabajo y quedar claros en el acuerdo con el profesional.</div>
                        </div>
                    </div>
                    <p class="mt-20">Además, el artículo 2 de la Ley 27.348 prohíbe el pacto de cuota litis en los procesos judiciales comprendidos en su Título I. No traslades esa regla a cualquier gestión sin revisar si el trámite está incluido y qué normas profesionales locales lo regulan.</p>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="gastos-iniciales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> ¿Hay gastos iniciales?</a></h2>
                    <p>En la instancia ante la Comisión Médica, la ley pone los honorarios y gastos a cargo de la ART, con la excepción indicada para trabajadores no registrados cuyo empleador se encuentre en el supuesto del artículo 28, apartado 1, de la Ley 24.557. Esa regla específica no permite concluir que toda consulta, gestión privada o etapa judicial sea gratuita.</p>
                    <p>Antes de empezar, preguntá si existe un costo por la consulta, qué tareas se incluyen, qué gastos pueden generarse fuera de la Comisión Médica y quién debe afrontarlos. Pedí que las respuestas queden documentadas en el acuerdo profesional.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> pedí un detalle por escrito de honorarios, gastos, etapas incluidas y condiciones de terminación del encargo.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="cuanto-se-lleva" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> ¿Cuánto se lleva el abogado?</a></h2>
                    <p>No hay un porcentaje nacional único que pueda aplicarse a todo reclamo. En sede administrativa ante las <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a>, la Ley 27.348 establece quién afronta honorarios y gastos; en la vía judicial pueden incidir las normas arancelarias y procesales locales.</p>
                    <p>Si acordás honorarios para otra etapa, preguntá cómo se calculan, sobre qué base, qué trabajo incluyen y qué gastos podrían descontarse o reclamarse. La respuesta debe ser clara y compatible con las reglas profesionales de la jurisdicción.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">🧾</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Recomendación:</span> compará experiencia, claridad, alcance del servicio y condiciones por escrito. No elijas solo por un porcentaje anunciado sin entender qué cubre.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="cuando-conviene" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> ¿Cuándo conviene contratar un abogado en un accidente laboral?</a></h2>
                    <p>Hay casos en los que tener un abogado especializado marca una gran diferencia:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li><strong>Rechazo de la ART:</strong> Te dicen que "no corresponde" o que tu caso no es accidente/enfermedad profesional.</li>
                            <li><strong>Alta médica prematura:</strong> Te dieron el alta pero seguís con dolor o limitaciones (<a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">ver guía</a>).</li>
                            <li><strong>Incapacidad mal valuada:</strong> Creés que el porcentaje que te asignaron es bajo respecto a tu secuela.</li>
                            <li><strong>Divergencia ante la Comisión Médica:</strong> Necesitás impugnar un dictamen.</li>
                            <li><strong>Negativa por "no figura en el listado":</strong> Especialmente en <a href="<?= BASE_URL ?>blog/enfermedad-profesional-como-se-reconoce-si-art-dice-que-no-figura-en-el-listado" style="color:inherit;text-decoration:none;">enfermedades profesionales</a>.</li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo práctico:</span> Antes de firmar cualquier acuerdo con la ART, <strong>consultá con un abogado</strong>. Muchas veces lo que te ofrecen es menor a lo que te corresponde.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas más comunes sobre honorarios de abogados en accidentes laborales:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto cobra un abogado por un accidente laboral?</summary>
                            <p class="mt-15 fs-09">No hay un monto único para todas las etapas. Ante la Comisión Médica, el patrocinio es obligatorio y los honorarios y gastos están a cargo de la ART, salvo la excepción legal. En la vía judicial pueden regir normas arancelarias y procesales locales.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Tengo que pagar para que me asesoren?</summary>
                            <p class="mt-15 fs-09">La consulta inicial y otras gestiones privadas pueden tener condiciones distintas según el profesional. En el procedimiento ante la Comisión Médica, la Ley 27.348 pone los honorarios y gastos a cargo de la ART, con una excepción legal. Preguntá por escrito qué incluye cualquier servicio fuera de esa instancia.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué es la cuota litis?</summary>
                            <p class="mt-15 fs-09">Es un acuerdo de honorarios vinculado al resultado. El artículo 2 de la Ley 27.348 prohíbe ese pacto en los procesos judiciales comprendidos en su Título I. Antes de aceptar cualquier modalidad, verificá qué etapa cubre y si está permitida por las reglas aplicables.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo contratar abogado si ya inicié el reclamo solo?</summary>
                            <p class="mt-15 fs-09">Podés consultar a un abogado aunque el trámite ya haya empezado. La oportunidad y la forma de incorporarlo dependen del estado del expediente; en Comisión Médica el patrocinio letrado es obligatorio y la prueba debe revisarse desde la primera presentación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Quién paga al abogado que me patrocina ante la Comisión Médica?</summary>
                            <p class="mt-15 fs-09">El artículo 1 de la Ley 27.348 pone los honorarios y gastos de esa instancia a cargo de la ART, excepto para trabajadores no registrados cuyo empleador se encuentre en el supuesto del artículo 28, apartado 1, de la Ley 24.557. La regla no define automáticamente el costo de una etapa judicial posterior.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cómo elegir un abogado para mi reclamo?</summary>
                            <p class="mt-15 fs-09">Preguntá quién llevará el expediente, qué experiencia tiene en reclamos por riesgos del trabajo, qué etapas incluye el servicio, cómo se informarán los avances y qué honorarios o gastos podrían corresponder fuera de la Comisión Médica. Pedí que las condiciones queden claras por escrito antes de contratar.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te ofrecen poco o te rechazaron el reclamo?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento, sin cargo y sin compromiso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
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
