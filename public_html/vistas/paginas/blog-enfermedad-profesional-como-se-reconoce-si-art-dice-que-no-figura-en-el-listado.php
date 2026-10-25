<?php
/**
 * VISTA: ENFERMEDAD PROFESIONAL - COMO SE RECONOCE Y QUE HACER SI LA ART DICE QUE NO FIGURA EN EL LISTADO
 * Clonada desde blog-que-cubre-la-art.php
 */
?>
<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>enfermedades-profesionales">Enfermedades profesionales</a> &gt; <span class="txt-amarillo">Enfermedad profesional: cómo se reconoce</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ENFERMEDADES PROFESIONALES</span>
                <h1 class="articulo-titulo">Enfermedad profesional: cómo se reconoce y qué hacer si la ART dice que no figura en el listado</h1>

                <p class="articulo-lead">No toda enfermedad que aparece por tu trabajo tiene que estar obligatoriamente en el listado para que corresponda la cobertura de la ART. Te explicamos la diferencia con un accidente, cuándo puede reconocerse igual, qué hacer ante una negativa y cómo reclamar tus derechos.</p>

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
                        <summary class="sidebar-titulo" id="enfermedad-profesional-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#diferencia-accidente-enfermedad" class="active"><span class="nav-num">1</span> Diferencia entre accidente y enfermedad profesional</a></li>
                                <li id="preg-2"><a href="#listado-enfermedades-profesionales"><span class="nav-num">2</span> ¿Qué enfermedades están en el listado?</a></li>
                                <li id="preg-3"><a href="#si-no-figura-en-el-listado"><span class="nav-num">3</span> Si la ART dice que no figura en el listado</a></li>
                                <li id="preg-4"><a href="#nexo-causal"><span class="nav-num">4</span> El nexo causal: la clave para el reconocimiento</a></li>
                                <li id="preg-5"><a href="#carga-probatoria"><span class="nav-num">5</span> ¿Quién debe probar el nexo?</a></li>
                                <li id="preg-6"><a href="#que-hacer-ante-negativa"><span class="nav-num">6</span> Qué hacer si la ART te niega</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿La ART te rechazó una enfermedad profesional?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu caso puede reconocerse.";
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
                <div id="diferencia-accidente-enfermedad" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Diferencia entre accidente de trabajo y enfermedad profesional</a></h2>
                    <p>Antes de entrar en materia, tenés que tener clara la diferencia. Ambos pueden estar cubiertos por tu <a href="<?= BASE_URL ?>enfermedades-profesionales" style="color:inherit;text-decoration:none;">ART</a>, pero se distinguen por la forma en que se producen.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Concepto</div>
                            <div>Explicación</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Accidente de trabajo</strong></div>
                            <div>Es un hecho súbito, violento y repentino que ocurre en el ejercicio o con ocasión del trabajo y te causa una lesión.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Enfermedad profesional</strong></div>
                            <div>Es una dolencia que se desarrolla de forma gradual por la exposición prolongada a agentes nocivos propios de tu tarea (ruido, polvos, vibraciones, posturas forzadas, agentes químicos, etc.).</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Clave:</span> La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;">Ley 24.557</a> establece la cobertura por riesgos del trabajo. Las enfermedades profesionales se encuentran tipificadas, principalmente, en el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/0-4999/138/norma.htm" style="color:inherit;text-decoration:none;">Decreto 658/96</a>. Si tu enfermedad no está encuadrada en ese listado, corresponde analizar si existe <strong>nexo causal</strong> entre las tareas que realizaste y la dolencia para evaluar si corresponde su reconocimiento.</p>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="listado-enfermedades-profesionales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Qué enfermedades están en el listado?</a></h2>
                    <p>En Argentina, las enfermedades profesionales se encuentran tipificadas, principalmente, en el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/0-4999/138/norma.htm" style="color:inherit;text-decoration:none;">Decreto 658/96</a> y sus complementarios. Ahí se vinculan determinadas enfermedades con determinados agentes o actividades.</p>
                    <p>El hecho de que tu diagnóstico <strong>coincida con una enfermedad y una actividad del listado</strong> facilita enormemente el reconocimiento. Pero eso <strong>no significa que, si no figura, automáticamente te corresponda el rechazo</strong>.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Dato práctico:</span> Muchas patologías por sobreesfuerzo, exposición crónica o por tareas específicas se discuten justamente por el <strong>nexo causal</strong>, más allá de una mención expresa.</p>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="si-no-figura-en-el-listado" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Si la ART dice que no figura en el listado</a></h2>
                    <p>Es muy frecuente escuchar: <em>"No figura en el listado, por eso no corresponde cobertura"</em>. Esa afirmación, por sí sola, <strong>no es suficiente</strong> para cerrar la puerta al reclamo.</p>
                    <p>La ART tiene la obligación de analizar si existe relación causal entre tu enfermedad y las tareas que venís realizando. Si podés acreditar esa relación, puede corresponder el reconocimiento como <strong>enfermedad profesional</strong> y, en caso de rechazo, podés impugnarlo ante la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a> o por la vía que corresponda a tu caso.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Importante:</span> El criterio no es "¿está escrito tal cual?" sino <strong>"¿existe nexo entre la enfermedad y el trabajo?"</strong>. Ahí está la diferencia.</p>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="nexo-causal" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> El nexo causal: la clave para el reconocimiento</a></h2>
                    <p>Para que se reconozca una enfermedad profesional fuera o al margen del encuadre mecánico del listado, lo fundamental es acreditar el <strong>nexo causal</strong>: que las condiciones de trabajo generaron, agravaron o contribuyeron a esa dolencia.</p>

                    <h4 class="mt-40 mb-0"><span style="font-size: 1.3em;">👇</span> Elementos que suelen servir para acreditarlo:</h4>
                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <?= render_icon('briefcase-solid', 'icono-grande') ?>
                            <span>Descripción precisa de las tareas y exposición</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('file-medical-solid', 'icono-grande') ?>
                            <span>Historia clínica, estudios e informes médicos</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('calendar-check-solid', 'icono-grande') ?>
                            <span>Antigüedad, horarios, intensidad y frecuencia</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('clipboard-list-solid', 'icono-grande') ?>
                            <span>Constancias, comunicaciones o denuncias previas</span>
                        </div>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="carga-probatoria" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> ¿Quién debe probar el nexo?</a></h2>
                    <p>En la práctica, cuanto más claro sea tu relato y mayor sea la documentación que acompañes, más sólido va a quedar tu reclamo. No se trata de "adivinar", sino de <strong>relacionar tarea + exposición + diagnóstico + evolución</strong>.</p>
                    <p>El objetivo es mostrar que <strong>es razonable</strong> que esa patología tenga su origen en las condiciones de trabajo. Ahí es donde una correcta fundamentación con informes médicos y con el detalle de tus tareas marca la diferencia.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">🧾</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Recomendación:</span> Pedí una <strong>descripción de tareas</strong> por escrito a tu empleador. También guardá los informes que te den en la ART, estudios complementarios y toda comunicación.</p>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="que-hacer-ante-negativa" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué hacer si la ART te niega por "no figura en el listado"</a></h2>
                    <p>Si ya te rechazaron, <strong>no te quedes con esa respuesta verbal</strong>. Seguí estos pasos para intentar revertirlo:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Pedí la negativa por escrito.</strong> Exigí que te indiquen los motivos concretos del rechazo. Esa constancia es fundamental para impugnarlo.
                            </li>
                            <li>
                                <strong>2. Juntá toda la documentación.</strong> Diagnóstico, estudios, historia clínica, descripción de tareas, recibos, comunicaciones con la ART y con tu empleador.
                            </li>
                            <li>
                                <strong>3. Reclamá formalmente.</strong> Podés fundamentar el nexo causal con informe médico de tu parte y con el detalle de tu exposición laboral.
                            </li>
                            <li>
                                <strong>4. Actuá ante la Comisión Médica o por la vía que corresponda.</strong> En muchos casos el camino pasa por las <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisiones Médicas</a> de la SRT. También puede corresponder la vía judicial según el caso.
                            </li>
                            <li>
                                <strong>5. Asesorate con un abogado laboralista especializado en ART.</strong> Idealmente antes de firmar cualquier cosa. Te pueden orientar sobre el encuadre y las pruebas necesarias.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> Aunque digan "no figura en el listado", <strong>preguntá explícitamente si se analizó el nexo causal</strong>. Muchas veces la respuesta es genérica y deja lugar a impugnar.</p>
                    </div>
                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas más comunes sobre enfermedades profesionales y rechazos por "no figura en el listado":</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer"><span style="overflow-wrap:anywhere;word-break:break-word;hyphens:auto;">Si mi enfermedad no figura en el Decreto 658/96, ¿no me corresponde nada?</span></summary>
                            <p class="mt-15 fs-09">No necesariamente. Si lográs acreditar el <strong>nexo causal</strong> entre tu enfermedad y las tareas realizadas, puede corresponder el reconocimiento. El listado es orientativo, pero la clave es la relación con el trabajo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué es el nexo causal para una enfermedad profesional?</summary>
                            <p class="mt-15 fs-09">Es la relación directa entre tu dolencia y las condiciones a las que estuviste expuesto en tu trabajo. Hay que vincular <strong>agente nocivo + tarea + diagnóstico</strong> con elementos probatorios.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar aunque la ART ya me rechazó verbalmente?</summary>
                            <p class="mt-15 fs-09">Sí. Pedí la <strong>negativa por escrito</strong>, reuní la documentación y evaluá el reclamo ante las <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> o por la vía que corresponda a tu caso. Un rechazo verbal no te cierra todos los caminos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Sirve una descripción de tareas para acreditar el nexo?</summary>
                            <p class="mt-15 fs-09">Sí. Es una de las pruebas más útiles. Detallá qué hacías, con qué elementos, cómo eran las posturas, el tiempo de exposición y la frecuencia. Cuanto más concreto, mejor.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART tiene que atenderme aunque diga que no figura en el listado?</summary>
                            <p class="mt-15 fs-09">Si hay una denuncia de enfermedad profesional o un reclamo, la ART debe evaluar el caso. Negarse por "no figura" sin analizar el nexo es frecuente, pero <strong>impugnable</strong> con el asesoramiento adecuado.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿La ART te rechazó una enfermedad profesional?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART. Analizamos si tu caso puede reconocerse, sin cargo y sin compromiso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#enfermedad-profesional-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
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

<!-- SCRIPT PARA NAVEGACION STICKY Y ACTIVE STATE -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.sidebar-nav a');
    const sections = document.querySelectorAll('.seccion-bloque');

    function changeActiveLink() {
        let index = sections.length;
        while(--index && window.scrollY + 100 < sections[index].offsetTop) {}
        links.forEach((link) => link.classList.remove('active'));
        if (links[index]) links[index].classList.add('active');
    }

    window.addEventListener('scroll', changeActiveLink);
    changeActiveLink();
});
</script>
