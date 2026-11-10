<?php

        //Connexion à la base de données en pdo
        require_once 'connexion.php';

        $sql = "SELECT * FROM BADGE";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $badge = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        var_dump($badge)
?>