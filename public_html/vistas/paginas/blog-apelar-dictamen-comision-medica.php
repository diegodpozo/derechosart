<?php
$DatosCabeceraBlog = [
    'categoria_url' => 'comisiones-medicas',
    'categoria_miga' => 'Comisión Médica',
    'miga' => 'Apelar un dictamen',
    'categoria' => 'COMISIÓN MÉDICA',
    'titulo' => 'Cómo apelar el dictamen de la Comisión Médica',
    'lead' => 'Si no estás de acuerdo con lo que resolvió la Comisión Médica, la Ley 27.348 prevé vías para pedir revisión o recurrir a la Justicia Laboral. El camino y el plazo dependen de la resolución, la jurisdicción y las reglas aplicables.',
    'actualizado' => 'Noviembre 2026',
    'lectura' => '9 min',
];

$ItemsSidebarBlog = [
    ['id' => 'que-significa-dictamen', 'texto' => 'Qué significa el dictamen y qué se cuestiona'],
    ['id' => 'cuando-apelar', 'texto' => 'Cuándo conviene revisar la decisión'],
    ['id' => 'vias-de-revision', 'texto' => 'Las vías de revisión de la Ley 27.348'],
    ['id' => 'plazo-apelacion', 'texto' => 'El plazo y la notificación'],
    ['id' => 'prueba-documentacion', 'texto' => 'Qué documentación reunir'],
    ['id' => 'preparar-recurso', 'texto' => 'Cómo preparar el planteo'],
    ['id' => 'preguntas-frecuentes-apelacion', 'texto' => 'Preguntas frecuentes'],
];

$TituloCtaSidebarBlog = '¿No estás de acuerdo con el dictamen?';
$DescripcionCtaSidebarBlog = 'Revisamos la resolución y te orientamos sobre las vías posibles para tu caso.';
$FuentesNormativasBlog = 'Ley 27.348, artículos 1 a 3; Resoluciones SRT 298/2017 y 82/2020; información oficial de la SRT sobre trámites ante Comisiones Médicas.';
?>

