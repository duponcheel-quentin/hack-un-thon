<?php
function showListSheets(){
$sheets = getAllSheets();
require "view/listSheetsView.php";
}
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
  //On récupère l'id de la feuille à supprimer
  $id = intval(htmlspecialchars($_GET["sheet_id"]));

  //On appelle la fonction de suppression d'une feuille
  if(deleteSheet($id)) {
    redirectTo("sheetsList");
  }
  require "view/sheetAddView.php";
}

function showUpdateSheet(){
  $value = "Modifier";
  if(!empty($_POST)) {
    //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
    foreach ($_POST as $key => $value) {
      $_POST[$key] = htmlspecialchars($value);
    }
    if($_POST["button"] === "Modifier") {
      updateSheet($_POST);
      redirectTo("sheetsList");
    }
  }
  require "view/sheetAddView.php";
}
}
function showSheetByUser(){
    $sheetByUser = getSheetByUser($_SESSION["user"]["user_id"]);
    require "view/teacherView.php";
  }

?>
