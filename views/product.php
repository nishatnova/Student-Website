<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">

        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="" height="320"/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <h6><?php echo $product['price']; ?></h6>
                        <hr/>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
