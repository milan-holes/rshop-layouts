<div class="brands__list row">
    <?php
    foreach ($manufacturers as $id => $brand) :
    ?>
    <div class="brands__list__item col-xs-25 col-lg-20">
        <a href="<?= $brand['link'] ?>" title="<?= $brand['name'] ?>">
            <div class="brands__list__img">
                <img src="<?= $brand['image'] ?>" alt="<?= $brand['name'] ?>">
            </div>
            <h3 class="brands__list__title"><?= $brand['name'] ?></h3>
        </a>
    </div>
    <?php
    endforeach;
    ?>
</div>