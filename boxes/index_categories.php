<div class="index__cat col-xs-100">
    <h2>Široká ponuka produktov a značiek</h2>
    <?php foreach ($navig as $id => $item) { ?>
    <div class="index__cat__box col-xs-100 col-sm-48 col-md-47">
        <a href="<?= $item['link'] ?>" class="index__cat__title" title="<?= $item['name'] ?>"><?= $item['name'] ?></a>
        <ul class="list list--circle">
            <?php foreach ($item['sub'] as $sid => $sub) { ?>
            <li><i class="ico arr--circle"></i><a href="<?= $sub['link'] ?>" title="<?= $sub['name'] ?>"><?= $sub['name'] ?></a></li>
            <?php } ?>
        </ul>
        <a href="<?= $item['link'] ?>" class="index__cat__all btn btn--brand btn--brand--arrow" title="<?= $item['name'] ?>"><span>Všetky podkategórie</span><i class="ico arr--yellow--right"></i></a>
        <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>" class="index__cat__img">
    </div>
    <?php } ?>
</div>