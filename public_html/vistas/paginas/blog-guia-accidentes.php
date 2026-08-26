<?php
/**
 * VISTA: GUIA 2026 ACCIDENTES LABORALES (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <p class="tl-dr">Guía completa 2026 sobre accidentes laborales en Argentina: qué hacer después de un accidente, cómo reclamar a la ART, plazos, documentación y derechos del trabajador.</p>
    <div class="contenedor grid-blog">
        
        <!-- CABECERA CON H1 -->
        <div class="articulo-header-wrapper">
            <?php include __DIR__ . '/../blog/cabecera-articulo.php'; ?>
        </div>
        
        <!-- SIDEBAR DERECHO -->
        <aside class="blog-sidebar">
            <?php include __DIR__ . '/../blog/sidebar.php'; ?>
        </aside>
        
        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">

            <section class="articulo-contenido-texto mt-50">
                
                <!-- SECCION 1 -->
                <div id="que-es-accidente" class="seccion-bloque">
                    <h2 class="titulo-seccion-blog"><a href="#preg-1"><span class="num-sec">1</span> Qué es un accidente laboral</a></h2>
                    <p>Un <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">accidente laboral</a> es cualquier cosa que te pase de forma repentina mientras estás trabajando o haciendo algo que tu trabajo te pidió hacer, y que te cause una lesión.</p>
                    <p>No hace falta que sea algo espectacular. Puede ser una caída, un golpe, una quemadura o un sobreesfuerzo. Si pasó mientras trabajabas, puede estar cubierto por la ART de tu empleador.</p>
                    
                    <h4 class="mt-40 mb-0" style="font-size: 2.6em;">👇 Ejemplos frecuentes:</h4>
                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20">
                        <div class="grid-iconos-blog">
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/caida.png" alt="Caida" title="Caída laboral" loading="lazy">
                                <span>Te caíste de una escalera o andamio</span>
                            </div>
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/caja.png" alt="Carga" title="Carga o esfuerzo" loading="lazy">
                                <span>Te lastimaste cargando o moviendo peso</span>
                            </div>
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/martillo.png" alt="Herramienta" title="Golpe con herramienta" loading="lazy">
                                <span>Te golpeaste con una máquina o herramienta</span>
                            </div>
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/fuego.png" alt="Quemadura" title="Quemadura en el trabajo" loading="lazy">
                                <span>Sufriste una quemadura en el trabajo</span>
                            </div>
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/rayo.png" alt="Electricidad" title="Descarga eléctrica" loading="lazy">
                                <span>Tuviste una descarga eléctrica</span>
                            </div>
                            <div class="item-ejemplo">
                                <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/tabla.png" alt="Tarea" title="Accidente laboral en tarea asignada" loading="lazy">
                                <span>Te accidentaste haciendo una tarea que te pidió tu jefe</span>
                            </div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Lo más importante del primer día:</span> Cuanto antes lo informes, más fácil va a ser demostrar que el accidente ocurrió mientras trabajabas. No esperes días para avisarle a la ART o a tu empleador.</p>
                    </div>
                </div>

                <!-- SECCION 2 -->
                <div id="accidente-itinere" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-2"><span class="num-sec">2</span> Qué es un accidente in itinere (y por qué también te cubre)</a></h2>
                    <p>Muchas personas creen que la ART solo cubre lo que pasa dentro del trabajo. Pero si te accidentaste yendo o volviendo del trabajo por el camino de siempre, también podés tener derecho a atención médica e indemnización. Eso se llama accidente in itinere.</p>
                    
                    <h4 class="mt-40 mb-0" style="font-size: 2.6em;">👇 Algunos ejemplos:</h4>
                    <div class="recuadro-ejemplos bg-gris p-15 border-radius-20">
                        <ul class="lista-items-blog">
                            <li><span style="font-size: 1.3em;">🚘</span> Un choque de auto o moto camino al trabajo</li>
                            <li><span style="font-size: 1.3em;">🚶</span> Una caída en la calle en el trayecto habitual</li>
                            <li><span style="font-size: 1.3em;">🚲</span> Un accidente en bicicleta volviendo a tu casa</li>
                            <li><span style="font-size: 1.3em;">🚌</span> Una lesión en el transporte público en tu recorrido de siempre</li>
                                </ul>
                            </div>
                            <!-- CASO REAL (EMBED) -->
                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'icono-chico mr-10') ?> <span class="subrayado-amarillo">CASO REAL</span> — Marcos cobró 15 millones</h4>
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DTQn_khEfn1/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;"></blockquote>
                            </div>
                        </div>
                        <p class="mt-20 fs-09 txt-gris-medio italic">En este caso, la ART pagó por un robo que fue en el trayecto de la casa al lugar del trabajo de nuestro cliente, Marcos sufrió un intento de robo mientras esperaba el colectivo en la parada para ir a su trabajo, allí fue interceptado por los ladrones e instintivamente se resistió lesionando su rodilla, la ART cubrió el siniestro y le pagó una indemnización de más de 15 millones de pesos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 3 -->
                <div id="como-denunciar" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-3"><span class="num-sec">3</span> Cómo hacer la denuncia a la ART paso a paso</a></h2>
                    <p>La denuncia es el primer paso. Si tu empleador no la hace, vos podés hacerla directamente. No necesitás un abogado para esto, pero sí tenés que hacerla lo antes posible.</p>
                    
                    <div class="pasos-denuncia mt-30">
                        <h4 class="mb-20"><span style="font-size: 1.3em;">📞</span> Cómo podés denunciar:</h4>
                        <ul class="lista-items-blog">
                            <li><span style="font-size: 1.3em;">📱</span> <strong>Por teléfono:</strong> llamando a la ART de tu empresa</li>
                            <li><span style="font-size: 1.3em;">💻</span> <strong>Por mail:</strong> con alguna constancia de envío</li>
                            <li><span style="font-size: 1.3em; filter: hue-rotate(45deg);">✉️</span> <strong>Por telegrama gratuito:</strong> desde cualquier sucursal del Correo Argentino</li>
                        </ul>
                    </div>

                    <div class="tabla-plazos mt-40">
                        <h4 class="mb-20"><?= render_icon('magnifying-glass', 'icono-chico mr-10') ?> Qué pasa después de que avisás:</h4>
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Plazo</div>
                                <div>Qué tiene que hacer la ART</div>
                            </div>
                            <div class="tr-blog">
                                <div>72 horas hábiles</div>
                                <div>Darte atención médica</div>
                            </div>
                            <div class="tr-blog">
                                <div>Después de la atención</div>
                                <div>Aceptar o rechazar el accidente</div>
                            </div>
                            <div class="tr-blog">
                                <div>Si rechaza</div>
                                <div>Notificarte dentro de los plazos legales</div>
                            </div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">No esperes para denunciar:</span> Uno de los errores más comunes es seguir trabajando con dolor o esperar varios días antes de avisar. Cada día que pasa hace más difícil demostrar que el accidente pasó mientras trabajabas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 4 -->
                <div id="cobertura-art" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-4"><span class="num-sec">4</span> Qué tiene que cubrir la ART durante el tratamiento</a></h2>
                    <p>Una vez que la ART acepta el accidente, tiene la obligación de cubrir todo lo que necesitás para recuperarte. No deberías pagar nada de tu bolsillo por esto.</p>
                    
                    <div class="grid-iconos-blog mt-30">
                        <div class="item-ejemplo">
                            <?= render_icon('stethoscope-solid', 'icono-grande') ?>
                            <span>Consultas médicas y controles</span>
                        </div>
                        <div class="item-ejemplo">
                            <img src="<?= BASE_URL ?>publico/font-awesome-svgs/solid/Copilot_20260603_174028.png" alt="Estudios Médicos" title="Estudios médicos por accidente de trabajo" class="icono-grande" loading="lazy">
                            <span>Estudios: radiografías, resonancias, tomografías</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('circle-check', 'icono-grande') ?>
                            <span>Medicamentos relacionados con la lesión</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('shield-halved', 'icono-grande') ?>
                            <span>Rehabilitación y kinesiología</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('location-dot', 'icono-grande') ?>
                            <span>Traslados vinculados al tratamiento</span>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">📷</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Guardá todo desde el primer día:</span> Sacá foto a cada turno, cada receta, cada estudio. Más adelante puede ser clave para tu reclamo.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 5 -->
                <div id="alta-con-dolor" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-5"><span class="num-sec">5</span> Qué hacer si te dan el alta pero seguís con dolor</a></h2>
                    <p>El alta médica es cuando la ART dice que el tratamiento terminó. Pero eso no significa que ya no podés reclamar nada. Podés estar en dos situaciones muy distintas:</p>
                    
                    <div class="situacion-blog p-25 bg-verde-claro border-radius-15 mb-20">
                        <p class="m-0"><?= render_icon('check', 'txt-verde mr-10') ?> <span class="subrayado-amarillo">Si te recuperaste bien:</span> Podés volver a trabajar. Pero si quedaron secuelas, la ART tiene que evaluar qué tanto te afectaron y pagarte una indemnización por eso.</p>
                    </div>

                    <div class="alerta-importante p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">Si seguís con dolor o limitaciones:</span> Podés pedir que te reincorporen al tratamiento. Si la ART se niega, hay formas de reclamar ante la Superintendencia de Riesgos del Trabajo (SRT).</p>
                    </div>

                    <!-- REEL 2 -->
                    <div class="mt-40">
                        <div class="embed-video-blog">
                            <div class="instagram-wrapper">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DV9GHBukWcM/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;"></blockquote>
                            </div>
                        </div>
                        <p class="mt-20 fs-09 txt-gris-medio italic"><span class="subrayado-amarillo">"¿ACEPTASTE EL ALTA MÉDICA CON DOLOR?"</span> Muchas personas creen que el alta médica cierra todo. Si te dieron el alta médica y seguís con dolor podés pedirle más tratamiento a tu ART de diversas maneras. Pero bajo ningún concepto el alta no borra tus derechos.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 6 -->
                <div id="como-funciona-indemnizacion" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-6"><span class="num-sec">6</span> Cómo funciona la indemnización por accidente laboral</a></h2>
                    <p><span style="font-size: 1.3em;">💰</span> Si el accidente te dejó secuelas permanentes —aunque sean parciales— tenés derecho a cobrar una indemnización. Esto existe para compensar el impacto que la lesión tuvo en tu vida y en tu capacidad para trabajar.</p>
                    
                    <div class="tabla-plazos mt-30">
                        <h4 class="mb-20"><span style="font-size: 1.3em;">🧮</span> Qué se tiene en cuenta para calcularla:</h4>
                        <div class="custom-table-blog">
                            <div class="tr-blog header">
                                <div>Factor</div>
                                <div>Por qué importa</div>
                            </div>
                            <div class="tr-blog">
                                <div>Porcentaje de incapacidad</div>
                                <div>Es el número principal. Unos pocos puntos de diferencia pueden significar mucha plata.</div>
                            </div>
                            <div class="tr-blog">
                                <div>Tu edad</div>
                                <div>A mayor edad, puede cambiar el cálculo de la indemnización.</div>
                            </div>
                            <div class="tr-blog">
                                <div>Tu sueldo</div>
                                <div>La base del cálculo depende de tu ingreso al momento del accidente.</div>
                            </div>
                            <div class="tr-blog">
                                <div>Tipo de incapacidad</div>
                                <div>Parcial, total o gran invalidez tienen reglas distintas entre sí.</div>
                            </div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-40 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">No aceptes el primer número sin revisarlo:</span> La ART no puede decidir sola cuánto vale tu lesión. El porcentaje se determina en la <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a>. Si ese número no refleja lo que realmente te pasó, hay formas de cuestionarlo. Unos pocos puntos de diferencia pueden representar miles de pesos. Usá nuestra <a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">calculadora de indemnización</a> para tener una referencia.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">❓</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">¿Qué pasa si la ART no te llama después del alta?</span> Si pasan los plazos legales y la ART no avanza con tu evaluación, no te quedes esperando. Existen herramientas para impulsar el trámite. Los plazos de prescripción corren igual.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 7 -->
                <div id="art-rechaza" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-7"><span class="num-sec">7</span> Qué hacer si la ART rechaza tu accidente laboral</a></h2>
                    <p><span style="font-size: 1.3em;">😢</span> Un rechazo genera mucha angustia. Pero la realidad es que no significa que perdiste. Las ART rechazan accidentes por distintos motivos, y muchas veces se puede <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">revertir esa decisión</a>.</p>
                    
                    <div class="recuadro-ejemplos mt-30 bg-gris p-15 border-radius-20">
                        <h4 class="mb-20"><span style="font-size: 1.3em;">❓</span> Por qué suelen rechazar:</h4>
                        <ul class="lista-items-blog">
                            <li><span style="font-size: 1.3em;">🕐</span> Dicen que el accidente no pasó durante la jornada laboral</li>
                            <li><span style="font-size: 1.3em;">🚌</span> Discuten el recorrido en un accidente in itinere</li>
                            <li><span style="font-size: 1.3em;">📋</span> Alegan que no hay suficientes pruebas</li>
                            <li><span style="font-size: 1.3em;">💬</span> Cuestionan la relación entre lo que te pasó y tu trabajo</li>
                        </ul>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon" style="font-size: 2.6em;">⚠️</div>
                        <p class="m-0 fs-09"><span class="subrayado-amarillo">El error más común:</span> aceptar el rechazo y no hacer nada. Muchas personas reciben el rechazo de la ART y lo dan por perdido. Pero un rechazo no siempre quiere decir que la ART tiene razón. Lo importante es actuar rápido y juntar toda la documentación que tengas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 8 -->
                <div id="errores-comunes" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-8"><span class="num-sec">8</span> Errores que perjudican el reclamo (y cómo evitarlos)</a></h2>
                    <p>Muchos trabajadores complican su propio reclamo sin darse cuenta, simplemente porque nadie les explicó qué no hacer.</p>
                    
                    <ul class="lista-items-blog blog-errores mt-30">
                        <li><span style="font-size: 1.3em;">❌</span> No denunciar el accidente o esperar demasiado tiempo</li>
                        <li><span style="font-size: 1.3em;">❌</span> Seguir trabajando lastimado sin avisar nada</li>
                        <li><span style="font-size: 1.3em;">❌</span> No guardar estudios, recetas ni certificados médicos</li>
                        <li><span style="font-size: 1.3em;">❌</span> Firmar papeles de la ART sin que nadie te los explique antes</li>
                        <li><span style="font-size: 1.3em;">❌</span> Aceptar sin cuestionar el porcentaje de incapacidad que fijó la ART</li>
                        <li><span style="font-size: 1.3em;">❌</span> Creer que el alta médica o el primer rechazo son el final del reclamo</li>
                    </ul>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 9 -->
                <div id="documentacion" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-9"><span class="num-sec">9</span> Qué documentación guardar desde el primer día</a></h2>
                    <p><span style="font-size: 1.3em;">📁</span> Parece un detalle menor, pero puede ser lo más importante de todo. Juntá todo en una carpeta física o digital desde el minuto uno.</p>
                    
                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><span style="font-size: 1.3em;">🏥</span> Estudios: radiografías, resonancias, tomografías</li>
                        <li><span style="font-size: 1.3em;">📋</span> Recetas y certificados médicos</li>
                        <li><span style="font-size: 1.3em;">📊</span> Informes de kinesiología y rehabilitación</li>
                        <li><span style="font-size: 1.3em;">👨‍⚕️</span> Constancias de atención en los centros de la ART</li>
                        <li><span style="font-size: 1.3em;">📱</span> Mails o mensajes que intercambiaste con la ART</li>
                        <li><span style="font-size: 1.3em;">✉️</span> Telegramas enviados o recibidos</li>
                        <li><span style="font-size: 1.3em;">📷</span> Fotos de las lesiones si las tenés</li>
                        <li><span style="font-size: 1.3em;">👮</span> Copia de la denuncia del accidente</li>
                    </ul>

                    <div class="tip-blog mt-40 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <div style="font-size: 2.6em;">💡</div>
                        <p class="m-0 fs-09 italic"><span class="subrayado-amarillo">Un consejo simple:</span> Sacá foto a todo con el celular y guardalo en un álbum o carpeta de Drive. Muchas personas llegan a consulta meses después sin poder encontrar nada, y eso complica mucho las cosas.</p>
                    </div>
                    <a href="#que-es-guia" class="link-volver-indice mt-30"><?= render_icon('arrow-up') ?> Volver al índice</a>
                </div>

                <!-- SECCION 10 -->
                <div id="preguntas-frecuentes" class="seccion-bloque">
                    
                    <h2 class="titulo-seccion-blog"><a href="#preg-10"><span class="num-sec">10</span> Preguntas frecuentes sobre accidentes laborales</a></h2>
                    <p>Respondemos las dudas más comunes. También podés visitar nuestra sección de <a href="<?= BASE_URL ?>faq" style="color:inherit;text-decoration:none;">preguntas frecuentes sobre ART</a> para más información.</p>
                    
                    <div class="lista-faq-blog">
                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tiempo tengo para denunciar un accidente laboral a la ART?</summary>
                            <p class="mt-15 fs-09">No hay un plazo fijo para el trabajador, pero lo ideal es hacerlo el mismo día o al día siguiente. Cuanto antes avises, más fácil es demostrar que el accidente ocurrió mientras trabajabas. Si tu empleador no lo denuncia, podés hacerlo vos directamente.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Puedo reclamar si ya me dieron el alta médica?</summary>
                            <p class="mt-15 fs-09">Sí. El alta no cierra tu derecho a reclamar. Si quedaron secuelas, la ART tiene que evaluar tu incapacidad y pagarte la indemnización que corresponda, aunque ya hayas vuelto a trabajar.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Qué pasa si la ART rechaza mi accidente laboral?</summary>
                            <p class="mt-15 fs-09">No lo aceptes como definitivo. Un rechazo se puede <a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">cuestionar ante la Comisión Médica</a> y otras instancias de la Superintendencia de Riesgos del Trabajo (SRT). Lo importante es actuar rápido y tener documentación. Muchas decisiones de rechazo terminan revirtiéndose.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Cuánto tarda una indemnización por accidente laboral?</summary>
                            <p class="mt-15 fs-09">Depende de cada caso: el tipo de lesión, cuánto dura el tratamiento, cuándo te dan el alta y cuándo la ART avanza con la evaluación de incapacidad. En general puede llevar varios meses. Si la ART no avanza, hay formas de empujar el trámite.</p>
                        </details>

                        <details class="mb-20 bg-gris p-25 border-radius-15">
                            <summary class="fw-700 pointer">¿Un accidente in itinere tiene los mismos derechos que uno laboral?</summary>
                            <p class="mt-15 fs-09">Sí. Si te accidentaste yendo o volviendo del trabajo por el recorrido de siempre, tenés derecho a atención médica completa y a la indemnización si quedaron secuelas, igual que si el accidente hubiera pasado dentro de la empresa.</p>
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
