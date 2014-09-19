<?php
 
/***
 
Connecting to a database!
 
This time we are going to create a database called 'exampledb' and connect to it.
 
======================== LEVEL 1 ==========================
 
Create a new database on your local server using PHPMYadmin.
 
Call it exampledb
 
Add the following tables. In addition to the fields listed below, each table 
should have a first column called ID which has a primary key index and auto
increment.
 
Remember to choose the right datatypes (varchar for short bits of text, int for numbers, 
BUT if it could be a number and letter, like 4a in street number, it must be a varchar)
 
Table: users 		Columns: first_name, last_name, email_address, phone_number
Table: addresses 	Columns: street_number, street, suburb, city, postcode
 
Add some test data to them - at least 5 lines in each.
 
======================== LEVEL 2 ==========================
 
Now, we require our database functions file database_functions.php, so make sure you have downloaded it also, 
and then uncomment the following:
**/
 
 
require_once('database_functions.php');
 
$dbConnection = getDbConnection();
 
// var_dump($dbConnection);
 
 
/*
 You should now be getting a vardump of an array of information about the database connection.
 Go and look at the function in the database_functions.php file and try to understand it.
 Use google and read about the mysqli object. 
 
 Also, change the variables so that it breaks and you get an error, then fix it again.
 
======================== LEVEL 3 ==========================
 
So we now have a DB connection! Yay! Lets use it to select some data. 
 
Comment out the var_dump above.
 
Uncomment the lines below:
 
 */
 
$sql = "SELECT * FROM addresses";
 
$allAddresses = selectMultipleRows($dbConnection, $sql);
 
var_dump($allAddresses);
 
foreach($allAddresses as $address) {
	echo("<br />This address is : "
		.$address['street_number']." "
		.$address['street'].", "
		.$address['suburb'].", "
		.$address['city']." "
		.$address['postcode']
	);
}
 
/*
 
Read through the above and try to understand what's going on. Look in the other file 
to see what  selectMultipleRows() is doing. Discuss it whith each other.
 
======================== LEVEL 4 ==========================
 
Now do the same as above, to select everything in the user table.
*/
$sql = "SELECT * FROM users";

$allUsers = selectMultipleRows($dbConnection, $sql);
var_dump($allUsers);
echo "<table>";
foreach ($allUsers as $user) {
	echo("<tr><td>"
		.$user['first_name']."</td><td>"
		.$user['last_name']."</td><td>"
		.$user['email_address']."</td><td>"
		.$user['phone_number']."</td></tr>"
		);
}
echo "</table>";


/* 
Add some html before, inside and after the foreach loop, to utput the users 
inside a table.
 
======================== LEVEL 5 ==========================
 
Experiment with your $sql strings, and the selectMultipleRows function.
 
See if you can get it to select specific columns instead of all (*) because 
selecting all is inefficient.
 
See if you can add a condition, such as selecting all addresses from a
particular city.
 
*/
?>