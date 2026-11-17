
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page recherche thématiques - Gravitas</title>
    <link  rel="stylesheet" type="text/css" href="styleThematique.css">
    <link  rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
    
</head>
<body>
    <header>
        <search>
            <form action="/recherche" method="get">
                <label for="barre-recherche">Rechercher une thématique :</label>
                <input type="recherche" id="barre-recherche" name="barre-recherche-thematique" placeholder="Entrez la thématique..."/>
                <button class="btn btn-secondary" type="submit">Rechercher</button>
            </form>
        </search>
    </header>
    <main class="conteneur-central">
        <section class="section-thematique" name="section-thematique1">
            <h2>Nom de groupe de thématique : </h3>
                <div class="liste-boutons">
                    <button class="btn btn-primary">Thématique 1 </button>
                    <button class="btn btn-primary">Thématique 2 </button>
                    <button class="btn btn-primary">Thématique 3 </button>
                    <button class="btn btn-primary">Thématique 4 </button>
                </div>

        <section class="section-thematique" name="section-thematique2">
            <h2>Nom de groupe de thématique : </h3>
                <div class="liste-boutons">
                    <button class="btn btn-primary">Thématique 1 </button>
                    <button class="btn btn-primary">Thématique 2 </button>
                    <button class="btn btn-primary">Thématique 3 </button>
                    <button class="btn btn-primary">Thématique 4</button>
                </div>
        </section>
    </main>
   
</body>
<footer>
	<p>&copy; 2025</p>
</footer>
</html>