<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> While loop PHP </title>
  <meta name="description" content="While loop PHP">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> While loop sa echo funkcijom </h1>

	<?php

		$days = array('Monday' , 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		$counter = 0;

		while ($counter < 7) {

			echo "<div>";
			echo $days[$counter];
			echo '</div>';
			$counter++;
		}

	?>


	<h1> While & do while loop sa echo funkcijom </h1>

	<?php

		$days = array('Monday',  'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		$counter = 0;

		do {

			echo "<div>";
			echo $days[$counter];
			echo '</div>';
			$counter++;

		} while ($counter < 7);

	?>

</body>
</html>