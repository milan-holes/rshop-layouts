function addOverlay() {
    $('.overlay--black').fadeIn(300);
    $('body').addClass('body--overlay');
}
function removeOverlay() {
    $('.overlay--black').fadeOut(300);
    $('body').removeClass('body--overlay');
}
function slideTo($element) {
    $('html, body').animate({
        scrollTop: $element.offset().top
    }, 400);
}

$(function(){
    $('.t-tip').tooltip();

    /* Beg - Main navigation */
    var $menu = $('.header__nav__wrapper');

    $menu.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu,
        rowSelector: ".header__nav__item"
    });

    function activateSubmenu(row) {
        var $this = $(row);

        $('.header__nav__item.active').removeClass('active');
        $this.addClass('active');
    }

    function deactivateSubmenu(row) {
        var $this = $(row);

        $this.removeClass('active');
    }

    $('.header__menu').hover(function() {
        if ($('.header__menu__trigger').is(':hidden')) {
            $('.overlay--white').show();
        }
    }, function() {
        if ($('.header__menu__trigger').is(':hidden')) {
            $('.overlay--white').hide();
        }
    });
    /* End - Main navigation */

    /* Beg - Multiple order */
    $('.header__order').hover(function() {
        if ($('.header__order__trigger').is(':hidden')) {
            $('.overlay--white').show();
        }
    }, function() {
        if ($('.header__order__trigger').is(':hidden')) {
            $('.overlay--white').hide();
        }
    });

    $('.header__order__wrapper').delegate('.header__order__add', 'click', function(event) {
        for (var i = 0; i < 3; i++) {
            var $last =  $('.header__order__wrapper table tbody tr:last-child'),
                clone = $last.clone();

            $last.after(clone);

            $last = $('.header__order__wrapper table tbody tr:last-child');
            if (i == 2) {
                $('.header__order__container').animate({scrollTop: $('.header__order__container table').outerHeight()}, 200);
            }

            var ind = $last.index() + 1;

            $last.find('.header__order__number label').attr('for', 'ord_cat-' + ind);
            $last.find('.header__order__number input').val('').attr('id', 'ord_cat-' + ind).attr('name', 'ord_cat-' + ind);

            $last.find('.header__order__amount label').attr('for', 'ord_quant-' + ind);
            $last.find('.header__order__amount input').val('').attr('id', 'ord_quant-' + ind).attr('name', 'ord_quant-' + ind);
        };
    });

    $('.aside--order').delegate('.aside--order__add', 'click', function(event) {
        for (var i = 0; i < 3; i++) {
            var $last =  $('.aside--order table tbody tr:last-child'),
                clone = $last.clone();

            $last.after(clone);

            $last = $('.aside--order table tbody tr:last-child');

            var ind = $last.index() + 1;

            $last.find('.aside--order__number label').attr('for', 'mob_ord_cat-' + ind);
            $last.find('.aside--order__number input').val('').attr('id', 'mob_ord_cat-' + ind).attr('name', 'mob_ord_cat-' + ind);

            $last.find('.aside--order__amount label').attr('for', 'mob_ord_quant-' + ind);
            $last.find('.aside--order__amount input').val('').attr('id', 'mob_ord_quant-' + ind).attr('name', 'mob_ord_quant-' + ind);
        };
    });
    /* End - Multiple order */

    /* Beg - Aside cart, nav */
    // minicart
    $('.header__minicart > a').bind('click', function(event) {
        addOverlay();

        $('.aside--cart').toggleClass('active');
        $('.wrapper').toggleClass('sidelined');
    });

    // mobile nav
    $('.header__menu__trigger').bind('click', function(event) {
        event.preventDefault();

        addOverlay();

        $('.aside--nav').toggleClass('active');
        $('.wrapper').toggleClass('sidelined');
    });

    $('.aside--nav__item > a, .aside--subnav__back').bind('click', function(event) {
        event.preventDefault();

        $(this).parents('.aside__content').toggleClass('away');
        $(this).siblings('.aside--subnav').toggleClass('active');
        $(this).parents('.aside--subnav').toggleClass('active');
    });

    // mobile multiple order
    $('.header__order__trigger').bind('click', function(event) {
        event.preventDefault();

        addOverlay();

        $('.aside--order').toggleClass('active');
        $('.wrapper').toggleClass('sidelined');
    });

    $('.aside__close, .aside__footer__close, .overlay').bind('click', function(event) {
        removeOverlay();

        $('.aside.active').removeClass('active');
        $('.wrapper').removeClass('sidelined');
    });
    /* End - Aside cart, nav */

    /* Beg - Index banner slider */
    $('.bx--index > ul').bxSlider({
        slideMargin: 0,
        controls: false,
        autoReload: true
    });
    /* End - Index banner slider */

    /* Beg - Index article banner slider */
    $('.bx--article ul').bxSlider({
        slideMargin: 0,
        controls: false,
        autoReload: true
    });
    /* End - Index article banner slider */

    /* Beg - Contact slider */
    $('.bx--contact ul').bxSlider({
        slideMargin: 0,
        controls: false,
        autoReload: true
    });
    /* End - Contact slider */

    /* Beg - Modal advantages slider */
    $('#login').on('shown.bs.modal', function() {
        if ($('.bx--advantages .bx-wrapper').size() < 1) {
            $('.bx--advantages ul').bxSlider({
                slideMargin: 0,
                controls: false,
                autoReload: true,
                auto: true
            });
        }
    })
    /* End - Modal advantages slider */

    /* Beg - Index brands to full height */
    $('.index__brands__all').bind('click', function(event) {
        var $max = $('.index__brands__max'),
            max_height = $('.index__brands__wrapper').height();

        event.preventDefault();

        if ($max.hasClass('expanded')) {
            $max.removeAttr('style');
            $('.index__brands__all').removeClass('expanded');
        } else {
            $max.css('max-height', max_height);
            $('.index__brands__all').addClass('expanded');
        }

        $max.toggleClass('expanded');
    });

    $(window).on('resize', function(){
        var $max = $('.index__brands__max');
        $max.removeAttr('style').removeClass('expanded');
        $('.index__brands__all').removeClass('expanded');
    });
    /* End - Index brands to full height */

    /* Beg - Listing view type */
    $('.filter__box--view label').bind('click', function(event) {
        event.preventDefault();

        $('.filter__box--view label.active').removeClass('active');
        $(this).addClass('active');

        $('.products').removeClass('products--row').removeClass('products--code').removeClass('products--block');
        $('.products').addClass('products--' + $(this).attr('id'));
    });
    /* End - Listing view type */

    /* Beg - Product - scroll to desc */
    $('.product__desc__link').bind('click', function(event) {
        event.preventDefault();

        slideTo($('.product__info__title'));
    });
    /* End - Product - scroll to desc */

    /* Beg - Checkout 1 - selected box */
    $('.cart__choice__box label').bind('click', function(event) {
        $(this).parents('.cart__choice__wrapper').find('.cart__choice__box.selected').removeClass('selected');
        $(this).parents('.cart__choice__box').addClass('selected');
    });
    /* End - Checkout 1 - selected box */

    /* Beg - Accessories - add to cart msg */
    $('.alternate .products__buy, .accessories .products__buy').bind('click', function(event) {
        event.preventDefault();

        $('.top-right').notify({
            message: { text: 'Produkt bol pridaný do košíka.' }
        }).show();
    });
    /* End - Accessories - add to cart msg */
});
