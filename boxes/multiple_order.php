<div class="header__order col-sm-29 col-md-22 col-lg-19">
    <a href="#" title="Hromadná objednávka" class="hidden-xs hidden-sm">
        <i class="ico left ico--multipleorder"></i>
        <i class="ico left ico--multipleorder--yellow"></i>
        <span class="hidden-cxs">Hromadná objednávka</span>
    </a>
    <a href="#" title="Hromadná objednávka" class="header__order__trigger visible-xs visible-sm">
        <i class="ico left ico--multipleorder hidden-cxs"></i>
        <i class="ico left ico--multipleorder--yellow hidden-cxs"></i>
        <span>Hromadná objednávka</span>
    </a>
    <div class="header__order__wrapper hidden-xs hidden-sm">
        <form action="multiple_order" method="post">
            <table>
                <thead>
                    <tr>
                        <th class="header__order__number">Katalógové číslo</th>
                        <th class="header__order__amount">Množstvo</th>
                    </tr>
                </thead>
            </table>
            <div class="header__order__container">
                <table>
                    <tbody>
                        <tr>
                            <td class="header__order__number">
                                <div class="form-group">
                                    <label for="ord_cat-1">Katalógové číslo</label>
                                    <input type="text" class="form-control" id="ord_cat-1" name="ord_cat-1">
                                </div>
                            </td>
                            <td class="header__order__amount">
                                <div class="form-group">
                                    <label for="ord_quant-1">Množstvo</label>
                                    <input type="text" class="form-control" id="ord_quant-1" name="ord_quant-1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header__order__number">
                                <div class="form-group">
                                    <label for="ord_cat-2">Katalógové číslo</label>
                                    <input type="text" class="form-control" id="ord_cat-2" name="ord_cat-2">
                                </div>
                            </td>
                            <td class="header__order__amount">
                                <div class="form-group">
                                    <label for="ord_quant-2">Množstvo</label>
                                    <input type="text" class="form-control" id="ord_quant-2" name="ord_quant-2">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header__order__number">
                                <div class="form-group">
                                    <label for="ord_cat-3">Katalógové číslo</label>
                                    <input type="text" class="form-control" id="ord_cat-3" name="ord_cat-3">
                                </div>
                            </td>
                            <td class="header__order__amount">
                                <div class="form-group">
                                    <label for="ord_quant-3">Množstvo</label>
                                    <input type="text" class="form-control" id="ord_quant-3" name="ord_quant-3">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="header__order__number">
                                <div class="form-group">
                                    <label for="ord_cat-4">Katalógové číslo</label>
                                    <input type="text" class="form-control" id="ord_cat-4" name="ord_cat-4">
                                </div>
                            </td>
                            <td class="header__order__amount">
                                <div class="form-group">
                                    <label for="ord_quant-4">Množstvo</label>
                                    <input type="text" class="form-control" id="ord_quant-4" name="ord_quant-4">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <span class="header__order__plus">+ </span><a href="#" title="pridať ďalšie 3 polia" class="header__order__add">pridať ďalšie 3 polia</a>
            <button class="header__order__buy btn btn--cart"><i class="ico left ico--minicart"></i>Vložiť produkty do košíka</button>
        </form>
    </div>
</div>