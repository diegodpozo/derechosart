<?php
/**
 * VISTA: COMISION MEDICA DE ROSARIO (CM 7) - ARTICULO DE BLOG
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> &gt; <span class="txt-amarillo">Rosario</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Comisión Médica de Rosario (CM 7):<br>qué circunscripción cubre y cómo reclamar</h1>

                <p class="articulo-lead">La CM 7 es la comisión más grande de Santa Fe y concentra casi tres cuartos de los trámites de la provincia. Si tenés turno en Salta 2602 o la ART te derivó ahí, esta guía te explica qué zonas atiende, qué llevar y qué fuero revisa el dictamen. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('location-dot') ?></div>
                        <div class="char-texto">
                            <strong>DIRECCIÓN</strong>
                            <span>Salta 2602, Rosario</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>CIRCUNSCRIPCIÓN</strong>
                            <span>N° 2 Rosario</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>FORMULARIOS</strong>
                            <span>SRT oficiales</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('handshake-regular') ?></div>
                        <div class="char-texto">
                            <strong>ASESORAMIENTO</strong>
                            <span>sin cargo</span>
                        </div>
                    </div>
                </div>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Octubre 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 8 min</span>
                    <span class="pointer" onclick="window.print()"><?= render_icon('bookmark-solid', 'mr-5') ?> Guardá esta guía</span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DERECHO -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <li id="preg-1"><a href="#datos-cm" class="active"><span class="nav-num">1</span> La CM 7 y el mapa de Santa Fe</a></li>
                            <li id="preg-2"><a href="#ley-14003"><span class="nav-num">2</span> Qué cambió con la ley provincial 14.003</a></li>
                            <li id="preg-3"><a href="#jurisdiccion"><span class="nav-num">3</span> Elegir jurisdicción en el Gran Rosario</a></li>
                            <li id="preg-4"><a href="#turno"><span class="nav-num">4</span> El día del turno en Salta 2602</a></li>
                            <li id="preg-5"><a href="#que-llevar"><span class="nav-num">5</span> Documentación y formularios</a></li>
                            <li id="preg-6"><a href="#plazos"><span class="nav-num">6</span> Plazos y fuero laboral de Santa Fe</a></li>
                            <li id="preg-7"><a href="#faq-cm"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés turno en la CM de Rosario?";
                    $descripcion = "Escribinos por WhatsApp y te asesoramos sin costo. Solo cobramos si vos cobrás.";
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
                <div id="datos-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> La CM 7 y el mapa de Santa Fe</a></h2>

                    <p class="mt-30">Santa Fe no tiene una comisión médica única. La provincia se organiza por circunscripciones judiciales y cada una tiene su sede. La <strong>CM 7</strong>, con asiento en Rosario, cubre la Circunscripción N° 2 y tiene una delegación en San Lorenzo. El resto del territorio se reparte entre la CM 40 de Santa Fe y las delegaciones de Venado Tuerto, Reconquista, Rafaela y Sunchales.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Información</div>
                        </div>
                        <div class="tr-blog">
                            <div>Nombre oficial</div>
                            <div>Comisión Médica N° 7 (7 A, 7 B, 7 C y 7 D)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Dirección</div>
                            <div>Salta 2602, Rosario, Santa Fe</div>
                        </div>
                        <div class="tr-blog">
                            <div>Competencia</div>
                            <div>Circunscripción Judicial N° 2 "Rosario"</div>
                        </div>
                        <div class="tr-blog">
                            <div>Delegación</div>
                            <div>San Lorenzo (misma circunscripción)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Otras sedes de la provincia</div>
                            <div>CM 40 en Santa Fe; delegaciones de Venado Tuerto, Reconquista, Rafaela y Sunchales</div>
                        </div>
                        <div class="tr-blog">
                            <div>Horario de atención</div>
                            <div>Lunes a viernes, 8 a 15 hs</div>
                        </div>
                    </div>

                    <div class="mt-30">
                        <iframe
                            src="https://www.google.com/maps?q=Salta+2602,+Rosario,+Santa+Fe,+Argentina&output=embed"
                            width="100%"
                            height="340"
                            style="border:0;border-radius:15px;display:block;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                        <p class="mt-10 fs-08 txt-gris-medio flex-between" style="flex-wrap:wrap;gap:0.5rem;">
                            <span><?= render_icon('location-dot', 'mr-5') ?> Salta 2602, Rosario</span>
                            <a href="https://www.google.com/maps?q=Salta+2602,+Rosario,+Santa+Fe,+Argentina" target="_blank" rel="noopener" class="fw-700">Ver en Google Maps <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                        </p>
                    </div>

                    <p class="mt-30">El peso de esta sede es enorme: es la comisión que concentra alrededor del <strong>73,4% de los trámites de toda la provincia</strong>, con más de 2.400 expedientes caratulados por mes. Por eso los turnos se mueven rápido y la agenda suele estar tomada con semanas de anticipación.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="ley-14003" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué cambió con la ley provincial 14.003</a></h2>

                    <p>Durante años Santa Fe fue una excepción: la provincia no había adherido al Título I de la Ley 27.348 y el paso por la comisión médica no funcionaba como instancia previa obligatoria en los mismos términos que en el resto del país. Eso cambió con la <strong>Ley provincial 14.003</strong>, sancionada en 2020, que adhirió al régimen nacional y fijó cómo se organizan las comisiones en el territorio. El convenio con la SRT se instrumentó después, por decreto provincial, para que las comisiones actúen como instancia prejurisdiccional.</p>

                    <p class="mt-20">En la práctica, hoy el circuito es el mismo que en las demás provincias adheridas: primero la comisión médica, después la posibilidad de pedir revisión ante la Comisión Médica Central y, agotada esa instancia, el reclamo judicial. La diferencia local está en el reparto: la ley provincial definió cuántas comisiones y comisiones móviles corresponden a cada circunscripción, y eso es lo que determina a qué sede te toca ir según dónde vivís o dónde trabajás.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">ℹ️</div>
                        <p class="m-0 fs-09 italic">Si tu accidente ocurrió antes de que la provincia adhiriera, el caso puede tener un tratamiento distinto. Ese punto conviene revisarlo con un abogado antes de iniciar cualquier trámite.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="jurisdiccion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Elegir jurisdicción en el Gran Rosario</a></h2>

                    <p>La opción se ejerce al iniciar el trámite y el trabajador puede tomarla por su <strong>domicilio real</strong> o por el <strong>lugar donde efectivamente presta servicios</strong>. En el Gran Rosario eso cubre a Rosario y a las localidades del cordón industrial: Villa Gobernador Gálvez, Granadero Baigorria, San Lorenzo, Arroyo Seco y Villa Constitución, entre otras.</p>

                    <p class="mt-20">El cruce que más consultas genera es el de quienes viven en una localidad de la circunscripción pero trabajan en otra provincia, o al revés. Ahí la elección define dos cosas a la vez: qué comisión evalúa la incapacidad y qué fuero revisa después. Una vez presentado el formulario de opción, el camino queda fijado.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📍</div>
                        <p class="m-0 fs-09 italic">Si trabajás en el cordón industrial y vivís en otra circunscripción de Santa Fe, revisá bien antes de firmar: la CM 7 y la CM 40 son sedes distintas y el fuero que interviene depende de cuál quede en el expediente.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="turno" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> El día del turno en Salta 2602</a></h2>

                    <p class="mt-30">La sede está sobre <strong>Salta al 2600</strong>, en una zona de Rosario con mucho movimiento comercial y tránsito pesado durante la mañana. La atención va de 8 a 15, así que lo habitual es que los turnos se concentren temprano. Si vas en auto, calculá el tiempo de estacionamiento: la zona no es generosa y los alrededores suelen estar ocupados.</p>

                    <p class="mt-20">La citación indica la sede y el horario. Confirmá siempre que diga CM 7 y no CM 40: son ciudades distintas y equivocarse implica perder el turno. Y si venís del cordón industrial, sumá el tiempo de viaje de la mañana, que en hora pico se estira.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🗂️</div>
                        <p class="m-0 fs-09 italic">Llevá todo el expediente impreso y ordenado. En una sede con este volumen de trámites, un estudio que falta puede significar reprogramar la evaluación.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="que-llevar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Documentación y formularios</a></h2>

                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><span style="font-size: 1.3em;">🪪</span> DNI (original y copia)</li>
                        <li><span style="font-size: 1.3em;">📋</span> Alta médica o el dictamen que estés cuestionando</li>
                        <li><span style="font-size: 1.3em;">🏥</span> Estudios médicos completos: radiografías, resonancias, informes</li>
                        <li><span style="font-size: 1.3em;">📄</span> Formulario de opción de jurisdicción</li>
                        <li><span style="font-size: 1.3em;">✍️</span> Carta poder y designación de patrocinio letrado</li>
                    </ul>

                    <p class="mt-30">En Santa Fe el patrocinio letrado del trabajador es obligatorio desde la primera presentación, así que la carta poder y la designación de abogado no son un extra: son parte del trámite. Sin esos formularios, la presentación puede quedar incompleta.</p>

                    <div class="mt-30">
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20 mb-15">
                            <div style="font-size: 2.6em;">📄</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Carta Poder SRT:</strong> autoriza a tu abogado a actuar ante la Comisión Médica. No necesita certificación notarial.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="https://www.srt.gob.ar/wp-content/uploads/2017/04/Carta_Poder.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20 mb-15">
                            <div style="font-size: 2.6em;">📍</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Opción de Jurisdicción:</strong> define que tu trámite se haga en la comisión de Santa Fe según tu domicilio o lugar de trabajo.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="https://www.srt.gob.ar/wp-content/uploads/2018/06/Formulario-Opci%C3%B3n-Jurisdicci%C3%B3n-RES-298-17.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20 mb-15">
                            <div style="font-size: 2.6em;">👨‍⚖️</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Designación de Patrocinio:</strong> formaliza ante la SRT quién es tu abogado. Sin esto, no puede actuar en tu expediente.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="<?= BASE_URL ?>publico/pdf/Designacion_de_patrocinio_letrado.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20">
                            <div style="font-size: 2.6em;">📑</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Anexo I SRT:</strong> formulario oficial obligatorio para el inicio de expedientes ante la SRT.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="<?= BASE_URL ?>publico/pdf/anexo_incapacidad.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                    </div>

                    <p class="mt-30"><a href="<?= BASE_URL ?>formularios-srt" class="btn btn-amarillo">VER TODOS LOS FORMULARIOS SRT <?= render_icon('chevron-right', 'ml-5') ?></a></p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="plazos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Plazos y fuero laboral de Santa Fe</a></h2>

                    <p class="mt-30">Con la adhesión provincial, los plazos del sistema nacional rigen también en Santa Fe. El que más se pierde sigue siendo el de la divergencia.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Momento</div>
                            <div>Plazo</div>
                        </div>
                        <div class="tr-blog">
                            <div>Denuncia del accidente a la ART</div>
                            <div>72 horas</div>
                        </div>
                        <div class="tr-blog">
                            <div>Divergencia con el alta o el dictamen</div>
                            <div>5 días hábiles desde la notificación (Res. SRT 5/2026)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Determinación de la incapacidad</div>
                            <div>20 días desde el cese de la ILT (Res. SRT 298/2017)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Prescripción del reclamo</div>
                            <div>2 años (art. 44 Ley 24.557)</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏱️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Plazo clave:</span> tenés <strong>5 días hábiles</strong> desde la notificación del alta o el dictamen para presentar la divergencia, según la Resolución SRT 5/2026.</p>
                    </div>

                    <p class="mt-30">Si la divergencia no prospera, el trabajador puede pedir la revisión ante la <strong>Comisión Médica Central</strong> y, después, recurrir a la <strong>Justicia Laboral de Santa Fe</strong>. Es un fuero provincial: el expediente se discute en los tribunales laborales de la circunscripción que intervino, no en la justicia federal. El porcentaje se define con el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo vigente</a> (Decreto 549/2025) y el monto depende de tu edad, tu sueldo y la incapacidad reconocida.</p>

                    <div class="mt-30">
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20 mb-15">
                            <div style="font-size: 2.6em;">🧮</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Calculadora de indemnización:</strong> usala como referencia para tener una idea de tu caso.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="<?= BASE_URL ?>calculadora-accidentes">Calcular ahora <?= render_icon('chevron-right', 'ml-5') ?></a>
                            </div>
                        </div>
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20">
                            <div style="font-size: 2.6em;">📋</div>
                            <div>
                                <p class="m-0 fs-09"><strong>¿Qué trámite me corresponde?</strong> Rechazo, divergencia en el alta, en la incapacidad, valoración de daño y más.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="<?= BASE_URL ?>tramites-srt">Ver trámites SRT <?= render_icon('chevron-right', 'ml-5') ?></a>
                            </div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="faq-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La Comisión Médica 7 de Rosario atiende toda la provincia de Santa Fe?</summary>
                            <p class="mt-15 fs-09">No. La CM 7 cubre la Circunscripción Judicial N° 2 (Rosario) y tiene una delegación en San Lorenzo. El resto de la provincia se reparte entre la CM 40 de Santa Fe y las delegaciones de Venado Tuerto, Reconquista, Rafaela y Sunchales.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si vivo en Rosario pero trabajo en otra provincia?</summary>
                            <p class="mt-15 fs-09">Podés optar entre la comisión de tu domicilio y la del lugar donde prestás servicios. La elección se hace al iniciar el expediente, no se puede cambiar después y define tanto la comisión que evalúa la incapacidad como el fuero que revisa el dictamen.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no estoy de acuerdo con el porcentaje de incapacidad?</summary>
                            <p class="mt-15 fs-09">Podés presentar la divergencia dentro de los 5 días hábiles desde la notificación (Resolución SRT 5/2026) y, si no se resuelve, el caso sigue en la Justicia Laboral de la provincia de Santa Fe, no en el fuero federal.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Necesito abogado para el trámite en la CM 7?</summary>
                            <p class="mt-15 fs-09">En Santa Fe el patrocinio letrado del trabajador es obligatorio desde la primera presentación, por la ley provincial de adhesión. En la práctica necesitás la carta poder y la designación de patrocinio para que la presentación no quede incompleta.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto voy a cobrar de indemnización?</summary>
                            <p class="mt-15 fs-09">Depende de tu edad, tu sueldo y el porcentaje de incapacidad que te asignen: no hay un monto fijo. Usá la <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora</a> para tener una referencia o consultanos directamente.</p>
                        </details>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
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
        links[index].classList.add('active');
    }

    window.addEventListener('scroll', changeActiveLink);
    changeActiveLink();
});
</script>
