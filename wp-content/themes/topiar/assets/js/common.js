jQuery(document).ready(function( $ ) {

    AOS.init();

    //show/hide mob menu
    if( jQuery('.header__hamburger').length ){
        //init custom scrollbar
        const mobMenuScroll = new SimpleBar(jQuery('.header-mob-menu')[0], {
            autoHide: false
        });

        jQuery(document).on('click', '.header__hamburger', (e) => {
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

        jQuery(window).resize(() => {
            jQuery('.header-mob-menu').slideUp();
            jQuery('.header .menu-item-has-children').removeClass('tp-open');
            jQuery('.header .sub-menu').slideUp();
        });
    }
    if( jQuery('.header .menu-item-has-children').length ){
        if( jQuery(window).width() > 1024 ){
            jQuery(document).on('mouseenter', '.header .menu-item-has-children > a', function() {
                jQuery(this).siblings('.sub-menu').stop(true, true).slideDown();
            }).on('mouseleave', '.header .menu-item-has-children', function() {
                jQuery('.sub-menu', jQuery(this)).stop(true, true).slideUp('fast');
            });
        }else{
            jQuery(document).on('click', '.header .menu-item-has-children > a', (e) => {
                e.preventDefault();
                jQuery(this).siblings('.sub-menu').stop(true, true).slideToggle();
            });
        }

        jQuery(document).mouseup( (e) => {
            var div = jQuery(".header__menu");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                jQuery('.header .menu-item-has-children').removeClass('tp-open');
                jQuery('.header .sub-menu').slideUp();
            }
        });
    }


    //sidebar menu
    if( jQuery('.uslugi__menu').length ) {
        //init custom scrollbar
        const uslugiSidebar = new SimpleBar(jQuery('.uslugi__sidebar')[0], {
            autoHide: false
        });

        if( jQuery('.uslugi__menu .menu-item-has-children').length ){
            jQuery('.uslugi__menu .menu-item-has-children.tp-open').children('.sub-menu').stop(true, true).slideDown();


            // if( jQuery(window).width() > 768 ){
                jQuery(document).on('click', '.uslugi__menu .menu-item-has-children .menu-item__inner > .menu-item__opener', function(e) {
                    e.preventDefault();
                    jQuery(this).parent().parent().toggleClass('tp-open');
                    jQuery(this).parent().siblings('.sub-menu').stop(true, true).slideToggle();
                });
            // }
        }
    }


    if( jQuery('.portfolio__category-wrap').length ) {
        //init custom scrollbar
        const portfolioSidebar = new SimpleBar(jQuery('.portfolio__category-wrap')[0], {
            autoHide: false
        });
    }


    if( jQuery('.blog-home__category-wrap').length ) {
        //init custom scrollbar
        let $menuWrap = jQuery('.blog-home__category-wrap');
        const blogSidebar = new SimpleBar($menuWrap[0], {
            autoHide: false
        });

        jQuery(document).on('click', '.blog-home__category-menu-mob', function(e){
            e.preventDefault();

            $menuWrap.slideToggle();
        })
    }


    if( jQuery('.blog-single__content').length ) {
        let i = 1;
        jQuery('.blog-single__content h2').each(function(el){
            let text = jQuery(this).text();
            let id = 'heading' + i;
            let link = '<li><a href="#'+ id + '">' + text + '</a></li>';
            jQuery(this).attr('id', id);
            jQuery('.blog-single__list-items').append(link);
            i++;
        });

        jQuery(".blog-single__list-items").on('click','a', function (e) {
            e.preventDefault();
            let id  = $(this).attr('href'),
                top = $(id).offset().top - 100;
            jQuery('body,html').animate({scrollTop: top}, 600);
        });
    }


    if( jQuery('.gallery__slider').length ) {
        jQuery('.gallery__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            centerPadding: '14px',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    }


    //show/hide search form in header
    if ( jQuery('.header__search a').length){
        jQuery('.header__search a').on('click', function(e) {
            e.preventDefault();
            jQuery(this).parent().toggleClass('tp-open');
        });
        jQuery(document).mouseup( function(e) {
            var div = jQuery(".header__search");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                div.removeClass('tp-open');
                div.find('input').val('');
            }
        });

        jQuery('.header__search-close').on('click', function(e){
            e.preventDefault();
            jQuery(".header__search").removeClass('tp-open');
            jQuery(".header__search").find('input').val('');
        })
    }


    if( jQuery('.search-result__more').length ) {
        if( jQuery(window).width() < 1024 ) {
            jQuery('.search-result__more .see').text('2');
        }


        jQuery(document).on('click', '.search-result__more', function(e){
            e.preventDefault();

            let $this = jQuery(this);
            let count = jQuery(this).attr('data-count');

            $this.parent().find('.search-result__items').css('max-height', '100%');
            $this.find('.see').text(count);
        })
    }


    if( jQuery('.search-result__type-filter-item').length ) {
        jQuery(document).on('click', '.search-result__type-filter-item', function(e){
            e.preventDefault();

            let target = jQuery(this).attr('href');
            let text = jQuery(this).html();

            if( target !== '#' ) {
                jQuery('.search-result__type-box').hide();
                jQuery(target).show();
            } else {
                jQuery('.search-result__type-box').show();
            }

            jQuery('.search-result__type-filter-main-item').html(text);
            jQuery('.search-result__type-filter-item').removeClass('tp-active');
            jQuery(this).addClass('tp-active');

            if (jQuery(window).width() < 768) {
                jQuery('.search-result__type-filter-drop').slideUp();
            }
        });


        jQuery(document).on('click', '.search-result__type-filter-main-item', function(e){
           e.preventDefault();

           jQuery('.search-result__type-filter-drop').slideToggle();
        });
    }


    if( jQuery('.scrolling-text__footer').length ) {
      jQuery(document).on('click', '.scrolling-text__footer', function(e) {
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

        jQuery(document).on('click', '.catalog-block__menu .menu-item-has-children > a', (e) => {
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

        //hide readmore button
        jQuery('.reviews__text').each((e, ele) => {
            if( ele.scrollHeight <= 175 ) {
                jQuery(ele).siblings('.reviews__item-readmore').hide();
            }
        });

        jQuery(document).on('click', '.reviews__item-bottom .reviews__item-readmore', (e) => {
            e.preventDefault();
            let link = jQuery(e.target);
            let textBlock = link.prev('.reviews__text');
            let textOpen = link.text();
            let textClose = link.attr('data-text');

            if(textBlock.hasClass("tp-open")) {
                textBlock.animate({'height': '175px'}).removeClass('tp-open');
            } else {
                textBlock.animate({'height': '350px'}).addClass('tp-open');
            }

            link.attr('data-text', textOpen);
            link.text( textClose );
        })
    }


    if( jQuery('.faq__item').length ) {
        jQuery(document).on('click', '.faq__item-header', (e) => {
            let item = jQuery(this).parent();
            item.toggleClass('tp-open');
            item.find('.faq__item-footer').slideToggle();
        })
    }


    if( jQuery('a[href="#contact-popup"]').length ) {
        jQuery(document).on('click', 'a[href="#contact-popup"]', function(e){
            e.preventDefault();

            const popupId = jQuery(this).attr('href');
            jQuery('body').addClass('overflow-hidden');
            jQuery(popupId).addClass('tp-open');
        });
    }


    if( jQuery('.popup__close').length ) {
        jQuery(document).on('click', '.popup__close', function(e){
            e.preventDefault();

            jQuery(this).parents('.popup').removeClass('tp-open');
            jQuery('body').removeClass('overflow-hidden');
        })
    }


    if( jQuery('.popup__block').length ) {
        jQuery(document).mouseup( (e) => {
            var div = jQuery(".popup__block");
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                div.parents('.popup').removeClass('tp-open');
                jQuery('body').removeClass('overflow-hidden');
            }
        });
    }


    if( jQuery('.filter-bar').length ) {
        jQuery(document).on('click', '.filter-bar__filter', function(e){
            e.preventDefault();

            jQuery(this).find('.filter-bar__dropdown').slideToggle();
        });

        jQuery(document).on('click', '.filter-bar__view', function(e){
            e.preventDefault();

            jQuery('.filter-bar__view').removeClass('tp-active');
            jQuery(this).addClass('tp-active');

            if( jQuery(this).hasClass('filter-bar--table') ) {
                jQuery(this).parents('.wrapper').find('#tp-view').attr('class', 'table-view');
                setCookie('tp-view', 'table', {secure: true, 'max-age': 3600});
            } else if( jQuery(this).hasClass('filter-bar--grid') ) {
                jQuery(this).parents('.wrapper').find('#tp-view').attr('class', 'grid-view');
                setCookie('tp-view', 'grid', {secure: true, 'max-age': 3600});
            } else if( jQuery(this).hasClass('filter-bar--list') ) {
                jQuery(this).parents('.wrapper').find('#tp-view').attr('class', 'list-view');
                setCookie('tp-view', 'list', {secure: true, 'max-age': 3600});
            }
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


function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


function setCookie(name, value, options = {}) {

    options = {
        path: '/',
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}


function deleteCookie(name) {
    setCookie(name, "", {
        'max-age': -1
    })
}