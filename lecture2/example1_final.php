<!doctype html>

<?php

	$title = "My top web sites";
	$link1 = "http://techcrunch.com/";
	$link2 = "http://9gag.com/";
	$link3 = "https://www.youtube.com/";

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
		<li>  
			<a href= <?php echo $link1 ?> target="_blank"> <?php echo $link1 ?> </a> 
		</li>

		<!-- Link 2 -->
		<li>  
			<a href= <?php echo $link2 ?> target="_blank"> <?php echo $link2 ?> </a> 
		</li>
		
		<!-- Link 3 -->
		<li>  
			<a href= <?php echo $link3 ?> target="_blank"> <?php echo $link3 ?> </a> 
		</li>

	</ul>
</body>
</html>