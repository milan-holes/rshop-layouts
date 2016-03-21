<?php
$brand = array(
    'name' => 'Stend Pro',
    'img' => 'webroot/img/tmp/brand-01.png',
    'desc' => 'Jemný osobitý karibský rum zmiešaný s jedinečnou zmesou korení s tónmi sušeného ovocia, vanilky, karamelu a duba. Výroba sa dokončuje v sudoch zo španielskeho duba, ktorý prináša hladký a jemný zážitok.'
);
?>

<h1 class="brand__title">Strend Pro</h1>
<div class="brand__info">
    <div class="brand__img">
        <img src="<?= $brand['img'] ?>" alt="<?= $brand['name'] ?>">
    </div>
    <div class="brand__desc"><?= $brand['desc'] ?></div>
</div>

<div class="brand__categories">
    <h2 class="dashboard__title"><span><?= __('Zaradené v kategóriách') ?>:</span></h2>
    <ul class="list list--inline list--arrow">
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana osobov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana osotfhxýchxdrgajov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana osxdrg ajov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana osobrg údajov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrch údajov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochra rzdh rhzr ajov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana osrrgjov</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrana oso rzg rzzrv</a></li>
        <li class="col-xs-46 col-sm-29 col-lg-21"><i class="ico arr--bread--black--right left"></i><a href="#" title="Ochrana osobných údajov">Ochrandrgch údajov</a></li>
    </ul>
</div>

<div class="brand__filter row">
    <?php include('boxes/filter.php'); ?>
</div>

<div class="brand__listing row">
    <?php include('boxes/listing_products.php'); ?>
</div>