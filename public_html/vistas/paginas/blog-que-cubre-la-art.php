<?php
/**
 * VISTA: QUE CUBRE LA ART Y QUE NO (ARTICULO DE BLOG)
 * PORTADO desde maqueta-que-cubre-la-art.html (SIN CSS EMBeBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css) y el componente
 * cta-whatsapp.php. Las listas largas de errores se alinean con el
 * sistema de columnas del sitio: .custom-table-blog / .tr-blog / .tr-blog-3cols.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">¿Qué cubre la ART y qué no?</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">¿Qué cubre la ART y qué no?</h1>

                <p class="articulo-lead">La ART está obligada por ley a cubrir tu atención médica, la rehabilitación, las prótesis y los medicamentos, y a pagarte una indemnización si te queda una incapacidad. Te explicamos qué cubre la ART y qué no, y qué hacer cuando te niegan lo que corresponde.</p>

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
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#que-cubre-la-art" class="active"><span class="nav-num">1</span> Qué cubre la ART por ley</a></li>
                                <li id="preg-2"><a href="#prestaciones-en-especie"><span class="nav-num">2</span> Prestaciones en especie</a></li>
                                <li id="preg-3"><a href="#que-no-cubre-la-art"><span class="nav-num">3</span> Qué NO cubre la ART</a></li>
                                <li id="preg-4"><a href="#accidente-in-itinere"><span class="nav-num">4</span> El accidente "in itinere"</a></li>
                                <li id="preg-5"><a href="#si-la-art-no-cubre"><span class="nav-num">5</span> Si la ART no cubre lo que corresponde</a></li>
                                <li id="preg-6"><a href="#errores-que-dejan-sin-cobertura"><span class="nav-num">6</span> Errores que te dejan sin cobertura</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te rechazaron la cobertura?";
                    $descripcion = "Consultá gratis con una abogada especializada en ART. Respondemos en el día.";
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
                <div id="que-cubre-la-art" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué cubre la ART por ley</a></h2>
                    <p>Cuando sufrís un <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">accidente de trabajo</a> o te diagnostican una enfermedad profesional, tu ART no te está haciendo un favor: te está cumpliendo la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;">Ley de Riesgos del Trabajo (24.557)</a>. Es una obligación, no un gesto de buena voluntad.</p>
                    <p>Lo primero que tenés que saber: la cobertura de la ART es <strong>amplia, obligatoria y sin costo</strong> para vos. Mientras el accidente o la enfermedad estén relacionados con tu trabajo, la ART tiene que cubrir todo lo necesario para que te recuperes.</p>

                    <h4 class="mt-40 mb-0"><span style="font-size: 1.3em;">👇</span> Lo principal que cubre la ART:</h4>
                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <?= render_icon('stethoscope-solid', 'icono-grande') ?>
                            <span>Atención médica: consultas, cirugías e internaciones</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('circle-check', 'icono-grande') ?>
                            <span>Medicamentos: los que recete el médico para tu lesión</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('shield-halved', 'icono-grande') ?>
                            <span>Rehabilitación: kinesiología y prótesis</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('dollar-sign-solid', 'icono-grande') ?>
                            <span>Indemnización: si te queda una incapacidad</span>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo importante:</span> la ley también cubre las enfermedades profesionales, las prestaciones "en especie" (todo lo que no es plata) y, si te queda una incapacidad, la indemnización por <a href="<?= BASE_URL ?>tabla-incapacidades" style="color:inherit;text-decoration:none;">incapacidad laboral</a>.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="prestaciones-en-especie" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Prestaciones en especie: qué presta la ART</a></h2>
                    <p>Las prestaciones "en especie" son las que te dan en servicios y atención, no en dinero. La ART está obligada a darte todas las que necesites, siempre que estén relacionadas con tu accidente laboral:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Prestación</div>
                            <div>En qué se traduce</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Atención médica</strong></div>
                            <div>Consultas, estudios, cirugías y todo tratamiento que tu lesión requiera, <strong>sin costo</strong> para vos.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Rehabilitación</strong></div>
                            <div>Kinesiología, fisioterapia y rehabilitación funcional, aunque se extienda por meses.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Prótesis y ortopedia</strong></div>
                            <div>Prótesis, muletas, férulas y todo insumo que tu recuperación requiera.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Medicamentos</strong></div>
                            <div>Todos los remedios que te recete el médico por tu accidente, sin que tengas que pagarlos.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Traslados</strong></div>
                            <div>Los viajes al médico, a la rehabilitación y a los estudios cuando la ART te los indique.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Además:</span> mientras estés de baja por el accidente, la ART te paga una <strong>incapacidad laboral temporaria (ILT)</strong>, y si te queda una secuela, la indemnización por la incapacidad que te corresponda.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="que-no-cubre-la-art" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Qué NO cubre la ART</a></h2>
                    <p>Así como la ley te protege, hay situaciones que <strong>la ART no está obligada a cubrir</strong>. Conocerlas te evita reclamos que no tienen fundamento y te ayuda a concentrarte en lo que sí corresponde:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Qué NO cubre</div>
                            <div>Por qué</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Enfermedades comunes sin vínculo con tu tarea</strong></div>
                            <div>Gripe, dolor de cabeza o cualquier enfermedad que no tenga relación con tu trabajo. La cubre tu obra social, no la ART.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Accidentes por culpa grave</strong></div>
                            <div>Si el accidente fue por <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;">dolo del trabajador (art. 6 de la Ley 24.557)</a>, es decir a propósito o con culpa grave, la ART puede rechazar la cobertura.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Accidentes fuera del ámbito laboral</strong></div>
                            <div>Lo que te pase en tu tiempo libre, sin relación con tu trabajo, no lo cubre la ART. La excepción es el accidente "in itinere" (yendo o volviendo del trabajo).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Incapacidades preexistentes declaradas</strong></div>
                            <div>Si tenías una lesión o enfermedad preexistente que quedó acreditada en tu <a href="<?= BASE_URL ?>examen-preocupacional" style="color:inherit;text-decoration:none;">examen preocupacional</a>, la ART no la cubre, salvo que el trabajo la haya agravado.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Gastos médicos particulares no autorizados</strong></div>
                            <div>Si te atendés por tu cuenta sin avisar a la ART, puede rechazar el reintegro. El circuito de atención se coordina con la ART.</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="accidente-in-itinere" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> El accidente "in itinere"</a></h2>
                    <p>Un punto que genera dudas constantes es el accidente que sufriste <strong>yendo o volviendo del trabajo</strong>. Estos accidentes se llaman <strong>"in itinere"</strong> y, por regla, <strong>están cubiertos por la ART</strong>: sufrís una caída, un choque o un asalto en el trayecto habitual entre tu casa y tu trabajo, y la ART tiene que responder igual que si hubiera sido en el puesto.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Situación</div>
                            <div>¿Cubre la ART?</div>
                            <div>Observación</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Accidente en el trabajo, durante tu jornada</div>
                            <div><strong>SÍ</strong></div>
                            <div>Es el supuesto más claro de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;">Ley 24.557</a>.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Yendo o volviendo del trabajo (in itinere)</div>
                            <div><strong>SÍ</strong></div>
                            <div>Cubierto si el trayecto es el habitual y razonable entre tu casa y el trabajo.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Lesión en tu tiempo libre, fuera del trabajo</div>
                            <div><strong>NO</strong></div>
                            <div>No guarda relación con tu vínculo laboral.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Enfermedad común sin vínculo con tu tarea</div>
                            <div><strong>NO</strong></div>
                            <div>Si no está en el listado de enfermedades profesionales, no corresponde.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con esto:</span> la ART cubre el in itinere solo si el trayecto es el habitual y razonable. Si te desviaste para hacer un trámite personal que no es parte del trayecto, la cobertura puede caerse.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="si-la-art-no-cubre" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué hacer si la ART no cubre lo que corresponde</a></h2>
                    <p>Si la ART te rechazó la cobertura, te dio el alta sin que estés bien o no te paga lo que te corresponde, <strong>no estás solo</strong>. Tenés vías de reclamo concretas:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Denunciá el accidente y asentá todo por escrito.</strong> Tu empleador tiene que denunciar el accidente a la ART. Si no lo hizo, denuncialo vos. Guardá el comprobante y toda constancia médica.
                            </li>
                            <li>
                                <strong>2. Reclamá formalmente ante la ART.</strong> Muchas veces, un reclamo bien escrito, citando el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/norma.htm" style="color:inherit;text-decoration:none;">art. 20 de la Ley 24.557</a> y con patrocinio letrado, hace que la ART cambie de posición.
                            </li>
                            <li>
                                <strong>3. Si te rechazan, hay instancias administrativas y judiciales.</strong> Podés iniciar la vía ante la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a> y, si corresponde, avanzar judicialmente.
                            </li>
                            <li>
                                <strong>4. Asesorarte con una abogada laboralista</strong>, idealmente antes de firmar cualquier acuerdo. Todo lo que firmes vale si estás bien asesorada.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> nunca firmes un alta médica si seguís con dolor o secuelas. Podés impugnarla. No te conformes con la palabra de la ART.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="errores-que-dejan-sin-cobertura" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Errores que te dejan sin cobertura</a></h2>
                    <p>La cobertura de la ART se activa cuando la denuncia queda bien hecha. Estos son los errores más comunes que <strong>dejan a los trabajadores sin cobertura</strong>, aunque les corresponda:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error que te deja sin cobertura</div>
                            <div>Cómo evitarlo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No denunciar el accidente en tiempo y forma</strong></div>
                            <div>La denuncia tiene que hacerse cuanto antes (lo ideal es dentro de las 72 horas del hecho). Informá siempre a tu empleador y a la ART.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No declarar tu domicilio y tu trayecto</strong></div>
                            <div>Para que un accidente "in itinere" quede cubierto, tenés que haber declarado el recorrido habitual entre tu casa y el trabajo.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Faltar a los controles médicos de la ART</strong></div>
                            <div>Faltar a los controles se usa en tu contra. Andá siempre, aunque no estés de acuerdo con el diagnóstico: tu disconformidad se plantea igual, pero con los controles hechos.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No pedir la copia de tus exámenes médicos</strong></div>
                            <div>Tenés derecho a recibir una copia del <a href="<?= BASE_URL ?>examen-preocupacional" style="color:inherit;text-decoration:none;">examen preocupacional</a> y de los periódicos. Con esa copia podés probar que una lesión no era preexistente.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Conformarte con un rechazo de palabra</strong></div>
                            <div>Si la ART te dice que "no corresponde", pedí la negativa por escrito: ahí quedan los motivos exactos y es lo que se impugna.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Firmar el alta sin entender</strong></div>
                            <div>El alta médica te la da la ART después de evaluar tu evolución. Si la firmás sin entender o sin estar bien, después es más difícil reclamar.</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre la cobertura de la ART:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me paga el sueldo mientras estoy de baja?</summary>
                            <p class="mt-15 fs-09">No exactamente. Mientras estás de baja, la ART te paga la <strong>incapacidad laboral temporaria (ILT)</strong>: un 70% del salario que venías cobrando, desde el día siguiente al accidente y hasta el alta o la declaración de incapacidad.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me cubre la terapia psicológica después del accidente?</summary>
                            <p class="mt-15 fs-09">Sí, cuando las secuelas psíquicas están <strong>vinculadas directamente con el accidente laboral</strong> (estrés postraumático, ansiedad, depresión). Forman parte de la rehabilitación integral que la ART debe brindar, siempre que estén acreditadas.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me reintegra si me atendí con mi médico particular?</summary>
                            <p class="mt-15 fs-09">Solo si la atención fue autorizada por la ART o si te atendiste de urgencia porque ella no cumplió. Atenderte por tu cuenta sin autorización no genera, por regla, obligación de reintegro de gastos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART me cubre los traslados al centro de salud?</summary>
                            <p class="mt-15 fs-09">Sí, cuando la atención lo requiere, por ejemplo si tenés que ir a rehabilitación a un consultorio lejano varias veces por semana. La ART está obligada a darte el traslado en esos casos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la ART me rechaza el accidente?</summary>
                            <p class="mt-15 fs-09">Si la ART te rechazó la cobertura, no te conformes. Pedí la negativa por escrito y consultá con una abogada laboralista: la mayoría de los rechazos de cobertura son improcedentes y se revierten con el reclamo correcto.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te rechazaron la cobertura de la ART?";
                            $descripcion = "Consultá gratis con una abogada especializada en ART. Te decimos si tu reclamo tiene fundamento, sin cargo y sin compromiso.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
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