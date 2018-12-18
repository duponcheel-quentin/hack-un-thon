<?php
//Function qui retourne un tableau contenant les routes de notre application
//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    //route basique
    "" => [
      "user",
      "userLogin",
    ],
    //page principale des professeurs
    "teacher" => [
      "admin",
      "showSheetByUser",
      "status" => "teacher"
    ],
    //page principale des admins
    "admin" => [
      "admin",
      "showAdminView",
      "status" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~USERS~~~~~~~~~~~~~~~~~~~
    "users/list" => [
      "admin",
      "showUsersList",
      "status" => "admin"
    ],
    "user/add" => [
      "admin",
      "showAddUser",
      "status" => "admin"      
    ],
    "user/update" => [
      "admin",
      "showUpdateUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "user/delete" => [
      "admin",
      "showDeleteUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    //La deconnexion
    "user/logout" => [
      "user",
      "userLogout",
      "status" => "teacher"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~SHEET~~~~~~~~~~~~~~~~~~~
    "sheets/list" => [
      "sheet",
      "",
      "status" => "admin"
    ],
    "sheet/add" => [
      "sheet",
      "",
      "status" => "admin"
    ],
    "sheet/update" => [
      "sheet",
      "",
      "status" => "admin"
    ],
    "sheet/delete" => [
      "sheet",
      "",
      "status" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~CATEGORY~~~~~~~~~~~~~~~~~~~
    "categories/list" => [
      "category",
      "",
      "status" => "admin"
    ],
    "categorie/add" => [
      "category",
      "",
      "status" => "admin"
    ],
    "categorie/update" => [
      "category",
      "",
      "status" => "admin"
    ],
    "categorie/delete" => [
      "category",
      "",
      "status" => "admin"
    ],
  ];
}
 ?>