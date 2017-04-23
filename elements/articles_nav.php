<ul class="account__nav__list">
    <?php
    foreach ($articles as $id => $art) :
    ?>
    <li class="account__nav__list__item">
        <a href="<?= $art['link'] ?>" title="<?= $art['name'] ?>">
            <i class="ico arr--bread--black--right left"></i><?= $art['name'] ?>
        </a>
    </li>
    <?php
    endforeach;
    ?>
</ul>