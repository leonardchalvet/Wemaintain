$(window).on('load', function() {
	
	$('#section-sponsors').addClass('reach');
	

	/* QUOTE ANIM FUNCTION & INIT */

	//Function
	function animQuote(num) {

		let container = '#section-quotes .wrapper .container-el .el';

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
	
	//Initialisation
	for( let i=2 ; i <= $('#section-quotes .wrapper .container-el .el').length ; i++ ) {
		$('#section-quotes .wrapper .container-el .el:nth-child('+i+')').hide();
	}

	var numQuote = 2;
	let pauseQuote = 0;
	let firstAnimQuote = 0;

	//Anim auto
	setInterval(function() {
		if(!pauseQuote) {
			animQuote(numQuote);
			numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1;
		}
		else {
			setTimeout(function() {
				pauseQuote = 0;
				numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1;
			}, 10000);
		}
	}, 5000);

	//Click right arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(1)').click(function(){

		for( let i=1 ; i <= $('#section-quotes .wrapper .container-el .el').length ; i++ ) {
			if($('#section-quotes .wrapper .container-el .el:nth-child('+i+')').hasClass('active')) {
				numQuote = i >= $('#section-quotes .wrapper .container-el .el').length ? 1 : i+1;
			}
		}

		animQuote(numQuote);
		pauseQuote = 1;
	});

	//Click left arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(2)').click(function(){

		for( let i=1 ; i <= $('#section-quotes .wrapper .container-el .el').length ; i++ ) {
			if($('#section-quotes .wrapper .container-el .el:nth-child('+i+')').hasClass('active')) {
				numQuote = i <= 1 ? $('#section-quotes .wrapper .container-el .el').length : i-1;
			}
		}

		animQuote(numQuote);
		pauseQuote = 1;
	});

	/* END QUOTE ANIM */


	/* TEAM FUNCTION & INIT */

	//Function
	function animTeam(num, md) {
		//$('#section-team .wrapper .container-carousel .container-el .el').toggleClass('active');

		let container = '#section-team .wrapper .container-carousel .container-el .el';
		if(!$(container + ':nth-child('+num+')').hasClass('active')) {

			$(container).removeClass('active');
			
			setTimeout(function(){
				
				$(container).show();
				for( let i=1 ; i <= $(container).length ; i++ ) {
					if( ( i != num && i != (num-1) && i != (num-2) ) || ( i != num && md==1 ) )  {
						$(container + ':nth-child('+i+')').hide();
					}
				}

				if(md == 3) {
					for( let pos = num ; pos >= (num - 2) ; pos-- ) {
						$(container + ':nth-child('+pos+')').addClass('active');
					}
				}
				else if(md = 1) {
					$(container + ':nth-child('+num+')').addClass('active');
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
	let firstanimTeam = 0;

	let lengthTeam = 3;
	if (window.matchMedia("(max-width: 700px)").matches) {
		lengthTeam = 1;
		numTeam = 0;

		$('#section-team .wrapper .container-carousel .container-el .el:nth-child(2)').removeClass('active').hide();
		$('#section-team .wrapper .container-carousel .container-el .el:nth-child(3)').removeClass('active').hide();
	}

	//Anim auto
	setInterval(function() {
		if(!pauseTeam) {
			animTeam(numTeam, lengthTeam);
			numTeam = numTeam >= ($('#section-team .wrapper .container-carousel .container-el .el').length) ? lengthTeam : numTeam+=lengthTeam;
		}
		else {
			setTimeout(function() {
				pauseTeam = 0;
				numTeam = numTeam >= ($('#section-team .wrapper .container-carousel .container-el .el').length) ? lengthTeam : numTeam+=lengthTeam;
			}, 10000);
		}
	}, 5000);

	//Click right arrow
	$('#section-team .wrapper .container-carousel .container-nav .nav:nth-child(1)').click(function(){
		
		for( let i=1 ; i <= $('#section-team .wrapper .container-carousel .container-el .el').length ; i++ ) {
			if($('#section-team .wrapper .container-carousel .container-el .el:nth-child('+i+')').hasClass('active')) {
				numTeam = i >= ($('#section-team .wrapper .container-carousel .container-el .el').length) ? lengthTeam : i+lengthTeam;
			}
		}

		animTeam(numTeam, lengthTeam);
		pauseTeam = 1;
	});

	//Click left arrow
	$('#section-team .wrapper .container-carousel .container-nav .nav:nth-child(2)').click(function(){
		console.log(numTeam);
		for( let i=1 ; i <= $('#section-team .wrapper .container-carousel .container-el .el').length ; i++ ) {
			if($('#section-team .wrapper .container-carousel .container-el .el:nth-child('+i+')').hasClass('active')) {
				numTeam = i <= lengthTeam ? ($('#section-team .wrapper .container-carousel .container-el .el').length) : i-lengthTeam;
			}
		}
		console.log(numTeam);
		animTeam(numTeam, lengthTeam);
		pauseTeam = 1;
	});

	/* END TEAM ANIM */

	/* SCROLL */
	$window.scroll(function() {

	    const offsetTopSectonTeam  = $('#section-team').offset().top;
	    const offsetTopSectonQuote = $('#section-quotes').offset().top;
		const wHeight = $( window ).height();

		/* A FINIR 
	    if ( $window.scrollTop() + (wHeight/2) >= offsetTopSectonTeam ) {
	    	if(!$('#section-team').hasClass('reach') || !firstanimTeam) {
	    		animTeam(numTeam); 
	    		firstanimTeam = 1;
	    	}
	    }

	    if ( $window.scrollTop() + (wHeight/2) >= offsetTopSectonQuote ) {
	    	if(!$('#section-quotes').hasClass('reach') || !firstAnimQuote) {
	    		animQuote(numQuote);
	    		firstAnimQuote = 1;
	    	}
	    }*/
	});
})