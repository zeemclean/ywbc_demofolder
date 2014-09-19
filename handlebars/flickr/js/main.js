$(document).ready(function(){
	$('button').on('click', function(event){
		event.preventDefault();
		var tag = $('#user_tags').val();
		console.log(tag);
		getImages(tag);

		
	})
	
});

function getImages(tag){
	$.ajax({
			type: 'GET',
			url: 'https://api.flickr.com/services/feeds/photos_public.gne',
			data: 'tags='+tag+'&format=json&jsoncallback=?',
			success: function(feed) {
				console.log(feed);
				var source = $('#flickr-template').html();
				var template =Handlebars.compile(source);

				$('body').append(template(feed));
			
			}, dataType: 'jsonp'

	});
}