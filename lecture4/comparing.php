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

	<h1> If statement </h1>
	
	<?php

		$user = 'Admin';
		$message = 'Not logged in.';

		if($user != 'Admin') {
			$message = 'You are now logged in as User';
		}

		echo $message;
		
	?>

	<h1> If-else statement </h1>
	
	<?php

		$user = 'Admin';
		$message = 'Not logged in.';

		if($user == 'Admin') {
			$message = 'You are now logged in as Admin';
		} 
		else {
			$message = 'You are now logged in as user';
		}

		echo $message;
		
	?>

	<h1> If-elseif-else statement </h1>
	
	<?php

		$user = 'guest';
		$message = 'Not logged in.';
		
		/*
			Elseif prima parametar za porednje isto kao i if	
		*/
	
		if($user == 'Admin') {
			$message = 'You are now logged in as Admin';
		} 
		elseif ($user == 'User'){
			$message = 'You are now logged in as user';
		}
		else {
			$message = "Not logged in.";
		}

		echo $message;
		
	?>

	<h1> Vise od jednog else-if </h1>
	
	<?php

		$user = 'User';
		$message = 'Not logged in.';

		/*
			If statementi mogu imati vise od jednog elseif uslova			
		*/

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
		
	?>


	<h1> Nested-if </h1>
	
	<?php

		$newUser = "nesto";
		$message = '';

		/*
			If statementi se mogu pisati unutar postojecih if-ova (nested ifs)			
		*/
		
		if(isset($newUser)) {

			if($newUser == 'Admin') {
				$message = 'You are now logged in as Admin';
			} 
			elseif ($newUser == 'User'){
				$message = 'You are now logged in as user';
			}
			else {
				$message = "Not logged in.";
			}

			echo $message;
		}
		else {
			echo "User not set. You are a guest.";
		}
			
	?>



</body>
</html>