<?php include 'header.php'; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Full Name

                                </h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php?page=get-full-name" method="post">
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" class="form-control" value="<?php echo isset($firstName) ? $firstName : ''?>"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Last Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control" value="<?php echo isset($lastName) ? $lastName : ''?>"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($fullName) ? $fullName : ''?>"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Total Words</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($totalWords) ? $totalWords : ''?>"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Total Characters</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($totalCharacters) ? $totalCharacters : ''?>"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Get Full Name"/>
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
