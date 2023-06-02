<?php
require_once('config/config.php');
require_once('config/db.php');

if (isset($_GET['reqs_listID'])) {
    $reqs_listID = mysqli_real_escape_string($conn, $_GET['reqs_listID']);

    $delete = "DELETE FROM requirements_list WHERE reqs_listID = '$reqs_listID'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header('Location: ' . ROOT_URL . 'reqs-page.php');
        exit;
    } else {
        $error = "Error: " . mysqli_error($conn);
        echo $error;
        exit;
    }
}

mysqli_close($conn);
?>
