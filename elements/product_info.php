<div class="visible-xs visible-sm col-xs-100">
    <a href="<?= $product['manufacturer_link'] ?>" title="<?= $product['manufacturer_name'] ?>" class="product__brand">
        <img src="<?= $product['manufacturer_image'] ?>" alt="<?= $product['manufacturer_name'] ?>">
    </a>
    <h1 class="product__title"><?= $product['name'] ?></h1>
</div>
<div class="product__left col-xs-50 col-sm-50 col-md-35">
    <div class="product__ribbon__wrapper">
        <?php
        if ($product['is_action']) :
        ?>
        <div class="products__ribbon products__ribbon--action">Akcia</div>
        <?php
        endif;
        ?>

        <?php
        if ($product['is_new']) :
        ?>
        <div class="products__ribbon products__ribbon--new">Novinka</div>
        <?php
        endif;
        ?>
    </div>
    <div class="product__img">
        <img src="<?= $product['image'] ?>" data-magnify-src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <a href="0" title="Zväčšiť obrázok" class="ico__hover">
            <i class="ico ico--enlarge orig"></i>
            <i class="ico ico--enlarge--yellow hover"></i>
        </a>
    </div>
</div>
<div class="product__right right col-xs-50 col-md-30">
    <?php
    if ($product['is_action']) :
    ?>
    <div class="product__action">
        <div class="product__action--actual col-xs-50">
            <span class="product__action__title">Akciová cena:</span>
            <span class="product__action__price"><?= $product['price'] ?></span> s DPH
        </div>
        <div class="product__action--old col-xs-50">
            <span class="product__action__title">Bežná cena:</span>
            <span class="product__action__price"><?= $product['price_old'] ?></span> s DPH
        </div>
    </div>
    <?php
    endif;
    ?>

    <div class="product__box">
        <div class="product__price">
            <span class="product__price--number"><?= $product['price'] ?></span>
            <span class="product__price--dph">s DPH</span>
            <span class="product__price--text">(vaša cena)</span>
        </div>
        <div class="product__buy">
            <div class="products__quantity">
                <input name="product_buy" value="1" class="ui-spinner">
            </div>
            <a href="buy" class="products__buy" title="Vložiť do košíka">
                <i class="ico ico--minicart left"></i>
                <span>
                    <span class="hidden-649 hidden-md">vložiť </span>do košíka
                </span>
            </a>
        </div>
        <div class="product__availability">
            <i class="ico ico--transport"></i>K nákupu máte <span>dopravu</span> zdarma
        </div>
    </div>
    <div class="product__table">
        <div class="product__table__title">Kategórie zaradenia produktu:</div>
        <ul class="list list--circle list--inline">
            <li><i class="ico arr--circle--footer"></i><a href="#" title="Elektronáradie">Elektronáradie</a></li>
            <li><i class="ico arr--circle--footer"></i><a href="#" title="Ostatné">Ostatné</a></li>
            <li><i class="ico arr--circle--footer"></i><a href="#" title="Záhrada">Záhrada</a></li>
        </ul>
    </div>
</div>
<div class="product__middle col-xs-100 col-md-35">
    <div class="hidden-xs hidden-sm">
        <a href="<?= $product['manufacturer_link'] ?>" title="<?= $product['manufacturer_name'] ?>" class="product__brand">
            <img src="<?= $product['manufacturer_image'] ?>" alt="<?= $product['manufacturer_name'] ?>">
        </a>
        <h1 class="product__title"><?= $product['name'] ?></h1>
    </div>
    <div class="product__parameters product__parameters--left">
        <div class="product__parameters__row">
            <div class="product__parameters__name">Dostupnosť:</div>
            <div class="product__parameters__content product__parameters__content--avail"><?= $product['availability'] ?></div>
        </div>
        <div class="product__parameters__row">
            <div class="product__parameters__name">Doprava:</div>
            <div class="product__parameters__content">
                <ul class="list list--square">
                    <li>Štandardná doprava<i class="ico ico--info t-tip" title="Tooltip text"></i></li>
                    <li>Expresná doprava<i class="ico ico--info t-tip" title="Tooltip text"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product__parameters">
        <div class="product__parameters__row">
            <div class="product__parameters__name">Kat. číslo:</div>
            <div class="product__parameters__content"><?= $product['model'] ?></div>
        </div>
    </div>
    <div class="product__desc">
        <div class="product__desc__title">Popis produktu</div>
        <div class="product__desc__text">
            <?= strlen($product['description']) > 120 ? substr($product['description'], 0, 120) . ' ... <a href="#" title="Zistiť viac" class="product__desc__link">Zistiť viac</a>' : $product['description'] ?>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('.fancy').fancybox({
            'scrolling': 'no',
            'overlayShow': true,
            'nextEffect' : 'fade',
            'prevEffect': 'fade',
            'nextSpeed': '500',
            'prevSpeed': '500'
        });

        $('.product__gallery__item--change').bind('mouseenter', function(event) {
            var $big = $('.product__img img'),
                src = $(this).attr('href');

            $big.attr('src', src);
            $big.attr('data-magnify-src', src);
            $('.product__img a').attr('href', $(this).index());

            $('.product__img img').magnify();
        });

        $('.product__gallery__item--count').bind('click', function(event) {
            event.preventDefault();

            $('.product__gallery__item').eq(3).click();
        });

        $('.product__img a').bind('click', function(event) {
            event.preventDefault();

            $('.product__gallery__item').eq($(this).attr('href')).click();
        });

        $('.product__img img').magnify();
    });
</script>