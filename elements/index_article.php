<div class="index__article col-xs-100 col-md-32">
    <div class="index__article__news bx bx--article col-xs-100 col-sm-50 col-md-100">
        <div class="index__article__news__wrapper">
            <ul>
                <?php foreach ($article_news as $id => $art) { ?>
                <li>
                    <a href="<?= $art['link'] ?>" class="index__article__news__name" title="<?= $art['name'] ?>"><?= $art['name'] ?></a>
                    <div class="index__article__news__content">
                        <div class="index__article__news__img">
                            <a href="<?= $art['link'] ?>" title="<?= $art['name'] ?>">
                                <img src="<?= $art['img'] ?>" alt="<?= $art['name'] ?>">
                            </a>
                        </div>
                        <div class="index__article__news__text"><?= $art['perex'] ?></div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="index__article__news__all">
                <i class="ico arr--circle"></i><a href="#" title="Všetky novinky">Všetky novinky</a>
            </div>
        </div>
    </div>
    <div class="index__article__banner col-xs-100 col-sm-50 col-md-100">
        <div class="index__article__banner__img">
            <a href="<?= $art_banner['link'] ?>" title="<?= $art_banner['name'] ?>">
                <img src="<?= $art_banner['img'] ?>" alt="<?= $art_banner['name'] ?>">
            </a>
        </div>
        <div class="index__article__banner__content">
            <div class="index__article__banner__wrapper">
                <a href="<?= $art_banner['link'] ?>" title="<?= $art_banner['name'] ?>" class="index__article__banner__name">
                    <?= $art_banner['name'] ?>
                </a>
                <div class="index__article__banner__text"><?= $art_banner['perex'] ?></div>
                <div class="index__article__banner__all">
                    <i class="ico arr--circle"></i><a href="<?= $art_banner['link'] ?>" title="Prezrieť katalóg">Prezrieť katalóg</a>
                </div>
            </div>
        </div>
    </div>
</div>