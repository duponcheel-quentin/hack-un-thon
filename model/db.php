<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'phpmyadmin1', 'Azerty59');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

?>