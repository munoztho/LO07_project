<?php 

$user = 'root';
$password = '';
$dataSourceName = 'mysql:host=localhost;dbname=mydb';


try {
    $base = new PDO ($dataSourceName, $user, $password);
    $requete= 'select categorie from utilisateur';
    $cat = $base->exec($requete);
    if ($cat == 0) {        //admin
        echo "on affiche les demandes de nounous ";
        echo "on accepte/refuse candidature de nounou";
    }
    elseif ($cat == 1) {        //nounou
        
    }
    else {                      //parents
    }

}
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

