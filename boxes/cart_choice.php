<?php
$payment = array(
    '1' => array(
        'name' => 'Hotovosť pri dodaní tovaru',
        'note' => '(zľava 3 %)',
        'desc' => 'Pri výbere tejto možnosti vám bude uplatnená zľava z celého vášho nákupu'
    ),
    '2' => array(
        'name' => 'Zrýchlený bankový prevod (do 3 dní)',
        'note' => '(zľava 3 %)',
        'desc' => 'Pri výbere tejto možnosti vám bude uplatnená zľava z celého vášho nákupu'
    ),
    '3' => array(
        'name' => 'Štandardný bankový prevod',
        'note' => '(0.00 €)',
        'desc' => 'Pri výbere tejto možnosti bude dodanie tovaru závisieť od dňa pripísania sumy na účet'
    )
);
$shipping = array(
    '1' => array(
        'name' => 'Expres doprava',
        'note' => '(zdarma)',
        'desc' => 'Pri expres doprave je obmedzenie minimálnej veľkosti objednávky od stanovenej hodnoty'
    ),
    '2' => array(
        'name' => 'Štandardná doprava',
        'note' => '(zdarma)',
        'desc' => 'Pri expres doprave je obmedzenie minimálnej veľkosti objednávky od stanovenej hodnoty'
    )
);
?>

<div class="cart__choice">
    <h2 class="cart__choice__title"><?= __('Možnosti platby') ?></h2>
    <div class="cart__choice__wrapper">
        <div class="msg msg--danger t_center msg--validate" id="error-payment">
            <?= __('Zabudli ste zvoliť spôsob platby.') ?>
        </div>
        <?php foreach ($payment as $id => $item) { ?>
        <div class="cart__choice__box">
            <div class="form-group with_label">
                <input type="radio" class="form-control" id="payment-<?= $id ?>" name="payment">
                <label for="payment-<?= $id ?>">
                    <strong class="cart__choice__name"><?= $item['name'] ?></strong>
                    <span class="cart__choice__note"><?= $item['note'] ?></span>
                    <span class="cart__choice__desc"><?= $item['desc'] ?></span>
                </label>
            </div>
        </div>
        <?php } ?>
    </div>
    <h2 class="cart__choice__title"><?= __('Možnosti dopravy') ?></h2>
    <div class="cart__choice__wrapper">
        <div class="msg msg--danger t_center msg--validate" id="error-shipping">
            <?= __('Zabudli ste zvoliť spôsob dopravy.') ?>
        </div>
        <?php foreach ($shipping as $id => $item) { ?>
        <div class="cart__choice__box">
            <div class="form-group with_label">
                <input type="radio" class="form-control" id="shipping-<?= $id ?>" name="shipping">
                <label for="shipping-<?= $id ?>">
                    <strong class="cart__choice__name"><?= $item['name'] ?></strong>
                    <span class="cart__choice__note"><?= $item['note'] ?></span>
                    <span class="cart__choice__desc"><?= $item['desc'] ?></span>
                </label>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script>
$(function(){
    $('.msg--validate').hide();

    $('form[name="form-cart-2"]').bind('submit', function(event) {
        var result = true;

        if (!$('[name="payment"]').is(':checked')) {
            $('#error-payment').fadeIn(500);
            result = false;
        } else {
            if ($('#error-payment').is(':visible')) { $('#error-payment').fadeOut(500); }
        }

        if (!$('[name="shipping"]').is(':checked')) {
            $('#error-shipping').fadeIn(500);
            result = false;
        } else {
            if ($('#error-shipping').is(':visible')) { $('#error-shipping').fadeOut(500); }
        }

        if (!result) { slideTo($('.msg--danger')); }

        return result;
    });
});
</script>