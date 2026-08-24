<?php
/**
 * VISTA: ZONAS DE ATENCION - GENERADO DINAMICAMENTE DESDE BD
 */
?>

<main class="fade-in">
    <p class="tl-dr">DerechosART atiende en CABA, GBA, Rosario, Neuquén, Río Negro, Salta, Córdoba y Mendoza. Encontrá tu zona de atención más cercana con dirección, horarios y formas de contacto.</p>
    <!-- HERO SECCION -->
    <section class="hero-interna">
        <section class="contenedor">
            <h1>Zonas de <span class="subrayado-amarillo"><strong>Atención</strong></span></h1>
            <p class="subtitulo-hero">Brindamos asesoramiento legal especializado en todo el país. Conocé nuestras áreas de cobertura.</p>
        </section>
    </section>

    <!-- CARDS DE OFICINAS -->
    <section class="seccion-texto bg-gris">
        <section class="contenedor">
            
            <section class="grid-zonas">
                <?php foreach ($regiones as $region): ?>
                <article class="zona-categoria centro">
                    <h2 class="titulo-zona">
                        <a href="<?= BASE_URL ?>abogados-art-<?= $region['slug_base'] ?>"><?= render_icon($region['icono'], 'txt-amarillo') ?> Abogados ART en <?= htmlspecialchars($region['titulo']) ?></a>
                    </h2>
                    <p class="txt-gris fs-08 mb-10"><?= htmlspecialchars($region['direccion']) ?></p>
                    <div class="zona-botones">
                        <a href="<?= $region['maps_url'] ?>" target="_blank" class="btn btn-ubicacion">
                            <?= render_icon('location-dot') ?> VER UBICACIÓN
                        </a>
                        <button type="button" class="btn btn-zonas" data-region="<?= $region['id'] ?>">
                            <?= render_icon('list') ?> VER ZONAS DE ATENCIÓN
                        </button>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>

            <!-- MODAL DE ZONAS -->
            <div id="modal-zonas" class="modal-overlay oculto">
                <div class="modal-contenido">
                    <div class="modal-header">
                        <h3 id="modal-titulo"></h3>
                        <button type="button" class="modal-cerrar" id="modal-cerrar">&times;</button>
                    </div>
                    <div class="modal-buscador-wrapper">
                        <input type="text" id="modal-buscador" class="modal-buscador" placeholder="Buscar localidad...">
                    </div>
                    <div class="modal-body" id="modal-body"></div>
                </div>
            </div>

            <!-- LISTADO DINAMICO DESDE BD (OCULTO - SOLO PARA SEO) -->
            <section class="mt-60 pt-40 border-top" style="display:none">
                <h3 class="centro mb-30">Todas nuestras localidades de cobertura</h3>
                
                <section class="grid-zonas-seo">
                    <?php if (!empty($regiones)): ?>
                        <?php foreach ($regiones as $region): 
                            $esCabaGba = ($region['id'] === 'caba-gba');
                        ?>
                        <article class="col-seo">
                            <h4 class="fw-700 mb-10 border-bottom pb-5">
                                <a href="<?= BASE_URL ?>abogados-art-<?= $region['slug_base'] ?>"><?= htmlspecialchars($region['titulo']) ?></a>
                            </h4>
                            
                            <?php foreach ($region['subgrupos'] as $i => $sub): 
                                $locales = $sub['localidades'];
                                $total = count($locales);
                                $esGBA = ($esCabaGba && $i === 1);
                            ?>
                                
                                <?php if ($esGBA): ?>
                                    <?php if ($total > 0): ?>
                                    <details class="mt-10">
                                        <summary class="cursor-pointer txt-gris fs-08">Ver más en GBA</summary>
                                        <div class="flex-column gap-5 mt-5 pl-10">
                                            <?php foreach ($locales as $loc): ?>
                                            <a href="<?= BASE_URL ?>abogados-art-<?= $loc['slug'] ?>"><?= htmlspecialchars($loc['nombre']) ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </details>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="lista-seo-links">
                                        <?php foreach ($locales as $j => $loc): ?>
                                            <?php if ($j === 6 && $total > 6): ?>
                                                <details>
                                                    <summary class="cursor-pointer txt-gris fs-08">Ver más en <?= htmlspecialchars($sub['nombre']) ?></summary>
                                                    <div class="flex-column gap-5 mt-5 pl-10">
                                            <?php endif; ?>
                                            <a href="<?= BASE_URL ?>abogados-art-<?= $loc['slug'] ?>"><?= htmlspecialchars($loc['nombre']) ?></a>
                                        <?php endforeach; ?>
                                        <?php if ($total > 6): ?>
                                                </div>
                                            </details>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </article>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="centro txt-gris">No hay localidades cargadas en este momento.</p>
                    <?php endif; ?>
                </section>
            </section>

        </section>
    </section>
