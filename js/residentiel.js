$(window).on('load', function() {

	$('#section-features .el-desc').click(function(){
		var el = $(this).data('illu');
		$('#section-features .el-desc').removeClass('active');
		$(this).addClass('active');
		$('#section-features .el-illu').removeClass('active');
		$('#section-features .el-illu-' + el).addClass('active');
		$('#section-features .container-bar .bar').removeClass('active-1 active-2 active-3').addClass('active-'+el);
	})

})