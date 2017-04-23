<h1 class="brand__title"><?= $manufacturer['name'] ?></h1>
<div class="brand__info">
    <div class="brand__img">
        <img src="<?= $manufacturer['image'] ?>" alt="<?= $manufacturer['name'] ?>">
    </div>
    <div class="brand__desc"><?= $manufacturer['description'] ?></div>
</div>

<div class="brand__categories">
    <h2 class="dashboard__title"><span><?= __('Zaradené v kategóriách') ?>:</span></h2>
    <ul class="list list--inline list--arrow">
        <?php
        foreach ($categories as $item) :
        ?>
        <li class="col-xs-46 col-sm-29 col-lg-21">
            <i class="ico arr--bread--black--right left"></i>
            <a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>"><?= $item['name'] ?></a>
        </li>
        <?php
        endforeach;
        ?>
    </ul>
</div>

<div class="brand__filter row">
    <?= $this->element('filter'); ?>
</div>

<div class="brand__listing row">
    <?= $this->element('listing_products'); ?>
</div>