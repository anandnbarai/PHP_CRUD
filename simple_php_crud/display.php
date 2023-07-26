<?php

include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data | PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="mt-3 mx-3">
        <button class="btn btn-dark"><a href="index.php" class="text-decoration-none text-white">Add Data</a></button>
    </div>

    <h2 class="text-center mt-3">Display Data</h2>

    <table class="table text-center mt-3">
        <thead class="bg-dark text-white">
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Action</th>
        </thead>
        <?php

        //!Logic for display data store in database (READ)
        $displaydata = "select * from `phpcrud`";
        $result = mysqli_query($conn, $displaydata);
        $num_rows = mysqli_num_rows($result);
        $i = 1;
        if ($num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['city']; ?>
                        </td>
                        <td><a href="update.php?edit=<?php echo $row['id'] ?>" class="text-dark"><i class="bi bi-pencil-square"></i></a> |
                            <a href="delete.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are You Sure?')" class="text-dark"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php
                $i++;
            }
        }
        ?>
    </table>
</body>

</html>