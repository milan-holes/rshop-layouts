<ul class="account__nav__list">
    <li class="account__nav__list__item account__nav__list__item--dashboard hidden-md hidden-lg">
        <a href="account.php" title="<?= __('Dashboard') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Dashboard') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--orders">
        <a href="account-orders.php" title="<?= __('Objednávky') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Objednávky') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--invoices">
        <a href="account-invoices.php" title="<?= __('Faktúry') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Faktúry') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--claims">
        <a href="account-claims.php" title="<?= __('Reklamácie') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Reklamácie') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--addresses">
        <a href="account-addresses.php" title="<?= __('Fakturačné a dodacie adresy') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Fakturačné a dodacie adresy') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--newsletter">
        <a href="account-newsletter.php" title="<?= __('Odber noviniek') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Odber noviniek') ?></a>
    </li>
    <li class="account__nav__list__item account__nav__list__item--password">
        <a href="account-password.php" title="<?= __('Zmena hesla') ?>"><i class="ico arr--bread--black--right left"></i><?= __('Zmena hesla') ?></a>
    </li>
</ul>

<script>
$(function(){
    $('.account__nav__trigger').bind('click', function(event) {
        $(this).blur();

        $('.account__nav__list').slideToggle();
    });
});
</script>