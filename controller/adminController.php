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
        header("Location: admin.php?success=Votre catégorie a bien été ajouté");
        exit;

}
else{
  header("Location: admin.php?success=Veuillez ajouter une catégorie");
  exit;
}
}

function showAddSheet(){
// on verifie que les entrées de notre formulaire ne soient pas vides
if(!empty($_POST)) {
//On sécurise les entrées du formulaire .
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  addSheet($_POST);
    header("Location: admin.php?success=Votre feuille a bien été ajoutée à la base de données");
    exit;
  }

else {
  header("Location: feuilleAdd.php?message=Votre feuille n'a pas été crée.");
  exit;
}
}

function showDeleteSheet(){
if(isset($_GET["sheet_ID"])) {
  //On récupère l'id du produit à supprimer
  $id = intval(htmlspecialchars($_GET["sheet_ID"]));

  //On appelle la fonction de suppression de produit
  if(deleteProduct($id)) {
    header("Location: admin.php?message=Votre feuille a bien été supprimée");
    exit;
  }
  else {
    header("Location: admin.php?message=votre feuille n'a pas été supprimée");
    exit;
  }
}
}

function showUpdateLeaf(){
if(!empty($_POST)) {
  //On sécurise les entrées du formulaire et on transforme en integer ce qui doit l'être pour la DB
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //On appelle la fonction pour modifier les valeurs du produits
  if(updateFeuille($_POST)) {
    header("Location: admin.php?success=Votre feuille a bien été modifiée");
    exit;
  }
  else {
    header("Location: updateSheet.php?Feuille_ID=" . $_POST["sheet_ID"] ."&message=votre feille n'a pas été modifiée");
    exit;
  }
}
}

function showAddUser(){
//~~~~~~~~~~~~~~~Ajoute un utilisateur~~~~~~~~~~~~~~~
//Je vérifie que le form contient quelque chose
if(!empty($_POST) || isset($_POST) && $_POST["button"] === "Envoyer") {
    //Je nettoie le form et sécurise les données
    foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
    }
    if($_POST["user_password"] === $_POST["user_password2"]) {
            addUser($_POST);
            //Fin du programme, je redirige avec un message
            header("Location: admin.php?message=L'utilisateur a bien été ajouté");
            exit;
        }
        else {
            header("Location: adminAddUsers.php?message=Le mot de passe et sa confirmation ne correspondent pas!");
        }
    }
    else {
      header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
      exit;
    }
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
        header("Location: admin.php?message=L'utilisateur a bien été ajouté");
        exit;
      }     
    }
    else {
    header("Location: adminAddUsers.php?message=Le formulaire n'est pas remplis correctement!");
    exit;
    }
}

?>
