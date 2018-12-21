<?php
include "template/header.php";
require "form/categoryAddForm.php";

$categories = getCategories();
//var_dump($_POST);
?>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Catégories</th>
        <th scope="col">Modifier/Supprimer</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($categories as $key => $category) {
    ?>
    <tr>
      <th scope="row"><?php echo $category["category_id"]; ?></th>
      <td><?php echo $category["category_name"]; ?></td>
      <td>
        <a href="categorieUpdate?id=<?php echo $category["category_id"]?>" class="btn btn-warning">Modifier</a>
        <a href="categorieDelete?id=<?php echo $category["category_id"]?>" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
include "template/footer.php";
 ?>
