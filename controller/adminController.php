<?php
function showAddUser(){
//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST) && $_POST["button"] === "Envoyer") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    if($_POST["user_password"] === $_POST["user_password2"]) {
            addUser($_POST);
            //Fin du programme, je redirige avec un message
            redirectTo("admin");
        }
    }
    require "view/userAddView.php";
}
function showUpdateUser(){
    //~~~~~~~~~~~~~~~Modifie un utilisateur~~~~~~~~~~~~~~~
if(!empty($_POST) || isset($_POST) && $_POST["button"] === "Modifier") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
      if(updateUser($_POST)) {
        //Fin du programme, je redirige avec un message
        redirectTo("admin");
      }     
    }
}

function showAdminView(){
 require "view/adminView.php";
}
function showUsersList() {
  require "view/listUsersView.php";
}
?>