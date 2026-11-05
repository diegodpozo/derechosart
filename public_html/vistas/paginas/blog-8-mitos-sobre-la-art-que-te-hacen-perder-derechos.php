<?php
/**
 * VISTA: 8 MITOS SOBRE LA ART QUE TE HACEN PERDER DERECHOS (ARTICULO DE BLOG)
 * Estructura fija clonada de blog-que-cubre-la-art.php
 */
?>

<main class="blog-container fade-in" data-scrollspy-blog>
    <section class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <section class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">8 mitos sobre la ART que te hacen perder derechos</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">8 mitos sobre la ART que te hacen perder derechos</h1>

                <p class="articulo-lead">Muchas veces, por desinformacion o por lo que te dijo el medico de la ART, terminas renunciando a derechos que si te corresponden por ley. Aca te dejo los 8 mitos mas habituales que hacen perder tiempo, pruebas y, muchas veces, la posibilidad de cobrar lo que te corresponde.</p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>MITO VS REALIDAD</strong>
                            <span>Clarísimo y directo</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('file-lines') ?></div>
                        <div class="char-texto">
                            <strong>LEYES VIGENTES</strong>
                            <span>LRT 24.557 + normativa</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>QUE HACER</strong>
                            <span>Acciones concretas</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('shield-halved') ?></div>
                        <div class="char-texto">
                            <strong>DEFENSA</strong>
                            <span>Ante rechazo o alta</span>
                        </div>
                    </div>
                </div>

                <section class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: <?= date('Y') ?></span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 9 min</span>
                    <button class="articulo-print" type="button" data-print-page><?= render_icon('bookmark-solid', 'mr-5') ?> Imprimir esta guía</button>
                </section>
            </header>
        </section>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <section class="sidebar-sticky">
                <section class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#mito-1" class="active"><span class="nav-num">1</span> In itinere: accidentes en el trayecto</a></li>
                                <li id="preg-2"><a href="#mito-2"><span class="nav-num">2</span> Rechazo de la ART</a></li>
                                <li id="preg-3"><a href="#mito-3"><span class="nav-num">3</span> Firmar el alta médica</a></li>
                                <li id="preg-4"><a href="#mito-4"><span class="nav-num">4</span> Quién determina la incapacidad</a></li>
                                <li id="preg-5"><a href="#mito-5"><span class="nav-num">5</span> Lesiones preexistentes</a></li>
                                <li id="preg-6"><a href="#mito-6"><span class="nav-num">6</span> Cobertura después del despido</a></li>
                                <li id="preg-7"><a href="#mito-7"><span class="nav-num">7</span> Aceptar una oferta y su efecto</a></li>
                                <li id="preg-8"><a href="#mito-8"><span class="nav-num">8</span> Costos del abogado</a></li>
                                <li id="preg-9"><a href="#consejos-practicos"><span class="nav-num">9</span> Consejos prácticos para no perder derechos</a></li>
                                <li id="preg-10"><a href="#preguntas-frecuentes"><span class="nav-num">10</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </section>

                <?php
                    $titulo = "¿Te están presionando?";
                    $descripcion = "Te asesoramos gratis y sin compromiso.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
                    <span>&#10004;</span> Solo cobramos si vos cobrás.
                </p>
            </section>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <aside class="alerta-importante mt-0 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                    <span class="alerta-icon" aria-hidden="true">&#9888;</span>
                    <p class="m-0 fs-09"><span class="subrayado-amarillo">Regla de oro:</span> La cobertura por <a href="<?= BASE_URL ?>accidentes-de-trabajo">accidentes de trabajo</a> y <a href="<?= BASE_URL ?>enfermedades-profesionales">enfermedades profesionales</a> se rige por la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a> y sus modificatorias. Muchos de estos "consejos" son falsos y pueden disuadirte de reclamar.</p>
                </aside>

                <!-- MITO 1 -->
                <section id="mito-1" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> MITO: "Si me accidento yendo o volviendo, la ART no me cubre"</a></h2>
                    <p><strong>REALIDAD:</strong> La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557, artículo 6, apartado 1</a>, contempla el accidente ocurrido en el trayecto entre el domicilio y el lugar de trabajo, con las condiciones y excepciones previstas en la norma. La ART puede discutir si el hecho ocurrió en ese trayecto o si hubo una interrupción relevante; no significa que todo accidente de viaje quede excluido.</p>
                    <p>Conservá constancias del recorrido, del accidente y de la atención médica. Si intervino un tercero, puede analizarse además un reclamo contra esa persona, pero la opción entre regímenes y la coordinación con las prestaciones de la ART requieren asesoramiento.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 2 -->
                <section id="mito-2" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> MITO: "Si la ART me rechaza, ya no puedo reclamar"</a></h2>
                    <p><strong>REALIDAD:</strong> Un rechazo puede discutirse por la vía prevista para el caso. Como regla, la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> establece la intervención de la Comisión Médica y contempla vías de revisión, con excepciones que deben verificarse según el supuesto y la jurisdicción.</p>
                    <p>La <a href="https://www.argentina.gob.ar/normativa/nacional/norma-422732/texto" target="_blank" rel="noopener">Resolución SRT 5/2026</a> modificó el procedimiento y requiere prestar atención a la presentación inicial y a la prueba. Pedí la decisión por escrito, reuní los antecedentes médicos y consultá antes de dejar vencer una notificación.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 3 -->
                <section id="mito-3" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> MITO: "Si firmé el alta, no puedo cuestionarla"</a></h2>
                    <p><strong>REALIDAD:</strong> La firma de una constancia puede acreditar su recepción, pero su alcance depende de lo que dice el documento y de las circunstancias. No equivale necesariamente a aceptar una incapacidad, renunciar a un reclamo o cerrar cualquier revisión.</p>
                    <p>Guardá una copia completa y verificá si se trata de un alta médica, una conformidad, una liquidación o un acuerdo homologado. Si seguís con síntomas o no entendés qué aceptaste, consultá enseguida cuál es la vía y el plazo aplicables; no firmes un documento cuyo efecto desconocés.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 4 -->
                <section id="mito-4" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> MITO: "El médico de la ART decide definitivamente mi incapacidad"</a></h2>
                    <p><strong>REALIDAD:</strong> El profesional de la ART interviene en la atención, pero la determinación de la naturaleza laboral de la contingencia y del carácter y grado de incapacidad corresponde a las Comisiones Médicas dentro de sus competencias, conforme al artículo 21 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a>. Las decisiones pueden tener vías de revisión según el trámite y la jurisdicción.</p>
                    <p>La Comisión Médica no sustituye la necesidad de aportar prueba pertinente. La normativa vigente exige atender a la presentación inicial y a la documentación del expediente; pedí que revisen tus antecedentes y explicá las limitaciones funcionales con precisión.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 5 -->
                <section id="mito-5" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> MITO: "Una lesión previa siempre excluye la cobertura"</a></h2>
                    <p><strong>REALIDAD:</strong> No toda afección previa excluye automáticamente la cobertura. El artículo 6, apartado 3, inciso b, de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a> contempla la exclusión de incapacidades preexistentes acreditadas mediante el examen preocupacional efectuado conforme a las pautas aplicables. La existencia de antecedentes, por sí sola, no resuelve si una nueva exposición o accidente laboral produjo una lesión o agravó el cuadro.</p>
                    <p>Reuní los estudios anteriores y posteriores al hecho y consultá cómo se determina el nexo causal y la incapacidad atribuible a cada condición. El análisis requiere historia clínica y prueba concreta.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 6 -->
                <section id="mito-6" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> MITO: "Si me despiden, pierdo el derecho por el accidente"</a></h2>
                    <p><strong>REALIDAD:</strong> El despido posterior no borra automáticamente el derecho a reclamar por una contingencia laboral ocurrida durante la cobertura. Sin embargo, hay que establecer cuándo ocurrió el hecho o la primera manifestación invalidante, qué ART debía intervenir y qué prestaciones se reclaman.</p>
                    <p>Conservá la denuncia, las constancias de atención, las notificaciones de la ART y la comunicación de despido. La prescripción y el organismo competente dependen del reclamo y de sus fechas; consultá sin demora.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 7 -->
                <section id="mito-7" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> MITO: "Aceptar una oferta siempre termina el reclamo"</a></h2>
                    <p><strong>REALIDAD:</strong> El efecto depende de qué documento se firmó, si hubo acuerdo u homologación y qué decisión quedó notificada. El artículo 2 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> establece vías de revisión y prevé que ciertos decisorios no recurridos pueden adquirir autoridad de cosa juzgada administrativa. No toda constancia de atención o recepción de una prestación equivale a un acuerdo final.</p>
                    <p>Antes de aceptar una propuesta, revisá el expediente, la liquidación y los efectos del acto con asesoramiento. No dejes vencer una notificación mientras intentás aclarar el alcance de lo firmado.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 8 -->
                <section id="mito-8" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> MITO: "El abogado siempre se paga de mi bolsillo"</a></h2>
                    <p><strong>REALIDAD:</strong> Ante las Comisiones Médicas el patrocinio letrado es obligatorio. El artículo 1 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> establece que los honorarios y gastos de esa instancia están a cargo de la ART, con una excepción legal para trabajadores no registrados cuyo empleador se encuentre en el supuesto del artículo 28, apartado 1, de la Ley 24.557.</p>
                    <p>Eso no significa que todo trabajo judicial o extrajudicial sea gratuito ni que exista un porcentaje universal. Los honorarios y gastos de otras etapas dependen de la jurisdicción, las reglas profesionales y el acuerdo con el abogado; pedí que te expliquen por escrito qué incluye cada intervención.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- CONSEJOS PRACTICOS -->
                <section id="consejos-practicos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-9"><span class="num-sec">9</span> Consejos prácticos para no perder tus derechos</a></h2>
                    <table class="custom-table-blog mt-25">
                        <thead>
                            <tr>
                                <th scope="col">Acción</th>
                                <th scope="col">Por qué es importante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Denuncia lo antes posible</th>
                                <td>Cuanto antes quede constancia, más fácil probar el hecho.</td>
                            </tr>
                            <tr>
                                <th scope="row">Guarda todo</th>
                                <td>Denuncia, historias clínicas, estudios, recetas, actas, cartas documentos y mensajes.</td>
                            </tr>
                            <tr>
                                <th scope="row">No firmes sin leer</th>
                                <td>Especialmente altas, conformidades, acuerdos o renuncias.</td>
                            </tr>
                            <tr>
                                <th scope="row">Describí tus limitaciones</th>
                                <td>Explicá qué tareas no podés hacer y cómo te afecta la lesión.</td>
                            </tr>
                            <tr>
                                <th scope="row">Buscá asesoramiento especializado</th>
                                <td>La vía y los pasos dependen de las circunstancias del caso.</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- PREGUNTAS FRECUENTES -->
                <section id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-10"><span class="num-sec">10</span> Preguntas frecuentes sobre mitos de la ART</a></h2>

                    <details class="bg-gris p-25 border-radius-15 mt-25" open>
                        <summary class="fw-700 pointer">¿Me cubre la ART si el accidente ocurrió yendo o volviendo del trabajo?</summary>
                        <div class="mt-15">
                            <p class="m-0">La Ley 24.557 contempla el trayecto entre el domicilio y el trabajo, con las condiciones y excepciones de su artículo 6, apartado 1. La ART puede revisar las circunstancias y la prueba del recorrido.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Puedo cuestionar el rechazo de la ART?</summary>
                        <div class="mt-15">
                            <p class="m-0">Sí, el rechazo puede cuestionarse por el procedimiento aplicable. La Ley 27.348 y la normativa SRT vigente determinan las vías y la prueba; verificá la notificación, la jurisdicción y los plazos antes de actuar.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Firmar el alta médica impide revisar el caso?</summary>
                        <div class="mt-15">
                            <p class="m-0">No necesariamente. El efecto depende del contenido del documento y de si se trata de una constancia de recepción, una conformidad, una liquidación o un acuerdo homologado. Conservá una copia y revisá su alcance antes de aceptar sus efectos.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Una lesión o enfermedad previa excluye siempre la cobertura?</summary>
                        <div class="mt-15">
                            <p class="m-0">No automáticamente. La Ley 24.557 contempla una exclusión para incapacidades preexistentes acreditadas mediante el examen preocupacional en las condiciones legales; la causalidad y las secuelas atribuibles al trabajo deben revisarse con la historia clínica y la prueba.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Pierdo el reclamo ante la ART si me despiden?</summary>
                        <div class="mt-15">
                            <p class="m-0">El despido posterior no elimina automáticamente un reclamo por una contingencia laboral ocurrida durante la cobertura. Hay que determinar cuándo ocurrió el hecho, qué ART debía responder y qué prestación se reclama.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Quién paga al abogado que me patrocina ante la Comisión Médica?</summary>
                        <div class="mt-15">
                            <p class="m-0">La Ley 27.348 establece que los honorarios y gastos de esa instancia están a cargo de la ART, salvo la excepción legal para trabajadores no registrados cuyo empleador se encuentre en el supuesto del artículo 28, apartado 1, de la Ley 24.557. La etapa judicial se rige por las normas locales y el acuerdo profesional correspondiente.</p>
                        </div>
                    </details>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <footer class="articulo-footer-meta mt-50 flex-between fs-08">
                    <span>Solo cobramos si vos cobrás.</span>
                    <span>DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía <?= date('Y') ?></span>
                </footer>

                <?php
                    $titulo = "¿Te presionan con un alta o un rechazo?";
                    $descripcion = "Te ayudamos a defender tus derechos sin cargo para analizar el caso.";
                    $ancho = "100%";
                    $margen_top = "2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <?php include __DIR__ . '/../componentes/bloque-autor.php'; ?>

            </section>
        </article>
    </section>
</main>
