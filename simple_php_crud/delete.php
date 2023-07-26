<?php

include('connect.php');

//!Logic for delete data from database (DELETE)
if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    $delete = "delete from `phpcrud` where id = $delete_id";
    $result = mysqli_query($conn, $delete);

    if ($result) {
        header('location:display.php');
    } else {
        header('location:display.php');
    }
}

?>