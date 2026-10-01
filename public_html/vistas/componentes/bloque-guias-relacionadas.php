<?php
/**
 * COMPONENTE: BLOQUE DE GUIAS RELACIONADAS (CRUCE BIDIRECCIONAL)
 *
 * CONTRATO:
 *   $guias = array de items. Cada item:
 *     - titulo   (string) TEXTO ANCLA DEL ENLACE. Debe ser UNICO por pagina
 *     - url      (string) ruta relativa sin BASE_URL (ej. 'blog/mi-post')
 *     - descripcion (string opcional) texto corto bajo el enlace
 *
 * NOTAS:
 *   - El texto ancla lo elige el que llama, para poder VARIARLO por pagina
 *     y no repetir el mismo anchor en varias pantallas (ver aviso Seobility
 *     "textos ancla repetidos"). Por eso NO hay texto por defecto.
 *   - Solo se usa HTML presentacional sin schema, para no tocar el JSON-LD
 *     de la pagina. NUNCA enlazar texto de leyes dentro de este bloque.
 *   - Clases usadas: .alerta-importante / .alerta-icon / .flex-column /
 *     .gap-15 / .fs-09 / .subrayado-amarillo / .btn-capsula.
 *     TODAS verificadas como existentes en estilos.css y estilos.min.css.
 *
 * USO EN PAGINAS DE BAREMO (baremo-lesion.php):
 *   $guias = $baremo['guias'] ?? [];
 *   include __DIR__ . '/../componentes/bloque-guias-relacionadas.php';
 *
 * USO EN BLOG (dentro del articulo, antes del footer):
 *   $guias = [ ['titulo' => '...', 'url' => 'baremo/...' ] ];
 *   include __DIR__ . '/../componentes/bloque-guias-relacionadas.php';
 */

if (empty($guias) || !is_array($guias)) {
    return;
}

$tituloBloque = $tituloBloque ?? 'Guias relacionadas';
$introBloque = $introBloque ?? '';
?>
<div class="alerta-importante" style="display:block;">
    <p class="m-0 mb-20 fs-09 fw-700">
        <span class="subrayado-amarillo"><?= htmlspecialchars($tituloBloque) ?></span>
    </p>

    <?php if (!empty($introBloque)): ?>
        <p class="m-0 mb-20 fs-09"><?= $introBloque ?></p>
    <?php endif; ?>

    <div class="flex-column gap-15">
        <?php foreach ($guias as $guia): ?>
            <?php
            $urlGuia = $guia['url'] ?? '';
            $tituloGuia = $guia['titulo'] ?? '';
            if ($urlGuia === '' || $tituloGuia === '') {
                continue;
            }
            $descripcionGuia = $guia['descripcion'] ?? '';
            ?>
            <div>
                <a href="<?= BASE_URL . htmlspecialchars($urlGuia) ?>" class="btn-capsula">
                    <?= htmlspecialchars($tituloGuia) ?>
                </a>
                <?php if (!empty($descripcionGuia)): ?>
                    <p class="m-0 mt-10 fs-09 txt-gris"><?= $descripcionGuia ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
