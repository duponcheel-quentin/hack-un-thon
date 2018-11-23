<?php
require("model/db.php");
require("model/usersManagement.php");
session_start();
$query = $db->query('SELECT * FROM Users');
$users = $query->fetchall(PDO::FETCH_ASSOC);
//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST) || isset($_POST) && $_POST["button"] === "Envoyer") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    
            addUser($_POST, $db);
            //Fin du programme, je redirige avec un message
            header("Location: admin.php?message=L'utilisateur a bien été ajouté");
            exit; 
}
else {
    header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
    exit;
}
//~~~~~~~~~~~~~~~Modifie un utilisateur~~~~~~~~~~~~~~~
if(!empty($_POST) || isset($_POST) && $_POST["button"] === "Modifier") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    foreach($users as $key => $user) {
        updateUser($_POST, $db);
        //Fin du programme, je redirige avec un message
        header("Location: admin.php?message=L'utilisateur a bien été modifié");
        exit;
    }
}
else {
header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
exit;
}
?>