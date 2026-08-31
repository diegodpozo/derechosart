<?php
/**
 * COMPONENTE: BLOQUE DE AUTORIA Y FUENTES (E-E-A-T / GEO)
 * MUESTRA QUIEN REVISO EL ARTICULO, LA MATRICULA, LA FECHA Y LAS FUENTES NORMATIVAS.
 *
 * DEPENDE DE VARIABLES DEFINIDAS EN PaginasControlador::blog():
 * - $AutorBlogSlug        (EJ. 'nair-chemes')
 * - $FechaPublicacionBlog
 * - $FechaModificacionBlog
 *
 * DATOS REALES EXTRAIDOS DE quienes-somos.php Y SEO_CONFIG.php (NO INVENTAR NADA)
 */

$AutoresRepo = [
    'romina-koniuch' => [
        'nombre' => 'Dra. Romina Koñiuch',
        'titulo' => 'Especialista en Accidentes Laborales y ART',
        'matricula' => 'C.P.A.C.F. T° 124 F° 403',
    ],
    'nair-chemes' => [
        'nombre' => 'Dra. Nair Chemes',
        'titulo' => 'Experta en Accidentes y Enfermedades Profesionales',
        'matricula' => 'Col. Ab. Rosario Libro 47 F° 365 / Mat. Federal T° 404 F° 503',
    ],
    'maria-jose-zalazar' => [
        'nombre' => 'Dra. María José Zalazar',
        'titulo' => 'Especialista en Accidentes Laborales',
        'matricula' => 'CAYPN Mat. 4235 (Neuquén) / CAAVO Mat. 6507 (Río Negro)',
    ],
    'athina-pereyra' => [
        'nombre' => 'Dra. Athina B. Pereyra',
        'titulo' => 'Especialista en Despidos e Indemnizaciones',
        'matricula' => 'C.P.A.C.F. T° 124 F° 846',
    ],
];

$autorBlogSlug = $AutorBlogSlug ?? 'romina-koniuch';
$autorInfo = $AutoresRepo[$autorBlogSlug] ?? $AutoresRepo['romina-koniuch'];

$fechaMod = $FechaModificacionBlog ?? $FechaPublicacionBlog ?? date('c');
$fechaLegible = date('d/m/Y', strtotime($fechaMod));
?>

<section class="bloque-autor">
    <div class="bloque-autor-titulo">Autoría y fuentes</div>
    <ul class="bloque-autor-lista">
        <li><strong>Revisado por:</strong> <?= htmlspecialchars($autorInfo['nombre']) ?>, <?= htmlspecialchars($autorInfo['titulo']) ?>.</li>
        <li><strong>Matrícula:</strong> <?= htmlspecialchars($autorInfo['matricula']) ?>.</li>
        <li><strong>Última actualización:</strong> <?= htmlspecialchars($fechaLegible) ?>.</li>
        <li><strong>Fuentes normativas:</strong> Ley 24.557 (Riesgos del Trabajo), Ley 27.348, Decreto 549/2025 (Baremo Laboral 2026) y normativa de la SRT.</li>
    </ul>
</section>
