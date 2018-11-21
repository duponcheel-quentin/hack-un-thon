<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=Emargements;charset=utf8', 'phpmyadmin', 'Manzakin2603');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

?>
