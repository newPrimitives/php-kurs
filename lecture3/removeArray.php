<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Brisanje elementa iz array-a </title>
  <meta name="description" content="Brisanje elementa iz array-a">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Brisanje elementa iz array-a </h1>
	
	<?php

		// Inicijalizacija niza $food
	
		$food = [
			"meat" => "Chkicken",
			"grain" => "Bread",
		    "vegetable" => 'Tomato',
		    "fruit" => "Banana"
		];


		/*
			Koristeci funkciju unset() uklanjamo onaj element iz array-a ciji key proslijedimo
		*/
		
		var_dump($food);
		echo '<br/>';
		unset($food['grain']);
		var_dump($food);


		/*
			Funkcija array_pop() brise zadnji element iz array-a
		 */
		
		echo '<br/>';
		array_pop($food);
		var_dump($food);


		/*
			Funkcija array_shift() brise prvi element iz niza
		 */

		echo '<br/>';
		array_shift($food);
		var_dump($food);

	?>
	
</body>
</html>