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

	
		for ($x = 0; $x < 7; $x++) {

			echo "<div>";
			echo $days[$x];
			echo '</div>';

		}

	?>

	<h1> Foreach loop sa echo funkcijom </h1>

	<?php

		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

		foreach ($days as $day) {

			echo "<div>";
			echo $day;
			echo '</div>';

		}

	?>

</body>
</html>