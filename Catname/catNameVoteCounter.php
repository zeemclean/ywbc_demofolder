<?php
 
/*
 
	Cat name vote counter
	Requires the file catNameVotes.php
 
	Counts the votes and creates a two dimensional array
	with the name as they key, and the number as the 
	variable.
 
	e.g: $catNameTotalVotes = array('elizabeth' => 62, 'billybob' => 49);
 
	You will need to:
 
	- aquire the votes file (done for you)
	- Create an empty array called $catNameTotalVotes to put your results in.
	- Start a foreach loop on the $catNameVotes array (in the other file)
	- For each cat name vote as name, you'll need to:
		- Check if the name is already in the array as a key 
			- If it is, increase its variable (the vote count) by 1
			- if it isn't, add it to the array as a key, with a vote count of one.
 
	After the for each loop, var_dump your total votes to check if they are the same 
	as the previous excercise.
 
	HINTS:
 
	- To create a new item in an array with a string as the key, put the array name, then the
	  key in square brackets, then make it equal to the value. eg 
		$catNameTotalVotes[$name] = 1;
 
	- The built-in function to find out if something is in an array is very well named!
	 BUT! the function in_array will only find a match for the '$name' variable alone if it
	 was a single dimensional array. There is another function for finding out it an
	 array key exists.
 
	- Just as using .= adds something to an existing string, += adds an integer (number) to an existing 
	integer.
 
	You can then include the vote comparison function we wrote earlier to complete the excercise.
 
*/
 
require_once ('catNameVotes.php');

//I want an array with the cat name as the key and the number of votes as the variable


$catNameTotalVotes = array();




foreach($catNameVotes as $name) {
    


	if(array_key_exists($name, $catNameTotalVotes))
	{
		$catNameTotalVotes[$name] += 1;
	}
	else {
		$catNameTotalVotes[$name] = 1;	
	}


}

foreach($catNameTotalVotes as $name => $vote)
	{
		echo $name.' got '.$vote.' votes.<br> ';	
	}


