<?php
$id = htmlspecialchars($_GET["sheet_id"]);
$sheet = getSheet($id);
?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <!-- Si on a trouvé un produit en BD on affiche le formulaire -->
      <?php if(!empty($sheet)) { ?>
      <h2>Remplissez le formulaire  pour ajouter une feuille</h2>
      <div class="container-fluide">
        <div class="row">
          <form class="w-75 mx-auto my-5" action="" method="post">
            <input type="hidden" name="id" <?php echo "value='" . $id . "'" ?>>
            <div class="form-group">
              <label for="organization">Organisme</label>
              <input type="text" class="form-control" id="organization" name="organization" <?php echo "value='" . $product["organization"] . "'"; ?>>
            </div>
            <div class="form-group">
              <label for="entitled">Prix</label>
              <input type="text" class="form-control" id="entitled" name="entitled" <?php echo "value='" . $product["entitled"] . "'"; ?> >
            </div>
          </div>
      </div>
 <?php
}
  ?>
