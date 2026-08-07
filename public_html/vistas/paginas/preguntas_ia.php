<?php
/**
 * CARGADOR MAESTRO DE FAQ MODULARIZADO
 */
$preguntas = [];
$dir = __DIR__ . '/faq_categorias/';
if (is_dir($dir)) {
    $files = glob($dir . '*.php');
    foreach ($files as $file) {
        $arr = require $file;
        if (is_array($arr)) {
            $preguntas = array_merge($preguntas, $arr);
        }
    }
}
return $preguntas;
