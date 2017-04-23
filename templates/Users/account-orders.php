<section class="content">
    <div class="container">
        <!-- Beg - account -->
        <div class="row">
            <?= $this->element('account_header'); ?>
        </div>

        <div class="row relative">
            <aside class="account__aside col-xs-100 col-md-30 col-lg-25 static">
                <nav class="account__nav">
                    <button class="btn account__nav__trigger visible-xs visible-sm">
                        <div class="account__nav__title visible-xs visible-sm">
                            <?= __('Objednávky') ?>
                            <i class="ico right ico--menu--black"></i>
                        </div>
                    </button>
                    <?= $this->element('account_nav'); ?>
                </nav>
                <?= $this->element('account_advisor'); ?>
            </aside>

            <div class="account__content col-xs-100 col-md-70 col-lg-75">
                <?= $this->element('account_orders'); ?>
            </div>
        </div>
        <!-- End - account -->
    </div>
</section>