<?php
require("template/header.php");
?>
<form>
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="userFirstname">Prénom : </label>
        <input type="text" class="form-control" name="user_firstname" id="userFirstname" placeholder="prénom">
    </div>
    <div class="form-group">
        <label for="userStreet">Rue : </label>
        <input type="text" class="form-control" name="user_street" id="userStreet" placeholder="rue">
    </div>
    <div class="form-group">
        <label for="userPostalcode">Code Postal : </label>
        <input type="text" class="form-control" name="user_postalcode" id="userPostalcode" placeholder="code postal">
    </div>
    <div class="form-group">
        <label for="userCity">Ville : </label>
        <input type="text" class="form-control" name="user_city" id="userCity" placeholder="ville">
    </div>
    <div class="form-group">
        <label for="userJobID">Identifiant emploi : </label>
        <input type="text" class="form-control" name="user_jobID" id="userJobID" placeholder="identifiant pole emploi">
    </div>
    <div class="form-group">
        <label for="userMail">Adresse mail : </label>
        <input type="email" class="form-control" name="user_mail" id="userMail" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="userStatus">Status : </label>
        <select class="form-control" name="user_status" id="userStatus">
        <option>Admin</option>
        <option>Professeur</option>
        <option>Apprenant</option>
        </select>
    </div>
    <div class="form-group">
        <label for="userSexe">Sexe : </label>
        <select class="form-control" name="user_sexe" id="userSexe">
        <option>Homme</option>
        <option>Femme</option>
        <option>Autre</option>
        </select>
    </div>
</form>
<?php
require("template/footer.php");
?>