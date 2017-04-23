<section class="content">
    <div class="container">
        <!-- Beg - cart 2 -->
        <form action="cart-3.html" name="form-cart-2" method="post">
            <div class="row">
                <div class="steps steps--two col-xs-100">
                    <?= $this->element('cart_steps'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                    <?= $this->element('cart_choice'); ?>
                </div>
                <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                    <?= $this->element('cart_recap'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__buttons col-xs-100">
                    <a href="cart-1.html" title="Obsah košíka" class="btn btn--back">
                        <i class="ico arr--back"></i>Obsah košíka
                    </a>
                </div>
            </div>
        </form>
        <!-- End - cart 2 -->
    </div>
</section>