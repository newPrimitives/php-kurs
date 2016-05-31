<?php
	
	$title = array("Kawah Ijen: Vulkan koji izbacuje plavu lavu", "Google otkupio abcdefghijklmnopqrstuvwxyz.com", "Jeste li se ikada zapitali koje je boje zapravo mjesec");

	$text = array("Vulkani dolaze u raznim destruktivnim oblicima. Od Kilauee koji svoju lavu izbacuje kroz duge periode i veoma sporo, preko Fujia koji spava stoljećima prije nego što eksplodira uzrokujući kataklizmu, pa do vulkana na Jupiterovom mjesecu Io čiji stubovi erupcije dosežu visinu i do 500 kilometara.", "Domena abcdefghijklmnopqrstuvwxyz.com ranije je bila u privatnom vlasništvu, a procjenjuje se da su prijašnji vlasnici od Googlea dobili više stotina hiljada dolara. Stručnjaci smatraju da Google na ovaj način želi osigurati da se drugi tehnološki giganti kao što su Facebook ili Apple ne domognu stranice.", "Boja Mjeseca koju vidimo sa Zemlje je zapravo optička iluzija. Naime, gledan sa Zemlje, Mjesec se čini mnogo svjetlijim nego što zapravo jeste zbog činjenice da ga nemamo prilike ni sa čim uporediti osim sa tamnim nebom koje ga okružuje. Ljudski mozak percipira relativno osvjetljenje stvari koje gledamo zajedno sa pozadinom koja ga okružuje, te stoga nam Mjesec izgledao izuzetno svijetao, a zapravo je tamnosive boje.");

	$links = array("http://www.klix.ba/scitech/nauka/kawah-ijen-vulkan-koji-izbacuje-plavu-lavu/151014080", "http://www.klix.ba/scitech/tehnologija/google-otkupio-abcdefghijklmnopqrstuvwxyz-com/151008003", "http://www.klix.ba/scitech/nauka/jeste-li-se-ikada-zapitali-koje-je-boje-zapravo-mjesec/151013120");

	$images = array("http://static.klix.ba/media/images/vijesti/151014080.2_mn.jpg", "http://static.klix.ba/media/images/vijesti/b_151008003.jpg", "http://static.klix.ba/media/images/vijesti/151013120.2_xl.jpg");

	$user = "guest";

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Tech portal </title>
  <meta name="description" content="HTML5 Starter template">
  <meta name="author" content="Nermin Sehic">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style type="text/css">
	  
	  body{
	  	background-color: #F5F5F5;
	  	font-family: 'Open Sans', sans-serif;
	  }

	  img {
	  	float: left;
	  	margin-right: 10px;
	  }

  </style>
  
</head>

<body>

	<h1> Tech Portal </h1>
	<h3> Kategorija: vijesti </h3>	
	<hr> <br>

	<!-- Template jednog clanka -->
	
	<?php

		$index = sizeof($title);

		for ($i = 0; $i<$index; $i++) {

			echo '<article>';
			echo '<img src='. $images[$i] . ' width="400px;" height="200px">';
			echo ' <h3> '. $title[$i] . '  </h3> ';
			
			if($user == "admin" or $user == "user"){
				echo '<p> '. $text[$i] .' </p>';
			}
			else {
				echo "Potrebno je da budete logovani da bi ste vidjeli ovaj sadzraj.";
			}

			if($user == "admin") {
				echo '<a href='. $links[$i] .' target="_blank"> Izvor clanka </a>';
			}
				
			echo '<div style="clear:both"> </div>';
			echo '</article>';
		}

	?>

</body>
</html>