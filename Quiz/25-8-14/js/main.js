$(document).ready(function(){
 getPeople();
});

function getPeople(){
	$.getJSON('people.json', function(data){
		console.log(data);
		$.each(data.People, function(i, value){
			console.log(value);
			// Alternate Method
			// may want to make the things you're outputting into variables to make it easier
			// eg. name = value.name

			//var item = "<li class='item' data-description='"+descripttion+"'>"+ name + "</li>";
			// $('#example').append(item);


			$('#example').append(
				"<li><a class=\"namelink\" href=\"#"+i+"\">"+
				value.name+"</a></li>"
			);
			$('.description').append(
				"<div id=\""+i+"\" style=\"background-color:"+value.hash+"; display:none;\" >"+
				"<p>"+value.description+"</p></div>"
			);

		})
		$('.namelink').on('click', function(event){
			event.preventDefault();
			var namepanel = $($(this).attr('href'));
			namepanel.slideToggle();
		})
		
	});

}