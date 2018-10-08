$(window).on('load', function() {

	$('#section-features .el-desc').click(function(){
		var el = $(this).data('illu');
		$('#section-features .el-desc').removeClass('active');
		$(this).addClass('active');
		$('#section-features .el-illu').removeClass('active');
		$('#section-features .el-illu-' + el).addClass('active');
		$('#section-features .container-bar .bar').removeClass('active-1 active-2 active-3').addClass('active-'+el);
	})


	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('#section-features').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	                $('#section-features .li-el-desc .el-desc:nth-child(1)').click();
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();

})