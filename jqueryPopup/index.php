<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Popup</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="js/each.js"></script>
</head>
<body>
	<main>
		<h1>Hello World</h1>
		

		<p id="releaseDate">  </p>
		


		<ul class="list">
			<li class="item">item 1</li>
			<li class="item">item 2</li>
			<li class="item">item 3</li>
			<li class="item">item 4</li>
			<li class="item">item 5</li>
		</ul>
		<a href="#" class="button button_open">Click Me!</a>
		<?php
		include('includes/popup.php');
		?>
	</main>
</body>
</html>