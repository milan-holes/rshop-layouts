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
                    <!-- Beg - cart 4 -->
                    <form action="cart-success.php" name="form-cart-4" method="post">
                        <div class="row">
                            <div class="steps steps--four col-xs-100">
                                <?php include('boxes/cart_steps.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                                <?php include('boxes/cart_confirm.php'); ?>
                            </div>
                            <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                                <?php include('boxes/cart_recap.php'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cart__buttons col-xs-100 col-md-70 col-lg-75">
                                <div class="right">
                                    <button type="submit" title="Potvrdiť a objednať" class="btn btn--cart">Potvrdiť a objednať<i class="ico arr--btn--white--right"></i></button>
                                    <span class="cart__buttons__confirm">Potvrdzujete objednávku s povinnosťou platby</span>
                                </div>
                                <a href="cart-3.php" title="Obsah košíka" class="btn btn--back"><i class="ico arr--back"></i>Obsah košíka</a>
                            </div>
                        </div>
                    </form>
                    <!-- End - cart 4 -->
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