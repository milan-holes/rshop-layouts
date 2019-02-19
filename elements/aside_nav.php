<aside class="aside aside--nav">
    <div class="aside__header">
        <div class="aside__title">Navigácia</div>
        <a href="#" title="Zavrieť" class="aside__close">
            Zavrieť
            <i class="ico ico-aside--close--white right orig"></i>
            <i class="ico ico-aside--close--red right hover"></i>
        </a>
    </div>
    <div class="aside__content">
        <?php foreach ($navig as $id => $item) { ?>
        <div class="aside--nav__item">
            <a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>" class="ico__hover">
                <?= $item['name'] ?>
                <i class="ico right arr--black--right--narrow orig"></i>
                <i class="ico right arr--yellow--right--narrow hover"></i>
            </a>
            <div class="aside--subnav">
                <a href="#" title="Hlavné kategórie" class="aside--subnav__back ico__hover">
                    <i class="ico left arr--black--left--narrow orig"></i>
                    <i class="ico left arr--yellow--left--narrow hover"></i>
                    Hlavné kategórie
                </a>
                <ul class="aside--subnav__list">
                <?php foreach ($item['sub'] as $sid => $sub) { ?>
                    <div class="aside--subnav__item">
                        <a href="<?= $sub['link'] ?>" title="<?= $sub['name'] ?>">
                            <table>
                                <tr>
                                    <td class="aside--subnav__img">
                                        <img src="<?= $sub['img'] ?>" alt="<?= $sub['name'] ?>">
                                    </td>
                                    <td class="aside--subnav__name">
                                        <?= $sub['name'] ?>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>
                <?php } ?>
                </ul>
                <a href="#" title="Hlavné kategórie" class="aside--subnav__back ico__hover">
                    <i class="ico left arr--black--left--narrow orig"></i>
                    <i class="ico left arr--yellow--left--narrow hover"></i>
                    Hlavné kategórie
                </a>
            </div>
        </div>
        <?php } ?>
        <div class="aside--nav__item aside--nav__item--delimiter">Ďalšie stránky</div>
        <div class="aside--nav__item aside--nav__item--link">
            <a href="#" title="Výpredaj" class="ico__hover">
                <i class="ico left ico-sale orig"></i>
                <i class="ico left ico-sale--yellow hover"></i>
                Výpredaj
            </a>
        </div>
        <div class="aside--nav__item aside--nav__item--link">
            <a href="#" title="Katalógy" class="ico__hover">
                <i class="ico left ico-catalogs orig"></i>
                <i class="ico left ico-catalogs--yellow hover"></i>
                Katalógy
            </a>
        </div>
        <div class="aside--nav__item aside--nav__item--link">
            <a href="#" title="Certifikáty" class="ico__hover">
                <i class="ico left ico-certificats orig"></i>
                <i class="ico left ico-certificats--yellow hover"></i>
                Certifikáty
            </a>
        </div>
        <div class="aside--nav__item aside--nav__item--link">
            <a href="#" title="Kontakt" class="ico__hover">
                <i class="ico left ico-atsign orig"></i>
                <i class="ico left ico-atsign--yellow hover"></i>
                Kontakt
            </a>
        </div>
    </div>
    <div class="aside__footer">
        <a href="#" title="Zavrieť" class="aside__footer__close"></a>
    </div>
</aside>