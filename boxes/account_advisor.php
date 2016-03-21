<?php
$advisor = array(
    'name' => 'Kamil Jariabek',
    'img' => 'webroot/img/tmp/product-01.jpg',
    'phone' => '+421 56 652 3195',
    'email' => 'k.jariabek@slovakia-trend.sk',
    'districts' => 'Bratislava, Pezinok, Trnava, Galanta, Hlohovec, Ilava'
);
?>

<div class="advisor">
    <div class="advisor__info">
        <div class="advisor__img">
            <img src="<?= $advisor['img'] ?>" alt="<?= $advisor['name'] ?>">
        </div>
        <div class="advisor__text">
            <strong><?= $advisor['name'] ?></strong>
            <?= __('Váš okresný poradca') ?>
        </div>
    </div>
    <div class="advisor__contact">
        <div class="advisor__row advisor__row--phone">
            <i class="ico ico--contact--phone left"></i>
            <a href="tel:<?= $advisor['phone'] ?>" title="<?= $advisor['phone'] ?>"><?= $advisor['phone'] ?></a>
        </div>
        <div class="advisor__row advisor__row--email">
            <i class="ico ico--contact--atsign left"></i>
            <a href="mailto:<?= $advisor['email'] ?>" class="link link--text" title="<?= $advisor['email'] ?>"><?= $advisor['email'] ?></a>
        </div>
    </div>
    <div class="advisor__districts">
        <strong><?= __('Zodpovedný za okresy') ?>:</strong>
        <?= $advisor['districts'] ?>
    </div>
</div>