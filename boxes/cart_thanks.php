<div class="msg msg--success msg--bigger t_center">
    Ďakujeme, že ste u nás nakúpili.
</div>

<div class="cart__data">
    <h2 class="cart__data__title cart__data__title--smaller cart__data__title--margin t_center"><?= __('Vaša objednávka číslo ') . ' 4 ' . __('bola úspešne spracovaná')  ?></h2>
    <div class="cart__data__box cart__data__box--transparent">
        <p><?= __('Na Vašu e-mailovú adresu sme zaslali potvrdzovací e-mail, ktorého súčasťou je aj proforma faktúra na objednané položky vo formáte *.pdf') ?></p>
        <p><?= __('Históriu vašich objednávok si môžete pozrieť cez') ?> <a href="my-account.php" title="<?= __('Váš účet') ?>" class="link link--text"><?= __('váš účet') ?>.</a></p>
        <p><?= __('V prípade, že ste potvrdzovací e-mail neobdržali, kontaktujte nás prosím e-mailom na') ?> <a href="mailto:info@hladamfarby.sk" title="info@hladamfarby.sk" class="link link--text">info@hladamfarby.sk</a></p>
        <p><?= __('Ďakujeme za nákup a veríme, že nám zachováte vašu priazeň aj naďalej.') ?></p>
        <p><?= __('S pozdravom') ?> <strong>Slovak Trend</strong></p>
    </div>

    <div class="msg msg--success t_center msg--validate" id="success-survey">
        <?= __('Ďakujeme za váš názor. Zlepšujeme sa pre vás.') ?>
    </div>

    <div class="row survey">
        <div class="col-xs-100 col-sm-50">
            <div class="cart__data__box">
                <h3 class="cart__data__subtitle"><?= __('Ako ste sa o nás dozvedeli?')  ?></h3>
                <div class="msg msg--danger msg--smaller t_center msg--validate" id="error-survey">
                    <?= __('Zabudli ste zvoliť jednu z možností.') ?>
                </div>
                <div class="form-group with_label is_radio">
                    <input type="radio" class="form-control" id="survey-from-1" name="survey-from">
                    <label for="survey-from-1"><?= __('Od známeho') ?></label>
                </div>
                <div class="form-group with_label is_radio">
                    <input type="radio" class="form-control" id="survey-from-2" name="survey-from">
                    <label for="survey-from-2"><?= __('Našiel som na Google') ?></label>
                </div>
                <div class="form-group with_label is_radio">
                    <input type="radio" class="form-control" id="survey-from-3" name="survey-from">
                    <label for="survey-from-3"><?= __('Z banneru alebo odkazu na inom sídle') ?></label>
                </div>
                <div class="form-group with_label is_radio">
                    <input type="radio" class="form-control" id="survey-from-4" name="survey-from">
                    <label for="survey-from-4"><?= __('Videl som reklamu v časopise alebo novinách') ?></label>
                </div>
            </div>
        </div>
        <div class="col-xs-100 col-sm-50">
            <div class="cart__data__box">
                <h3 class="cart__data__subtitle"><?= __('Ako sa vám u nás nakupovalo?')  ?></h3>
                <div class="form-group">
                    <label for="survey-how"><?= __('Poznámka') ?>:</label>
                    <textarea name="survey-how" class="form-control" id="survey-how" placeholder="<?= __('Sem napíšte svoje postrehy..') ?> ..."></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="cart__data__box col-xs-100 survey">
        <h3 class="cart__data__subtitle"><?= __('Aký je váš celkový pocit z nákupu?')  ?></h3>
        <div class="cart__slider">
            <div class="cart__slider__text col-xs-100 t_center"><span id="cart__slider__value">50</span> %</div>
            <div>
                <div class="col-xs-15 col-sm-25"><button class="btn cart__slider__minus right">-</button></div>
                <div class="col-xs-70 col-sm-50" id="cart__slider__range" class=""></div>
                <div class="col-xs-15 col-sm-25"><button class="btn cart__slider__plus left">+</button></div>
            </div>
        </div>
        <input type="hidden" name="survey-overall" id="survey-overall">
    </div>
</div>

<script>
$(function(){
    // slider
    $("#cart__slider__range").slider({
        min: 0,
        max: 100,
        value: 50,
        step: 10,
        slide: function(event, ui) {
            $("#survey-overall").val(ui.value);
            $("#cart__slider__value").text(ui.value);
        }
    });

    $('body').delegate('.cart__slider__plus', 'click', function(event) {
        var val = $('#cart__slider__range').slider('value'),
            new_val = val;

        event.preventDefault();
        event.stopPropagation();

        if (val != 100) { new_val = val + 10; }
        $('#cart__slider__value').text(new_val);
        $('#cart__slider__range').slider('value', new_val);
    });

    $('body').delegate('.cart__slider__minus', 'click', function(event) {
        var val = $('#cart__slider__range').slider('value'),
            new_val = val;

        event.preventDefault();
        event.stopPropagation();

        if (val != 0) { new_val = val - 10; }
        $('#cart__slider__value').text(new_val);
        $('#cart__slider__range').slider('value', new_val);
    });

    // validate
    $('.msg--validate').hide();

    $('form[name="form-cart-success"]').bind('submit', function(event) {
        var result = true;

        if (!$('[name="survey-from"]').is(':checked')) {
            $('#error-survey').fadeIn(500);
            result = false;
        } else {
            if ($('#error-survey').is(':visible')) { $('#error-survey').fadeOut(500); }
        }

        if (!result) { slideTo($('.msg--danger')); } else {
            $('.survey').fadeOut(500, function() {
                $('#success-survey').fadeIn(500);
            });
        }

        return false;
    });
});
</script>