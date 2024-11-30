/*=========


Template Name: Portfolio -  HTML Template

=========*/

/*=========
----- JS INDEX -----

=========*/

$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";
    $("[data-background").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    });

	    // Sticky Header JS Start
		$(window).on( 'scroll', function(){
			if ($(window).scrollTop() >= 100) {
				$('.header-area').addClass('sticky-header');
			}
			else {
				$('.header-area').removeClass('sticky-header');
			}
		});

  // filter functions
  	// Toggle Menu Mobile JS Two
	$(".toggle-button").on( 'click', function(){
		$(".main-navigation").toggleClass('toggle-menu');
		$(".main-menu  .black-shadow").fadeToggle();
	});
	$(".main-navigation ul li a").on( 'click', function(){
		$(".main-navigation").removeClass('toggle-menu');
		$(".main-menu  .black-shadow").fadeOut();
	});
	$(".main-navigation ul li.sub-items>a").on( 'click', function(){
		$(".main-navigation").addClass('toggle-menu');
		$(".main-menu  .black-shadow").stop();
	});
	$(".main-menu  .black-shadow").on( 'click', function(){
		$(this).fadeOut();
		$(".main-navigation").removeClass('toggle-menu');
	});


		$("#nav-tab").on('click', 'a.nav-item', function() {
            if ($('a.nav-item').hasClass('active')) {
                $('a.nav-item').removeClass('active');
            }
            $(this).addClass('active');
        });

   // Initiate the wowjs
    new WOW().init();

		
    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
		
    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

    // $('.portfolio-container ul li').click(function(){
    //     $('.portfolio-container ul li').removeClass('active');
    //     $(this).addClass('active');

    //     var selector = $(this).attr('data-filter');
    //     $('.portfolio-item').isotope({
    //     filter:selector
    //     });
    //     return false;
    //     });
      $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
				nav: true,
        navText: [
            '<i class="fa fa-arrow-left-long"></i>',
            '<i class="fa fa-arrow-right-long"></i>',
        ],
    });
     // collaborator-slider
    var $collaboratorSlider = $(".collaborator-slider");
    $collaboratorSlider.owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayTimeout: 2000,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1399: {
                items: 5,
            },
        }
    });
    
		$('.member-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
		'<i class="fa fa-angle-left"></i>',
		'<i class="fa fa-angle-right"></i>',
		],

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

     // Magnific popup
     $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'https://www.youtube.com/',

                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }

            },
            srcAction: 'iframe_src',
        }
	 });



});