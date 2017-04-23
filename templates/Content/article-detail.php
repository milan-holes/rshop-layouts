<section class="content">
    <div class="container">
        <!-- Beg - articles -->
        <div class="row relative">
            <aside class="articles__aside col-xs-100 col-md-30 col-lg-25">
                <nav class="account__nav">
                    <button class="btn account__nav__trigger visible-xs visible-sm">
                        <div class="account__nav__title visible-xs visible-sm">
                            <?= $article['name'] ?>
                            <i class="ico right ico--menu--black"></i>
                        </div>
                    </button>
                    <?= $this->element('articles_nav'); ?>
                </nav>
            </aside>

            <div class="articles__content col-xs-100 col-md-70 col-lg-75">
                <?= $this->element('article_detail'); ?>
            </div>
        </div>
        <!-- End - articles -->
    </div>
</section>