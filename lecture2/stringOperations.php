<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Stringovi u PHP</title>
  <meta name="description" content="Stringovi u PHP">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

<h1> Osnovne operacije sa stringovima u PHP </h1>

<?php

	/*
		Primjer kombinovanja 2 ili vise stringova
	 */
	
	$stringPart1 = "Prvi dio stringa";
	$stringPart2 = "i drugi dio stringa";
	$stringCombined = $stringPart1 . ' ' . ' ' . $stringPart2;

	echo $stringCombined;


	/*
		Primjer trim i strlen funkcije
	 */
	
	$untrimmedString = '     String sa praznim prostorom     ';

	/*
		Funckija strlen() vraca broj karaktera u stringu ukljucujuci i prazan prostor
	 */
	
	$lengthOfUntrimmedString = strlen($untrimmedString);

	/*
		Funkcija trim() uklanja prazan prostor sa pocetka i kraja stringa 
	 */
	
	$trimmedString = trim($untrimmedString);


	$lengthOfTrimmedString = strlen($trimmedString);


	/*
		Funkcija printf() se koristi za kombinovanje stringova. %s predstavlja mjesto gdje se varijabla
		prikazuje unutar stringa. 
	 */
	
	printf('<br/> %s String prije trim funkcije -->||<--', $untrimmedString);
	printf('<br/> Duzina stringa prije trim funkcije -->|%s|<--', $lengthOfUntrimmedString);
	printf('<br/> String nakon trim funkcije -->|%s|<--', $trimmedString);
	printf('<br/> Duzina stringa nakon trim funkcije -->|%s|<--', $lengthOfTrimmedString);

?>

<h1> Pretrage stringova </h1>

<?php
		
	$text = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';

	echo $text;
	

	/*
		Funkcija strpos() pronalazi poziciju prvog karaktera rijeci koja se trazi u stringu. 
	 */
	
	$position = strpos($text, 'quick');

	printf('<br/> Prvo ponavljanje %s', $position);
	
?>

<h1> Zamjena karaktera u stringu </h1>

<?php
		
	$text = 'PHP je bezveze';

	echo $text;
	
	
	/*
		Funkcija str_replace pronalazi i mijenja rijec sa zadatom u stringu.
		Prvi parametar je rijec koja ce biti zamijenjena.
		Drugi parameter je rijec koja mijenja.
		Treci parameter je string. 
	 */
	
	$newText = str_replace('bezveze', 'super', $text);
	$name = "nermin";
	echo $name;
	print($name);
	
?>

</body>
</html>