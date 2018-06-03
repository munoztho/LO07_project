<?php

 
if (empty($_POST['login']) | empty($_POST['mdp'])) 
 {
       echo 'login et password ne sont pas inscrits du tout';
}
else {
        //connexion avec la base de données
        $pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
       $sth = $pdo->prepare('SELECT prenom FROM utilisateur WHERE login = ? and mdp = ?');
$sth->execute(array($_POST['login'], $_POST['mdp']));
if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
   session_start(); 
   $_SESSION['prenom'] = $row['prenom'];
   header('Location:page_accueil.php');
}
else{
   header('Location: page_de_connexion.php');
   exit();
}
}