<?php
//J'appelle les pages nécessaires à cette page
include "template/header.php";
$users = getUsers();
require "form/sortUsersForm.php";
//C'est le bouton dropdown qui permet de choisir la catégorie d'utilisateur
?>

<!--Ce sont les boutons ajouter, modifier et supprimer un utilisateur-->
<div class="w-50 mx-auto">
  <a class="btn btn-success" href="userAdd" role="button">Ajouter</a>
</div>

<?php
foreach($users as $key => $user) {

?>

<!--C'est la liste des utilisateurs du site-->
<ul class="list-group w-50 mx-auto my-2">
  <li class="list-group-item"><?php echo $user["name"] . " " . $user["firstname"]; ?>
  <a class="btn btn-primary btn-sm" href="userUpdate?id=<?php echo $user["user_id"]?>" role="button" name="button" value="Modifier">Modifier</a>
  <a class="btn btn-danger btn-sm" href="userDelete?id=<?php echo $user["user_id"]?>" role="button" name="button" value="Supprimer">Supprimer</a>
  </li>
</ul>
<?php
}
include "template/footer.php";
?>
