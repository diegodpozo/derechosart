<?php
/**
 * VISTA: COMISION MEDICA DE LA PLATA (CM 11) - ARTICULO DE BLOG
 * ENFOQUE: COMPETENCIA REGIONAL Y MAPA DE COMISIONES DE LA PROVINCIA.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisiones Médicas</a> &gt; <span class="txt-amarillo">La Plata</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Comisión Médica de La Plata (CM 11): qué partidos cubre y cómo reclamar</h1>

                <p class="articulo-lead">La CM 11 no atiende sólo a la ciudad de La Plata: también cubre Berisso, Ensenada, Magdalena, Punta Indio y otros partidos de la región. Si tu ART te derivó ahí, esta guía te explica si te corresponde esa comisión, cómo llegar desde cada zona y qué hacer cuando el dictamen no reconoce tu incapacidad. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('location-dot') ?></div>
                        <div class="char-texto">
                            <strong>DIRECCIÓN</strong>
                            <span>Calle 13 Nº 220, La Plata</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>COMPETENCIA</strong>
                            <span>9 partidos</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>FUERO DE REVISIÓN</strong>
                            <span>Justicia laboral bonaerense</span>
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
                            <li id="preg-1"><a href="#datos-cm" class="active"><span class="nav-num">1</span> Datos de la CM 11 y partidos que cubre</a></li>
                            <li id="preg-2"><a href="#mapa-pba"><span class="nav-num">2</span> La Plata en el mapa de comisiones bonaerenses</a></li>
                            <li id="preg-3"><a href="#como-llegar"><span class="nav-num">3</span> Cómo llegar desde cada partido</a></li>
                            <li id="preg-4"><a href="#que-llevar"><span class="nav-num">4</span> Qué llevar al turno</a></li>
                            <li id="preg-5"><a href="#dictamen-cm"><span class="nav-num">5</span> El dictamen, los plazos y la revisión</a></li>
                            <li id="preg-6"><a href="#faq-cm"><span class="nav-num">6</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés dudas sobre tu trámite en la CM de La Plata?";
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
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Datos de la CM 11 y partidos que cubre</a></h2>

                    <p class="mt-30">La Comisión Médica N° 11 tiene su sede en el casco céntrico de La Plata y una competencia que va mucho más allá del municipio: abarca buena parte del litoral bonaerense, desde Berisso y Ensenada hasta Punta Indio. Si tu domicilio o tu lugar de trabajo están en alguno de esos partidos, el expediente se radica acá.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Dato</div>
                            <div>Información</div>
                        </div>
                        <div class="tr-blog">
                            <div>Nombre oficial</div>
                            <div>Comisión Médica N° 11</div>
                        </div>
                        <div class="tr-blog">
                            <div>Dirección</div>
                            <div>Calle 13 Nº 220, La Plata (B1902CSY)</div>
                        </div>
                        <div class="tr-blog">
                            <div>Jurisdicción</div>
                            <div>Provincia de Buenos Aires</div>
                        </div>
                        <div class="tr-blog">
                            <div>Competencia</div>
                            <div>Berisso, Coronel Brandsen, Ensenada, Gral. Paz, La Plata, Magdalena, Pte. Perón, Punta Indio y San Vicente.</div>
                        </div>
                    </div>

                    <div class="mt-30">
                        <iframe
                            src="https://www.google.com/maps?q=Calle+13+220+La+Plata+Buenos+Aires+Argentina&output=embed"
                            width="100%"
                            height="340"
                            style="border:0;border-radius:15px;display:block;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen></iframe>
                        <p class="mt-10 fs-08 txt-gris-medio flex-between" style="flex-wrap:wrap;gap:0.5rem;">
                            <span><?= render_icon('location-dot', 'mr-5') ?> Calle 13 Nº 220, La Plata (B1902CSY)</span>
                            <a href="https://www.google.com/maps?q=Calle+13+220+La+Plata+Buenos+Aires+Argentina" target="_blank" rel="noopener" class="fw-700">Ver en Google Maps <?= render_icon('arrow-up', '', 'transform:rotate(45deg);') ?></a>
                        </p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="mapa-pba" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> La Plata en el mapa de comisiones bonaerenses</a></h2>

                    <p class="mt-30">La Provincia de Buenos Aires no funciona como CABA. Tiene varias comisiones médicas repartidas en el territorio (La Plata, San Martín, Lanús, Morón, Zárate, entre otras) y el expediente se radica según el <strong>domicilio real del trabajador</strong> o el <strong>lugar donde presta tareas</strong>. Por eso dos compañeros del mismo empleador pueden terminar en comisiones distintas si viven en partidos diferentes.</p>

                    <p class="mt-20">Con la <strong>Ley 27.348</strong>, esa opción se ejerce al iniciar el trámite con el formulario de opción de jurisdicción y <strong>no se puede cambiar</strong> después. Si el accidente ocurrió en La Plata pero vivís en otro partido, tenés que definir cuál de las dos jurisdicciones vas a usar antes de firmar: de eso depende qué comisión evalúa tu incapacidad y qué tribunal revisa el caso más adelante.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">ℹ️</div>
                        <p class="m-0 fs-09 italic">La CM 11 cubre Berisso, Coronel Brandsen, Ensenada, Gral. Paz, La Plata, Magdalena, Pte. Perón, Punta Indio y San Vicente. Si tu domicilio o tu trabajo está fuera de esa lista, la comisión que te corresponde es otra.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-llegar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo llegar desde cada partido</a></h2>

                    <p class="mt-30">La sede está en el centro de La Plata, sobre Calle 13, una zona de trámites con mucho movimiento y estacionamiento limitado. Desde <strong>Berisso o Ensenada</strong> el viaje es corto, pero conviene salir con margen por el tránsito de la mañana. Desde <strong>Magdalena, San Vicente o Coronel Brandsen</strong> ya hay que sumar el tiempo de ruta, y desde <strong>Punta Indio</strong> el traslado es largo: si el turno es temprano, lo mejor es coordinar el viaje el día anterior.</p>

                    <p class="mt-20">Un detalle práctico que hace perder turnos: la citación suele pedir que llegues antes de la hora. Si venís de lejos y llevás estudios en mano (radiografías, resonancias, carpetas con informes), calculá el ingreso a la Ciudad y el estacionamiento. Llegar tarde puede significar reprogramar y esperar varias semanas por un nuevo turno.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🚗</div>
                        <p class="m-0 fs-09 italic">Si viajás desde otro partido, verificá el día y la hora del turno antes de salir y llevá la citación impresa o en el celular: en la puerta la piden para dejar ingresar.</p>
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

                    <p class="mt-30">Si el trámite lo hace tu abogado, igual conviene que los estudios estén completos y actualizados: la comisión evalúa con lo que tiene a la vista y, si falta un informe, puede citarte de nuevo o resolver con menos elementos de los que necesitás.</p>

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
                                <p class="m-0 fs-09"><strong>Opción de Jurisdicción:</strong> definí que tu trámite se haga en la CM de La Plata según tu domicilio o lugar de trabajo.</p>
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
                <div id="dictamen-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> El dictamen, los plazos y la revisión</a></h2>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏱️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Plazo clave:</span> tenés <strong>5 días hábiles</strong> desde la notificación del alta o el dictamen para presentar la divergencia, según la Resolución SRT 5/2026.</p>
                    </div>

                    <p>La comisión determina el porcentaje de incapacidad y el alta. Si no estás de acuerdo, la divergencia se presenta dentro de esos 5 días hábiles; si la respuesta tampoco te conforma, el caso pasa a la <strong>Justicia Laboral de la provincia de Buenos Aires</strong>, no al fuero federal. El porcentaje se mide con el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo vigente</a> (Decreto 549/2025) y el monto depende de tu edad, tu sueldo y ese porcentaje: no hay un número igual para todos.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Etapa</div>
                            <div>Plazo</div>
                        </div>
                        <div class="tr-blog">
                            <div>Denuncia del accidente a la ART</div>
                            <div>72 horas</div>
                        </div>
                        <div class="tr-blog">
                            <div>Divergencia con el alta o el dictamen</div>
                            <div>5 días hábiles (Res. SRT 5/2026)</div>
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

                <!-- SECCION 6 -->
                <div id="faq-cm" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Preguntas frecuentes</a></h2>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué zonas cubre la CM 11 de La Plata?</summary>
                            <p class="mt-15 fs-09">Su competencia incluye Berisso, Coronel Brandsen, Ensenada, Gral. Paz, La Plata, Magdalena, Pte. Perón, Punta Indio y San Vicente.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo hacer el trámite en La Plata si vivo en Berisso?</summary>
                            <p class="mt-15 fs-09">Sí. Berisso está dentro de la competencia de la CM 11, así que podés optar por tu domicilio real y radicar el expediente en esta comisión. Lo mismo pasa si vivís en Ensenada, Magdalena o cualquiera de los partidos de la lista.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Y si el accidente fue en La Plata pero vivo en otro partido?</summary>
                            <p class="mt-15 fs-09">Ahí tenés dos opciones: la jurisdicción de tu domicilio real o la del lugar de trabajo. Se elige al iniciar el trámite con el formulario de opción de jurisdicción y no se puede modificar después, así que conviene resolverlo con asesoramiento antes de firmar.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no estoy de acuerdo con el porcentaje de incapacidad?</summary>
                            <p class="mt-15 fs-09">Podés presentar la divergencia dentro de los 5 días hábiles desde la notificación (Resolución SRT 5/2026) y, si no se resuelve, el caso sigue en la Justicia Laboral de la provincia de Buenos Aires, no en el fuero federal.</p>
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
