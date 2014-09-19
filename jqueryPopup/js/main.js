$(document).ready(function(){
	
	
	var releaseDate = new Date("November 12, 2015").getTime();


	var days,
		hours,
		minutes,
		seconds;

	var countdown = $('#releaseDate');

	
	setInterval(function(){

	var currentDate = new Date().getTime();

	var secondsLeft = (releaseDate - currentDate) / 1000;

	days = parseInt(secondsLeft / 86400);

	secondsLeft = secondsLeft % 86400;

	hours = parseInt(secondsLeft / 3600);
	secondsLeft = secondsLeft % 3600;

	minutes = parseInt(secondsLeft / 60);
	seconds = parseInt(secondsLeft % 60);


	countdown.html(days + " days, " + hours + " hours, " + minutes + " minutes and " + seconds + " seconds until release.");




	}, 1000);






	// $('.button_open').on('click', function(event){
	
	// 	event.preventDefault();

	// 	//$('#popup').show();

	// 	$('#popup').addClass('show')
	// });

	// $('.button_close').on('click', function(event){
	
	// 	event.preventDefault();

	// 	//$('#popup').hide('slow');

	// 	$('#popup').addClass('hide');
		
	// 	setTimeout(function(){
	// 		$('#popup').removeClass('show hide');

	// 	}, 500);

	// });

});