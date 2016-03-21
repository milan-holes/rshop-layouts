<?php
$brands = array(
    '1' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-01.png',
        'link' => 'brand-detail.php'
    ),
    '2' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-02.png',
        'link' => 'brand-detail.php'
    ),
    '3' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-03.png',
        'link' => 'brand-detail.php'
    ),
    '4' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-04.png',
        'link' => 'brand-detail.php'
    ),
    '5' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-05.png',
        'link' => 'brand-detail.php'
    ),
    '6' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-06.png',
        'link' => 'brand-detail.php'
    ),
    '7' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-07.png',
        'link' => 'brand-detail.php'
    ),
    '8' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-08.png',
        'link' => 'brand-detail.php'
    ),
    '9' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-09.png',
        'link' => 'brand-detail.php'
    ),
    '10' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-10.png',
        'link' => 'brand-detail.php'
    ),
    '11' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-11.png',
        'link' => 'brand-detail.php'
    ),
    '12' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-12.png',
        'link' => 'brand-detail.php'
    ),
    '13' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-06.png',
        'link' => 'brand-detail.php'
    ),
    '14' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-07.png',
        'link' => 'brand-detail.php'
    ),
    '15' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-08.png',
        'link' => 'brand-detail.php'
    ),
    '16' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-09.png',
        'link' => 'brand-detail.php'
    ),
    '17' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-10.png',
        'link' => 'brand-detail.php'
    ),
    '18' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-11.png',
        'link' => 'brand-detail.php'
    ),
    '19' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-12.png',
        'link' => 'brand-detail.php'
    )
);
?>

<div class="brands__list row">
    <?php foreach ($brands as $id => $brand) { ?>
    <div class="brands__list__item col-xs-25 col-lg-20">
        <a href="<?= $brand['link'] ?>" title="<?= $brand['name'] ?>">
            <div class="brands__list__img">
                <img src="<?= $brand['img'] ?>" alt="<?= $brand['name'] ?>">
            </div>
            <h3 class="brands__list__title"><?= $brand['name'] ?></h3>
        </a>
    </div>
    <?php } ?>
</div>