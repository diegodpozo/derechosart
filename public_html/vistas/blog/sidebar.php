<?php
/**
 * COMPONENTE: SIDEBAR DE NAVEGACION DEL ARTICULO
 */

$ItemsSidebarActuales = $ItemsSidebarBlog ?? [
    ['id' => 'que-es-accidente', 'texto' => 'Qué es un accidente laboral'],
    ['id' => 'accidente-itinere', 'texto' => 'Qué es un accidente in itinere (y por qué también te cubre)'],
    ['id' => 'como-denunciar', 'texto' => 'Cómo hacer la denuncia a la ART paso a paso'],
    ['id' => 'cobertura-art', 'texto' => 'Qué tiene que cubrir la ART durante el tratamiento'],
    ['id' => 'alta-con-dolor', 'texto' => 'Qué hacer si te dan el alta pero seguís con dolor'],
    ['id' => 'como-funciona-indemnizacion', 'texto' => 'Cómo funciona la indemnización por accidente laboral'],
    ['id' => 'art-rechaza', 'texto' => 'Qué hacer si la ART rechaza tu accidente'],
    ['id' => 'errores-comunes', 'texto' => 'Errores que perjudican el reclamo (y cómo evitarlos)'],
    ['id' => 'documentacion', 'texto' => 'Qué documentación guardar desde el primer día'],
    ['id' => 'preguntas-frecuentes', 'texto' => 'Preguntas frecuentes sobre accidentes laborales'],
];
$TituloCtaSidebar = $TituloCtaSidebarBlog ?? '¿Tenés dudas?';
$DescripcionCtaSidebar = $DescripcionCtaSidebarBlog ?? 'Escribinos por WhatsApp y te asesoramos sin costo.';
?>
<aside class="blog-sidebar">
    <section class="sidebar-sticky" aria-label="Índice del artículo y contacto">
        <details class="sidebar-acordeon-movil" open>
            <summary class="sidebar-titulo" id="que-es-guia">En esta guía</summary>
            <nav class="sidebar-nav">
                <ul>
                    <?php foreach ($ItemsSidebarActuales as $indiceSidebar => $itemSidebar): ?>
                    <li id="preg-<?= $indiceSidebar + 1 ?>">
                        <a href="#<?= htmlspecialchars($itemSidebar['id'], ENT_QUOTES, 'UTF-8') ?>"<?= $indiceSidebar === 0 ? ' class="active"' : '' ?>>
                            <span class="nav-num"><?= $indiceSidebar + 1 ?></span> <?= htmlspecialchars($itemSidebar['texto'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </details>

        <!-- COMPONENTE CTA WHATSAPP REUTILIZABLE -->
        <?php
            $titulo = $TituloCtaSidebar;
            $descripcion = $DescripcionCtaSidebar;
            $ancho = "22";
            $margen_top = "1.2";
            include __DIR__ . '/../componentes/cta-whatsapp.php';
        ?>
        
        <p class="mt-20 fs-07 txt-gris-medio centro parpadeo-sidebar">
            <span class="parpadeo-sidebar-icon">✅</span> Solo cobramos si vos cobrás.
        </p>
    </section>
</aside>
