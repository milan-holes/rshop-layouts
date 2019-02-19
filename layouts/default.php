<div class="l-base">
    <header class="l-header">
        <?= $this->element('header') ?>
    </header>

    <main class="l-content">
        <?= $this->fetch('content') ?>
    </main>

    <footer class="l-footer">
        <?= $this->element('footer') ?>
    </footer>
</div>

<div class="l-additional">
    <div class="c-overlay"></div>

    <div class="c-var">
        <div class="c-var__item cxs-is-visible"></div>
        <div class="c-var__item xs-is-visible"></div>
        <div class="c-var__item sm-is-visible"></div>
        <div class="c-var__item md-is-visible"></div>
        <div class="c-var__item lg-is-visible"></div>
    </div>
</div>

<?= $this->element('mobile_menu'); ?>

<?php include('elements/aside_cart.php'); ?>
<?php include('elements/aside_nav.php'); ?>
<?php include('elements/aside_order.php'); ?>

<?php include('elements/modal_login.php'); ?>