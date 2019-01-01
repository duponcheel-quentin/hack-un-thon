<?php

function showListCategories() {
  getCategories();
  require "view/listCategoriesView.php";
}

function showAddCategories(){
  //Je vérifie que le form contient quelque chose
  if(!empty($_POST)) {
  //On sécurise les entrées du formulaire .
      foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
          addCategories($_POST);
  }
  redirectTo("categoriesList");

}

function showUpdateCategories()
{
  $id = htmlspecialchars($_GET["id"]);
  $category = getCategory($_GET["id"]);
  if(!empty($_POST)) {
  if (updateCategories($_POST, $id)) {
  redirectTo("categoriesList");
}
}
  require "view/modifyCategorieView.php";
}

function showDeleteCategories()
{
  if(deleteCategories($_GET["id"])) {
    redirectTo("categoriesList");
  }
}
?>
