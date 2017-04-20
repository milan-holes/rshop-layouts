<?php
$articles_nav = array(
    '1' => array(
        'name' => 'Obchodné podmienky',
        'link' => 'article-detail.php'
    ),
    '2' => array(
        'name' => 'Ochrana údajov',
        'link' => 'article-detail.php'
    ),
    '3' => array(
        'name' => 'Ako objednať tovar?',
        'link' => 'article-detail.php'
    ),
    '4' => array(
        'name' => 'Doprava',
        'link' => 'article-detail.php'
    ),
    '5' => array(
        'name' => 'Spôsob platby',
        'link' => 'article-detail.php'
    ),
    '6' => array(
        'name' => 'O spoločnosti',
        'link' => 'article-detail.php'
    ),
    '7' => array(
        'name' => 'Reklamácia',
        'link' => 'article-detail.php'
    ),
    '8' => array(
        'name' => 'Výhody',
        'link' => 'article-detail.php'
    ),
    '9' => array(
        'name' => 'Vernostný program',
        'link' => 'article-detail.php'
    ),
    '10' => array(
        'name' => 'Veľkoobchodný predaj',
        'link' => 'article-detail.php'
    )
);
?>

<ul class="account__nav__list">
    <?php foreach ($articles_nav as $id => $art) { ?>
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