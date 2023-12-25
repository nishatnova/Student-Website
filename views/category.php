<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($categories as $category) { ?>
            <div class="col-md-3">
                <a href="action.php?page=category-product&&id=<?php echo $category['id']; ?>" class="text-decoration-none">
                <div class="card card-body rounded-0 text-center h-100">
                    <h1 class="text-muted"><?php echo $category['name']; ?></h1>
                </div>
                </a>

            </div>

            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
