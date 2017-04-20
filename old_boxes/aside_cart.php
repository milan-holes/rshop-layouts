<aside class="aside aside--cart">
    <div class="aside__header">
        <div class="aside__title">Nákupný košík</div>
        <a href="#" title="Zavrieť" class="aside__close">
            Zavrieť
            <i class="ico ico--aside--close--white right orig"></i>
            <i class="ico ico--aside--close--red right hover"></i>
        </a>
    </div>
    <div class="aside__content">
        <?php foreach ($minicart as $id => $item) { ?>
        <div class="aside--cart__product">
            <a href="<?= $item['link'] ?>" class="aside--cart__link" title="<?= $item['name'] ?>">
                <div class="aside--cart__img">
                    <img src="<?= $item['img'] ?>" alt="Produkt 1" />
                </div>
                <div class="aside--cart__content">
                    <div class="aside--cart__name"><?= $item['name'] ?></div>
                    <div class="aside--cart__info">
                        <span class="aside--cart__quantity"><?= $item['quantity'] ?></span>x
                        <strong class="aside--cart__price"><?= $item['price'] ?></strong>
                    </div>
                </div>
            </a>
            <a href="#" class="aside--cart__delete" title="Zavrieť">
                <i class="ico ico--aside--close--black right orig"></i>
                <i class="ico ico--aside--close--red right hover"></i>
            </a>
        </div>
        <?php } ?>
        <div class="aside--cart__totals">
            <div class="aside--cart__transport">
                <i class="ico ico--transport"></i>
                K tomuto nákupu máte <strong>dopravu zdarma</strong>
            </div>
            <div class="aside--cart__total">
                SUMA CELKOM: <span class="aside--cart__total__price">75,40 €</span> s DPH
            </div>
        </div>
        <a href="nakupny-kosik" title="Prejsť do košíka" class="aside--cart__tothecart">
            <span>Prejsť do košíka</span>
            <i class="ico arr--btn--white--right"></i>
        </a>
    </div>
    <div class="aside__footer">
        <a href="#" title="Zavrieť" class="aside__footer__close"></a>
    </div>
</aside>