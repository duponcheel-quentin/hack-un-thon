<form class="w-75 m-auto" method="post">
  <input type="hidden" name="category_id" value="<?php echo $category["category_id"]; ?>">
  <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $category["category_name"]; ?>">
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success">Enregistrer</button>
  </div>
</form>
