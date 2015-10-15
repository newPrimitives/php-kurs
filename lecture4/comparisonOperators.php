<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Comparison Operators </title>
  <meta name="description" content="Comparison Operators ">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Int poređenja </h1>

	<?php
		
		$cost1 = 12.99;
		$cost2 = 10;


		// Ispis varijabli bez poredjenja

		echo "<br />Cost 1: $cost1";
		echo "<br />Cost 2: $cost2";

		/*
			Poredjenja da li je varijabla $cost1 manja od varijable $cost2
		*/

		echo '<br />$cost1 < $cost2: ', var_dump($cost1 < $cost2);
			

		/*
			Poredjenje da li je varijabla $cost1 jednaka varijabli $cost2
		 */
		
		echo '<br />$cost1 == $cost2: ', var_dump($cost1 == $cost2);
		

		/*
			Poredjenje da li je varijabla $cost1 veca od varijable $cost2
		 */
		
		echo '<br />$cost1 > $cost2: ', var_dump($cost1 > $cost2);
		echo '<br />';

	?>
	
	<h1> String poređenja </h1>

	<?php

		$title1 = 'The Great Escape';
		$title2 = 'The Great Gatsby';

		// Ispis varijabli bez poredjenja
		echo "<br />Title 1: $title1";
		echo "<br />Title 2: $title2";
		
		/*
			Poredjenja da li je varijabla $title1 manja od varijable $title2
		*/

		echo '<br />$title1 < $title2: ', var_dump($title1 < $title2);
		

		/*
			Poredjenja da li je varijabla $title1 jednaka varijabli $title2
		*/

		echo '<br />$title1 == $title2: ', var_dump($title1 == $title2);
		

		/*
			Poredjenja da li je varijabla $title2 veca od varijable $title2
		*/

		echo '<br />$title1 > $title2: ', var_dump($title1 > $title2);
		echo '<br />';

	?>

	<h1> Identity comparison</h1>

	<?php

		$value1 = 123.0; // Tip float 
		$value2 = 123; // Tip integer 

		echo '<br />Value 1:', var_dump($value1);
		echo '<br />Value 2:', var_dump($value2);


		/*
			Iako su varijable razlicitog tipa njihova vrijednost je ista, zbog cega ce var_dump u slucaju ==
			biti true	
		*/
	
		echo '<br />$value1 == $value2: ', var_dump($value1 == $value2);


		/*
			$value1 je float dok je $value2 integer, sto znaci da njihovi tipovi nisu isti, zbog cega ce var_dump u slucaju
			=== biti false, iako su vrijednosti 123.0 i 123 u sustnini iste. 
		*/
		
		echo '<br />$value1 === $value2: ', var_dump($value1 === $value2);
		echo '<br />';

	?>
	

</body>
</html>
