<?php
/*
 
Databases - Relating two tables
 
============ LEVEL 1 ====================
 
Now we want to add an association between the two tables. 
 
Each user in the users table will have an address in the addresses table.
 
So, go to your database in PHPMyadmin and add a column to the 'users' table structure, 
called address_id. This is going to hold the primary key of the user's address 
(in our case, the primary key of the address table is the 'id' column). So the
data type should be integer.
 
When we create fields, they can be given a setting 'unique' (under the index dropdown in 
phpmyadmin). 
If a field is unique, that means that each value can only appear once in that table or 
mysql will return an error when you try to add another row with the same value.
 
Discuss whether or not the address should be unique for the users. 
 
What if instead of adding an address_id to the users table, we added a user_id to
the address table? Would this be better or worse for our database?
 
Add in some keys from the address table to the user table, so that the users table now
has the id number of an address.
 
 
============ LEVEL 2 ====================
 
Check out the code below, it's very similar to yesterday and outputs all of the users.
 
Change the sql statement so that is selects all of the columns you need by name
instead of using *.
 
Also, since we are being really specific now, we are going to add the table names into
the query. We do this by prepending them to the field, separated by a full stop. So
add the table name to the fields like so: 'SELECT users.first_name, users.last_name ... ' etc
 
============ LEVEL 3 ====================
 
Now, head back to PHPmyadmin so you can try some variations of this sql statement. 
 
You should be able to paste your sql statement from this file into the sql tab for your
exampledb database, and run it. It will show you the results. 
 
Now, you need to add a join statement.
 
Here is a pretty good tutorial on how to do this:
 
http://www.mysqltutorial.org/mysql-left-join.aspx
 
You will need to add the left join between the users.address_id field and the address.
 
You will also need to add in some columns from the address field that you want data from.
 
In their example below, they are specifying abbreviations for the table names in the 
FROM and JOIN lines, so in the select part, c. means customers and o means orders. You
can do this too if you want.
 
SELECT c.customerNumber,
       c.customerName,
       orderNumber, 
       o.status
FROM customers c
LEFT JOIN orders o ON c.customerNumber = o.customerNumber
WHERE orderNumber IS NULL
 
============ LEVEL 4 ====================
 
Alter the code below so that it now uses your new SQL select query with the join.
You'll need to extend the table so that the additional data from the query about the 
user's address displays as well.
 
*/
 
require_once('database_functions.php');
 
$dbConnection = getDbConnection();
?>
 
<!doctype HTML>
<html>
<head>
</head>
<body>
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