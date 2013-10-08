jQuery(document).ready(function () {
    var tmphref = jQuery('#menu-item-14 a').attr('href');
    jQuery('#nav').find('a').each(function (index) {
        jQuery(this).attr({
            href: jQuery(this).attr('href') + '#nav'
        });
    });
    jQuery('#menu-item-14 a').attr('href', tmphref);

    jQuery('#edienkarte').find('.cat-item-name').each(function () {
        jQuery(this).attr({
            title: jQuery(this).text().trim()
        });
    });

    jQuery('#edienkarte').find('.item-comment').each(function () {
        jQuery(this).attr({
            title: jQuery(this).text().replace(/\n/g, ' ').replace(/\s+/g, ' ').trim()
        });
    });

    jQuery('#edienkarte').find('#menu-categories li').each(function () {
        jQuery(this).attr({
            title: jQuery(this).text().replace(/\n/g, ' ').replace(/\s+/g, ' ').trim()
        });
    });

    jQuery('.entry').find('img').each(function () {
        jQuery(this).addClass(' img-rounded');
    });

});

jQuery(function () {
    jQuery('#menu-categories li').click(function () {
        jQuery('.menu-cat-content').hide();
        jQuery('#menu-categories li').removeClass('active');
    });

    jQuery('#liSalads').click(function () {
        jQuery('#pl-snacks-and-salads').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liSoups').click(function () {
        jQuery('#pl-soups').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liFish').click(function () {
        jQuery('#pl-fish').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liMeat').click(function () {
        jQuery('#pl-meat').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liGarnish').click(function () {
        jQuery('#pl-garnish').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liVegetarian').click(function () {
        jQuery('#pl-vegetarian').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liDesserts').click(function () {
        jQuery('#pl-desserts').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liHotDrinks').click(function () {
        jQuery('#pl-hot-drinks').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liDrinks').click(function () {
        jQuery('#pl-drinks').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liBeerAndSnacks').click(function () {
        jQuery('#pl-beer-and-snacks').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liChampagne').click(function () {
        jQuery('#pl-champagne').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liWhiteWine').click(function () {
        jQuery('#pl-white-wine').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liRedWine').click(function () {
        jQuery('#pl-red-wine').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liRoseWine').click(function () {
        jQuery('#pl-rose-wine').show();
        jQuery(this).addClass('active');
    });

    jQuery('#liStrongAlcohol').click(function () {
        jQuery('#pl-strong-alcohol').show();
        jQuery(this).addClass('active');
    });
});

jQuery(function () {
    jQuery('#datetime').datetimepicker('setStartDate', '2013-08-01');
});


jQuery('#datetime').datetimepicker().on('changeDate', function () {
    jQuery('#datetime').datetimepicker('hide');
});