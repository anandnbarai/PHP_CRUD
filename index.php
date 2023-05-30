<?php

//Include model.php
include 'model.php';

$obj = new Model();
// print_r($obj);
if (isset($_POST['submit'])) {
    $obj->insertRecord($_POST);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PHP CRUD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</head>

<body>
    <h2 class="text-center text-info">CRUD Operation in PHP using OOPS</h2><br>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name : </label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label>Email :</label>
                <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input type="submit" value="Submit" name="submit" class="btn btn-info">
            </div>
        </form><br>
        <h4 class="text-center text-danger">
            Display Records
        </h4>
        <table class="table table-bordered">
            <tr class="text-center bg-primary">
                <th>Sr.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </table>
    </div>


</body>

</html>