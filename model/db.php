<?php
function getDataBase() {
   try {
     $db = new PDO('mysql:host=localhost;dbname=signing;charset=utf8', 'phpmyadmin', 'O7dwjfb9');
   }
   catch (Exception $e){
     die('Erreur : ' . $e->getMessage());
   }
   return $db;
 }

?>
