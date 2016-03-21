<div class="cart__recap__box">
    <h3>Rekapitulácia</h3>
    <div class="cart__recap__table">
        <div class="cart__recap__row">
            <div class="cart__recap__left">Počet produktov v košíku:</div>
            <div class="cart__recap__right">12ks</div>
        </div>
        <div class="cart__recap__row">
            <div class="cart__recap__left">Hmotnosť objednávky:</div>
            <div class="cart__recap__right">183 kg</div>
        </div>
        <div class="cart__recap__row">
            <div class="cart__recap__left">Štandardná doprava:</div>
            <div class="cart__recap__right">zdarma</div>
        </div>
    </div>
    <div class="cart__recap__total">
        <div class="cart__recap__total__text">Suma celkom:</div>
        <div class="cart__recap__total__price">17111,40 € <span>bez DPH</span></div>
    </div>
    <div class="cart__recap__btn">
        <?php if (in_array(basename($_SERVER['PHP_SELF']), array('cart-1.php', 'cart-2.php'))) { ?>
        <button type="submit" title="Objednať tovar" class="btn btn--cart">Objednať tovar<i class="ico arr--btn--white--right"></i></button>
        <?php } ?>
    </div>
</div>

<script>
$(function(){
    $('.cart__recap__box').affix({
        offset: {
            top: function () {
                return (this.top = $('.header').outerHeight(true) + $('.steps').outerHeight(true))
            },
            bottom: function () {
                return (this.bottom = $('.footer').outerHeight(true) + $('.cart__links').outerHeight(true))
            }
        }
    });
});
</script>