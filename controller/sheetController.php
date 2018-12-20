<?php
function showListSheet(){}
function showAddSheet(){
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
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["sheet_id"]));

  //On appelle la fonction de suppression de produit
  if(deleteSheet($id)) {
    redirectTo("sheetsList");
  }
}
}

function showUpdateSheet(){
if(!empty($_POST)) {
  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateSheet($_POST)) {
    redirectTo("sheetsList");
  }
}
}
function showSheetByUser(){
    $sheetByUser = getSheetByUser($_SESSION["user"]["user_id"]);
    require "viewteacherView.php";
  }
?>
