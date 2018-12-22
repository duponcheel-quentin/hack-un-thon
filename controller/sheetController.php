<?php
function showListSheets(){
<<<<<<< HEAD
$sheets = getAllSheets();
require "view/listSheetsView.php";
=======
  $sheets = getAllSheets();
  require "view/listSheetsView.php";
>>>>>>> 7eb919e739fab6530e6ea3820df8bee2e95de1dd
}
function showAddSheet(){
<<<<<<< HEAD
// on verifie que les entrées de notre formulaire ne soient pas vides
if(!empty($_POST)) {
//On sécurise les entrées du formulaire .
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  addSheet($_POST);
    redirectTo("sheetsList");
  }
}

function showDeleteSheet(){
if(isset($_GET["sheet_id"])) {
  //On récupère l'id de la feuille à supprimer
  $id = intval(htmlspecialchars($_GET["sheet_id"]));

  //On appelle la fonction de suppression d'une feuille
  if(deleteSheet($id)) {
    redirectTo("sheetsList");
=======
  $value = "Ajouter";
  // on verifie que les entrées de notre formulaire ne soient pas vides
  if(!empty($_POST)) {
  //On sécurise les entrées du formulaire .
    foreach ($_POST as $key => $value) {
      $_POST[$key] = htmlspecialchars($value);
    }
      addSheet($_POST);
      redirectTo("sheetsList");
>>>>>>> 7eb919e739fab6530e6ea3820df8bee2e95de1dd
  }
  require "view/sheetAddView.php";
}

function showUpdateSheet(){
  $value = "Modifier";
  $id = htmlspecialchars($_GET["id"]);
  $sheet = getSheet($id);
  if(!empty($_POST)) {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    updateSheet($_POST, $id);
    redirectTo("sheetsList");
  }
  require "view/sheetAddView.php";
}
<<<<<<< HEAD
}
function showSheetByUser(){
    $sheetByUser = getSheetByUser($_SESSION["user"]["user_id"]);
    require "view/teacherView.php";
  }

?>
=======

function showDeleteSheet(){
  if(isset($_GET["id"])) {
    //On récupère l'id du produit à supprimer
    $id = htmlspecialchars($_GET["id"]);
    //On appelle la fonction de suppression de produit
    deleteSheet($id);
    redirectTo("sheetsList");
  }
}

function showSheetByUser() {
  $sheetByUser = hetSheetByUser($_SESSION["user"]["user_id"]);
  require "view/teacherView.php";
}
>>>>>>> 7eb919e739fab6530e6ea3820df8bee2e95de1dd
