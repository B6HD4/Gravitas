<!--
    Auteur : Gravitas
    Date : 2024-06-10
    Description : Page d'accueil de l'application web Gravitas
-->
<!-- css
 

#PageAccueil {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  width: 75vw;
  gap: 20px;
  padding: 20px;
  box-sizing: border-box;
}

.colonne1PageAccueil {
  margin-left: 0%;
  width: 40%;
  padding: 20px;
  box-sizing: border-box;
}

.colonne2PageAccueil {
  margin-left: 40%;
  width: 40%;
  padding: 20px;
  box-sizing: border-box;
}

.colonne3PageAccueil {
  margin-right: 0%;
  width: 20%;
  padding: 20px;
  box-sizing: border-box;
}
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gravitas</title>
  <meta name="description" content="Description de la page">
  <link  rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur l'application Web Gravitas</h1>
    </header>
    <nav class="main-navPageAccueil">
        <ul id="responsive-listPageAccueil">
            <li><a href="pageAccueil.php" class="nav-button">Accueil</a></li>
            <li><a href="wait" class="nav-button">Choisir un article</a></li>
            <li><a href="wait" class="nav-button">Choisir une thématique</a></li>
            <li><a href="ticket.php" class="nav-button">Ticket</a></li>
        </ul>
    </nav>
    <main class="colonne1PageAccueil">
        <section id="articleDuJour" class="article">
            <article class="article du jour">
                Globalement link l'article ici mais en responsive ce sera compliquer
            </article>
        </section>
    </main>
    <main class="colonne2PageAccueil">
        <section id="Description de l'application" class="description">
            <article class="texte accueil">
                Bonsoir ici les description de l'application
            </article>
        </section>
    </main>
    <main class="colonne3PageAccueil">
        <section id="apparence appli" class="apparence">
            <article class="apparence">
                Bonsoir ici la feature d'apparence du site web
            </article>
        </section>
    </main>
</body>
</html>

<?php

?>
