<?php

// Sample SELECT using PDO query()

// database username
$user = 'root';
// database password
$pass = '';
// data source = mysql driver, localhost, database = class
$dsn = 'mysql:host=localhost;dbname=blog';

// PDO class represents the connection
$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO author(name, email, pob) VALUES ('User iz PHP', 'nekiMail@gmail.com', 'Hadzici')";

$result = $pdo->exec($sql);

echo 'RESULT: ', $result;
	
$pdo = NULL;