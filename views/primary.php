<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container pt-4 pb-5">
        <div class="row pt-4 pb-5">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="text-center my-2">Prime Calculator</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="first_number" class="form-control" value="<?php echo isset($_GET['first']) ? $_GET['first'] : ''; ?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="last_number" class="form-control" value="<?php echo isset($_GET['last']) ? $_GET['last'] : ''; ?>"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-secondary rounded-0 px-5"  name="primary_btn" value="Prime Numbers"/>
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



