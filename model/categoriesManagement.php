<?php
function getCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM Categories WHERE ID=?");
  $query->execute([$id]);
  $categories = $query->fetchall(PDO::FETCH_ASSOC);
  return $categories;
}

function addCategories($categories) {
    $db = getDataBase();
    $query = $db->prepare("INSERT INTO Categories(Categories_name) VALUES(:Categories_name)");
    $query->execute([
        "Categories_name" => $categories["Categories_name"]
    ]);
    return $query;
  }

function deleteCategories($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM Categories WHERE ID = ?");
  $query->execute([$id]);
  return $query;
    }

 ?>
