<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> For loop </title>
  <meta name="description" content="HTML5 Starter template">
  <meta name="author" content="For loop">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> For loop sa echo funkcijom </h1>

	<?php

		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

		/*
			- for petlja uvijek ima 3 parametra, inicijalnu varijablu, terminating condition i incrementing operator. 
			- Petlja ne mora nuzno pocinjati od 0 ($x = 0)
			- $x = 0 nije jedini nacin inizijaliziranja pocetne varijable. Istu je moguce inicijalizirati i van petlje
			- for petlja ne mora nuzno imati incrementing operator. Moguce je krenuti od veceg broja i koristiti $x--
			- Navedene 
		*/
	
		for ($x = 0; $x < 7; $x++) {

			echo "<div>";
			echo $days[$x];
			echo "</div>";

		}

	?>


	<h1> For loop sa echo funkcijom i vise varijabli</h1>

	<?php

		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		$styleInner = 'style="float: left; width: 100px; border: 1px solid black; text-align: center;"';

		// Primjer koristenja vise od jedne varijable unutar for petlje
		
		for ($x = 0; $x < 7; $x++) {

			echo "<div $styleInner>";
			echo $days[$x];
			echo '</div>';

		}

	?>


	<br>

	<h1> For loop sa prinff funkcijom </h1>

	<?php

		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		$styleInner = 'style="float: left; width: 100px; border: 1px solid black; text-align: center;"';

		for ($x = 0; $x < 7; $x++) {

			printf("<div %s> %s </div>", $styleInner, $days[$x]);

		}

	?>

</body>
</html>