<?php

include('connect.php');

//!logic for display data from database to edit (READ)
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];

    $get_data = "select * from `phpcrud` where id = $edit_id";
    $get_result = mysqli_query($conn, $get_data);
    $rows = mysqli_num_rows($get_result);

    if ($rows) {
        $fetch_data = mysqli_fetch_assoc($get_result);
    }
}

//!Logic for update (UPDATE)
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $update = "update `phpcrud` set name='$name', email='$email', city='$city' where id = $id";
    $result = mysqli_query($conn, $update);
    if ($result) {
        header('location:display.php');
    } else {
        echo die("Error in updating data");
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data | PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="mt-3 mx-3">
        <button class="btn btn-dark"><a href="display.php" class="text-decoration-none text-white">View
                Data</a></button>
    </div>

    <h2 class="text-center mt-3">Update Data</h2>
    <?php



    ?>
    <!-- Update data form -->
    <form method="post" class="mt-3">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $fetch_data['id'] ?>">
            <div class="form-group mt-3">
                <label>Name : </label>
                <input type="text" name="name" class="form-control" value="<?php echo $fetch_data['name'] ?>">
            </div>
            <div class="form-group mt-3">
                <label>Email : </label>
                <input type="email" name="email" class="form-control" value="<?php echo $fetch_data['email'] ?>">
            </div>
            <div class="form-group mt-3">
                <label>City : </label>
                <input type="text" name="city" class="form-control" value="<?php echo $fetch_data['city'] ?>">
            </div>
            <button type="submit" class="btn btn-dark mt-3" name="update">Update Data</button>
        </div>
    </form>
</body>

</html>