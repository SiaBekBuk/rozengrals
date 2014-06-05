jQuery(document).ready(function($) {

    $('.roz_add_to_cart').click(function(){
        var id = $(this).attr('data-product_id');
        var data = {
            action: 'roz_add_cart',
            id:id
        };
        $.post(ajaxobj.ajaxurl, data, function(response) {
            ChangeCart(response);
            ChangeItem(response.id,response.item_count);

        });
    })
    $('.item-remove').click(function(){
        var id = $(this).attr('data-product_id')
        var data = {
            action: 'roz_remove_from_cart',
            id:id
        };
        $.post(ajaxobj.ajaxurl, data, function(response) {

            ChangeCart(response);
            ChangeItem(response.id,response.item_count);
        });
    })


    $(document.body).on("change_cart", function() {

    });
});


function ChangeCart(data){
    var cart = $("#cart");
    if(data.count){
        cart.css("visibility","");
        cart.find("#cart-item-count span").text(data.count);
        cart.find("#cart-sum span").text('€ '+data.total);

    } else {
        cart.css("visibility","hidden");
    }
}


function ChangeItem(id,count){
    if(count>0)
    {
       $("#add_cart_"+id).addClass("hide");
        $("#basket_"+id).removeClass("hide").find(".item-added-count").text(count);
    }
    else {
        $("#add_cart_"+id).removeClass("hide");
        $("#basket_"+id).addClass("hide");


    }
}