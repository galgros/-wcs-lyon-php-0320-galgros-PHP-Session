<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php $quantityArray = array_count_values($_SESSION['cart']); ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (!empty($_SESSION['cart'])) :?>
            <?php foreach ($quantityArray as $id => $quantity) : ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $catalog[$id]['name']; ?></h3>
                            <p><?= $catalog[$id]['description']; ?></p>
                            <p><?= $quantity; ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            Nothing in cart !
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
