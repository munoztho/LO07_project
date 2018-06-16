<?php

require 'connexion.php';

global $conn;
$sql = "SELECT type_user from utilisateur";
$type_user = $conn->query($sql);
//if type user = 0
//if ($type_user != 1) {
     header('Location: ../Admin/admin.php');
    
//}

