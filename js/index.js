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

	/*$('body').click(function(){
		$('#section-team .wrapper .container-carousel .container-el .el').toggleClass('active');
		$('#section-quotes .wrapper .container-el .el').toggleClass('active');
	})*/


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

	//Anim auto
	setInterval(function() {
		animQuote(numQuote);
		numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1;
	}, 5000);

	//Click right arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(1)').click(function(){
		do {
			numQuote = numQuote >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuote+=1
		} while( $('#section-quotes .wrapper .container-el .el:nth-child('+numQuote+')').hasClass('active') );
		animQuote(numQuote);
	});

	//Click left arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(2)').click(function(){
		do {
			numQuote = numQuote <= 1 ? $('#section-quotes .wrapper .container-el .el').length : numQuote-=1;
		} while( $('#section-quotes .wrapper .container-el .el:nth-child('+numQuote+')').hasClass('active') );
		animQuote(numQuote);
	});

	/* END QUOTE ANIM */



	/* TEAM FUNCTION & INIT */
	function animTeam(num) {

	}
	/* END TEAM ANIM */
})