<?php
// Fonction qui récupère toutes les feuillesen BD
  function getFeuilles($db) {
  $query = $db->query("SELECT * FROM Feuille");
  $feuilles = $query->fetchall(PDO::FETCH_ASSOC);
  return $feuilles;
}
  //Fonction qui récupère une seule feuille de la DB sur la base de son id
function getFeuille($id, $db) {
  $query = $db->prepare("SELECT * FROM Feuille WHERE id=?");
  $query->execute([$id]);
  $feuille = $query->fetch(PDO::FETCH_ASSOC);
  return $feuille;
}
//Fonction qui ajoute une feuille en DB
function addFeuille($feuille, $db) {
  $query = $db->prepare("INSERT INTO Feuille (Organisme, Intitule, Debut, Fin, Lundi_matin, Lundi_aprem, Mardi_matin, Mardi_aprem, Mercredi_matin, Mercredi_aprem, Jeudi_matin, Jeudi_aprem, Vendredi_matin, Vendredi_aprem, Categories_ID) VALUES (:Organisme, :Intitule, :Debut, :Fin, :Lundi_matin, :Lundi_aprem, :Mardi_matin, :Mardi_aprem, :Mercredi_matin, :Mercredi_aprem, :Jeudi_matin, :Jeudi_aprem, :Vendredi_matin, :Vendredi_aprem, Categories_ID)");
  $result = $query->execute([
    "Organisme" => $feuille["Organisme"] ,
    "Intitule" => $feuille["Intitule"],
    "Debut" => $feuille["Debut"],
    "Fin" => $feuille["Fin"],
    "Lundi_matin" => $feuille["Lundi_matin"],
    "Lundi_aprem" => $feuille["Lundi_aprem"],
    "Mardi_matin" => $feuille["Mardi_matin"],
    "Mardi_aprem" => $feuille["Mardi_aprem"],
    "Mercredi_matin" => $feuille["Mercredi_matin"],
    "Mercredi_aprem" => $feuille["Mercredi_aprem"],
    "Jeudi_matin" => $feuille["Jeudi_matin"],
    "Jeudi_aprem" => $feuille["Jeudi_aprem"],
    "Vendredi_matin" => $feuille["Vendredi_matin"],
    "Vendredi_aprem" => $feuille["Vendredi_aprem"],
    "Categories_ID" => $feuille["Categories_ID"]
  ]);
  return $result;
}
//Fonction qui update une feuille en DB
function updateFeuille($feuille, $db) {
  $query = $db->prepare("UPDATE Feuille SET Organisme = :Organisme, Intitule = :Intitule, Debut = :Debut, Fin = :Fin, Lundi_matin = :Lundi_matin, Lundi_aprem = :Lundi_aprem, Mardi_matin = :Mardi_matin, Mardi_aprem = :Mardi_aprem, Mercredi_matin = :Mercredi_matin, Mercredi_aprem = :Mercredi_aprem, Jeudi_matin = :Jeudi_matin, Jeudi_aprem = :Jeudi_aprem, Vendredi_matin = :Vendredi_matin, Vendredi_aprem = :Vendredi_aprem)");
  $result = $query->execute([
    "Organisme" => $feuille["Organisme"] ,
    "Intitule" => $feuille["Intitule"],
    "Debut" => $feuille["Debut"],
    "Fin" => $feuille["Fin"],
    "Lundi_matin" => $feuille["Lundi_matin"],
    "Lundi_aprem" => $feuille["Lundi_aprem"],
    "Mardi_matin" => $feuille["Mardi_matin"],
    "Mardi_aprem" => $feuille["Mardi_aprem"],
    "Mercredi_matin" => $feuille["Mercredi_matin"],
    "Mercredi_aprem" => $feuille["Mercredi_aprem"],
    "Jeudi_matin" => $feuille["Jeudi_matin"],
    "Jeudi_aprem" => $feuille["Jeudi_aprem"],
    "Vendredi_matin" => $feuille["Vendredi_matin"],
    "Vendredi_aprem" => $feuille["Vendredi_aprem"]
  ]);
  return $result;
}

//Fonction pour supprimer une feuille en base de données
function deleteFeuille($id, $db) {
  $query = $db->prepare("DELETE FROM Feuille WHERE id = ?");
  $result = $query->execute([$id]);
  return $result;
}
 ?>
