$(document).ready(function(){
	function getTwitterstatus(){
		$.getJSON('twitter.json', function(data){
			console.log(data);
		// 	$('.tweetContainer').html(
		// 		"<h2>"+data.user.name+"</h2>"+
		// 		"<p>"+data.text+"</p>"+
		// 		"<a href=\"https://twitter.com/"+data.user.screen_name+
		// 		"/status/"+data.id+"\">Original tweet</a>");
		// });
		var source = $('#twitter-template').html();
		var template = Handlebars.compile(source);
		$('body').append(template(data));
	});
	}
	$('#tweetbtn').on('click', function(){
		getTwitterstatus();
	});
	function getStudentGrades(){
		$.getJSON('students.json', function(data){
			console.log(data);
		var source = $('#student-template').html();
		var template = Handlebars.compile(source);
		$('body').append(template(data));
	});
	}
	$('#gradebtn').on('click', function(){
		getStudentGrades();
	});
	
});