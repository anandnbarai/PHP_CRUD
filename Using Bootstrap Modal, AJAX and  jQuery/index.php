<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AJAX CRUD using jQuery</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> -->

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="completename" class="form-label">Name</label>
                        <input type="text" class="form-control" id="completename" placeholder="Enter Your Name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="completename" class="form-label">Email</label>
                        <input type="email" class="form-control" id="completeemail" placeholder="Enter Your Email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="completename" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="completenumber"
                            placeholder="Enter Your Mobile Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="completename" class="form-label">City</label>
                        <input type="text" class="form-control" id="completecity" placeholder="Enter Your City"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add user button -->
    <div class="container my-3">
        <h1 class="text-center">PHP CRUD Operations using Bootstrap Modal</h1>

        <!-- from BS modal -->

        <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#completeModal">Add New
            User</button>
        <div id="displayDataTable"></div>
    </div>

    <!--Bootstrap JS Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){
            displayData();
        });

        //! Display function
        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "display.php",
                type: 'post',
                data: {
                    displaySend: displayData
                },
                success: function (data, status) {
                    $('#displayDataTable').html(data);
                }
            });
        }


        //! adduser function used in add user button 
        function adduser() {
            var nameAdd = $('#completename').val()
            var emailAdd = $('#completeemail').val()
            var mobileAdd = $('#completenumber').val()
            var cityAdd = $('#completecity').val()

            $.ajax({
                url: "insert.php",
                type: 'post',
                data: {
                    nameSend: nameAdd,
                    emailSend: emailAdd,
                    mobileSend: mobileAdd,
                    citySend: cityAdd
                },
                success: function (data, status) {
                    //! function to display data
                    console.log(status);
                    displayData();
                }
            });
        }

    </script>

</body>

</html>