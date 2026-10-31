<?php
/**
 * VISTA: EXAMEN EN LA COMISION MEDICA SRT - QUE TE PREGUNTAN Y COMO PREPARARTE
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA DEL ARTICULO -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>blog">Blog</a> &gt; <a href="<?= BASE_URL ?>comisiones-medicas">Comisión Médica</a> &gt; <span class="txt-amarillo">Examen en la Comisión Médica</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">COMISIÓN MÉDICA</span>
                <h1 class="articulo-titulo">Examen en la Comisión Médica: qué te preguntan, cómo es la revisión física y cómo prepararte</h1>

                <p class="articulo-lead">Si la SRT te citó a una audiencia médica tras un accidente laboral o enfermedad profesional, el examen físico y tus respuestas definirán tu porcentaje de incapacidad y tu indemnización. Te explicamos qué evalúa el médico dictaminador, las preguntas trampa y cómo defender tus derechos.</p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('calendar-day-solid', 'mr-5') ?> Actualizado: 2026</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Lectura: 10 min</span>
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
                                <li id="preg-1"><a href="#que-es-examen" class="active"><span class="nav-num">1</span> Qué es el examen en la Comisión Médica</a></li>
                                <li id="preg-2"><a href="#preguntas-audiencia"><span class="nav-num">2</span> Qué te preguntan: las 5 preguntas clave</a></li>
                                <li id="preg-3"><a href="#como-es-examen-fisico"><span class="nav-num">3</span> Cómo es la revisión física paso a paso</a></li>
                                <li id="preg-4"><a href="#documentacion-obligatoria"><span class="nav-num">4</span> Qué papeles tenés que llevar el día del turno</a></li>
                                <li id="preg-5"><a href="#abogado-y-medico-de-parte"><span class="nav-num">5</span> El rol del abogado y del médico de parte</a></li>
                                <li id="preg-6"><a href="#despues-del-examen"><span class="nav-num">6</span> Qué pasa después: dictamen e indemnización</a></li>
                                <li id="preg-7"><a href="#errores-frecuentes"><span class="nav-num">7</span> Errores graves que bajan tu porcentaje</a></li>
                                <li id="preg-8"><a href="#preguntas-frecuentes-examen"><span class="nav-num">8</span> Preguntas frecuentes</a></li>
                            </ul>
                        </nav>
                    </details>
                </div>

                <?php
                    $titulo = "¿Tenés turno en la Comisión Médica?";
                    $descripcion = "Te preparamos para la audiencia y te acompañamos sin costo para cuidar tu porcentaje.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
                    <span style="font-size: 2em;">✅</span> Solo cobramos si vos cobrás.
                </p>
            </div>
        </aside>

        <!-- CUERPO PRINCIPAL DEL POST -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <!-- SECCION 1 -->
                <div id="que-es-examen" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es el examen en la Comisión Médica y qué se juega en la audiencia</a></h2>
                    <p>El <strong>examen en la Comisión Médica</strong> es la audiencia presencial ante la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Superintendencia de Riesgos del Trabajo (SRT)</a> donde un médico oficial (llamado <em>médico dictaminador</em>) evalúa tu estado de salud para determinar dos cosas fundamentales: si tu lesión tiene relación con el trabajo y qué <strong>porcentaje de incapacidad permanente</strong> te quedó como secuela.</p>
                    <p>Por disposición de la Ley 27.348, el paso por las Comisiones Médicas jurisdiccionales es la instancia administrativa previa y obligatoria en la mayor parte del país (incluyendo CABA, Provincia de Buenos Aires, Santa Fe, Córdoba, Mendoza y Neuquén). Nadie puede cobrar su indemnización por accidente de trabajo o enfermedad profesional sin pasar antes por este examen o por un trámite homologatorio ante la SRT.</p>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo que tenés que saber:</span> el médico de la Comisión Médica no te atiende para curarte ni para recetarte medicamentos. Su función es <strong>pericial</strong>: constatar qué secuelas físicas tenés, medirlas según el <a href="<?= BASE_URL ?>tabla-incapacidad" style="color:inherit;text-decoration:none;">Baremo Laboral Oficial</a> y volcar un porcentaje en un dictamen técnico. De ese número dependerá directamente la plata que la ART te tiene que pagar.</p>
                    </div>

                    <p class="mt-20">Este examen suele realizarse en distintos trámites de la SRT:</p>
                    <ul class="lista-items-blog mt-15">
                        <li><strong>Determinación de la incapacidad:</strong> tras recibir el alta médica de la ART, para cuantificar las secuelas definitivas.</li>
                        <li><strong>Divergencia en el alta médica:</strong> si la ART te dio el alta pero vos seguís con dolor o sin poder trabajar y reclamás que continúe el tratamiento.</li>
                        <li><strong>Rechazo del siniestro:</strong> si la aseguradora desconoció tu accidente o dijo que tu hernia, lumbalgia o tendinitis es una "enfermedad inculpable".</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 2 -->
                <div id="preguntas-audiencia" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué te preguntan en la Comisión Médica: las 5 preguntas clave</a></h2>
                    <p>Al ingresar al consultorio de la SRT, el médico dictaminador comenzará con una entrevista clínica y laboral (llamada <em>anamnesis</em>). Aunque parezca una charla informal, cada respuesta queda registrada en el expediente. Estas son las cinco preguntas centrales que te van a hacer y qué evalúan en cada una:</p>

                    <div class="tip-blog mt-25 p-25 bg-gris border-radius-15">
                        <h3 class="fs-115 mb-10">1. "¿Cómo ocurrió exactamente el accidente y qué estabas haciendo?"</h3>
                        <p class="fs-09 m-0">El médico busca verificar la <strong>relación de causalidad</strong> entre el hecho denunciado y la lesión que tenés. Si tuviste un golpe en la rodilla, una caída de altura o un esfuerzo levantando mercadería, tenés que relatarlo con claridad y coincidencia con la denuncia original que hiciste a la ART. No inventes detalles ni minimices la fuerza del impacto.</p>
                    </div>

                    <div class="tip-blog mt-20 p-25 bg-gris border-radius-15">
                        <h3 class="fs-115 mb-10">2. "¿Cuáles son tus tareas habituales en el trabajo?"</h3>
                        <p class="fs-09 m-0"><strong>Esta pregunta es determinante para tu bolsillo.</strong> El Baremo Laboral (Decreto 549/2025) contempla <em>factores de ponderación</em>: si tus tareas habituales implican esfuerzo físico, bipedestación prolongada, movimientos repetitivos o destreza manual fina que ahora te cuesta realizar, te corresponden puntos adicionales de incapacidad (5%, 10% o hasta 20%). Describí en detalle si cargás cajas, si manejás maquinaria pesada, si trabajás parado 8 horas o si usás herramientas de precisión.</p>
                    </div>

                    <div class="tip-blog mt-20 p-25 bg-gris border-radius-15">
                        <h3 class="fs-115 mb-10">3. "¿Qué tratamientos te dio la ART y durante cuánto tiempo?"</h3>
                        <p class="fs-09 m-0">Te van a preguntar si te operaron, cuántas sesiones de kinesiología hiciste, si tomaste analgésicos o antiinflamatorios y qué médicos especialistas te vieron. Sirve para constatar si la ART agotó las prestaciones médicas o si te dio un alta prematura sin haberte rehabilitado adecuadamente.</p>
                    </div>

                    <div class="tip-blog mt-20 p-25 bg-gris border-radius-15">
                        <h3 class="fs-115 mb-10">4. "¿Qué dolores o limitaciones tenés hoy en día?"</h3>
                        <p class="fs-09 m-0">Muchos trabajadores cometen el error de decir <em>"ahora estoy bastante mejor"</em> por pudor o costumbre. Tenés que ser 100% sincero con lo que sentís en tu rutina: si no podés agacharte, si se te duermen los dedos, si perdés fuerza en el brazo, si rengueás al caminar varias cuadras o si el dolor te despierta a la noche. Todo síntoma no expresado es un síntoma que el médico no puede asentar en el dictamen.</p>
                    </div>

                    <div class="tip-blog mt-20 p-25 bg-gris border-radius-15">
                        <h3 class="fs-115 mb-10">5. "¿Tuviste cirugías, golpes o problemas anteriores en esa misma zona?"</h3>
                        <p class="fs-09 m-0">Las aseguradoras intentan casi siempre argumentar que las hernias de disco, meniscopatías o lesiones de manguito rotador son "degenerativas" o preexistentes para no pagar. Respondé con la verdad sobre tu historial, pero remarcá claramente que antes del accidente trabajabas con normalidad y sin ningún dolor ni impedimento físico.</p>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.2em;">💡</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Consejo de oro:</span> respondé con tranquilidad, con la verdad y sin exagerar ni fingir. Los médicos de la SRT aplican maniobras semiológicas específicas que detectan de inmediato si alguien simula un dolor inexistente, lo cual daña severamente la credibilidad del reclamo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-es-examen-fisico" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo es la revisión física en la Comisión Médica paso a paso</a></h2>
                    <p>Una vez terminadas las preguntas, el profesional te invitará a pasar a la camilla de examen para la evaluación corporal. Esta revisión suele durar entre 15 y 30 minutos y se concentra puntualmente en el sector anatómico lesionado:</p>

                    <h3 class="mt-30 mb-15">1. Medición de rangos articulares con goniómetro</h3>
                    <p>Si tu lesión es en el hombro, rodilla, tobillo, muñeca o columna, el médico utilizará un instrumento similar a una regla transportadora llamado <strong>goniómetro</strong>. Te pedirá que flexiones, extiendas, gires o levantes la extremidad hasta donde puedas, para medir con exactitud los grados de movilidad que perdiste. Esos grados son los que se comparan matemáticamente con la tabla del Baremo Oficial.</p>

                    <h3 class="mt-30 mb-15">2. Maniobras ortopédicas y semiológicas específicas</h3>
                    <p>Según la parte afectada, el evaluador realizará maniobras clínicas estandarizadas:</p>
                    <ul class="lista-items-blog mt-15">
                        <li><strong>Columna vertebral (cervicalgia o lumbalgia):</strong> distancia dedo-suelo al agacharte, maniobra de Lasègue (elevar la pierna extendida para ver si comprime el nervio ciático) y palpación de contracturas paravertebrales.</li>
                        <li><strong>Rodilla (meniscos y ligamentos):</strong> maniobras de bostezo, cajón anterior/posterior y signos meniscales de McMurray o Apley.</li>
                        <li><strong>Hombro (manguito rotador o tendinitis):</strong> maniobras de Neer, Hawkins y arco doloroso al levantar el brazo lateralmente.</li>
                        <li><strong>Mano y muñeca (túnel carpiano o dedos):</strong> signos de Phalen y Tinel, prueba de fuerza de prensión palmar y pinza digital.</li>
                    </ul>

                    <h3 class="mt-30 mb-15">3. Evaluación de cicatrices y secuelas visibles</h3>
                    <p>Si fuiste intervenido quirúrgicamente o sufriste heridas cortantes, el médico medirá la longitud (en centímetros), el ancho y el estado de la cicatriz (si es queloide, dolorosa, retráctil o adherida a planos profundos). En el baremo argentino, las cicatrices que dejan secuela estética o funcional también suman porcentaje de incapacidad.</p>

                    <h3 class="mt-30 mb-15">4. Revisión y cotejo de estudios complementarios</h3>
                    <p>El médico abrirá las imágenes y leerá los informes que hayas aportado: resonancias magnéticas, tomografías, radiografías o electromiogramas. Si considera que los estudios son viejos, incompletos o insuficientes, la SRT tiene la facultad de ordenar <strong>estudios médicos complementarios gratuitos</strong> en un centro de diagnóstico antes de emitir el dictamen.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="documentacion-obligatoria" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Qué documentación tenés que llevar el día del examen</a></h2>
                    <p>El día de la audiencia no podés ir con las manos vacías ni confiar en que la ART ya envió todos tus papeles. De hecho, uno de los motivos más comunes por los que un porcentaje sale bajo es la falta de estudios en el expediente digital.</p>

                    <div class="custom-table-blog mt-25">
                        <div class="tr-blog header">
                            <div>Documento requerido</div>
                            <div>Para qué sirve y por qué es obligatorio</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>DNI original vigente</strong></div>
                            <div>Acreditación de identidad indispensable. Sin DNI no te dejan ingresar al edificio de la SRT.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Estudios médicos con informe</strong></div>
                            <div>Placas radiográficas, resonancias magnéticas (RMN) en CD o impresas, ecografías y electromiografías con su informe médico firmado por especialista.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Alta médica de la ART</strong></div>
                            <div>La constancia de alta y fin de tratamiento que te otorgó la aseguradora con la fecha exacta del cese de incapacidad laboral temporaria.</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Protocolo quirúrgico / Epicrisis</strong></div>
                            <div>Si te operaron, el detalle de la cirugía realizado por el cirujano (técnica utilizada, prótesis o material de osteosíntesis colocado).</div>
                        </div>
                        <div class="tr-blog">
                            <div><strong>Recibos de sueldo</strong></div>
                            <div>Permiten acreditar tu salario y las tareas reales para la correcta liquidación del Ingreso Base Mensual (IBM).</div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.2em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Novedad procesal (Resolución SRT 5/2026):</span> en las normativas actuales, los trámites ante la SRT exigen que toda la prueba documental y médica se incorpore desde el inicio del reclamo. Ir a la audiencia con estudios faltantes puede provocar que el médico dictamine solo con lo que aportó la ART, que suele ser lo mínimo e indispensable para pagar lo menos posible.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="abogado-y-medico-de-parte" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> El rol del abogado y tu derecho a llevar un médico de parte</a></h2>
                    <p>Por ley, todo trabajador que transita la Comisión Médica debe contar con el <strong>patrocinio letrado obligatorio</strong> de un abogado matriculado. Lo más importante: <strong>los honorarios del abogado están a cargo de la ART por ley</strong>, por lo que nunca debés pagar adelantos ni costos por su intervención administrativa.</p>

                    <h3 class="mt-30 mb-15">¿El abogado entra al examen físico?</h3>
                    <p>Una duda muy frecuente es si tu abogado puede pasar a la camilla con vos. Por reglamentación de la SRT, para preservar la intimidad médica del paciente, los abogados no ingresan al consultorio durante la exploración física corporal. Sin embargo, el rol de tu abogado es decisivo antes y después:</p>
                    <ul class="lista-items-blog mt-15">
                        <li><strong>Antes de entrar:</strong> te instruye sobre qué puntos remarcar, revisa que los estudios estén completos y presenta los escritos con los puntos de pericia.</li>
                        <li><strong>Después de la revisión:</strong> lee el acta médica antes de firmar, verifica que se hayan anotado todas las limitaciones que expresaste y deja asentadas impugnaciones inmediatas si el examen fue deficiente o incompleto.</li>
                    </ul>

                    <h3 class="mt-30 mb-15">Tu derecho al médico de parte (perito médico)</h3>
                    <p>A diferencia del abogado, vos <strong>tenés pleno derecho legal a concurrir a la audiencia acompañado por un médico de parte</strong> (tu propio perito médico). Este profesional sí tiene autorización para ingresar al consultorio durante la revisión física, presenciar cada maniobra que realiza el médico de la SRT y exigir que se midan adecuadamente los ángulos articulares y las cicatrices.</p>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="despues-del-examen" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Qué pasa después del examen: Dictamen Médico y cobro de la indemnización</a></h2>
                    <p>El día del examen no te van a decir cuánta plata vas a cobrar ni te van a entregar el porcentaje en el momento. El proceso administrativo continúa con los siguientes pasos formales:</p>

                    <div class="pasos-denuncia mt-25">
                        <ul class="lista-items-blog">
                            <li><strong>1. Emisión del Dictamen Médico (10 a 30 días hábiles):</strong> el médico dictaminador analiza los estudios, redacta sus conclusiones y fija el porcentaje de incapacidad laboral permanente junto con los factores de ponderación (edad y dificultad de tareas). El dictamen se notifica a la Ventanilla Electrónica de tu abogado.</li>
                            <li><strong>2. Liquidación del monto indemnizatorio:</strong> la Secretaría Técnica Letrada de la SRT toma el porcentaje del dictamen y calcula la indemnización oficial mediante la fórmula de la Ley 24.557 (53 × IBM × % Incapacidad × 65/Edad), garantizando que nunca sea inferior al <a href="<?= BASE_URL ?>blog/nuevos-pisos-art-marzo-2026" style="color:inherit;text-decoration:none;">piso mínimo legal obligatorio</a>.</li>
                            <li><strong>3. Audiencia de acuerdo y homologación:</strong> se cita a una audiencia final donde la ART ofrece formalmente el pago. Si estás conforme con el monto y el porcentaje, se firma el acuerdo y la ART tiene 5 días hábiles para transferir el dinero directo a tu cuenta bancaria (CBU).</li>
                            <li><strong>4. ¿Qué pasa si el porcentaje es bajo o no estás de acuerdo?:</strong> no estás obligado a aceptar. Si el porcentaje otorgado por la Comisión Médica no refleja tu daño real o si te dieron 0%, tu abogado puede rechazar el ofrecimiento e iniciar la <strong>demanda judicial ante los Tribunales del Trabajo</strong>, donde un perito médico sorteado por la Justicia suele fijar porcentajes sustancialmente más acordes a la realidad.</li>
                        </ul>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">🧮</div>
                        <p class="m-0 fs-09 italic"><strong>Calculá tu indemnización estimada:</strong> si ya tenés un porcentaje estimado o querés saber cuánto te correspondería cobrar según tu sueldo y edad, entrá a nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" class="subrayado-amarillo" style="color:inherit;text-decoration:none;font-weight:700;">Calculadora de Accidentes de Trabajo</a>.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="errores-frecuentes" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Errores graves que arruinan tu porcentaje en la Comisión Médica</a></h2>
                    <p>A lo largo de los años en DerechosART vemos patrones reiterados de errores que le hacen perder millones de pesos a los trabajadores por falta de asesoramiento previo:</p>

                    <ul class="lista-items-blog blog-errores mt-25">
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Ir a la audiencia sin abogado especialista en ART:</strong> presentarse con un defensor público de turno o sin patrocinio particular te deja en desventaja total frente al perito de la aseguradora.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Minimizar las secuelas por timidez:</strong> decirle al médico que "casi no duele" o hacer un sobreesfuerzo para mover la articulación más allá de tu límite real le da argumentos al dictaminador para bajar los grados de incapacidad.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Olvidar los estudios médicos en tu casa:</strong> la SRT no tiene la obligación de pedirle los estudios a tu clínica privada si vos no los llevás en mano el día del examen.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>No explicar las tareas laborales reales:</strong> omitir que cargás peso o hacés movimientos repetitivos hace que te califiquen con "dificultad leve" (5%) en lugar de "intermedia" (10%) o "alta" (20%), perdiendo puntos valiosos de factor de ponderación.</li>
                        <li><span style="font-size: 1.3em;">❌</span> <strong>Firmar el acuerdo sin revisar la liquidación:</strong> aceptar la primera oferta en la audiencia de homologación sin que un abogado revise si la ART aplicó correctamente los intereses y el piso legal vigente.</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="preguntas-frecuentes-examen" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Preguntas frecuentes sobre el examen en la Comisión Médica</a></h2>
                    <p>Respondemos las dudas más habituales que nos hacen los trabajadores antes de presentarse a su audiencia médica:</p>

                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué te preguntan exactamente en la Comisión Médica?</summary>
                            <p class="mt-15 fs-09">El médico dictaminador te pregunta cómo fue el hecho denunciado, qué tareas habituales desempeñás en tu puesto, qué tratamientos y cirugías recibiste por parte de la ART, qué dolores o limitaciones tenés hoy en tu vida diaria y si contás con antecedentes médicos o lesiones previas en la misma zona del cuerpo.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto dura la revisión física en la SRT?</summary>
                            <p class="mt-15 fs-09">Por lo general dura entre 15 y 30 minutos. El médico realiza una serie de preguntas, revisa los estudios complementarios que aportaste (resonancias, radiografías, etc.) y realiza mediciones de movilidad articular con goniómetro y maniobras ortopédicas sobre la zona afectada.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Mi abogado puede entrar conmigo al consultorio médico?</summary>
                            <p class="mt-15 fs-09">Por normativa de la SRT para resguardar la intimidad corporal del trabajador, los abogados no ingresan al área de examen físico. Sin embargo, tu abogado te asesora antes de entrar, revisa que los estudios estén completos, controla el acta médica final y formula las impugnaciones legales pertinentes. Además, tenés derecho a ingresar acompañado por tu propio médico de parte.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si no voy el día que me citaron?</summary>
                            <p class="mt-15 fs-09">Si no te presentás sin justificación médica fehaciente previa, el expediente se puede archivar o demorar varios meses hasta fijar una nueva fecha. Si tenés un impedimento de fuerza mayor, tu abogado debe presentar un escrito con certificado médico antes de la audiencia para solicitar la reprogramación del turno.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Te dicen el porcentaje de incapacidad el mismo día del examen?</summary>
                            <p class="mt-15 fs-09">No. El día del examen solo se labra un acta médica con las maniobras realizadas. El Dictamen Médico oficial con el porcentaje de incapacidad se emite y notifica electrónicamente a tu abogado entre 10 y 30 días hábiles posteriores a la audiencia.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué hago si no estoy de acuerdo con el porcentaje que me dieron?</summary>
                            <p class="mt-15 fs-09">No estás obligado a aceptar el dictamen ni a firmar el acuerdo de la ART. Si el porcentaje es insuficiente o te dieron 0% de incapacidad, podés apelar la decisión ante la Justicia Laboral mediante una demanda, donde un perito judicial independiente evaluará tu daño real.</p>
                        </details>
                    </div>

                    <div class="mt-40">
                        <?php
                            $titulo = "¿Tenés fecha para la Comisión Médica?";
                            $descripcion = "Escribinos por WhatsApp y coordinamos tu preparación previa sin ningún costo.";
                            $ancho = "100%";
                            $margen_top = "1.5";
                            include __DIR__ . '/../componentes/cta-whatsapp.php';
                        ?>
                    </div>

                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- CRUCE SEO/GEO DE GUIAS RELACIONADAS -->
                <?php
                    $guias = [
                        [
                            'titulo' => 'Comisión Médica de CABA (Sede Central)',
                            'url' => 'blog/comision-medica-caba-guia',
                            'descripcion' => 'Ubicación, cómo llegar y cómo tramitar tu reclamo en la sede de Moreno 401.',
                        ],
                        [
                            'titulo' => 'Tabla de Incapacidades y Baremo Laboral',
                            'url' => 'tabla-incapacidad',
                            'descripcion' => 'Consultá los porcentajes oficiales de cada lesión según el Decreto 549/2025.',
                        ],
                    ];
                    $tituloBloque = 'Guías y trámites relacionados';
                    $introBloque = 'Para conocer a fondo tus derechos y los pasos procesales de cada trámite ante la SRT:';
                    include __DIR__ . '/../componentes/bloque-guias-relacionadas.php';
                ?>

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
        if (links[index]) {
            links[index].classList.add('active');
        }
    }

    changeActiveLink();
    window.addEventListener('scroll', changeActiveLink);
});
</script>
