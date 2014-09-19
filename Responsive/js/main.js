$(document).ready(function() {

	$('.button').on('click', function(event) {
		event.preventDefault();

		$('.main_nav').slideToggle("slow");
	});

	$(window).on('resize', function() {
		//set the variable of the window,
		var self = $(this);
		//get the width of the window as it resizes,
		var winWidth = self.outerWidth();
		//check if the window width is greater or equal to 768px,
		if ( winWidth >= 768 ) {
			//if it is, remove the style attribute from the nav.
			$('.main_nav').removeAttr('style');
		}


	});
});