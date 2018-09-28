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
	

	/* QUOTE ANIM FUNCTION & INIT */

	//Function
	function animQuote(num) {
		let container = '#section-quotes .wrapper .container-el .el';
		if(!$(container + ':nth-child('+num+')').hasClass('active')) {

			$(container).removeClass('active');
			
			setTimeout(function(){
				
				$(container).show();
				for( let i=1 ; i <= $(container).length ; i++ ) {
					if(i != num) {
						$(container + ':nth-child('+i+')').hide();
					}
				}

				$(container + ':nth-child('+num+')').addClass('active');

			}, 500)
		}
	}
	
	//Initialisation
	for( let i=2 ; i <= $('#section-quotes .wrapper .container-el .el').length ; i++ ) {
		$('#section-quotes .wrapper .container-el .el:nth-child('+i+')').hide();
	}

	let numQuote = 1;
	let pauseQuote = 0;

	//Anim auto
	setInterval(function() {
		if(!pauseQuote) {
			animQuote(numQuote);
			numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1;
		}
		else {
			setTimeout(function() {
				pauseQuote = 0;
			}, 10000);
		}
	}, 5000);

	//Click right arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(1)').click(function(){
		do {
			numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1;
		} while( $('#section-quotes .wrapper .container-el .el:nth-child('+numQuote+')').hasClass('active') );
		animQuote(numQuote);
		pauseQuote = 1;
	});

	//Click left arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(2)').click(function(){
		do {
			numQuote = numQuote <= 1 ? $('#section-quotes .wrapper .container-el .el').length : numQuote-=1;
		} while( $('#section-quotes .wrapper .container-el .el:nth-child('+numQuote+')').hasClass('active') );
		animQuote(numQuote);
		pauseQuote = 1;
	});

	/* END QUOTE ANIM */


	/* TEAM FUNCTION & INIT */

	//Function
	function animTeam(num) {
		//$('#section-team .wrapper .container-carousel .container-el .el').toggleClass('active');

		let container = '#section-team .wrapper .container-carousel .container-el .el';
		if(!$(container + ':nth-child('+num+')').hasClass('active')) {

			$(container).removeClass('active');
			
			setTimeout(function(){
				
				$(container).show();
				for( let i=1 ; i <= $(container).length ; i++ ) {
					if(i != num && i != (num-1) && i != (num-2)) {
						$(container + ':nth-child('+i+')').hide();
					}
				}

				for( let pos = num ; pos >= (num - 2) ; pos-- ) {
					$(container + ':nth-child('+pos+')').addClass('active');
				}

			}, 1000)
		}
	}

	//Initialisation
	for( let i=4 ; i <= $('#section-team .wrapper .container-carousel .container-el .el').length ; i++ ) {
		$('#section-team .wrapper .container-carousel .container-el .el:nth-child('+i+')').hide();
	}

	let numTeam = 3;
	let pauseTeam = 0;

	//Anim auto
	setInterval(function() {
		if(!pauseTeam) {
			animTeam(numTeam);
			numTeam = numTeam >= ($('#section-team .wrapper .container-carousel .container-el .el').length) ? 3 : numTeam+=3;
		}
		else {
			setTimeout(function() {
				pauseTeam = 0;
			}, 10000);
		}
	}, 5000);

	//Click right arrow
	$('#section-team .wrapper .container-carousel .container-nav .nav:nth-child(1)').click(function(){
		do {
			numTeam = numTeam >= ($('#section-team .wrapper .container-carousel .container-el .el').length) ? 3 : numTeam+=3;
		} while( $('#section-team .wrapper .container-carousel .container-el .el:nth-child('+numTeam+')').hasClass('active') );
		animTeam(numTeam);
		pauseTeam = 1;
	});

	//Click left arrow
	$('#section-team .wrapper .container-carousel .container-nav .nav:nth-child(2)').click(function(){
		do {
			numTeam = numTeam < 3 ? ($('#section-team .wrapper .container-carousel .container-el .el').length) : numTeam-=3;
		} while( ($('#section-team .wrapper .container-carousel .container-el .el:nth-child('+numTeam+')').hasClass('active')) || numTeam < 3 );
		animTeam(numTeam);
		pauseTeam = 1;
	});

	/* END TEAM ANIM */
})