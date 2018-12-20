<?php

function showAddCategories(){
//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
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
?>