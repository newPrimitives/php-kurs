<!doctype html>

<!-- TODO: Varijable --> 

<?php
	$title = "My top web sites";
?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> <?php echo $title; ?> </title>
  <meta name="description" content="Moje top 3 najdraze web stranice">
  <meta name="author" content="Academy387">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<!-- Naslov -->
	<h1> <?php echo $title; ?> </h1>

	<ul> 
		<!-- Link 1 -->
		<li>  <a href="#" target="_blank"> <!-- Ime linka --> </a> </li>

		<!-- Link 2 -->
		<li>  <a href="#" target="_blank"> <!-- Ime linka --> </a> </li>
		
		<!-- Link 3 -->
		<li>  <a href="#" target="_blank"> <!-- Ime linka --> </a> </li>
	</ul>

</body>
</html>