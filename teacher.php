<?php require "template/header.php";?>
<?php require "model/db.php";?>
<?php require "model/userManager.php";?>
<?php session_start();?>
<div class="container text-center">
<h2>Bonjour <?php echo $_SESSION["user"]["Nom"];?> liste emargement du <?php echo $_SESSION["user"]["Cours"]["Date"];?> </h2>
</div>

<h2>Mes cours</h2>

<div class="dropdown">
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