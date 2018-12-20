<?php

function showListCategories() {
  getCategories();
  require "view/categoriesView.php";
}

function showAddCategories(){
//Je vérifie que le form contient quelque chose
if(!empty($_POST) || isset($_POST)) {
//On sécurise les entrées du formulaire .
foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
      }
        addCategories($_POST);
        redirectTo("categoriesList");
}
}

function showUpdateCategories()
{
  if(!empty($_POST)) {
  updateCategories($_POST);
  redirectTo("accueil");
}
  $user = getUser($_GET["id"]);
  if(empty($user)){
  header("Location: ../accueil");
}
  require "view/modifyUserView.php";
}
?>
