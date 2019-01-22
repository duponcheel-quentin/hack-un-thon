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
      $value = "Ajouter";
      // on verifie que les entrées de notre formulaire ne soient pas vides
      if(!empty($_POST)) {
        //On sécurise les entrées du formulaire .
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
        addSheet($_POST);
        redirectTo("sheetsList");
      }
      require "view/sheetAddView.php";
    }

    function showUpdateSheet(){
      $value = "Modifier";
      //$modayMorning = (isset($_POST['monday_morning']) ? $_POST['monday_morning']: false);
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
  }
  function showSheetByUser(){
    $sheetByUser = getSheetByUser($_SESSION["user"]["user_id"]);
    require "view/teacherView.php";
  }
}
?>
