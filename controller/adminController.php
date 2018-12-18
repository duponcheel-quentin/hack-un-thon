<?php
require "model/db.php";
require "model/categoriesManagement.php";

function showAddCategories(){

session_start();


//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST) || isset($_POST)) {
//On sécurise les entrées du formulaire .
foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value);
      }

      addCategories($_POST, $db);
        header("Location: admin.php?success=Votre catégorie a bien été ajouté");
        exit;

}else{
  header("Location: admin.php?success=Veuillez ajouter une catégorie");
  exit;
}
};

function showAddSheet(){
    //On charge la connexion
require "model/db.php";
//On charge le fichier qui contien les fonctions
require "model/feuilleManager.php";
// on démarre une session
session_start();
// on verifie que les entrées de notre formulaire ne soient pas vides
if(!empty($_POST)) {
//On sécurise les entrées du formulaire .
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  addSheet($_POST, $db);
    header("Location: admin.php?success=Votre feuille a bien été ajoutée à la base de données");
    exit;
  }

else {
  header("Location: feuilleAdd.php?message=Votre feuille n'a pas été crée.");
  exit;
}
};

function showDeleteSheet(){
    //on charge la connexion à la db
require "model/db.php";
require "model/sheetManager.php";
// on démarre une session
session_start();
if(isset($_GET["sheet_ID"])) {
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["sheet_ID"]));

  //On appelle la fonction de suppression de produit
  if(deleteProduct($id, $db)) {
    header("Location: admin.php?message=Votre feuille a bien été supprimée");
    exit;
  }
  else {
    header("Location: admin.php?message=votre feuille n'a pas été supprimée");
    exit;
  }
}
};

function showUpdateLeaf(){
//On charge les fonctions de gestion des données
require "Model/db.php";
require "Model/sheetManager.php";

if(!empty($_POST)) {
  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateFeuille($_POST, $db)) {
    header("Location: admin.php?success=Votre feuille a bien été modifiée");
    exit;
  }
  else {
    header("Location: updateSheet.php?Feuille_ID=" . $_POST["sheet_ID"] ."&message=votre feille n'a pas été modifiée");
    exit;
  }
}
};

function showAddUser(){
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
    foreach($users as $key => $user) {
        if($_POST["user_password"] === $_POST["user_password2"]) {
            addUser($_POST, $db);
            //Fin du programme, je redirige avec un message
            header("Location: admin.php?message=L'utilisateur a bien été ajouté");
            exit;
        }
        else {
            header("Location: adminAddUsers.php?message=Le mot de passe et sa confirmation ne correspondent pas!");
        }
    }
}
else {
    header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
    exit;
}
};

function showUpdateUser(){
    //~~~~~~~~~~~~~~~Modifie un utilisateur~~~~~~~~~~~~~~~
if(!empty($_POST) || isset($_POST) && $_POST["button"] === "Modifier") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    foreach($users as $key => $user) {
        updateUser($_POST, $db);
        //Fin du programme, je redirige avec un message
        header("Location: admin.php?message=L'utilisateur a bien été ajouté");
        exit;
}
}
else {
header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
exit;
}
};


 ?>
