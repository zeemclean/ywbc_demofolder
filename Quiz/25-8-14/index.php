<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<header class="mainheader">
	<nav class="navbar navbar-default" role="navigation">
		<ul class="nav navbar-nav">
			<li><a class="nav" href="#carousel">Carousel</a></li>
			<li><a class="nav" href="#JSON">JSON/JS</a></li>
			<li><a class="nav" href="#CSS">CSS</a></li>
		</ul>
	</nav>
</header>
<body>
<div class="container">
	<div class="section" >
		<div class="row">
			<div id="carousel" class="col-md-12 carousel slide" data-ride="carousel">
			<!-- indicators -->
				<ol class="carousel-indicators">
					<li data-target="image1"></li>
					<li data-target="image2"></li>
				</ol>
				<!-- slide warpper -->
				<div class="carousel-inner">
					<div class="active item">
						<img src="images/BrokenBulb.png" alt="broken bulb">
						<div class="carousel-caption">
							<h1>Mind-blowing Ideas</h1>
							<p></p>
							
						</div>
					</div>
					<div class="item">
						<img src="images/mountain-twilight.jpg" alt="">
						<div class="carousel-caption">
							<h3>It's a big, old, beautiful world out there...</h3>
							<h1>Go get lost.</h1>
						</div>
					</div>
				</div>
				<!-- controls -->
				<a class="left carousel-control" href="" role="button" data-slide="prev">
   				 <span class="glyphicon glyphicon-chevron-left"></span>
 				</a>
  				<a class="right carousel-control" href="" role="button" data-slide="next">
   				 <span class="glyphicon glyphicon-chevron-right"></span>
  				</a>
			</div>
		</div>
	</div>
	<div class="section" id="JSON">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>JSON & JS</h1>
				<ul>
					<li>
						<h4>What does JSON stand for?</h4>
						<p>JavaScript Object Notation</p>
					</li>
					<li>
						<h4>what is an API?</h4>
						<p> An API, or application programming interface is a
						 set of functions and prodcedures that can be used to 
						 access and transfer data.</p>
					</li>
					<li>
						<h4>How do these work together?</h4>
						<p>JSON is a lightweight form of database coding that is easily read.
						 With an API we can access JSON infromation and manipulate it easily.</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>Example:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<ol id="example"></ol>
			</div>
			<div class="col-md-9 description">
			</div>
		</div>
	</div>
	<div class="section" id="CSS">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4>Animation Timing Functions</h4>
				<ol>
					<li>Linear</li>
					<li>Ease</li>
					<li>Cubic-Bezier</li>
				</ol>
				<h4>CSS Browser Prefixes</h4>
				<ol>
					<li>-webkit-</li>
					<li>-moz-</li>
					<li>-ms-</li>
				</ol>
			</div>
		</div>
		<div class="box-box col-md-4 col-md-offset-4">
			<div id="box"></div>
		</div>
	</div>
</div>

	
</body>
</html>