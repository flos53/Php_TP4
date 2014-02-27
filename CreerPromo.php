

<?php
        $dsn = 'mysql:dbname=iia;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';        
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
        $oResultat = $oDb->query('SELECT * FROM promotion ORDER BY pro_nom ASC');
        echo("Enregistrement effectué");
    
            

?>
       
       
       