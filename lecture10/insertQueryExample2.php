<?php
// Sample INSERT of one row

// database username
$user = 'root';
// database password
$pass = '';
// data source = mysql driver, localhost, database = class
$dsn = 'mysql:host=localhost;dbname=blog';

// data to be inserted
$data = array('name' 	=> 'Desi Arnaz',
			  'email' => 'email2',
			  'pob'	=> 'Los Angeles');

// use try { // code } catch (PDOException $e) { // code } to trap errors

try {
	// PDO class represents the connection
	$pdo = new PDO($dsn, $user, $pass);

	// SQL
	$sql = "INSERT INTO author(name, email, pob) VALUES (:name, :email, :pob)";
	
	// prepare
	$stmt = $pdo->prepare($sql);
	
	// execute
	$result = $stmt->execute($data);

	echo 'RESULT: ', $result;
	
	// closes the database connection
	$pdo = NULL;

// traps any exceptions which might be thrown
} catch (PDOException $e) {
	echo $e->getMessage();
	echo $e->getTraceAsString();
}
