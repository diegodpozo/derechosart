<?php
/**
 * PARCIAL REUTILIZABLE: RESEÑAS DE GOOGLE POR SUCURSAL
 *
 * VARIABLES ESPERADAS EN EL SCOPE:
 *  - $resenas                  ARRAY DE RESEÑAS. CADA UNA: ['nombre', 'foto', 'texto', 'estrellas']
 *  - $resenas_h2_html          TEXTO DEL H2 (PUEDE CONTENER <span class="subrayado-amarillo">...</span>)
 *  - $resenas_maps_url         URL DE LA FICHA DE GOOGLE DE LA SUCURSAL (BOTON VER MAS)
 *  - $resenas_promedio_global  PROMEDIO GLOBAL DE LA FICHA (OPCIONAL, SI NO SE PASA USA EL DE LAS RESEÑAS FILTRADAS)
 *  - $resenas_total_global     TOTAL GLOBAL DE OPINIONES DE LA FICHA (OPCIONAL)
 *
 * SOLO SE RENDERIZAN LAS RESEÑAS CON 4 ESTRELLAS O MAS (>= 4.5).
 * SI NO HAY FOTO, SE MUESTRA UN AVATAR CON LA INICIAL DEL NOMBRE.
 */
// DIRECTORIO DE FOTOS DE ESTA SUCURSAL DENTRO DE publico/img/ (EJ: 'rosario' -> publico/img/rosario/)
$resenas_directorio_fotos = $resenas_directorio_fotos ?? '';

if (empty($resenas)) return;

// FILTRO: SOLO RESEÑAS DE 4.5 ESTRELLAS O SUPERIOR (SEGUN PEDIDO DEL CLIENTE)
$resenasFiltradas = array_values(array_filter($resenas, function($r) {
    return isset($r['estrellas']) && $r['estrellas'] >= 4.5;
}));
if (empty($resenasFiltradas)) return;

// PROMEDIO Y TOTAL A MOSTRAR: PRIORIZA DATO GLOBAL DE LA FICHA SI SE PROVEE
// $resenas_total_global ES TEXTO LISTO PARA MOSTRAR (EJ: "más de 100")
$totalGlobal = $resenas_total_global ?? (string) count($resenasFiltradas);
$promedioGlobal = $resenas_promedio_global
    ?? round(array_sum(array_column($resenasFiltradas, 'estrellas')) / count($resenasFiltradas), 1);
$h2Html = $resenas_h2_html ?? 'Opiniones sobre nuestro <span class="subrayado-amarillo">Estudio Jurídico de ART</span>';
$mapsUrl = $resenas_maps_url ?? '';

if (!function_exists('renderEstrellasResena')) {
function renderEstrellasResena($cantidad) {
    $out = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $cantidad) {
            $out .= render_icon('star', '', 'transform: scale(1.05);', 'var(--amarillo)');
        } else {
            $out .= render_icon('star', '', 'transform: scale(1.05);', '#d1d5db');
        }
    }
    return $out;
}
}

