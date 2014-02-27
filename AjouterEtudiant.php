<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter des étudiants</title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
            <div>
            <label for="etu_prenom">Prénom de l'étudiant :</label>
            <input id="etu_prenom" type="text" name="prenom" />
            </div>
            
            <div>
            <label for="etu_nom">Nom de l'étudiant :</label>
            <input id="etu_nom" type="text" name="nom" />
            </div>
            
            <?php
            require 'Veriff.php';
            ?>
        </form>
    </body>
</html>
