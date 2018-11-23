<?php 
function getFeuilleByUser($id, $db){
    $reponses = $db->prepare("SELECT f.Intitule, f.Debut, f.Fin FROM Feuille AS f 
                                INNER JOIN Users_feuille AS uf ON f.Feuille_ID = uf.Feuille_ID 
                                INNER JOIN Users AS u ON uf.Users_ID = u.Users_ID 
                                WHERE u.Users_ID=?");
    $reponses->execute(array($id));
    $reponse = $reponses->fetchall(PDO::FETCH_ASSOC);
    return $reponse;
}

?>