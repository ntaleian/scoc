<?php

//process.php
/*
	'hostname' => 'localhost',
	'username' => 'certsoft_admin',
	'password' => 'ADmin4321',
	'database' => 'certsoft_emergency',
*/
$connect = new PDO("mysql:host=localhost; dbname=certsoft_emergency", "certsoft_admin", "ADmin4321");

$query = "SELECT * FROM scoc_expectation";

$statement = $connect->prepare($query);

$statement->execute();

echo $statement->rowCount();

?>