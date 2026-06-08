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
?>

<div class="cta-whatsapp-contenedor" style="max-width: <?= $ancho ?>rem; margin: <?= $margen_top ?>rem auto 0; width: 100%;">
    <div class="cta-whatsapp-bloque bg-amarillo border-radius-20">
        
        <!-- TÍTULO -->
        <div class="cta-whatsapp-titulo">
            <h3><?= htmlspecialchars($titulo) ?></h3>
        </div>

        <!-- TEXTO CON ÍCONO A LA IZQUIERDA -->
        <div class="cta-whatsapp-texto-grupo">
            <div class="cta-whatsapp-icono">
                <?= render_icon('whatsapp', '', 'width: 100%; height: 100%;', '#000000') ?>
            </div>
            <div class="cta-whatsapp-texto">
                <p><?= htmlspecialchars($descripcion) ?></p>
            </div>
        </div>

        <!-- CONTENEDOR DEL BOTÓN CENTRADO -->
        <div class="cta-whatsapp-boton-contenedor">
            <a href="https://wa.me/<?= htmlspecialchars($numero_whatsapp) ?>" target="_blank" class="cta-whatsapp-boton-link">
                ESCRIBINOS <?= render_icon('chevron-right', '', '', '#FFCC00') ?>
            </a>
        </div>
    </div>
</div>

<style>
.cta-whatsapp-contenedor {
    box-sizing: border-box;
}

.cta-whatsapp-contenedor * {
    box-sizing: border-box;
}

.cta-whatsapp-bloque {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 1.2rem;
    gap: 0.4rem;
}

.cta-whatsapp-titulo {
    margin: 0;
    padding: 0;
}

.cta-whatsapp-titulo h3 {
    font-size: 1.2rem;
    font-weight: 800;
    line-height: 1.2;
    margin: 0;
    padding: 0;
}

.cta-whatsapp-texto-grupo {
    display: flex;
    align-items: flex-start;
    gap: 0.8rem;
}

.cta-whatsapp-icono {
    flex-shrink: 0;
    width: 2.2rem;
    height: 2.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 0.15rem;
}

.cta-whatsapp-texto {
    flex: 1;
    min-width: 0;
}

.cta-whatsapp-texto p {
    font-size: 0.85rem;
    line-height: 1.4;
    margin: 0;
    padding: 0;
    color: #666;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.cta-whatsapp-boton-contenedor {
    display: flex;
    justify-content: center;
    margin-top: 0.15rem;
}

.cta-whatsapp-boton-link {
    font-size: 0.75rem;
    padding: 0.6rem 1rem;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    font-weight: 700;
    white-space: nowrap;
    line-height: 1;
    width: 50%;
    justify-content: center;
    background-color: #000000;
    color: #FFCC00;
    text-decoration: none;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}

.cta-whatsapp-boton-link:hover {
    background-color: #222222;
}

/* Responsivo para móvil */
@media (max-width: 600px) {
    .cta-whatsapp-bloque {
        padding: 1rem !important;
        gap: 0.3rem !important;
    }
    
    .cta-whatsapp-titulo h3 {
        font-size: 1rem !important;
        line-height: 1.1 !important;
    }
    
    .cta-whatsapp-texto-grupo {
        gap: 0.6rem !important;
        align-items: flex-start !important;
    }
    
    .cta-whatsapp-icono {
        width: 2rem !important;
        height: 2rem !important;
        margin-top: 0.1rem !important;
    }
    
    .cta-whatsapp-texto p {
        font-size: 0.7rem !important;
        line-height: 1.3 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
    }
    
    .cta-whatsapp-boton-contenedor {
        margin-top: 0.1rem !important;
    }
    
    .cta-whatsapp-boton-link {
        font-size: 0.65rem !important;
        padding: 0.5rem 0.8rem !important;
        gap: 0.2rem !important;
        width: 50% !important;
    }
}
</style>
