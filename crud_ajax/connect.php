<?PHP

$con = new mysqli('localhost', 'root', '', 'ajaxcrud');

// if ($con) {
//     echo 'Connection Successfull.';
// } else {
//     die(mysqli_error($con));
// }
if (!$con) {
    die(mysqli_error($con));
}

?>