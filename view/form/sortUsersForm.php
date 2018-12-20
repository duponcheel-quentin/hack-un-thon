<form class="container" method="post">
 <div class="form-row">
   <div class="form-group col-md-4">
     <label for="inputState">Trier par :</label>
     <select name="status" id="inputState" class="form-control">
        <option value="admins">Admins</option>
        <option value="teacher">Professeurs</option>
        <option value="apprenants">Apprenants</option>
     </select>
   </div>
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
   <button type="submit" class="btn btn-dark  col-md-2 mt-4" style="height: 3rem;">Go</button>
 </div>
</form>