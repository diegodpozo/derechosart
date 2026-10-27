<?php
/**
 * VISTA: COMISION MEDICA DE CABA (CM 10) - ARTICULO DE BLOG
 * ENFOQUE: SEDE CENTRAL, DELEGACIONES Y ELECCION DE JURISDICCION EN CABA.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> &gt; <span class="txt-amarillo">CABA</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Comisión Médica de CABA (CM 10): sede central, delegaciones y cómo iniciar el trámite</h1>

                <p class="articulo-lead">La Ciudad Autónoma de Buenos Aires tiene una sola Comisión Médica Jurisdiccional, la CM 10, con sede central en Moreno 401 y una sede en Villa Urquiza. Si tuviste un accidente laboral o te diagnosticaron una enfermedad profesional, acá se define tu incapacidad. Te explicamos qué sede te conviene, qué documentación llevar y cómo reaccionar si el dictamen no te conforma. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('location-dot') ?></div>
                        <div class="char-texto">
                            <strong>DIRECCIÓN</strong>
                            <span>Moreno 401, CABA</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>LEY 27.348</strong>
                            <span>paso obligatorio</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>SEGUNDA SEDE</strong>
                            <span>Villa Urquiza (10L)</span>
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
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
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
                            <li id="preg-1"><a href="#datos-cm" class="active"><span class="nav-num">1</span> La CM 10: sede central y delegaciones</a></li>
                            <li id="preg-2"><a href="#jurisdiccion"><span class="nav-num">2</span> Cómo se elige la jurisdicción en CABA</a></li>
                            <li id="preg-3"><a href="#como-llegar"><span class="nav-num">3</span> Cómo llegar a cada sede</a></li>
                            <li id="preg-4"><a href="#que-llevar"><span class="nav-num">4</span> Documentación y formularios</a></li>
                            <li id="preg-5"><a href="#plazos"><span class="nav-num">5</span> Plazos que no podés perder</a></li>
                            <li id="preg-6"><a href="#dictamen-cm"><span class="nav-num">6</span> Si no estás de acuerdo con el dictamen</a></li>
                            <li id="preg-7"><a href="#faq-cm"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés dudas sobre tu trámite en la CM de CABA?";
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
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> La CM 10: sede central y delegaciones</a></h2>

                    <p class="mt-30">A diferencia de las provincias, la Ciudad de Buenos Aires no se reparte entre varias comisiones: hay una sola Comisión Médica Jurisdiccional, la <strong>CM 10</strong>, que atiende a todos los trabajadores con domicilio real o lugar de trabajo en la Ciudad. Su sede central está en el microcentro y tiene además una sede desconcentrada en Villa Urquiza, identificada como CM 10L.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Información</div>
                        </div>
                        <div class="tr-blog">
                            <div>Nombre oficial</div>
                            <div>Comisión Médica N° 10</div>
                        </div>
                        <div class="tr-blog">
                            <div>Dirección</div>
                            <div>Moreno 401, CABA (C1091AAH)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Jurisdicción</div>
                            <div>Ciudad Autónoma de Buenos Aires</div>
                        </div>
                        <div class="tr-blog">
                            <div>Delegaciones</div>
                            <div>CM 10A a 10K</div>
                        </div>
                        <div class="tr-blog">
                            <div>Sede Villa Urquiza</div>
                            <div>CM 10L - Av. Olazábal 4300, CABA (C1430BQV)</div>
                        </div>
                    </div>

                    <div class="mt-30">
                        <iframe
                            src="https://www.google.com/maps?q=Moreno+401+CABA+Argentina&output=embed"
                            width="100%"
                            height="340"
                            style="border:0;border-radius:15px;display:block;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                        <p class="mt-10 fs-08 txt-gris-medio flex-between" style="flex-wrap:wrap;gap:0.5rem;">
                            <span><?= render_icon('location-dot', 'mr-5') ?> Moreno 401, CABA (C1091AAH)</span>
                            <a href="https://www.google.com/maps?q=Moreno+401+CABA+Argentina" target="_blank" rel="noopener" class="fw-700">Ver en Google Maps <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                        </p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="jurisdiccion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Cómo se elige la jurisdicción en CABA</a></h2>

                    <p>Con la <strong>Ley 27.348</strong>, antes de ir a la Justicia tenés que pasar por la Comisión Médica Jurisdiccional. La opción se ejerce al iniciar el trámite y se puede tomar por dos caminos: el <strong>domicilio real del trabajador</strong> o el <strong>lugar donde presta tareas</strong>. En CABA eso simplifica todo, porque no hay que comparar entre comisiones: la CM 10 cubre toda la Ciudad.</p>

                    <p class="mt-20">El punto que sí conviene pensar es el cruce con la Provincia. Si vivís en la Provincia de Buenos Aires pero trabajás en CABA, o al revés, tenés dos jurisdicciones posibles y la decisión que tomes al inicio del expediente es la que queda. No es un detalle menor: cambia la comisión que evalúa la incapacidad y el fuero que después revisa el caso.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">ℹ️</div>
                        <p class="m-0 fs-09 italic">La elección de jurisdicción se hace con el <strong>formulario de opción de jurisdicción</strong> al iniciar el trámite, y <strong>no se puede cambiar</strong> después. Esta Comisión Médica atiende toda la Ciudad Autónoma de Buenos Aires.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-llegar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo llegar a cada sede</a></h2>

                    <p class="mt-30">Las dos sedes están en la Ciudad, pero en zonas muy distintas. <strong>Moreno 401</strong> queda en el microcentro porteño, en una zona de mucho movimiento, con estacionamiento complicado y trámites que suelen arrancar temprano: si vas en auto, calculá tiempo extra. <strong>Av. Olazábal 4300</strong> está en Villa Urquiza, en la zona norte de la Ciudad, y suele ser más cómoda para quien vive o trabaja en ese corredor.</p>

                    <p class="mt-20">La sede que figure en tu citación es la que corresponde a tu delegación; no hace falta pedir cambio para ir a la otra. Si tenés que llevar estudios, radiografías o resonancias, cargalos el día anterior: en el microcentro moverse con carpetas grandes es incómodo y muchos turnos se demoran justamente por falta de documentación.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🚇</div>
                        <p class="m-0 fs-09 italic">Llegá con 20 o 30 minutos de margen. En la CM 10 se atiende por orden de citación y, si llegás tarde, puede costarte el turno y volver a esperar semanas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="que-llevar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Documentación y formularios</a></h2>

                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><span style="font-size: 1.3em;">🪪</span> DNI (original y copia)</li>
                        <li><span style="font-size: 1.3em;">📋</span> Alta médica o el dictamen que estés cuestionando</li>
                        <li><span style="font-size: 1.3em;">🏥</span> Estudios médicos completos: radiografías, resonancias, informes</li>
                        <li><span style="font-size: 1.3em;">📄</span> Formulario de opción de jurisdicción</li>
                        <li><span style="font-size: 1.3em;">✍️</span> Carta poder y designación de patrocinio letrado</li>
                    </ul>

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
                                <p class="m-0 fs-09"><strong>Opción de Jurisdicción:</strong> definí que tu trámite se haga en la CM de CABA según tu domicilio o lugar de trabajo.</p>
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

                <!-- SECCION 5 -->
                <div id="plazos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Plazos que no podés perder</a></h2>

                    <p class="mt-30">El expediente se mueve con plazos cortos y, cuando vencen, la vía se complica. Estos son los cuatro que hay que tener a mano en la Ciudad:</p>

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

                    <p class="mt-20">El plazo de la divergencia es el que más se pierde: si te notifican un alta y dejás pasar los días hábiles sin presentar nada, después cuesta mucho volver atrás. Y no hace falta estar de acuerdo con el porcentaje para reclamar: alcanza con que el dictamen no te cierre.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="dictamen-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Si no estás de acuerdo con el dictamen</a></h2>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏱️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Plazo clave:</span> tenés <strong>5 días hábiles</strong> desde la notificación del alta o el dictamen para presentar la divergencia, según la Resolución SRT 5/2026.</p>
                    </div>

                    <p>Después de esta Comisión Médica, si el resultado no te conforma, el camino sigue en la Justicia Nacional del Trabajo. Ese dato importa: en CABA el fuero es nacional, no provincial, y el trámite cambia respecto de un caso radicado en la Provincia. El porcentaje de incapacidad se determina según el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo vigente</a> (Decreto 549/2025), y el monto final de la indemnización depende de tu edad, tu sueldo y ese porcentaje: varía en cada caso.</p>

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
                            <summary class="fw-700 pointer">¿La CM 10 atiende a toda la Ciudad de Buenos Aires?</summary>
                            <p class="mt-15 fs-09">La CM 10 tiene sede central en Moreno 401 y una sede en Villa Urquiza (CM 10L, Av. Olazábal 4300). Ambas atienden a trabajadores con domicilio o lugar de trabajo en la Ciudad Autónoma de Buenos Aires.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo elegir la sede de Villa Urquiza en lugar de Moreno 401?</summary>
                            <p class="mt-15 fs-09">La citación indica la sede y la delegación que corresponden a tu expediente. Las dos sedes son parte de la misma CM 10 y cubren la Ciudad, así que no se trata de dos comisiones distintas: si tenés una necesidad puntual de cambio, conviene plantearla antes del turno y no presentarte directamente en la otra sede.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si trabajo en CABA pero vivo en la Provincia?</summary>
                            <p class="mt-15 fs-09">Podés optar por la jurisdicción del domicilio real o la del lugar de trabajo, pero la elección se hace al iniciar el trámite con el formulario de opción de jurisdicción y después no se puede modificar. Por eso conviene definirla con asesoramiento antes de firmar.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no estoy de acuerdo con el porcentaje de incapacidad?</summary>
                            <p class="mt-15 fs-09">Podés presentar la divergencia dentro de los 5 días hábiles desde la notificación (Resolución SRT 5/2026) y, si no se resuelve, el caso sigue en la Justicia Nacional del Trabajo.</p>
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
