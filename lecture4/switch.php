<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> If-else u PHP</title>
  <meta name="description" content="If-else u PHP">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Switch VS elseif statement </h1>

	<?php

		$user = 'superAdmin';
		$message = 'Not logged in.';

		if($user == 'superAdmin') {
			$message = 'You are now logged in as Super Admin';
		} 
		elseif ($user == 'Admin'){
			$message = 'You are now logged in as Admin';
		}
		elseif ($user == 'User'){
			$message = 'You are now logged in as user';
		}
		else {
			$message = "Not logged in.";
		}

		echo $message;
		echo "<br/>";

		switch ($user) {
			case 'superAdmin':
				$message = 'You are now logged in as Super Admin';
				break;

			case 'Admin':
				$message = 'You are now logged in as Admin';
				break;

			case 'User':
				$message = 'You are now logged in as user';

			default:
				$message = "Not logged in.";
				break;
		}

		echo $message;
		
	?>

</body>
</html>