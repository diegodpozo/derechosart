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
                                <li id="preg-1"><a href="#mito-1" class="active"><span class="nav-num">1</span> "Si estoy en negro, la ART no me cubre"</a></li>
                                <li id="preg-2"><a href="#mito-2"><span class="nav-num">2</span> "Si me dieron el alta tengo que volver"</a></li>
                                <li id="preg-3"><a href="#mito-3"><span class="nav-num">3</span> "Si me accidento yendo/volviendo no me cubre"</a></li>
                                <li id="preg-4"><a href="#mito-4"><span class="nav-num">4</span> "Si la ART me rechaza ya no hay nada que hacer"</a></li>
                                <li id="preg-5"><a href="#mito-5"><span class="nav-num">5</span> "Solo cobro si hay fractura"</a></li>
                                <li id="preg-6"><a href="#mito-6"><span class="nav-num">6</span> "Tengo que firmar todo lo que me piden"</a></li>
                                <li id="preg-7"><a href="#mito-7"><span class="nav-num">7</span> "Ya paso el tiempo, no puedo reclamar"</a></li>
                                <li id="preg-8"><a href="#mito-8"><span class="nav-num">8</span> "El medico de la ART siempre tiene razon"</a></li>
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
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> MITO: "Si estoy en negro, la ART no me cubre"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>La falta de registración no elimina automáticamente el derecho a reclamar.</u> Si el empleador tenía ART pero omitió declarar tu contratación, el artículo 28, apartado 2, de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557</a> dispone que la aseguradora otorgue las prestaciones y permite que luego repita su costo contra el empleador. Si el empleador no estaba afiliado a una ART, el apartado 1 establece que responde directamente por las prestaciones.</p>
                    <p>Además, el artículo 1 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> prevé una excepción a la instancia obligatoria ante la Comisión Médica para trabajadores no registrados cuyo empleador se encuentre en el supuesto del artículo 28, apartado 1, de la Ley 24.557. La vía aplicable depende de la situación concreta y de la jurisdicción.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Denuncia el accidente o la enfermedad profesional aunque estes en negro. Guarda toda constancia que acredite el hecho y el vinculo laboral (mensajes, recibos, fotos, testigos). No te quedes con un "no te cubre" sin que te lo fundamenten por escrito.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 2 -->
                <section id="mito-2" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> MITO: "Si me dieron el alta de la ART tengo que volver si o si"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>No, si seguis con dolor o con secuelas.</u> El alta medica no es inapelable. Si no estas conforme con ella porque seguis sintiendo dolores, tenes dificultades para realizar tus tareas o consideras que no estas recuperado, podes plantear la <strong>divergencia del alta</strong> ante la Comisión Médica correspondiente.</p>
                    <p>El alta no implica por sí sola que no existan secuelas. Si hay una discrepancia sobre el carácter o grado de incapacidad, la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557, artículo 21</a>, regula la intervención de las Comisiones Médicas; el trámite aplicable depende de las circunstancias y la jurisdicción.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> No firmes papeles apresurado. Guarda el acta/constancia de alta, informes, estudios y, si seguis con dolor, plantea la divergencia dentro del plazo que corresponda al caso concreto.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 3 -->
                <section id="mito-3" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> MITO: "Si me accidento yendo o volviendo del trabajo, la ART no me cubre"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>La Ley 24.557 contempla los accidentes <em>in itinere</em>.</u> Su <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">artículo 6, apartado 1</a>, incluye los hechos ocurridos en el trayecto entre el domicilio y el lugar de trabajo, siempre que no se haya interrumpido o alterado por causas ajenas al trabajo, con las excepciones previstas en la norma.</p>
                    <p>La ART puede alegar un "desvio del trayecto habitual". Eso no significa automaticamente que pierdas el derecho, sino que puede haber una discusión sobre el nexo. Ahi cobran relevancia las pruebas.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Denuncialo igual que un accidente laboral. Guarda fotos del lugar, datos de testigos, parte policial/guardia, tickets, registro de viaje o cualquier dato que acredite el recorrido.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 4 -->
                <section id="mito-4" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> MITO: "Si la ART me rechaza, ya no hay nada que hacer"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>Un rechazo puede cuestionarse por las vías previstas para el caso.</u> Como regla general, la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> establece una instancia ante la Comisión Médica, con patrocinio letrado, y contempla la revisión judicial. La propia ley exceptúa de esa instancia obligatoria a ciertos trabajadores no registrados cuando su empleador no estaba afiliado a una ART; la vía concreta depende de la situación y la jurisdicción.</p>
                    <p>Ademas, hay que prestar atencion al plazo con el que la ART debe expedirse sobre la aceptacion/rechazo.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Pedi el <strong>rechazo por escrito</strong> con sus fundamentos. Reuni historia clinica, estudios, denuncia y asesorate <strong>antes</strong> de dejar pasar tiempo.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 5 -->
                <section id="mito-5" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> MITO: "Solo cobro si hay fractura"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>La evaluación no se limita a verificar si hubo una fractura.</u> Otras lesiones también pueden dejar secuelas; si se acredita una incapacidad laboral permanente, su determinación y las prestaciones correspondientes se rigen por la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557, incluidos sus artículos 8 y 14</a>. No toda lesión genera automáticamente una indemnización.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Segui con el tratamiento. Si al alta medica quedas con dolor o limitacion para realizar ciertas tareas, no te conformes. Podes consultar sobre la evaluacion de incapacidad.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 6 -->
                <section id="mito-6" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> MITO: "Tengo que firmar todo lo que me piden"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>NO firmes sin entender.</u> Algunos formularios son necesarios para recibir atencion, pero otros pueden tener alcances que no te convienen o pueden interpretarse como conformidad con el alta/incapacidad.</p>
                    <p><strong>Nunca firmes un "acuerdo", "conformidad" o cualquier documento que diga que renuncias a algo sin leerlo completo y entenderlo.</strong></p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Si te presionan para firmar y no entendes, pedi una copia, tomale foto y consulta antes de firmar. En caso de duda, <strong>no firmes</strong>.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 7 -->
                <section id="mito-7" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> MITO: "Ya paso el tiempo, no puedo reclamar"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>El plazo debe analizarse según la prestación y las circunstancias del caso.</u> El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">artículo 44, apartado 1, de la Ley 24.557</a> establece que las acciones prescriben a los dos años desde la fecha en que la prestación debió abonarse o prestarse y, en todo caso, a los dos años desde el cese de la relación laboral. La determinación del punto de partida requiere revisar el reclamo concreto.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Si tenes dudas sobre plazos, consulta con un abogado especializado en ART <strong>cuanto antes</strong>. No esperes a "ver si vence" para pedir una opinion.</p>
                    </aside>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </section>

                <!-- MITO 8 -->
                <section id="mito-8" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> MITO: "El medico de la ART siempre tiene razon"</a></h2>
                    <p><strong>REALIDAD:</strong> <u>El médico de la ART no resuelve por sí solo una controversia sobre la incapacidad dentro del sistema LRT.</u> El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">artículo 21 de la Ley 24.557</a> asigna a las Comisiones Médicas la determinación de la naturaleza laboral de la contingencia y del carácter y grado de incapacidad, en el marco de sus competencias y con las vías de revisión que correspondan.</p>
                    <aside class="tip-blog mt-25 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div>&#128161;</div>
                        <p class="m-0 fs-09"><strong>Que hacer:</strong> Describi con claridad que podes y que NO podes hacer hoy. Anota las tareas que te duelen. Llevá tus estudios al examen de la Comision Medica. Si hay discrepancia, plantea la divergencia por la via correspondiente.</p>
                    </aside>
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
                        <summary class="fw-700 pointer">¿Si trabajo en negro me pueden decir que no me cubre?</summary>
                        <div class="mt-15">
                            <p class="m-0">La falta de registro no elimina automáticamente el derecho. Si el empleador tenía ART pero omitió declarar tu contratación, la aseguradora debe otorgar las prestaciones y puede repetir su costo contra el empleador. Si no estaba afiliado, responde directamente por las prestaciones. La vía aplicable depende de la situación y la jurisdicción. (<a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" target="_blank" rel="noopener">Ley 24.557, art. 28</a>).</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Puedo impugnar el alta si sigo con dolor?</summary>
                        <div class="mt-15">
                            <p class="m-0">Si considerás que no estás recuperado, consultá cuanto antes cuál es la vía y el plazo aplicables a tu caso. Conservá el alta y la documentación médica. La intervención de las Comisiones Médicas se rige por la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/norma.htm" target="_blank" rel="noopener">Ley 27.348</a> y las normas de la jurisdicción.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿El accidente in itinere se cubre igual?</summary>
                        <div class="mt-15">
                            <p class="m-0">La Ley 24.557 contempla el trayecto entre el domicilio y el trabajo, con las condiciones y excepciones de su artículo 6, apartado 1. La prueba del recorrido y de las circunstancias del hecho puede ser relevante.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Si la ART me rechaza pierdo todo?</summary>
                        <div class="mt-15">
                            <p class="m-0">El rechazo puede cuestionarse por la vía prevista según el caso. La Ley 27.348 establece, como regla, una instancia ante la Comisión Médica y contempla revisión judicial, pero prevé una excepción para ciertos trabajadores no registrados cuando su empleador no estaba afiliado a una ART.</p>
                        </div>
                    </details>

                    <details class="bg-gris p-25 border-radius-15 mt-15">
                        <summary class="fw-700 pointer">¿Tengo que firmar el alta para cobrar?</summary>
                        <div class="mt-15">
                            <p class="m-0">Depende del documento y de lo que declara. Pedí una copia, leela completa y consultá antes de firmar una conformidad o un acuerdo cuyo alcance no tengas claro.</p>
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