<main class="blog-container fade-in" data-scrollspy-blog>
    <section class="contenedor grid-blog" aria-label="Guía para apelar un dictamen de Comisión Médica">

        <section class="articulo-header-wrapper">
            <?php include __DIR__ . '/../blog/cabecera-articulo.php'; ?>
        </section>

        <?php include __DIR__ . '/../blog/sidebar.php'; ?>

        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <section id="que-significa-dictamen" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué significa el dictamen y qué se puede cuestionar</a></h2>

                    <p>Un dictamen médico puede formar parte del expediente, pero para saber qué recurrir primero identificá el acto que recibiste: puede haber una resolución de la Comisión Médica o una decisión del Servicio de Homologación. Leé el documento completo y su notificación; el artículo 2 de la Ley 27.348 regula la revisión de lo resuelto por la Comisión Médica jurisdiccional.</p>

                    <p>El desacuerdo puede referirse, por ejemplo, al carácter laboral de la contingencia, a la incapacidad reconocida o a las prestaciones. No alcanza con decir que el resultado es injusto: el planteo debe señalar qué parte de la decisión cuestionás, por qué y con qué elementos del expediente lo respaldás.</p>

                    <aside class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <span class="alerta-icon">⚠️</span>
                        <p class="m-0 fs-09"><strong>No confundas trámites distintos:</strong> la divergencia con un alta médica, el desacuerdo con un tratamiento y el recurso contra una resolución de Comisión Médica no son lo mismo. La vía y los requisitos pueden cambiar según el acto que te notificaron.</p>
                    </aside>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="cuando-apelar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cuándo conviene revisar la decisión</a></h2>

                    <p>Pedí una revisión profesional si la resolución rechazó el origen laboral, fijó una incapacidad que no refleja tus secuelas, omitió pruebas relevantes o resolvió sobre prestaciones que considerás incorrectas. También hay que revisar si el documento que recibiste es definitivo o si todavía corresponde completar una etapa del procedimiento.</p>

                    <ul class="lista-items-blog mt-20">
                        <li>La conclusión no coincide con los estudios, informes o tratamientos incorporados al expediente.</li>
                        <li>La decisión no explica cómo valoró una prueba que podría cambiar el resultado.</li>
                        <li>El porcentaje o el carácter laboral reconocidos no reflejan los hechos y antecedentes del caso.</li>
                        <li>No tenés claro si recibiste un dictamen médico, una resolución administrativa o una propuesta de acuerdo.</li>
                    </ul>

                    <p class="mt-20">No firmes ni dejes vencer una notificación sin entender sus efectos. Que una decisión sea desfavorable no significa que exista una única estrategia válida para todos los casos.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="vias-de-revision" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Qué vías prevé la Ley 27.348 para apelar</a></h2>

                    <p>El artículo 2 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/270000-274999/272119/texact.htm" target="_blank" rel="noopener">Ley 27.348</a> establece más de una vía: después de la instancia ante la Comisión Médica jurisdiccional, las partes pueden solicitar la revisión ante la Comisión Médica Central; además, el trabajador puede recurrir lo resuelto por la comisión jurisdiccional ante la justicia ordinaria laboral provincial o de la Ciudad Autónoma de Buenos Aires que corresponda.</p>

                    <p>Si la Comisión Médica Central dicta una decisión, la ley contempla un recurso directo ante los tribunales de alzada con competencia laboral o, donde no existan, ante el tribunal laboral de instancia única correspondiente a la jurisdicción de la comisión médica que intervino. No es una apelación genérica ante cualquier juzgado.</p>

                    <table class="custom-table-blog mt-25" aria-label="Vías para recurrir decisiones de Comisiones Médicas">
                        <caption>Vías de revisión previstas en el artículo 2 de la Ley 27.348</caption>
                        <thead>
                            <tr>
                                <th scope="col">Qué decisión querés revisar</th>
                                <th scope="col">Vía prevista a nivel nacional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Resolución de la Comisión Médica jurisdiccional</th>
                                <td>Revisión ante la Comisión Médica Central o recurso del trabajador ante la justicia laboral competente, conforme al artículo 2 de la Ley 27.348.</td>
                            </tr>
                            <tr>
                                <th scope="row">Decisión de la Comisión Médica Central</th>
                                <td>Recurso directo ante el tribunal de alzada laboral o el tribunal laboral de instancia única que corresponda.</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="mt-20">La implementación del sistema y la vía judicial dependen de la jurisdicción. La <a href="https://www.argentina.gob.ar/srt/comisionesmedicas/tramites" target="_blank" rel="noopener">SRT distingue los trámites según la provincia esté adherida o no a la Ley 27.348</a>. Por eso, antes de elegir, hay que confirmar dónde intervino la comisión y qué normativa local rige el caso.</p>

                    <a href="<?= BASE_URL ?>comisiones-medicas" class="link-volver-indice mt-20">Conocé las Comisiones Médicas <?= render_icon('chevron-right', 'ml-5', '', '', true) ?></a>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="plazo-apelacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> El plazo para apelar empieza con la notificación</a></h2>

                    <p>Revisá de inmediato la fecha, el canal y el contenido de la notificación. La Ley 27.348 establece vías distintas para recurrir decisiones de la comisión jurisdiccional y de la Comisión Médica Central; el plazo concreto debe verificarse para el acto y la jurisdicción del expediente. No tomes como universal un plazo que leíste para otro trámite o en otra provincia.</p>

                    <p>La SRT informa que las comunicaciones formales de los procedimientos ante Comisiones Médicas se realizan por medios digitales o electrónicos. Consultá la <a href="https://www.argentina.gob.ar/srt/ventanilla-electronica" target="_blank" rel="noopener">Ventanilla Electrónica SRT</a> y guardá la constancia de notificación. Si no sabés desde cuándo se cuenta el plazo o si está corriendo, buscá asesoramiento legal enseguida.</p>

                    <aside class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <span class="alerta-icon">⏱️</span>
                        <p class="m-0 fs-09"><strong>No esperes para consultar:</strong> el artículo 2 de la Ley 27.348 prevé que las decisiones de las Comisiones Médicas que no sean recurridas pueden adquirir autoridad de cosa juzgada administrativa. La oportunidad para actuar depende de la resolución y las reglas aplicables a tu expediente.</p>
                    </aside>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="prueba-documentacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué documentación reunir para cuestionar el dictamen</a></h2>

                    <p>Antes de preparar el recurso, reuní el expediente administrativo completo y ordená la prueba según el punto que querés discutir. La Resolución SRT 298/2017 integra el procedimiento ante las Comisiones Médicas; la SRT publica los trámites, formularios y canales que corresponden a cada actuación.</p>

                    <ul class="lista-items-blog mt-20">
                        <li>El dictamen, la resolución o el acto que querés cuestionar, con todas sus páginas.</li>
                        <li>La notificación y su constancia de fecha y medio de recepción.</li>
                        <li>Las actuaciones y pruebas del expediente de la Comisión Médica.</li>
                        <li>Estudios médicos, informes de especialistas, historia clínica y constancias de tratamiento que sean pertinentes.</li>
                        <li>La documentación laboral que ayude a explicar tareas, exposición o circunstancias del accidente, si es relevante para el desacuerdo.</li>
                    </ul>

                    <p class="mt-20">No alcanza con acumular papeles: el planteo tiene que vincular cada prueba con el error concreto que atribuís a la resolución. Conservá copias y comprobantes de toda presentación.</p>

                    <a href="https://www.argentina.gob.ar/srt/comisionesmedicas/tramites" target="_blank" rel="noopener" class="link-volver-indice mt-20">Consultar trámites oficiales de la SRT <?= render_icon('arrow-up', 'ml-5', '', '', true) ?></a>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="preparar-recurso" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Cómo preparar el planteo sin perder de vista el caso</a></h2>

                    <p>El recurso debe identificar qué decisión se cuestiona, qué puntos concretos se impugnan y qué se solicita. La estrategia puede variar según se discuta el origen laboral, la incapacidad, las prestaciones o una cuestión del procedimiento; también cambia según la jurisdicción y el estado del expediente.</p>

                    <ol class="lista-items-blog mt-20">
                        <li>Confirmá cuál es el acto recurrible y quién lo dictó.</li>
                        <li>Verificá la fecha de notificación y el plazo aplicable con las reglas de esa jurisdicción.</li>
                        <li>Pedí y revisá el expediente administrativo completo.</li>
                        <li>Identificá errores u omisiones y vinculalos con prueba concreta.</li>
                        <li>Definí con un abogado la vía y el órgano competente antes de presentar.</li>
                    </ol>

                    <p class="mt-20">En la etapa ante la Comisión Médica, la Ley 27.348 prevé patrocinio letrado. Para una apelación judicial, el patrocinio y los requisitos procesales deben confirmarse según el fuero local. La <a href="https://www.argentina.gob.ar/normativa/nacional/norma-272121" target="_blank" rel="noopener">Resolución SRT 298/2017</a> y las normas de la jurisdicción ayudan a determinar el procedimiento aplicable.</p>

                    <a href="<?= BASE_URL ?>tramites-srt" class="link-volver-indice mt-20">Ver trámites ante la SRT <?= render_icon('chevron-right', 'ml-5', '', '', true) ?></a>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>

                <section id="preguntas-frecuentes-apelacion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes sobre cómo apelar un dictamen</a></h2>

                    <section class="lista-faq-blog" aria-label="Preguntas frecuentes sobre apelaciones">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Se puede apelar un dictamen de la Comisión Médica?</summary>
                            <p class="mt-15 fs-09">El artículo 2 de la Ley 27.348 permite al trabajador recurrir lo resuelto por la Comisión Médica jurisdiccional ante la justicia laboral competente o solicitar la revisión ante la Comisión Médica Central. La decisión de esta última tiene una vía de recurso directo ante los tribunales laborales que correspondan.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Hay un plazo único de 15 días hábiles para apelar?</summary>
                            <p class="mt-15 fs-09">No conviene aplicar un plazo de manera automática. El plazo depende del acto notificado, la vía elegida y las reglas procesales de la jurisdicción que intervino. Revisá la notificación y consultá enseguida con un abogado.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo ir directamente a la Justicia Laboral?</summary>
                            <p class="mt-15 fs-09">El artículo 2 de la Ley 27.348 reconoce al trabajador la opción de recurrir lo resuelto por la Comisión Médica jurisdiccional ante la justicia ordinaria laboral provincial o de la Ciudad Autónoma de Buenos Aires, según la jurisdicción de la comisión que intervino. La aplicación concreta requiere revisar el caso y las normas locales.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué documentación necesito para cuestionar la resolución?</summary>
                            <p class="mt-15 fs-09">Reuní la resolución y su notificación, las actuaciones administrativas y la documentación médica relevante, como estudios, informes y constancias de tratamiento. El abogado debe revisar el expediente completo y definir qué prueba respalda cada punto cuestionado.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no recurro una decisión de la Comisión Médica?</summary>
                            <p class="mt-15 fs-09">El artículo 2 de la Ley 27.348 establece que los decisorios de las comisiones médicas que no sean recurridos pueden adquirir autoridad de cosa juzgada administrativa. Por eso es importante revisar de inmediato el acto notificado y la vía aplicable.</p>
                        </details>
                    </section>

                    <?php
                        $titulo = "¿Necesitás revisar una resolución de Comisión Médica?";
                        $descripcion = "Contanos qué te notificaron y te orientamos sobre las opciones para tu caso.";
                        $ancho = "100%";
                        $margen_top = "1.2";
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>

                    <footer class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                        <span>✅ Solo cobramos si vos cobrás.</span>
                        <span class="italic">⚖️ DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                    </footer>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up', '', '', '', true) ?> Volver al índice</a>
                </section>
            </section>
        </article>

        <?php include __DIR__ . '/../componentes/bloque-autor.php'; ?>
    </section>
</main>
