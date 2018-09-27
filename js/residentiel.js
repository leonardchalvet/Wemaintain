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
	    if ($('#section-features .container-text').hasClass('reach')) {
	    	$('#section-features .el-desc:nth-child(1)').click();
	    }
	});
	animScroll();


	$('#section-features .el-desc').click(function(){
		var el = $(this).data('illu');
		$('#section-features .el-desc').removeClass('active');
		$(this).addClass('active');
		$('#section-features .el-illu').removeClass('active');
		$('#section-features .el-illu-' + el).addClass('active');
		$('#section-features .container-bar .bar').removeClass('active-1 active-2 active-3').addClass('active-'+el);
	})


})