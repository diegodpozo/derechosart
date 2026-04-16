<?php
$base = getenv('BASE_URL') ?: 'http://localhost';
$cookie = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'csrf_test_cookies.txt';

function http_request($method, $url, $cookieFile, $headers = [], $body = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
    if (!empty($headers)) curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        if ($body !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }
    $body = curl_exec($ch);
    $info = curl_getinfo($ch);
    $err = curl_error($ch);
    curl_close($ch);
    return ['http_code' => $info['http_code'] ?? 0, 'body' => $body, 'error' => $err];
}

echo "BASE URL: $base\n";
// 1) GET csrf-refresh
$r1 = http_request('GET', rtrim($base, '/') . '/api/csrf-refresh', $cookie);
if ($r1['http_code'] !== 200) {
    echo "FAILED: /api/csrf-refresh did not return 200, got {$r1['http_code']}\n";
    echo "Body: " . ($r1['body'] ?? '') . "\n";
    exit(2);
}
$json1 = json_decode($r1['body'], true);
if (!($json1 && !empty($json1['csrf_token']))) {
    echo "FAILED: csrf token not present in response\n";
    echo "Body: {$r1['body']}\n";
    exit(3);
}
$token = $json1['csrf_token'];
echo "OK: csrf-refresh returned token (len=" . strlen($token) . ")\n";

// 2) POST to sincronizar-ubicaciones WITHOUT token -> expect 403
$r2 = http_request('POST', rtrim($base, '/') . '/api/sincronizar-ubicaciones', $cookie);
if ($r2['http_code'] !== 403) {
    echo "FAILED: POST /api/sincronizar-ubicaciones without token expected 403, got {$r2['http_code']}\n";
    echo "Body: {$r2['body']}\n";
    exit(4);
}
echo "OK: POST without token returned 403 as expected\n";

// 3) POST to sincronizar-ubicaciones WITH token (header) -> expect 401 (not authenticated)
$hdr = ['X-CSRF-TOKEN: ' . $token];
$r3 = http_request('POST', rtrim($base, '/') . '/api/sincronizar-ubicaciones', $cookie, $hdr);
if ($r3['http_code'] !== 401) {
    echo "FAILED: POST /api/sincronizar-ubicaciones with valid CSRF should reach auth check and return 401; got {$r3['http_code']}\n";
    echo "Body: {$r3['body']}\n";
    exit(5);
}
echo "OK: POST with token passed CSRF and returned 401 (not authenticated) as expected\n";

echo "ALL TESTS PASSED\n";
exit(0);
