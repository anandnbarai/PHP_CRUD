<?php

//* Include model.php

include 'model.php';

$obj = new Model();

// print_r($obj);

//* Insert Record
if (isset($_POST['submit'])) {

    //? below code will insert a new record into a database table.  

    $obj->insertRecord($_POST);

} //* isset closed

//? below code will assign the return value of the displayRecord() method of the object $obj to the variable $data
// $data = $obj->displayRecord();
// print_r($data);

//* Update Record
if (isset($_POST['update'])) {

    //? below code will update record into a database table.  

    $obj->updateRecord($_POST);

} //* isset closed

// Delete Record
if (isset($_GET['deleteid'])) {
    $did = $_GET['deleteid'];
    $obj->deleteRecord($did);
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
    <h2 class="text-center mt-3">CRUD Operation in PHP using OOPS</h2>
    <br>
    <div class="container">
        <form action="export.php" method="post" class="mb-2">
        <input type="submit" name="submit" class="btn btn-darks" value="Export To PDF" />

        </form>
        <!-- Display Success Message -->

        <?php

        // msg and insert is defined "header('location:index.php?msg=insert');" in model.php 
        //? The code you have provided is an if statement that checks if the 'msg' query string parameter is set and if 
        //? its value is 'insert'. If both of these conditions are true, the code will echo a message that the record 
        //? was inserted successfully.
        
        //? Code for display insert message
        if (isset($_GET['msg']) and $_GET['msg'] == 'insert') {

            //* below class & role is bootstrap inbuilt funtion 
        
            echo '<div class="alert alert-dark" role="alert">
                Record Inserted Successfully...!!!
            </div>';
        } //* if loop close
        
        //? Code for display update message
        if (isset($_GET['msg']) and $_GET['msg'] == 'update') {

            //* below class & role is bootstrap inbuilt funtion 
        
            echo '<div class="alert alert-primary" role="alert">
                Record Updated Successfully...!!!
            </div>';
        } //* if loop close
        
        //? Code for display delete message
        if (isset($_GET['msg']) and $_GET['msg'] == 'delete') {

            //* below class & role is bootstrap inbuilt funtion 
        
            echo '<div class="alert alert-danger" role="alert">
                Record Deleted Successfully...!!!
            </div>';
        } //* if loop close
        
        ?>

        <?php

        // Fetch data for Updation
        //! $_POST is not working, GET and REQUEST working
        
        if (isset($_REQUEST['editid'])) {
            $editid = $_REQUEST['editid'];
            $myrecord = $obj->displayRecordById($editid);
            ?>

            <!-- Update Form -->
            <form action="index.php" method="post">
                <div class="form-group">
                    <label>Name : </label>
                    <input type="text" name="name" value="<?php echo $myrecord['name']; ?>" placeholder="Enter Your Name"
                        class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label>Email :</label>
                    <input type="text" name="email" value="<?php echo $myrecord['email']; ?>" placeholder="Enter Your Email"
                        class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <input type="hidden" name="upd" value="<?php echo $myrecord['id']; ?>">
                    <input type="submit" value="Update" name="update" class="btn btn-dark">
                </div>
            </form>

            <?php
        } //* if closed
        else {
            ?>

            <!-- update form -->
            <form action="index.php" method="post">
                <div class="form-group">
                    <label>Name : </label>
                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label>Email :</label>
                    <input type="text" name="email" placeholder="Enter Your Email" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Submit" name="submit" class="btn btn-dark">
                </div>
            </form>
            <?php
        } //* else closed
        ?>
        <br>
        <h3 class="text-center">
            Display Records
        </h3>
        <table class="table table-bordered mt-3">
            <tr class="text-center bg-dark text-white">
                <th>Sr.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php

            //! Display Record, we use displayRecord funtion
            $data = $obj->displayRecord();
            $srno = 1;

            //* foreach loop used to convert array into value
            foreach ($data as $value) {

                ?>
                <tr class="text-center">
                    <td>
                        <?php echo $srno++; ?>
                    </td>
                    <td>
                        <?php echo $value['name']; ?>
                    </td>
                    <td>
                        <?php echo $value['email']; ?>
                    </td>
                    <td>
                        <a href="index.php?editid=<?php echo $value['id']; ?>" class="btn btn-dark">Edit</a>
                        <a href="index.php?deleteid=<?php echo $value['id']; ?>"
                            onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>


</body>

</html>