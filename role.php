<?php
require_once("util-db.php");
require_once("model-role.php");

$pageTitle = "Role";
include "view-header.php";
$role = selectRole();
include "view-role.php";
include "view-footer.php";
?>
