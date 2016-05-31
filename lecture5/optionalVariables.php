<?php

	function addressTable($name, $address, $city, $flatEntrence)
	{
		$table = '<table border=1>' . PHP_EOL;
		$table .= '<tr><th>Name</th><td>' .$name. '</td></tr>';
		$table .= sprintf('<tr><th rowspan=3>Address</th><td>%s</td></tr>', $address);
		$table .= sprintf('<tr><td>%s</td></tr>', $flatEntrence);
		$table .= sprintf('<tr><td>%s</td></tr>', $city);
		$table .= '</table>' . PHP_EOL;
		return $table;
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Hello World</title>
  <meta name="description" content="Hello World">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<?php
		
		// works OK
		echo addressTable('John Doe', 'Ferhadija', 'Sarajevo 71000', 'Ulaz B');
		echo '<br>';
		
		// works OK
		echo addressTable('John Doe', 'Ferhadija', 'Sarajevo 71000');

	?>

</body>
</html>