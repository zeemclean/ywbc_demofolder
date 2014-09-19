<?php
 
/*
 
Cat name vote results!
 
In order to name the cat, we've taken it to a popular vote.
 
The results are represented in a two dimensional array below.
 
Work out which cat has the most votes using PHP and echo out the winner!
The statement should tell the cat name AND the number of votes.
 
TWO DIMENSIONAL ARRAYS
 
A 2d array consists of a key and a variable, the key can be an integer or a string.
The variable can be anything at all.
 
To foreach through a 2d array, you need to name each component, eg:
foreach($itemInArray as $key => $variable ) {};
 
Or in this case:
foreach($catNameTotalVotes as $name => $numberOfVotes){};
 
Remember, we want to remember which cat is the highest so far
and how many votes that cat has. You might want to create some empty
variables for this BEFORE you start your loop.
 
You will then need to use an IF statement to ask if the number of votes the name has
is more than the stored highest number of votes, THEN replace the stored variables with
the current name and votes.
 
*/
 
// Here's another way of defining an array, adding it bit by bit:
$catNameTotalVotes 	= array();
					// INDEX or KEY:    // VARIABLE:
$catNameTotalVotes['King Arthur'] 	    = 90;
$catNameTotalVotes['Davey Jones'] 	    = 10; 
$catNameTotalVotes['Macklemore'] 		= 230; 
$catNameTotalVotes['Kanye'] 			= 460;
$catNameTotalVotes['Sourpuss'] 		    = 490; 
$catNameTotalVotes['Ginger Spice']   	= 400; 
$catNameTotalVotes['Applejack'] 		= 280;




$highestVote = 0;

$topName = "";

$favourite = 'Applejack';



foreach($catNameTotalVotes as $name => $numberOfVotes)
{

	//Compare $numberOfVotes with $highestVote to see if it's higher
	if($numberOfVotes > $highestVote){

	
	//If it is higher, replace $highestVote with the new one ($numberOfVotes)
		$highestVote = $numberOfVotes;
	//also store the current name as $topName
		$topName = $name;

		}

	if($name == $favourite){
		echo $name . ' is my favourite and got '.$numberOfVotes. ' votes.';

	}	


};

echo "...and the winner is ".$topName." with ".$highestVote." votes!";









