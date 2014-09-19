<?php
/*
 
DATABASES III - Insert
 
Today's exercise is pretty straight forward in concept.
 
Create a form to add a new user to your database.
 
=============================   LEVEL 1 =====================
 
Here is an example of an insert statement:
 
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
 
Go to phpmyadmin, and try to insert a new user into the table using an INSERT 
sql statement. Use made up values for now.
 
Once you make a statement that works, make sure you save it somewhere.

INSERT INTO users (first_name, last_name, email_address, phone_number)
VALUES ("Polly", "Parsons", "polly@aviary.com", 5550147)
 
 
=============================   LEVEL 2 =====================
 
Create a form for the user to add a new user. You can use your new book for this!
 
Add inputs for each column in the table other than ID. Give your form a method of 
post and an action="" , so that it sends the post request to itself - not another 
file.
 
Create a submit button, with a name of 'submit'. If your form is working, you should 
get 'YOU SUBMITTED STUFF!' outputting.
 
Add the appropriate HTML to make this a real page (doctype, head, body, etc)
 
 
=============================   LEVEL 3 =====================
 
Test your form out, by putting in data and seeing if is outputting in the var_dump($_POST)
 
Now, we're going to use that sql statement you created inside the if statement below to save 
the data.
 
Replace the dummy sql with what you created in step one. Then, instead of the made-up values,
you will need to concatenate the values from the POST array. Something like:
 
$sql = "INSERT INTO users (first_name, last_name)
		VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."')";
 
 
Now, you should be able to call the insert function in the database_functions.php file 
and it should work. Echo out something saying what the ID of the new one was.
The id of the inserted item is returned by the insert function.
 
eg:
$newUser = insert($dbConnection, $sql);
echo "Inserted! The new user's id is ".$newUser;
 
 
=============================  LEVEL 4 =========================
 
Once your form is working, and saving, we get to learn about sanitizing or 
'escaping' input from users. This is because, at this stage, if you add any word with an 
apostrophe it will break the $sql string. Try adding a new user called April O'Neil and 
see what happens.
 
Check out the following tutorial for a recap on inserting into a database, and how to use built-in
PHP functions to 'escape' characters (replace them with neutral ones).
 
http://www.w3schools.com/php/php_mysql_insert.asp
 
*/
 
 
require_once('database_functions.php');
 
$dbConnection = getDbConnection();
 
// This 'if' statement checks if the POST array (the form data)
// contains an item with a name of submit.
// If it does, it will do some sql.
if(isset($_POST['submit'])) {
 
	echo "YOU SUBMITTED STUFF!";
 
	// Your $sql goes here
	$sql = "INSERT INTO users (first_name, last_name, email_address, phone_number)
VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email_address']."','".$_POST['phone_number']."')";
 
	echo $sql;
 
	$newUser = insert($dbConnection, $sql);
	echo "Inserted! The new user's id is ".$newUser;
}
 
 
// This $_POST dump will help you check your form:
echo "The post array currently contains: ";
var_dump($_POST);
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database and Forms</title>
</head>
<body>
	<form method="post" action="">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" id="first_name">
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name">
		<label for="email_address">Email:</label>
		<input type="text" name="email_address" id="email_address">
		<label for="phone_number">Phone:</label>
		<input type="text" name="phone_number" id="phone_number">

		<button name='submit' type="submit" value="submit">Submit</button>
	</form>
	<h1>Users and addresses</h1>
<table>
	<tr>
		<th>First name</th>
		<th>Last name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Street</th>
		<th>Suburb</th>
		<th>City</th>
	</tr>
<?php
 
$sql = "SELECT users.first_name, users.last_name, users.email_address, users.phone_number, addresses.suburb, addresses.street, addresses.city FROM users LEFT JOIN addresses On users.address_id = addresses.id";
 
$allUsers = selectMultipleRows($dbConnection, $sql);
 
// var_dump($allUsers);
 
foreach($allUsers as $user) {
	echo("<tr> 
			<td>".$user['first_name']."</td>".
			"<td>".$user['last_name']."</td>".
			"<td>".$user['email_address']."</td>".
			"<td>".$user['phone_number']."</td>".
			"<td>".$user['street']."</td>".
			"<td>".$user['suburb']."</td>".
			"<td>".$user['city']."</td>".
		"</tr>"
	);
}
 
?>
</table>
</body>
</html>