<html>
    <head>
        <link href="style.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <title>Base de données</title>
    </head>
    <body>
        <h1><center>Liste des promotions</center></h1>            
        <?php
        
        $dsn = 'mysql:dbname=iia;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';        
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
        $oResultat = $oDb->query('SELECT * FROM promotion ORDER BY pro_nom ASC');
        $oResultat->setFetchMode(PDO::FETCH_OBJ);
//        
        
        //$oResultat->rowCount()  // affiche le nombre de lignes
        
        echo '<p>Liste des ' , $oResultat->rowCount(), ' promotions de l\'IIA : </p>';
        
        while($oPromotion = $oResultat->fetch())
        {
            echo '<p>';
            echo '<a href="promotion.php?pro_id=' ,$oPromotion->pro_id, '">';            
            echo $oPromotion->pro_nom, '</a>'; 
            echo '</p>';
        }
        
        
        ?>
        
    </body>
</html>