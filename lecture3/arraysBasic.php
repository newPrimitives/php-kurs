<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Arrays in PHP </title>
  <meta name="description" content="Arrays in PHP">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Numeric arrays PHP </h1>
		
		<?php
		
		/*
			Primjer inicijalizacije array-a 
		*/

		$cars = array('Volvo', 'BMW', 'VW', 'Kia');


		/*
			Primjer ispisa elementa iz array-a 
		*/

		echo $cars[0];


		/*
			Primjer ispisa elementa iz array-a unutar znakova navodnika
		*/

		echo "<br/> My favorite car is $cars[0]";


		/*
			Dodjeljivanje jednog elementa u array-u varijabli
		*/

		$car = $cars[0];
		echo "<br/> $car";


		/*
			Ispisivanje kompletnog niza
		*/

		echo "<br>";
		var_dump($cars);

		?>

	<h1> Associative arrays PHP </h1>

		<?php

		/*
			Primjer inicijalizacije associative array-a 
		*/
		
		$person['firstName'] = "Jonh";
		$person['lastName'] = "Doe";
		$person['age'] = 25;
		$person['gender'] = "Male";


		/*
			Primjer ispisa kompletnog associative array-a 
		*/

		var_dump($person);

		/*
			Alternativni primjer inicijalizacije associative array-a
		*/

		echo "<br/>";

		$car = [
			"manufacturer" => "VW",
			"model" => "Golf",
		    "hp" => 170,
		    "gas" => "foo"
		];

		var_dump($car)

		?>
</body>
</html>