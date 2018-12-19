<?php
require "config/global.php";
require "model/db.php";
require "model/categoriesManagement.php";
require "model/sheetManagement.php";
require "model/usersManagement.php";
require "service/formChecker.php";
require "service/router.php";
require "service/sessionManager.php";
require "service/urlManager.php";
route();
?>
