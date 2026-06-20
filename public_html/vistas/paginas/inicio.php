<?php
/**
 * VISTA DE INICIO - RECREACION ESTETICA MODERNA (OPTIMIZADA SEO)
 */
?>

<main class="fade-in">

    <!-- 1. SECCION HERO -->
    <section class="contenedor hero-v2">
        <article class="hero-v2-texto">
            <?php 
                $h1_texto = "Abogados Especialistas en Accidentes de Trabajo y Despidos";
                if (defined('ZONA_H1_ESPECIAL')) {
                    $h1_texto = ZONA_H1_ESPECIAL;
                } elseif (defined('ZONA_NOMBRE_SEO') && defined('ZONA_ES_CABA_GBA') && !ZONA_ES_CABA_GBA) {
                    $h1_texto = "Abogados Especialistas en Accidentes de Trabajo";
                }
            ?>
            <h1 class="titulo-hero"><?php echo $h1_texto; ?> <span class="subrayado-amarillo">DerechosART</span></h1>
            <p><strong>Estudio Jurídico Laboral en Argentina</strong><br>Contamos con más de 8 años de experiencia ayudando a los trabajadores en sus <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">reclamos por accidentes laborales</a> y <a href="<?= BASE_URL ?>despidos" style="color:inherit;text-decoration:none;">despidos</a>.</p>
            <a href="https://wa.me/5491124786144" target="_blank" class="btn btn-amarillo">
                <?= render_icon('whatsapp', 'mr-20', 'transform: scale(2.0);') ?> Contáctanos
            </a>
        </article>
        
        <article class="hero-v2-card">
            <ul>
                <li>
                    <article class="icon-box"><?= render_icon('comments', '', '', '#000000') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te escuchamos</span>
                        <p>Entendemos tu caso y tus dudas.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('file-lines', '', '', '#000000') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te explicamos</span>
                        <p>En lenguaje claro y sin palabras complicadas.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('scale-balanced', '', '', '#000000') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Te acompañamos</span>
                        <p>En todo el proceso, paso a paso.</p>
                    </article>
                </li>
                <li>
                    <article class="icon-box"><?= render_icon('check', '', '', '#000000') ?></article>
                    <article>
                        <span class="fw-800 fs-115 display-block mb-5">Solo cobramos si vos cobrás.</span>
                        <p>Sin adelantos, sin riesgos.</p>
                    </article>
                </li>
            </ul>
        </article>
    </section>

    <?php if(defined('ZONA_TEXTO_DINAMICO')): ?>
    <!-- 1.5 SECCION DE TEXTO DINAMICO PARA LANDINGS -->
    <section class="py-40 centro bg-gris-claro">
        <div class="contenedor max-w-800">
            <h2 class="fs-24 lh-14 mb-20" style="color: black !important; font-weight: 400;">
                <?php 
                    $texto = ZONA_TEXTO_DINAMICO;
                    $zona_a_buscar = defined('ZONA_NOMBRE_BUSQUEDA') ? ZONA_NOMBRE_BUSQUEDA : ZONA_NOMBRE_SEO;
                    $zona_resaltada = '<span class="subrayado-amarillo">' . ZONA_NOMBRE_SEO . '</span>';
                    echo str_replace($zona_a_buscar, $zona_resaltada, $texto);
                ?>
            </h2>
            <?php if(defined('ZONA_CONTENIDO_UNICO') && ZONA_CONTENIDO_UNICO): ?>
            <p class="txt-gris mt-20"><?= ZONA_CONTENIDO_UNICO ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- 2. SECCION ESTUDIO NO TRADICIONAL -->
    <section class="contenedor centro py-40">
        <h2><span class="subrayado-amarillo">Abogados Laboralistas:</span> Expertos en Reclamos de ART.</h2>
        <section class="grid-iconos mt-30">
            <article class="icono-item">
                <?= render_icon('circle-xmark-solid-full', '', '', '#000000') ?>
                <p><strong class="display-block-movil">Atención personalizada.</strong> Te explicamos todo en palabras simples para que entiendas tus derechos.</p>
            </article>
            <article class="icono-item">
                <?= render_icon('user-group-solid-full', '', '', '#000000') ?>
                <p><strong class="display-block-movil">No sos un número.</strong> Escuchamos tu caso y te acompañamos en cada etapa del <strong>reclamo administrativo o judicial</strong>.</p>
            </article>
            <article class="icono-item">
                <?= render_icon('hand-holding-heart-solid-full', '', '', '#000000') ?>
                <p><strong class="display-block-movil">Compromiso total.</strong> Estamos con vos desde la denuncia hasta el cobro de tu <strong><a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">indemnización máxima</a></strong>.</p>
            </article>
        </section>
        <h3 class="mt-30 fuente-manuscrita fs-18">Te asesoramos para que obtengas la <span class="subrayado-amarillo"><a href="<?= BASE_URL ?>calculadora-accidentes" style="color:inherit;text-decoration:none;">indemnización que te corresponde por ley</a>.</span></h3>
    </section>

    <!-- 3. SECCION PUNTOS DE DOLOR -->
    <section class="seccion-iconos py-40">
        <section class="contenedor">
            <?php if(!defined('ZONA_NOMBRE_SEO') || (defined('ZONA_ES_CABA_GBA') && ZONA_ES_CABA_GBA)): ?>
                <!-- TEXTO COMPLETO PARA LA HOME O CABA Y GBA -->
                <h2 class="titulo-seccion"><strong>¿Sufriste un accidente o despido?</strong> Entendemos tu situación.</h2>
            <?php else: ?>
                <!-- TEXTO SIMPLIFICADO PARA OTRAS LANDINGS DINAMICAS -->
                <h2 class="titulo-seccion"><strong>¿Sufriste un accidente?</strong> Entendemos tu situación.</h2>
            <?php endif; ?>
            <section class="grid-iconos mt-30">
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('face-frown', '', '', '#000000') ?></article>
                    <p>
                        <?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
                            ¿Te despidieron y necesitás saber tu <strong>liquidación final</strong> exacta?
                        <?php else: ?>
                            ¿Te lesionaste trabajando o en el trayecto? Es un <strong><a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">accidente in itinere</a></strong>.
                        <?php endif; ?>
                    </p>
                </article>
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('shield-halved', '', '', '#000000') ?></article>
                    <p>
                        <?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
                            ¿Recibiste un telegrama o te presionan para firmar una renuncia? <strong>Defendemos tus derechos</strong>.
                        <?php else: ?>
                            ¿La ART rechazó tu accidente o te dio el alta sin incapacidad? <strong><a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Podemos apelar</a></strong>.
                        <?php endif; ?>
                    </p>
                </article>
                <article class="icono-item">
                    <article class="circulo-icono"><?= render_icon('brain', '', '', '#000000') ?></article>
                    <p>
                        <?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
                            ¿Tenés dudas legales? Analizamos si se trata de un <strong>despido injustificado</strong>.
                        <?php else: ?>
                            ¿Nadie te explica cómo reclamar? Te guiamos ante la <strong><a href="<?= BASE_URL ?>comisiones-medicas" style="color:inherit;text-decoration:none;">Comisión Médica</a></strong>.
                        <?php endif; ?>
                    </p>
                </article>
            </section>
        </section>
    </section>

    <!-- 4. SECCION COMO FUNCIONA -->
    <section class="bg-gris py-40">
        <section class="contenedor">
            <h2 class="mb-30"><span class="subrayado-amarillo">Servicios Legales:</span> ¿Cómo podemos ayudarte con tu reclamo de ART?</h2>
            <section class="flex-between al-inicio">
                <article class="flex-1 min-w-300 mt-50">
                    <h3>¿En qué podemos ayudarte?</h3>
                    <ul class="mt-20 flex-column gap-10">
                        <?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'despidos'): ?>
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> <strong>Indemnizaciones por despido</strong></li>
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> Despido injustificado y trabajo no registrado (en negro)</li>
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> Telegramas laborales, SECLO</li>
                        <?php else: ?>
                            <!-- ACCIDENTES LABORALES -->
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> <strong>Accidentes laborales</strong></li>
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> Accidentes in itinere (camino a tu trabajo)</li>
                            <li><?= render_icon('circle-check', 'txt-amarillo', '', '#FFCC00') ?> <a href="<?= BASE_URL ?>enfermedades-profesionales" style="color:inherit;text-decoration:none;">Enfermedades profesionales</a></li>
                        <?php endif; ?>
                    </ul>
                    <p class="mt-20 txt-gris"><?php if(defined('ZONA_TIPO') && ZONA_TIPO === 'accidentes'): ?>Somos un equipo de abogados especialistas en derecho laboral, analizamos tu caso de manera gratuita para que puedas cobrar la mayor indemnización posible. También asesoramos en <a href="<?= BASE_URL ?>despidos" style="color:inherit;text-decoration:none;">despidos laborales</a>.<?php else: ?>Somos abogados especialistas en derecho laboral, te asesoramos sin cargo para que cobres la máxima indemnización posible. También asesoramos en <a href="<?= BASE_URL ?>accidentes-de-trabajo" style="color:inherit;text-decoration:none;">accidentes laborales</a>.<?php endif; ?></p>
                </article>
                
                <article class="flex-2 min-w-300 bg-hero-card p-40 border-radius-20 shadow-light relative">
                    <h3 class="centro"><strong><span class="subrayado-amarillo">¿Cómo funciona?</span></strong></h3>
                    <section class="pasos-horizontal mt-30 relative flex-between al-inicio">
                        <!-- LINEA PUNTEADA CONECTORA (AJUSTE DE GROSOR) -->
                        <article class="linea-conector"></article>
                        
                        <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                            <article class="circulo-blanco z-3"><?= render_icon('whatsapp', '', 'transform: scale(1.05);', '#000000') ?></article>
                            <article class="numero">1</article>
                            <p class="autor bg-transparent m-0 centro">Nos escribís</p>
                        </article>
                        <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                            <article class="circulo-blanco z-3"><?= render_icon('file-invoice-dollar-solid-full', '', 'transform: scale(1.05);', '#000000') ?></article>
                            <article class="numero">2</article>
                            <p class="autor bg-transparent m-0 centro">Analizamos tu caso gratis</p>
                        </article>
                        <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                            <article class="circulo-blanco z-3"><?= render_icon('lightbulb', '', 'transform: scale(1.05);', '#000000') ?></article>
                            <article class="numero">3</article>
                            <p class="autor bg-transparent m-0 centro">Te explicamos qué hacer</p>
                        </article>
                        <article class="paso-v2 relative z-2 bg-transparent p-0 flex-1 flex-column flex-center gap-15">
                            <article class="circulo-blanco z-3"><?= render_icon('user-check', '', 'transform: scale(1.05);', '#000000') ?></article>
                            <article class="numero">4</article>
                            <p class="autor bg-transparent m-0 centro">Te acompañamos en todo el proceso</p>
                        </article>
                    </section>
                    <section class="centro mt-30 relative z-2">
                        <span class="btn-capsula">
                            <?= render_icon('heart', 'mr-10', 'transform: scale(1.05);', '#FFCC00') ?> Solo cobramos si vos cobrás.
                        </span>
                    </section>
                </article>
            </section>


        </section>
    </section>

    <!-- 5. RESEÑAS DE GOOGLE -->
    <section class="py-40 bg-gris-claro">
        <section class="contenedor">
            <h2 class="centro">Opiniones sobre nuestro <span class="subrayado-amarillo">Estudio Jurídico de ART</span></h2>
            <section class="centro mt-20 mb-30">
                <div class="google-estrellas-centro mb-10">
                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                </div>
                <p><strong>4.9 / 5</strong> basado en más de 100 opiniones reales</p>
            </section>

            <section class="contenedor-slider-reseñas">
                <button class="slider-arrow prev" id="prev-btn" aria-label="Anterior"><?= render_icon('chevron-left', '', '', '#000000') ?></button>
                
                <div class="reseñas-track" id="reseñas-track">
                    <!-- RESEÑA 1 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Agus-Bebi-resena-derechosart.com.ar_.webp', 'Opinión sobre abogados de accidentes de trabajo - Agus Bebi', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Agus Bebi</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente atención, muy profesionales y humanos. Me ayudaron con todo mi trámite de ART."</p>
                    </div>

                    <!-- RESEÑA 2 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Emanuel-Galecki-resena-derechosart.com.ar_.webp', 'Reseña de indemnización ART - Emanuel Galecki', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Emanuel Galecki</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Super recomendables. Me explicaron todo claro y me acompañaron en cada paso del reclamo."</p>
                    </div>

                    <!-- RESEÑA 3 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Daiana-Noemi-Serrano-resena-derechosart.com.ar_.webp', 'Experiencia con abogados laboralistas - Daiana Serrano', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Daiana Serrano</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy conforme con el trato y el resultado. Se encargaron de todo y siempre me mantuvieron informada."</p>
                    </div>

                    <!-- RESEÑA 4 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Ivan-Brunello.webp', 'Consulta por accidente laboral - Ivan Brunello', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Ivan Brunello</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Grandes profesionales. Te dan la tranquilidad que necesitás en momentos difíciles."</p>
                    </div>

                    <!-- RESEÑA 5 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Paula-Tesseyre-resena-derechosart.webp', 'Abogadas especialistas en ART - Paula Tesseyre', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Paula Tesseyre</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Increíble el equipo de abogadas. Muy eficientes y dedicadas al trabajador."</p>
                    </div>

                    <!-- RESEÑA 6 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Tico-Molina-resena-derechosart.com.ar_.webp', 'Reclamo por accidente de trabajo - Tico Molina', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Tico Molina</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente estudio. Transparencia total desde el primer día. Los recomiendo sin dudar."</p>
                    </div>

                    <!-- RESEÑA 7 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Valentina-Lopez-resena-derechosart.com.ar_.webp', 'Reseña de Valentina López sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Valentina López</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy agradecida por la paciencia y la calidez humana. Excelentes abogadas."</p>
                    </div>

                    <!-- RESEÑA 8 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('nico-fontan-review.webp', 'Reseña de Nico Fontán sobre DerechosART', ['class' => 'google-user-img', 'width' => '45', 'height' => '45']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Nico Fontán</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Resolvieron mi caso mucho más rápido de lo que esperaba. Muy profesionales."</p>
                    </div>

                    <!-- RESEÑA 9 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Stella-maris-Novoa-review.webp', 'Reseña de Stella Maris sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Stella Maris</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente asesoramiento legal. Me sentí muy protegida por el equipo."</p>
                    </div>

                    <!-- RESEÑA 10 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Rodri-Nahuel.webp', 'Reseña de Rodri Nahuel sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Rodri Nahuel</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Atención de diez. Saben mucho y te explican para que uno entienda bien."</p>
                    </div>

                    <!-- RESEÑA 11 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Maria-Buktenica-resena-derechosart.com.ar_.webp', 'Reseña de Maria Buktenica sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Maria Buktenica</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy profesionales y responsables. Cumplieron con todo lo acordado."</p>
                    </div>

                    <!-- RESEÑA 12 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Jose-Cerda.webp', 'Reseña de Jose Cerda sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Jose Cerda</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Los mejores en accidentes laborales. No perdí tiempo y obtuve mi indemnización."</p>
                    </div>

                    <!-- RESEÑA 13 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Kiara-Zuviria-review.webp', 'Reseña de Kiara Zuviria sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Kiara Zuviria</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente trato y gestión. Se nota la experiencia que tienen."</p>
                    </div>

                    <!-- RESEÑA 14 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Carlos-Andres-Santacruz.webp', 'Reseña de Carlos Santacruz sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Carlos Santacruz</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy recomendables por su honestidad y compromiso con el cliente."</p>
                    </div>

                    <!-- RESEÑA 15 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Sandra-Birgy-1.webp', 'Reseña de Sandra Birgy sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Sandra Birgy</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Impecable la atención de las abogadas. Muy humanas y claras."</p>
                    </div>

                    <!-- RESEÑA 16 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('agustin-sanlar-review.webp', 'Reseña de Agustín Sanlar sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Agustín Sanlar</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente equipo. Me ayudaron a cobrar lo que me correspondía por ley."</p>
                    </div>

                    <!-- RESEÑA 17 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('norma-navarro-review.webp', 'Reseña de Norma Navarro sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Norma Navarro</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy agradecida con Derechos ART por su excelente trabajo y acompañamiento."</p>
                    </div>

                    <!-- RESEÑA 18 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('ernesto-allesandrini-review.webp', 'Reseña de Ernesto Allesandrini sobre DerechosART', ['class' => 'google-user-img', 'width' => '45', 'height' => '45']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Ernesto Allesandrini</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Muy buena experiencia. Me asesoraron gratis y me guiaron en todo el proceso."</p>
                    </div>

                    <!-- RESEÑA 19 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Rebeca-Fuertes-review.webp', 'Reseña de Rebeca Fuertes sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Rebeca Fuertes</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Atención profesional y personalizada. Muy conformes con el resultado final."</p>
                    </div>

                    <!-- RESEÑA 20 -->
                    <div class="tarjeta-reseña-google">
                        <div class="google-header">
                            <?= render_img('Mora-Mendez.webp', 'Reseña de Mora Mendez sobre DerechosART', ['class' => 'google-user-img']) ?>
                            <div class="google-user-info">
                                <span class="fw-700">Mora Mendez</span>
                                <div class="google-estrellas">
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                    <?= render_icon('star', '', 'transform: scale(1.05);', '#FFCC00') ?>
                                </div>
                            </div>
                        </div>
                        <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                        <p class="google-texto">"Excelente gestión de mi caso. Son abogadas muy capacitadas y amables."</p>
                    </div>
                </div>

                <button class="slider-arrow next" id="next-btn" aria-label="Siguiente"><?= render_icon('chevron-right', '', '', '#000000') ?></button>
            </section>
            
            <section class="centro mt-60">
                <a href="https://www.google.com.ar/maps/place/Derechos+ART+Abogados+-+Accidentes+de+trabajo/@-34.6061376,-58.3975977,17z/data=!3m1!4b1!4m6!3m5!1s0x95bccbcdd64fb57f:0x905c231692a97c49!8m2!3d-34.6061376!4d-58.3950228!16s%2Fg%2F11w8jvhmkp" target="_blank" class="btn btn-amarillo">
                    VER MÁS RESEÑAS EN GOOGLE
                </a>
            </section>
        </section>
    </section>
</main>
