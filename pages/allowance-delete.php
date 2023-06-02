<?php

require_once('config/config.php');
require_once('config/db.php');


if (isset($_GET['allowanceID'])) {
    $memberID = $_GET['memberID'];
    $allowanceID = $_GET['allowanceID'];

  $delete = "DELETE FROM allowances WHERE allowanceID = '$allowanceID'";
  $query = mysqli_query($conn, $delete);
  if ($query) {
    header('Location: ' . ROOT_URL . 'allowance.php?memberID=' . $_GET['memberID']);
    exit;
  } else {
    echo "Error: " . mysqli_error($conn);
    exit;
  }
}

mysqli_close($conn);
?>