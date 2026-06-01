<?php

/**
 * Carga una vista y le pasa datos.
 * Esta función también se encarga de incluir el layout principal.
 *
 * @param string $viewName El nombre del archivo de la vista (sin .php)
 * @param array $data Un array asociativo de datos para extraer en la vista.
 */
function view(string $viewName, array $data = []) {

    // Define la ruta al archivo de la vista específica y la añade al array de datos.
    // Usamos '_viewPath' para evitar posibles conflictos con variables de la vista.
    $data['_viewPath'] = __DIR__ . "/Views/{$viewName}.php"; 

    // Convierte las claves del array en variables. Ahora _viewPath estará disponible.
    extract($data);

    // Verificación de existencia del archivo de la vista específica.
    if (!file_exists($_viewPath)) {
        http_response_code(500);
        echo "Error: no se encontró el archivo de la vista: {$viewName}.php";
        return;
    }
    
    // Define la ruta al layout principal.
    $layoutPath = __DIR__ . '/Views/layout.php';

    if (file_exists($layoutPath)) {
        // Si el layout existe, lo incluye. _viewPath ya está disponible vía extract().
        require $layoutPath;
    } else {
        // Si no hay layout, solo incluye la vista directamente.
        require $_viewPath;
    }
}

/**
 * Formatea un número con apóstrofo como separador de miles.
 *
 * @param mixed $number El número a formatear.
 * @return string El número formateado o 'N/A' si no es un número válido.
 */
function format_number($number) {
    if (!is_numeric($number) || $number === null) {
        return 'N/A';
    }
    return number_format($number, 0, ',', "'");
}

/**
 * Formatea una fecha para mostrarla correctamente (Ya asumida en zona horaria local).
 * @param string $fecha La fecha en formato string.
 * @return string La fecha lista para mostrar.
 */
function convertir_fecha_buenos_aires(string $fecha): string {
    if (empty($fecha)) return 'N/A';
    try {
        $dateTime = new DateTime($fecha);
        return $dateTime->format('Y-m-d H:i');
    } catch (Exception $e) {
        return $fecha; 
    }
}


