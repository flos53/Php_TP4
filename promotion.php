
<html>
    <head>
        <meta charset="UTF-8">
        <title>Promotion</title>
    </head>
    <body>
        <h1><center>Listes des étudiants</center></h1>   
        <?php
        var_dump($_GET);
        
        
        
        $dsn = 'mysql:dbname=iia;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';        
        
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
        $oResultat = $oDb->query('SELECT * FROM etudiant where promotion_id=' . $_GET['pro_id'] . ' ORDER BY etu_nom, etu_prenom');
        $oResultat->setFetchMode(PDO::FETCH_OBJ);
        
        echo '<p>Liste des ' , $oResultat->rowCount(), ' étudiants : </p>';
        
        while($oEtudiant = $oResultat->fetch())
        {
            echo '<p>';
            echo strtoupper($oEtudiant->etu_nom) , ' ', $oEtudiant->etu_prenom; 
            echo '</p>';
        }
        ?>
        
        <p><a href="index.php">Retour</a></p>
        
    </body>
</html>
