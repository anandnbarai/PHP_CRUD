<?php
include 'connect.php';

if (isset($_POST['updateid'])) {
    $user_id = $_POST['updateid'];
    $sql = "select * from `user` where id = $user_id";
    $result = mysqli_query($con, $sql);
    $response = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or Data not Found";
}

//! Update Query

if(isset($_POST['hiddendata'])){
    $uniqueid = $_POST['hiddendata'];
    $name = $_POST['updatename'];
    $email = $_POST['updateemail'];
    $mobile = $_POST['updatemobile'];
    $city = $_POST['updatecity'];

    $sql = "update `user` set name='$name', email='$email', mobile='$mobile', city='$city' where id = $uniqueid";
    $result = mysqli_query($con,$sql);
}   

?>