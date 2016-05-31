<?php

if (isset($_POST['data'])) {

	session_start();
	$data = $_POST['data'];
	$data['user_id'] = $_SESSION['logged_user']['id'];
	require_once('../helpers/database.php');
    $database = new Database();
    $pdo = $database->connect();

	$sql = "INSERT INTO comments(text, article_id, user_id) VALUES (:text, :article_id, :user_id)";
	$stmt = $pdo->prepare($sql);
	$result = $stmt->execute($data);

	$pdo = NULL;
	$article_id = $data["article_id"];
	if($result == 1){
		echo "<h1> Komentar dodan uspjesno! </h1>";
		echo "<a href='../articles/index.php?article=$article_id'> Nazad na pocetnu stranicu </a>";
	}
	else {
		echo "<h1> Greska, pokusaj <a href='index.php'>  ponovo </a>";
	}
}

else {
	include '../index.php';
}