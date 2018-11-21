<?php
include("template/header.php");
?>
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
include("template/footer.php");
?>