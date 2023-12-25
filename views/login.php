<?php include 'header.php'; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Login Form</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-danger">
                            <?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
                        </p>
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="userName" class="col-md-3">Username</label>
                                <div class="col-md-9">
                                    <input type="text" name="user_name" class="form-control" id="userName"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pass" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" id="pass" name="password" class="form-control"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success rounded-0 px-5"  name="login_btn" value="Login"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>



