<section class="content">
    <div class="container">
        <!-- Beg - cart 1 -->
        <form action="cart-2.html" name="form-cart-1" method="post">
            <div class="row">
                <div class="steps steps--one col-xs-100">
                    <?= $this->element('cart_steps'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__content col-xs-100 col-md-70 col-lg-75">
                    <?= $this->element('cart_products'); ?>
                    <?= $this->element('cart_quick'); ?>
                </div>
                <div class="cart__recap col-xs-100 col-md-30 col-lg-25">
                    <?= $this->element('cart_recap'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__buttons col-xs-100">
                    <a href="<?= $this->Url->build('index') ?>" title="<?= __('Pokračovať v nákupe') ?>" class="btn btn--back">
                        <i class="ico arr--back"></i><?= __('Pokračovať v nákupe') ?>
                    </a>
                </div>
                <?= $this->element('cart_links'); ?>
            </div>
        </form>
        <!-- End - cart 1 -->
    </div>
</section>