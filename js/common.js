$(window).on('load', function() {
	var styleHeader;
	if ($('#header-desktop').hasClass('style-1')) {
		styleHeader = "style-1";		
	}
	$window = $(window);

	$window.scroll(function() {

	    if ( $window.scrollTop() >= 1 ) {
	        $('#header-desktop').addClass('scroll').removeClass(styleHeader);
	    } else {
	    	$('#header-desktop').removeClass('scroll').addClass(styleHeader);
	    };
	});


	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('.container__anim').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();
})