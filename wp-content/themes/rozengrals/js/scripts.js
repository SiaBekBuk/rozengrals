
jQuery(document).ready( function(){
    var tmphref = jQuery('#menu-item-14 a').attr('href');
    jQuery('#nav').find('a').each(function(index){
        jQuery(this).attr({
            href:jQuery(this).attr('href')+'#nav'
        });
    });
    jQuery('#menu-item-14 a').attr('href',tmphref);
});

jQuery(function () {
    jQuery('#datetime').datetimepicker('setStartDate', '2013-08-01');
});

jQuery('#datetime').datetimepicker().on('changeDate', function () {
    jQuery('#datetime').datetimepicker('hide');
});
