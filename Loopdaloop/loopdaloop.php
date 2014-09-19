<?php
 
/*
LOOP DE LOOP!
 
So far we have just been looping through arrays with foreach.
 
Although this is the most common, there are other ways to do it.
 
You will see all of these in the wild at different points - which one
you use is sometimes a matter of efficiency, or readability, but is often
a matter of your personal code style and the coding standards
set by your team or the framework you're using.
 
BONUS POINTS ONCE YOU'VE FINISHED: The client now wants pipes (the | character)
between nav items - but only between! Put this into at least one loop also.
 
*/
 
// Here's an array for a nav so simple we don't need separate slugs.
 
$navLinks = array('home', 'about', 'contact', 'shop', 'products');
 
// Your client has said that in the text of the link, they want to make the
// shop say 'Our shop', and the products say 'Products NEW!', but do not want to 
// change the slugs. Also, you can't change the array.
 
// Here's foreach loop that echos them out, as they are now, and adds a capital
// to the start using ucfirst().
 
// Finish the function using if, else, and elesif if you want, to implement the 
// new logic.
 
echo "<br />=========================   LEVEL 1 =====================================<br />";
 

foreach($navLinks as $navItem) {


	if($navItem == 'shop'){
		echo "<br /><a href='/{$navItem}'>".ucfirst('Our '.$navItem)."<a>";
	}
	elseif($navItem == 'products'){
		echo "<br /><a href='/{$navItem}'>".ucfirst($navItem.' NEW!')."<a>";
	}
	else{
		echo "<br /><a href='/{$navItem}'>".ucfirst($navItem)."<a>";
	}

}

 
 
echo "<br />=========================   LEVEL 2 =====================================<br />";
 
// Next, we're going to do it using a switch case inside the foreach loop.
// Don't forget to add a default.
 

foreach($navLinks as $navItem) {
	switch("$navItem") {
		
		case 'shop':
		echo "<br /><a href='/{$navItem}'>".ucfirst("Our ".$navItem)."<a>";
		break;
		
		case 'products':
		echo "<br /><a href='/{$navItem}'>".ucfirst($navItem." NEW!")."<a>";
		break;

		default:
		echo "<br /><a href='/{$navItem}'>".ucfirst($navItem)."<a>";

	}

 
 
}
 

 
 
echo "<br />=========================   LEVEL 3 =====================================<br />";
 
// This time, use a for loop, and your if / else logic, or switch case.
// Remember how to use an integer to refer to an item in an array?
 

 
// This is just an EXAMPLE of a for loop:
$maximum = count($navLinks) -1; 

for ($x=0; $x<=$maximum; $x++) {

 		switch("$navLinks[$x]") {

 		case 'shop':
		echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst("Our ".$navLinks[$x])."<a>";
		break;
		
		case 'products':
		echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x]." NEW!")."<a>";
		break;

		default:
		 echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x])."<a>";
		}

} 
 

 
 
echo "<br />=========================   LEVEL 4 =====================================<br />";
 
// Use a while loop, as below, and your if/else functions, to acheive the same ends.
// If you want to, you can crash your local server by making this run infinitely!
 

 
$x=0; 
$maximum = count($navLinks) -1;
 
while($x<= $maximum) {
  if($navLinks[$x] == 'shop') {
  	echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst("Our ".$navLinks[$x])."<a>";
  }
  elseif($navLinks[$x] == 'products'){
  	echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x]." NEW!")."<a>";
  }
  else{
  	 echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x])."<a>";
  }
  $x++;
} 
 

 
 
echo "<br />=========================   LEVEL 5 =====================================<br />";
 
// Lastly, add a while / do loop. You'll have to google for how to do this.


$x=0;
$maximum = count($navLinks) -1;

do {
	if($navLinks[$x] == 'shop') {
  	echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst("Our ".$navLinks[$x])."<a>";
  }
  elseif($navLinks[$x] == 'products'){
  	echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x]." NEW!")."<a>";
  }
  else{
  	 echo "<br /><a href='/{$navLinks[$x]}'>".ucfirst($navLinks[$x])."<a>";
  }
  
  $x++;

} 

while ($x<=$maximum);






