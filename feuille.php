<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form class="container" method="post" action="feuilleTraitement.php">
  <div class="form-group row">
    <label for="Organisme" class="col-sm-2 col-form-label">Organisme</label>
    <div class="col-sm-10">
      <input type="Organisme" class="form-control" id="inputEmail3" placeholder="Organisme">
    </div>
  </div>
  <p>
    <label for="Intitule">Choisir un cours.</label><br />
    <select name="Intitule" id="Intitule">
      <optgroup label="Les Langues">
        <option value="Intitule">Allemand</option>
        <option value="Intitule">Anglais</option>
        <option value="Intitule">Arabe</option>
        <option value="Intitule">Chinois</option>
        <option value="Intitule">Espagnole</option>
        <option value="Intitule">Italien</option>
        <option value="Intitule">Neerlandais</option>
      </optgroup>
      <optgroup label="Les Essentiels">
        <option value="Intitule">Alphabetisation</option>
        <option value="Intitule">Atelier tutorès</option>
      </optgroup>
      <optgroup label="Les artistiques">
        <option value="Intitule">Peinture</option>
        <option value="Intitule">Dessin de base</option>
        <option value="Intitule">Dessin perfectionnement</option>
        <option value="Intitule">Dessin model vivant</option>
        <option value="Intitule">Infographie</option>

      </optgroup>
    </select>
  </p>
</div>
  <div>
    <label for="Debut">Date de début :</label>
    <input type="date" id="Debut" name="Debut" min="2018-01-10" max="3000-04-30">
  </div>
  <div>
    <label for="Fin">Dtae de fin:</label>
    <input type="date" id="Fin" name="Fin" min="2018-01-10" max="3000-04-30">
  </div>

<fieldset class="form-group">
  <div class="row">
    <legend class="col-form-label col-sm-2 pt-0">Date du cours</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Lundi_matin" id="Lundi_matin" value="option1">
        <label class="form-check-label" for="Lundi_matin">Lundi matin</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Lundi_aprem" id="Lundi_aprem" value="option1">
        <label class="form-check-label" for="Lundi_aprem">Lundi après-midi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Mardi_matin" id="Mardi_matin" value="option1">
        <label class="form-check-label" for="Mardi_matin">Mardi matin</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Manrdi_aprem" id="Manrdi_aprem" value="option1">
        <label class="form-check-label" for="Manrdi_aprem">Mardi après-midi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Mercredi_matin" id="Mercredi_matin" value="option1">
        <label class="form-check-label" for="Mercredi_matin">Mercredi matin</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Mercredi_aprem" id="Mercredi_aprem" value="option1">
        <label class="form-check-label" for="Mercredi_aprem">Mercredi après-midi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Jeudi_aprem" id="Jeudi_aprem" value="option1">
        <label class="form-check-label" for="gridRadios1">Jeudi matin</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Jeudi_matin" id="Jeudi_matin" value="option1">
        <label class="form-check-label" for="gridRadios1">Jeudi après-midi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="vendredi_matin" id="vendredi_matin" value="option">
        <label class="form-check-label" for="vendredi_matin">Vendredi matin</label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="Vendredi_aprem" id="Vendredi_aprem" value="option">
        <label class="form-check-label" for="gridRadios3">Vendredi après-midi</label>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
