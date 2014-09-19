$(document).ready(function(){
	
	getImages();




	$('#gallery_show').on('click', function(){
		$('.thumb_window').slideToggle('slow');
	});

	

});

function getImages() {
	$.ajax({
		type: 'GET',
		url: 'imagepi.php',
		success: function(feed){
			console.log(feed);
			$.each(feed, function(i, link){
				console.log(link);
				var thumbnail = "<img src=\"images/"+link+"\" alt=\"img\" class=\"thumb\" />";
				$(".thumb_container").append(thumbnail);				
			});
			
			$(".thumb").mouseover(function(){
				var image = $(this).attr("src");
				$("body").css("background-image", "url("+image+")");
			});



			$('.thumb').on('click', function(){
				// Removing any previously created one
				$('.downloader').remove();
				// Get the image file name:
				var img = $(this).attr('src');
				// start composing some html:
				var newdiv  = "<div class=\"downloader col-md-8 col-md-offset-2\">";
				newdiv += "<h2>You've chosen "+ img +"!</h2>";
				newdiv += "<a href=\"" + img + "\" download><h4>Click here to download</h4></a>";
				newdiv += "<br /><button class=\"downloadRemover btn\">Close this</button>";
				newdiv += "</div>";
				$('.dlholder').append(newdiv);
		 
				$('.downloadRemover').on('click', function(){
					$('.downloader').remove();
				});
			});
		},
		dataType: 'json'
	})
}