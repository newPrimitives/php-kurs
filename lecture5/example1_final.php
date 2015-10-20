<?php

	$links = array("http://techcrunch.com/", "http://9gag.com/", "https://www.youtube.com/");

	function generateHTMLList($items) 
	{	

		printf('<ul>');
		
		foreach ($items as $item)
		{
			printf('<li> <a href="%s" target="_blank"> %s </a> </li>', $item, $item);
		}

		printf('</ul>');	

		return TRUE;
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Vjezba 1</title>
  <meta name="description" content="Vjezba 1">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

<h1> Vjezba 1 </h1>

<?php generateHTMLList($links) ?>

</body>
</html>