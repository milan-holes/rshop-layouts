<aside class="aside aside--order">
    <div class="aside__header">
        <div class="aside__title">Hromadná objednávka</div>
        <a href="#" title="Zavrieť" class="aside__close">
            Zavrieť
            <i class="ico ico--aside--close--white right orig"></i>
            <i class="ico ico--aside--close--red right hover"></i>
        </a>
    </div>
    <div class="aside__content">
        <form action="mob_multiple_order" method="post">
            <table>
                <thead>
                    <tr>
                        <th class="aside--order__number">Katalógové číslo</th>
                        <th class="aside--order__amount">Množstvo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="aside--order__number">
                            <div class="form-group">
                                <label for="mob_ord_cat-1">Katalógové číslo</label>
                                <input type="text" class="form-control" id="mob_ord_cat-1" name="mob_ord_cat-1">
                            </div>
                        </td>
                        <td class="aside--order__amount">
                            <div class="form-group">
                                <label for="mob_ord_quant-1">Množstvo</label>
                                <input type="text" class="form-control" id="mob_ord_quant-1" name="mob_ord_quant-1">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="aside--order__number">
                            <div class="form-group">
                                <label for="mob_ord_cat-2">Katalógové číslo</label>
                                <input type="text" class="form-control" id="mob_ord_cat-2" name="mob_ord_cat-2">
                            </div>
                        </td>
                        <td class="aside--order__amount">
                            <div class="form-group">
                                <label for="mob_ord_quant-2">Množstvo</label>
                                <input type="text" class="form-control" id="mob_ord_quant-2" name="mob_ord_quant-2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="aside--order__number">
                            <div class="form-group">
                                <label for="mob_ord_cat-3">Katalógové číslo</label>
                                <input type="text" class="form-control" id="mob_ord_cat-3" name="mob_ord_cat-3">
                            </div>
                        </td>
                        <td class="aside--order__amount">
                            <div class="form-group">
                                <label for="mob_ord_quant-3">Množstvo</label>
                                <input type="text" class="form-control" id="mob_ord_quant-3" name="mob_ord_quant-3">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="aside--order__number">
                            <div class="form-group">
                                <label for="mob_ord_cat-4">Katalógové číslo</label>
                                <input type="text" class="form-control" id="mob_ord_cat-4" name="mob_ord_cat-4">
                            </div>
                        </td>
                        <td class="aside--order__amount">
                            <div class="form-group">
                                <label for="mob_ord_quant-4">Množstvo</label>
                                <input type="text" class="form-control" id="mob_ord_quant-4" name="mob_ord_quant-4">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <span class="header__order__plus">+ </span><a href="#" title="pridať ďalšie 3 polia" class="aside--order__add">pridať ďalšie 3 polia</a>
            <button class="aside--order__buy btn btn--cart"><i class="ico left ico--minicart"></i>Vložiť produkty do košíka</button>
        </form>
    </div>
    <div class="aside__footer">
        <a href="#" title="Zavrieť" class="aside__footer__close"></a>
    </div>
</aside>