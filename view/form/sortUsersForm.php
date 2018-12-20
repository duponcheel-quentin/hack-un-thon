<form class="form-inline my-3" action="usersSort" method="post">
    <div class="form-group mr-4">
        <label class="mr-2">Status</label>
        <select class="form-control" name="sort">
            <option disabled selected value>Choisir</option>
            <option value="admin">Admins</option>
            <option value="teacher">Professeurs</option>
            <option value="apprenant">Apprenants</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="button" class="btn btn-success">Trier</button>
    </div>
</form>