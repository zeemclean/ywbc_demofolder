<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON Example</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
<!-- 61218921@N03 -->
    <input type="text" id="user">
	<a href="#" class="button">Get Images</a>
	<div id="data_container"></div>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('.button').on('click', function(){
			var userName = $('#user').val();
			console.log(userName); 

			getImages(userName);
			
		});

		function getImages(userName){

			$.ajax({
				type: 'GET',
				url: 'https://api.flickr.com/services/feeds/photos_public.gne',
				data: 'id='+userName+'&format=json&jsoncallback=?',
				success: function(feed) {
					console.log(feed);
					$('#data_container').html('<p class="photographer">'+feed.title+'</p>');
					
					var thumbs =[];

					$.each(feed.items, function(i, item){
					
						var imgs =(item.media.m).replace(/^(.*?)_m\.jpg$/,'<a href="$1.jpg"><img src="$1_s.jpg"/></a>');

						thumbs.push(imgs);
						
					});
					$('#data_container').html(thumbs.join(''));
				},
				dataType:'jsonp'
			})
		}

	});

	</script>

</body>
</html>