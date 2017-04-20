<?php
$orders = array(
    '1' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Spracováva sa',
        'status_class' => 'green'
    ),
    '2' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Vyexpedovaná',
        'status_class' => 'black'
    ),
    '3' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Vyexpedovaná',
        'status_class' => 'black'
    ),
    '4' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Vyexpedovaná',
        'status_class' => 'black'
    ),
    '5' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Storno',
        'status_class' => 'gray'
    ),
    '6' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Vyexpedovaná',
        'status_class' => 'black'
    ),
    '7' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015',
        'status' => 'Vyexpedovaná',
        'status_class' => 'black'
    )
);
?>

<h1 class="account__title hidden-xs hidden-sm"><?= __('Vaše objednávky') ?></h1>

<div class="account__boxes">
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">1</div>
        <div class="account__boxes__desc"><?= __('Čaká na expedovanie') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">180</div>
        <div class="account__boxes__desc"><?= __('Vybavených objednávok') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">2200,80 €</div>
        <div class="account__boxes__desc"><?= __('Celková hodnota bez DPH') ?></div>
    </div>
    <div class="account__boxes__item col-xs-50 col-sm-25">
        <div class="account__boxes__value">16.12.2015</div>
        <div class="account__boxes__desc"><?= __('Posledná objednávka') ?></div>
    </div>
</div>

<div class="orders orders--all">
    <div class="orders__filter">
        <div class="row">
            <form>
                <div class="orders__filter__sort col-xs-35 col-lg-50">
                    <select name="filter-sort" class="selectpicker sp--white">
                        <option value="1"><?= __('Od najlacnejších') ?></option>
                        <option value="2"><?= __('Od najdrahších') ?></option>
                        <option value="3"><?= __('Odporúčané') ?></option>
                        <option value="4"><?= __('Najpredávanejšie') ?></option>
                        <option value="5"><?= __('Podľa názvu A-Z') ?></option>
                        <option value="6"><?= __('Podľa názvu Z-A') ?></option>
                    </select>
                </div>
                <div class="orders__filter__price col-xs-65 col-lg-50">
                    <div class="row">
                        <div class="form-group with_label col-xs-36">
                            <label for="filter-price-from"><?= __('Cena od') ?>:</label>
                            <input type="text" class="form-control" id="filter-price-from" name="filter-price-from">
                        </div>
                        <div class="form-group with_label col-xs-36">
                            <label for="filter-price-from"><?= __('Cena do') ?>:</label>
                            <input type="text" class="form-control" id="filter-price-from" name="filter-price-from">
                        </div>
                        <div class="orders__filter__btn col-xs-28">
                            <button type="submit" class="btn btn--back"><?= __('Filtrovať') ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="orders__header hidden-xs">
        <div class="col-xs-25 col-sm-16 col-lg-14"><?= __('Obj. číslo') ?></div>
        <div class="col-xs-25 col-sm-16 col-lg-13"><?= __('Dátum') ?></div>
        <div class="col-xs-25 col-sm-19 col-lg-16"><?= __('Stav') ?></div>
        <div class="col-xs-25 col-sm-11"><?= __('Suma') ?></div>
        <div class="col-xs-50 col-sm-28 col-lg-20"><?= __('Dodacia adresa') ?></div>
        <div class="col-xs-25 col-sm-15 hidden-sm hidden-md col-lg-17"><?= __('Platba') ?></div>
        <div class="col-xs-25 col-sm-10 col-lg-9"></div>
    </div>
    <div class="orders__body">
        <?php foreach ($orders as $id => $order) { ?>
        <div class="orders__row orders__row--<?= $order['status_class'] ?>">
            <div class="col-xs-25 col-sm-16 col-lg-14 orders__col orders__col--code"><a href="account-order-detail.php" class="link link--text" title="<?= __('Zobraziť objednávku') ?>"><?= $order['code'] ?></a></div>
            <div class="col-xs-25 col-sm-16 col-lg-13 orders__col orders__col--date"><span><?= $order['date'] ?></span></div>
            <div class="col-xs-25 col-sm-19 col-lg-16 orders__col orders__col--status"><span><?= $order['status'] ?></span></div>
            <div class="col-xs-25 col-sm-11 orders__col orders__col--price"><span><?= $order['price'] ?></span></div>
            <div class="col-xs-50 col-sm-28 col-lg-20 orders__col orders__col--address"><span><?= $order['address'] ?></span></div>
            <div class="col-xs-25 col-sm-15 hidden-sm hidden-md col-lg-17 orders__col orders__col--payment"><span><?= $order['payment'] ?></span></div>
            <div class="col-xs-25 col-sm-10 col-lg-9 orders__col orders__col--white"><a href="account-order-detail.php" class="link link--text" title="<?= __('Detail objednávky') ?>"><?= __('Detail') ?></a></div>
        </div>
        <?php } ?>
    </div>
    <div class="orders__link">
        <button class="btn btn--back" title="<?= __('Zobraziť ďalšie') ?>"><?= __('Zobraziť ďalšie') ?></button>
    </div>
</div>