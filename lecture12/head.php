<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Academy 387 blog </title>
  <meta name="description" content="Academy 387 blog">
  <meta name="author" content="Nermin Sehic">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/php-kurs/lecture11/public/css/style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<div class="container center">
	<img src="/php-kurs/lecture11/public/images/logo.png">

  <?php
    session_start();
    if(isset($_SESSION['logged_user'])){
      echo "<h1> Dobro dosao/la ", $_SESSION['logged_user']['name'], "</h1>";
      echo '
        <a class="link" href="/php-kurs/lecture12/author"> Novi autor </a>
        <a class="link" href="/php-kurs/lecture12/addArticle"> Novi clanak </a>
        <a class="link" href="/php-kurs/lecture12/articles"> Ispis clanaka </a>
        <a class="link" href="/php-kurs/lecture12/logout"> Odjava </a>
      ';

      
    }
    else {
      echo "<h1> Dobrodosli na blog Academy387 </h1>";
      echo '
      <a class="link" href="/php-kurs/lecture12/login"> Prijava </a>
      <a class="link" href="/php-kurs/lecture12/register"> Registracija </a>
      <a class="link" href="/php-kurs/lecture12/articles"> Ispis clanaka </a>';
    }
  ?>
</div>