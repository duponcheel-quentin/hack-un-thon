<?php
function getDataBase() {
   try {
     $db = new PDO('mysql:host=localhost;dbname=Signing;charset=utf8', 'phpmyadmin1', 'Azerty59');
   }
   catch (Exception $e){
     die('Erreur : ' . $e->getMessage());
   }
   return $db;
 }

?>
