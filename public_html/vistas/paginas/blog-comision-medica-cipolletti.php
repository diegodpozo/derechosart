<?php
/**
 * VISTA: COMISION MEDICA DE CIPOLLETTI (CM 35.3) - ARTICULO DE BLOG
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> &gt; <span class="txt-amarillo">Cipolletti</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Comisión Médica de Cipolletti (CM 35.3):<br>qué zonas cubre y cómo reclamar</h1>

                <p class="articulo-lead">La CM 35.3 es la delegación del Alto Valle que depende de la CM 35 de General Roca. Si tu ART te derivó ahí o tenés turno en Naciones Unidas 639, esta guía te ordena la documentación, los plazos y el fuero que revisa el dictamen en Río Negro. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('location-dot') ?></div>
                        <div class="char-texto">
                            <strong>DIRECCIÓN</strong>
                            <span>Naciones Unidas 639</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>DEPENDE DE</strong>
                            <span>CM 35 General Roca</span>
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
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 7 min</span>
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
                            <li id="preg-1"><a href="#datos-cm" class="active"><span class="nav-num">1</span> La CM 35.3 dentro de la CM 35</a></li>
                            <li id="preg-2"><a href="#competencia"><span class="nav-num">2</span> Qué zonas cubre y cómo se elige</a></li>
                            <li id="preg-3"><a href="#como-llegar"><span class="nav-num">3</span> Cómo llegar desde el Alto Valle</a></li>
                            <li id="preg-4"><a href="#que-llevar"><span class="nav-num">4</span> Qué llevar al turno</a></li>
                            <li id="preg-5"><a href="#plazos"><span class="nav-num">5</span> Plazos y divergencia en Río Negro</a></li>
                            <li id="preg-6"><a href="#faq-cm"><span class="nav-num">6</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés turno en la CM de Cipolletti?";
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
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> La CM 35.3 dentro de la CM 35</a></h2>

                    <p class="mt-30">El número confunde a mucha gente. La <strong>CM 35</strong> es la comisión con sede en General Roca; la <strong>CM 35.3</strong> es la delegación de Cipolletti, que trabaja bajo esa cabecera y atiende el Alto Valle. En la práctica funciona como una comisión más: recibís el turno, te evalúan y sale un dictamen, pero el expediente pertenece a la estructura de la CM 35.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Información</div>
                        </div>
                        <div class="tr-blog">
                            <div>Nombre oficial</div>
                            <div>Comisión Médica N° 35.3 (delegación de la CM 35)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Dirección</div>
                            <div>Av. Naciones Unidas 639 (R8324ALK), Cipolletti, Río Negro</div>
                        </div>
                        <div class="tr-blog">
                            <div>Depende de</div>
                            <div>CM 35, con sede en General Roca</div>
                        </div>
                        <div class="tr-blog">
                            <div>Competencia</div>
                            <div>Cipolletti y localidades del Alto Valle: Allen, Cinco Saltos, Fernández Oro, Sargento Vidal, La Alianza y Colonia Valentina</div>
                        </div>
                        <div class="tr-blog">
                            <div>Horario de atención</div>
                            <div>Lunes a viernes, 8 a 15 hs</div>
                        </div>
                    </div>

                    <div class="mt-30">
                        <iframe
                            src="https://www.google.com/maps?q=Naciones+Unidas+639,+Cipolletti,+Rio+Negro,+Argentina&output=embed"
                            width="100%"
                            height="340"
                            style="border:0;border-radius:15px;display:block;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                        <p class="mt-10 fs-08 txt-gris-medio flex-between" style="flex-wrap:wrap;gap:0.5rem;">
                            <span><?= render_icon('location-dot', 'mr-5') ?> Av. Naciones Unidas 639, Cipolletti</span>
                            <a href="https://www.google.com/maps?q=Naciones+Unidas+639,+Cipolletti,+Rio+Negro,+Argentina" target="_blank" rel="noopener" class="fw-700">Ver en Google Maps <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                        </p>
                    </div>

                    <p class="mt-30">Que sea delegación no le quita peso al dictamen: lo que se decide ahí es lo que después se discute en la Justicia Laboral de Río Negro. Y si tu caso es de una localidad que no está en su competencia, como General Roca, Bariloche o Viedma, te va a tocar otra comisión de la provincia.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="competencia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué zonas cubre y cómo se elige la jurisdicción</a></h2>

                    <p>La <strong>Ley 27.348</strong> obliga a pasar por la comisión médica antes de demandar. La jurisdicción se define al abrir el expediente y se puede tomar por el <strong>domicilio real</strong> o por el <strong>lugar de prestación de servicios</strong>. En el Alto Valle eso genera una situación muy común: gente que vive en Neuquén capital y trabaja en Cipolletti, o al revés, con un puente de por medio y dos provincias en juego.</p>

                    <p class="mt-20">Elegir la CM 35.3 no es solo elegir una oficina. Si el trámite queda en Río Negro, la revisión posterior del dictamen va a la Justicia Laboral de esa provincia; si queda en Neuquén, va a la de Neuquén. Son fueros distintos, con trámites distintos, y la decisión se toma una sola vez, al principio. Si tenés dudas sobre cuál te conviene, ese es exactamente el momento de consultarlo.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">ℹ️</div>
                        <p class="m-0 fs-09 italic">La opción se formaliza con el <strong>formulario de opción de jurisdicción</strong> y <strong>no se puede cambiar</strong> después. Si trabajás en Allen, Cinco Saltos, Fernández Oro o zonas aledañas, la comisión que te corresponde es esta.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-llegar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo llegar desde el Alto Valle</a></h2>

                    <p class="mt-30">La sede está sobre <strong>Av. Naciones Unidas</strong>, en la zona de Cipolletti que mira al río, a pocos minutos del puente que conecta con Neuquén capital. Para quien viene desde Allen, Cinco Saltos o Fernández Oro, el viaje es corto y se hace por la ruta del valle; para quien cruza desde Neuquén, el puente es el punto crítico, sobre todo en hora pico.</p>

                    <p class="mt-20">El horario de atención es de 8 a 15, así que los turnos se concentran en la mañana. Si venís de otra localidad, calculá el tiempo de traslado y sumá margen: llegar diez minutos tarde a un turno puede significar reprogramar y esperar semanas. Y si tu citación dice General Roca en lugar de Cipolletti, revisá bien antes de viajar, porque son sedes distintas.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🚗</div>
                        <p class="m-0 fs-09 italic">Si cruzás desde Neuquén capital, salí con tiempo: el tránsito del puente puede sumar bastante al viaje. Y confirmá siempre la dirección de la citación antes de salir.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="que-llevar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Qué llevar al turno</a></h2>

                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><span style="font-size: 1.3em;">🪪</span> DNI (original y copia)</li>
                        <li><span style="font-size: 1.3em;">📋</span> Alta médica o el dictamen que estés cuestionando</li>
                        <li><span style="font-size: 1.3em;">🏥</span> Estudios médicos completos: radiografías, resonancias, informes</li>
                        <li><span style="font-size: 1.3em;">📄</span> Formulario de opción de jurisdicción</li>
                        <li><span style="font-size: 1.3em;">✍️</span> Carta poder y designación de patrocinio letrado</li>
                    </ul>

                    <p class="mt-30">Lo que más influye en el porcentaje es la prueba médica. Llevá los informes originales y los estudios en su soporte, no fotos del celular. Si la ART tiene estudios que a vos no te dieron, pedilos antes del turno: la comisión decide con lo que está en el expediente.</p>

                    <div class="mt-30">
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20 mb-15">
                            <div style="font-size: 2.6em;">📄</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Carta Poder SRT:</strong> autoriza a tu abogado a actuar ante la Comisión Médica. No necesita certificación notarial.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="https://www.srt.gob.ar/wp-content/uploads/2017/04/Carta_Poder.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20">
                            <div style="font-size: 2.6em;">📍</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Opción de Jurisdicción:</strong> define que tu trámite se haga en la comisión de Río Negro según tu domicilio o lugar de trabajo.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="https://www.srt.gob.ar/wp-content/uploads/2018/06/Formulario-Opci%C3%B3n-Jurisdicci%C3%B3n-RES-298-17.pdf" target="_blank" rel="noopener">Descargar PDF <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                            </div>
                        </div>
                    </div>

                    <p class="mt-30"><a href="<?= BASE_URL ?>formularios-srt" class="btn btn-amarillo">VER TODOS LOS FORMULARIOS SRT <?= render_icon('chevron-right', 'ml-5') ?></a></p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="plazos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Plazos y divergencia en Río Negro</a></h2>

                    <p class="mt-30">Los plazos son los mismos en todo el país, pero en la práctica el que define el caso es el de la divergencia: si se vence, el dictamen queda firme y el reclamo pierde fuerza.</p>

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

                    <p class="mt-30">Presentada la divergencia, si no se resuelve, el expediente pasa a la <strong>Justicia Laboral de la provincia de Río Negro</strong>. Ahí se discute el porcentaje con el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo vigente</a> (Decreto 549/2025) y se define el monto, que depende de tu edad, tu sueldo y la incapacidad reconocida.</p>

                    <div class="mt-30">
                        <div class="tip-blog p-20 bg-gris border-radius-15 flex-start gap-20">
                            <div style="font-size: 2.6em;">🧮</div>
                            <div>
                                <p class="m-0 fs-09"><strong>Calculadora de indemnización:</strong> usala para tener una referencia de tu caso antes de decidir.</p>
                                <a class="link-volver-indice mt-10" style="margin-bottom:0;" href="<?= BASE_URL ?>calculadora-accidentes">Calcular ahora <?= render_icon('chevron-right', 'ml-5') ?></a>
                            </div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="faq-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Preguntas frecuentes</a></h2>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La Comisión Médica de Cipolletti atiende a Fernández Oro y Cinco Saltos?</summary>
                            <p class="mt-15 fs-09">Sí, la CM 35.3 tiene competencia sobre la Cuarta Circunscripción Judicial de Río Negro, que incluye Cipolletti y las localidades vecinas del Alto Valle.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo atenderme en Cipolletti si trabajo en Neuquén capital?</summary>
                            <p class="mt-15 fs-09">Sí, podés optar por la comisión del lugar donde prestás tareas aunque vivas en otra provincia. Tené en cuenta que la opción se toma al iniciar el trámite, no se cambia después y define qué fuero revisa el dictamen.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La CM 35.3 es lo mismo que la CM 35 de General Roca?</summary>
                            <p class="mt-15 fs-09">No. La CM 35 tiene sede en General Roca y la CM 35.3 es su delegación en Cipolletti. Son direcciones distintas y el turno se hace en la sede que figura en la citación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no estoy de acuerdo con el porcentaje de incapacidad?</summary>
                            <p class="mt-15 fs-09">Podés presentar la divergencia dentro de los 5 días hábiles desde la notificación (Resolución SRT 5/2026) y, si no se resuelve, el caso sigue en la Justicia Laboral Ordinaria de la provincia de Río Negro, no en el fuero federal.</p>
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
