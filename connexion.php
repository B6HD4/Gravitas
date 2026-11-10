<?php
require_once 'constantes.php';

try {
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo 'Connexion à la BD échouée : '.$e->getMessage();
}