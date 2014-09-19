<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Twitter JSON</title>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<button type="button" class="tweetButton">Tweets!</button>
		<div class="tweetContainer">
			
		</div>
	</div>
</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.tweetButton').on('click', function(){
			$.getJSON('twitter.json', function(data){
				console.log(data);
				$('.tweetContainer').html(
					"<h2>"+data.user.name+"</h2>"+
					"<p>"+data.text+"</p>"+
					"<a href=\"https://twitter.com/"+data.user.screen_name+"/status/"+data.id+"\">Original tweet</a>");
			});
		});
	});
	</script>

	
</body>
</html>