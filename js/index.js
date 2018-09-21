$(window).on('load', function() {
	/*
	setTimeout(function() {
	}, 1000);
	*/


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


	$window = $(window);
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();

})