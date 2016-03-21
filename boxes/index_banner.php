<div class="index__banner bx bx--index col-xs-100 col-md-68">
    <ul>
        <?php foreach ($index_banner as $id => $item) { ?>
        <li><a href="<?= $item['link'] ?>" title="<?= $item['name'] ?>"><img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>"></a></li>
        <?php } ?>
    </ul>
</div>