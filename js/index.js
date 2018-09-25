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


	/* QUOTE UNIQUE FUNCTION & INIT */

	//Function
	function animQuoteSolo(num) {
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

	let numQuoteSolo = 1;

	//Anim auto
	setInterval(function() {
		setTimeout(function() { //preparation pause
			animQuoteSolo(numQuoteSolo);
			numQuoteSolo = numQuoteSolo >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuoteSolo+=1
		}, 0);
	}, 5000);

	//Click right arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(1)').click(function(){
		numQuoteSolo+=1;
		numQuoteSolo = numQuoteSolo >= $('#section-quotes .wrapper .container-el .el').length ? 1 : numQuoteSolo;
		console.log(numQuoteSolo);
	});

	//Click left arrow
	$('#section-quotes .wrapper .container-nav .nav:nth-child(2)').click(function(){
		numQuoteSolo-=1;
		numQuoteSolo = numQuoteSolo <= 0 ? $('#section-quotes .wrapper .container-el .el').length : numQuoteSolo;
		console.log(numQuoteSolo);
	});

	/* END QUOTE UNIQUE */



	/**/
	function animQuotesMulti(num) {

	}
	/**/
})