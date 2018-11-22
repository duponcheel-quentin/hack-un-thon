<?php
//On charge les fonctions de gestion des données
require "model/db.php";
require "model/feuilleManager.php";
restrictToAdmin();

if(!empty($_POST)) {
  //On sécurise les entrées du formulaire .
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  if(addFeuille($_POST, $db)) {
    header("Location: admin.php?success=Votre produit a bien été ajouté au catalogue");
    exit;
  }
  else {
    header("Location: feuilleManager.php?message=6");
    exit;
  }
}
else {
  header("Location: feuilleManager.php?message=0");
  exit;
}

 ?>

 ?>
