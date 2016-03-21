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
        <div class="wrapper">
            <!-- Beg - header -->
            <?php include('boxes/header.php'); ?>
            <!-- End - header -->

            <section class="product">
                <!-- Beg - product info -->
                <div class="container">
                    <div class="row">
                        <?php include('boxes/product_info.php'); ?>
                    </div>
                </div>
            </section>

            <section class="product__accessories">
                <div class="container o-hidden">
                    <div class="row">
                        <?php include('boxes/product_alternate.php'); ?>

                        <?php include('boxes/product_accessories.php'); ?>
                    </div>
                </div>
            </section>

            <section class="product__info">
                <div class="container">
                    <div class="row">
                        <?php include('boxes/product_desc.php'); ?>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <?php include('boxes/banner_hanging.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/advantages.php'); ?>
                    </div>
                </div>
                <!-- End - product info -->
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