<?php

// Sample SELECT using PDO
$user = 'class';
$pass = 'password';
$dbh = new PDO('mysql:host=localhost;dbname=class', $user, $pass);
foreach ($dbh->query('SELECT name FROM `users`', PDO::FETCH_ASSOC) as $row) {
	echo implode(':', $row) . PHP_EOL;
}
$dbh = NULL;


// Sample SELECT using mysqli
$user = 'class';
$pass = 'password';
$dbh = new mysqli('localhost', $user, $pass, 'class');
foreach ($dbh->query('SELECT name FROM `users`') as $row) {
	echo implode(':', $row) . PHP_EOL;
}
$dbh = NULL;