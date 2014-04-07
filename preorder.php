<?php

function getValues()
{
	$parts = parse_url($url);
	parse_str($parts['query'], $query);

	$fullName = query['fullName'];
	$email = query['email'];
	$makeName = query['makeName'];
	$payment = query['paymet'];
	$address = query['address'];
	$zip = query['zip'];
	$city = query['city'];
	$country = query['country'];

	/*
	SAMPLE URL

	file:///Users/alexclp/Desktop/RAX-Website/preoder.php?fullName=Alexandru+
	Clapa&email=alexandru.clapa%40gmail.com&makeName=Audi&carYear=greatest&payment=creditcard&
	address=Aleea+Valea+Florilor+nr+8%2C+Bl+Z10%2C+ap+41%2C+Sector+6%2C+Bucuresti&zip=061578
	&city=Bucharest&country=RO

	*/

	echo $city;
}

getValues();

?>