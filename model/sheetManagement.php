<?php
// Fonction qui récupère toutes les sheetsen BD
  function getAllSheets() {
  $db = getDataBase();
  $query = $db->query("SELECT * FROM sheets");
  $sheets = $query->fetchall(PDO::FETCH_ASSOC);
  return $sheets;
}
  //Fonction qui récupère une seule sheet de la DB sur la base de son id
function getSheet($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM sheet WHERE sheet_id=?");
  $query->execute([$id]);
  $sheet = $query->fetch(PDO::FETCH_ASSOC);
  return $sheet;
}
//Fonction qui ajoute une sheet en DB
function addSheet($sheet) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO sheets (organization, entitled, start, end, monday_morning, monday_afternoon, tuesday_morning, tuesday_afternoon, wednesday_morning, wednesday_afternoon, thursday_morning, thursday_afternoon, friday_morning, friday_afternoon) VALUES (:organization, :entitled, :start, :end, :monday_morning, :monday_afternoon, :tuesday_morning, :tuesday_afternoon, :wednesday_morning, :wednesday_afternoon, :thursday_morning, :thursday_afternoon, :friday_morning, :friday_afternoon)");
  $result = $query->execute([
    "organization" => $sheet["organization"] ,
    "entitled" => $sheet["entitled"],
    "start" => $sheet["start"],
    "end" => $sheet["end"],
    "monday_morning" => $sheet["monday_morning"],
    "monday_afternoon" => $sheet["monday_afternoon"],
    "tuesday_morning" => $sheet["tuesday_morning"],
    "tuesday_afternoon" => $sheet["tuesday_afternoon"],
    "wednesday_morning" => $sheet["wednesday_morning"],
    "wednesday_afternoon" => $sheet["wednesday_afternoon"],
    "thursday_morning" => $sheet["thursday_morning"],
    "thursday_afternoon" => $sheet["thursday_afternoon"],
    "friday_morning" => $sheet["friday_morning"],
    "friday_afternoon" => $sheet["friday_afternoon"]
  ]);
  return $result;
}
//Fonction qui update une sheet en DB
function updatsheet($sheet) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE sheet SET organization = :organization, entitled = :entitled, start = :start, end = :end, monday_morning = :monday_morning, monday_afternoon = :monday_afternoon, tuesday_morning = :tuesday_morning, tuesday_afternoon = :tuesday_afternoon, wednesday_morning = :wednesday_morning, wednesday_afternoon = :wednesday_afternoon, thursday_morning = :thursday_morning, thursday_afternoon = :thursday_afternoon, friday_morninng = :friday_morninng, friday_afternoon = :friday_afternoon)");
  $result = $query->execute([
    "organization" => $sheet["organization"] ,
    "entitled" => $sheet["entitled"],
    "start" => $sheet["start"],
    "end" => $sheet["end"],
    "monday_morning" => $sheet["monday_morning"],
    "monday_afternoon" => $sheet["monday_afternoon"],
    "tuesday_morning" => $sheet["tuesday_morning"],
    "tuesday_afternoon" => $sheet["tuesday_afternoon"],
    "wednesday_morning" => $sheet["wednesday_morning"],
    "wednesday_afternoon" => $sheet["wednesday_afternoon"],
    "thursday_morning" => $sheet["thursday_morning"],
    "thursday_afternoon" => $sheet["thursday_afternoon"],
    "friday_morning" => $sheet["friday_morning"],
    "friday_afternoon" => $sheet["friday_afternoon"]
  ]);
  return $result;
}

//Fonction pour supprimer une sheet en base de données
function deletsheet($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM sheet WHERE sheet_id = ?");
  $result = $query->execute([$id]);
  return $result;
}

function getSheetByUser($id){
    $db = getDataBase();
    $reponses = $db->prepare("SELECT s.entitled, s.start, s.end FROM sh AS s
                                INNER JOIN users_sheet AS us ON s.sheet_id = us.sheet_id
                                INNER JOIN users AS u ON us.user_id = u.user_id
                                WHERE u.user_id=?");
    $reponses->execute(array($id));
    $reponse = $reponses->fetchall(PDO::FETCH_ASSOC);
    return $reponse;
}

?>
