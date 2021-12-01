jQuery(document).ready(function() {
    /*************** bxslider *****************/
    jQuery(function() {
        jQuery('#slider1').bxSlider({
            mode: 'fade',
            auto: false,
            autoControls: true,
            controls: false,
			pager: false,
            pause: 5000 
        });
    });
    /*************** Sticky Header *****************/
    if ($(window).width() >= 1025) {
        $(window).scroll(function() {
            if($(window).scrollTop() > 10)
			{
				$('header').addClass('sticky');
			}
			else
			{
				$('header').removeClass('sticky');
			}
        });
    } else {
        $('header').removeClass("sticky");
    }
    /************* Animation *******************/
	var get_width = $(window).width();
    if (get_width >= 1025) {
        new WOW().init();
    } 
	/********************* Footer Accordion ********************/
	$(".footer-title span").click(function() {
			$(this).parent(".footer-title").next(".mobile-accordion-toggle").slideToggle();
			$(this).parents(".mobile-accordion").toggleClass("in");
	});
    /************* Custom Scrollbar*******************/
    $(".hl_welcome_txt").mCustomScrollbar({
        mouseWheel: {
            enable: true
        },
        contentTouchScroll: true
    }); 
	
	/*************** testimonials_carousel *****************/
	$(".hl_testimonials_carousel").owlCarousel({
		autoplay: true,
		autoplayTimeout: 5000,
		loop: true,
		smartSpeed: 1500,
		nav: true,
		margin: 30,
		dots: true,
		navText: false,
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			640:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	}); 
	/*************** services_carousel *****************/
	$(".services_carousel").owlCarousel({
		//autoplay: true,
		autoplayTimeout: 5000,
		loop: true,
		smartSpeed: 1500,
		nav: true,
		margin: 30,
		dots: true,
		navText: false,
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			640:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:3
			}
		}
	}); 
    /************* Back to top *******************/
    jQuery('body').append('<div id="toTop" class="btn top-btn"><i class="fas fa-sort-up"></i><div clas="top-text">top</div></div>');
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() != 0) {
            jQuery('#toTop').fadeIn();
        } else {
            jQuery('#toTop').fadeOut();
        }
    });
    jQuery('#toTop').click(function() {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
});
