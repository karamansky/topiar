jQuery(document).ready(function( $ ) {

    //show/hide mob menu
    if( jQuery('.header__hamburger').length ){
        jQuery(document).on('click', '.header__hamburger', function(e){
           e.preventDefault();

           if(jQuery('.header-mob-menu').length){
               jQuery('.header-mob-menu').slideToggle();
           }
        });
    }



    //show/hide search form in header
    if (jQuery('.header__search a').length){
        jQuery('.header__search a').on('click', function(e){
            e.preventDefault();
            jQuery(this).parent().toggleClass('tp-open');
        });

        $(document).mouseup(function (e){
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

    })


    //menu sub-menu show/hide
    // jQuery(document).on('click', '.menu-item-has-children > a', function(e){
    //     e.preventDefault();
    //     jQuery(this).parent().toggleClass('top-active');
    //     jQuery(this).parent().find('.sub-menu').toggleClass('top-active');
    // });
	// jQuery(document).mouseup(function (e){
	// 	let div = $(".menu-item-has-children .sub-menu");
	// 	if (!div.is(e.target) && !jQuery('.menu-item-has-children > a').is(e.target) && div.has(e.target).length === 0) {
	// 		div.removeClass('top-active');
	// 		div.closest('.menu-item-has-children').removeClass('top-active');
	// 	}
	// });


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