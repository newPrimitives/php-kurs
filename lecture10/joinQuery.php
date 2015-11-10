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

// SQL statement
$sql = "SELECT * FROM author, article WHERE article.author_id = author.id";

/*
	Fetches a row from a result set associated with a PDOStatement object. 
	The fetch_style parameter determines how PDO returns the row.
*/
	
foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row) {
	echo $row['name'];
}

// closes the database connection
$pdo = NULL;
