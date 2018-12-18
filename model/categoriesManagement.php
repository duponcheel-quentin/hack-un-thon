<?php
function getCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM categories WHERE ID=?");
  $query->execute([$id]);
  $categories = $query->fetchall(PDO::FETCH_ASSOC);
  return $categories;
}

function addCategories($categories) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO categories(categories_name) VALUES(:categories_name)");
    $query->execute([
        "categories_name" => $categories["categories_name"]
    ]);
    return $query;
  }

function deleteCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM categories WHERE ID = ?");
  $query->execute([$id]);
  return $query;
    }

 ?>
