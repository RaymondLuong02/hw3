<?php
require_once("util-db.php");
require_once("model-playstyle-by-role.php");

$pageTitle = "Playstyle by Role";
include "view-header.php";
$playstyle = selectPlaystyleByRole($_POST['cid']);
include "view-playstyle-by-role.php";
include "view-footer.php";
?>
