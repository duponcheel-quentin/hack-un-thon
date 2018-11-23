<?php
//on charge la connexion à la db
require "model/db.php";
require "model/feuilleManager.php";
// on démarre une session
session_start();
if(isset($_GET["Feuille_ID"])) {
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["Feuille_ID"]));

  //On appelle la fonction de suppression de produit
  if(deleteProduct($id, $db)) {
    header("Location: admin.php?message=Votre feuille a bien été supprimée");
    exit;
  }
  else {
    header("Location: admin.php?message=votre feuille n'a pas été supprimée");
    exit;
  }
}
 ?>
