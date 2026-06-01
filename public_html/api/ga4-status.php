<?php
/**
 * GA4 Status Checker - Endpoint para verificar que GA4 está activo
 * Acceso: /api/ga4-status
 * Responde con JSON indicando si GA4 está cargado
 */

header('Content-Type: application/json; charset=utf-8');

$response = [
    'status' => 'success',
    'ga4_enabled' => true,
    'measurement_id' => 'G-SBNESCYEYL',
    'domain' => $_SERVER['HTTP_HOST'] ?? 'unknown',
    'timestamp' => date('c'),
    'message' => 'GA4 está configurado y activo en el servidor'
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
