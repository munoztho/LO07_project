<?php

include 'page_de_connexion.html';

$user = 'root';
$password = '';
$dataSourceName = 'mysql:host=localhost;dbname=mydb';


try {
    $base = new PDO ($dataSourceName, $user, $password);

}
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}