<?php
	$cities = array('Sarajevo', 'Banja Luka', 'Tuzla', 'Zenica', 'Mostar', 'Bihac', 'Travnik', 'Visegrad', 'Prijedor');
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Gradovi u BiH </title>
  <meta name="description" content="Gradovi u BiH">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Spisak gradova u BiH </h1>

	<!-- Izbrisati rucno napisane option tago-ve unutar selecta te vrijednosti ispisati koristeci for loop i array 
	$cities inicijaliziran na vrhu stranice --> 

	<form>
		<select>
		  <option value="Sarajevo">Sarajevo</option>
		  <option value="Banja Luka">Banja Luka</option>
		  <option value="Zenica">Zenica</option>
		  <option value="Mostar">Mostar</option>
		</select>
	</form>

</body>
</html>