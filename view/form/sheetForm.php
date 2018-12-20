<form class="mx-auto w-50 my-5 container" method="post" action="">
  <input type="hidden" class="form-control" name="user_id" value="<?php echo (isset($sheet)?$sheet["sheet_id"]:""); ?>">
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

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Date du cours</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="monday_morning" id="monday_morning" value="<?php echo (isset($sheet)?$sheet["monday_morning"]:"1"); ?>">
          <label class="form-check-label" for="monday_morning">Lundi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="monday_afternoon" id="monday_afternoon" value="<?php echo (isset($sheet)?$sheet["monday_afternoon"]:"1"); ?>">
          <label class="form-check-label" for="monday_afternoon">Lundi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tuesday_morning" id="tuesday_morning" value="<?php echo (isset($sheet)?$sheet["tuesday_morning"]:"1"); ?>">
          <label class="form-check-label" for="tuesday_morning">Mardi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tuesday_afternoon" id="tuesday_afternoon" value="<?php echo (isset($sheet)?$sheet["tuesday_afternoon"]:"1"); ?>">
          <label class="form-check-label" for="tuesday_afternoon">Mardi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="wednesday_morning" id="wednesday_morning" value="<?php echo (isset($sheet)?$sheet["wednesday_morning"]:"1"); ?>">
          <label class="form-check-label" for="wednesday_morning">Mercredi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="wednesday_afternoon" id="wednesday_afternoon" value="<?php echo (isset($sheet)?$sheet["wednesday_afternoon"]:"1"); ?>">
          <label class="form-check-label" for="wednesday_afternoon">Mercredi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="thursday_morning" id="thursday_morning" value="<?php echo (isset($sheet)?$sheet["thursday_morning"]:"1"); ?>">
          <label class="form-check-label" for="thursday_morning">Jeudi matin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="thursday_afternoon" id="thursday_afternoon" value="<?php echo (isset($sheet)?$sheet["thursday_afternoon"]:"1"); ?>">
          <label class="form-check-label" for="thursday_afternoon">Jeudi après-midi</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="friday_morning" id="friday_morning" value="<?php echo (isset($sheet)?$sheet["friday_morning"]:"1"); ?>">
          <label class="form-check-label" for="friday_morning">Vendredi matin</label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="friday_afternoon" id="friday_afternoon" value="<?php echo (isset($sheet)?$sheet["friday_afternoon"]:"1"); ?>">
          <label class="form-check-label" for="friday_afternoon">Vendredi après-midi</label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="button" value="<?php echo $value; ?>" class="btn btn-primary"><?php echo $value; ?></button>
    </div>
  </div>
</form>
