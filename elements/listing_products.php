<div class="products products--block">
    <?php
    foreach ($products as $id => $item) :
    ?>
    <div class="products__item col-xs-50 col-sm-33 col-md-25">
        <a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>" class="products__link">
            <div class="products__ribbon__wrapper">
                <?php
                if ($item['is_action']) :
                ?>
                <div class="products__ribbon products__ribbon--action">Akcia</div>
                <?php
                endif;
                ?>

                <?php
                if ($item['is_new']) :
                ?>
                <div class="products__ribbon products__ribbon--new">Novinka</div>
                <?php
                endif;
                ?>
            </div>
            <div class="products__img products__img--row">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
            </div>
            <div class="products__code"><span><?= $item['model'] ?></span></div>
            <div class="products__info">
                <div class="products__name"><?= $item['name'] ?></div>
                <div class="products__desc"><?= $item['description'] ?></div>
                <div class="products__parameters">
                    <div class="products__parameters__item">
                        <strong>Kat. číslo:</strong>
                        <span><?= $item['model'] ?></span>
                    </div>
                </div>
            </div>
            <div class="products__content">
                <div class="products__price">
                    <span>Vaša cena:</span>
                    <?php
                    if ($item['is_action']) :
                    ?>
                    <div class="products__price--old action"><?= $item['price_old'] ?></div>
                    <?php
                    endif;
                    ?>

                    <div class="products__price--actual"><?= $item['price'] ?></div>
                    <div class="products__price__dph">s DPH<strong>(vaša cena)</strong></div>
                    <div class="products__price__your">(vaša cena)</div>
                </div>
                <div class="products__img">
                    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                </div>
            </div>
            <div class="products__availability"><?= $item['availability'] ?></div>
        </a>
        <div class="products__footer">
            <div class="products__quantity">
                <input name="value" value="1" class="ui-spinner">
            </div>
            <button type="submit" class="btn products__buy" title="Vložiť do košíka">
                <i class="ico ico--minicart left"></i>
                <span>
                    <span class="hidden-sm hidden-md">vložiť </span>do košíka
                </span>
            </button>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</div>