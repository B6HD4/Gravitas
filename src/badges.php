<?php

        //Connexion à la base de données en pdo
        require_once 'connexion.php';

        $sql = "SELECT * FROM BADGE";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $badges = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($badges as $badge) {
            foreach ($badge as $key => $value) {
                if ($key=='idBadge') {
                    $idImage="Image".$value;
                }
                if ($key=='lienImage') {
                    echo "<img id=$idImage src=image.php?img=$value>";
                }
                if ($key=='libelle') {
                    echo"<ul>$value</ul>";
                }
            }
        }
?>