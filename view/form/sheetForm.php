<form class="mx-auto w-50 my-5 container" method="post" action="">
  <input type="hidden" class="form-control" name="sheet_id" value="<?php echo (isset($sheet)?$sheet["sheet_id"]:""); ?>">
  <div class="form-group">
    <label for="organization" class="col-sm-2 col-form-label">Organisme</label>
    <input type="text" class="form-control" id="organization" name="organization" placeholder="Organisme" value="<?php echo (isset($sheet)?$sheet["organization"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="entitled" class="col-sm-2 col-form-label">Matière</label>
    <input type="text" class="form-control" id="entitled" name="entitled" placeholder="Intitule" value="<?php echo (isset($sheet)?$sheet["entitled"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="start">Date de début :</label>
    <input type="date" id="start" name="start" min="2018-01-10" max="3000-04-30" value="<?php echo (isset($sheet)?$sheet["start"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="end">Date de fin:</label>
    <input type="date" id="end" name="end" min="2018-01-10" max="3000-04-30" value="<?php echo (isset($sheet)?$sheet["end"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="monday_morning">Lundi Matin : </label>
    <select class="form-control" name="monday_morning" id="monday_morning" value="<?php echo (isset($sheet)?$sheet["monday_morning"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="monday_afternoon">Lundi Après-Midi : </label>
    <select class="form-control" name="monday_afternoon" id="monday_afternoon" value="<?php echo (isset($sheet)?$sheet["monday_afternoon"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tuesday_morning">Mardi Matin : </label>
    <select class="form-control" name="tuesday_morning" id="tuesday_morning" value="<?php echo (isset($sheet)?$sheet["tuesday_morning"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tuesday_afternoon">Mardi Après-Midi : </label>
    <select class="form-control" name="tuesday_afternoon" id="tuesday_afternoon" value="<?php echo (isset($sheet)?$sheet["tuesday_afternoon"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="wednesday_morning">Mercredi Matin : </label>
    <select class="form-control" name="wednesday_morning" id="wednesday_morning" value="<?php echo (isset($sheet)?$sheet["wednesday_morning"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="wednesday_afternoon">Mercredi Après-Midi : </label>
    <select class="form-control" name="wednesday_afternoon" id="wednesday_afternoon" value="<?php echo (isset($sheet)?$sheet["wednesday_afternoon"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="thursday_morning">Jeudi Matin : </label>
    <select class="form-control" name="thursday_morning" id="thursday_morning" value="<?php echo (isset($sheet)?$sheet["thursday_morning"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="thursday_afternoon">Jeudi Après-Midi : </label>
    <select class="form-control" name="thursday_afternoon" id="thursday_afternoon" value="<?php echo (isset($sheet)?$sheet["thursday_afternoon"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="friday_morning">Vendredi Matin : </label>
    <select class="form-control" name="friday_morning" id="friday_morning" value="<?php echo (isset($sheet)?$sheet["friday_morning"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group">
    <label for="friday_afternoon">Vendredi Après-Midi : </label>
    <select class="form-control" name="friday_afternoon" id="friday_afternoon" value="<?php echo (isset($sheet)?$sheet["friday_afternoon"]:""); ?>">
      <option value="1">Oui</option>
      <option value="0">Non</option>
    </select>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="button" value="<?php echo $value; ?>" class="btn btn-primary"><?php echo $value; ?></button>
    </div>
  </div>
</form>
