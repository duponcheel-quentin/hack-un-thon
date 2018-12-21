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
      "userLogin"
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
    "usersList" => [
      "admin",
      "showUsersList",
      "status" => "admin"
    ],
    "userAdd" => [
      "admin",
      "showAddUser",
      "status" => "admin"
    ],
    "userUpdate" => [
      "admin",
      "showUpdateUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "userDelete" => [
      "admin",
      "showDeleteUser",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "usersSort" => [
      "admin",
      "showUsersSort",
      "status" => "admin"
    ],
    //La deconnexion
    "userLogout" => [
      "user",
      "userLogout",
      "status" => "teacher"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~SHEET~~~~~~~~~~~~~~~~~~~
    "sheetsList" => [
      "sheet",
      "showListSheets",
      "status" => "admin"
    ],
    "sheetAdd" => [
      "sheet",
      "showAddSheet",
      "status" => "admin"
    ],
    "sheetUpdate" => [
      "sheet",
      "showUpdateSheet",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "sheetDelete" => [
      "sheet",
      "showDeleteSheet",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    //~~~~~~~~~~~~~~~~~~~~~~~~CATEGORY~~~~~~~~~~~~~~~~~~~
    "categoriesList" => [
      "category",
      "showListCategories",
      "status" => "admin"
    ],
    "categoryAdd" => [
      "category",
      "showAddCategories",
      "status" => "admin"
    ],
    "categoryUpdate" => [
      "category",
      "showUpdateCategories",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
    "categoryDelete" => [
      "category",
      "showDeleteCategories",
      ["id" => ["integer"]],
      "status" => "admin"
    ],
  ];
}
 ?>
