<!DOCTYPE html>

<html>
    <head>
        <link href="style.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <title>Ajouter des Promotions</title>
    </head>
    <body>
        <form method="post" action="CreerPromo.php" enctype="multipart/form-data">
            <div>
            <label for="pro_nom">Nom de la promotion :</label>
            <input id="pro_nom" type="text" name="nom" />
            </div>     
            
            <input type="submit" value="Creer">
            
        </form>
    </body>
</html>
