(function( $ ) {
//setting the name of the function
	$.fn.slide = function() {
//setting a couple of variables
//$root is what will move, in this case the body
	var $root = $('html, body');
//target is what the root will move 
	var target = $( $(this).attr('href'));
	
	    $root.animate({
	        scrollTop: target.offset().top
	    }, 1000);
	    return false;

    };
 
}( jQuery ));

// 

	// $('a').on('click', function(event) {
	// 	event.preventDefault();

	// 	var target = $( $(this).attr('href'));

	// 	$("div.ipsum > div").hide();

	// 	target.fadeToggle( "slow");
	// });