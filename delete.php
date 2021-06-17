<?php

include('db.php');
$id = $_GET['id'];
if (isset($id)) {

    $query = "DELETE FROM tasks WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query delete failled');
    }
    $_SESSION['message'] = "Task Removed Successfully";
    $_SESSION['message_type'] = "danger";

    header('Location: index.php');
}

?>
