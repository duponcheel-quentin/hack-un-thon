<?php
//J'appelle les pages nécessaires à cette page
include "template/header.php";
require "form/sortUsersForm.php";
//C'est le bouton dropdown qui permet de choisir la catégorie d'utilisateur
?>

<!--Ce sont les boutons ajouter, modifier et supprimer un utilisateur-->
<div class="w-50 mx-auto m-5 d-flex justify-content-center">
  <a class="btn btn-success" href="userAdd" role="button">Ajouter</a>
</div>


<?php
foreach($users as $key => $user) {

?>


<!--C'est la liste des utilisateurs du site-->
<div class="card-deck m-0 d-flex  text-white">
<table class="table table-dark bg_tableau">
    <thead>
      <tr>
        <th scope="col">nom</th>
        <th scope="col">prenom</$id<th>
        <th scope="col">modifier</th>
        <th scope="col">supprimer</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $key => $user) {?>
      <tr>
        <td>
          <?php echo htmlspecialchars($user["name"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($user["firstname"]);?>
        </td>
        <td><a href="userUpdate?id=<?php echo $user["user_id"];?>" class="card-link"><i class="fa fa-address-card" aria-hidden="true"></i></a></td>
        <td><a href="userDelete?id=<?php echo $user["user_id"];?>" class="card-link"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
       </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<?php
include "template/footer.php";
?>
