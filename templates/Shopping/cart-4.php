<section class="content">
    <div class="container">
        <!-- Beg - cart 4 -->
        <form action="cart-success.html" name="form-cart-4" method="post">
            <div class="row">
                <div class="steps steps--four col-xs-100">
                    <?= $this->element('cart_steps'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                    <?= $this->element('cart_confirm'); ?>
                </div>
                <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                    <?= $this->element('cart_recap'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__buttons col-xs-100 col-md-70 col-lg-75">
                    <div class="right">
                        <button type="submit" title="Potvrdiť a objednať" class="btn btn--cart">Potvrdiť a objednať<i class="ico arr--btn--white--right"></i></button>
                        <span class="cart__buttons__confirm">Potvrdzujete objednávku s povinnosťou platby</span>
                    </div>
                    <a href="cart-3.html" title="Obsah košíka" class="btn btn--back">
                        <i class="ico arr--back"></i>Obsah košíka
                    </a>
                </div>
            </div>
        </form>
        <!-- End - cart 4 -->
    </div>
</section>