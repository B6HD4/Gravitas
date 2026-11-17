<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gravitas</title>
  <meta name="description" content="Description de la page">
  <link rel=stylesheet href=node_modules/bootstrap/dist/css/bootstrap.css>
</head>
<body>
  bonjour ici apparaitra un form pour faire un ticket de support pour l'application web Gravitas. <br>
  Il faudra que le form soit responsive et qu'il y ait un bouton pour envoyer le ticket. <br>
  Le ticket sera envoyé à l'adresse email de support de l'application web Gravitas.<br>
<!-- 
  - Le form devra contenir les champs suivants : <br>
  - Pourquoi <br>
  - Comment <br>
  - Description <br>
  - Système de tags pour catégoriser le ticket <br>
  - Un bouton pour envoyer le ticket <br>
-->
  <form action="send_ticket.php" method="post">
    <label for="why">Pourquoi :</label><br>
    <input type="text" id="why" name="why"><br>
    <label for="how">Comment :</label><br>
    <input type="text" id="how" name="how"><br>
    <label for="description">Description :</label><br>
    <textarea id="description" name="description"></textarea><br>
    <label for="tags">Tags :</label><br>
    <input type="text" id="tags" name="tags"><br>
    <input type="submit" value="Envoyer le ticket">
  </form>
</body>
</html>