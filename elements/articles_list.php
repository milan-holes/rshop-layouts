<div class="articles__list row">
    <?php
    foreach ($articles as $id => $article) :
    ?>
    <div class="articles__list__item col-xs-50">
        <a href="<?= $article['link'] ?>" title="<?= $article['name'] ?>">
            <h3 class="articles__list__title"><?= $article['name'] ?></h3>
            <div class="articles__list__img">
                <img src="<?= $article['image'] ?>" alt="<?= $article['name'] ?>">
            </div>
            <div class="articles__list__info">
                <div class="articles__list__perex">
                    <?= $article['short_description'] ?>
                </div>
                <button class="btn btn--brand"><?= __('Čítať článok') ?></button>
            </div>
        </a>
    </div>
    <?php
    endforeach;
    ?>
</div>