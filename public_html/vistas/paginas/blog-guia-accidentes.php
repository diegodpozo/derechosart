<?php
/**
 * VISTA: GUIA 2026 ACCIDENTES LABORALES (ARTICULO DE BLOG)
 */
?>

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">
        
        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">
            
            <?php include __DIR__ . '/../blog/cabecera-articulo.php'; ?>

            <section class="articulo-contenido-texto mt-50">
                
                <!-- SECCION 1 -->
                <div id="que-es-accidente" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">1</span> Qué es un accidente laboral</h2>
                    <p>Un accidente laboral es cualquier cosa que te pase de forma repentina mientras estás trabajando o haciendo algo que tu trabajo te pidió hacer, y que te cause una lesión.</p>
                    <p>No hace falta que sea algo espectacular. Puede ser una caída, un golpe, una quemadura o un sobreesfuerzo. Si pasó mientras trabajabas, puede estar cubierto por la ART de tu empleador.</p>
                    
                    <div class="recuadro-ejemplos mt-30 bg-gris p-30 border-radius-20">
                        <h4 class="mb-20"><?= render_icon('calendar-day-solid', 'mr-10') ?> Ejemplos frecuentes:</h4>
                        <div class="grid-iconos-blog">
                            <div class="item-ejemplo">
                                <?= render_icon('person-falling', 'fs-2') ?>
                                <span>Te caíste de una escalera o andamio</span>
                            </div>
                            <div class="item-ejemplo">
                                <?= render_icon('box', 'fs-2') ?>
                                <span>Te lastimaste cargando o moviendo peso</span>
                            </div>
                            <div class="item-ejemplo">
                                <?= render_icon('hammer', 'fs-2') ?>
                                <span>Te golpeaste con una máquina o herramienta</span>
                            </div>
                            <div class="item-ejemplo">
                                <?= render_icon('fire', 'fs-2') ?>
                                <span>Sufriste una quemadura en el trabajo</span>
                            </div>
                            <div class="item-ejemplo">
                                <?= render_icon('bolt', 'fs-2') ?>
                                <span>Tuviste una descarga eléctrica</span>
                            </div>
                            <div class="item-ejemplo">
                                <?= render_icon('clipboard-list', 'fs-2') ?>
                                <span>Te accidentaste haciendo una tarea que te pidió tu jefe</span>
                            </div>
                        </div>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon"><?= render_icon('alert-circle-outline', 'fs-2 txt-amarillo') ?></div>
                        <p class="m-0 fs-09"><strong>Lo más importante del primer día:</strong> Cuanto antes lo informes, más fácil va a ser demostrar que el accidente ocurrió mientras trabajabas. No esperes días para avisarle a la ART o a tu empleador.</p>
                    </div>
                </div>

                <!-- SECCION 2 -->
                <div id="accidente-itinere" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">2</span> Qué es un accidente in itinere (y por qué también te cubre)</h2>
                    <p>Muchas personas creen que la ART solo cubre lo que pasa dentro del trabajo. Pero si te accidentaste yendo o volviendo del trabajo por el camino de siempre, también podés tener derecho a atención médica e indemnización. Eso se llama accidente in itinere.</p>
                    
                    <div class="recuadro-ejemplos mt-30 bg-gris p-30 border-radius-20">
                        <h4 class="mb-20"><?= render_icon('calendar-day-solid', 'mr-10') ?> Algunos ejemplos:</h4>
                        <ul class="lista-items-blog">
                            <li><?= render_icon('car', 'mr-10') ?> Un choque de auto o moto camino al trabajo</li>
                            <li><?= render_icon('person-walking', 'mr-10') ?> Una caída en la calle en el trayecto habitual</li>
                            <li><?= render_icon('bicycle', 'mr-10') ?> Un accidente en bicicleta volviendo a tu casa</li>
                            <li><?= render_icon('bus', 'mr-10') ?> Una lesión en el transporte público en tu recorrido de siempre</li>
                        </ul>
                    </div>

                    <!-- CASO REAL (EMBED) -->
                    <div class="mt-40">
                        <h4 class="mb-20"><?= render_icon('play', 'mr-10') ?> CASO REAL — Marcos cobró 15 millones</h4>
                        <div class="embed-video-blog border-radius-20 overflow-hidden">
                            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DTQn_khEfn1/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;"></blockquote>
                        </div>
                        <p class="mt-20 fs-09 txt-gris-medio italic">En este caso, la ART pagó por un robo que fue en el trayecto de la casa al lugar del trabajo de nuestro cliente, Marcos sufrió un intento de robo mientras esperaba el colectivo en la parada para ir a su trabajo, allí fue interceptado por los ladrones e instintivamente se resistió lesionando su rodilla, la ART cubrió el siniestro y le pagó una indemnización de más de 15 millones de pesos.</p>
                    </div>
                </div>

                <!-- SECCION 3 -->
                <div id="como-denunciar" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">3</span> Cómo hacer la denuncia a la ART paso a paso</h2>
                    <p>La denuncia es el primer paso. Si tu empleador no la hace, vos podés hacerla directamente. No necesitás un abogado para esto, pero sí tenés que hacerla lo antes posible.</p>
                    
                    <div class="pasos-denuncia mt-30">
                        <h4 class="mb-20"><?= render_icon('phone', 'mr-10') ?> Cómo podés denunciar:</h4>
                        <ul class="lista-items-blog no-icons">
                            <li><strong>Por teléfono:</strong> llamando a la ART de tu empresa</li>
                            <li><strong>Por mail:</strong> con alguna constancia de envío</li>
                            <li><strong>Por telegrama gratuito:</strong> desde cualquier sucursal del Correo Argentino</li>
                        </ul>
                    </div>

                    <div class="tabla-plazos mt-40">
                        <h4 class="mb-20"><?= render_icon('magnifying-glass', 'mr-10') ?> Qué pasa después de que avisás:</h4>
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
                        <div class="alerta-icon"><?= render_icon('alert-circle-outline', 'fs-2 txt-amarillo') ?></div>
                        <p class="m-0 fs-09"><strong>No esperes para denunciar:</strong> Uno de los errores más comunes es seguir trabajando con dolor o esperar varios días antes de avisar. Cada día que pasa hace más difícil demostrar que el accidente pasó mientras trabajabas.</p>
                    </div>
                </div>

                <!-- SECCION 4 -->
                <div id="cobertura-art" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">4</span> Qué tiene que cubrir la ART durante el tratamiento</h2>
                    <p>Una vez que la ART acepta el accidente, tiene la obligación de cubrir todo lo que necesitás para recuperarte. No deberías pagar nada de tu bolsillo por esto.</p>
                    
                    <div class="grid-iconos-blog mt-30">
                        <div class="item-ejemplo">
                            <?= render_icon('hospital', 'fs-2') ?>
                            <span>Consultas médicas y controles</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('file-medical', 'fs-2') ?>
                            <span>Estudios: radiografías, resonancias, tomografías</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('pills', 'fs-2') ?>
                            <span>Medicamentos relacionados con la lesión</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('bone', 'fs-2') ?>
                            <span>Rehabilitación y kinesiología</span>
                        </div>
                        <div class="item-ejemplo">
                            <?= render_icon('van-shuttle', 'fs-2') ?>
                            <span>Traslados vinculados al tratamiento</span>
                        </div>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <?= render_icon('camera', 'fs-15 txt-amarillo') ?>
                        <p class="m-0 fs-09 italic"><strong>Guardá todo desde el primer día:</strong> Sacá foto a cada turno, cada receta, cada estudio. Más adelante puede ser clave para tu reclamo.</p>
                    </div>
                </div>

                <!-- SECCION 5 -->
                <div id="alta-con-dolor" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">5</span> Qué hacer si te dan el alta pero seguís con dolor</h2>
                    <p>El alta médica es cuando la ART dice que el tratamiento terminó. Pero eso no significa que ya no podés reclamar nada. Podés estar en dos situaciones muy distintas:</p>
                    
                    <div class="situacion-blog p-25 bg-verde-claro border-radius-15 mb-20">
                        <p class="m-0"><?= render_icon('check', 'txt-verde mr-10') ?> <strong>Si te recuperaste bien:</strong> Podés volver a trabajar. Pero si quedaron secuelas, la ART tiene que evaluar qué tanto te afectaron y pagarte una indemnización por eso.</p>
                    </div>

                    <div class="alerta-importante p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon"><?= render_icon('alert-circle-outline', 'fs-2 txt-amarillo') ?></div>
                        <p class="m-0 fs-09"><strong>Si seguís con dolor o limitaciones:</strong> Podés pedir que te reincorporen al tratamiento. Si la ART se niega, hay formas de reclamar ante la Superintendencia de Riesgos del Trabajo (SRT).</p>
                    </div>

                    <!-- REEL 2 -->
                    <div class="mt-40">
                        <div class="embed-video-blog border-radius-20 overflow-hidden">
                            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DV9GHBukWcM/" data-instgrm-version="14" style="margin: 0 auto; width: 100%;"></blockquote>
                        </div>
                        <p class="mt-20 fs-09 txt-gris-medio italic">"¿ACEPTASTE EL ALTA MEDICA CON DOLOR?" Muchas personas creen que el alta médica cierra todo. Si te dieron el alta médica y seguís con dolor podés pedirle más tratamiento a tu ART de diversas maneras. Pero bajo ningún concepto el alta no borra tus derechos.</p>
                    </div>
                </div>

                <!-- SECCION 6 -->
                <div id="como-funciona-indemnizacion" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">6</span> Cómo funciona la indemnización por accidente laboral</h2>
                    <p><?= render_icon('sack-dollar', 'txt-amarillo mr-10') ?> Si el accidente te dejó secuelas permanentes —aunque sean parciales— tenés derecho a cobrar una indemnización. Esto existe para compensar el impacto que la lesión tuvo en tu vida y en tu capacidad para trabajar.</p>
                    
                    <div class="tabla-plazos mt-30">
                        <h4 class="mb-20"><?= render_icon('chart-simple', 'mr-10') ?> Qué se tiene en cuenta para calcularla:</h4>
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
                        <div class="alerta-icon"><?= render_icon('alert-circle-outline', 'fs-2 txt-amarillo') ?></div>
                        <p class="m-0 fs-09"><strong>No aceptes el primer número sin revisarlo:</strong> La ART no puede decidir sola cuánto vale tu lesión. El porcentaje se determina en la Comisión Médica. Si ese número no refleja lo que realmente te pasó, hay formas de cuestionarlo. Unos pocos puntos de diferencia pueden representar miles de pesos.</p>
                    </div>

                    <div class="tip-blog mt-30 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <?= render_icon('circle-question', 'fs-15 txt-amarillo') ?>
                        <p class="m-0 fs-09 italic"><strong>¿Qué pasa si la ART no te llama después del alta?</strong> Si pasan los plazos legales y la ART no avanza con tu evaluación, no te quedes esperando. Existen herramientas para impulsar el trámite. Los plazos de prescripción corren igual.</p>
                    </div>
                </div>

                <!-- SECCION 7 -->
                <div id="art-rechaza" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">7</span> Qué hacer si la ART rechaza tu accidente laboral</h2>
                    <p>😟 Un rechazo genera mucha angustia. Pero la realidad es que no significa que perdiste. Las ART rechazan accidentes por distintos motivos, y muchas veces se puede revertir esa decisión.</p>
                    
                    <div class="recuadro-ejemplos mt-30 bg-gris p-30 border-radius-20">
                        <h4 class="mb-20"><?= render_icon('location-dot', 'mr-10') ?> Por qué suelen rechazar:</h4>
                        <ul class="lista-items-blog">
                            <li><?= render_icon('clock', 'mr-10') ?> Dicen que el accidente no pasó durante la jornada laboral</li>
                            <li><?= render_icon('road', 'mr-10') ?> Discuten el recorrido en un accidente in itinere</li>
                            <li><?= render_icon('file-circle-xmark', 'mr-10') ?> Alegan que no hay suficientes pruebas</li>
                            <li><?= render_icon('link-slash', 'mr-10') ?> Cuestionan la relación entre lo que te pasó y tu trabajo</li>
                        </ul>
                    </div>

                    <div class="alerta-importante mt-30 p-25 bg-amarillo-opaco border-radius-15 flex-start gap-20">
                        <div class="alerta-icon"><?= render_icon('alert-circle-outline', 'fs-2 txt-amarillo') ?></div>
                        <p class="m-0 fs-09"><strong>El error más común:</strong> aceptar el rechazo y no hacer nada. Muchas personas reciben el rechazo de la ART y lo dan por perdido. Pero un rechazo no siempre quiere decir que la ART tiene razón. Lo importante es actuar rápido y juntar toda la documentación que tengas.</p>
                    </div>
                </div>

                <!-- SECCION 8 -->
                <div id="errores-comunes" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">8</span> Errores que perjudican el reclamo (y cómo evitarlos)</h2>
                    <p>Muchos trabajadores complican su propio reclamo sin darse cuenta, simplemente porque nadie les explicó qué no hacer.</p>
                    
                    <ul class="lista-items-blog blog-errores mt-30">
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> No denunciar el accidente o esperar demasiado tiempo</li>
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> Seguir trabajando lastimado sin avisar nada</li>
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> No guardar estudios, recetas ni certificados médicos</li>
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> Firmar papeles de la ART sin que nadie te los explique antes</li>
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> Aceptar sin cuestionar el porcentaje de incapacidad que fijó la ART</li>
                        <li><?= render_icon('circle-xmark', 'txt-rojo mr-10') ?> Creer que el alta médica o el primer rechazo son el final del reclamo</li>
                    </ul>
                </div>

                <!-- SECCION 9 -->
                <div id="documentacion" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">9</span> Qué documentación guardar desde el primer día</h2>
                    <p>📂 Parece un detalle menor, pero puede ser lo más importante de todo. Juntá todo en una carpeta física o digital desde el minuto uno.</p>
                    
                    <ul class="lista-items-blog blog-doc mt-30">
                        <li><?= render_icon('file-lines', 'mr-10') ?> Estudios: radiografías, resonancias, tomografías</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Recetas y certificados médicos</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Informes de kinesiología y rehabilitación</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Constancias de atención en los centros de la ART</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Mails o mensajes que intercambiaste con la ART</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Telegramas enviados o recibidos</li>
                        <li><?= render_icon('camera', 'mr-10') ?> Fotos de las lesiones si las tenés</li>
                        <li><?= render_icon('file-lines', 'mr-10') ?> Copia de la denuncia del accidente</li>
                    </ul>

                    <div class="tip-blog mt-40 p-20 bg-gris border-radius-15 flex-start gap-20">
                        <?= render_icon('lightbulb', 'fs-15 txt-amarillo') ?>
                        <p class="m-0 fs-09 italic"><strong>Un consejo simple:</strong> Sacá foto a todo con el celular y guardalo en un álbum o carpeta de Drive. Muchas personas llegan a consulta meses después sin poder encontrar nada, y eso complica mucho las cosas.</p>
                    </div>
                </div>

                <!-- SECCION 10 -->
                <div id="preguntas-frecuentes" class="seccion-bloque mb-60">
                    <h2 class="titulo-seccion-blog"><span class="num-sec">10</span> Preguntas frecuentes sobre accidentes laborales</h2>
                    
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
                            <p class="mt-15 fs-09">No lo aceptes como definitivo. Un rechazo se puede cuestionar ante la Superintendencia de Riesgos del Trabajo (SRT) y otras instancias. Lo importante es actuar rápido y tener documentación. Muchas decisiones de rechazo terminan revirtiéndose.</p>
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
                </div>

                <!-- CIERRE -->
                <div class="cierre-articulo py-40 border-top mt-50">
                    <div class="flex-start gap-20 mb-30">
                        <?= render_icon('whatsapp', 'fs-3 txt-verde') ?>
                        <div>
                            <h3 class="m-0">¿No sabés cómo seguir después de tu accidente?</h3>
                            <p class="m-0 txt-gris-medio">Cada caso es diferente. Escribinos y te contamos qué opciones tenés, sin compromiso y sin costo. Más de 8 años ayudando a trabajadores.</p>
                        </div>
                    </div>
                    <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo fs-11">
                        Consultar por WhatsApp &rarr;
                    </a>
                    
                    <div class="articulo-footer-meta mt-50 flex-between fs-08 txt-gris-medio">
                        <span><?= render_icon('check-double', 'txt-verde mr-5') ?> Solo cobramos si vos cobrás.</span>
                        <span class="italic">⚖️ DerechosART · Estudio Jurídico Laboral · derechosart.com.ar · Guía 2026</span>
                    </div>
                </div>

            </section>

        </article>

        <!-- SIDEBAR DERECHO -->
        <?php include __DIR__ . '/../blog/sidebar.php'; ?>

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
