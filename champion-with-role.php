<?php
require_once("util-db.php");
require_once("model-champion-with-role.php");

$pageTitle = "Champion with Role";
include "view-header.php";
$champion = selectChampion();
include "view-champion-with-role.php";
include "view-footer.php";
?>
