<?php
require_once("util-db.php");
require_once("model-role-by-champion.php");

$pageTitle = "Role by champion";
include "view-header.php";
$role = selectRoleByChampion($_GET['id']);
include "view-role-by-champion.php";
include "view-footer.php";
?>
