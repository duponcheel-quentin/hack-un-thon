<?php
require "template/header.php";
require "model/db.php";
session_start();
$query = $db->query("SELECT * FROM Categories");
$categories = $query->fetchall(PDO::FETCH_ASSOC);
 ?>

<form class="container" action="categoriesTreatment.php" method="post">
  <p>Créer catégorie :</p>
  <input type="text" name="Categories_name" value="" placeholder="Nouvelle catégorie">
  <div class="">
    <a href="admin.php" type="submit" class="btn btn-light">Créer</a>
    <a href="admin.php" class="btn btn-light">Retour</a>
  </div>
</form>

<?php
require "template/footer.php";
 ?>
