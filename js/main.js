$(document).ready(function () {
   $('.header__cart-block').click(function () {
      $('.header__minicart').toggleClass('minicart-open');
   });
   $('.header__category-title').click(function () {
      $('.header__menu-category').toggleClass('menucategory-open');
   });
   $('.header__menu-category-list > .menu-item-has-children').click(function () {
      $('.header__menu-category-list > .menu-item-has-children >.sub-menu').toggleClass('sub-menucategory-open');
   });
   $('.header__menu-primary-list > .menu-item-has-children').click(function () {
      $('.header__menu-primary-list > .menu-item-has-children >.sub-menu').toggleClass('sub-menuprimary-open');
   });
   $('.header__button-mob-primary').click(function () {
      $('.header__menu-primary').addClass('header__menu-primary-open');
      $('.header__menu-category').removeClass('header__menu-categorymob-open');
   });
   $('.header__mob-primary-close').click(function () {
      $('.header__menu-primary').removeClass('header__menu-primary-open');
   });
   $('.header__button-mob-category').click(function () {
      $('.header__menu-category').addClass('header__menu-categorymob-open');
      $('.header__menu-primary').removeClass('header__menu-primary-open');
   });
   $('.header__mob-category-close').click(function () {
      $('.header__menu-category').removeClass('header__menu-categorymob-open');
   });

   $('.shop__shop-vetrine > .products').addClass('shop__shop-vetrine-grid')

   $('.shop__shop-filter-buttons-list').click(function () {
      $('.shop__shop-vetrine > .products').removeClass('shop__shop-vetrine-grid');
      $('.shop__shop-vetrine > .products').addClass('shop__shop-vetrine-list');
   });

   $('.shop__shop-filter-buttons-grid').click(function () {
      $('.shop__shop-vetrine > .products').removeClass('shop__shop-vetrine-list');
      $('.shop__shop-vetrine > .products').addClass('shop__shop-vetrine-grid');
   });

   $('.sidebar__menu-category-list > .menu-item-has-children').click(function () {
      $('.sidebar__menu-category-list > .menu-item-has-children > .sub-menu').toggleClass('sidebar__menucategory-open');
   });

   $(".footer__back-to-top").addClass("footer__hidden-top");
   $(window).scroll(function () {
      if ($(this).scrollTop() === 0) {
         $(".footer__back-to-top").addClass("footer__hidden-top")
      } else {
         $(".footer__back-to-top").removeClass("footer__hidden-top")
      }
   });

   $('.footer__back-to-top').click(function () {
      $('body,html').animate({ scrollTop: 0 }, 1200);
      return false;
   });

   $('.product__quick').click(function () {
      $('.themeModal').addClass('themeModal-open');
   });
   $('.modal-close').click(function () {
      $('.themeModal').removeClass('themeModal-open');
   });

   $('.brands__carusel').owlCarousel({
      loop: true,
      margin: 15,
      smartSpeed: 1000,
      autoplay: true,
      nav: false,
      dots: false,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 3
         },
         1000: {
            items: 5
         }
      }
   });
   
   $('.caruselproduct__cart').owlCarousel({
      loop: true,
      margin: 15,
      autoplay: true,
      smartSpeed: 1000,
      nav: true,
      dots: false,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 3
         },
         1000: {
            items: 5
         }
      }
   });

   $('.homeCategory__content').owlCarousel({
      loop: true,
      margin: 15,
      autoplay: true,
      smartSpeed: 1000,
      dots: false,
      nav: false,
      responsive: {
         0: {
            items: 1
         },
         320: {
            items: 2
         },
         600: {
            items: 3
         },
         1000: {
            items: 5
         }
      }
   });

   $('.homenews__carusel').owlCarousel({
      loop: true,
      margin: 15,
      autoplay: true,
      dots: false,
      smartSpeed: 1000,
      nav: true,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 3
         },
         1000: {
            items: 4
         }
      }
   });

   $('.rewievs__content').owlCarousel({
      loop: true,
      margin: 15,
      autoplay: true,
      dots: false,
      smartSpeed: 1000,
      nav: false,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 2
         },
         1000: {
            items: 3
         }
      }
   });

   $('.sidebar__carusel-product').owlCarousel({
      loop: true,
      autoplay: true,
      nav: false,
      smartSpeed: 1000,
      dots: false,
      margin: 15,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         },
         1000: {
            items: 1
         }
      }
   });

   $('.sidebar__sidebar-widget-rewievs').owlCarousel({
      loop: true,
      autoplay: true,
      nav: false,
      margin: 15,
      smartSpeed: 1000,
      dots: false,
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         },
         1000: {
            items: 1
         }
      }
   });

   $('.homeSlider__content').owlCarousel({
      loop: true,
      autoplay: true,
      nav: false,
      dots: false,
      smartSpeed: 1000,
      margin: 15,
      animateOut: 'fadeOut',
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 1
         },
         1000: {
            items: 1
         }
      }
   });

   $('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
         verticalFit: true
      },
      zoom: {
         enabled: true,
         duration: 300 // don't foget to change the duration also in CSS
      }
   });


   $('.shop__miniature-small-wrapper').owlCarousel({
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
            items: 3,
            nav: false
         },
         600: {
            items: 4
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

});







