<?php
/**
 * VISTA: CUANTO COBRA UN ABOGADO POR UN ACCIDENTE LABORAL
 * Clonada desde blog-que-cubre-la-art.php
 */
?>
<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes laborales</a> &gt; <span class="txt-amarillo">Cuánto cobra un abogado por un accidente laboral</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Cuánto cobra un abogado por un accidente laboral</h1>

                <p class="articulo-lead">En la mayoría de los reclamos por accidentes laborales en Argentina los estudios trabajan con "solo cobramos si vos cobrás". Te explicamos cómo funcionan los honorarios, qué es la cuota litis, si hay gastos iniciales y qué tenés que preguntar antes de firmar.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 7 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
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
                    <p>En reclamos por <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">accidentes de trabajo</a> y enfermedades profesionales ante la ART, lo más habitual en estudios especializados es el sistema de <strong>honorarios por resultado</strong> (también llamado <strong>cuota litis</strong>).</p>
                    <p>Eso significa: <strong>si no hay cobro, no hay honorarios</strong>. El abogado solo cobra si logra que la ART o la vía correspondiente te reconozca y pague lo que corresponde. Ese es el criterio que aplica en gran parte de la práctica en este tipo de reclamos.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Importante:</span> Cada estudio es distinto. Lo único que tenés que tener claro es <strong>pedirlo por escrito</strong> en el contrato de prestación de servicios. Nunca firmes sin leer las cláusulas de honorarios.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="cuota-litis" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cuota litis vs otros sistemas</a></h2>
                    <p>Los sistemas más comunes para este tipo de reclamos son:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Sistema</div>
                            <div>Explicación</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Cuota litis (por resultado)</strong></div>
                            <div>El abogado cobra un porcentaje sobre lo efectivamente cobrado. Solo si ganás o cobrás. Es el más habitual en reclamos a ART.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Honorarios fijos</strong></div>
                            <div>Se pacta un monto fijo por la gestión. Menos común en reclamos de incapacidad, más en trámites puntuales.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Honorarios por hora</strong></div>
                            <div>Poco frecuente en este tipo de reclamos. Suele aplicarse a asesorías muy específicas.</div>
                        </div>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="gastos-iniciales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> ¿Hay gastos iniciales?</a></h2>
                    <p>En muchos estudios especializados <strong>no hay honorarios iniciales</strong>. La consulta es gratuita y, si se toma el caso, se pacta el porcentaje por resultado.</p>
                    <p>Lo que sí podés encontrar en algunos casos son <strong>gastos</strong> (fotocopias, tasas, notificaciones, etc.). Es fundamental que te lo aclaren por escrito: qué gastos corresponden, si son a cargo del cliente o si se descuentan del monto cobrado.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> Preguntá explícitamente: <strong>"¿Tengo que pagar algo para empezar?"</strong> y que te lo respondan por escrito en el contrato.</p>
                    </div>
                    <a href="#abogado-accidente-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="cuanto-se-lleva" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> ¿Cuánto se lleva el abogado?</a></h2>
                    <p>No hay un porcentaje único para todos los casos. Depende del estudio, de la complejidad, si es en sede administrativa (<a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisiones Médicas</a>) o judicial, y del monto a cobrar.</p>
                    <p>Lo importante no es quedarte con una cifra genérica, sino <strong>leer el contrato con cuidado</strong>. Tenés derecho a preguntar el porcentaje exacto, sobre qué monto se aplica (sobre lo cobrado neto o bruto) y si hay algún gasto a tu cargo.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">🧾</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Recomendación:</span> Compará, pero lo que más vale es <strong>confianza + claridad por escrito</strong>. Un porcentaje un poco distinto puede valer la pena si el estudio sabe bien cómo encarar tu caso.</p>
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
                            <p class="mt-15 fs-09">No hay un monto único. Lo más común es cuota litis (porcentaje sobre lo cobrado), con la modalidad "solo cobramos si vos cobrás". El porcentaje exacto se pacta por escrito en el contrato, según el estudio y el caso.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Tengo que pagar para que me asesoren?</summary>
                            <p class="mt-15 fs-09">En estudios especializados la consulta inicial suele ser <strong>gratuita</strong>. Preguntalo igual para confirmar. Los honorarios solo corresponden si hay cobro y están pactados en el contrato.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué es la cuota litis?</summary>
                            <p class="mt-15 fs-09">Es el acuerdo por el cual el abogado cobra un porcentaje sobre lo que efectivamente cobraste gracias a su intervención. Si no cobrás, no cobrará honorarios. Siempre tenés que ver sobre qué monto se calcula ese porcentaje.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo contratar abogado si ya inicié el reclamo solo?</summary>
                            <p class="mt-15 fs-09">Sí. Podés contratarlo en cualquier momento del reclamo. Cuanto antes lo hagas, mejor para orientar las pruebas y los plazos, pero incluso si ya hay gestiones iniciadas podés cambiar o sumarlo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Conviene contratar abogado si la ART me ofrece una suma?</summary>
                            <p class="mt-15 fs-09">Sí, vale la pena que lo revise. Muchas veces la oferta es inferior a lo que corresponde. Con una consulta rápida podés saber si conviene aceptar o impugnar.</p>
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
