<?php
require_once('config/config.php');
require_once('config/db.php');

if (isset($_GET['memberID'])) {
    $memberID = mysqli_real_escape_string($conn, $_GET['memberID']);

    $delete_query = "DELETE FROM members WHERE memberID = '$memberID'";

    if (mysqli_query($conn, $delete_query)) {
        header('Location: ' . ROOT_URL . 'members.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
}

mysqli_close($conn);
?>
