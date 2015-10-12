<?php

	$person = [
		"firstName" => "Nermin",
		"lastName" => "Sehic",
		"age" => 22,
		"placeOfBirth" => "Sarajevo",
		"image" => "https://pbs.twimg.com/profile_images/544098206515085312/oAqQ3Vda.jpeg"
	];

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Licna karta </title>
  <meta name="description" content="Licna karta ">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Licna Karta </h1>

	<h4> Ime : <?php echo $person['firstName'] ?> </h4>
	<hr>

	<h4> Prezime : <?php echo $person['lastName'] ?> </h4>
	<hr>

	<h4> Godiste : <?php echo $person['age'] ?></h4>
	<hr>

	<h4> Mjesto rodjenja : <?php echo $person['placeOfBirth'] ?> </h4>
	<hr>

	<img src= <?php echo $person['image'] ?> width="200px" alt="Profilna slika">

</body>
</html>