<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success</title>
</head>
<body>


	<?php

	echo "<h1>Success! You've made it!</h1>";

	echo "Thanks, ".$_POST['firstName']." ".$_POST['lastName'];
	echo "<br>";

	echo "Looks like your favourite animal is a ".$_POST['animals'];
	echo "<br>";
	echo "We received your message on ".date('jS M Y');

	?>
	
</body>
</html>