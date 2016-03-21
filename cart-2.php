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
                    <!-- Beg - cart 2 -->
                    <form action="cart-3.php" name="form-cart-2" method="post">
                        <div class="row">
                            <div class="steps steps--two col-xs-100">
                                <?php include('boxes/cart_steps.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                                <?php include('boxes/cart_choice.php'); ?>
                            </div>
                            <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                                <?php include('boxes/cart_recap.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart__buttons col-xs-100">
                                <a href="cart-1.php" title="Obsah košíka" class="btn btn--back"><i class="ico arr--back"></i>Obsah košíka</a>
                            </div>
                        </div>
                    </form>
                    <!-- End - cart 2 -->
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