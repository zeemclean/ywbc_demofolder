<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Form Demo</title>
</head>
<body>
<form action="success.php" method="post">
	<label for="firstName">First Name : </label>
	<input type="text" name="firstName" id="firstName">
	<br>
	<label for="lastName">Last Name : </label>
	<input type="text" name="lastName" id="lastName">
	<br>


	<label> What is your faourite?</label>
	<br>
	<input type="radio" name="animals" id="dog" value="dog">
	<label for="dog">Dog</label>
	<br>

	<input type="radio" name="animals" id="cat" value="cat">
	<label for="cat">Cat</label>
	<br>

	<input type="submit" value="Submit" name="submit">

</form>

 <?php

 	echo date(' jS M Y');

 	?>
	
</body>
</html>