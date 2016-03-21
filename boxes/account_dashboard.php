<?php
$orders = array(
    '1' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015'
    ),
    '2' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015'
    ),
    '3' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015'
    ),
    '4' => array(
        'code' => '123452444',
        'address' => 'Trenčianska 53, Bratislava 821 09',
        'payment' => 'Zrýchlený prevod',
        'price' => '1300 €',
        'date' => '15.12.2015'
    )
);

$news = array(
    '1' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => 'article.php',
    ),
    '2' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => 'article.php',
    ),
    '3' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => 'article.php',
    ),
    '4' => array(
        'name' => 'Dôležité oznámenie k chybne označeným rukaviciam STREND PRO 313489',
        'img' => 'webroot/img/tmp/art-01.jpg',
        'link' => 'article.php',
    )
);
?>

<div class="row dashboard__wrapper">
    <div class="dashboard__overview col-xs-50 col-sm-33">
        <h2 class="dashboard__title">
            <i class="ico arr--circle"></i><span><?= __('Prehľad objednávok') ?></span>
        </h2>
        <div class="dashboard__overview__box">
            <div class="dashboard__overview__all">
                <strong>2</strong>
                <span><?= __('Objednávky čakajú na vybavenie') ?></span>
            </div>
            <div class="dashboard__overview__details">
                <div class="dashboard__overview__row">
                    <div class="dashboard__overview__number">2</div>
                    <div class="dashboard__overview__msg"><?= __('čaká na vybavenie') ?></div>
                </div>
                <div class="dashboard__overview__row">
                    <div class="dashboard__overview__number">140</div>
                    <div class="dashboard__overview__msg"><?= __('vybavených objednávok') ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard__overview col-xs-50 col-sm-33">
        <h2 class="dashboard__title">
            <i class="ico arr--circle"></i><span><?= __('Prehľad') . ' <br class="visible-md">' . __('faktúr') ?></span>
        </h2>
        <div class="dashboard__overview__box">
            <div class="dashboard__overview__all">
                <strong>2</strong>
                <span><?= __('Faktúry čakajú na vybavenie') ?></span>
            </div>
            <div class="dashboard__overview__details">
                <div class="dashboard__overview__row dashboard__overview__row--narrower">
                    <div class="dashboard__overview__number">1</div>
                    <div class="dashboard__overview__msg"><?= __('čaká na úhradu') ?></div>
                </div>
                <div class="dashboard__overview__row dashboard__overview__row--narrower">
                    <div class="dashboard__overview__number">1</div>
                    <div class="dashboard__overview__msg"><?= __('faktúra po splatnosti') ?></div>
                </div>
                <div class="dashboard__overview__row dashboard__overview__row--narrower">
                    <div class="dashboard__overview__number">140</div>
                    <div class="dashboard__overview__msg"><?= __('uhradených faktúr') ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard__overview col-xs-50 col-sm-33">
        <h2 class="dashboard__title">
            <i class="ico arr--circle"></i><span><?= __('Prehľad reklamácií') ?></span>
        </h2>
        <div class="dashboard__overview__box">
            <div class="dashboard__overview__all">
                <strong>1</strong>
                <span><?= __('Reklamácií čaká na vybavenie') ?></span>
            </div>
            <div class="dashboard__overview__details">
                <div class="dashboard__overview__row dashboard__overview__row--wider">
                    <div class="dashboard__overview__number">3</div>
                    <div class="dashboard__overview__msg"><?= __('celkový počet reklamácií') ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashboard__wrapper">
    <h2 class="dashboard__title"><span><?= __('Vaše posledné objednávky') ?></span></h2>
    <div class="orders">
        <div class="orders__header hidden-xs">
            <div class="col-xs-25 col-sm-14"><?= __('Obj. číslo') ?></div>
            <div class="col-xs-25 col-sm-18"><?= __('Dodacia adresa') ?></div>
            <div class="col-xs-25 col-sm-15 col-lg-17"><?= __('Platba') ?></div>
            <div class="col-xs-25 col-sm-11"><?= __('Suma') ?></div>
            <div class="col-xs-50 col-sm-16 col-lg-14"><?= __('Dátum') ?></div>
            <div class="col-xs-25 col-sm-13"></div>
            <div class="col-xs-25 col-sm-13"></div>
        </div>
        <div class="orders__body">
            <?php foreach ($orders as $id => $order) { ?>
            <div class="orders__row">
                <div class="col-xs-25 col-sm-14 orders__col orders__col--code"><a href="account-order-detail.php" class="link link--text" title="<?= __('Zobraziť objednávku') ?>"><?= $order['code'] ?></a></div>
                <div class="col-xs-25 col-sm-18 orders__col orders__col--address"><span><?= $order['address'] ?></span></div>
                <div class="col-xs-25 col-sm-15 col-lg-17 orders__col orders__col--payment"><span><?= $order['payment'] ?></span></div>
                <div class="col-xs-25 col-sm-11 orders__col orders__col--price"><span><?= $order['price'] ?></span></div>
                <div class="col-xs-50 col-sm-16 col-lg-14 orders__col orders__col--date"><span><?= $order['date'] ?></span></div>
                <div class="col-xs-25 col-sm-13 orders__col orders__col--white"><a href="order-claim-detail.php" class="link link--text" title="<?= __('Reklamovať objednávku') ?>"><?= __('Reklamovať') ?></a></div>
                <div class="col-xs-25 col-sm-13 orders__col orders__col--white"><a href="#" class="link link--text" title="<?= __('Zopakovať objednávku') ?>"><?= __('Zopakovať') ?></a></div>
            </div>
            <?php } ?>
        </div>
        <div class="dashboard__link">
            <i class="ico arr--circle left"></i><a href="account-orders.php" class="link link--bordered" title="<?= __('Prejsť na všetky objednávky') ?>"><?= __('Prejsť na všetky objednávky') ?></a>
        </div>
    </div>
</div>

<div class="dashboard__wrapper">
    <h2 class="dashboard__title"><span><?= __('Aktuality') ?></span></h2>
    <div class="news">
        <div class="orders__body">
            <?php foreach ($news as $id => $art) { ?>
            <div class="orders__row">
                <div class="news__img orders__col col-xs-15 col-sm-7">
                    <img src="<?= $art['img'] ?>" alt="<?= $art['name'] ?>">
                </div>
                <div class="news__name orders__col col-xs-60 col-sm-78 col-lg-81"><span><?= $art['name'] ?></span></div>
                <div class="news__link orders__col col-xs-25 col-sm-15 col-lg-12">
                    <a href="<?= $art['link'] ?>" class="link link--text" title="<?= __('Zistiť viac') ?>"><?= __('Zistiť viac') ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="dashboard__link">
            <i class="ico arr--circle left"></i><a href="articles.php" class="link link--bordered" title="<?= __('Prejsť na všetky aktuality') ?>"><?= __('Prejsť na všetky aktuality') ?></a>
        </div>
    </div>
</div>
