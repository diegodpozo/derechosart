<?php
/**
 * VISTA: DESPIDO EN NEGRO (ARTICULO DE BLOG)
 * PORTADO desde maqueta-despidos-en-negro.html (SIN CSS EMBEBIDO).
 * Usa SOLO clases del CSS del sitio (estilos.css), render_icon(),
 * el componente cta-whatsapp.php y el componente bloque-autor.php.
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Despido en negro</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Despido en negro: qué indemnización te corresponde y cómo reclamar</h1>

                <p class="articulo-lead">Si te despidieron y no estabas registrado, seguís teniendo derechos: la relación laboral existió y la ley te protege igual. Te explicamos qué podés reclamar por un despido en negro, cómo probar que trabajabas y por dónde empezar sin miedo ni vueltas.</p>

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
                        <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
                        <nav class="sidebar-nav">
                            <ul>
                                <li id="preg-1"><a href="#despido-en-negro" class="active"><span class="nav-num">1</span> Despido en negro: no perdés tus derechos</a></li>
                                <li id="preg-2"><a href="#que-te-corresponde"><span class="nav-num">2</span> Qué podés reclamar</a></li>
                                <li id="preg-3"><a href="#las-multas"><span class="nav-num">3</span> Las multas por trabajo en negro hoy</a></li>
                                <li id="preg-4"><a href="#telegrama-laboral"><span class="nav-num">4</span> El telegrama laboral gratuito</a></li>
                                <li id="preg-5"><a href="#despido-discriminatorio"><span class="nav-num">5</span> Si te despidieron por reclamar</a></li>
                                <li id="preg-6"><a href="#el-juicio"><span class="nav-num">6</span> Cómo probar el vínculo y el juicio</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Te despidieron en negro?";
                    $descripcion = "Consultá gratis con una abogada especializada en despidos. Respondemos en el día.";
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
                <div id="despido-en-negro" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Despido en negro: no perdés tus derechos</a></h2>
                    <p>Trabajar "en negro" (sin registración, con un alta tardía o con una parte del sueldo fuera de los registros) <strong>no te quita tus derechos laborales</strong>. Si te despidieron y nunca te registraron, la relación igual existió: la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley de Contrato de Trabajo (20.744)</a> se basa en la <strong>primacía de la realidad</strong>: lo que importa es lo que viviste, no el papel que faltó.</p>
                    <p>Lo primero que tenés que saber: <strong>el incumplimiento del empleador (no haberte registrado) no puede usarse en tu contra</strong>. La ley presume que toda prestación de servicios es una relación de trabajo y, ante el silencio o la falta de registración, las dudas se resuelven a tu favor (<a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">arts. 21, 23 y 45 de la LCT</a>).</p>

                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <?= render_icon('file-lines', 'icono-grande') ?>
                            <span>No importa que no haya recibo ni alta: la relación laboral existió</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('circle-check', 'icono-grande') ?>
                            <span>La ley presume que hubo contrato de trabajo (art. 23 LCT)</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('bookmark-solid', 'icono-grande') ?>
                            <span>Podés reclamar las indemnizaciones igual que un trabajador registrado</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('circle-xmark-solid-full', 'icono-grande') ?>
                            <span>Tu reclamo no puede usarse en tu contra</span>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo importante:</span> el hecho de que no te hayan blanqueado no sirve como excusa para pagarte menos ni para despedirte sin indemnización. Si te dijeron "estabas en negro, no te corresponde nada", te están mintiendo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="que-te-corresponde" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué podés reclamar si te despidieron en negro</a></h2>
                    <p>Cuando te despiden sin causa trabajando en negro, te corresponden <strong>los mismos rubros que a un trabajador registrado</strong>, calculados sobre tu salario real. Estos son los principales:</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Rubro</div>
                            <div>En qué se traduce</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Indemnización por antigüedad</strong></div>
                            <div>Un mes de sueldo por cada año trabajado o fracción mayor de tres meses, según el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 245 de la LCT</a>. Si no estás registrado, se calcula sobre el salario que realmente cobrabas.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Preaviso</strong></div>
                            <div>La indemnización sustitutiva del <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">preaviso (art. 231/232 LCT)</a>: te corresponden, además, los días de preaviso que no respetaron.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Integración del mes de despido</strong></div>
                            <div>Los días del mes que corren hasta la fecha en que te tendrían que haber pagado si hubieran respetado el preaviso (<a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 233 LCT</a>).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>SAC proporcional</strong></div>
                            <div>El aguinaldo proporcional por el tiempo trabajado hasta la fecha del despido (<a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 155/156 LCT</a>).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Vacaciones no gozadas</strong></div>
                            <div>Los días de vacaciones que nunca tomaste, proporcionales al período trabajado, con su pago (<a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">arts. 150 y ss. LCT</a>).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Salarios adeudados y horas extra</strong></div>
                            <div>Si te deben sueldos, aguinaldos u horas suplementarias no pagadas, también se reclaman en el mismo juicio.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">💰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">La clave:</span> al estar en negro, tu base de cálculo es el <strong>salario real que cobrabas</strong>, no uno ficticio. Cuanto cobrabas, las horas que hacías y desde cuándo entraste son los tres datos que más valor le agregan a tu reclamo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="las-multas" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Las multas por trabajo en negro: cómo quedó el panorama</a></h2>
                    <p>Aclarar esto es importante porque la información que circula quedó vieja. Antes existían sanciones automáticas contra el empleador que no te registraba (las clásicas multas de las <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">leyes 24.013 y 25.323</a>). Con la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/430000-434999/433006/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley 27.742 (Ley de Bases, 2024)</a> esas multas fueron <strong>derogadas</strong>, y hoy la jurisprudencia está dividida sobre qué pasa con los reclamos anteriores a esa reforma.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog-3cols header">
                            <div>Situación</div>
                            <div>Qué se puede reclamar</div>
                            <div>Ojo con esto</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Te despidieron y estabas en negro</div>
                            <div><strong>Todas las indemnizaciones</strong> por despido, calculadas con tu sueldo real</div>
                            <div>No depende de la reforma: te corresponde siempre</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Reclamos por multas por no registración</div>
                            <div>Depende de la <strong>fecha del despido y de la provincia</strong></div>
                            <div>Hay fallos a favor y en contra desde 2024; se analiza por caso</div>
                        </div>
                        <div class="tr-blog-3cols">
                            <div>Despido con móvil discriminatorio</div>
                            <div><strong>Indemnización agravada</strong> (hasta el 100% extra)</div>
                            <div>Vigente desde la reforma: art. 245 bis LCT</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Consejo:</span> si leíste en otro lado "te pagás el doble por estar en negro", desconfiá. Esas multas cambiaron a partir de 2024. Lo que sí es sólido son las indemnizaciones por despido y, en los casos que corresponda, el agravamiento por despido discriminatorio. Cada caso se evalúa con las fechas exactas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="telegrama-laboral" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> El telegrama laboral gratuito: tu primer paso formal</a></h2>
                    <p>Si te despidieron trabajando en negro, el <strong>telegrama laboral gratuito</strong> es tu mejor herramienta. La <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/50000-54999/50414/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley 23.789</a> te permite mandar telegramas laborales <strong>sin pagar nada</strong> del servicio postal, con efecto de notificación fehaciente. Con un telegrama bien redactado podés:</p>

                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <?= render_icon('envelope', 'icono-grande') ?>
                            <span>Dejás constancia oficial del despido y del vínculo laboral</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('file-lines', 'icono-grande') ?>
                            <span>Intimás la correcta registración de tu relación laboral</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('file-invoice-dollar-solid-full', 'icono-grande') ?>
                            <span>Dejás asentada la antigüedad y el salario que realmente cobrabas</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('shield-halved', 'icono-grande') ?>
                            <span>Si te despiden por reclamar, quedás protegido contra el despido represalia</span>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">😐</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Ojo con esto:</span> no intimes datos falsos. La fecha de ingreso, el salario y la jornada que pongas en el telegrama quedan como tu declaración; si no coinciden con la realidad, pueden jugarte en contra. Por eso te conviene revisar el borrador con una abogada laboralista antes de mandarlo.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Dato clave:</span> el telegrama laboral gratuito es para contenido exclusivamente laboral y con un límite de extensión. Si tenés dudas sobre cómo redactarlo, una abogada laboralista te lo arma sin costo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="despido-discriminatorio" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Si te despidieron por reclamar: despido discriminatorio</a></h2>
                    <p>¿Te echaron justo después de reclamar la registración, una licencia, horas extra o un cambio de categoría? Ese despido puede ser un <strong>despido represalia o discriminatorio</strong>, y la ley lo castiga con una indemnización agravada.</p>
                    <p>El <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/60000-64999/60451/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">art. 245 bis de la LCT</a> (incorporado por la Ley de Bases) prevé que, cuando el despido responde a un motivo discriminatorio, corresponde un <strong>agravamiento de entre el 50% y el 100%</strong> de la indemnización por antigüedad, según la gravedad que acredite el caso.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Señal de alerta</div>
                            <div>Qué puede significar</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Te despidieron días después de reclamar</strong></div>
                            <div>La cercanía entre tu reclamo y el despido es un indicio fuerte de represalia.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Te echaron por estar embarazada / en situación protegida</strong></div>
                            <div>En esos casos las protecciones se suman: la ley presume el despido como represalia y agrava las indemnizaciones.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Ya venías reclamando el trabajo en negro</strong></div>
                            <div>Intimar la registración es un derecho; despedirte por eso convierte el despido en discriminatorio.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Qué hacer:</span> si pensás que el despido fue una represalia, contalo por escrito apenas puedas y archivá los mensajes o grabaciones donde te digan el motivo real. La prueba del móvil discriminatorio es el corazón de este reclamo, y cuanto antes se empieza a juntar, mejor.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="el-juicio" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Cómo probar el vínculo y cómo es el juicio</a></h2>
                    <p>La gran diferencia entre un despido registrado y uno en negro no es el derecho: es la <strong>prueba</strong>. No hay recibo ni alta en la AFIP que muestren tu historial, así que el vínculo se acredita con todo lo demás:</p>

                    <div class="grid-iconos-blog mt-20">
                        <div class="item-ejemplo">
                            <?= render_icon('comments', 'icono-grande') ?>
                            <span>Mensajes de WhatsApp y correos con tu empleador y compañeros</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('user-group-solid-full', 'icono-grande') ?>
                            <span>Testigos: compañeros que vieron que trabajabas ahí</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('camera', 'icono-grande') ?>
                            <span>Fotos en el lugar de trabajo, uniforme y elementos que usabas</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('dollar-sign-solid', 'icono-grande') ?>
                            <span>Transferencias, comprobantes de pagos y móviles de tu sueldo</span>
                        </div>
                    </div>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-15">
                            <li>
                                <strong>1. Intimá con el telegrama laboral gratuito</strong> y dejá constancia de la registración, del despido y de los rubros que te deben.
                            </li>
                            <li>
                                <strong>2. Juntá toda la prueba del vínculo</strong> antes de iniciar: mensajes, fotos, testigos, transferencias, uniforme, credenciales. Cuando peor registrado estás, más pesan estas pruebas.
                            </li>
                            <li>
                                <strong>3. Instancia previa obligatoria (SECLO)</strong> en CABA y varias provincias: es la audiencia de conciliación administrativa que antecede al juicio.
                            </li>
                            <li>
                                <strong>4. Si no hay acuerdo, se inicia el juicio laboral</strong> reclamando todos los rubros junto: indemnizaciones, preaviso, integración, vacaciones, SAC y los agravamientos de cada caso.
                            </li>
                        </ul>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏰</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">No dejes pasar el tiempo:</span> los reclamos por despido prescriben en <strong>dos años</strong> desde la extinción del contrato (art. 256 LCT). Dos años parece mucho, pero pasa rápido y cada mes que esperás, tu reclamo y tu prueba se debilitan. Ante la duda, consultá ya.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes</a></h2>
                    <p>Las consultas que más recibimos en el estudio sobre despidos trabajando en negro:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si no tengo ningún recibo de sueldo?</summary>
                            <p class="mt-15 fs-09">Sí. Que no tengas recibos es justamente la prueba del trabajo en negro, no un obstáculo. El reclamo se arma con otras pruebas: mensajes, fotos, testigos, transferencias y todo lo que demuestre que trabajabas ahí.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si me depositaron parte del sueldo por fuera?</summary>
                            <p class="mt-15 fs-09">Se llama "gris" y también suma. Lo registrado y lo no registrado se consideran tu salario real para calcular las indemnizaciones. Las transferencias o pagos en mano que te hacían por fuera son la prueba de tu sueldo verdadero.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tardo en cobrar un juicio por despido en negro?</summary>
                            <p class="mt-15 fs-09">Depende de cada caso: si hay hecho la instancia de conciliación (SECLO) o no, si el empleador quiere arreglar y de la jurisdicción. Lo importante es empezar: cada día que pasa después del despido te acerca al plazo de prescripción de dos años.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Todavía existen las multas por trabajo en negro del 25% o el doble?</summary>
                            <p class="mt-15 fs-09">No como eran antes. Desde la <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/430000-434999/433006/norma.htm" style="color:inherit;text-decoration:none;" target="_blank" rel="noopener">Ley 27.742 (2024)</a>, las multas típicas por no registración fueron derogadas y la jurisprudencia quedó dividida. Lo que siempre te corresponde son las indemnizaciones por despido; los agravamientos se evalúan según la fecha y el caso.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si yo no quería que me registren?</summary>
                            <p class="mt-15 fs-09">Sí. Aunque haya sido "de palabra" o estés de acuerdo, la registración es una obligación del empleador y los derechos laborales son irrenunciables: no podés renunciar a tu indemnización ni a tu antigüedad, ni siquiera por acuerdo.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Te despidieron trabajando en negro?";
                            $descripcion = "Consultá gratis con una abogada laboralista especializada en despidos. Te decimos qué te corresponde, sin cargo y sin compromiso.";
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
            $FuentesNormativasBlog = 'Ley 20.744 (Contrato de Trabajo), Ley 27.742 (Ley de Bases), Ley 23.789 (telegrama laboral) y Ley 23.592 (discriminación).';
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