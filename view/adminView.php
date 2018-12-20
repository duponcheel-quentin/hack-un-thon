<?php
include "template/header.php";
?>
<!--
~~~~~~~~~~~~~~~| UTILISATEURS |~~~~~~~~~~
-->
<div class="card-group m-5">
  <div class="card text-white bg-info">
    <article class="card-body text-center">
      <h5 class="card-title">Utilisateurs</h5>
      <p class="card-text">Consulter les utilisateurs.</p>
      <a href="usersList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
  </div>
<!--
~~~~~~~~~~~~~~| FEUILLES |~~~~~~~~~~~~~~
-->
<<<<<<< HEAD
  <div class="card text-white bg-success">
    <article class="card-body text-center">
      <h5 class="card-title">Feuilles</h5>
      <p class="card-text">Consuter les feuilles d'émargements.</p>
      <a href="sheetsList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
=======
<div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end">
<div class="card text-white bg-danger mb-3" style="width: 20rem;">
  <div class="card-header">Feuilles</div>
  <div class="card-body">
    <p class="card-text">Consuter les feuilles d'émargements.</p>
    <div class="d-flex justify-content-around">
    <button type="button" href="sheetList" class="btn btn-light">Voir</button>
>>>>>>> f43cbe4c8fae25976d3e3e50826ab3b518931fce
  </div>
<!--
~~~~~~~~~| CATEGORIES |~~~~~~~~
-->
  <div class="card text-white bg-warning">
    <article class="card-body text-center">
      <h5 class="card-title">Catégories</h5>
      <p class="card-text">Consulter les catégories.</p>
      <a href="categoriesList"><button type="button" class="btn btn-light">Voir</button></a>
    </article>
  </div>
</div>
<?php
include "template/footer.php";
 ?>
