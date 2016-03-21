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
                    <!-- Beg - articles -->
                    <div class="row relative">
                        <aside class="articles__aside col-xs-100 col-md-30 col-lg-25">
                            <nav class="account__nav">
                                <button class="btn account__nav__trigger visible-xs visible-sm">
                                    <div class="account__nav__title visible-xs visible-sm">
                                        <?= __('Výhody') ?>
                                        <i class="ico right ico--menu--black"></i>
                                    </div>
                                </button>
                                <?php include('boxes/articles_nav.php'); ?>
                            </nav>
                            <script>$(function(){$('.account__nav__list__item').eq(7).addClass('active');});</script>
                        </aside>

                        <div class="articles__content col-xs-100 col-md-70 col-lg-75">
                            <?php include('boxes/articles_list.php'); ?>
                        </div>
                    </div>
                    <!-- End - articles -->
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