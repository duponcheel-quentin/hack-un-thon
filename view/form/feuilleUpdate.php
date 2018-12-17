<?php
//On charge le fichier connexion à la db
require "model/db.php";
require "model/feuilleManager.php";
//on sécurise les entrées
$id = htmlspecialchars($_GET["Feuille_ID"]);
$feuille = getFeuille($id, $db);
//on charge le header
include "template/header.php";
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <!-- Si on a trouvé un produit en BD on affiche le formulaire -->
      <?php if(!empty($feuille)) { ?>
      <h2>Remplissez le formulaire  pour ajouter une feuille</h2>
      <div class="container-fluide">
        <div class="row">
          <form class="w-75 mx-auto my-5" action="feuilleTraitementUpdate.php" method="post">
            <input type="hidden" name="id" <?php echo "value='" . $id . "'" ?>>
            <div class="form-group">
              <label for="Organisme">Organisme</label>
              <input type="text" class="form-control" id="Organisme" name="Organisme" <?php echo "value='" . $product["Organisme"] . "'"; ?>>
            </div>
            <div class="form-group">
              <label for="Intitule">Prix</label>
              <input type="Intitule" class="form-control" id="Intitule" name="Intitule" <?php echo "value='" . $product["Intitule"] . "'"; ?> >
            </div>
          </div>
      </div>
 <?php
 include "template/footer.php"
  ?>
