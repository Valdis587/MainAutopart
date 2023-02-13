$(document).ready(function ($) {
    $('.add_to_cart_button').on('click', function () {
        var productID= $(this).attr('data-product_id');
        var data = {
            id: productID,
            action: 'messages_action',
            nonce: messages.nonce,
        };
        $.ajax({
            url: messages.url,
            data: data,
            type: 'POST',
            dataType: 'json',

            success:function(data) {
                addProductNotice(data.product);
            }

        });
    });
});

function addProductNotice(title, thumb, text, type) {
    $.jGrowl.defaults.closer = false;
    //Stop jGrowl
    //$.jGrowl.defaults.sticky = true;
    var tpl = thumb + '<h3>'+text+'</h3>';
    $.jGrowl(tpl, {
        life: 5000,
        header: title,
        speed: 'slow',
        theme: type
    });
}