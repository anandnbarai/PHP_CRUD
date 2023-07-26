<?php

include('connect.php');

//! Insert data to database logic (CREATE)
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $insert_query = "insert into `phpcrud` (name,email,city) values ('$name','$email','$city')";
    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        header('location:display.php');
    } else {
        echo die('Data not inserted.!!!');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="mt-3 mx-3">
        <button class="btn btn-dark"><a href="display.php" class="text-decoration-none text-white">View
                Data</a></button>
    </div>

    <h2 class="text-center mt-3">Add Data</h2>

    <!-- Add Data Form -->
    <form method="post" class="mt-3">
        <div class="container">
            <div class="form-group mt-3">
                <label>Name : </label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
            </div>
            <div class="form-group mt-3">
                <label>Email : </label>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
            </div>
            <div class="form-group mt-3">
                <label>City : </label>
                <input type="text" name="city" placeholder="Enter Your City" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark mt-3" name="add">Add Details</button>
        </div>
    </form>
</body>

</html>