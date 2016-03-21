<?php require_once 'config.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RSHOP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Beg - compiled -->
        <link rel="stylesheet" href="webroot/css/styles_min.css">
        <script src="webroot/js/scripts.js"></script>
        <!-- End - compiled -->
    </head>
    <body>
        <div class="wrapper wrapper--cart">
            <!-- Beg - header -->
            <?php include('boxes/header_cart.php'); ?>
            <!-- End - header -->

            <section class="content">
                <div class="container">
                    <!-- Beg - shopping cart -->
                    <form action="cart-success.php" name="form-cart-success" method="post">
                        <div class="row">
                            <div class="cart__content col-xs-100">
                                <?php include('boxes/cart_thanks.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart__buttons col-xs-100">
                                <button type="submit" title="<?= __('Odoslať názor') ?>" class="btn btn--submit btn--bigger right survey"><?= __('Odoslať názor') ?><i class="ico arr--btn--yellowBtn--right"></i></button>
                                 <a href="index.php" title="<?= __('Návrat na úvodnú stránku') ?>" class="btn btn--back left"><i class="ico arr--back"></i><?= __('Návrat na úvod') ?></a>
                            </div>
                        </div>
                    </form>
                    <!-- End - shopping cart -->
                </div>
            </section>

            <!-- Beg - footer -->
            <?php include('boxes/footer.php'); ?>
            <!-- End - footer -->

            <div class="overlay overlay--white"></div>
        </div>

        <!-- Beg - aside stuff -->
        <?php include('boxes/footer_stuff.php'); ?>
        <!-- End - aside stuff -->
    </body>
</html>