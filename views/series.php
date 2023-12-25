<?php include 'header.php'; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Series</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Option</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="option" value="odd"/> Odd </label>
                                    <label><input type="radio" name="option" value="even"/> Even </label>
                                    <label><input type="radio" name="option" value="all"/> All </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea cols="30" rows="5" class="form-control"> <?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?> </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success rounded-0 px-5"  name="series_btn" value="Show Result"/>
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


