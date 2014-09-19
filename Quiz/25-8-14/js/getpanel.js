(function( $ ) {
	$.fn.getPanel= function {
		$.getJSON('people.json', function(data){
			$.each(data.People, function(i, value){
				
			})
		})

	}
})