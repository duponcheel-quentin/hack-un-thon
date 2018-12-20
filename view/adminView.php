<?php
include "template/header.php";
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
          <p class="card-text">Consulter les catégories.</p>
          <div class="d-flex justify-content-around">
            <a href="categoriesList"><button type="button" class="btn btn-light">Voir</button></a>
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
    <button type="button" href="sheetsList" class="btn btn-light">Voir</button>
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
          <p class="card-text">Consulter les utilisateurs.</p>
          <div class="d-flex justify-content-around">
            <a href="usersList"><button type="button" class="btn btn-light">Voir</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
</div>

<?php
include "template/footer.php";
 ?>
