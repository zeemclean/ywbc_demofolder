<?php
 
/*
____________________________________________________________________________________________
 
.-,--'            .                     ,.         .     ,.   ,.             .   .          
 \|__ . . ,-. ,-. |- . ,-. ,-. ,-.     / |   ,-. ,-|     `|  / ,-. ,-. . ,-. |-. |  ,-. ,-. 
  |   | | | | |   |  | | | | | `-.    /~~|-. | | | |      | /  ,-| |   | ,-| | | |  |-' `-. 
 `'   `-^ ' ' `-' `' ' `-' ' ' `-'  ,'   `-' ' ' `-^      `'   `-^ '   ' `-^ ^-' `' `-' `-' 
 
____________________________________________________________________________________________
                                                                             
                                                                             
// REVISION - syntax basics:
 
// A variable in PHP starts with $.
// A call to a function doesn't have the $, but is followed by ()
// A string (block of text) uses quote marks
// An integer (number) needs no quotes or anything. 
 
CREATING FUNCTIONS
 
// Here's what a function looks like when it is being defined:
 
function exampleFunction($parameter){
	// Do stuff with $parameter!
	// Return something!
}
 
// Here's what a function call looks like, sending in the string 'argument':
 
exampleFunction('argument');
 
// Here's the same thing, with the function's result saved to a variable,
// and it is also being called with a variable called $argument :
 
$exampleVariable = exampleFunction($argument);
 
// An argument is the value/variable/reference being passed into the function, 
// while the parameter is the receiving variable used within the function or block.
 
// They don't have to have the same name, which is why in these examples the 
// arguments are held in variables called $argument, and the parameters 
// are called $parameter. The value of arguments are passed into the function when 
// it is called, and become the value of parameters inside the function.
 
// You can also set multiple params, and arguments, by using a comma separated list:
 
function exampleFunction($parameter1, $parameter2){
	// Do stuff with $parameter1!
	// Do stuff with $parameter2!
	// Return something!
}
 
// And, you can pass in strings or integers as arguments, or define variables to pass in.
 
$argument2 = 'argument2';
exampleFunction('argument1', $argument2);
 
// If you want a parameter to be non-compulsory and have a default, set one in the 
// function definition:
 
function exampleFunction($parameter1, $parameter2 = 'default vaule'){
	// Do stuff with $parameter!
	// Return something!
}
 
// REMEMBER to call your function AFTER you have defined it!
 
// Now we're going to write some basic functions to check the data types of variables
// using the built-in PHP functions is_bool, is_array, is_string, is_integer .
 
*/
 
echo "<br />=====================  LEVEL 1 - BOOLEANS ============================== <br />";
 
// Make a variable that is equal to true, one that is equal to false, and one that is
// equal to the string 'totally not a boolean'. 
// Write a function that echos whether or not they are booleans, eg, you should see 
// 'The variable ?? is a boolean!' in your browser, with the ?? being the variable

// $notboolean = 'totally not a boolean';
// $trueboolean = true;
// $falseboolean = false;
// function checkBoolean($possible) {
	
// 	if (is_bool($possible)) {
// 		echo "The variable ".$possible." is a boolean!";
// 	}
// 	else {
// 		echo "This is not a boolean.";
// 	}

	

// }

// checkBoolean($notboolean);
// echo "<br>";
// checkBoolean($trueboolean);
// echo "<br>";
// checkBoolean($falseboolean);
 
 
 
echo "<br />=====================  LEVEL 2 - STRINGS ============================== <br />";
 
// Comment out the last level so it no longer runs!
// Do the same thing as the last level (make variables, create a function, try it out), 
// but with strings.
// You will need to make a variable that is a string, and one that isn't, to test it.
 
 // $monkeys = 'monkeys';
 // $penguins = 6;
 // $fruitcake = true;

 // function stringCheck($things) {
 // 	if(is_string($things)){
 // 		echo "the ".$things." is a string! <br>";
 // 	}
 // 	else{
 // 		echo $things." is not a string.<br>";
 // 	}
 // }

 // stringCheck($monkeys);
 // stringCheck($penguins);
 // stringCheck($fruitcake);

 
 
echo "<br />===================== LEVEL 3 - MULTIPLE INTEGERS ====================<br />";
 
// Comment out the last level so it no longer runs!
// Create a function to test THREE integers at once. All three parameters are required 
// (no defaults). Call it using variables or by defining the arguments within your function 
// call - eg, exampleFunction(4, 6, 8) . Your output should be 'The first variable ?? is an interger. The 
// second variable ?? not an integer. The third variable ?? is an interger.' or whatever
// your results are.
 
 // $penguins = 6;
 // $monkeys = 8;
 // $fruitcake = 'yummy';

 // function numberCheck($one, $two, $three){
 // 	if(is_integer($one)){
 // 		echo "The first variable ".$one." is an interger, <br>";
 // 	}
 // 	else {
 // 		echo "The first variable ".$one." is not an interger, <br>";
 // 	}
 // 		if(is_integer($two)){
 // 		echo "the second variable ".$two." is an interger, <br>";
 // 	}
 // 	else {
 // 		echo "the second variable ".$two." is not an interger, <br>";
 // 	}
 // 		if(is_integer($three)){
 // 		echo "and the third variable ".$three." is an interger. <br>";
 // 	}
 // 	else {
 // 		echo "and the third variable ".$three." is not an interger. <br>";
 // 	}
 // }

 // numberCheck($penguins, $fruitcake, $monkeys);
 
 
echo "<br />=====================  LEVEL 4 - ARRAYS ============================== <br />";
 
// Comment out the last level so it no longer runs!
// Define a function that tests if a single parameter is an array.
// Then, if it IS an array, add a loop that checks to see if each item is
// an array also.
// Your output should say 'This is not an array' OR 'This is an array' OR 'Oh
// my gosh this is a multi-dimensional array, a dream within a dream, we are 
// ALL GOING TO DIE'. Or something to that effect.
// Once again you will need to create the test variables for this.
// You may need to look up how to create arrays within arrays if you don't know
// or don't remember.


$partytime = array()




