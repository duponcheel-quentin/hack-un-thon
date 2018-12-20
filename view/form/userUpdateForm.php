<form class="mx-auto w-50 my-5" method="POST">
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom" required="required" value="<?php echo $user["name"]?>">
    </div>
    <div class="form-group">
        <label for="userFirstname">Prénom : </label>
        <input type="text" class="form-control" name="user_firstname" id="userFirstname" placeholder="prénom" required="required" value="<?php echo $user["firstname"]?>">
    </div>
    <div class="form-group">
        <label for="userStreet">Rue : </label>
        <input type="text" class="form-control" name="user_street" id="userStreet" placeholder="rue" required="required" value="<?php echo $user["street"]?>">
    </div>
    <div class="form-group">
        <label for="userPostalcode">Code Postal : </label>
        <input type="text" class="form-control" name="user_postalcode" id="userPostalcode" placeholder="code postal" required="required" value="<?php echo $user["pc"]?>">
    </div>
    <div class="form-group">
        <label for="userCity">Ville : </label>
        <input type="text" class="form-control" name="user_city" id="userCity" placeholder="ville" required="required" value="<?php echo $user["city"]?>">
    </div>
    <div class="form-group">
        <label for="userJobID">Identifiant pôle emploi : </label>
        <input type="text" class="form-control" name="user_jobID" id="userJobID" placeholder="identifiant pôle emploi" value="<?php echo $user["id_pole_emploi"]?>">
    </div>
    <div class="form-group">
        <label for="userMail">Adresse mail : </label>
        <input type="email" class="form-control" name="user_mail" id="userMail" placeholder="name@example.com" required="required" value="<?php echo $user["mail"]?>">
    </div>
    <div class="form-group">
        <label for="userPassword">Mot de passe : (Ne pas mettre de mot de passe pour les apprenants)</label>
        <input type="password" class="form-control" name="user_password" id="userPassword" placeholder="mot de passe" value="<?php echo $user["password"]?>">
    </div>
    <div class="form-group">
        <label for="userPasswordVerify">Vérification mot de passe : (Ne pas mettre de mot de passe pour les apprenants)</label>
        <input type="password" class="form-control" name="user_password2" id="userPasswordVerify" placeholder="mot de passe" value="<?php echo $user["password_verif"]?>">
    </div>
    <div class="form-group">
        <label for="userStatus">Status : </label>
        <select class="form-control" name="user_status" id="userStatus" required="required"value="<?php echo $user["status"]?>">
        <option>admin</option>
        <option>teacher</option>
        <option>apprenant</option>
        </select>
    </div>
    <div class="form-group">
        <label for="userSexe">Sexe : </label>
        <select class="form-control" name="user_sexe" id="userSexe" required="required" value="<?php echo $user["sex"]?>">
        <option>Femme</option>
        <option>Homme</option>
        <option>Autre</option>
        </select>
    </div>
    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
    <button type="submit" name="button" value="Envoyer" class="btn btn-primary">Envoyer</button>
</form>