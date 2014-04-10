<?php

$db = new mysqli('localhost', 'root', 'root', 'Database');

$queryString = "INSERT INTO Preorder (FullName, email, makeName, payment, address, zip, city, country)
	VALUES (
		'$_POST[fullName]', 
		'$_POST[email]', 
		'$_POST[makeName]', 
		'$_POST[payment]', 
		'$_POST[address]', 
		'$_POST[zip]', 
		'$_POST[city]', 
		'$_POST[country]'
	)";
	
$statement = $db->prepare($queryString);
$statement->execute();

function go_back()
{
	header("Location: /index.html");
	exit();
}

go_back();

?> 







