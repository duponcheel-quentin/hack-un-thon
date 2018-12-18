<?php 
require "model/db.php";
require "service/sessionManager.php";



function showLogin(){

$reponses = $db->query('SELECT * FROM Users');
$reponse = $reponses->fetchall();
//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  //On récupère les utilisateurs stockés
  foreach ($reponse as $key =>$user) {
    if($user["Nom"] === $_POST["Name"] && $_POST["Password"] === $user["Password"]) {
      //On démarre une session pour y stocker les informations de l'utilisateur
      session_start();
      $_SESSION["user"] = $user;
      if ($_SESSION["user"]["Status"] === "Admin") {
        header("Location: admin.php");
        exit;
      }
      if ($_SESSION["user"]["Status"] === "Teacher"){
        header("Location: teacher.php");
        exit;
      }
    }
  }
  // header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
  exit;
}
//Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de connexion avec un message d'erreur
  header("Location: index.php?message=Vous devez remplir les champs du formulaire");
  exit;
};

function showLogout(){
    logout();
};
?>