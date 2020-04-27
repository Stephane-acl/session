<?php require 'inc/head.php';
require_once 'inc/data/products.php';
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}
?>

<section class="cookies container-fluid">
    <div class="row">

        <?php if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $cookieId) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <h3><?= $catalog[$cookieId]['name']; ?></h3>
                    </figure>
                </div>
            <?php }
        } else { ?>
            <h3>Votre Panier est vide...</h3>;
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
