<?php
$brands_nav = array(
    '1' => array(
        'name' => 'Stend Pro',
        'img' => 'webroot/img/tmp/brand-01.png',
        'link' => 'brand-detail.php'
    ),
    '2' => array(
        'name' => 'Tesla',
        'img' => 'webroot/img/tmp/brand-02.png',
        'link' => 'brand-detail.php'
    ),
    '3' => array(
        'name' => 'Skil',
        'img' => 'webroot/img/tmp/brand-03.png',
        'link' => 'brand-detail.php'
    ),
    '4' => array(
        'name' => 'Tyrolit',
        'img' => 'webroot/img/tmp/brand-04.png',
        'link' => 'brand-detail.php'
    ),
    '5' => array(
        'name' => 'Tokoz',
        'img' => 'webroot/img/tmp/brand-05.png',
        'link' => 'brand-detail.php'
    ),
    '6' => array(
        'name' => 'Lanex',
        'img' => 'webroot/img/tmp/brand-06.png',
        'link' => 'brand-detail.php'
    ),
    '7' => array(
        'name' => 'Stanley',
        'img' => 'webroot/img/tmp/brand-07.png',
        'link' => 'brand-detail.php'
    ),
    '8' => array(
        'name' => 'Flexovit',
        'img' => 'webroot/img/tmp/brand-08.png',
        'link' => 'brand-detail.php'
    ),
    '9' => array(
        'name' => 'Hobes',
        'img' => 'webroot/img/tmp/brand-09.png',
        'link' => 'brand-detail.php'
    ),
    '10' => array(
        'name' => 'WD-40',
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

<ul class="account__nav__list account__nav__list--brands">
    <?php foreach ($brands_nav as $id => $art) { ?>
    <li class="account__nav__list__item">
        <a href="<?= $art['link'] ?>" title="<?= $art['name'] ?>"><i class="ico arr--bread--black--right left"></i><?= $art['name'] ?></a>
    </li>
    <?php } ?>
</ul>

<script>
$(function(){
    $('.account__nav__trigger').bind('click', function(event) {
        $(this).blur();

        $('.account__nav__list').slideToggle();
    });
});
</script>