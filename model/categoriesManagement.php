<?php
function getCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM categories WHERE category_id=?");
  $query->execute([$id]);
  $categories = $query->fetchall(PDO::FETCH_ASSOC);
  return $categories;
}

function addCategories($categories) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO categories(category_name) VALUES(:category_name)");
    $query->execute([
        "category_name" => $categories["category_name"]
    ]);
    return $query;
  }
//function qui ...
function deleteCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM categories WHERE category_id = ?");
  $query->execute([$id]);
  return $query;
    }

 ?>
