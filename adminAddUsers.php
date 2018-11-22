<?php
include("template/header.php");
require("model/db.php");
session_start();
?>
<form class="mx-auto w-50 my-5" method="POST" action="UsersTreatment.php">
    <div class="form-group">
        <label for="userName">Nom : </label>
        <input type="text" class="form-control" name="user_name" id="userName" placeholder="nom" required="required">
    </div>
    <div class="form-group">
        <label for="userFirstname">Prénom : </label>
        <input type="text" class="form-control" name="user_firstname" id="userFirstname" placeholder="prénom" required="required">
    </div>
    <div class="form-group">
        <label for="userStreet">Rue : </label>
        <input type="text" class="form-control" name="user_street" id="userStreet" placeholder="rue" required="required">
    </div>
    <div class="form-group">
        <label for="userPostalcode">Code Postal : </label>
        <input type="text" class="form-control" name="user_postalcode" id="userPostalcode" placeholder="code postal" required="required">
    </div>
    <div class="form-group">
        <label for="userCity">Ville : </label>
        <input type="text" class="form-control" name="user_city" id="userCity" placeholder="ville" required="required">
    </div>
    <div class="form-group">
        <label for="userJobID">Identifiant pôle emploi : </label>
        <input type="text" class="form-control" name="user_jobID" id="userJobID" placeholder="identifiant pôle emploi">
    </div>
    <div class="form-group">
        <label for="userMail">Adresse mail : </label>
        <input type="email" class="form-control" name="user_mail" id="userMail" placeholder="name@example.com" required="required">
    </div>
    <div class="form-group">
        <label for="userPassword">Mot de passe : (Ne pas mettre de mot de passe pour les apprenants)</label>
        <input type="password" class="form-control" name="user_password" id="userPassword" placeholder="mot de passe">
    </div>
    <div class="form-group">
        <label for="userPasswordVerify">Vérification mot de passe : (Ne pas mettre de mot de passe pour les apprenants)</label>
        <input type="password" class="form-control" name="user_password2" id="userPasswordVerify" placeholder="mot de passe">
    </div>
    <div class="form-group">
        <label for="userStatus">Status : </label>
        <select class="form-control" name="user_status" id="userStatus" required="required">
        <option>Admin</option>
        <option>Professeur</option>
        <option>Apprenant</option>
        </select>
    </div>
    <div class="form-group">
        <label for="userSexe">Sexe : </label>
        <select class="form-control" name="user_sexe" id="userSexe" required="required">
        <option>Femme</option>
        <option>Homme</option>
        <option>Autre</option>
        </select>
    </div>
    <!--Envoie les données du formulaire, créer un message de succès ou d'erreur et renvoie sur la page d'accueil des admins-->
    <button type="submit" class="btn btn-primary"><a href="admin.php">Envoyer</a></button>
</form>
<?php
include("template/footer.php");
?>