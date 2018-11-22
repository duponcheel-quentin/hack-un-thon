<?php
// Fonction qui récupère toutes les feuillesen BD
  function getFeuilles($db) {
  $query = $db->query("SELECT * FROM Feuille");
  $feuilles = $query->fetchall(PDO::FETCH_ASSOC);
  return $feuilles;
}
  //Fonction qui récupère une seule feuille de la DB sur la base de son id
function getProduct($id, $db) {
  $query = $db->prepare("SELECT * FROM Feuille WHERE id=?");
  $query->execute([$id]);
  $feuille = $query->fetch(PDO::FETCH_ASSOC);
  return $feuille;
}
//Fonction qui ajoute une feuille en DB
function addFeuille($feuille, $db) {
  $query = $db->prepare("INSERT INTO Feuille (Organisme, Intitule, Debut, Fin, Lundi_matin, Lundi_aprem, Mardi_matin, Mardi_aprem, Mercredi_matin, Mercredi_aprem, Jeudi_matin, Jeudi_aprem, Vendredi_matin, Vendredi_aprem) VALUES(:organisme, :Intitule, :Debut, :Fin, :Lundi_matin, :Lundi_aprem, :Mardi_matin, :Mardi_aprem, :Mercredi_matin, :Mercredi_aprem, :Jeudi_matin, :Jeudi_aprem, :Vendredi_matin, :Vendredi_aprem)");
  $result = $query->execute([
    "Organisme" => $product["Organisme"] ,
    "Intitule" => $product["Intitule"],
    "Debut" => $product["Debut"],
    "Fin" => $product["Fin"],
    "Lundi_matin" => $product["Lundi_matin"],
    "Lundi_aprem" => $product["Lundi_aprem"],
    "Mardi_matin" => $product["Mardi_matin"],
    "Mardi_aprem" => $product["Mardi_aprem"],
    "Mercredi_matin" => $product["Mercredi_matin"],
    "Mercredi_aprem" => $product["Mercredi_aprem"],
    "Jeudi_matin" => $product["Jeudi_matin"],
    "Jeudi_aprem" => $product["Jeudi_aprem"],
    "Vendredi_matin" => $product["Vendredi_matin"],
    "Vendredi_aprem" => $product["Vendredi_aprem"],
  ]);
  return $result;
}
//Fonction qui update une feuille en DB
function addFeuille($feuille, $db) {
  $query = $db->prepare("UPDATE Feuille SET Organisme = :Organisme, Intitule = :Intitule, Debut = :Debut, Fin = :Fin, Lundi_matin = :Lundi_matin, Lundi_aprem = :Lundi_aprem, Mardi_matin = :Mardi_matin, Mardi_aprem = :Mardi_aprem, Mercredi_matin = :Mercredi_matin, Mercredi_aprem = :Mercredi_aprem, Jeudi_matin = :Jeudi_matin, Jeudi_aprem = :Jeudi_aprem, Vendredi_matin = :Vendredi_matin, Vendredi_aprem = :Vendredi_aprem)");
  $result = $query->execute([
    "Organisme" => $product["Organisme"] ,
    "Intitule" => $product["Intitule"],
    "Debut" => $product["Debut"],
    "Fin" => $product["Fin"],
    "Lundi_matin" => $product["Lundi_matin"],
    "Lundi_aprem" => $product["Lundi_aprem"],
    "Mardi_matin" => $product["Mardi_matin"],
    "Mardi_aprem" => $product["Mardi_aprem"],
    "Mercredi_matin" => $product["Mercredi_matin"],
    "Mercredi_aprem" => $product["Mercredi_aprem"],
    "Jeudi_matin" => $product["Jeudi_matin"],
    "Jeudi_aprem" => $product["Jeudi_aprem"],
    "Vendredi_matin" => $product["Vendredi_matin"],
    "Vendredi_aprem" => $product["Vendredi_aprem"],
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
