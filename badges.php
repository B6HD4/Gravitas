<?php session_start(); 
header('Content-Type: text/html; charset=UTF-8');
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravitas</title>
    <meta name="description" content="Affichage des badges" charset="UTF-8">
    <link rel="link" rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
<?php
        $_SESSION['idUser']='1';
        //Connexion à la base de données en pdo
        require_once 'connexion.php';



        $sql = "SELECT * FROM BADGE";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $badges = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        $sql = "SELECT BADGE.idBadge FROM BADGE JOIN possede ON possede.idBadge=BADGE.idBadge WHERE possede.idUser='1'";
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute();
        $badgesPossede = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($badges as $badge) {
            foreach ($badge as $key => $value) {
                if ($key=='idBadge') {
                    $idImage="Image".$value;
                    if (in_array($value, $badgesPossede)) {
                        $possede=1;
                    }
                    else {
                        $possede=0;
                    }
                }
                if ($key=='lienImage') {
                    echo "<img id=$idImage src=image.php?img=$value&possede=$possede>";
                }
                if ($key=='libelle') {
                    echo"<ul>$value</ul>";
                }
            }
        }
?>
</html>