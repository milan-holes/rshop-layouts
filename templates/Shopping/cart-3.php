<section class="content">
    <div class="container">
        <!-- Beg - cart 3 -->
        <form action="cart-4.html" name="form-cart-3" method="post">
            <div class="row">
                <div class="steps steps--three col-xs-100">
                    <?= $this->element('cart_steps'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                    <?= $this->element('cart_data'); ?>
                </div>
                <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                    <?= $this->element('cart_recap'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__buttons col-xs-100 col-md-70 col-lg-75">
                    <button type="submit" title="Pokračovať" class="btn btn--cart right">
                        Pokračovať<i class="ico arr--btn--white--right"></i>
                    </button>
                    <a href="cart-2.html" title="Naspäť" class="btn btn--back left">
                        <i class="ico arr--back"></i>Naspäť
                    </a>
                </div>
            </div>
        </form>
        <!-- End - cart 3 -->
    </div>
</section>