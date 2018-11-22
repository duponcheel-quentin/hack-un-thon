<?php
include "template/header.php";
?>
<!--
~~~~~~~~~| CATEGORIES |~~~~~~~~
-->
<div class="container mt-5">
<div class="row">
  <div class=" col-12 col-sm-12 col-md-6 ">
<div class="card text-white bg-primary mb-3" style="width: 20rem;">
  <div class="card-header">Catégories</div>
  <div class="card-body">
    <p class="card-text">Créer ou Supprimer des catégories.</p>
    <div class="d-flex justify-content-around">
    <button type="button" href="#" class="btn btn-light">Créer</button>
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
    <button type="button" href="#" class="btn btn-light">Voir</button>
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
    <button type="button" href="#" class="btn btn-light">Créer</button>
    <button type="button" href="#" class="btn btn-light">Modifier</button>
  </div>
  </div>
</div>
</div>

<!--
~~~~~~~~~~~~~~~| UTILISATEURS |~~~~~~~~~~
-->
<div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end">
<div class="card text-white bg-warning mb-3" style="width: 20rem;">
  <div class="card-header">Utilisateurs</div>
  <div class="card-body">

    <p class="card-text">Créer, Modifier ou Supprimer un utilisateur.</p>
    <div class="d-flex justify-content-around">
    <button type="button" href="#" class="btn btn-light">Créer</button>
    <button type="button" href="#" class="btn btn-light">Modifier</button>
    <button type="button" href="#" class="btn btn-light">Supprimer</button>

    <h5 class="card-title">Utilisateurs</h5>
    <h6 class="card-subtitle mb-2 text-muted">Créer/Modifier/Supprimer un utilisateur</h6>
    <a href="adminAddUsers" class="card-link">Créer</a>
    <a href="#" class="card-link">Modifier</a>
    <a href="#" class="card-link">Supprimer</a>


  </div>
  </div>
</div>
</div>
</div>
</div>





<?php
include "template/footer.php";
 ?>