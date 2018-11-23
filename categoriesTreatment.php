<?php
require "model/db.php";
require "model/categoriesManagement.php";
session_start();


//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST) || isset($_POST)) {
//On sécurise les entrées du formulaire .
foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
      }

      addCategories($_POST, $db);
        header("Location: admin.php?success=Votre catégorie a bien été ajouté");
        exit;

}else{
  header("Location: admin.php?success=Veuillez ajouter une catégorie");
  exit;
}
 ?>
