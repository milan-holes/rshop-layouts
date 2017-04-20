<div class="alternate col-xs-50 col-sm-34 col-md-30">
    <h2 class="alternate__title">Alternatívny produkt</h2>
    <div class="products__item">
        <a href="<?= $product['link'] ?>" title="<?= $product['name'] ?>" class="products__link">
            <div class="products__ribbon__wrapper">
                <?php if ($product['action']) { ?>
                <div class="products__ribbon products__ribbon--action">Akcia</div>
                <?php } ?>
                <?php if ($product['new']) { ?>
                <div class="products__ribbon products__ribbon--new">Novinka</div>
                <?php } ?>
            </div>
            <div class="products__code"><span><?= $product['code'] ?></span></div>
            <div class="products__info">
                <div class="products__name"><?= $product['name'] ?></div>
            </div>
            <div class="products__content">
                <div class="products__price">
                    <span>Vaša cena:</span>
                    <?php if ($product['action']) { ?>
                    <div class="products__price--old <?= $product['action'] ?>"><?= $product['price_old'] ?></div>
                    <?php } ?>
                    <div class="products__price--actual <?= $product['action'] ?>"><?= $product['price_actual'] ?></div>
                    <div class="products__price__dph <?= $product['action'] ?>">bez DPH<strong>(vaša cena)</strong></div>
                </div>
                <div class="products__img">
                    <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                </div>
            </div>
        </a>
        <div class="products__footer">
            <div class="products__quantity">
                <input name="value" value="1" class="ui-spinner">
            </div>
            <a href="buy" class="products__buy" title="Vložiť do košíka">
                <i class="ico ico--minicart left"></i>
                <span>
                    <span class="hidden-xs hidden-sm hidden-md">vložiť </span>do košíka
                </span>
            </a>
        </div>
    </div>
</div>