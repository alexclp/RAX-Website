<?php

$db = new mysqli('localhost', 'root', 'root', 'Database');

//insereaza in tabel (dai numele tabelului)
//fullName, email, makeName, etc.. sunt numele fiecarei coloane din tabelul in care inserezi
//apoi sunt valorile care se insereaza in coloane, prima valoare in prima coloana si asa mai departe
//exemplu: prima valoare '$_POST[fullName]' se insereaza in prima coloana 'fullName'

function go_back()
{
	header("Location: /index.html");
	exit();
}

$queryString = "INSERT INTO Contact (first_name, last_name, email_address, subject, message)
	VALUES (
		'$_POST[first_name]', 
		'$_POST[last_name]', 
		'$_POST[email]', 
		'$_POST[subject]', 
		'$_POST[message]' 
	)";
	
//$statement = $mysqli->prepare($con, $queryString);
$statement = $db->prepare($queryString);
$statement->execute();

go_back();

?>