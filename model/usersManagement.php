<?php 
//function that adds the user
function addUser($user, $bdd) {
    $query = $bdd->prepare("INSERT INTO Users (Status, Nom, Prenom, Password, Password_verif, Adresse_mail, Rue, Ville, Code_postal, Identifiant_emploi, Sexe) VALUES(:Status, :Nom, :Prenom, :Password, :Password_verif, :Adresse_mail, :Rue, :Ville, :Code_postal, :Identifiant_emploi, :Sexe)");
    $query->execute([
        "Status" => $user["user_status"] ,
        "Nom" => $user["user_name"],
        "Prenom" => $user["user_firstname"],
        "Password" => $user["user_password"],
        "Password_verif" => $user["user_password2"],
        "Adresse_mail" => $user["user_mail"],
        "Rue" => $user["user_street"],
        "Ville" => $user["user_city"],
        "Code_postal" => $user["user_postalcode"],
        "Identifiant_emploi" => $user["user_jobID"],
        "Sexe" => $user["user_sexe"]
    ]);    
    return $query;
}
//function that modifies the user
function updateUser($user, $bdd) {
    $query = $bdd->prepare("UPDATE Users SET Status = :Status, Nom = :Nom, Prenom = :Prenom, Adresse_mail = :Adresse_mail, Rue = :Rue, Ville = :Ville, Code_postal = :Code_postal, Identifiant_emploi = :Identifiant_emploi, Sexe = :Sexe");
    $query->execute([
        "Status" => $user["user_status"] ,
        "Nom" => $user["user_name"],
        "Prenom" => $user["user_firstname"],
        "Adresse_mail" => $user["user_mail"],
        "Rue" => $user["user_street"],
        "Ville" => $user["user_city"],
        "Code_postal" => $user["user_postalcode"],
        "Identifiant_emploi" => $user["user_jobID"],
        "Sexe" => $user["user_sexe"]
    ]);
    return $query;
}
//function that removes the user
function deleteUser($user, $bdd) {
    $query = $bdd->prepare("DELETE FROM Users WHERE Users_ID = ?");
    $query->execute(["Users_ID" => $user[""]]);
    return $query;
}
?>