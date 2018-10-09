$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {
		$('#section-signup .container-nav .el').click(function(){
			var el = $(this).data('illu');
			$('#section-signup .container-nav .el').removeClass('active');
			$(this).addClass('active');
			$('#section-signup .container-illu .el-illu').removeClass('active');
			$('#section-signup .container-illu .el-illu-' + el).addClass('active');
			$('#section-signup .container-nav .container-el .el').removeClass('active-1 active-2 active-3 active-4').addClass('active-'+el);

			$('#section-signup .wrapper .container-tsr .container-desc p').hide();
			$('#section-signup .wrapper .container-tsr .container-desc .desc-'+el).show();
		})
	}
	else {
		let numSignup = 1;
		let pauseSignup = 0;

		function animSignup(el) {
			$('#section-signup .container-nav .el').removeClass('active');
			$('#section-signup .container-nav .el:nth-child(' + el + ')').addClass('active');
			$('#section-signup .container-illu .el-illu').removeClass('active');
			$('#section-signup .container-illu .el-illu-' + el).addClass('active');
			$('#section-signup .container-nav .container-el .el').removeClass('active-1 active-2 active-3 active-4').addClass('active-' + el);

			$('#section-signup .wrapper .container-tsr .container-desc p').hide();
			$('#section-signup .wrapper .container-tsr .container-desc .desc-'+el).show();
		}

		setInterval(function() {
			if(!pauseSignup) {
				animSignup(numSignup);
				numSignup = numSignup >= $('#section-signup .container-nav .el').length ? 1 : numSignup+=1;
			}
			else {
				setTimeout(function() {
					pauseSignup = 0;
				}, 10000);
			}
		}, 5000);

		//Click right arrow
		$('#section-signup .wrapper .container-tsr .container-nav .container-bar .triangle-right').click(function(){
			if(pauseSignup == 0) numSignup-=1;
			numSignup = numSignup >= $('#section-signup .container-nav .el').length ? 1 : numSignup+=1;
			animSignup(numSignup);
			pauseSignup = 1;
		});

		//Click left arrow
		$('#section-signup .wrapper .container-tsr .container-nav .container-bar .triangle-left').click(function(){
			if(pauseSignup == 0) numSignup-=1;
			numSignup = numSignup <= 1 ? $('#section-signup .container-nav .el').length : numSignup-=1;
			animSignup(numSignup);
			pauseSignup = 1;
		});
	}

	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('#section-signup').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	                $('#section-signup .container-nav .el:first-child').addClass('active');
	                $('#section-signup .container-illu .el-illu-1').addClass('active');
	                $('#section-signup .container-nav .container-el .el').addClass('active-1');
					$('#section-signup .wrapper .container-tsr .container-desc .desc-1').show();
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();

})