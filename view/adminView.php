<?php
include "template/header.php";
?>
<!--
~~~~~~~~~~~~~~~| UTILISATEURS |~~~~~~~~~~
-->

<div class="row white">
  <div class="col-12 col-sm-6 col-lg-4">
      <div class="card text-center">
        <div class="card-body dark">
        <h5 class="card-title">Utilisateurs</h5>
        <p class="card-text">Consulter les utilisateurs.</p>
        <a href="usersList"><button type="button" class="btn white backdark">Voir</button></a>
      </div>
    </div>
  </div>
  <!--
  ~~~~~~~~~~~~~~| FEUILLES |~~~~~~~~~~~~~~
-->
<div class="col-12 col-sm-6 col-lg-4">
  <div class="card text-center">
    <div class="card-body dark">
      <h5 class="card-title">Feuilles</h5>
      <p class="card-text">Consuter les feuilles d'émargements.</p>
      <a href="sheetsList"><button type="button" class="btn white backdark">Voir</button></a>
    </div>
  </div>
</div>
<!--
~~~~~~~~~| CATEGORIES |~~~~~~~~
-->
<div class="col-12 col-ms-6 col-lg-4">
  <div class="card text-center">
    <div class="card-body dark">
      <h5 class="card-title">Catégories</h5>
      <p class="card-text">Consulter les catégories.</p>
      <a href="categoriesList"><button type="button" class="btn white backdark">Voir</button></a>
    </div>
  </div>
</div>
</div>
<?php
include "template/footer.php";
?>
