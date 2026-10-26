<?php
/**
 * VISTA: ALTA MEDICA Y VUELTA AL TRABAJO - EMPLEADOR NO REINCORPORA
 * Clonada desde blog-que-cubre-la-art.php
 */
?>
<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Alta médica y vuelta al trabajo</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Alta médica y vuelta al trabajo: qué pasa si tu empleador no te reincorpora</h1>

                <p class="articulo-lead">Si te dieron el alta médica tras un accidente o enfermedad laboral y tu empleador no te reincorpora, hay que analizar si corresponde el despido, la estabilidad o una indemnización. Te explicamos qué hacer paso a paso.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 8 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DE NAVEGACION -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <div class="sidebar-nav-scroll">
                    <details class="sidebar-acordeon-movil" open>
                        <summary class="sidebar-titulo" id="alta-vuelta-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#que-significa-alta" class="active"><span class="nav-num">1</span> ¿Qué significa la alta médica?</a></li>
                                <li id="preg-2"><a href="#obligacion-reincorporar"><span class="nav-num">2</span> ¿Tiene el empleador obligación de reincorporarte?</a></li>
                                <li id="preg-3"><a href="#no-reincorpora"><span class="nav-num">3</span> Si el empleador no te reincorpora</a></li>
                                <li id="preg-4"><a href="#secuela-no-incapacitante"><span class="nav-num">4</span> Secuelas, aptitud y limitaciones</a></li>
                                <li id="preg-5"><a href="#que-hacer"><span class="nav-num">5</span> Qué hacer ante esta situación</a></li>
                                <li id="preg-6"><a href="#preguntas-frecuentes"><span class="nav-num">6</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tu empleador no te reincorpora tras el alta?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART y despidos. Te decimos si corresponde reclamar.";
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
                <div id="que-significa-alta" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Qué significa la alta médica?</a></h2>
                    <p>Cuando la ART te da el <strong>alta médica</strong>, significa que, a criterio del médico interviniente, estás apto para volver a trabajar, o que se dio por finalizado el tratamiento curativo. Eso <strong>no implica automáticamente</strong> que tu empleador esté obligado a mantener el puesto en todas las circunstancias, pero sí hay que analizar el caso.</p>
                    <p>Si seguís con dolor, limitaciones o disconformidad con el alta, podés impugnarla. Podés ver más en <a href="<?= BASE_URL ?>blog/me-dieron-el-alta-de-la-art-pero-sigo-con-dolor-que-hacer" style="color:inherit;text-decoration:none;">me dieron el alta de la ART pero sigo con dolor: qué hacer</a>.</p>
                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="obligacion-reincorporar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Tiene el empleador obligación de reincorporarte?</a></h2>
                    <p>La respuesta depende del caso concreto. En principio, si ya finalizó la relación por despido, la cuestión es distinta. Si <strong>estabas suspendido por accidente/enfermedad laboral</strong> y te dan el alta, lo que corresponde es que el empleador te reincorpore en tu puesto o en uno acorde a tu aptitud.</p>
                    <p>Si hay <strong>secuelas</strong> que te limitan para ciertas tareas, hay que ver si existen tareas compatibles y qué medidas corresponden. El análisis debe hacerse caso por caso.</p>
                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="no-reincorpora" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Si el empleador no te reincorpora</a></h2>
                    <p>Cuando tras el alta el empleador se niega a reincorporarte sin una justificación válida, puede configurar un <strong><a href="<?= BASE_URL ?>despidos" style="color:inherit;text-decoration:underline;">despido</a></strong>. Ahí hay que analizar si corresponde indemnización por despido y, según el caso, agravantes.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Clave:</span> <strong>No aceptes un despido verbal</strong>. Pedí todo por escrito. Guardá el alta médica, notificaciones, llamados, mensajes y constancias.</p>
                    </div>
                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="secuela-no-incapacitante" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Secuelas, aptitud y limitaciones</a></h2>
                    <p>Puede pasar que tengas una <strong>secuela</strong> pero el alta diga "apto". Si el empleador alega que no te puede reincorporar por tus limitaciones, hay que revisar si realmente no hay tareas compatibles. También puede corresponder evaluar la incapacidad ante la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a>.</p>
                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="que-hacer" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué hacer ante esta situación</a></h2>
                    <p>Si el empleador no te reincorpora tras el alta médica:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li><strong>1. Guardá todo:</strong> alta médica, telegramas, mails, mensajes, llamados.</li>
                            <li><strong>2. Preguntá por escrito:</strong> Requerí la reincorporación por escrito (correo electrónico o telegrama). Esto deja constancia.</li>
                            <li><strong>3. No firmes a la ligera:</strong> Si te ofrecen un fin de relación, leélo bien antes de firmar.</li>
                            <li><strong>4. Asesorate:</strong> Consultá con un abogado laboralista especializado en despidos y ART.</li>
                            <li><strong>5. Actuá a tiempo:</strong> Los plazos importan. No dejes pasar el tiempo.</li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> Si te despiden tras el alta por accidente laboral, hay que analizar si corresponde <strong>despido discriminatorio</strong> o agravado según el caso.</p>
                    </div>
                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Preguntas frecuentes</a></h2>
                    <p>Las dudas más frecuentes sobre alta médica y reincorporación:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">Si me dan el alta, ¿el empleador me tiene que reincorporar obligatoriamente?</summary>
                            <p class="mt-15 fs-09">No siempre de forma automática. Depende de si quedaste en relación laboral, si hay puesto disponible y acorde a tu aptitud. Si hay despido tras el alta, hay que evaluar si es válido.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si mi empleador no me reincorpora tras el alta?</summary>
                            <p class="mt-15 fs-09">Sí. En muchos casos puede tratarse de un despido. Es importante tener constancia de la negativa y asesorarte cuanto antes.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué hago si sigo con dolor y me dan el alta?</summary>
                            <p class="mt-15 fs-09">Podés impugnar el alta ante la Comisión Médica. No firmes el alta sin entenderla y, si seguís con síntomas, solicitá una evaluación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Me pueden despedir por haber tenido un accidente laboral?</summary>
                            <p class="mt-15 fs-09">El despido por el hecho de haber sufrido un accidente puede ser discriminatorio. Hay que analizar el caso concreto para ver si corresponde agravar la indemnización.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Tengo que volver al mismo puesto?</summary>
                            <p class="mt-15 fs-09">Si hay secuelas y limitaciones, lo ideal es ver si hay tareas compatibles. Si no hay ninguna tarea acorde y no se te reincorpora, puede dar lugar a un reclamo.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Tu empleador no te reincorpora tras el alta?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART y despidos. Analizamos tu caso sin cargo y sin compromiso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#alta-vuelta-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
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
