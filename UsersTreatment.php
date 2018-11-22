<?php
require("model/db.php");
require("model/usersManagement.php");
session_start();

//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST)) {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
}
else {
    header("Location: adminAddUsers.php?message=Merci de remplir le formulaire svp!");
    exit;
}
//Je vérifie que le formulaire n'est pas null
if(!isset($_POST)) {
    header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
    exit;
}
else {
    addUser($_POST, $bdd);
    //Fin du programme, je redirige avec un message
    header("Location: admin.php?message=L'utilisateur a bien été ajouté");
    exit; 
}
//~~~~~~~~~~~~~~~~Modifie un utilisateur~~~~~~~~~~~~~~~~

//~~~~~~~~~~~~~~~~Supprime un utilisateur~~~~~~~~~~~~~~~~~
?>