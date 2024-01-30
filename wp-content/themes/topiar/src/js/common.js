jQuery(document).ready(function( $ ) {

    //show/hide mob menu
    if( jQuery('.header__hamburger').length ){
        //init custom scrollbar
        const mobMenuScroll = new SimpleBar(jQuery('.header-mob-menu')[0], {
            autoHide: false
        });

        jQuery(document).on('click', '.header__hamburger', function(e){
           e.preventDefault();

           if(jQuery('.header-mob-menu').length){
               if( jQuery('.header').hasClass('tp-open') ){
                   jQuery('.header .menu-item-has-children').removeClass('tp-open');
                   jQuery('.header .sub-menu').slideUp();
               }
               jQuery('.header').toggleClass('tp-open');
               jQuery('.header-mob-menu').slideToggle();
           }
        });

        jQuery(window).resize(function(){
            jQuery('.header-mob-menu').slideUp();
            jQuery('.header .menu-item-has-children').removeClass('tp-open');
            jQuery('.header .sub-menu').slideUp();
        });
    }
    if( jQuery('.menu-item-has-children').length ){
        if( jQuery(window).width() > 1024 ){
            jQuery(document).on('mouseenter', '.header .menu-item-has-children > a', function() {
                jQuery(this).siblings('.sub-menu').stop(true, true).slideDown();
            }).on('mouseleave', '.header .menu-item-has-children', function() {
                jQuery('.sub-menu', jQuery(this)).stop(true, true).slideUp('fast');
            });
        }else{
            jQuery(document).on('click', '.header .menu-item-has-children > a', function(e){
                e.preventDefault();
                jQuery(this).siblings('.sub-menu').stop(true, true).slideToggle();
            });
        }

        jQuery(document).mouseup(function (e){
            var div = jQuery(".header__menu");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                jQuery('.header .menu-item-has-children').removeClass('tp-open');
                jQuery('.header .sub-menu').slideUp();
            }
        });
    }


    //show/hide search form in header
    if (jQuery('.header__search a').length){
        jQuery('.header__search a').on('click', function(e){
            e.preventDefault();
            jQuery(this).parent().toggleClass('tp-open');
        });
        jQuery(document).mouseup(function (e){
            var div = jQuery(".header__search");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                div.removeClass('tp-open');
            }
        });
    }


    if( jQuery('.scrolling-text__footer').length ) {
      jQuery(document).on('click', '.scrolling-text__footer', function(e){
          e.preventDefault();

          if(jQuery(".scrolling-text__content").hasClass("tp-open")) {
              jQuery(".scrolling-text__content").animate({"height": "155px"}).removeClass("tp-open");
          } else {
              jQuery(".scrolling-text__content").animate({"height": "1000px"}).addClass("tp-open");
          }
      });
    }


    if( jQuery('.catalog-block__menu').length ) {
        //init custom scrollbar
        const catalogBlockMenuScroll = new SimpleBar(jQuery('.catalog-block__menu')[0], {
            autoHide: false
        });

        jQuery(document).on('click', '.catalog-block__menu .menu-item-has-children > a', function(e){
            e.preventDefault();
            jQuery(this).parent().toggleClass('tp-open');
            jQuery(this).siblings('.sub-menu').slideToggle();
        });
    }


    if (jQuery('.reviews__items').length) {
        jQuery('.reviews__items').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            centerPadding: '60px',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }



    if( jQuery('.faq__item').length ) {
        jQuery(document).on('click', '.faq__item-header', function(e){
            let item = jQuery(this).parent();
            item.toggleClass('tp-open');
            item.find('.faq__item-footer').slideToggle();
        })
    }















    //faq
    if( jQuery('.faq__item-content').length ){
        jQuery(document).on('click', '.faq__item-title', function(e){
            e.preventDefault();
            let faq_item = jQuery(this).closest('.faq__item');
            faq_item.toggleClass('top-open');
            faq_item.find('.faq__item-content').slideToggle();
        })
    }












    jQuery(document).on('click', '.history-back', function( e ) {
        e.preventDefault();

        let referrer = document.referrer;
        if( window.history.length > 1 ) {
            window.history.back();
        } else if( referrer !== undefined ) {
            window.document.location = referrer;
        }

    });


    //Trick for 100vh in mobile browsers
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
});