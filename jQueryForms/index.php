<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Form Demo</title>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="success.php" method="post">
	<label for="name">Name : </label>
	<input class="textInput" type="text" name="name" id="name">
	<br>
	<label for="email">Email : </label>
	<input class="textInput" type="text" name="email" id="email">
	<br>


	<label for="comment">Comment</label>
	<br>
	<input class="textInput" type="text" name="comment" id="comment">
	
	<br>


	<input class="textInput" type="submit" value="Submit" name="submit">

</form>

	
</body>
</html>