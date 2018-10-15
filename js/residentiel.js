$(window).on('load', function() {

	if (window.matchMedia("(min-width: 700px)").matches) {
		$('#section-features .el-desc').click(function(){
			var el = $(this).data('illu');
			$('#section-features .el-desc').removeClass('active');
			$(this).addClass('active');
			$('#section-features .el-illu').removeClass('active');
			$('#section-features .el-illu-' + el).addClass('active');
			$('#section-features .container-bar .bar').removeClass('active-1 active-2 active-3').addClass('active-'+el);
		})
	}
	else {
		let numFeatures = 2;
		let pauseFeatures = 0;

		function animFeatures(el) {
			$('#section-features .el-desc').removeClass('active');
			$('#section-features .li-el-desc .el-desc:nth-child('+el+')').addClass('active');
			$('#section-features .el-illu').removeClass('active');
			$('#section-features .el-illu-' + el).addClass('active');
			$('#section-features .container-bar .bar').removeClass('active-1 active-2 active-3').addClass('active-'+el);
		}

		setInterval(function() {
			if(!pauseFeatures) {
				animFeatures(numFeatures);
				numFeatures = numFeatures >= $('#section-features .li-el-desc .el-desc').length ? 1 : numFeatures+=1;
			}
			else {
				setTimeout(function() {
					pauseFeatures = 0;
				}, 10000);
			}
		}, 5000);

		//Click right arrow
		$('#section-features .wrapper .container-features .container-el-desc .container-bar .triangle-right').click(function(){
			if(pauseFeatures == 0) numFeatures-=1;
			numFeatures = numFeatures >= $('#section-features .li-el-desc .el-desc').length ? 1 : numFeatures+=1;
			animFeatures(numFeatures);
			pauseFeatures = 1;
		});

		//Click left arrow
		$('#section-features .wrapper .container-features .container-el-desc .container-bar .triangle-left').click(function(){
			if(pauseFeatures == 0) numFeatures-=1;
			numFeatures = numFeatures <= 1 ? $('#section-features .li-el-desc .el-desc').length : numFeatures-=1;
			animFeatures(numFeatures);
			pauseFeatures = 1;
		});
	}


	function animScroll() {
		var windowHeight = $window.height() / 1.5;
	    $('#section-features').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
	            if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	                $('#section-features .li-el-desc .el-desc:nth-child(1)').addClass('active');
					$('#section-features .el-illu-1').addClass('active');
					$('#section-features .container-bar .bar').addClass('active-1');
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	animScroll();

})