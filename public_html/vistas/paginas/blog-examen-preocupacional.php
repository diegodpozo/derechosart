<?php
/**
 * VISTA: EXAMEN PREOCUPACIONAL Y LESION PREEXISTENTE (ARTICULO DE BLOG)
 * PORTADO desde maquetas/_articulo-examen.html (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css) y el componente
 * cta-whatsapp.php. Las tablas usan .custom-table-blog / .tr-blog / .tr-blog-3cols.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Examen preocupacional</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">ACCIDENTES LABORALES</span>
                <h1 class="articulo-titulo">Examen preocupacional: qué es y qué pasa si detectan una lesión preexistente</h1>

                <p class="articulo-lead">El examen preocupacional es el estudio médico que la ley obliga a hacer antes de que empieces a trabajar. Sirve para conocer tu estado de salud, pero también es la herramienta que la ART usa para decir que una lesión "ya la tenías". Te explicamos cómo funciona, qué derechos tenés y cómo se pelea un rechazo por preexistencia.</p>

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
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#que-es" class="active"><span class="nav-num">1</span> Qué es y cuándo se hace</a></li>
                                <li id="preg-2"><a href="#tipos"><span class="nav-num">2</span> Los exámenes médicos laborales</a></li>
                                <li id="preg-3"><a href="#preexistente"><span class="nav-num">3</span> Lesión preexistente: qué dice la ley</a></li>
                                <li id="preg-4"><a href="#derechos"><span class="nav-num">4</span> Tus derechos: copia y no discriminación</a></li>
                                <li id="preg-5"><a href="#rechazo"><span class="nav-num">5</span> Rechazo de ART por preexistencia</a></li>
                                <li id="preg-6"><a href="#guardar"><span class="nav-num">6</span> Qué guardar y errores a evitar</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te rechazan por preexistencia?";
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
                <div id="que-es" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es el examen preocupacional y cuándo se hace</a></h2>
                    <p>El examen preocupacional (o "de ingreso") es el <strong>estudio médico que se hace antes de que empieces a trabajar</strong>. Su objetivo es determinar si estás en condiciones de hacer el puesto y, sobre todo, <strong>detectar patologías preexistentes</strong>: lesiones o enfermedades que ya tenías antes de entrar.</p>
                    <p>Según la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/160000-164999/163171/norma.htm" style="color:inherit;text-decoration:none;">Resolución SRT 37/2010 (art. 2)</a>, el preocupacional es <strong>obligatorio</strong>, se hace de manera <strong>previa al inicio de la relación laboral</strong> y su realización está a cargo del <strong>empleador</strong> (que puede convenir con su ART quién lo practica). En ningún caso puede usarse como elemento discriminatorio para el empleo.</p>
                    <p>No es un trámite menor ni un favor: es la puerta de entrada del sistema de riesgos del trabajo y, por eso, lo que quede ahí escrito puede jugar a favor o en contra tuyo más adelante.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">&#9888;&#65039;</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo clave:</span> si en el preocupacional queda acreditada una lesión preexistente, la ART puede usarla para <strong>excluir la cobertura</strong> (art. 6 de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" style="color:inherit;text-decoration:none;">Ley 24.557</a>). Por eso tenés que saber qué te hicieron y guardar la copia.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="tipos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Los 5 exámenes médicos del trabajo</a></h2>
                    <p>El preocupacional no es el único. La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/160000-164999/163171/norma.htm" style="color:inherit;text-decoration:none;">Resolución SRT 37/2010 (art. 1)</a> define <strong>cinco exámenes médicos</strong> dentro del sistema de riesgos del trabajo. Conocerlos te ayuda a saber cuál te corresponde y quién debe hacerlo:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Examen</div>
                            <div>Cuándo se hace</div>
                            <div>Quién lo realiza</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Preocupacional o de ingreso</strong></div>
                            <div>Antes de empezar la relación laboral.</div>
                            <div>El <strong>empleador</strong> (puede convenirlo con la ART).</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Periódico</strong></div>
                            <div>Según los agentes de riesgo a los que estés expuesto (con un examen clínico anual).</div>
                            <div>La <strong>ART</strong> o el empleador autoasegurado.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Previo a transferencia de actividad</strong></div>
                            <div>Si pasás a tareas con nuevos riesgos, antes del cambio.</div>
                            <div>El <strong>empleador</strong>.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Posterior a ausencia prolongada</strong></div>
                            <div>Antes de retomar tareas después de una ausencia larga (optativo).</div>
                            <div>La <strong>ART</strong> o el empleador autoasegurado.</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div><strong>Previo al egreso</strong></div>
                            <div>Entre 10 días antes y 30 días después de terminar la relación (optativo).</div>
                            <div>La <strong>ART</strong> o el empleador autoasegurado.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">&#128161;</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Para tener en cuenta:</span> si trabajás expuesto a ruido, productos químicos u otros agentes, la ART debe hacerte los <strong>periódicos</strong>. Faltar a esos controles se usa después en tu contra.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="preexistente" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Lesión preexistente: qué dice la ley</a></h2>
                    <p>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" style="color:inherit;text-decoration:none;">artículo 6 de la Ley 24.557 (inc. 3, ap. b)</a> excluye del sistema a las <strong>"incapacidades del trabajador preexistentes a la iniciación de la relación laboral y acreditadas en el examen preocupacional"</strong>, siempre que el examen se haya hecho según las pautas de la autoridad de aplicación.</p>
                    <p>Hay dos palabras que lo definen todo:</p>
                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <span style="font-size:2em;">&#128198;</span>
                            <span><strong>Preexistente:</strong> la lesión tenía que estar <strong>antes</strong> de que empezaras a trabajar.</span>
                        </div>
                        <div class="item-ejemplo">
                            <span style="font-size:2em;">&#128196;</span>
                            <span><strong>Acreditada:</strong> tiene que estar <strong>documentada en tu preocupacional</strong>. Si no hay examen, no hay acreditación.</span>
                        </div>
                    </div>
                    <p class="mt-20">Dicho simple: para excluir la cobertura, la ART tiene que poder probar <strong>las dos cosas a la vez</strong>. Si el empleador nunca te hizo el preocupacional, no puede invocar una preexistencia "acreditada" que no existe.</p>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">&#9878;&#65039;</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Ojo:</span> una lesión preexistente no hace que pierdas todo automáticamente. Si el trabajo <strong>agravó</strong> esa lesión, la situación se evalúa caso por caso y puede corresponder cobertura igual. Consultá con una abogada.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="derechos" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Tus derechos: copia, información y no discriminación</a></h2>
                    <p>No sos un espectador en el preocupacional. La normativa te da derechos concretos:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Derecho</div>
                            <div>Qué significa</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#9989; Saber el resultado</strong></div>
                            <div>Tenés derecho a ser <strong>informado del resultado</strong> de los exámenes que te hicieron (Res. SRT 37/2010, art. 7).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#9989; Pedir una copia</strong></div>
                            <div>Podés pedir al <strong>empleador o a la ART</strong> una <strong>copia</strong> de tus exámenes. Guardala: es tu prueba (Res. SRT 37/2010, art. 7).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#9989; No ser discriminado</strong></div>
                            <div>El preocupacional <strong>no puede usarse como elemento discriminatorio</strong> para el empleo (Res. SRT 37/2010, art. 2; y las reglas generales de la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/25000-29999/27971/texact.htm" style="color:inherit;text-decoration:none;">ley antidiscriminatoria 23.592</a>).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#9989; Sin test de Chagas</strong></div>
                            <div>Está <strong>prohibido</strong> incluir la serología de Chagas en el preocupacional (Ley 26.281, art. 5).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#9989; Una obligación tuya también</strong></div>
                            <div>Vos también tenés que <strong>informar tus antecedentes médicos</strong> con carácter de declaración jurada (Res. SRT 37/2010, art. 7).</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="rechazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Rechazo de ART por "preexistencia": cómo se pelea</a></h2>
                    <p>Si la ART te rechazó el reclamo diciendo que tu lesión "ya estaba antes", no te quedes con la respuesta de palabra. Estos pasos te ordenan:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Pedí la negativa por escrito y con el motivo exacto.</strong> Que digan <strong>qué</strong> lesión dicen que era preexistente y en <strong>qué examen o estudio</strong> se basan.
                            </li>
                            <li>
                                <strong>2. Exigí el preocupacional que invocan.</strong> Si alegan preexistencia, tienen que mostrar el estudio donde quedó acreditada. Sin eso, la exclusión no se sostiene.
                            </li>
                            <li>
                                <strong>3. Compará fechas.</strong> Revisá que la lesión figure <strong>antes</strong> del inicio de la relación laboral. Si apareció después, la preexistencia se cae.
                            </li>
                            <li>
                                <strong>4. Reclamá formalmente.</strong> Presentá el reclamo ante la ART y, si sigue el rechazo, ante la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a>.
                            </li>
                            <li>
                                <strong>5. Asesorate con una abogada laboralista</strong> antes de firmar cualquier cosa. Muchos rechazos por preexistencia son improcedentes y se revierten.
                            </li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">&#128161;</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> pedí la copia del preocupacional desde el primer día de trabajo, no cuando ya hay un conflicto. En ese momento es más fácil y es cuando te sirve.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="guardar" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué guardar y qué errores evitar</a></h2>
                    <p>La preexistencia se discute con <strong>papeles</strong>. Estos son los errores más comunes que debilitan a los trabajadores frente a un rechazo:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error</div>
                            <div>Cómo evitarlo</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No pedir la copia del preocupacional</strong></div>
                            <div>Pedila siempre, aunque hace años que trabajás. Sin la copia, cuesta probar cómo estaba tu salud al entrar.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No guardar los estudios e informes</strong></div>
                            <div>Conservá informe, imágenes y comprobantes de cada examen que te hagan.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; No declarar tus antecedentes</strong></div>
                            <div>La declaración jurada es tu protección. Si ocultás algo y aparece, se usa en tu contra.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Faltar a los exámenes periódicos</strong></div>
                            <div>Ir a los controles construye tu historial de salud. Faltar se interpreta como que no colaborás.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>&#10060; Firmar un rechazo o un alta sin entender</strong></div>
                            <div>Pedí todo por escrito y consultá antes de firmar. Lo que firmás, vale.</div>
                        </div>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos sobre el examen preocupacional:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿El examen preocupacional lo pago yo?</summary>
                            <p class="mt-15 fs-09">No. El costo lo asume el responsable de realizarlo: en el preocupacional, el <strong>empleador</strong>; en los periódicos, la ART. Vos no tenés que pagarlo (Res. SRT 37/2010, art. 12).</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Me pueden rechazar por el resultado del preocupacional?</summary>
                            <p class="mt-15 fs-09">El preocupacional no puede usarse como <strong>elemento discriminatorio</strong> para el empleo (Res. SRT 37/2010, art. 2). Si sentís que te excluyeron por una condición de salud, consultá: podés tener una acción por discriminación.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si mi empleador nunca me hizo el preocupacional?</summary>
                            <p class="mt-15 fs-09">La ley permite excluir una incapacidad solo si es <strong>preexistente y "acreditada en el examen preocupacional"</strong> (LRT, art. 6). Si el examen no se hizo, no hay acreditación: ese argumento para rechazarte se debilita mucho.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Una lesión preexistente me deja sin indemnización?</summary>
                            <p class="mt-15 fs-09">No automáticamente. La exclusión aplica a la incapacidad preexistente, no a todo lo que te pase. Si el trabajo <strong>agravó</strong> esa lesión, se analiza caso por caso y puede corresponder cobertura. No firmes nada sin asesorarte.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Tengo derecho a una copia de mi preocupacional?</summary>
                            <p class="mt-15 fs-09">Sí. Tenés derecho a ser informado del resultado y a obtener una copia del examen, del empleador o de la ART (Res. SRT 37/2010, art. 7). Pedila siempre y guardala.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si el preocupacional detecta algo pero igual me tomaron?</summary>
                            <p class="mt-15 fs-09">Que la ART pueda excluir ese hallazgo puntual no quiere decir que quedás sin cobertura para todo. Para cualquier otro accidente o enfermedad laboral, seguís cubierto como cualquier trabajador.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te rechazaron por una lesión preexistente?";
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

        <?php
            $FuentesNormativasBlog = 'Ley 24.557 (Riesgos del Trabajo), Resolución SRT 37/2010, Decreto 658/96, Ley 26.281 y Ley 23.592.';
            include __DIR__ . '/../componentes/bloque-autor.php';
        ?>

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
