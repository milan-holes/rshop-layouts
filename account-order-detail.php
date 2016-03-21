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

            <section class="content">
                <div class="container">
                    <!-- Beg - account -->
                    <div class="row">
                        <?php include('boxes/account_header.php'); ?>
                    </div>

                    <div class="row relative">
                        <aside class="account__aside col-xs-100 col-md-30 col-lg-25 static">
                            <nav class="account__nav">
                                <button class="btn account__nav__trigger visible-xs visible-sm">
                                    <div class="account__nav__title visible-xs visible-sm">
                                        <?= __('Objednávky') ?>
                                        <i class="ico right ico--menu--black"></i>
                                    </div>
                                </button>
                                <script>$(function(){$('.account__nav__list__item--orders').addClass('active');});</script>
                                <?php include('boxes/account_nav.php'); ?>
                            </nav>
                            <?php include('boxes/account_advisor.php'); ?>
                        </aside>

                        <div class="account__content col-xs-100 col-md-70 col-lg-75">
                            <?php include('boxes/account_order_detail.php'); ?>
                        </div>
                    </div>
                    <!-- End - account -->
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