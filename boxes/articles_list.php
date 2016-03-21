<?php
$articles = array(
    '1' => array(
        'name' => 'Viac ako 10 000 položiek dostupných skladom',
        'img' => 'webroot/img/tmp/cat-01.png',
        'link' => 'article-detail.php',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '2' => array(
        'name' => 'Záruka vysokej kvality',
        'img' => 'webroot/img/tmp/cat-01.png',
        'link' => 'article-detail.php',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '3' => array(
        'name' => 'Pravidelný rozvoz tovaru pre odberateľov',
        'img' => 'webroot/img/tmp/cat-01.png',
        'link' => 'article-detail.php',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
    '4' => array(
        'name' => '20 rokov skúseností na európskom trhu',
        'img' => 'webroot/img/tmp/cat-01.png',
        'link' => 'article-detail.php',
        'perex' => 'Na základe oznámenia o kontrole Ochranných rukavíc STREND PRO 313489 orgánom SOI sme prijali riešenie situácie'
    ),
);
?>

<div class="articles__list row">
    <?php foreach ($articles as $id => $article) { ?>
    <div class="articles__list__item col-xs-50">
        <a href="<?= $article['link'] ?>" title="<?= $article['name'] ?>">
            <h3 class="articles__list__title"><?= $article['name'] ?></h3>
            <div class="articles__list__img">
                <img src="<?= $article['img'] ?>" alt="<?= $article['name'] ?>">
            </div>
            <div class="articles__list__info">
                <div class="articles__list__perex">
                    <?= $article['perex'] ?>
                </div>
                <button class="btn btn--brand"><?= __('Čítať článok') ?></button>
            </div>
        </a>
    </div>
    <?php } ?>
</div>