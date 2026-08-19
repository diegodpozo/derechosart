<?php
/**
 * GA4 - EVENTO SERVER-SIDE: FORMULARIO DE CONTACTO
 * LLAMADO DESDE GestionModel.php CUANDO SE GUARDA UNA CONSULTA
 */

function ga4_track_contact($categoria, $nombre = '') {
    $eventData = json_encode([
        'event_category' => 'contacto',
        'categoria' => $categoria,
        'nombre' => substr($nombre, 0, 1),
        'timestamp' => date('c')
    ]);
    echo "<script>
    if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', {$eventData});
    }
    </script>";
}
