<?php
function getCategory($id)
{
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM categories WHERE category_id = ?");
  $query->execute([$id]);
  $category = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $category;
}

function getCategories() {
  $db = getDataBase();
  $query = $db->query("SELECT * FROM categories");
  $categories = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $categories;
}

function addCategories($form) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO categories(category_name) VALUES(:category_name)");
    $result = $query->execute([
        "category_name" => $form["category_name"]
    ]);
    return $result;
  }

function updateCategories($category, $id) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE categories SET category_name = :category_name WHERE category_id = :category_id");
  $result = $query->execute([
    "category_name" => $category["category_name"],
    "category_id" => $id
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
