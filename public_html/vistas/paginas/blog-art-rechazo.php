<?php
/**
 * VISTA: LA ART RECHAZO MI ACCIDENTE LABORAL (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <p class="tl-dr">La ART rechazó tu accidente laboral: qué hacer, plazos para apelar, opciones legales y cómo un abogado puede ayudarte a obtener la indemnización que te corresponde.</p>
    <div class="contenedor grid-blog">

        <!-- CABECERA -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>accidentes-de-trabajo">Accidentes Laborales</a> &gt; <span class="txt-amarillo">Rechazo ART</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">RECHAZO ART</span>
                <h1 class="articulo-titulo">La ART rechazó mi accidente laboral: qué hacer paso a paso</h1>

                <p class="articulo-lead">Recibiste una carta documento o un llamado diciéndote que la ART no reconoce tu accidente. Es el momento más angustiante del proceso — y también el momento donde más gente comete errores que les cuestan la indemnización. Acá te explicamos exactamente qué pasa, qué podés hacer y por qué el caso todavía no está perdido. <span class="subrayado-amarillo">Sin palabras difíciles.</span></p>

                <div class="grid-caracteristicas-articulo mt-40">
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('scale-balanced') ?></div>
                        <div class="char-texto">
                            <strong>IMPUGNACION</strong>
                            <span>del rechazo ART</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('calendar-day-solid') ?></div>
                        <div class="char-texto">
                            <strong>PLAZOS</strong>
                            <span>legales clave</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('folder-open') ?></div>
                        <div class="char-texto">
                            <strong>DOCUMENTACION</strong>
                            <span>que marca la diferencia</span>
                        </div>
                    </div>
                    <div class="char-item">
                        <div class="char-icon"><?= render_icon('handshake-regular') ?></div>
                        <div class="char-texto">
                            <strong>ASESORAMIENTO</strong>
                            <span>especializado</span>
                        </div>
                    </div>
                </div>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: Junio 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 9 min</span>
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
                            <li id="preg-1"><a href="#por-que-rechaza" class="active"><span class="nav-num">1</span> Por qué la ART rechaza accidentes</a></li>
                            <li id="preg-2"><a href="#plazo-art"><span class="nav-num">2</span> Plazo de la ART para rechazar</a></li>
                            <li id="preg-3"><a href="#pasos-rechazo"><span class="nav-num">3</span> Qué hacer paso a paso</a></li>
                            <li id="preg-4"><a href="#documentacion-clave"><span class="nav-num">4</span> Documentación que marca la diferencia</a></li>
                            <li id="preg-5"><a href="#accidente-itinere-rechazo"><span class="nav-num">5</span> Accidente in itinere: ¿es diferente?</a></li>
                            <li id="preg-6"><a href="#plazos-reclamo"><span class="nav-num">6</span> Plazos para reclamar</a></li>
                            <li id="preg-7"><a href="#necesito-abogado"><span class="nav-num">7</span> ¿Necesito un abogado?</a></li>
                            <li id="preg-8"><a href="#preguntas-frecuentes-rechazo"><span class="nav-num">8</span> Preguntas frecuentes</a></li>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Te rechazaron?";
                    $descripcion = "Analizamos tu caso sin costo, te defendemos ante la ART";
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
                <div id="por-que-rechaza" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Por qué la ART rechaza accidentes laborales: los argumentos más usados</a></h2>
                    <p>Las ART son empresas privadas. Cada caso que rechazan es un caso que no pagan. Por eso, sus equipos técnicos y legales están entrenados para encontrar argumentos que justifiquen el rechazo. Conocer cuáles son esos argumentos es el primer paso para entender en qué terreno estás parado.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">🚨</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo primero que tenés que saber:</span> El rechazo de la ART no es una resolución judicial ni administrativa definitiva. Es la posición inicial de una empresa privada que tiene interés económico en pagar lo menos posible. Podés impugnarlo, y hay una vía legal específica para hacerlo.</p>
                    </div>

                    <h4 class="mt-40 mb-20" style="font-size: 2.6em;">📋 Argumentos típicos de la ART:</h4>
                    <div class="custom-table-blog">
                        <div class="tr-blog header">
                            <div>Argumento de la ART</div>
                            <div>Qué significa en la práctica</div>
                        </div>
                        <div class="tr-blog">
                            <div>No ocurrió en ocasión del trabajo</div>
                            <div>Alegan que el accidente no pasó mientras trabajabas ni en horario laboral</div>
                        </div>
                        <div class="tr-blog">
                            <div>No existe nexo causal</div>
                            <div>Dicen que la lesión no fue consecuencia directa del accidente denunciado</div>
                        </div>
                        <div class="tr-blog">
                            <div>Lesión preexistente</div>
                            <div>Alegan que la lesión existía antes del accidente y no fue generada por el trabajo</div>
                        </div>
                        <div class="tr-blog">
                            <div>Enfermedad profesional no listada</div>
                            <div>Para enfermedades profesionales, alegan que no figura en el listado oficial</div>
                        </div>
                        <div class="tr-blog">
                            <div>Trayecto alterado (in itinere)</div>
                            <div>Dicen que te desviaste del recorrido habitual entre tu domicilio y el trabajo</div>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">El argumento del "nexo causal" es el más común y el más cuestionable.</span> Si te atendieron en la guardia del prestador de la propia ART, ya hay reconocimiento implícito de la contingencia. Ese dato puede ser clave para impugnar el rechazo posterior.</p>
                    </div>

                    <!-- INSTAGRAM EMBED -->
                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'icono-chico mr-10') ?> <span class="subrayado-amarillo">ENTERATE EN NUESTRO IG</span> — ¿Qué hacer si la ART te rechaza?</h4>
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DUUFifNjfxh/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="margin: 0 auto; width: 100%;"></blockquote>
                            </div>
                        </div>
                        <p class="mt-20 fs-09 txt-gris-medio italic">En este posteo explicamos qué significa realmente un rechazo de la ART y por qué no tenés que quedarte paralizado. La mayoría de los casos pueden revertirse si actuás rápido y con la documentación correcta.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="plazo-art" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> ¿Cuánto tiempo tiene la ART para rechazar? El plazo que muchos no conocen</a></h2>
                    <p>La Ley 24.557 establece un plazo muy preciso: la ART tiene <strong>10 días hábiles</strong> desde la recepción de la denuncia para comunicarte si acepta o rechaza la cobertura, prorrogables por 10 días hábiles más, previa notificación fehaciente al trabajador. Si no te responde en ese período, la ley interpreta ese silencio como <strong>aceptación tácita</strong> del accidente.</p>

                    <p>Esto importa por dos razones concretas. Si ya pasaron más de 10 días hábiles y la ART recién ahora intenta rechazarte —sin haberte notificado la prórroga— ese rechazo tardío puede ser cuestionado formalmente. Y si te rechazaron dentro del plazo, sabés que tenés que actuar cuanto antes, porque los plazos para vos también corren.</p>

                    <div class="tabla-plazos mt-30">
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Concepto</div>
                                <div>Detalle</div>
                            </div>
                            <div class="tr-blog">
                                <div>Plazo ART para rechazar</div>
                                <div>10 días hábiles</div>
                            </div>
                            <div class="tr-blog">
                                <div>Prórroga posible</div>
                                <div>10 días hábiles más (con notificación)</div>
                            </div>
                            <div class="tr-blog">
                                <div>Silencio de la ART</div>
                                <div>Aceptación tácita del accidente</div>
                            </div>
                            <div class="tr-blog">
                                <div>Prescripción del reclamo</div>
                                <div>2 años (art. 44 Ley 24.557)</div>
                            </div>
                        </div>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="pasos-rechazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Qué hacer paso a paso cuando la ART rechaza tu accidente</a></h2>
                    <p>El sistema legal argentino tiene una vía específica para este caso. No tenés que resignarte ni ir directamente a juicio. El camino correcto es este:</p>

                    <div class="pasos-denuncia mt-30">
                        <ol class="lista-items-blog lista-numerada">
                            <li><strong>Exigí el rechazo por escrito con fundamentos:</strong> Si te lo comunicaron por teléfono, pedí que te lo confirmen por carta documento. Necesitás el rechazo formal escrito con los argumentos que usa la ART. Sin eso, no hay nada concreto que impugnar.</li>
                            <li><strong>Reuní toda la documentación médica disponible:</strong> Juntá la constancia de denuncia del accidente, todos los estudios por imágenes (radiografías, resonancias), los informes de los médicos que te atendieron, recetas y certificados.</li>
                            <li><strong>Identificá testigos del accidente y anotá sus datos ahora:</strong> Si hubo compañeros que vieron lo que pasó, anotá sus datos de contacto esta semana. Con el tiempo la gente cambia de trabajo, pierde contacto o no recuerda bien los detalles.</li>
                            <li><strong>Iniciá el trámite ante la Comisión Médica Jurisdiccional:</strong> Ante un rechazo de la ART, la ley prevé que el trabajador inicie el trámite de Rechazo de la Contingencia ante la Comisión Médica que corresponde a tu domicilio o lugar de trabajo, con el patrocinio letrado obligatorio.</li>
                            <li><strong>Si la Comisión Médica confirma el rechazo, vas a la justicia laboral:</strong> Un juez puede ordenar una pericia médica independiente y revisar todo de nuevo sin estar atado al resultado de la Comisión. Esta es la instancia donde muchos casos terminan resolviéndose a favor del trabajador.</li>
                        </ol>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El error más caro que podés cometer:</span> Recibís el rechazo, te quedás paralizado pensando que perdiste, y esperás semanas o meses sin hacer nada. Mientras tanto, se complica conseguir testigos, los estudios médicos se vuelven menos recientes y la ART consolida su posición. El rechazo no paraliza tus derechos — pero vos sí podés paralizarte sin querer.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="documentacion-clave" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> La documentación que puede hacer la diferencia en tu reclamo</a></h2>
                    <p>La Comisión Médica y, eventualmente, el juez van a basar su decisión en prueba concreta. Tu palabra contra la de la ART no alcanza. Esto es lo que más pesa:</p>

                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><?= render_icon('file-lines', 'mr-10') ?> <strong>Constancia de la denuncia original</strong> — el número de siniestro. Si la ART te atendió aunque sea una vez, eso ya documenta la existencia del hecho.</li>
                        <li><span style="font-size:1.3em;">🏥</span> <strong>Historia clínica de la primera atención</strong> — lo que el médico registró en la guardia. Es la prueba más cercana al hecho en el tiempo.</li>
                        <li><?= render_icon('stethoscope-solid', 'mr-10') ?> <strong>Estudios por imágenes</strong> — radiografías, resonancias, ecografías con su fecha.</li>
                        <li><?= render_icon('user-check', 'mr-10') ?> <strong>Datos de testigos</strong> — nombre completo, DNI y teléfono de quienes vieron el accidente.</li>
                        <li><?= render_icon('comments', 'mr-10') ?> <strong>Comunicaciones con la ART</strong> — mensajes, mails, llamadas grabadas, WhatsApp.</li>
                        <li><?= render_icon('envelope', 'mr-10') ?> <strong>Carta documento de rechazo</strong> — el documento formal. Es el punto de partida de todo el reclamo.</li>
                    </ul>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📂</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Hacé copias digitales de todo:</span> fotografiá cada documento con el celular antes de entregarlo. Una carpeta en Google Drive puede salvarte si el original se pierde.</p>
                    </div>

                    <!-- BLOQUE DE ENLACE AL ARTICULO ANTERIOR -->
                    <div class="mt-40 p-25 bg-gris border-radius-15">
                        <h4 class="mb-15"><?= render_icon('file-lines', 'mr-10') ?> Artículo relacionado</h4>
                        <p class="m-0 fs-09">Si todavía no leíste nuestra <a href="<?= BASE_URL ?>blog/accidente-laboral-guia-2026" style="color:inherit;text-decoration:none;"><strong><span class="subrayado-amarillo">Guía completa de qué hacer tras un accidente laboral</span></strong></a>, te recomendamos empezar por ahí. Cubre desde la denuncia inicial hasta el reclamo de indemnización.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="accidente-itinere-rechazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Me rechazaron un accidente in itinere: ¿es diferente el trámite?</a></h2>
                    <p>Los accidentes in itinere son los que ocurren en el trayecto entre tu domicilio y el lugar de trabajo, o de regreso. Están cubiertos por la ART bajo la Ley 24.557, pero con un requisito específico: el trayecto tiene que ser el habitual y no puede haber sufrido alteraciones por razones ajenas al trabajo.</p>

                    <p>Cuando la ART rechaza un accidente in itinere, el argumento más frecuente es que el trabajador "alteró el trayecto habitual": que venías de otro lugar, que te detuviste por razones personales justo antes del accidente, o que tomaste una ruta diferente a la declarada.</p>

                    <h4 class="mt-40 mb-20" style="font-size: 2.6em;">🔍 Qué prueba sirve en estos casos</h4>
                    <ul class="lista-items-blog">
                        <li><span style="font-size: 1.3em;">📍</span> La geolocalización del celular puede mostrar por dónde circulabas</li>
                        <li><span style="font-size: 1.3em;">🚌</span> Los registros de la SUBE demuestran el recorrido en transporte público</li>
                        <li><span style="font-size: 1.3em;">📹</span> Las cámaras de tránsito municipales pueden haber captado el accidente</li>
                        <li><span style="font-size: 1.3em;">👥</span> Testigos que confirmen que ibas camino al trabajo también suman</li>
                    </ul>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Un desvío menor no siempre invalida la cobertura:</span> La jurisprudencia laboral argentina no es rígida en cuanto a desvíos mínimos del trayecto. Una parada breve en un kiosco o farmacia de camino al trabajo no necesariamente "altera el trayecto" en el sentido legal. Eso lo evalúa un juez, no la ART.</p>
                    </div>

                    <p class="mt-30">El trámite de impugnación es exactamente el mismo que para cualquier otro rechazo: Comisión Médica primero, justicia laboral si eso falla.</p>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="plazos-reclamo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> ¿Cuánto tiempo tenés para reclamar después del rechazo?</a></h2>
                    <p>El artículo 44 de la Ley 24.557 establece que las acciones derivadas de esta ley prescriben a los <strong>dos años</strong> desde que el derecho pudo ser exigido. En términos prácticos, ese plazo empieza a correr desde la fecha del accidente o desde que te notificaron el rechazo.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⏱️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">La regla práctica es simple:</span> cuanto antes actuás, mejor posición tenés. El plazo de dos años es el máximo legal, no el ideal.</p>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="necesito-abogado" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> ¿Necesito un abogado para impugnar el rechazo de la ART?</a></h2>
                    <p>Sí, es necesario contar con patrocinio letrado para iniciar el trámite ante la Comisión Médica. La ley exige la representación de un abogado para el trámite de Rechazo de la Contingencia.</p>

                    <p>Más allá de lo legal, hay una razón práctica: la ART siempre llega a la Comisión Médica con su equipo de abogados y médicos especializados en reducir o eliminar el reconocimiento del accidente. Vos llegás sin conocer los formularios, los plazos, los argumentos técnicos ni la manera correcta de presentar la documentación.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚖️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">La asimetría es real:</span> en los casos de rechazo —que ya empiezan con la ART en posición abiertamente adversarial— tener representación letrada especializada marca una diferencia clave en el resultado de tu caso.</p>
                    </div>

                    <!-- CTA WHATSAPP -->
                    <?php
                        $titulo = "Analizamos tu caso sin costo";
                        $descripcion = "Si la ART rechazó tu accidente y no sabés cómo seguir, contanos qué pasó. Sin compromiso y sin costo. Solo cobramos si vos cobrás.";
                        $ancho = "35";
                        $margen_top = "2.5";
                        include __DIR__ . '/../componentes/cta-whatsapp.php';
                    ?>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="preguntas-frecuentes-rechazo" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Preguntas frecuentes sobre el rechazo de la ART</a></h2>
                    <p>Respondemos las dudas más comunes sobre el rechazo de la ART. Cada respuesta es completa en sí misma para que no tengas que buscar en otras secciones.</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Si la ART rechazó mi accidente laboral, puedo igual reclamar?</summary>
                            <p class="mt-15 fs-09">Sí. El rechazo de la ART no es una resolución definitiva ni cierra tus derechos. Podés impugnar ese rechazo iniciando el trámite de Determinación de la Incapacidad ante la Comisión Médica Jurisdiccional que corresponde a tu domicilio o lugar de trabajo. Si la Comisión confirma que el accidente existió y generó incapacidad, la ART queda obligada a dar cobertura y pagar la indemnización correspondiente.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿La ART tiene plazo para rechazar un accidente laboral?</summary>
                            <p class="mt-15 fs-09">Sí. La Ley 24.557 establece que la ART tiene 10 días hábiles desde que recibe la denuncia para rechazar o aceptar la cobertura. Si no responde en ese plazo, el silencio se interpreta como aceptación tácita del accidente. Un rechazo emitido fuera de ese plazo puede cuestionarse legalmente.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo tengo para impugnar el rechazo de la ART?</summary>
                            <p class="mt-15 fs-09">El plazo de prescripción es de 2 años contados desde la fecha del accidente o desde que el derecho pudo ser exigido, conforme al artículo 44 de la Ley 24.557. Sin embargo, actuar lo antes posible es siempre más conveniente: mientras más tiempo pasa, más difícil resulta reunir pruebas y testigos.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué argumentos usa la ART para rechazar un accidente laboral?</summary>
                            <p class="mt-15 fs-09">Los argumentos más comunes son: que el accidente no ocurrió en ocasión del trabajo, que no existe nexo causal entre el hecho y la lesión, que la lesión era preexistente, que la enfermedad profesional no figura en el listado oficial, o que el trabajador alteró el trayecto habitual (casos in itinere).</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si me rechazaron un accidente camino al trabajo o de regreso?</summary>
                            <p class="mt-15 fs-09">Los accidentes in itinere —los que ocurren entre el domicilio y el trabajo, o viceversa— también están cubiertos por la ART bajo la Ley 24.557. Si te rechazaron alegando que alteraste el trayecto habitual, ese rechazo puede impugnarse ante la Comisión Médica igual que cualquier otro rechazo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Necesito un abogado para impugnar el rechazo de la ART?</summary>
                            <p class="mt-15 fs-09">Sí, es obligatorio contar con patrocinio letrado para iniciar el trámite ante la Comisión Médica por rechazo de la contingencia. La ART siempre llega con su equipo de abogados y médicos especializados. La representación letrada especializada implica la exposición de argumentos técnicos legales y la presentación de documentación que pueden definir el resultado de tu caso.</p>
                        </details>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

            </section>

        </article>

    </div>
</main>

<!-- SCRIPT PARA INSTAGRAM EMBED -->
<script async src="//www.instagram.com/embed.js"></script>

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
