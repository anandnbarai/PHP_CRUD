<div class="modal fade" id="usermodal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- enctype is for to upload image into database -->
            <form action="" method="post" id="addform" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name :</label>
                        <div class="input-group mt-2">
                            <span class="input-group-text bg-dark"><i class="fas fa-user text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Username" name="username"
                                id="username" autocomplete="off" required="required">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Email :</label>
                        <div class="input-group mt-2">
                            <span class="input-group-text bg-dark"><i class="fas fa-envelope text-white"></i></span>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email"
                                autocomplete="off" required="required">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Mobile Number :</label>
                        <div class="input-group mt-2">
                            <span class="input-group-text bg-dark"><i class="fas fa-phone text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile"
                                id="mobile" maxlength="10" minlength="10" autocomplete="off" required="required">
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">User Image :</label>
                        <div class="input-group mt-2">
                            <input type="file" class="form-control" name="userimage" id="userimage" required="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>