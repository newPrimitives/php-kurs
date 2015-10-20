<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Funkcije - osnove </title>
  <meta name="description" content="Funkcije - osnove ">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<?php

		$helloWorld = "Hello world";

		/*
			Funkcija u ovom obliku ne vraca vrijednost varijable nego je ispisuje
		*/
	
		function returnsNoValue ($var) 
		{
			echo $var;
		};


		/*
			Funkcija u ovom obliku vraca vrijednost
		*/

		function returnsVariable ($var)
		{
			return $var;
		};


		/*
			Funkcija osim varijable moze vratiti string, broj, objekat, array, HTML...
		*/

		function returnsString()
		{
			return 'This is a string';
		};


		// Pozivanje funkcija 
		
		returnsNoValue($helloWorld);
		echo '<br>';

		echo returnsVariable($helloWorld);
		echo '<br>';
		
		echo returnsString();



	?>

</body>
</html>