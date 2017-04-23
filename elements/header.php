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
                    <a href="<?= $this->Url->build('index') ?>" title="<?= $configurations['storeName'] ?>">
                        <img src="webroot/img/logos/logo.png" alt="<?= $configurations['storeName'] ?>">
                    </a>
                </div>
                <div class="header__links hidden-xs hidden-sm col-md-50 col-lg-44">
                    <div class="header__link">
                        <i class="ico left ico--atsign"></i>
                        <a href="<?= $this->Url->build('kontakt') ?>" title="<?= __('Kontakt') ?>">
                            <span><?= __('Kontakt') ?></span><i class="ico arr--black--right"></i>
                        </a>
                    </div>
                </div>
                <div class="header__account col-xs-56 col-sm-35 col-md-27 col-lg-21">
                    <div class="header__account__wrapper">
                        <a href="#login" title="Prihlásenie" data-toggle="modal"><i class="ico left ico--login"></i><span>Prihlásenie</span></a>
                        <a href="#registration" title="Registrácia" data-toggle="modal"><i class="ico left ico--logout"></i><span>Registrácia</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row">
                <!-- Beg - main menu -->
                <?= $this->element('main_menu'); ?>
                <!-- End - main menu -->

                <!-- Beg - search -->
                <div class="header__search hidden-xs hidden-sm col-md-36 col-lg-46 nopadding">
                    <?= $this->element('search'); ?>
                </div>
                <!-- End - search -->

                <!-- Beg - minicart -->
                <?= $this->element('minicart'); ?>
                <!-- End - minicart -->
            </div>
        </div>
    </div>
    <!-- Beg - breadcrumb -->
    <?php
    $scripts_breadcrumb = array('listing', 'product', 'contact', 'articles', 'article-detail', 'brands', 'brand-detail');
    if (in_array($_GET['page'], $scripts_breadcrumb)) {
        echo $this->element('breadcrumb');
    }
    ?>
    <!-- End - breadcrumb -->
    <div class="header__mobile visible-xs visible-sm">
        <!-- Beg - search -->
        <div class="header__search">
            <div class="container">
                <?= $this->element('search'); ?>
            </div>
        </div>
        <!-- End - search -->
    </div>
</section>