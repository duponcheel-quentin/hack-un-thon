<form class="container" method="post">
 <div class="form-row">
    <div class="form-group mt-3 col-md-4">
      <label for="inputState">Trier par :</label>
        <select name="status" id="inputState" class="form-control">
          <option value="admin">Admins</option>
          <option value="teacher">Professeurs</option>
          <option value="apprenants">Apprenants</option>
        </select>
    </div>
   <div class="form-group col-md-4">
    <label for="inputState">Trier par :</label>
      <select name="order" id="inputState" class="form-control">
        <option  value="name" selected>Nom</option>
      </select>
    </div>
   <div class="form-group col-md-4">
     <label for="inputState">Trier + / - :</label>
     <select class="form-control" id="sort" name="sort">
       <option id="sort" value="1">Ascendant</option>
       <option id="sort" value="0">Descendant</option>
     </select>
   </div>
  <div class="d-flex justify-content-center w-100">
   <button type="submit" class="btn btn-dark" style="height: 3rem; width: 10rem;">Go</button>
  </div>
 </div>
</form>
