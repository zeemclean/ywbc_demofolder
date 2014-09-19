<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Miffles</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
</head>
<body>

<header>
	<h1>Miffles</h1>
</header>

<div class="container">
	<div class="row">
		<div class="jumbotron thoughtbox">
			<?php
             require_once('miffles_data_base.php');

             $numberOfThoughts = count($miffles_data['thoughts']);
             $randomNumber = rand(0, $numberOfThoughts - 1);

             echo "<h1 class='thought'>".$miffles_data['thoughts'][$randomNumber]."</h1>"



			?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h2>Facts About Miffles</h2>
			
			<?php
			echo '<ul>';
			foreach($miffles_data['facts'] as $factoid){
				echo "<li>".$factoid."</li>";
			}
			echo'</ul>';

			?>

		</div>
		<div class="col-md-6">
			<h2>Plans for the Future</h2>
			
			<?php
			echo '<ol>';
			foreach($miffles_data['plans'] as $plan){
				echo "<li>".$plan."</li>";
			}
			echo'</ol>';

			?>

		</div>
	</div>


</div>
	



<footer>
	<h1>Miffles Contact</h1>
</footer>




	
</body>
</html>

<?php
 
/*
    |\|\
   ..    \       .
 o--     \\    / @)
  v__///\\\\__/ @
    {           }
     {  } \\\{  }
     <_|      <_|
 
MIFFLES
 
Miffles is a dog, belonging to your eccentric (crazy) client. 
 
Your client wants you to make a web page about Miffles, styled using 
Bootstrap, because 'my friend said I need a Bootstrap'. The main colors
are 'Instagram blue' and 'T Mobile pink', so google those.
 
Your client did computer science once in the 80's and has made a PHP 
array with a lot of information in it, and refers to this single file 
as 'The Data Base', mainly because it sounds cool. The data base
does not work right now so you'll need to fix it.
 
They want the page to say Miffles at the top, then have a big panel that
has a different 'thought' from Miffles in it each time the page loads.
The thoughts are to be pink on a blue background. These are included 
in the 'data base'. The site should mainly be black and white otherwise.
 
Then they want two columns, one with facts about Miffles, and one with 
Miffle's plans for the future. These are also in the database. These 
should be in lists - the facts in an unordered list <ul> and the plans 
in an ordered list <ol>.
 
Then, a footer with Miffle's contact info.
 
Your client is only paying you by letting you walk Miffles, so don't spend 
much time on the design.
 
Download this file and the 'data base' and get coding...
 
*/
 
