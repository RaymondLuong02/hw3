<?php
require_once("util-db.php");
require_once("model-playstyle.php");

$pageTitle = "Playstyle";
include "view-header.php";
$playstyle = selectPlaystyle();
include "view-playstyle.php";
include "view-footer.php";
?>
