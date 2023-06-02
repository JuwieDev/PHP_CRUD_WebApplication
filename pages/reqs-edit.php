<?php

require_once('config/config.php');
require_once('config/db.php');


if (isset($_POST['reqsID'])) {
    $memberID = $_POST['memberID'];
    $reqsID = $_POST['reqsID'];
    $status = $_POST['status'];

  $update = "UPDATE requirements SET requirements.status = '$status'
  WHERE requirements.reqsID = '$reqsID'";
  $query = mysqli_query($conn, $update);
  if ($query) {
    header('Location: ' . ROOT_URL . 'reqs.php?memberID=' . $_POST['memberID']);
    exit;
  } else {
    echo "Error: " . mysqli_error($conn);
    exit;
  }
}

mysqli_close($conn);
?>