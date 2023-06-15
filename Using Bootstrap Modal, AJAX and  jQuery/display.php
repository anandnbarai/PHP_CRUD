<?php
include 'connect.php';

if (isset($_POST['displaySend'])) {
    $table = '<table class="table table-success table-striped text-center">
    <thead>
        <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">City</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>';

    $sql = "select * from `user`";
    $result = mysqli_query($con, $sql);
    $number = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $city = $row['city'];
        $table .= '<tr>
        <th scopr="row">' . $number . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $city . '</td>
        <td>
            <button class="btn btn-dark">Update</button>
            <button class="btn btn-danger" onclick="deleteuser('.$id.')">Delete</button>
        </td> 
        </tr>';
        $number++;
    }
    $table .= '</table>';

    echo $table;
}
?>