if (!function_exists('renderAvatarResena')) {
function renderAvatarResena($nombre, $foto, $directorioFotos = '') {
    // 1) SI HAY FOTO EXPLICITA EN EL JSON, LA PREFIJAMOS CON EL DIRECTORIO DE LA SUCURSAL
    //    (EJ: 'maria.webp' + dir 'rosario' -> publico/img/rosario/maria.webp) Y VERIFICAMOS QUE EXISTA
    if (!empty($foto)) {
        $foto = $directorioFotos . '/' . ltrim($foto, '/');
        $rutaFisica = __DIR__ . '/../../publico/img/' . $foto;
        if (file_exists($rutaFisica)) {
            return render_img($foto, 'Opinión en Google - ' . $nombre, ['class' => 'google-user-img', 'width' => '45', 'height' => '45']);
        }
    }

    // 2) AUTODETECCION POR PRIMERA PALABRA DEL NOMBRE -> publico/img/<directorio>/<primera-palabra>.webp
    //    REGLA DE CONVENCION: "NESTOR GALIMBERTI" BUSCA img/<directorio>/nestor.webp (PRIMERA PALABRA EN MINUSCULA, SIN TILDE)
    if (!empty($directorioFotos)) {
        $primeraPalabra = trim(explode(' ', $nombre)[0] ?? '');
        $slug = mb_strtolower($primeraPalabra, 'UTF-8');
        // QUITAR TILDES Y CARACTERES ESPECIALES PARA COINCIDIR CON EL NOMBRE DEL ARCHIVO SUBIDO
        $slug = trim(preg_replace('/[^a-z0-9]+/', '-', strtr($slug, ['á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u', 'ü' => 'u', 'ñ' => 'n'])), '-');
        if ($slug !== '') {
            // RUTA FISICA PARA VERIFICAR QUE EL ARCHIVO REALMENTE EXISTA (public_html/publico/img/<directorio>/)
            $rutaRelativa = $directorioFotos . '/' . $slug . '.webp';
            $rutaFisica = __DIR__ . '/../../publico/img/' . $rutaRelativa;
            if (file_exists($rutaFisica)) {
                return render_img($rutaRelativa, 'Opinión en Google - ' . $nombre, ['class' => 'google-user-img', 'width' => '45', 'height' => '45']);
            }
        }
    }

    // 3) SIN FOTO USABLE: AVATAR CON LA INICIAL DEL NOMBRE
    $inicial = strtoupper(mb_substr(trim($nombre), 0, 1, 'UTF-8'));
    return '<div class="google-user-img avatar-inicial" style="display:flex;align-items:center;justify-content:center;background:var(--amarillo);color:#000;font-weight:800;border-radius:50%;">' . htmlspecialchars($inicial) . '</div>';
}
}
?>
<section class="py-40">
    <section class="contenedor">
        <h2 class="centro"><?= $h2Html ?></h2>
        <section class="centro mt-20 mb-30">
            <div class="google-estrellas-centro mb-10">
                <?= renderEstrellasResena($promedioGlobal) ?>
            </div>
            <p>
                <span class="fw-800"><?= $promedioGlobal ?> / 5</span>
                basado en <?= $totalGlobal ?> opiniones reales
            </p>
        </section>

        <section class="contenedor-slider-reseñas">
            <button class="slider-arrow prev" id="prev-btn" aria-label="Anterior"><?= render_icon('chevron-left', '', '', '#000') ?></button>

            <div class="reseñas-track" id="reseñas-track">
                <?php foreach ($resenasFiltradas as $resena): ?>
                <div class="tarjeta-reseña-google">
                    <div class="google-header">
                        <?= renderAvatarResena($resena['nombre'], $resena['foto'] ?? '', $resenas_directorio_fotos ?? '') ?>
                        <div class="google-user-info">
                            <span class="fw-700"><?= htmlspecialchars($resena['nombre']) ?></span>
                            <div class="google-estrellas">
                                <?= renderEstrellasResena($resena['estrellas']) ?>
                            </div>
                        </div>
                    </div>
                    <?= render_img('google-logo.svg', 'Reseña en Google', ['class' => 'google-logo-mini', 'width' => '18', 'height' => '18']) ?>
                    <p class="google-texto"><?= htmlspecialchars($resena['texto']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <button class="slider-arrow next" id="next-btn" aria-label="Siguiente"><?= render_icon('chevron-right', '', '', '#000') ?></button>
        </section>

        <?php if ($mapsUrl): ?>
        <section class="centro mt-60">
            <a href="<?= htmlspecialchars($mapsUrl) ?>" target="_blank" class="btn btn-amarillo">
                VER MÁS RESEÑAS EN GOOGLE
            </a>
        </section>
        <?php endif; ?>
    </section>
</section>