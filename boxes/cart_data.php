<div class="cart__data">
    <h2 class="cart__data__title"><?= __('Fakturačné údaje') ?></h2>
    <div class="cart__data__box">
        <div class="form-group col-xs-44">
            <label for="data-name"><?= __('Názov') ?>:</label>
            <input type="text" readonly class="form-control" id="data-name" name="data-name" placeholder="<?= __('Názov') ?>:">
        </div>
        <div class="form-group col-xs-28">
            <label for="data-ico"><?= __('IČO') ?>:</label>
            <input type="text" readonly class="form-control" id="data-ico" name="data-ico" placeholder="<?= __('IČO') ?>:">
        </div>
        <div class="form-group col-xs-28">
            <label for="data-icdph"><?= __('IČ DPH') ?>:</label>
            <input type="text" readonly class="form-control" id="data-icdph" name="data-icdph" placeholder="<?= __('IČ DPH') ?>:">
        </div>
        <div class="form-group col-xs-44">
            <label for="data-street"><?= __('Ulica') ?>:</label>
            <input type="text" readonly class="form-control" id="data-street" name="data-street" placeholder="<?= __('Ulica') ?>:">
        </div>
        <div class="form-group col-xs-33">
            <label for="data-town"><?= __('Mesto') ?>:</label>
            <input type="text" readonly class="form-control" id="data-town" name="data-town" placeholder="<?= __('Mesto') ?>:">
        </div>
        <div class="form-group col-xs-23">
            <label for="data-psc"><?= __('PSČ') ?>:</label>
            <input type="text" readonly class="form-control" id="data-psc" name="data-psc" placeholder="<?= __('PSČ') ?>:">
        </div>
    </div>

    <h2 class="cart__data__title"><?= __('Kontaktné údaje') ?></h2>
    <div class="cart__data__box">
        <div class="form-group col-xs-50">
            <label for="data-name2"><?= __('Meno') ?>:</label>
            <input type="text" readonly class="form-control" id="data-name2" name="data-name2" placeholder="<?= __('Meno') ?>:">
        </div>
        <div class="breaker"></div>
        <div class="form-group col-xs-50">
            <label for="data-email"><?= __('Kontaktný email') ?>:</label>
            <input type="text" readonly class="form-control" id="data-email" name="data-email" placeholder="<?= __('Kontaktný email') ?>:">
        </div>
        <div class="form-group col-xs-50">
            <label for="data-phone"><?= __('Telefón') ?>:</label>
            <input type="text" readonly class="form-control" id="data-phone" name="data-phone" placeholder="<?= __('Telefón') ?>:">
        </div>
    </div>

    <h2 class="cart__data__title"><?= __('Poznámka') ?></h2>
    <div class="cart__data__box cart__data__box--transparent">
        <div class="form-group">
            <label for="data-note"><?= __('Poznámka') ?>:</label>
            <textarea name="data-note" class="form-control" id="data-note" placeholder="<?= __('Sem napíšte text') ?> ..."></textarea>
        </div>
    </div>

    <h2 class="cart__data__title"><?= __('Dodacia adresa') ?></h2>
    <div class="cart__data__box cart__data__box--yellow">
        <div class="cart__data__text">Vyberte si adresu, na ktorú chcete tovar dodať</div>
        <select name="filter-sort" class="selectpicker col-xs-100 col-sm-50">
            <option value="1">Trenčianska 53, 851 02, Bratislava</option>
        </select>
    </div>
</div>