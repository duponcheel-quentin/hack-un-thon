<?php
// on démarre la session
session_start();
// oncharge le header
require "template/header.php";
// on se connecte à la base de données
require "model/db.php";
?>
<!-- on ajoute notre formulaire -->
<form class="mx-auto w-50 my-5 container" method="post" action="feuilleTraitementAdd.php">
  <div class="form-group">
    <label for="Organisme" class="col-sm-2 col-form-label">Organisme</label>
    <input type="text" class="form-control" id="Organisme" name="Organisme" placeholder="Organisme">
  </div>
  <div class="form-group">
    <label for="Intitule" class="col-sm-2 col-form-label">Matière</label>
    <input type="text" class="form-control" id="Intitule" name="Intitule" placeholder="Intitule">
  </div>
  <div class="form-group">
    <label for="Debut">Date de début :</label>
    <input type="date" id="Debut" name="Debut" min="2018-01-10" max="3000-04-30">
  </div>
  <div class="form-group">
    <label for="Fin">Date de fin:</label>
    <input type="date" id="Fin" name="Fin" min="2018-01-10" max="3000-04-30">
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Date du cours</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Lundi_matin" id="Lundi_matin" value="1">
          <label class="form-check-label" for="Lundi_matin">Lundi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Lundi_aprem" id="Lundi_aprem" value="1">
          <label class="form-check-label" for="Lundi_aprem">Lundi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Mardi_matin" id="Mardi_matin" value="1">
          <label class="form-check-label" for="Mardi_matin">Mardi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Mardi_aprem" id="Mardi_aprem" value="1">
          <label class="form-check-label" for="Mardi_aprem">Mardi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Mercredi_matin" id="Mercredi_matin" value="1">
          <label class="form-check-label" for="Mercredi_matin">Mercredi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Mercredi_aprem" id="Mercredi_aprem" value="1">
          <label class="form-check-label" for="Mercredi_aprem">Mercredi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Jeudi_matin" id="Jeudi_matin" value="1">
          <label class="form-check-label" for="Jeudi_matin">Jeudi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Jeudi_aprem" id="Jeudi_aprem" value="1">
          <label class="form-check-label" for="Jeudi_aprem">Jeudi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Vendredi_matin" id="Vendredi_matin" value="1">
          <label class="form-check-label" for="Vendredi_matin">Vendredi matin</label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="Vendredi_aprem" id="Vendredi_aprem" value="1">
          <label class="form-check-label" for="Vendredi_aprem">Vendredi après-midi</label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
  </div>
</form>
<!-- on charge le footer -->
<?php
require "template/footer.php";
?>
