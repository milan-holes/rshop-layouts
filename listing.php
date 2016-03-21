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
                    <h1>Elektrické náradie</h1>
                    <!-- Beg - listing -->
                    <div class="row">
                        <?php include('boxes/listing_categories.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/filter.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/listing_products.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/banner_hanging.php'); ?>
                    </div>

                    <div class="row">
                        <?php include('boxes/listing_desc.php'); ?>
                    </div>
                    <!-- End - listing -->
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