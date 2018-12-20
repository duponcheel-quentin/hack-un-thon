<?php
include "template/header.php";
require "form/categoryAddForm.php";
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

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
    <th scope="row"><?php echo $category["category_id"] ?></th>
    <td><?php echo $category["category_name"] ?></td>
    <td>
      <a href="user/modify?id=<?php echo $category["category_id"]?>" class="btn btn-warning">Modifier</a>
      <a href="user/remove?id=<?php echo $category["category_id"]?>" class="btn btn-danger">Supprimer</a>
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
