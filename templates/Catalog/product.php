<section class="product">
    <!-- Beg - product info -->
    <div class="container">
        <div class="row">
            <?= $this->element('product_info'); ?>
        </div>
    </div>
</section>

<section class="product__accessories">
    <div class="container o-hidden">
        <div class="row">
            <?= $this->element('product_alternate'); ?>

            <?= $this->element('product_accessories'); ?>
        </div>
    </div>
</section>

<section class="product__info">
    <div class="container">
        <div class="row">
            <?= $this->element('product_desc'); ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <?= $this->element('advantages'); ?>
        </div>
    </div>
    <!-- End - product info -->
</section>