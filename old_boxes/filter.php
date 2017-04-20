<div class="filter col-xs-100">
    <form action="filter" method="post" class="filter__form">
        <div class="filter__box filter__box--sort col-xs-35 col-sm-25 col-md-25 col-lg-16">
            <div class="filter__type">Zoradenie:</div>
            <select name="filter-sort" class="selectpicker sp--transparent">
                <option value="1">Od najlacnejších</option>
                <option value="2">Od najdrahších</option>
                <option value="3">Odporúčané</option>
                <option value="4">Najpredávanejšie</option>
                <option value="5">Podľa názvu A-Z</option>
                <option value="6">Podľa názvu Z-A</option>
            </select>
        </div>
        <div class="filter__box filter__box--price col-xs-65 col-sm-75 col-md-75 col-lg-33">
            <div class="filter__type">Cena od - do:</div>
            <div class="form-group">
                <label for="filter-price-from">Cena od</label>
                <input type="text" class="form-control" id="filter-price-from" name="filter-price-from">
            </div>
            <div id="slider-range"></div>
            <div class="form-group">
                <label for="filter-price-to">Cena do</label>
                <input type="text" class="form-control" id="filter-price-to" name="filter-price-to">
            </div>
        </div>
        <div class="filter__box filter__box--brands col-xs-35 col-sm-25 col-md-25 col-lg-17">
            <div class="filter__type">Značky:</div>
            <select name="filter-brands" class="selectpicker sp--transparent">
                <option value="0">Vyberte značky</option>
                <option value="1">Stanley</option>
                <option value="2">Skil</option>
                <option value="3">Narex</option>
            </select>
        </div>
        <div class="filter__box filter__box--availability col-xs-35 col-sm-50 col-md-56 col-lg-18">
            <div class="filter__type filter__type--avail">Dostupnosť:</div>
            <div class="form-group with_label is_checkbox">
                <input type="checkbox" class="form-control" id="filter-instock" name="filter-instock">
                <label for="filter-instock">Len dostupné skladom</label>
            </div>
        </div>
        <div class="filter__box filter__box--view col-xs-30 col-sm-25 col-md-19 col-lg-16">
            <div class="filter__type">Zobrazenie:</div>
            <label title="Riadkové zobrazenie" id="row" class="filter__view--row ico__hover">
                <i class="ico ico--view--row orig"></i>
                <i class="ico ico--view--row--yellow hover"></i>
            </label>
            <label title="Kódové zobrazenie" id="code" class="filter__view--code ico__hover">
                <i class="ico ico--view--code orig"></i>
                <i class="ico ico--view--code--yellow hover"></i>
            </label>
            <label title="Blokové zobrazenie" id="block" class="filter__view--block ico__hover active">
                <i class="ico ico--view--block orig"></i>
                <i class="ico ico--view--block--yellow hover"></i>
            </label>
        </div>
        <div class="breaker"></div>
    </form>
</div>

<script>
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      step: 10,
      min: 0,
      max: 500,
      values: [ 80, 300 ],
      slide: function( event, ui ) {
        $( "#filter-price-from" ).val( $( "#slider-range" ).slider( "values", 0 ) + ' €');
        $( "#filter-price-to" ).val( $( "#slider-range" ).slider( "values", 1 ) + ' €');
      }
    });
    $( "#filter-price-from" ).val( $( "#slider-range" ).slider( "values", 0 ) + ' €');
    $( "#filter-price-to" ).val( $( "#slider-range" ).slider( "values", 1 ) + ' €');
  });
  </script>