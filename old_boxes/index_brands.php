<div class="index__brands col-xs-100">
    <h2>Vyberte si značku, ktorú preferujete</h2>
    <div class="index__brands__container">
        <div class="index__brands__max">
            <div class="index__brands__wrapper">
                <?php foreach ($brands as $id => $item) { ?>
                <div class="index__brands__box col-xs-50 col-sm-25 col-md-16">
                    <a href="<?= $item['link'] ?>" class="index__brands__title" title="<?= $item['name'] ?>">
                        <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <a href="#" class="index__brands__all" title="Rozbaliť všetky značky">
            <span class="expand">Rozbaliť všetky</span><span class="compress">Zbaliť</span> značky
            <span class="index__brands__all__icon">
                <i class="ico arr--yellow--down--bigger expand"></i>
                <i class="ico arr--yellow--up--bigger compress"></i>
            </span>
        </a>
    </div>
</div>