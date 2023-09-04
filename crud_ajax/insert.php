<?PHP
include 'connect.php';

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['citySend'])) {

    $sql = "insert into `user` (name,email,mobile,city) values('$nameSend','$emailSend','$mobileSend','$citySend')";
    $result = mysqli_query($con, $sql);
}

?>