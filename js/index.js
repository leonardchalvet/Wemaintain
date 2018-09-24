$(window).on('load', function() {

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

	$('body').click(function(){
		$('#section-team .wrapper .container-carousel .container-el .el').toggleClass('active');
		$('#section-quotes .wrapper .container-el .el').toggleClass('active');
	})

})