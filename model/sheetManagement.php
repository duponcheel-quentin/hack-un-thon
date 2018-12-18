<?php
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

