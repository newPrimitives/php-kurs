<?php

if (isset($_POST['data'])) {

	$data = $_POST['data'];

	require_once('../helpers/database.php');
    $database = new Database();
    $pdo = $database->connect();

	$sql = "INSERT INTO author(name, email, pob, dob) VALUES (:name, :email, :pob, :dob)";
	$stmt = $pdo->prepare($sql);
	$result = $stmt->execute($data);

	$pdo = NULL;

	if($result == 1){
		echo "<h1> Autor dodan uspjesno! </h1>";
		echo "<a href='../index.php'> Nazad na pocetnu stranicu </a>";
	}
	else {
		echo "<h1> Greska, pokusaj <a href='index.html'>  ponovo </a> </h1>";
	}
}

else {
	include 'index.php';
}