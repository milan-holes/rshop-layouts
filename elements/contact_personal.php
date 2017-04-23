<?php
$contact_personal = array(
    'Vedenie spoločnosti', 'Sekretariát riaditeľa', 'Prokurista', 'Veľkoobchod', 'Maloobchod', 'Objednávky', 'Reklamácie', 'Export', 'Export', 'Oddelenie dopravy', 'Odbyt pre priemysel', 'Designer'
);
$contact_economic = array(
    'Ekonóm', 'Účtovník', 'Asistent ek. oddelenia', 'Asistent ek. oddelenia', 'Účtovník'
);
$contact = array(
    'name' => 'Emília Žeňuchová',
    'position' => 'konateľ spoločnosti',
    'phone' => '+421 917 144 566',
    'email' => 'info@slovakia-trend.sk'
);
?>

<div class="col-xs-100">
    <div class="contact__title__wrapper">
        <h2 class="contact__title--line"><?= __('Personálne kontakty') ?></h2>
    </div>
    <div class="row">
        <?php foreach ($contact_personal as $title) { ?>
        <div class="contact__box__wrapper col-xs-50 col-sm-33 col-lg-30">
            <div class="contact__box">
                <div class="contact__box__title"><?= $title ?></div>
                <div class="contact__box__name"><?= $contact['name'] ?><span> (<?= $contact['position'] ?>)</span></div>
                <div class="contact__box__phone"><i class="ico ico--contact--phone left"></i><a href="tel:<?= $contact['phone'] ?>" class="link link--bordered" title="<?= $contact['phone'] ?>"><?= $contact['phone'] ?></a></div>
                <div class="contact__box__email"><i class="ico ico--contact--atsign left"></i><a href="mailto:<?= $contact['email'] ?>" class="link link--text" title="<?= $contact['email'] ?>"><?= $contact['email'] ?></a></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="col-xs-100">
    <div class="contact__title__wrapper">
        <h2 class="contact__title--line"><?= __('Kontakty na ekonomické oddelenie') ?></h2>
    </div>
    <div class="row">
        <?php foreach ($contact_economic as $title) { ?>
        <div class="contact__box__wrapper col-xs-50 col-sm-33 col-lg-30">
            <div class="contact__box">
                <div class="contact__box__title"><?= $title ?></div>
                <div class="contact__box__name"><?= $contact['name'] ?></div>
                <div class="contact__box__phone"><i class="ico ico--contact--phone left"></i><a href="tel:<?= $contact['phone'] ?>" class="link link--bordered" title="<?= $contact['phone'] ?>"><?= $contact['phone'] ?></a></div>
                <div class="contact__box__email"><i class="ico ico--contact--atsign left"></i><a href="mailto:<?= $contact['email'] ?>" class="link link--text" title="<?= $contact['email'] ?>"><?= $contact['email'] ?></a></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>