<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<main>
		<?php 
			$animals = array('llama', 'pigeon', 'elephant', 'cat', 'owl');


			foreach ($animals as $name) {
				$result .= "<div class='animal animal_".$name."'>".$name."</div>";

			}
			echo $result;
		 ?>
	</main>
</body>
</html>