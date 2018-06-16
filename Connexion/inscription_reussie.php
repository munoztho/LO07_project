<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user = 'root';
$password = '';
$dataSourceName = 'mysql:host=localhost;dbname=mydb';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];



try {
    $base = new PDO ($dataSourceName, $user, $password);
    
  
$requete1 = "insert into utilisateur (email, mdp) values ('$email', '$mdp')";
$base->exec($requete1);



echo '<head>
    <link rel="stylesheet" href="style.css">
    </head>
';
echo '<div class="container">
			<div class="row main">
				<div class="main-login main-center">
                                Inscription réussie <br>
    Bienvenue ' .$email.' 
 <br>       

<a href="page_de_connexion.html">Cliquez ici pour revenir à la page de connexion </a>
</div>
</div>
</div>
';
}
        
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}