<?php
/**
 * VISTA: PREGUNTA FRECUENTE INDIVIDUAL (HOJA DE LA ARQUITECTURA DE 3 NIVELES)
 * NIVEL 3: UNICA PREGUNTA CON RESPUESTA COMPLETA + VARIANTES + FAQPAGE INDIVIDUAL.
 * LOS NIVELES 1-2 (INDICES) VIVEN EN preguntas-frecuentes.php Y APUNTAN ACA.
 * CONTENIDO => SIN DUPLICADO: LA RESPUESTA COMPLETA VIVE SOLO EN ESTA HOJA.
 */

// URL DE LA HOJA PARA SCHEMA Y LINKS
$catSlugHoja = $slugsCategoria[$categoriaActual] ?? '';
$slugPreguntaHoja = $slugsPregunta[$pregunta['id']] ?? '';
$urlHoja = BASE_URL . 'preguntas-frecuentes/' . $catSlugHoja . '/' . $slugPreguntaHoja;
$urlCat = BASE_URL . 'preguntas-frecuentes/' . $catSlugHoja;

// FAQPAGE INDIVIDUAL (UNA SOLA PREGUNTA, RESPUESTA COMPLETA VISIBLE EN ESTA PAGINA)
$textoRespuestaHoja = htmlToSchemaText($pregunta['respuesta_completa']);
if (!empty($pregunta['preguntas_alternativas'])) {
    $textoRespuestaHoja .= ' Otras formas de buscar esta pregunta: ' . implode(', ', $pregunta['preguntas_alternativas']) . '.';
}
$schemaFAQHoja = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'dateModified' => date('Y-m-d'),
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => $pregunta['pregunta'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $textoRespuestaHoja
            ]
        ]
    ]
];
$schemaFAQHojaJSON = json_encode($schemaFAQHoja, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>

<script type="application/ld+json">
<?= $schemaFAQHojaJSON ?>
</script>

<!-- Speakable Schema (Voice Search / GEO) -->
<script type="application/ld+json">
<?= generateSpeakableSchema($urlHoja, ['h1', '.articulo-lead']) ?>
</script>

<link rel="stylesheet" href="<?= BASE_URL ?>publico/css/faq-details.css">

<main class="blog-container fade-in">
    <div class="contenedor grid-blog">

        <!-- CABECERA CON H1 -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>inicio">Inicio</a> &gt;
                    <a href="<?= BASE_URL ?>preguntas-frecuentes">Preguntas Frecuentes</a> &gt;
                    <a href="<?= $urlCat ?>"><?= htmlspecialchars($categoriaActual) ?></a> &gt;
                    <span class="txt-amarillo"><?= htmlspecialchars($pregunta['pregunta']) ?></span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15"><?= htmlspecialchars($categoriaActual) ?></span>
                <h1 class="articulo-titulo"><?= htmlspecialchars($pregunta['pregunta']) ?></h1>

                <p class="articulo-lead"><?= htmlspecialchars($pregunta['respuesta_corta']) ?></p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('circle-question', 'mr-5') ?> Pregunta frecuente</span>
                    <span><?= render_icon('list', 'mr-5') ?> <?= htmlspecialchars($categoriaActual) ?></span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Actualizado: <?= date('d/m/Y') ?></span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DERECHO CON CATEGORIAS -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo">Categorias</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <li><a href="<?= BASE_URL ?>preguntas-frecuentes" class="<?= !$categoriaActual ? 'activo' : '' ?>">
                                <span class="nav-num"><?= (int)($totalPreguntas ?? 0) ?></span> Todas
                            </a></li>
                            <?php foreach ($categorias as $cat): ?>
                                <?php if (!isset($slugsCategoria[$cat])) continue; ?>
                                <li><a href="<?= BASE_URL ?>preguntas-frecuentes/<?= $slugsCategoria[$cat] ?>"
                                       class="<?= ($categoriaActual === $cat) ? 'activo' : '' ?>">
                                    <span class="nav-num"><?= (int)($conteoCategorias[$cat] ?? 0) ?></span> <?= htmlspecialchars($cat) ?>
                                </a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </details>

                <?php
                    $titulo = "¿Tenés una consulta?";
                    $descripcion = "Respondemos sin cargo.";
                    $ancho = "22";
                    $margen_top = "1.2";
                    include __DIR__ . '/../componentes/cta-whatsapp.php';
                ?>

                <p class="mt-20 fs-07 txt-gris-medio centro">
                    <span style="font-size: 2em;">&#10004;</span> Solo cobramos si vos cobras.
                </p>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL: RESPUESTA COMPLETA -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <div class="seccion-bloque">
                    <div class="respuesta">
                        <div class="italic txt-gris mb-10" style="font-style: italic;"><?= htmlspecialchars($pregunta['respuesta_corta']) ?></div>
                        <div><?= $pregunta['respuesta_completa'] ?></div>

                        <?php if (!empty($pregunta['definiciones_relacionadas'])): ?>
                            <div class="mt-15 fs-08 txt-gris-medio">
                                <strong>Temas relacionados:</strong>
                                <?= implode(', ', array_map(function($d) {
                                    return '<a href="' . BASE_URL . 'tabla-incapacidad">' . htmlspecialchars(str_replace('-', ' ', $d)) . '</a>';
                                }, $pregunta['definiciones_relacionadas'])) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($pregunta['lesiones_relacionadas'])): ?>
                            <div class="mt-10 fs-08 txt-gris-medio">
                                <strong>Lesiones:</strong>
                                <?= implode(', ', array_map(function($l) {
                                    return '<a href="' . BASE_URL . 'baremo/lesion-' . $l . '">' . htmlspecialchars($l) . '</a>';
                                }, $pregunta['lesiones_relacionadas'])) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($pregunta['preguntas_alternativas'])): ?>
                            <div class="mt-15 fs-08 txt-gris-medio" style="border-top: 1px solid var(--gris-medio); padding-top: 0.75rem;">
                                <strong><?= render_icon('magnifying-glass', 'mr-5') ?> También se busca como:</strong>
                                <span class="variantes-busqueda"><?= htmlspecialchars(implode(' · ', $pregunta['preguntas_alternativas'])) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- PREGUNTAS RELACIONADAS DE LA MISMA CATEGORIA -->
                <?php if (!empty($preguntasRelacionadas)): ?>
                    <div class="seccion-bloque mt-40">
                        <h2 class="titulo-seccion-blog">Más preguntas sobre <?= htmlspecialchars(mb_strtolower($categoriaActual, 'UTF-8')) ?></h2>
                        <ul class="lista-items-blog mt-20">
                            <?php foreach ($preguntasRelacionadas as $rel): ?>
                                <li>
                                    <a href="<?= BASE_URL ?>preguntas-frecuentes/<?= $catSlugHoja ?>/<?= $slugsPregunta[$rel['id']] ?>">
                                        <?= htmlspecialchars($rel['pregunta']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= $urlCat ?>" class="link-volver-indice mt-30">
                            <?= render_icon('arrow-up', 'mr-5') ?> Volver a la categoría
                        </a>
                    </div>
                <?php endif; ?>

            </section>

            <?php
                $titulo = "¿Estás en una situación parecida?";
                $descripcion = "Consultá gratis con una abogada especialista en ART.";
                $ancho = "100%";
                $margen_top = "1.2";
                include __DIR__ . '/../componentes/cta-whatsapp.php';
            ?>

            <div class="articulo-footer-meta mt-50">
                <span><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#10004;</span> Solo cobramos si vos cobras.</span>
                <span class="italic" style="font-style:italic;"><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#9878;</span> DerechosART &middot; derechosart.com.ar</span>
            </div>
        </article>

    </div>
</main>