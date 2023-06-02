<?php
require_once('config/config.php');
require_once('config/db.php');


if (isset($_GET['reqsID'])) {
    $memberID = $_GET['memberID'];

    $reqsID = mysqli_real_escape_string($conn, $_GET['reqsID']);

    $delete = "DELETE FROM requirements WHERE reqsID = '$reqsID'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("Location: reqs.php?memberID=$memberID");
        exit;
    } else {
        $error = "Error: " . mysqli_error($conn);
        echo $error;
        exit;
    }
}

mysqli_close($conn);
?>
