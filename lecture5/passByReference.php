<?php

	/*
		Funkcija u ovom obliku prima varijable sa referencama, sto znaci da ce bilo koja promjena na varijablama 
		$fname, $mname, $lname takodjer promijeniti i vrijednost varijabli koje su proslijedjene pri pozivanju funkcije
	 */
	
	function capitalize(&$fname, &$mname = '', &$lname = '')
	{
		$fname = ucfirst($fname);
		$mname = ucfirst($mname);
		$lname = ucfirst($lname);

		return TRUE;
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Pass by reference </title>
  <meta name="description" content="Pass by reference ">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

<?php 

	$first = 'musa';
	$middle = 'cazim';
	$last = 'catic';


	printf('<br />NAME BEFORE: %s %s %s', $first, $middle, $last);

	capitalize($first, $middle, $last);

	printf('<br />NAME AFTER: %s %s %s', $first, $middle, $last);
?>

</body>
</html>