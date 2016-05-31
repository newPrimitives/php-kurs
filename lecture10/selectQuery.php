<?php
// Sample SELECT using PDO query()

// database username
$user = 'root';
// database password
$pass = 'root';
// data source = mysql driver, localhost, database = class
$dsn = 'mysql:host=localhost;dbname=blog';

// PDO class represents the connection
$pdo = new PDO($dsn, $user, $pass);

// SQL statement
$sql = 'SELECT * FROM `author` order by id desc';

// Use query() for "one-time" SQL requests
// PDO::FETCH_ASSOC = return results in the form of an associative array
echo '<h3>Database results are: </h3>', '<hr />', PHP_EOL;
echo '<div style="background-color: white; color: blue; border: solid 2px black;">', PHP_EOL;

foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row) {
	// each $row = an associative array representing one row in the database
	// the key = the column name
	// echo '<div style="background-color: white">', implode('</td><td>', $row), '<div>', PHP_EOL;
	echo $row['email'], PHP_EOL;
}

echo '</div>', PHP_EOL;

// closes the database connection
$pdo = NULL;
