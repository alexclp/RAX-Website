<?php
function InsertData()
{
	$link = msql_connect();

	if (!$link || !mssql_select_db('php', $link))
	{
		die("Unable to connect or select the database!");
	}

	$fullName = $_REQUEST['fullName'];
	$email = $_REQUEST['email'];
	$makeName = $_REQUEST['makeName'];
	$carYear = $_REQUEST['carYear'];
	$payment = $_REQUEST['payment'];
	$city = $_REQUEST['city'];
	$address = $_REQUEST['address'];
	$postalCode = $_REQUEST['postalCode'];
	$county = $_REQUEST['county'];
	$country = $_REQUEST['country'];

	$sql = ""; // Insert statement (has to be done)
	$result = mssql_query($sql, $link);

	if (!$result) 
	{
		echo mssql_error();
		exit;
	}
	mssql_free_result($result);
	mssql_close();
	echo "Data successufully inserted!";
}

function CreateDatabase()
{

}

?>