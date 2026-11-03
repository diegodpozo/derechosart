<?php
/**
 * COMPONENTE: CTA WHATSAPP REUTILIZABLE
 * 
 * Parámetros (obligatorios):
 * - $titulo: Texto principal del CTA
 * - $descripcion: Subtítulo descriptivo
 * 
 * Parámetros opcionales:
 * - $ancho: Ancho máximo en rem (default: 25)
 * - $margen_top: Margen superior en rem (default: 1.5)
 * 
 * NOTA: El número de WhatsApp es fijo: 5491124786144
 */

// Validación de parámetros obligatorios
if (!isset($titulo) || empty($titulo)) {
    trigger_error('Parámetro $titulo es obligatorio en cta-whatsapp.php', E_USER_WARNING);
    return;
}
if (!isset($descripcion) || empty($descripcion)) {
    trigger_error('Parámetro $descripcion es obligatorio en cta-whatsapp.php', E_USER_WARNING);
    return;
}

// Valores por defecto para parámetros opcionales
$ancho = $ancho ?? "25";
$margen_top = $margen_top ?? "1.5";

// Número de WhatsApp fijo para todo el sitio
$numero_whatsapp = "5491124786144";
$claseAnchoCta = match ((string) $ancho) {
    '22' => 'cta-whatsapp-ancho-22',
    '35' => 'cta-whatsapp-ancho-35',
    '100%' => 'cta-whatsapp-ancho-completo',
    default => 'cta-whatsapp-ancho-predeterminado',
};
$claseMargenCta = match ((string) $margen_top) {
    '1.2' => 'cta-whatsapp-margen-12',
    '2.5' => 'cta-whatsapp-margen-25',
    default => 'cta-whatsapp-margen-predeterminado',
};
?>

<section class="cta-whatsapp-contenedor <?= $claseAnchoCta ?> <?= $claseMargenCta ?>" aria-label="Contacto por WhatsApp">
    <section class="cta-whatsapp-bloque bg-amarillo border-radius-20">
        
        <!-- TÍTULO -->
        <header class="cta-whatsapp-titulo">
            <h3><?= htmlspecialchars($titulo) ?></h3>
        </header>

        <!-- TEXTO CON ÍCONO A LA IZQUIERDA -->
        <section class="cta-whatsapp-texto-grupo">
            <span class="cta-whatsapp-icono">
                <?= render_icon('whatsapp', '', '', '#000000', true) ?>
            </span>
            <section class="cta-whatsapp-texto">
                <p><?= htmlspecialchars($descripcion) ?></p>
            </section>
        </section>

        <!-- CONTENEDOR DEL BOTÓN CENTRADO -->
        <footer class="cta-whatsapp-boton-contenedor">
            <a href="https://wa.me/<?= htmlspecialchars($numero_whatsapp) ?>" target="_blank" class="cta-whatsapp-boton-link">
                ESCRIBINOS <?= render_icon('chevron-right', '', '', '#FFCC00', true) ?>
            </a>
        </footer>
    </section>
</section>
