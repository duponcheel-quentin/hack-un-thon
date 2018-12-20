<?php
function getCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM categories WHERE category_id=?");
  $query->execute([$id]);
  $categories = $query->fetchall(PDO::FETCH_ASSOC);
  return $categories;
}

function addCategories($category) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO categories(category_name) VALUES(:category_name)");
    $query->execute([
        "category_name" => $category["category_name"]
    ]);
    return $query;
  }

function updateUser($category) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE categories SET category_name = :category_name WHERE category_id = :category_id");
  $result = $query->execute([
    "category_name" => $category["category_name"],
    "category_id" => $category["category_id"]
  ]);
  $query->closeCursor();
  return $result;
}

//function qui ...
function deleteCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM categories WHERE category_id = ?");
  $query->execute([$id]);
  return $query;
    }

 ?>
