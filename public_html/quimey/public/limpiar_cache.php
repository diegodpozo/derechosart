<?php
// LIMPIAR CACHE DE PHP (OPCACHE) - BORRAR ESTE ARCHIVO DESPUES DE USAR
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo "OPCACHE RESETEADO";
} else {
    echo "OPCACHE NO DISPONIBLE EN ESTE SERVIDOR";
}
?>
