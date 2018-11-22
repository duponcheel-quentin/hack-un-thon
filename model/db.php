<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=Emargements;charset=utf8', 'phpmyadmin', 'AdaLinkLoulouZelda');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

?>
