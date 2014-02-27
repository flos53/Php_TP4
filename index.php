<html>
    <head>
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
        
//        $promotion = $oResultat->fetch();
//        //var_dump($promotion);
//        echo '<p>', $promotion['pro_nom'], '</p>';
//        $promotion = $oResultat->fetch();
//        echo $promotion[1];
        
        while($promotion = $oResultat->fetch())
        {
            echo '<p>', $promotion['pro_nom'], '</p>';
        }
        
        
        ?>
        
    </body>
</html>