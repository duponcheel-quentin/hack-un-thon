<?php
//On charge la connexion
require "model/db.php";
//On charge le fichier qui contien les fonctions
require "model/feuilleManager.php";
// on démarre une session
session_start();
// on fait appel à la fonction qui restrint l'accés aux admin
restrictToAdmin();
// on verifie que les entrées de notre formulaire ne soient pas vides
if(!empty($_POST)) {
  //On sécurise les entrées du formulaire .
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  if(addFeuille($_POST, $db)) {
    header("Location: admin.php?success=Votre feuille a bien été ajoutée à la base de données");
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
