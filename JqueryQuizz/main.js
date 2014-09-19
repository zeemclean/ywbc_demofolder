$(document).ready(function() {

	$('.button').click(function(){
	event.preventDefault();
	$('.box h1').css('color', 'red');
});
});
// $('.button').click(function(){
// 	event.preventDefault();
// 	$('.box').hide();	
// 	setTimeout(function(){
// 	$('.box').show();
// 	}, 1000);
// });
// });