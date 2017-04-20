<div class="accessories col-xs-50 col-sm-66 col-md-70">
    <h2 class="alternate__title">Odporúčané príslušenstvo k produktu</h2>
    <div class="alternate__slider">
        <?php for ($i=1; $i < 3; $i++) { ?>
        <div class="products__item col-xs-33">
            <a href="<?= $products[$i]['link'] ?>" title="<?= $products[$i]['name'] ?>" class="products__link">
                <div class="products__ribbon__wrapper">
                    <?php if ($products[$i]['action']) { ?>
                    <div class="products__ribbon products__ribbon--action">Akcia</div>
                    <?php } ?>
                    <?php if ($products[$i]['new']) { ?>
                    <div class="products__ribbon products__ribbon--new">Novinka</div>
                    <?php } ?>
                </div>
                <div class="products__code"><span><?= $products[$i]['code'] ?></span></div>
                <div class="products__info">
                    <div class="products__name"><?= $products[$i]['name'] ?></div>
                </div>
                <div class="products__content">
                    <div class="products__price">
                        <span>Vaša cena:</span>
                        <?php if ($products[$i]['action']) { ?>
                        <div class="products__price--old <?= $products[$i]['action'] ?>"><?= $products[$i]['price_old'] ?></div>
                        <?php } ?>
                        <div class="products__price--actual <?= $products[$i]['action'] ?>"><?= $products[$i]['price_actual'] ?></div>
                        <div class="products__price__dph <?= $products[$i]['action'] ?>">bez DPH<strong>(vaša cena)</strong></div>
                    </div>
                    <div class="products__img">
                        <img src="<?= $products[$i]['img'] ?>" alt="<?= $products[$i]['name'] ?>">
                    </div>
                </div>
                <div class="products__availability"><?= $products[$i]['availability'] ?></div>
            </a>
            <div class="products__footer">
                <div class="products__quantity">
                    <input name="value" value="1" class="ui-spinner">
                </div>
                <a href="buy" class="products__buy" title="Vložiť do košíka">
                    <i class="ico ico--minicart left"></i>
                    <span class="hidden-xs">
                        do košíka
                    </span>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script>
var $alt_slider;

function createAltSlider() {
    $alt_slider = $('.alternate__slider').bxSlider({
        slideMargin: 15,
        pager: false,
        breaks: [{screen:0, slides:1},{screen:751, slides:2}]
    });
}
function destroyAltSlider() {
    $alt_slider.destroySlider();
}
function reloadAltSlider() {
    $alt_slider.reloadSlider();
}
function checkResForAltSlider() {
    return ($('.var--cxs').is(':visible') || $('.var--md').is(':visible') || $('.var--lg').is(':visible'));
}

$(function(){
    if (!checkResForAltSlider()) { createAltSlider(); }

    $(window).on('resize', function(){
        if (checkResForAltSlider()) {
            if ($('.accessories .bx-wrapper').length > 0) {
                destroyAltSlider();
            }
        } else {
            if ($('.accessories .bx-wrapper').length < 1) {
                createAltSlider();
            } else {
                reloadAltSlider();
            }
        }
    });
});
</script>