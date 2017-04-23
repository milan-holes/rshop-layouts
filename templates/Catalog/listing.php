<section class="content">
    <div class="container">
        <h1><?= $category['name'] ?></h1>
        <!-- Beg - listing -->
        <div class="row">
            <?= $this->element('listing_categories'); ?>
        </div>

        <div class="row">
            <?= $this->element('filter'); ?>
        </div>

        <div class="row">
            <?= $this->element('listing_products'); ?>
            <?= $this->element('pager'); ?>
        </div>


        <div class="row">
            <?= $this->element('listing_desc'); ?>
        </div>
        <!-- End - listing -->
    </div>
</section>