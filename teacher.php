<?php require "template/header.php";
require "model/db.php";
require "model/usersManagement.php";
require "service/sessionManager.php";
//On restreint l'accès de la page aux utilisateurs enregistrés
restrictToUser();?>
<div class="container text-center mt-5">
<h2>Bonjour <?php echo $_SESSION["user"]["Nom"];?> liste emargement du <?php echo $_SESSION["user"]["Date"] ?> </h2>
</div>

<h2 class="text-center mt-5 mb-3">Mes cours</h2>

<div class="dropdown text-center mb-5">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Matière
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>
    <a class="dropdown-item" href="#">Nom élève</a>


  </div>
</div>
<?php require "template/footer.php";?>