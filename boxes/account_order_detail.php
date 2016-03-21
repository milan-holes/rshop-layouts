<?php
$order = array(
    'code' => '12345244',
    'date' => '16.12.2015',
    'price' => '1400,24 €',
    'spy' => 'TKK2452',
    'products' => array(
        '1' => array(
            'quantity' => '1',
            'name' => 'Hadica Semperit Optimit PN 21/501 25/32 0,6MPA',
            'price' => '2,00 €',
            'link' => 'product.php'
        ),
        '2' => array(
            'quantity' => '5',
            'name' => 'Hadica Semperit Optimit',
            'price' => '2,00 €',
            'link' => 'product.php'
        ),
        '3' => array(
            'quantity' => '1',
            'name' => 'Hadica Semperit Optimit PN 21/501 25/32 0,6MPA',
            'price' => '2,00 €',
            'link' => 'product.php'
        ),
        '4' => array(
            'quantity' => '3',
            'name' => 'Hadica Semperit Optimit 0,6MPA',
            'price' => '2,00 €',
            'link' => 'product.php'
        )
    ),
    'shipping' => array(
        'title' => 'Štandardný spôsob dopravy',
        'name' => 'Riešenia, spol. s r.o.',
        'street' => 'Trenčianska 53',
        'zip' => '821 09',
        'town' => 'Bratislava',
        'country' => 'Slovenská republika'
    ),
    'payment' => array(
        'title' => 'Zrýchlený bezhotovostný prevod',
        'name' => 'Riešenia, spol. s r.o.',
        'street' => 'Trenčianska 53',
        'zip' => '821 09',
        'town' => 'Bratislava',
        'country' => 'Slovenská republika'
    ),
    'history' => array(
        '1' => array(
            'date' => '17.05.2015',
            'status' => 'Zaevidovaná',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, orci et suscipit feugiat elit mauris posuere lectus, non efficitur sem ante vitae justo.'
        ),
        '2' => array(
            'date' => '17.05.2015',
            'status' => 'Storno',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, orci et suscipit feugiat elit mauris posuere lectus, non efficitur sem ante vitae justo.'
        ),
        '3' => array(
            'date' => '17.05.2015',
            'status' => 'Reklamovaná',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum, orci et suscipit feugiat elit mauris posuere lectus, non efficitur sem ante vitae justo.'
        ),
    )
);
?>

<h1 class="account__title left"><?= __('Detail objednávky') . ' <strong>#' . $order['code'] . '</strong>' ?></h1>
<a href="account-claim-form.php" class="btn btn--back right order__claim" title="<?= __('Reklamovať objednávku') ?>"><?= __('Reklamovať objednávku') ?></a>

<div class="account__boxes">
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">12345244</div>
        <div class="account__boxes__desc"><?= __('Variabilný symbol') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">180</div>
        <div class="account__boxes__desc"><?= __('Dátum objednávky') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">2200,80 €</div>
        <div class="account__boxes__desc"><?= __('Celková hodnota bez DPH') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">16.12.2015</div>
        <div class="account__boxes__desc"><?= __('Sledovacie číslo') ?></div>
    </div>
</div>

<div class="dashboard__wrapper o-hidden">
    <h2 class="dashboard__title"><span><?= __('Produkty') ?></span></h2>
    <table class="order__table">
        <?php foreach ($order['products'] as $id => $item) { ?>
        <tr>
            <td class="t_center"><?= $item['quantity'] ?>x</td>
            <td><a href="<?= $item['link'] ?>" class="link link--bordered" title="<?= __('Detail produktu') ?>"><?= $item['name'] ?></a></td>
            <td class="t_center"><?= $item['price'] ?> <span><?= __('bez DPH') ?></span></td>
        </tr>
        <?php } ?>
    </table>
    <div class="order__totals">
        <div class="row">
            <div class="order__totals__item col-xs-50 t_right"><?= __('Cena bez DPH') ?>:</div>
            <div class="order__totals__item col-xs-50"><?= $order['price'] ?></div>
        </div>
        <div class="row">
            <div class="order__totals__item col-xs-50 t_right"><strong><?= __('Celkom') ?>:</strong></div>
            <div class="order__totals__item col-xs-50"><strong><?= $order['price'] ?></strong></div>
        </div>
    </div>
</div>

<div class="dashboard__wrapper">
    <div class="row">
        <div class="order__box__wrapper col-xs-50">
            <div class="order__box">
                <h2 class="dashboard__title"><span><?= __('Adresa pre dopravu') ?></span></h2>
                <div class="order__box__text">
                    <i class="ico ico--square"></i>
                    <?= $order['shipping']['name'] . '<br>' ?>
                    <?= $order['shipping']['street'] . ', ' . $order['shipping']['zip'] . ' ' . $order['shipping']['town'] . '<br>' ?>
                    <?= $order['shipping']['country'] ?>
                </div>
            </div>
        </div>
        <div class="order__box__wrapper col-xs-50">
            <div class="order__box">
                <h2 class="dashboard__title"><span><?= __('Adresa pre platbu') ?></span></h2>
                <div class="order__box__text">
                    <i class="ico ico--square"></i>
                    <?= $order['payment']['name'] . '<br>' ?>
                    <?= $order['payment']['street'] . ', ' . $order['payment']['zip'] . ' ' . $order['payment']['town'] . '<br>' ?>
                    <?= $order['payment']['country'] ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="order__box__wrapper col-xs-50">
            <div class="order__box">
                <h2 class="dashboard__title"><span><?= __('Adresa pre dopravu') ?></span></h2>
                <div class="order__box__text">
                    <i class="ico ico--square"></i>
                    <?= $order['shipping']['title'] ?>
                </div>
            </div>
        </div>
        <div class="order__box__wrapper col-xs-50">
            <div class="order__box">
                <h2 class="dashboard__title"><span><?= __('Adresa pre platbu') ?></span></h2>
                <div class="order__box__text">
                    <i class="ico ico--square"></i>
                    <?= $order['payment']['title'] ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashboard__wrapper o-hidden">
    <h2 class="dashboard__title"><span><?= __('História objednávky') ?></span></h2>
    <div class="order__history">
        <?php foreach ($order['history'] as $id => $item) { ?>
        <div class="order__history__box">
            <div class="order__history__title"><?= $item['date'] . ' - ' . $item['status'] ?></div>
            <div class="order__history__text"><?= $item['text'] ?></div>
        </div>
        <?php } ?>
    </div>
</div>