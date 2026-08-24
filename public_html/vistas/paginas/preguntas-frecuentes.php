<?php
/**
 * VISTA: PREGUNTAS FRECUENTES IA - 380 PREGUNTAS
 * CARGA DINAMICA DESDE preguntas_ia.php (PaginasControlador)
 */
$totalPreguntas = count($preguntas);
$totalCategorias = count($categorias);

// SCHEMA FAQPAGE - PREGUNTAS VISIBLES EN ESTA PAGINA PARA SEO/GEO
$schemaFAQ = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'dateModified' => date('Y-m-d'),
    'mainEntity' => []
];

// Incluir solo las preguntas mostradas (todas en el index, solo la categoria en subpaginas)
foreach ($preguntasFiltradas as $p) {
    $schemaFAQ['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $p['pregunta'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => htmlToSchemaText($p['respuesta_completa'])
        ]
    ];
}

$schemaJSON = json_encode($schemaFAQ, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>

<script type="application/ld+json">
<?= $schemaJSON ?>
</script>

<!-- Speakable Schema (Voice Search / GEO) -->
<script type="application/ld+json">
<?= generateSpeakableSchema(BASE_URL . 'preguntas-frecuentes' . ($categoriaActual ? '/' . $slugsCategoria[$categoriaActual] : ''), ['h1', '.articulo-lead']) ?>
</script>

<link rel="stylesheet" href="<?= BASE_URL ?>publico/css/faq-details.css">

<main class="blog-container fade-in">
    <p class="tl-dr"><?= $categoriaActual
        ? count($preguntasFiltradas) . " preguntas y respuestas sobre " . htmlspecialchars($categoriaActual) . ": derechos, trámites, indemnizaciones y todo lo que necesitás saber ante la ART."
        : "Más de 380 preguntas y respuestas sobre ART, accidentes de trabajo, indemnizaciones, comisiones médicas, alta médica y trámites SRT. Encontrá la respuesta a tu duda."
    ?></p>
    <div class="contenedor grid-blog">

        <!-- CABECERA CON H1 -->
        <div class="articulo-header-wrapper">
            <header class="articulo-header">
                <nav class="breadcrumb-blog mb-20">
                    <a href="<?= BASE_URL ?>inicio">Inicio</a> &gt;
                    <a href="<?= BASE_URL ?>faq">FAQ</a> &gt;
                    <span class="txt-amarillo">Preguntas Frecuentes</span>
                </nav>

                <span class="tag-categoria bg-amarillo mb-15">GUIA COMPLETA</span>
                <h1 class="articulo-titulo"><?= $categoriaActual ? htmlspecialchars($categoriaActual) : 'Tus Preguntas sobre ART' ?></h1>

                <p class="articulo-lead"><?= $categoriaActual
                    ? "Mostrando " . count($preguntasFiltradas) . " preguntas sobre " . htmlspecialchars($categoriaActual) . "."
                    : "Respuestas claras a $totalPreguntas preguntas sobre accidentes laborales, ART, comisiones médicas y baremo 2026."
                ?></p>

                <div class="articulo-meta mt-30 py-15 border-top border-bottom flex-start gap-30 fs-08 txt-gris-medio">
                    <span><?= render_icon('circle-question', 'mr-5') ?> <?= $totalPreguntas ?> preguntas</span>
                    <span><?= render_icon('list', 'mr-5') ?> <?= $totalCategorias ?> categorias</span>
                    <span><?= render_icon('clock-solid', 'mr-5') ?> Actualizado: <?= date('d/m/Y') ?></span>
                </div>
            </header>
        </div>

        <!-- SIDEBAR DERECHO -->
        <aside class="blog-sidebar">
            <div class="sidebar-sticky">
                <details class="sidebar-acordeon-movil" open>
                    <summary class="sidebar-titulo">Categorias</summary>
                    <nav class="sidebar-nav">
                        <ul>
                            <li><a href="<?= BASE_URL ?>preguntas-frecuentes" class="<?= !$categoriaActual ? 'activo' : '' ?>">
                                <span class="nav-num"><?= $totalPreguntas ?></span> Todas
                            </a></li>
                            <?php foreach ($categorias as $cat): ?>
                                <?php
                                    $catCount = 0;
                                    foreach ($preguntas as $p) {
                                        if ($p['categoria'] === $cat) $catCount++;
                                    }
                                ?>
                                <li><a href="<?= BASE_URL ?>preguntas-frecuentes/<?= $slugsCategoria[$cat] ?? urlencode(str_replace(' ', '-', strtolower($cat))) ?>"
                                       class="<?= ($categoriaActual === $cat) ? 'activo' : '' ?>">
                                    <span class="nav-num"><?= $catCount ?></span> <?= htmlspecialchars($cat) ?>
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

        <!-- CONTENIDO PRINCIPAL -->
        <article class="articulo-cuerpo">
            <section class="articulo-contenido-texto mt-50">

                <?php
                // AGRUPAR POR CATEGORIA
                $categoriasAgrupadas = [];
                foreach ($preguntasFiltradas as $p) {
                    $cat = $p['categoria'];
                    if (!isset($categoriasAgrupadas[$cat])) {
                        $categoriasAgrupadas[$cat] = [];
                    }
                    $categoriasAgrupadas[$cat][] = $p;
                }

                $numSec = 0;
                foreach ($categoriasAgrupadas as $cat => $pregs):
                    $numSec++;
                ?>
                    <div id="<?= strtolower(str_replace(' ', '-', $cat)) ?>" class="seccion-bloque">
                        <h2 class="titulo-seccion-blog">
                            <span class="num-sec"><?= $numSec ?></span>
                            <?= htmlspecialchars($cat) ?: 'Preguntas Adicionales' ?>
                        </h2>

                        <p class="txt-gris-medio fs-09 mb-20">
                            <?= count($pregs) ?> preguntas<?= $cat ? ' sobre ' . htmlspecialchars(strtolower($cat)) : '' ?>.
                        </p>

                        <section class="mt-0 mb-40">
                            <?php foreach ($pregs as $i => $preg): ?>
                                <details>
                                    <summary>
                                        <span class="faq-pregunta-titulo"><?= htmlspecialchars($preg['pregunta']) ?></span>
                                    </summary>
                                    <article class="respuesta">
                                         <div class="italic txt-gris mb-10" style="font-style: italic;"><?= htmlspecialchars($preg['respuesta_corta']) ?></div>
                                        <div><?= $preg['respuesta_completa'] ?></div>

                                        <?php if (!empty($preg['definiciones_relacionadas'])): ?>
                                            <div class="mt-15 fs-08 txt-gris-medio">
                                                <strong>Temas relacionados:</strong>
                                                <?= implode(', ', array_map(function($d) {
                                                    return '<a href="' . BASE_URL . 'tabla-incapacidad" class="txt-amarillo">' . htmlspecialchars(str_replace('-', ' ', $d)) . '</a>';
                                                }, $preg['definiciones_relacionadas'])) ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($preg['lesiones_relacionadas'])): ?>
                                            <div class="mt-10 fs-08 txt-gris-medio">
                                                <strong>Lesiones:</strong>
                                                <?= implode(', ', array_map(function($l) {
                                                    return '<a href="' . BASE_URL . 'baremo/lesion-' . $l . '" class="txt-amarillo">' . htmlspecialchars($l) . '</a>';
                                                }, $preg['lesiones_relacionadas'])) ?>
                                            </div>
                                        <?php endif; ?>
                                    </article>
                                </details>
                            <?php endforeach; ?>
                        </section>

                        <a href="#" class="link-volver-indice">
                            <?= render_icon('arrow-up', 'mr-5') ?> Volver al inicio
                        </a>
                    </div>
                <?php endforeach; ?>

            </section>

            <div class="articulo-footer-meta">
                <span><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#10004;</span> Solo cobramos si vos cobras.</span>
                <span class="italic" style="font-style:italic;"><span style="font-size: 1.5em; vertical-align: middle; margin-right: 5px;">&#9878;</span> DerechosART &middot; derechosart.com.ar</span>
            </div>
        </article>

    </div>
</main>
