jQuery(document).ready(function () {
    var tmphref = jQuery('#menu-item-14 a').attr('href');
    jQuery('#nav').find('a').each(function (index) {
        jQuery(this).attr({
            href: jQuery(this).attr('href') + '#nav'
        });
    });
    jQuery('#menu-item-14 a').attr('href', tmphref);

    jQuery('#edienkarte').find('.cat-item-name').each(function (index) {
        jQuery(this).attr({
            title: jQuery(this).text().trim()
        });
    });

    jQuery('#edienkarte').find('.item-comment').each(function (index) {
        jQuery(this).attr({
            title: jQuery(this).text().replace(/\n/g, ' ').replace(/\s+/g, ' ').trim()
        });
    });

});

jQuery(function () {
    jQuery('#menu-categories li').click(function () {
        jQuery('.menu-cat-content').hide();
    });

    jQuery('#liSalads').click(function () {
        jQuery('#pl-snacks-and-salads').show();
    });

    jQuery('#liSoups').click(function () {
        jQuery('#pl-soups').show();
    });

    jQuery('#liFish').click(function () {
        jQuery('#pl-fish').show();
    });

    jQuery('#liMeat').click(function () {
        jQuery('#pl-meat').show();
    });

    jQuery('#liGarnish').click(function () {
        jQuery('#pl-garnish').show();
    });

    jQuery('#liVegetarian').click(function () {
        jQuery('#pl-vegetarian').show();
    });

    jQuery('#liDesserts').click(function () {
        jQuery('#pl-desserts').show();
    });

    jQuery('#liHotDrinks').click(function () {
        jQuery('#pl-hot-drinks').show();
    });

    jQuery('#liDrinks').click(function () {
        jQuery('#pl-drinks').show();
    });

    jQuery('#liBeerAndSnacks').click(function () {
        jQuery('#pl-beer-and-snacks').show();
    });

    jQuery('#liChampagne').click(function () {
        jQuery('#pl-champagne').show();
    });

    jQuery('#liWhiteWine').click(function () {
        jQuery('#pl-white-wine').show();
    });

    jQuery('#liRedWine').click(function () {
        jQuery('#pl-red-wine').show();
    });

    jQuery('#liRoseWine').click(function () {
        jQuery('#pl-rose-wine').show();
    });

    jQuery('#liStrongAlcohol').click(function () {
        jQuery('#pl-strong-alcohol').show();
    });
});

jQuery(function () {
    jQuery('#datetime').datetimepicker('setStartDate', '2013-08-01');
});


jQuery('#datetime').datetimepicker().on('changeDate', function () {
    jQuery('#datetime').datetimepicker('hide');
});