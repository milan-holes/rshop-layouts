<form name="header_search" method="post">
    <div class="form-group nomargin inside">
        <label for="search_input">Napíšte číslo produktu alebo názov</label>
        <i class="ico ico--search"></i>
        <input type="text" name="search" class="form-control" id="search_input" placeholder="Napíšte číslo produktu alebo názov">
        <button type="submit" class="btn">Hľadať</button>
    </div>
</form>

<script>
$(function() {
    var products = [
            {
                type: 'autocomplete--noresults',
                label: 'Žiadne výsledky - aaa',
            },
            {
                type: 'autocomplete--heading',
                label: 'Nájdené kategórie - aaa',
            },
            {
                type: 'autocomplete--categories',
                label: 'Záhrada - aaa',
                link: 'cat/zahrada',
            },
            {
                type: 'autocomplete--categories',
                label: 'Stavba - aaa',
                link: 'cat/stavba',
            },
            {
                type: 'autocomplete--categories',
                label: 'Elektronáradie - aaa',
                link: 'cat/elektronaradie',
            },
            {
                type: 'autocomplete--heading',
                label: 'Nájdené produkty - aaa',
            },
            {
                type: 'autocomplete--products',
                label: 'Slimák obyčajný - <span>aaa</span>',
                link: '-p125',
                img: 'webroot/img/tmp/product-01.jpg'
            },
            {
                type: 'autocomplete--products',
                label: 'Reďkovka červená - aaa',
                link: '-p126',
                img: 'webroot/img/tmp/product-01.jpg'
            },
            {
                type: 'autocomplete--products',
                label: 'Kaleidoskop tmavohnedý s modrými bodkami - aaa',
                link: '-p127',
                img: 'webroot/img/tmp/product-01.jpg'
            },
            {
                type: 'autocomplete--products',
                label: 'Poťah na lopatu zúbkovaný 3,5mm - aaa',
                link: '-p128',
                img: 'webroot/img/tmp/product-01.jpg'
            },
            {
                type: 'autocomplete--all',
                label: 'Zobraziť všetky výsledky - aaa',
                link: '-all',
            }
        ];

    $('#search_input').autocomplete({
      minLength: 0,
      source: products,
      focus: function(event, ui) {
        $('#search_input').val(ui.item.label);

        return false;
      },
      select: function(event, ui) {
        $('#search_input').val(ui.item.label);

        return false;
      }
    })
    .autocomplete('instance')._renderItem = function(ul, item) {

        ul.addClass('autocomplete');

        switch (item.type) {
            case 'autocomplete--noresults':
                return $('<li class="' + item.type + '"></li>')
                    .append('<h3>' + item.label + '</h3>')
                    .appendTo(ul);
            break;
            case 'autocomplete--heading':
                return $('<li class="' + item.type + '"></li>')
                    .append('<h3>' + item.label + '</h3>')
                    .appendTo(ul);
            break;
            case 'autocomplete--categories':
                return $('<li class="' + item.type + '"></li>')
                    .append('<a href="' + item.link + '">' + item.label + '</a>')
                    .appendTo(ul);
            break;
            case 'autocomplete--products':
                return $('<li class="' + item.type + '"></li>')
                    .append('<a href="' + item.link + '"><table><tr><td class="autocomplete__img"><img src="' + item.img + '" alt="' + item.label + '"></td><td class="autocomplete__name">' + item.label + '</td></tr></table></a>')
                    .appendTo(ul);
            break;
            case 'autocomplete--all':
                return $('<li class="' + item.type + '"></li>')
                    .append('<a href="' + item.link + '">' + item.label + '</a>')
                    .appendTo(ul);
            break;
        }
    };
});
</script>