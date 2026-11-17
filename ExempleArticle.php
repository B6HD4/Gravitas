<?php 
?>
<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page</title>
    
    <!-- Fichiers locaux depuis votre dossier node_modules -->
    <link rel="stylesheet" href="node_modules/grapesjs/dist/css/grapes.min.css" />
    
    <style>
        body, html { margin: 0; padding: 0; height: 100%; overflow: hidden; }
    </style>
</head>
<body>

    <div id="gjs">
            <!-- Votre contenu par défaut au premier lancement -->
            <div class="grid-container">
                <titre>
                    <h1>Titre de l'article</h1>
                </titre>
                <sommaire>
                    <h2>Sommaire :</h2>
                    <p>Intro</p>
                    <p>Chap 1</p>
                    <p>Chap n</p>
                    <p>Lien vers les sources</p>
                </sommaire>
                <article>
                    <p>Contenu de l'article :<br><br> 
                        « Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, 
                        ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, 
                        enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. 
                        Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. 
                        Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. 
                        Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
                        Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. 
                        Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, 
                        in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. 
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id,
                        congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna.

                        Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. 
                        Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. 
                        Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, 
                        et ultricies lacus lorem varius purus. Curabitur eu amet. » 
                    </p>
                </article>
                <aside>
                    <p>Image D'illustration</p>
                    <button class="btn btn-primary">Cliquez ici pour accéder au jeu</button>
                </aside>
            </div>
    </div>

    <!-- Script local depuis votre dossier node_modules -->
    <script src="node_modules/grapesjs/dist/grapes.min.js"></script>

    <script type="text/javascript">
       const editor = grapesjs.init({
        container: '#gjs',
        fromElement: true,
        height: '100vh',
        width: 'auto',
        storageManager: false,

        canvas: {
            styles: [
                'node_modules/bootstrap/dist/css/bootstrap.css',
                'style.css'
            ]
        },

        canvasCss: `
            titre, sommaire {
                display: block;
            }

            .grid-container {
                margin-left: 2% !important;
                margin-right: 2% !important;
                column-gap: 20px !important;
                grid-template-columns: 1fr 4fr 1fr !important;
            }
        `
    });
    // Ajouter le bouton Enregistrer
    editor.Panels.addButton('options', {
        id: 'save-page',
        label: '💾 Enregistrer',
        command: 'save-page'
    });

    // Commande sauvegarder
   editor.Commands.add('save-page', {
        async run(editor) {

            const cssCanvas = `
                titre, sommaire {
                    display: block;
                }

                .grid-container {
                    display: grid;
                    margin-left: 2%;
                    margin-right: 2%;
                    column-gap: 20px;
                    grid-template-columns: 1fr 4fr 1fr;
                }
            `;

            const response = await fetch('save.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    html: editor.getHtml(),
                    css: editor.getCss(),
                    cssCanvas: cssCanvas,
                    projectData: editor.getProjectData()
                })
            });

            const result = await response.json();

            if (result.success) {
                alert('Page enregistrée avec succès !');
            } else {
                alert('Erreur lors de la sauvegarde');
            }
        }
    });
    async function chargerProjet() {

        try {
            const response = await fetch('load.php?t=' + Date.now());

            if (!response.ok) {
                console.log('Aucun projet sauvegardé');
                return;
            }

            const projectData = await response.json();

            if (!projectData || !projectData.pages) {
                console.log('Données du projet invalides');
                return;
            }

            editor.loadProjectData(projectData);

            console.log('Projet restauré avec succès');

        } catch (error) {
            console.error('Erreur de chargement :', error);
        }
    }

    chargerProjet();
    </script>
</body>
</html>
