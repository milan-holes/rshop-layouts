<?php
$lang = array(
    'title' => 'Slovensky',
    'code' => 'sk',
    'sk_display' => 'display:none;',
    'en_display' => ''
);
?>

<section class="header">
<div class="header__top">
        <div class="container">
            <div class="row relative">
                <div class="header__logo col-xs-44 col-sm-54 col-md-23 col-lg-28">
                    <a href="index.php" title="Logo Slovakia Trend">
                        <picture>
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <source srcset="webroot/img/logos/logo--slovakiatrend.png" media="(min-width: 480px)">
                            <!--[if IE 9]></video><![endif]-->
                            <img srcset="webroot/img/logos/logo--slovakiatrend--square.png" alt="Logo Slovakia Trend">
                        </picture>
                    </a>
                </div>
                <div class="header__links hidden-xs hidden-sm col-md-50 col-lg-44">
                    <div class="header__link">
                        <i class="ico left ico--atsign"></i>
                        <a href="#" title="Kontakt">
                            <span>Kontakt</span><i class="ico arr--black--right"></i>
                        </a>
                    </div>
                    <div class="header__link">
                        <i class="ico left ico--certificats"></i>
                        <a href="#" title="Certifikáty">
                            <span>Certifikáty</span><i class="ico arr--black--right"></i>
                        </a>
                    </div>
                    <div class="header__link">
                        <i class="ico left ico--catalogs"></i>
                        <a href="#" title="Katalógy">
                            <span>Katalógy</span><i class="ico arr--black--right"></i>
                        </a>
                    </div>
                    <div class="header__link">
                        <i class="ico left ico--sale"></i>
                        <a href="#" title="Výpredaj">
                            <span>Výpredaj</span><i class="ico arr--black--right"></i>
                        </a>
                    </div>
                </div>
                <div class="header__account col-xs-56 col-sm-35 col-md-27 col-lg-21">
                    <div class="header__account__wrapper">
                        <a href="#login" title="Prihlásenie" data-toggle="modal"><i class="ico left ico--login"></i><span>Prihlásenie</span></a>
                        <a href="#registration" title="Registrácia" data-toggle="modal"><i class="ico left ico--logout"></i><span>Registrácia</span></a>
                    </div>
                </div>
                <div class="header__lang col-xs-10 col-sm-11 col-md-9 col-lg-7">
                    <div class="header__lang__wrapper">
                        <a href="#" title="<?= $lang['title'] ?>" class="link">
                            <i class="ico ico--flag--<?= $lang['code'] ?> left"></i>
                            <?= $lang['code'] ?>
                            <i class="ico arr--flag--down right"></i>
                        </a>
                        <ul>
                            <li style="<?= $lang['sk_display'] ?>">
                                <a href="?lang=sk" title="<?= __('Slovensky') ?>" class="link">
                                    <i class="ico ico--flag--sk left"></i>Sk
                                </a>
                            </li>
                            <li style="<?= $lang['en_display'] ?>;">
                                <a href="?lang=cz" title="<?= __('Anglicky') ?>" class="link">
                                    <i class="ico ico--flag--sk left"></i>En
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row">
                <!-- Beg - main menu -->
                <?php include('boxes/main_menu.php'); ?>
                <!-- End - main menu -->

                <!-- Beg - multiple order -->
                <?php include('boxes/multiple_order.php'); ?>
                <!-- End - multiple order -->

                <!-- Beg - search -->
                <div class="header__search hidden-xs hidden-sm col-md-36 col-lg-46 nopadding">
                    <?php include('boxes/search.php'); ?>
                </div>
                <!-- End - search -->

                <!-- Beg - minicart -->
                <?php include('boxes/minicart.php'); ?>
                <!-- End - minicart -->
            </div>
        </div>
    </div>
    <!-- Beg - breadcrumb -->
    <?php
    $scripts_breadcrumb = array('listing.php', 'product.php', 'contact.php', 'account.php', 'account-orders.php', 'account-order-detail.php', 'articles.php', 'article-detail.php', 'brands.php', 'brand-detail.php');
    if (in_array(basename($_SERVER['PHP_SELF']), $scripts_breadcrumb)) {
        include('boxes/breadcrumb.php');
    }
    ?>
    <!-- End - breadcrumb -->
    <div class="header__mobile visible-xs visible-sm">
        <!-- Beg - search -->
        <div class="header__search">
            <div class="container">
                <?php include('boxes/search.php'); ?>
            </div>
        </div>
        <!-- End - search -->
    </div>
</section>