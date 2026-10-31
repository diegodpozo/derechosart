<?php
/**
 * VISTA: COMISION MEDICA DE NEUQUEN (CM N 9) - ARTICULO DE BLOG
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> &gt; <span class="txt-amarillo">Neuquén</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Comisión Médica de Neuquén (CM N° 9):<br>a quién atiende y cómo reclamar</h1>

                <p class="articulo-lead">La CM N° 9 no atiende toda la provincia: cubre la capital y deriva el interior a otras sedes. Si trabajás en Neuquén y la ART te dio el alta o te fijó un porcentaje que no te cierra, acá tenés la dirección, los plazos y el fuero que revisa el caso. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('location-dot') ?></div>
                        <div class="char-texto">
                            <strong>DIRECCIÓN</strong>
                            <span>Bartolomé Mitre 590</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>COMPETENCIA</strong>
                            <span>Primera Circunscripción</span>
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
                            <li id="preg-1"><a href="#datos-cm" class="active"><span class="nav-num">1</span> La CM 9 y cómo se reparte la provincia</a></li>
                            <li id="preg-2"><a href="#jurisdiccion"><span class="nav-num">2</span> Elegir jurisdicción: capital, interior y Río Negro</a></li>
                            <li id="preg-3"><a href="#turno"><span class="nav-num">3</span> El día del turno en Bartolomé Mitre 590</a></li>
                            <li id="preg-4"><a href="#que-llevar"><span class="nav-num">4</span> Documentación y formularios</a></li>
                            <li id="preg-5"><a href="#plazos"><span class="nav-num">5</span> Plazos que no podés perder</a></li>
                            <li id="preg-6"><a href="#divergencia"><span class="nav-num">6</span> Si el dictamen no te cierra</a></li>
                            <li id="preg-7"><a href="#faq-cm"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés dudas sobre tu trámite en la CM de Neuquén?";
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
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> La CM 9 y cómo se reparte la provincia</a></h2>

                    <p class="mt-30">Neuquén no funciona como una ciudad única. La provincia se ordena en circunscripciones judiciales y cada una tiene asignada una comisión médica. La <strong>CM N° 9</strong>, con sede en la capital, atiende la Primera Circunscripción: la ciudad de Neuquén y su zona de influencia. Si tu domicilio o tu lugar de trabajo queda en el interior, lo más probable es que te toque una delegación y no esta sede.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Información</div>
                        </div>
                        <div class="tr-blog">
                            <div>Nombre oficial</div>
                            <div>Comisión Médica N° 9</div>
                        </div>
                        <div class="tr-blog">
                            <div>Dirección</div>
                            <div>Bartolomé Mitre 590 (Q8300KWL), Neuquén Capital</div>
                        </div>
                        <div class="tr-blog">
                            <div>Competencia</div>
                            <div>Primera Circunscripción Judicial de Neuquén (ciudad de Neuquén y alrededores)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Delegaciones del interior</div>
                            <div>Plaza Huincul, Zapala y Chos Malal, para las restantes circunscripciones</div>
                        </div>
                        <div class="tr-blog">
                            <div>Horario de atención</div>
                            <div>Lunes a viernes, 7:30 a 14:30 hs</div>
                        </div>
                    </div>

                    <div class="mt-30">
                        <iframe
                            src="https://www.google.com/maps?q=Bartolome+Mitre+590,+Neuquen,+Argentina&output=embed"
                            width="100%"
                            height="340"
                            style="border:0;border-radius:15px;display:block;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                        <p class="mt-10 fs-08 txt-gris-medio flex-between" style="flex-wrap:wrap;gap:0.5rem;">
                            <span><?= render_icon('location-dot', 'mr-5') ?> Bartolomé Mitre 590, Neuquén Capital</span>
                            <a href="https://www.google.com/maps?q=Bartolome+Mitre+590,+Neuquen,+Argentina" target="_blank" rel="noopener" class="fw-700">Ver en Google Maps <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                        </p>
                    </div>

                    <p class="mt-30">Un detalle que sorprende a mucha gente del interior: la comisión no se elige por comodidad. Si el expediente se abre en Zapala, no podés pedir que lo pase a la capital porque te queda más cerca del trabajo. El lugar donde tramitás depende de la jurisdicción que se eligió al inicio y de la circunscripción que corresponde.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="jurisdiccion" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Elegir jurisdicción: capital, interior y el cruce con Río Negro</a></h2>

                    <p>Con la <strong>Ley 27.348</strong>, el paso por la comisión médica es obligatorio antes de cualquier reclamo judicial. La jurisdicción se elige al iniciar el trámite y hay dos referencias válidas: el <strong>domicilio real del trabajador</strong> o el <strong>lugar donde efectivamente presta tareas</strong>.</p>

                    <p class="mt-20">En Neuquén el punto caliente es el <strong>Alto Valle</strong>. La capital y Cipolletti están separadas por un puente, y hay gente que vive de un lado y trabaja del otro todos los días. En ese caso tenés dos comisiones posibles, la CM 9 en Neuquén y la CM 35.3 en Río Negro, y la elección no es cosmética: cambia la comisión que evalúa tu incapacidad y cambia el fuero que después revisa el dictamen. Lo que elijas al abrir el expediente es lo que queda.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">ℹ️</div>
                        <p class="m-0 fs-09 italic">La jurisdicción se formaliza con el <strong>formulario de opción de jurisdicción</strong> y después <strong>no se puede cambiar</strong>. Si trabajás en Plaza Huincul, Zapala o Chos Malal, puede corresponderte una delegación del interior y no la sede de la capital.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="turno" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> El día del turno en Bartolomé Mitre 590</a></h2>

                    <p class="mt-30">La sede está en pleno centro de la capital, sobre Bartolomé Mitre, y atiende en franja matutina: de 7:30 a 14:30. Eso significa que el movimiento fuerte es temprano y que llegar sobre la hora del cierre puede dejarte sin atención. Si el turno es a primera hora, calculá el tráfico de entrada a la ciudad, sobre todo si venís desde el oeste o desde el otro lado del río.</p>

                    <p class="mt-20">Para quien viene del interior, el viaje pesa. Desde localidades alejadas de la capital el traslado puede llevar horas y, en la práctica, muchos turnos se pierden porque el trabajador llega sin los estudios completos o sin la documentación que le pidieron. Si tenés que moverte desde lejos, pedí el turno lo más temprano posible y, si el viaje es largo, evaluá dormir en la ciudad la noche anterior.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🅿️</div>
                        <p class="m-0 fs-09 italic">En la zona de Bartolomé Mitre el estacionamiento es complicado y suele estar tarifado. Si vas en auto, sumá 20 o 30 minutos de margen para estacionar y llegar caminando.</p>
                    </div>

                    <p class="mt-30">La sede que figura en tu citación es la que te corresponde. No hace falta pedir cambio para ir a otra: si el expediente está en una delegación del interior, el turno se hace allí, aunque la capital te quede más a mano.</p>

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

                    <p class="mt-30">Los estudios son lo que más se olvida. La comisión evalúa con lo que tiene en el expediente: si la resonancia quedó en la ART o en el sanatorio y no está en la carpeta, el porcentaje se mide con menos información de la que existe. Llevá el CD o el informe original, no una foto del celular.</p>

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
                                <p class="m-0 fs-09"><strong>Opción de Jurisdicción:</strong> define que tu trámite se haga en la CM de Neuquén según tu domicilio o lugar de trabajo.</p>
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

                    <p class="mt-30">El expediente avanza con plazos cortos y, cuando se vencen, la salida se complica. Estos son los cuatro que conviene tener anotados:</p>

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

                    <p class="mt-30">El que más se pierde es el de la divergencia. Te notifican el alta un martes y, si no presentás nada en los días hábiles siguientes, el dictamen queda firme. No hace falta estar seguro de que el porcentaje está mal para presentar: alcanza con que el resultado no te cierre y querer que lo revise otro órgano.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="divergencia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Si el dictamen no te cierra</a></h2>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏱️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Plazo clave:</span> tenés <strong>5 días hábiles</strong> desde la notificación del alta o el dictamen para presentar la divergencia, según la Resolución SRT 5/2026.</p>
                    </div>

                    <p>Si la divergencia no se resuelve, el caso sigue en la <strong>Justicia Laboral de la provincia de Neuquén</strong>. Es un fuero provincial, no federal, y eso define el trámite, los tiempos y hasta la forma de plantear la demanda. El porcentaje de incapacidad se determina con el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo vigente</a> (Decreto 549/2025) y el monto final depende de tu edad, tu sueldo y ese porcentaje: no hay un número igual para dos casos.</p>

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
                            <summary class="fw-700 pointer">¿La Comisión Médica de Neuquén atiende a toda la provincia?</summary>
                            <p class="mt-15 fs-09">La CM N° 9 de la capital atiende la Primera Circunscripción Judicial. Para Plaza Huincul, Zapala y Chos Malal hay delegaciones propias que cubren las demás circunscripciones.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo hacer el trámite en Neuquén si vivo en Cipolletti?</summary>
                            <p class="mt-15 fs-09">Sí, si tu lugar de trabajo está en la Primera Circunscripción de Neuquén podés optar por la CM 9 aunque vivas en Río Negro. Ojo: la opción se toma al iniciar el expediente y después no se cambia, y de esa elección depende el fuero que revise el caso.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no estoy de acuerdo con el porcentaje de incapacidad?</summary>
                            <p class="mt-15 fs-09">Podés presentar la divergencia dentro de los 5 días hábiles desde la notificación (Resolución SRT 5/2026) y, si no se resuelve, el caso sigue en la Justicia Laboral Ordinaria de la provincia de Neuquén, no en el fuero federal.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tarda el trámite en la comisión médica?</summary>
                            <p class="mt-15 fs-09">No hay un plazo único: depende de si hubo tratamiento con ILT, de los estudios que falten y de si se presenta divergencia. Lo que sí está reglado es que la determinación de la incapacidad se hace dentro de los 20 días desde el cese de la ILT (Res. SRT 298/2017).</p>
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
