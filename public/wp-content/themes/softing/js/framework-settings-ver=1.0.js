(function ($) {

  "use strict";

    responsiveEl();
	function responsiveEl() {
		var matches = document.querySelectorAll("[data-res-css]");
		var resdata = [];
		matches.forEach(function(element) {
			var get_style = element.getAttribute("data-res-css");
			resdata.push(get_style);
		 element.removeAttribute("data-res-css");
		});

		var css = resdata.join(""),
			head = document.head || document.getElementsByTagName('head')[0],
			style = document.createElement('style');

		style.type = 'text/css';
		style.setAttribute("data-type", "rafia-shortcodes-custom-css");
		if (style.styleSheet){
		  // This is required for IE8 and below.
		  style.styleSheet.cssText = css;
		} else {
		  style.appendChild(document.createTextNode(css));
		}

		head.appendChild(style);
	}
    function setBacktop_1() {
       var backtop_1 = $( ".c-backtop-1" );
       if ( backtop_1.length ) {
          if ( backtop_1.hasClass( "-js-backtop" ) ) {
             backtop_1.on( "click", function() {
                $( "body, html" ).animate( { scrollTop: 0 }, 800 );
             } );

             $( window ).on( "scroll", function() {
                if ( $( window ).scrollTop() > 40 ) {
                   backtop_1.fadeIn();
                } else {
                   backtop_1.fadeOut();
                }
             } );
          }
       }
    };

	jQuery(document).ready(function( $ ) {

		// preloader
		jQuery(window).load(function () {

            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");

			$('#nt-preloader').fadeOut('slow', function () {
				$(this).remove();
			});
		});

		// blog list
		jQuery(".nt-theme-content table, #wp-calendar" ).addClass( "table table-striped" );

  	var parallaxbg= $('.jarallax-rafia');
  	if (parallaxbg > 0){
  		$('.jarallax-rafia').jarallax({
  		});

  		jarallax(document.querySelectorAll('.jarallax-rafia.mobile-parallax-off'), {
  			disableParallax: /iPad|iPhone|iPod|Android/,
  			disableVideo: /iPad|iPhone|iPod|Android/
  		});
  	}

  	// CF7 remove error message after 4 seconds
  	$('.wpcf7-response-output').ajaxComplete(function(){
  	  window.setTimeout(function(){
  		$('.wpcf7-response-output').addClass('display-none');
  		}, 4000); //<-- Delay in milliseconds
  	  window.setTimeout(function(){
  		$('.wpcf7-response-output').removeClass('wpcf7-validation-errors display-none');
  		}, 4500); //<-- Delay in milliseconds
  	});

		setBacktop_1();

	});

})(jQuery);
