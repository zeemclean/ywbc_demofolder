<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON Example</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	<a href="#" class="button">Get Data</a>
	<div id="data_container"></div>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('.button').on('click', function(){
			$.getJSON('mydata.php', function(data){
				console.log(data);
				$('#data_container').html("<p>My Name is "+data.firstName+" "+data.lastName+"</p><p>Today is a "+data.today);
			});
		});

	});

	</script>

</body>
</html>