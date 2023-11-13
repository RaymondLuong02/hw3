<?php
require_once("util-db.php");
require_once("model-champion-chart-db.php");

$pageTitle = "Champion Chart";
include "view-header.php";
$champion = selectChampion();
include "view-champion-chart.php";
include "view-footer.php";
?>
