<?php

require_once 'include/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance PHP CRUD</title>

    <!-- Bootstrap Link from "https://getbootstrap.com/docs/5.1/getting-started/introduction/" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BS Icon Link from "https://icons.getbootstrap.com/" -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Font Awesome CDN from "https://cdnjs.com/libraries/font-awesome" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1 class="text-center bg-dark text-white py-2">PHP Advance CRUD</h1>

    <!-- Form Modal -->
    <!-- belwo div id "usermodal" is same as given in Add New User Button -->
    <div class="container">
        <?php

        include 'form.php';
        include 'profile.php';

        ?>
        <!-- Seach Bar and Add Details Button -->
        <div class="row mt-3">
            <div class="col-10">
                <div class="input-group">
                    <span class="input-group-text bg-dark"><i class="fas fa-search text-white"></i></span>
                    <input type="text" class="form-control" placeholder="Search User Details...">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#usermodal">
                    Add New User</button>
            </div>
        </div>

        <!-- Display Data in table form -->
        <?php

        include 'usertable.php';

        ?>

        <!-- Pagination from bootstrap -->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link text-dark" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- jQuery CDN from https://releases.jquery.com/-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- JS Link from "https://getbootstrap.com/docs/5.1/getting-started/introduction/" -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>