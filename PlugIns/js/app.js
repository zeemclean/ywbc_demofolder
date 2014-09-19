$(document).ready(function(){
	// Here's the greenify function:
	
	$('.colorize').on('click', function(){
		var newColor = $(this).data('color');
		$( this ).parent().colorize({
		    // This is our default:
		    color: newColor
		});
	});
	// This will do the links:
	$('.linkify').on('click', function() {
		$( "nav a" ).showLinkLocation();
		$('.linkify').off();
	});


	$('a').on('click', function(event) {
		event.preventDefault();
		$(this).slide();
	});
	
});