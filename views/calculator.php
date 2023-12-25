<?php include 'header.php'; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Calculator</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="first_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="last_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+"/> + </label>
                                    <label><input type="radio" name="choice" value="-"/> - </label>
                                    <label><input type="radio" name="choice" value="*"/> * </label>
                                    <label><input type="radio" name="choice" value="/"/> / </label>
                                    <label><input type="radio" name="choice" value="%"/> % </label>
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
                                    <input type="submit" class="btn btn-success rounded-0 px-5"  name="calculator_btn" value="Make Result"/>
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

