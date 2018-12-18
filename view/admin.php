<?php
include "template/header.php";
require "service/sessionManager.php";
//On restreint l'accès de la page aux utilisateurs enregistrés
restrictToAdmin();
?>

<!--
~~~~~~~~~| CATEGORIES |~~~~~~~~
-->
<div class="container mt-5">
<div class="row">
  <div class="col-12 col-sm-12 d-flex justify-content-center col-md-6 d-flex justify-content-start">
    <div class="card text-white bg-primary mb-3" style="width: 20rem">
      <div class="card-header">Catégories</div>
        <div class="card-body">
          <p class="card-text">Créer ou Supprimer des catégories.</p>
          <div class="d-flex justify-content-around">
            <button type="button" href="categories.php" class="btn btn-light">Créer</button>
            <button type="button" href="#" class="btn btn-light">Supprimer</button>
          </div>
        </div>
    </div>
  </div>
<!--
~~~~~~~~~~~~~~| FEUILLES |~~~~~~~~~~~~~~
-->
<div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end">
<div class="card text-white bg-danger mb-3" style="width: 20rem;">
  <div class="card-header">Feuilles</div>
  <div class="card-body">
    <p class="card-text">Consuter les feuilles d'émargements.</p>
    <div class="d-flex justify-content-around">
    <button type="button" href="viewFeuille.php" class="btn btn-light">Voir</button>
  </div>
  </div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-6">
<div class="card text-white bg-success mb-3" style="width: 20rem;">
  <div class="card-header">Feuilles</div>
  <div class="card-body">
    <p class="card-text">Créer ou Modifier une feuille d'emargement.</p>
    <div class="d-flex justify-content-around">
    <a href="feuilleAdd.php"><button type="button" class="btn btn-light">Créer</button></a>
    <a href="feuilleUpdate.php"><button type="button" class="btn btn-light">Modifier</button></a>
    <a href="feuilleDel.php" ><button type="button" class="btn btn-light">Supprimer</button></a>
    </div>
    </div>
  </div>
  </div>
</div>

  <div class="col-12 col-sm-12 d-flex justify-content-center col-md-6 d-flex justify-content-start">
    <div class="card text-white bg-success mb-3" style="width: 20rem">
      <div class="card-header">Feuilles</div>
        <div class="card-body">
          <p class="card-text">Créer ou Modifier une feuille d'emargement.</p>
          <div class="d-flex justify-content-around">
            <button type="button" href="#" class="btn btn-light">Créer</button>
            <button type="button" href="#" class="btn btn-light">Modifier</button>
          </div>
        </div>
    </div>
  </div>

<!--
~~~~~~~~~~~~~~~| UTILISATEURS |~~~~~~~~~~
-->
  <div class="col-12 col-sm-12 d-flex justify-content-center col-md-6 d-flex justify-content-end">
    <div class="card text-white bg-warning mb-3" style="width: 20rem">
      <div class="card-header">Utilisateurs</div>
        <div class="card-body">
          <p class="card-text">Créer, Modifier ou Supprimer un utilisateur.</p>
          <div class="d-flex justify-content-around">
            <a href="adminAddUsers.php"><button type="button" class="btn btn-light">Ajouter</button></a>
            <a href="listUsers.php"><button type="button" href="listUsers.php" class="btn btn-light">Modifier</button></a>
            <a href="listUsers.php"><button type="button" href="listUsers.php" class="btn btn-light">Supprimer</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
</div>





<?php
include "template/footer.php";
 ?>