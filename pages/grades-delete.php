<?php

require_once('config/config.php');
require_once('config/db.php');


if (isset($_GET['gradeID'])) {
    $memberID = $_GET['memberID'];
    $gradeID = $_GET['gradeID'];

  $delete = "DELETE FROM grades WHERE gradeID = '$gradeID'";
  $query = mysqli_query($conn, $delete);
  if ($query) {
    header('Location: ' . ROOT_URL . 'grades.php?memberID=' . $_GET['memberID']);
    exit;
  } else {
    echo "Error: " . mysqli_error($conn);
    exit;
  }
}

mysqli_close($conn);
?>
