<?php

header('Content-Type: application/json; charset=utf-8');

$directory = __DIR__ . '../pages/';

if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['projectData'])) {
    http_response_code(400);
    echo json_encode(['success' => false]);
    exit;
}

$html = $data['html'] ?? '';
$css = $data['css'] ?? '';
$cssCanvas = $data['cssCanvas'] ?? '';

$page = '<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="../src/style.css">

<style>
' . $cssCanvas . '
' . $css . '
</style>

</head>
<body>

' . $html . '

</body>
</html>';

// Sauvegarder HTML
file_put_contents(
    $directory . 'ma-page.html',
    $page,
    LOCK_EX
);

// Sauvegarder JSON
file_put_contents(
    $directory . 'ma-page.json',
    json_encode($data['projectData'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
    LOCK_EX
);

echo json_encode(['success' => true]);

?>