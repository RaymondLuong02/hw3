<?php
require_once("util-db.php");
require_once("model-role.php");

$pageTitle = "Role";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($POST['actionType']) {
    case "Add":
      insertRole($_POST['cRole'], $_POST['cDiff']);
      break;
    }
}
$role = selectRole();
include "view-role.php";
include "view-footer.php";
?>
