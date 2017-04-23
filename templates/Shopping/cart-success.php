<section class="content">
    <div class="container">
        <!-- Beg - shopping cart -->
        <form action="cart-success.htmk" name="form-cart-success" method="post">
            <div class="row">
                <div class="cart__content col-xs-100">
                    <?= $this->element('cart_thanks'); ?>
                </div>
            </div>
            <div class="row">
                <div class="cart__buttons col-xs-100">
                    <button type="submit" title="<?= __('Odoslať názor') ?>" class="btn btn--submit btn--bigger right survey"><?= __('Odoslať názor') ?><i class="ico arr--btn--yellowBtn--right"></i></button>
                    <a href="<?= $this->Url->build('index') ?>" title="<?= __('Návrat na úvodnú stránku') ?>" class="btn btn--back left"><i class="ico arr--back"></i><?= __('Návrat na úvod') ?></a>
                </div>
            </div>
        </form>
        <!-- End - shopping cart -->
    </div>
</section>