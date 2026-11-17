<?php
$config = parse_ini_file('config.ini', true);
        $DB_HOST=$config["database"]["DB_HOST"];
        $DB_NAME=$config["database"]["DB_NAME"];
        $DB_USER=$config["database"]["DB_USER"];
        $DB_PASS=$config["database"]["DB_PASS"];


try {
    $pdo = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
} catch (PDOException $e) {
    echo 'Connexion à la BD échouée : '.$e->getMessage();
}