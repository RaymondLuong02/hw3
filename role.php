<?php
require_once("util-db.php");
require_once("model-role.php");

$pageTitle = "Role";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($POST['actionType']) {
    case "Add":
      if (insertRole($_POST['cRole'], $_POST['cDiff'])){
        echo '<div class="alert alert-success" role="alert">Role Added. </div>"';
      } else {
         echo '<div class="alert alert-danger" role="alert">Error. </div>"';
      }
      break;
    }
}
$role = selectRole();
include "view-role.php";
include "view-footer.php";
?>
