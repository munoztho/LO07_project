<?php

 
if (empty($_POST['email']) | empty($_POST['mdp'])) 
 {
       echo 'login et password ne sont pas inscrits du tout';
}
else {
        //connexion avec la base de données
        $pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
       $sth = $pdo->prepare('SELECT prenom FROM utilisateur WHERE email = ? and mdp = ?');
$sth->execute(array($_POST['email'], $_POST['mdp']));
if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
   session_start(); 
   $_SESSION['email'] = $row['email'];
   header('Location:page_accueil.php');
}
else{
   header('Location: page_de_connexion.php');
   exit();
}
}