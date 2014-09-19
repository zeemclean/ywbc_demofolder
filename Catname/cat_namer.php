<?php
 
/*
 
NAME THE CAT!
 
Complete this file in order to randomly decide on a new name for 
the Yoobee cat.
 
The comments in this file give you a rough idea, step by step,
of what you need to do. 
 
Writing out your functionality in comments before you write the code
can be a very helpful step in solving complex coding problems.
 
These step-by-step coding comments are called 'pseudo-code'.
 
Try to check where you're at after each step by viewing it in the browser, 
and using var_dump or echo on your variables.
 
*/
 
// Echo out a title for this page, such as "Cat name-o-matic":
echo '<h1>The Name-a-cat-o-tron</h1>';
 
// Define an array of possible cat names (at least 5), and assign 
// it to a variable, $possibleNames :

$possibleNames = array(
					'Eustus', 
					'Ragnar', 
					'Alphonse', 
					'Euripides', 
					'Jeff', 
					'Mister Cat', 
					'Colonel Herbert Von Fluffikins',
					'Phillipe',
					'Eduardo',
					'Senor Martini'

					);


//var_dump($possibleNames);
 
// Get the total number of names and assign it to a variable also:

$numberOfNames = count($possibleNames);

//var_dump($numberOfNames);
 
// Generate a random number between 0 and ONE LESS than the number of 
// items in your possibleNames array (see if you can work out why), 
// and assign it to a variable also

$randomNumber = rand(0, $numberOfNames - 1);

//var_dump($randomNumber);
 
// Now, using the random number to choose which array item will be the
// cat's name, complete the following sentence:
// "There were ??? possible names, but I will name the cat ???? !"
// (remember that array items can be referred to like: $possibleNames[5])
// If your code is working, the cat will have a different name every time 
// the page loads! 
 
 echo "There were ".$numberOfNames." possible names, but I will name the cat ".$possibleNames[$randomNumber]."!";
 
// If you have time, add in some HTML content before and after the title 
// and output, so you can style it.