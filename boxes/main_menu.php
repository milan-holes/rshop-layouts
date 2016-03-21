<div class="header__menu col-xs-100 col-sm-29 col-md-22 col-lg-19">
    <a href="#" title="Všetky produkty" class="hidden-xs hidden-sm">
        <i class="ico left ico--menu"></i><span>Všetky produkty</span><i class="ico right arr--yellow--down"></i>
    </a>
    <a href="#" title="Všetky produkty" class="header__menu__trigger visible-xs visible-sm">
        <i class="ico left ico--menu"></i><span class="hidden-cxs">Všetky produkty</span><i class="ico right arr--yellow--down hidden-cxs"></i>
    </a>
    <div class="header__nav__wrapper">
        <ul class="header__nav__list hidden-xs hidden-sm">
            <?php foreach ($navig as $id => $item) { ?>
            <li class="header__nav__item">
                <a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>">
                    <?= $item['name'] ?>
                    <i class="ico right arr--black--right--narrow orig"></i>
                    <i class="ico right arr--yellow--right--narrow hover"></i>
                </a>
                <div class="header__subnav">
                    <div class="header__subnav__title"><?= $item['name'] ?></div>
                    <ul class="header__subnav__list">
                    <?php foreach ($item['sub'] as $sid => $sub) { ?>
                        <li class="header__subnav__item">
                            <a href="<?= $sub['link'] ?>" title="<?= $sub['name'] ?>">
                                <table>
                                    <tr>
                                        <td class="header__subnav__img">
                                            <img src="<?= $sub['img'] ?>" alt="<?= $sub['name'] ?>">
                                        </td>
                                        <td class="header__subnav__name">
                                            <?= $sub['name'] ?>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                    <a href="<?= $item['link'] ?>" class="header__subnav__title header__subnav__title--all" title="Zobraziť celú kategóriu">Zobraziť celú kategóriu</a>
                </div>
            </li>
            <?php } ?>
            <li class="breaker"></li>
        </ul>
        <ul class="header__nav__list header__nav__list--other hidden-xs hidden-sm">
            <li class="header__nav__item header__nav__item--delimiter">Ďalšie stránky</li>
            <li class="header__nav__item header__nav__item--link">
                <a href="#" title="Výpredaj" class="ico__hover">
                    <i class="ico left ico--sale orig"></i>
                    <i class="ico left ico--sale--yellow hover"></i>
                    Výpredaj
                </a>
            </li>
            <li class="header__nav__item header__nav__item--link">
                <a href="#" title="Katalógy" class="ico__hover">
                    <i class="ico left ico--catalogs orig"></i>
                    <i class="ico left ico--catalogs--yellow hover"></i>
                    Katalógy
                </a>
            </li>
            <li class="header__nav__item header__nav__item--link">
                <a href="#" title="Certifikáty" class="ico__hover">
                    <i class="ico left ico--certificats orig"></i>
                    <i class="ico left ico--certificats--yellow hover"></i>
                    Certifikáty
                </a>
            </li>
            <li class="header__nav__item header__nav__item--link">
                <a href="#" title="Kontakt" class="ico__hover">
                    <i class="ico left ico--atsign orig"></i>
                    <i class="ico left ico--atsign--yellow hover"></i>
                    Kontakt
                </a>
            </li>
        </ul>
    </div>
</div>