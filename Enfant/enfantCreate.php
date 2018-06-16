<?php

require_once '../Connexion/connexion.php';

$req = "SELECT idUtilisateur from utilisateur u, enfant e where e.idParent = u.idUtilisateur and u.type_user=2 ";
$id_parent = $conn->query($req);
for ($i=0; $i < count($_POST['nom']); $i++) {
  $sql = "INSERT INTO enfant (idParent, nom, prenom, age, info) VALUES
  ($id_parent,'".$_POST['nom'][$i]."','".$_POST['prenom'][$i]."','".$_POST['age'][$i]."','".$_POST['info'][$i]."')";
  if (!$conn->query($sql)) {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
  }
}
$conn->close();
header('Location: ../?status=create');
 ?>
