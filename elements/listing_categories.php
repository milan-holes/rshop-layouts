<div class="listing__cat">
    <?php
    foreach ($categories as $id => $item) :
    ?>
    <a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>" class="listing__cat__box col-xs-48 col-sm-23 col-md-18">
        <div class="listing__cat__wrapper">
            <div class="listing__cat__img">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
            </div>
            <div class="listing__cat__name">
                <table>
                    <tr>
                        <td><?= $item['name'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <i class="ico arr--yellow--right"></i>
    </a>
    <?php
    endforeach;
    ?>
</div>