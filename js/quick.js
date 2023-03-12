$(document).ready(function ($) {
    $('.product__quick').on('click', function () {
        var productID= $(this).attr('data-product-id');
        var data = {
            id: productID,
            action: 'quick_action',
            nonce: quick.nonce,
        };
        $.ajax({
            url: quick.url,
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend:function(xhr){
                $('.shop__pop-content').text('Загрузка');
            },
            success:function(data) {
                
                $('.shop__pop-content').html(data.product);

                //инициализация слайдра в попап //
                var owl = $('.shop__miniature-big-wrapper');
                var owl2 = $('.shop__miniature-small-wrapper');
                owl.trigger('destroy.owl.carousel');
                owl2.owlCarousel({
                    items: 4,
                    margin: 20,
                    loop: true,
                    autoplay: true,
                    pagination: false,
                    nav: true,
                    itemsTablet: [768, 4],
                    itemsDesktop: [1199, 3],
                    responsive: {
                        0: {
                            items: 2,
                            nav: false
                        },
                        600: {
                            margin: 5,
                            nav: false,
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                });
                //переключаль картинок в карточке товара //
                $('.shop__miniature-small-item a').click(function (e) {
                    if ($('.shop__miniature-big-item img').attr('src') !== $(this).attr('href')) {
                        $('.shop__miniature-big-item img').hide().attr('src', $(this).attr('href')).fadeIn(1000);
                    }
                    e.preventDefault();
                });
            }

        });
    });
});








