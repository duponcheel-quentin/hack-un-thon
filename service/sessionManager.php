<?php

//Fonction de démarrage d'une session anonyme en cas d'erreur d'enregistrement
function initializeAnonymousSession($answers) {
  session_start();
  $_SESSION["answers"] = $answers;
}

//Fonction de démarrage standard d'une session utilisateur
function initializeUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
}

//Fonction de déconnexion
function logout() {
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php?success=Vous avez été déconnecté, à bientôt :)");
}

//Fonction pour restreindre l'accès d'une page à un utilisateur authentifié
function restrictToUser() {
  session_start();
  if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: index.php?message=Veuillez vous connecter");
    exit;
  }
}

//Fonction pour restreindre l'accès d'une page à un administrateur authentifié
function restrictToAdmin() {
  session_start();
  if(!isset($_SESSION["user"]) || $_SESSION["user"]["Status"] !== "Admin") {
    header("Location: index.php?message=Vous n'avez pas les droits de connexion");
    exit;
  }
}

 ?>
