<?php

$blocks = array('red', 'blue', 'green', 'yellow');
function createBlocks($el) {


	foreach ($el as $block) {
		$result .= "<div class='block block_".$block."'><span>".$block."</span></div>";
		
	}

	return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sassy Php</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
 <main>
 
 	<?php
 	$blockEl = createBlocks($blocks);
 	echo $blockEl;
 	?>
 </main>
	
</body>
</html>