</main>

<script>
// DATOS DE REGIONES PARA EL MODAL
var datosRegiones = <?= json_encode(array_map(function($r) {
    $sub = array_map(function($s) {
        return [
            'nombre' => $s['nombre'],
            'localidades' => $s['localidades']
        ];
    }, $r['subgrupos']);
    return [
        'id' => $r['id'],
        'titulo' => $r['titulo'],
        'subgrupos' => $sub
    ];
}, $regiones), JSON_UNESCAPED_UNICODE) ?>;

var ventanaRegion = null;

(function() {
    var modal = document.getElementById('modal-zonas');
    var titulo = document.getElementById('modal-titulo');
    var body = document.getElementById('modal-body');
    var cerrar = document.getElementById('modal-cerrar');
    var buscador = document.getElementById('modal-buscador');

    function abrirModal(regionId) {
        var datos = datosRegiones.find(function(r) { return r.id === regionId; });
        if (!datos) return;

        ventanaRegion = regionId;
        titulo.textContent = 'Zonas de atención - ' + datos.titulo;
        document.getElementById('modal-buscador').value = '';
        renderizarModal(regionId, '');
        modal.classList.remove('oculto');
        document.body.classList.add('modal-abierto');
        setTimeout(function() {
            document.getElementById('modal-buscador').focus();
        }, 100);
    }

    function renderizarModal(regionId, filtro) {
        var datos = datosRegiones.find(function(r) { return r.id === regionId; });
        if (!datos) return;

        filtro = filtro.toLowerCase().trim();
        var html = '';

        datos.subgrupos.forEach(function(sub) {
            var locales = sub.localidades;
            if (filtro) {
                locales = locales.filter(function(l) {
                    return l.nombre.toLowerCase().indexOf(filtro) !== -1;
                });
            }
            if (locales.length === 0) return;
            if (datos.subgrupos.length > 1) {
                html += '<h4 class="modal-subtitulo">' + sub.nombre + '</h4>';
            }
            html += '<div class="modal-lista">';
            locales.forEach(function(loc) {
                html += '<a href="<?= BASE_URL ?>abogados-art-' + loc.slug + '" class="modal-link">' + loc.nombre + '</a>';
            });
            html += '</div>';
        });

        body.innerHTML = html || '<p class="txt-gris">No hay localidades cargadas para esta región.</p>';
    }

    function cerrarModal() {
        modal.classList.add('oculto');
        document.body.classList.remove('modal-abierto');
    }

    // CLICK EN BOTONES VER ZONAS
    document.querySelectorAll('[data-region]').forEach(function(btn) {
        btn.addEventListener('click', function() {
            abrirModal(this.getAttribute('data-region'));
        });
    });

    buscador.addEventListener('input', function() {
        if (ventanaRegion) renderizarModal(ventanaRegion, this.value);
    });

    cerrar.addEventListener('click', cerrarModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) cerrarModal();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') cerrarModal();
    });
})();
</script>
