<?php

header('Content-Type: application/json; charset=utf-8');

$file = __DIR__ . '../pages/ma-page.json';

if (!file_exists($file)) {
    http_response_code(404);
    echo json_encode(['error' => 'Projet introuvable']);
    exit;
}

readfile($file);