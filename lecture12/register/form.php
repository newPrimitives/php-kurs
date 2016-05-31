<?php


if (isset($_POST['data'])) {

	$data = $_POST['data'];
	
	require_once("../helpers/password.php");
	$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

	require_once('../helpers/database.php');
    $database = new Database();
    $pdo = $database->connect();
    
    $isEmailFree = $database->isEmailFree($data['email']);

    if($isEmailFree){
    	$sql = "INSERT INTO user(name, email, password) VALUES (:name, :email, :password)";
		$stmt = $pdo->prepare($sql);
		$result = $stmt->execute($data);	
    }
    else {
    	$result = 0;
    }
	
	$pdo = NULL;

	if($result == 1){
		echo "<h1> Novi korisnik dodan uspjesno! </h1>";
		echo "<a href='../index.php'> Nazad na pocetnu stranicu </a>";
	}
	else {
		echo "<h1> Greska, pokusaj <a href='index.php'>  ponovo </a>";
	}
}

else {
	include 'index.php';
}