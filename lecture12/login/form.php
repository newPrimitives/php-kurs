<?php

if (isset($_POST['data'])) {

	$data = $_POST['data'];

	require_once('../helpers/database.php');
	$database = new Database();
	$user = $database->getUser($data['email'], $data['password']);
	session_start();
	$_SESSION['logged_user'] = $user;
	$redirectURL = "../index.php";
	header('Location: '.$redirectURL);

}
else {
	include 'index.php';
}