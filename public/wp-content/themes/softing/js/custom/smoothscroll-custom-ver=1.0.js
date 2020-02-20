(function ($) {
	
	"use strict";

	var scroll = new SmoothScroll('.navbar a[href*="#"]', {
			offset: function (anchor, toggle) {
			if ($('.navbar')) {
				return 80;
			} else {
				return 50;
			}

		},
	});

})(jQuery);
