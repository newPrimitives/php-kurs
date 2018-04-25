<?php

// Ukoiko user klikne submit $_POST['data'] bude true, tako znamo da je forma submitan-a.
if (isset($_POST['data'])) {

	// Upisujemo u varijablu $data sve ono sto je user upisao u formu. 'data' unutar ovog file-a odgovara 'data' unutar HTML forme. Ukoliko su istog imena, stedimo vrijeme na pisanju koda. 
	$data = $_POST['data'];
	
	// Ukljucujemo konekciju na bazu
	require_once('../helpers/database.php');
    $database = new Database();
    $pdo = $database->connect();

    // Definise folder gdje se slika uploaduje 
	$target_dir = "../public/images/";

	// Definise ime, extenziju slike zajedno sa folderom
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	// Uploaduje zadatu sliku koristeci funkciju move_upload_file iz PHP
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	// Spasimo ime slike u $data['image'] koji sacuvamo u bazu 
	$data['image'] = 'public/images/' . basename($_FILES["image"]["name"]);
	
	$sql = "INSERT INTO article(title, text, image, author_id) VALUES (:title, :text, :image, :author)";
	$stmt = $pdo->prepare($sql);
	$result = $stmt->execute($data);

	$pdo = NULL;

	if($result == 1){
		echo "<h1> Clanak dodan uspjesno! </h1>";
		echo "<a href='../index.php'> Nazad na pocetnu stranicu </a>";
	}
	else {
		echo "<h1> Greska, pokusaj <a href='index.html'>  ponovo </a>";
	}
}

else {
	include 'index.php';
}

