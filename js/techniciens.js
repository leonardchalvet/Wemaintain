$(window).on('load', function() {

	$('#section-signup .container-nav .el').click(function(){
		var el = $(this).data('illu');
		$('#section-signup .container-nav .el').removeClass('active');
		$(this).addClass('active');
		$('#section-signup .container-illu .el-illu').removeClass('active');
		$('#section-signup .container-illu .el-illu-' + el).addClass('active');
		$('#section-signup .container-nav .container-el .el').removeClass('active-1 active-2 active-3').addClass('active-'+el);
	})

	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('#section-signup').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	                $('#section-signup .container-nav .el:nth-child(1)').click();
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();

})