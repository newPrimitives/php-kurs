<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Pretrazivanja u arrayu </title>
  <meta name="description" content="Pretrazivanja u arrayu">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Pretrazivanja u arrayu</h1>
	
	<?php

		// Dodjeljivanje vrijednosti u array $heroes 
		$heroes = array('Superman', 'Batman', 'Hulk', 'Ironman');

		/*
			Funkcija in_array() vraca 'true' ukoliko rijec postoji u array-u ili 'false' ukoliko rijec ne postoji u arrayu
		 */
		
		$foundYesOrNo = in_array('Superman', $heroes);
		
		
		/*
			Funkcija array_search() vraca key rijeci unutar array-a ukoliko ona postoji
		 */
		
		$foundKey = array_search('Superman', $heroes);

		var_dump($heroes);
		echo "<br/> Superman is a hero: $foundYesOrNo ", var_dump($foundYesOrNo);
		echo "<br/> Superman array key: $foundKey";
		echo "<br/> Say hi to $heroes[$foundKey]";

		// Novi niz
		
		$person = [
			"firstName" => "Nermin",
			"lastName" => "Sehic",
			"age" => 22,
			"placeOfBirth" => "Sarajevo",
			"image" => "https://pbs.twimg.com/profile_images/544098206515085312/oAqQ3Vda.jpeg"
		];


		/*
			Funkcija array_key_exists() radi na identicnom principu kao i funkcija in_array() s tim da kao parametar uzima key umjesto vrijednosti key-a
		 */
		
		$foundKey = array_key_exists('firstName', $person);


		/*
			Funkcija isset() ima vise primjena u PHP, u ovom slucaju provjerava da li key postoji
		 */
		
		$isSet = isset($person['firstName']);

		// Echo vrijednosti $foundKey koristeci array_key_exists()
		echo "<br/> $foundKey";
		echo "<br/> $isSet";

	?>
	
</body>
</html>