
<html>
    <head>
        <link href="style.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <title>Promotion</title>
    </head>
    <body>
        <h1><center>Listes des étudiants</center></h1>   
        <?php
        //var_dump($_GET);
        //echo $_GET['pro_id'];
        
        
        $dsn = 'mysql:dbname=iia;host=127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';        
        
        $oDb = new PDO($dsn, $dbUser, $dbPass);
        
        //Protège le paramètre recu dans l'URL(contre les injections)
        
//        $proId = $oDb->quote($_GET['pro_id']); 
//        //Envoie une requete au SGBD
//        $oResultat = $oDb->query('SELECT *'
//                                . ' FROM etudiant'
//                                . ' WHERE promotion_id = ' . $proId 
//                                . ' ORDER BY etu_nom, etu_prenom');
        
        //Prepare une requete sql en nommant des parametres (plus rapide car en memoire)
        $oResultat = $oDb->prepare('SELECT *'
                                . ' FROM etudiant'
                                . ' WHERE promotion_id = :param'
                                . ' ORDER BY etu_nom, etu_prenom');
        
        //execute en envoyant les paramètres        
        $oResultat->execute(array(':param' => $_GET['pro_id']));
        
        
        echo '<form>';
        $oResultat->setFetchMode(PDO::FETCH_OBJ);
        
        echo '<p>Liste des ' , $oResultat->rowCount(), ' étudiants : </p>';
        
        while($oEtudiant = $oResultat->fetch())
        {
            echo '<p>';
            echo strtoupper($oEtudiant->etu_nom) , ' ', $oEtudiant->etu_prenom; 
            echo '</p>';
        }
        echo '</form>';
        ?>
        <a href="AjouterEtudiant.php">Ajouter des étudiants</a>
        <p><a href="index.php">Retour</a></p>
        
    </body>
</html>
