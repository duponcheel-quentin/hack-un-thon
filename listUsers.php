<?php

include("template/header.php");
?>

//J'appelle les pages nécessaires à cette page
include("template/header.php");
require("model/db.php");
//Je récupère les données de tous les utilisateurs et je les stocke dans une variable
$query = $bdd->query("SELECT * FROM Users");
$users = $query->fetchall(PDO::FETCH_ASSOC);
?>
<!--C'est le bouton dropdown qui permet de choisir la catégorie d'utilisateur-->

<div class="dropdown mx-auto w-50 my-5">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Catégorie d'utilisateurs
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Admin</button>
    <button class="dropdown-item" type="button">Professeurs</button>
    <button class="dropdown-item" type="button">Apprenants</button>
  </div>
</div>

<div class="w-50 mx-auto">
<a class="btn btn-success" href="adminAddUsers.php" role="button">Ajouter</a>
<a class="btn btn-primary" href="#" role="button">Modifier</a>
<a class="btn btn-danger" href="#" role="button">Supprimer</a>
</div>
<ul class="list-group w-50 mx-auto my-5">
  <li class="list-group-item">Nom</li>
</ul>
<?php

<!--Ce sont les boutons ajouter, modifier et supprimer un utilisateur-->
<div class="w-50 mx-auto">
  <a class="btn btn-success" href="adminAddUsers.php" role="button">Ajouter</a>
  <a class="btn btn-primary" href="#" role="button">Modifier</a>
  <a class="btn btn-danger" href="#" role="button">Supprimer</a>
</div>
<?php
foreach($users as $key => $user) {
?>
<!--C'est la liste des utilisateurs du site-->
<ul class="list-group w-50 mx-auto my-5">
  <li class="list-group-item"><?php echo $user["Nom"] . " " . $user["Prenom"]; ?></li>
</ul>
<?php
}

include("template/footer.php");
?>