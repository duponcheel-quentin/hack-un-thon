<?php
//On charge les fonctions de gestion des données
require "Model/db.php";
require "Model/feuilleManager.php";

if(!empty($_POST)) {
  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateFeuille($_POST, $db)) {
    header("Location: admin.php?success=Votre feuille a bien été modifiée");
    exit;
  }
  else {
    header("Location: updateFeuille.php?Feuille_ID=" . $_POST["Feuille_ID"] ."&message=votre feille n'a pas été supprimée");
    exit;
  }
}

 ?>
