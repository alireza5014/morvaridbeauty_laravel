/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : Softing - Software Landing Page
    Version         : 1.0
    
* ================================================================= */
(function($) {
    "use strict";

    $(document).on('ready', function() {

		var banner = $('.banner-carousel').size();
		if(banner){
			/* ==================================================
				# Banner Carousel
			 ===============================================*/
			$('.banner-carousel').owlCarousel({
				loop: true,
				nav: false,
				navText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
				dots: false,
				autoplay: true,
				center: true,
				items:1,
				margin:0,
				stagePadding:100,

				responsive:{
					600:{
						items:1,

					}
				}
			});
		}
		
		
		var overview = $('.overview-carousel').size();
		if(overview){
        /* ==================================================
            # Overview Carousel
         ===============================================*/
        $('.overview-carousel').owlCarousel({
            loop: true,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: true,
            autoplay: true,
            center: true,
            items:1,
            margin:30,
            stagePadding:10,

            responsive:{
                600:{
                    items:1,
                    stagePadding:200

                }
            }
        });

		}
		
		 /* ==================================================
           # Overview Cell Carousel
         ===============================================*/
		var overviewcell = $('.overview-carousel-cell').size();
		if(overviewcell){
			$('.overview-carousel-cell').owlCarousel({
				loop: false,
				nav: false,
				dots: true,
				autoplay: true,
				items: 1,
				navText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
			});
		}

        /* ==================================================
            # Team Carousel
         ===============================================*/
		var team = $('.team-carousel').size();
		if(team){
			$('.team-carousel').owlCarousel({
				loop: false,
				margin: 30,
				nav: false,
				navText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
				dots: true,
				autoplay: true,
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
		}

        /* ==================================================
            # Testomonails Carousel
         ===============================================*/
		var testimonials = $('.testimonials-items').size();
		if(testimonials){
			$('.testimonials-items').owlCarousel({
				loop: false,
				nav: false,
				dots: true,
				autoplay: true,
				items: 1,
				navText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
			});
		}


        /* ==================================================
            # Clients Carousel
         ===============================================*/
		var clientsitems = $('.clients-items').size();
		if(clientsitems){
			$('.clients-items').owlCarousel({
				loop: false,
				margin: 20,
				nav: true,
				navText: [
					"<i class='fa fa-angle-left'></i>",
					"<i class='fa fa-angle-right'></i>"
				],
				dots: false,
				autoplay: true,
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
		}
	});
	var post_gallery = $('.post-gallery-active').size();
	if(post_gallery){
		/* event-deatils-active */
		$('.post-gallery-active').owlCarousel({
			loop:true,
			nav:true,
			dots:false,
			autoplay:true,
			navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:1
				},
				992:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	}
})(jQuery);