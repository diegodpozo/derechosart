<?php
/**
 * COMPONENTE: BLOQUE TL;DR / RESPUESTA RAPIDA (AEO / GEO)
 * PARRAFO AUTOCONTENIDO ARRIBA DEL ARTICULO, PENSADO PARA SER CITADO POR
 * MOTORES DE RESPUESTA (PERPLEXITY, CHATGPT SEARCH, AI OVERVIEWS) Y LEIDO EN VOZ.
 *
 * VARIABLES ESPERADAS (DEFINIR ANTES DEL include):
 * - $TldrTexto      (string, OBLIGATORIO) RESPUESTA DIRECTA CON EL DATO DURO
 * - $TldrFuente     (string, OPCIONAL) NORMA O FUENTE DEL DATO
 * - $TldrFuenteUrl  (string, OPCIONAL) URL OFICIAL DE LA FUENTE
 * - $TldrCalcUrl    (string, OPCIONAL) RUTA INTERNA A LA CALCULADORA
 */
$TldrTexto = isset($TldrTexto) ? $TldrTexto : '';
$TldrFuente = isset($TldrFuente) ? $TldrFuente : '';
$TldrFuenteUrl = isset($TldrFuenteUrl) ? $TldrFuenteUrl : '';
$TldrCalcUrl = isset($TldrCalcUrl) ? $TldrCalcUrl : 'calculadora-accidentes';
if ($TldrTexto === '') return;
?>
<div class="alerta-importante mt-30 tldr-respuesta">
    <div>
        <p class="m-0 mb-10 fw-700">Respuesta rápida</p>
        <p class="m-0 fs-09"><?= $TldrTexto ?></p>
        <?php if ($TldrFuente !== ''): ?>
            <p class="m-0 mt-10 fs-09">
                Fuente:
                <?php if ($TldrFuenteUrl !== ''): ?>
                    <a href="<?= $TldrFuenteUrl ?>" target="_blank" rel="noopener"><?= $TldrFuente ?></a>
                <?php else: ?>
                    <?= $TldrFuente ?>
                <?php endif; ?>
                ·
                <a href="<?= BASE_URL . $TldrCalcUrl ?>">Calculá tu caso</a>
            </p>
        <?php endif; ?>
    </div>
</div>
