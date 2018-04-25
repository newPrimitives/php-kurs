<?php

// Ukoiko user klikne submit $_POST['data'] bude true, tako znamo da je forma submitan-a.	
if (isset($_POST['data'])) {

	// Upisujemo u varijablu $data sve ono sto je user upisao u formu. 'data' unutar ovog file-a odgovara 'data' unutar HTML forme. Ukoliko su istog imena, stedimo vrijeme na pisanju koda. 
	$data = $_POST['data'];
		
	// Ukljucujemo konekciju na bazu
	require_once('../helpers/database.php');
    $database = new Database();
    $pdo = $database->connect();

    // Radimo INSERT query 
	$sql = "INSERT INTO author(name, email, pob, dob) VALUES (:name, :email, :pob, :dob)";
	$stmt = $pdo->prepare($sql);
	$result = $stmt->execute($data);

	// Zatvaramo konekciju na bazu
	$pdo = NULL;

	// Ukoliko je query uspjesan $result ce biti true ili 1 
	if($result == 1){
		echo "<h1> Autor dodan uspjesno! </h1>";
		echo "<a href='../index.php'> Nazad na pocetnu stranicu </a>";
	}
	else {
		echo "<h1> Greska, pokusaj <a href='index.html'>  ponovo </a>";
	}
}

else {
	include 'index.html';
}