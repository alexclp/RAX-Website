
<?php
//conexiunea la baza de date

$db = new mysqli('localhost', 'root', 'root', 'Database');

//insereaza in tabel (dai numele tabelului)
//fullName, email, makeName, etc.. sunt numele fiecarei coloane din tabelul in care inserezi
//apoi sunt valorile care se insereaza in coloane, prima valoare in prima coloana si asa mai departe
//exemplu: prima valoare '$_POST[fullName]' se insereaza in prima coloana 'fullName'

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
	
//$statement = $mysqli->prepare($con, $queryString);
$statement = $db->prepare($queryString);
$statement->execute();
	
// daca primesti valorile ca parametrii
/*
$fullName = $_POST[fullName];
$email = $_POST[email];
$makeName = $_POST[makeName];
$payment = $_POST[payment];
$address = $_POST[address];
$zip = $_POST[zip];
$city = $_POST[city];
$country = $_POST[country];

$queryString = "INSERT INTO Preorder (FullName, email, makeName, payment, address, zip, city, country)
	VALUES (
		'" . $fullName . "', 
		'" . $email . "', 
		'" . $makeName . "', 
		'" . $payment . "', 
		'" . $address . "', 
		'" . $zip . "', 
		'" . $city . "', 
		'" . $country . "', 
	)";
	
$statement = $mysqli->prepare($con, $queryString);
$statement->execute();
*/

/*
//in principiu ar trebui sa mearga daca e configuratiile sunt bune
//pentru a trimite un mail simplu

$to = 'alexandru.clapa@gmail.com';
$subject = 'subiect'; // ex: Aplicatie RAX
$message = 'mesaj'; //mesajul

//trimite mailul
mail($to, $subject, $message);


//mail cu detalii sau cu HTML, aranjat...

$to = 'alexandru.clapa@gmail.com';
$subject = 'subiect'; // ex: Aplicatie RAX
$message = '
	<html>
	<head>
		<title>Titlu mail</title>
	</head>
	<body>
		<p>Buna ziua,</p> </br>
		<p>Datele trimise sunt: </p>
		
	</body>
	</html>
';

$message .= $_POST[fullName];
$message .= $_POST[email];
$message .= $_POST[makeName];
$message .= $_POST[paymment];
$message .= $_POST[adress];
$message .= $_POST[zip];
$message .= $_POST[city];
$message .= $_POST[country];

//daca trimiti mail cu HTML in mesaj trebuie specificat ContentType-ul
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //daca trimiti mail cu HTML in mesaj trebuie specificat ContentType
// headere aditionale
$headers .= 'To: Alex <alexandru.clapa@gmail.com>' . "\r\n"; // cui sa trimita
$headers .= 'From: Exemplu <exemplu@exemplu.com>' . "\r\n"; // de la cine
$headers .= 'Cc: exemplu@exemplu.com' . "\r\n"; // cine mai e in CC

//trimite mailul
mail($to, $subject, $message, $headers);

//mai poti adauga si alti parametrii dupa '$headers'
//exemplu: mail($to, $subject, $message, $headers, $parameters);

//daca nu merge atunci folosesti scriptul pentru inserare in baza de date de mai sus
*/
?> 







