<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Sortiranje nizova  </title>
  <meta name="description" content="Sortiranje nizova ">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Sortiranje nizova po vrijednosti </h1>
	
	<?php

		/*
			Funkcija sort() se koristi za sortiranje numerickih nizova 
		 */
		
		echo "<br/> sort() funkcija: ";

		$numericArray = array(20, 5, 4, 6, 9);

		// Sortirani niz presnimi vrijednosti niza prije sortiranja
		sort($numericArray); 
		var_dump($numericArray);

		
		/*
			Funkcija asort() se koristi za sortiranje associative nizova jer ne mijenja vrijednost key-eva
			(maintain the association between keys and values)
		 */
		
		echo "<br/> asort() funkcija: ";

		$associativeArray = array('a' => 'apple', 'b' => 'oranges', 'c' => 'bananas');

		asort($associativeArray);
		var_dump($associativeArray);


		/*
			Dodjeljivanjem flag-a SORT_NATURAL funkciji sort(), PHP ce elemente niza sortirati po "prirodnom" redoslijedu
			npr: file1.php, file2.php itd. 
		 */
		
		echo "<br/> sort() funkcija sa SORT_NATURAL flag-om: ";

		$filesArray = array('file3.php','file1.php','file2.php');

		asort($filesArray, SORT_NATURAL);
		var_dump($filesArray);

	?>


	<h1> Sortiranje nizova po key-u </h1>

	<?php

		/*
			Funkcija ksort() sortira zadani niz po vrijednosti key-a umjesto vrijednosti elementa 
		*/
	
		echo "<br/> ksort() funkcija: ";

		$associativeArray = array('b' => 'apple', 'a' => 'oranges', 'c' => 'bananas');

		ksort($associativeArray);
		var_dump($associativeArray);

	?>


	<h1> Reverse sortiranje nizova </h1>

	<?php

		/*
			Funkcija rsort() se koristi za inverse sortiranje numerickih nizova i radi na slicnom principu kao i sort funkcija
			(generise nove key-eve za sve elemente)
		*/
		
		echo "<br/> rsort() funkcija: ";

		$numericArray = array(20, 5, 4, 6, 9);

		rsort($numericArray); 
		var_dump($numericArray);


		/*
			Koristenje flag-a se preporucuje samo ukoliko su svi elementi u array-u istog tipa
		 */
		
		echo "<br/> rsort() funkcija sa SORT_NUMERIC flag-om: ";

		$numericArray = array(20, 5, 4, 6, 9);

		rsort($numericArray, SORT_NUMERIC); 
		var_dump($numericArray);


		/*
			Funkcija arsort() se koristi za inverse sortiranje associative nizova jer ne mijenja vrijednost key-eva,
			slicno kao i asort()
			(maintain the association between keys and values)
		 */
		
		echo "<br/> arsort() funkcija: ";

		$associativeArray = array('a' => 'apple', 'b' => 'oranges', 'c' => 'bananas');

		arsort($associativeArray);
		var_dump($associativeArray);

	?>

	
</body>
</html>