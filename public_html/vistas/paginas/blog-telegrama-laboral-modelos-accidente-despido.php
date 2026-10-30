<?php
/**
 * VISTA: TELEGRAMA LABORAL CUANDO MANDARLO Y MODELOS PARA ACCIDENTE Y DESPIDO (ARTICULO DE BLOG)
 * ESTRUCTURA CANONICA DE BLOG SEGUN AGENTS.MD
 * CLONA LA ESTRUCTURA DE blog-que-cubre-la-art.php (SIN CSS EMBEBIDO)
 * USA SOLO CLASES DEL CSS DEL SITIO (estilos.css), render_icon(),
 * COMPONENTE cta-whatsapp.php Y COMPONENTE bloque-autor.php
 */

$FuentesNormativasBlog = 'Ley 23.789 (Telegrama Gratuito), Ley 20.744 de Contrato de Trabajo (arts. 10, 80, 240, 242, 243, 245, 246), Ley 24.557 de Riesgos del Trabajo y resoluciones de la SRT.';
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>despidos">Despidos</a> &gt; <span class="txt-amarillo">Telegrama laboral modelo</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">DESPIDOS</span>
                <h1 class="articulo-titulo">Telegrama laboral: cuándo mandarlo y modelos para accidente y despido</h1>

                <p class="articulo-lead">El telegrama laboral es la herramienta legal más importante que tiene un trabajador en Argentina: es 100% gratuito por ley y fija las bases formales de cualquier reclamo posterior ante el empleador o la ART. En esta guía completa te explicamos cuándo corresponde enviarlo, cuándo conviene frenar antes de cometer un error irreparable, y te compartimos modelos prácticos redactados según la Ley de Contrato de Trabajo y la normativa de riesgos del trabajo.</p>

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
                                <li id="preg-1"><a href="#que-es-telegrama" class="active"><span class="nav-num">1</span> ¿Qué es el telegrama obrero?</a></li>
                                <li id="preg-2"><a href="#cuando-mandarlo"><span class="nav-num">2</span> ¿Cuándo corresponde mandarlo?</a></li>
                                <li id="preg-3"><a href="#modelos-accidente"><span class="nav-num">3</span> Modelos para Accidentes y ART</a></li>
                                <li id="preg-4"><a href="#modelos-despido"><span class="nav-num">4</span> Modelos para Despidos y Salarios</a></li>
                                <li id="preg-5"><a href="#como-enviarlo"><span class="nav-num">5</span> Cómo enviarlo en Correo Argentino</a></li>
                                <li id="preg-6"><a href="#errores-fatales"><span class="nav-num">6</span> Errores graves que te perjudican</a></li>
                                <li id="preg-7"><a href="#preguntas-frecuentes"><span class="nav-num">7</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés que mandar un telegrama?";
                    $descripcion = "Revisamos tu caso antes de enviar el telegrama. Evitá errores fatales. Respondemos en el día.";
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
                <div id="que-es-telegrama" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> ¿Qué es el telegrama obrero y por qué es 100% gratuito?</a></h2>
                    
                    <p>El telegrama laboral es una comunicación postal formal regulada por la <strong>Ley 23.789</strong> que garantiza a todo trabajador dependiente y jubilado el derecho a despachar notificaciones legales en forma <strong>totalmente gratuita</strong> a través del Correo Argentino. Su costo está exento de franqueo e impuestos para asegurar el acceso a la justicia y la defensa de derechos.</p>

                    <p>A diferencia de un mensaje de WhatsApp, un correo electrónico o una charla verbal, el telegrama colacionado tiene <strong>plena validez legal probatoria</strong>. En el derecho del trabajo rige la teoría de la recepción: una vez que el telegrama es entregado en el domicilio del destinatario (o devuelto con aviso de visita), la empresa o la ART quedan legalmente notificadas de lo que reclamás.</p>

                    <p>La Ley 23.789 establece que el empleado puede utilizar este medio oficial para cualquier comunicación dirigida a su empleador, a su Aseguradora de Riesgos del Trabajo (ART) o a la Superintendencia de Riesgos del Trabajo (SRT). La empresa que envía una comunicación debe pagar una Carta Documento; vos, como trabajador, <strong>no tenés que pagar un solo peso</strong>.</p>

                    <div class="custom-table-blog mt-20">
                        <div class="tr-blog header">
                            <div>Tipo de comunicación</div>
                            <div>Quién la envía</div>
                            <div>Costo</div>
                            <div>Efecto legal</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Telegrama Laboral (Ley 23.789)</strong></div>
                            <div>Trabajador / Jubilado</div>
                            <div><strong>Gratuito (0 pesos)</strong></div>
                            <div>Fehaciente y vinculante en juicio</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Carta Documento</strong></div>
                            <div>Empleador / Empresa / ART</div>
                            <div>Arancel postal oficial</div>
                            <div>Fehaciente y vinculante en juicio</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>WhatsApp / Email / Verbal</strong></div>
                            <div>Cualquiera de las partes</div>
                            <div>Gratis / Costo corriente</div>
                            <div>Valor probatorio débil o nulo</div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="cuando-mandarlo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Cuándo corresponde mandar un telegrama (y cuándo conviene esperar)?</a></h2>
                    
                    <p>Corresponde mandar un telegrama cuando tus derechos laborales se ven amenazados y necesitás intimar formalmente bajo apercibimiento legal: ante un <strong>despido verbal</strong>, <strong>negativa de tareas</strong>, <strong>sueldos impagos</strong> o cuando la empresa se niega a denunciar tu <strong>accidente de trabajo ante la ART</strong>. No lo mandes por bronca ni sin asesoramiento jurídico previo.</p>

                    <p>El intercambio telegráfico fija el límite de cualquier reclamo o juicio futuro. Lo que no pongas en los telegramas iniciales difícilmente puedas reclamarlo después, y lo que pongas de más puede configurarse como un error procesal que te juegue en contra. Por eso, distinguimos con claridad en qué situaciones debés remitirlo de inmediato:</p>

                    <ul class="lista-items-blog flex-column gap-15 mt-20">
                        <li><strong>Ante negativa de tareas o despido verbal:</strong> En Argentina el despido verbal "no existe". Si llegás al trabajo y te dicen <em>"no vengas más"</em> o no te dejan fichar, tenés que mandar telegrama de inmediato para que aclaren tu situación laboral. Si te quedás en tu casa sin avisar, el empleador puede alegar "abandono de trabajo" (art. 244 LCT).</li>
                        <li><strong>Si la empresa no denuncia tu accidente a la ART:</strong> Cuando tenés un infortunio laboral y tu jefe no hace la denuncia ante la aseguradora, podés intimar al empleador o realizar la denuncia directa ante la ART mediante telegrama laboral gratuito.</li>
                        <li><strong>Ante salarios impagos o diferencias de sueldo:</strong> Si venció el cuarto día hábil del mes y no cobraste tu sueldo o tu licencia médica, podés intimar el pago en 48 horas bajo apercibimiento de retención de tareas.</li>
                        <li><strong>Cuando te despiden con una causa falsa:</strong> Si recibís una carta documento acusándote de faltas falsas para no pagarte la indemnización, debés rechazarla de forma inmediata e impugnar la causa.</li>
                    </ul>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Cuándo NO conviene mandar un telegrama apurado:</span> Si estás enojado por una discusión laboral o una orden de tu superior, <strong>nunca renuncies por telegrama</strong> creyendo que después podés reclamar. El telegrama de renuncia extingue el contrato y te hace perder la indemnización por despido. Siempre asesorate con una abogada laboralista antes de pisar el Correo.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="modelos-accidente" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Modelos de telegrama para Accidentes de Trabajo y ART</a></h2>
                    
                    <p>Si sufriste un accidente de trabajo o in itinere y no recibís atención médica adecuada, la ley te autoriza a efectuar la <strong>denuncia directa ante la ART</strong> o a intimar a tu empleador mediante telegrama laboral Ley 23.789. La ART tiene un plazo de <strong>10 días hábiles</strong> para pronunciarse formalmente aceptando o rechazando el siniestro.</p>

                    <p>En materia de riesgos del trabajo, toda comunicación debe redactarse con rigurosa precisión jurídica según la <strong>Ley 24.557</strong> y las <strong>Resoluciones de la SRT</strong>. Los textos deben presentarse en el formulario de <strong>más de 30 palabras</strong> de Correo Argentino por triplicado:</p>

                    <h3 class="mt-30 fs-11">Modelo 1: Denuncia directa de accidente de trabajo ante la ART</h3>
                    <p class="fs-09">Usalo cuando sufriste un infortunio laboral y la empresa no te entregó la constancia de denuncia a la aseguradora, o cuando necesitás atención médica urgente y la ART no abre el siniestro:</p>

                    <div class="p-25 bg-gris border-radius-15 mt-20 mb-25" style="border-left: 5px solid var(--amarillo);">
                        <div class="pb-10 mb-15 fs-08 fw-700" style="border-bottom: 1px dashed rgba(0,0,0,0.15); text-transform: uppercase; line-height: 1.6;">
                            <div>Formulario Ley 23.789 (Más de 30 palabras)</div>
                            <div>Destinatario: Aseguradora de Riesgos del Trabajo</div>
                        </div>
                        <p class="fs-09 mb-20">Observar pautas legales obligatorias según la Ley 24.557 de Riesgos del Trabajo y Resoluciones de la SRT.</p>
                        <div class="mt-20" style="margin-left: 5%;">
                            <a href="https://wa.me/5491124786144" target="_blank" rel="noopener" class="btn-capsula fs-085 py-15 px-25" style="text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;text-transform:uppercase;">
                                <?= render_icon('whatsapp', 'mr-5') ?> COMUNICATE CON NOSOTROS PARA VER LA REDACCION CORRECTA
                            </a>
                        </div>
                    </div>

                    <h3 class="mt-40 fs-11">Modelo 2: Intimación al empleador por falta de denuncia a la ART</h3>
                    <p class="fs-09">Usalo cuando tu empleador niega que te hayas accidentado o retiene la documentación médica sin dar aviso a su ART contratada:</p>

                    <div class="p-25 bg-gris border-radius-15 mt-20 mb-25" style="border-left: 5px solid var(--amarillo);">
                        <div class="pb-10 mb-15 fs-08 fw-700" style="border-bottom: 1px dashed rgba(0,0,0,0.15); text-transform: uppercase; line-height: 1.6;">
                            <div>Formulario Ley 23.789 (Más de 30 palabras)</div>
                            <div>Destinatario: Empleador / Empresa</div>
                        </div>
                        <p class="fs-09 mb-20">Observar pautas legales obligatorias según la Ley de Contrato de Trabajo (20.744) y Ley 24.557.</p>
                        <div class="mt-20" style="margin-left: 5%;">
                            <a href="https://wa.me/5491124786144" target="_blank" rel="noopener" class="btn-capsula fs-085 py-15 px-25" style="text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;text-transform:uppercase;">
                                <?= render_icon('whatsapp', 'mr-5') ?> COMUNICATE CON NOSOTROS PARA VER LA REDACCION CORRECTA
                            </a>
                        </div>
                    </div>

                    <p class="mt-20 fs-09">Para conocer más sobre cómo actuar si la aseguradora no se hace cargo, revisá nuestra guía sobre <a href="<?= BASE_URL ?>blog/art-rechazo-accidente-laboral" style="color:inherit;text-decoration:none;"><strong>qué hacer si la ART rechaza el accidente laboral</strong></a> o cómo funciona el cobro de la <a href="<?= BASE_URL ?>blog/incapacidad-laboral-temporaria-ilt" style="color:inherit;text-decoration:none;"><strong>Incapacidad Laboral Temporaria (ILT)</strong></a>.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="modelos-despido" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Modelos de telegrama para Despidos, Salarios y Negativa de Tareas</a></h2>
                    
                    <p>Ante una negativa de ingreso a la fábrica o comercio, un despido verbal o falta de pago de haberes, el telegrama laboral es la única vía válida para intimar al empleador por <strong>48 horas</strong> bajo apercibimiento de considerarte en situación de <strong>despido indirecto</strong> con derecho al cobro de todas las indemnizaciones de ley.</p>

                    <p>El intercambio postal en un conflicto laboral debe ajustarse estrictamente a la <strong>Ley de Contrato de Trabajo 20.744</strong> (arts. 10, 80, 240, 242, 243, 245 y 246). A continuación se detallan los requisitos jurídicos exigibles para cada etapa del conflicto:</p>

                    <h3 class="mt-30 fs-11">Modelo 3: Negativa de tareas y aclaración de situación laboral (Despido verbal)</h3>
                    <p class="fs-09">Este es el telegrama que debés enviar de inmediato si fuiste a trabajar y te impidieron el ingreso o te dijeron verbalmente que prescindían de tus servicios:</p>

                    <div class="p-25 bg-gris border-radius-15 mt-20 mb-25" style="border-left: 5px solid var(--amarillo);">
                        <div class="pb-10 mb-15 fs-08 fw-700" style="border-bottom: 1px dashed rgba(0,0,0,0.15); text-transform: uppercase; line-height: 1.6;">
                            <div>Formulario Ley 23.789 (Más de 30 palabras)</div>
                            <div>Destinatario: Empleador / Empresa</div>
                        </div>
                        <p class="fs-09 mb-20">Observar pautas legales obligatorias según la Ley de Contrato de Trabajo (20.744 - arts. 10, 240, 242 y 246).</p>
                        <div class="mt-20" style="margin-left: 5%;">
                            <a href="https://wa.me/5491124786144" target="_blank" rel="noopener" class="btn-capsula fs-085 py-15 px-25" style="text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;text-transform:uppercase;">
                                <?= render_icon('whatsapp', 'mr-5') ?> COMUNICATE CON NOSOTROS PARA VER LA REDACCION CORRECTA
                            </a>
                        </div>
                    </div>

                    <h3 class="mt-40 fs-11">Modelo 4: Rechazo de despido con falsa causa e intimación de liquidación</h3>
                    <p class="fs-09">Si recibiste una carta documento donde la empresa te despide invocando una causa falsa (ej. supuestas ausencias o faltas ficticias) para no pagarte la indemnización:</p>

                    <div class="p-25 bg-gris border-radius-15 mt-20 mb-25" style="border-left: 5px solid var(--amarillo);">
                        <div class="pb-10 mb-15 fs-08 fw-700" style="border-bottom: 1px dashed rgba(0,0,0,0.15); text-transform: uppercase; line-height: 1.6;">
                            <div>Formulario Ley 23.789 (Más de 30 palabras)</div>
                            <div>Destinatario: Empleador / Empresa</div>
                        </div>
                        <p class="fs-09 mb-20">Observar pautas legales obligatorias según la Ley de Contrato de Trabajo (20.744 - arts. 80, 232, 233, 242, 243 y 245).</p>
                        <div class="mt-20" style="margin-left: 5%;">
                            <a href="https://wa.me/5491124786144" target="_blank" rel="noopener" class="btn-capsula fs-085 py-15 px-25" style="text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;text-transform:uppercase;">
                                <?= render_icon('whatsapp', 'mr-5') ?> COMUNICATE CON NOSOTROS PARA VER LA REDACCION CORRECTA
                            </a>
                        </div>
                    </div>

                    <h3 class="mt-40 fs-11">Modelo 5: Despido indirecto ante silencio o rechazo del empleador</h3>
                    <p class="fs-09">Si enviaste la intimación previa (Modelo 3) y pasaron las 48 horas sin respuesta, o respondieron rechazando tu reclamo con términos injuriosos:</p>

                    <div class="p-25 bg-gris border-radius-15 mt-20 mb-25" style="border-left: 5px solid var(--amarillo);">
                        <div class="pb-10 mb-15 fs-08 fw-700" style="border-bottom: 1px dashed rgba(0,0,0,0.15); text-transform: uppercase; line-height: 1.6;">
                            <div>Formulario Ley 23.789 (Más de 30 palabras)</div>
                            <div>Destinatario: Empleador / Empresa</div>
                        </div>
                        <p class="fs-09 mb-20">Observar pautas legales obligatorias según la Ley de Contrato de Trabajo (20.744 - arts. 242, 245 y 246).</p>
                        <div class="mt-20" style="margin-left: 5%;">
                            <a href="https://wa.me/5491124786144" target="_blank" rel="noopener" class="btn-capsula fs-085 py-15 px-25" style="text-decoration:none;display:inline-flex;align-items:center;gap:0.5rem;text-transform:uppercase;">
                                <?= render_icon('whatsapp', 'mr-5') ?> COMUNICATE CON NOSOTROS PARA VER LA REDACCION CORRECTA
                            </a>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2em; line-height: 1;">💡</div>
                        <p class="m-0 fs-09"><strong>¿Te despidieron estando con licencia médica?</strong> En esos casos te corresponden salarios caídos adicionales por el artículo 213 de la LCT además de tu indemnización común. Leé nuestra guía detallada sobre <a href="<?= BASE_URL ?>blog/despido-con-licencia-por-accidente-de-trabajo" style="color:inherit;text-decoration:none;"><strong>qué hacer si te despidieron con licencia por accidente de trabajo</strong></a>.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="como-enviarlo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Cómo completar y enviar el telegrama en Correo Argentino paso a paso</a></h2>
                    
                    <p>Para enviar un telegrama laboral debés concurrir personalmente a cualquier sucursal de <strong>Correo Argentino</strong> con tu <strong>DNI físico original</strong>. El trámite no requiere turno previo ni dinero. Si la comunicación supera las 30 palabras se entrega por <strong>triplicado</strong> impreso en hojas A4 en letra imprenta mayúscula legible.</p>

                    <p>El procedimiento en ventanilla es sumamente sencillo si seguís estos 4 pasos básicos:</p>

                    <div class="pasos-denuncia mt-30">
                        <ul class="lista-items-blog flex-column gap-20">
                            <li>
                                <strong>Paso 1: Descargá o solicitá el formulario correcto.</strong><br>
                                En el Correo Argentino existen dos variantes de formulario Ley 23.789:
                                <ul style="margin-top: 0.5rem; padding-left: 1.2rem;">
                                    <li><em>Formulario de hasta 30 palabras:</em> Únicamente para comunicaciones breves (ej. avisar reposo por enfermedad). Se llena por duplicado.</li>
                                    <li><em>Formulario de más de 30 palabras:</em> Es el que se utiliza para intimaciones, accidentes, negativas de tareas o despidos. <strong>Se presenta por triplicado</strong> (tres copias idénticas).</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Paso 2: Completá los datos en letra imprenta mayúscula.</strong><br>
                                Escribí con birome azul o negra, de manera clara, sin tachaduras, borrones ni enmiendas. Verificá que los datos del destinatario coincidan exactamente con el nombre de la empresa (o ART), su CUIT y el domicilio postal.
                            </li>
                            <li>
                                <strong>Paso 3: Presentate en ventanilla con tu DNI.</strong><br>
                                El empleado postal constatará tu identidad con el DNI físico original, fechará las copias, estampará el sello oficial de Correo Argentino y colocará la oblea de seguimiento (código alfanumérico).
                            </li>
                            <li>
                                <strong>Paso 4: Guardá celosamente la copia sellada y hacé el seguimiento.</strong><br>
                                Te entregarán tu copia firmada y sellada con el número de oblea. Ingresá a la sección <em>"Seguimiento de Envíos"</em> de la web de Correo Argentino para constatar en qué fecha y hora fue entregado. Esa copia sellada es tu <strong>prueba documental de oro</strong> en caso de juicio.
                            </li>
                        </ul>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="errores-fatales" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Errores graves al mandar un telegrama (que te pueden hacer perder el juicio)</a></h2>
                    
                    <p>En el estudio vemos a diario trabajadores que perdieron el derecho a cobrar su indemnización completa por haber enviado telegramas redactados por cuenta propia o mal asesorados. En el derecho laboral, un error en una palabra o en un plazo es irreversible.</p>

                    <div class="custom-table-blog mt-30">
                        <div class="tr-blog header">
                            <div>Error habitual</div>
                            <div>Consecuencia legal perjudicial</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Copiar un modelo genérico de internet sin adaptar</strong></div>
                            <div>Invocás artículos derogados o causales inexistentes que la empresa desbarata fácilmente con su departamento legal.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Mandar telegrama de renuncia bajo presión</strong></div>
                            <div>Si tu empleador te dice <em>"renunciá y te pago algo por afuera"</em> y mandás telegrama de renuncia, perdés legalmente el 100% de la indemnización por despido.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Declararse despedido antes de tiempo</strong></div>
                            <div>Si no intimás previamente por 48 horas y te considerás despedido en el primer telegrama, la justicia puede considerar el despido indirecto como apresurado e injustificado.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Errar la razón social o CUIT del destinatario</strong></div>
                            <div>Si ponés el nombre de fantasía de la tienda o un domicilio desactualizado, el telegrama nunca llega a destino y no surte ningún efecto legal.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>No guardar la copia con el sello del correo</strong></div>
                            <div>Sin el talón sellado con fecha cierta y código de seguimiento, no tenés forma de probar ante el juez o la SRT que intimaste en tiempo y forma.</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><strong>Regla de oro:</strong> Los modelos anteriores son exclusivamente ilustrativos y formativos. Antes de despachar cualquier telegrama laboral, consultá de inmediato con una abogada especialista para que redacte el texto exacto acorde a los hechos particulares de tu relación laboral.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Preguntas frecuentes sobre el telegrama laboral</a></h2>
                    
                    <p>Respondemos las dudas más comunes que nos transmiten los trabajadores antes de despachar una intimación postal:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿El telegrama laboral es realmente gratis en Argentina?</summary>
                            <p class="mt-15 fs-09">Sí, es <strong>100% gratuito</strong> en cualquier oficina de Correo Argentino en todo el territorio nacional, en virtud de la <strong>Ley Nacional 23.789</strong>. No tenés que abonar franqueo ni formularios.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo tiene la empresa o la ART para responder un telegrama?</summary>
                            <p class="mt-15 fs-09">Por lo general, en materia de despidos y reclamos laborales se otorga un plazo de <strong>48 horas hábiles</strong> a contar desde la recepción del telegrama. En el caso de la ART para expedirse sobre la aceptación o rechazo de un accidente laboral, cuenta con un plazo legal de <strong>10 días hábiles</strong> prorrogables por otros 10 si media notificación fundada.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la empresa se niega a recibir el telegrama en su puerta?</summary>
                            <p class="mt-15 fs-09">Si el cartero llega al domicilio correcto y el empleador se niega a recibirlo ("rechazado") o no atiende ("plazo vencido no reclamado"), la ley laboral presume que la notificación fue válidamente efectuada. La mala fe patronal no perjudica al trabajador.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo mandar un telegrama si trabajaba en negro o sin registrar?</summary>
                            <p class="mt-15 fs-09">Sí, podés mandarlo exactamente igual y de forma 100% gratuita. La Ley 23.789 ampara a cualquier trabajador dependiente, esté o no debidamente registrado en los libros de la empresa.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo mandar el telegrama por internet desde la computadora?</summary>
                            <p class="mt-15 fs-09">No. El telegrama obrero Ley 23.789 exige la comparecencia física del trabajador ante el funcionario de ventanilla de Correo Argentino con DNI original para certificar su firma e identidad. No se despacha de forma digital sin validación postal presencial.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué diferencia hay entre telegrama colacionado y carta documento?</summary>
                            <p class="mt-15 fs-09">Tienen la misma validez legal. La diferencia es que la <strong>Carta Documento es paga</strong> (usada habitualmente por las empresas y empleadores), mientras que el <strong>Telegrama Laboral es gratuito</strong> para el trabajador bajo el amparo de la Ley 23.789.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Tenés que redactar un telegrama laboral?";
                            $descripcion = "No arriesgues tu indemnización. Consultá gratis con una abogada laboralista del estudio antes de ir al correo.";
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
