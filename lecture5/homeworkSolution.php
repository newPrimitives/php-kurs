<?php
	
	/**
	 * Funkcija paginate-a niz, generise linkve za prev i next page i handle-a potencijalne errore 
	 *
	 * @param  array    $array  Niz (data) 
	 * @param  integer  $pageSize Koliko elemenata niza se prikaze po stranici
	 * @return novi niz sa brojem elemenata definisanim varijablom pageSize
	 */ 

	function paginate($array, $pageSize)
	{	

		// Provjerava da li je varijabla setovana u linku, ukoliko nije defaultna vrijednost je page 1 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}
		else {
			$page = 1;
		}
		
		// Racuna poziciju elementa u nizu od koje se generise novi niz
	    $start = ($page - 1) * $pageSize;

	    // Generisanje paginated niza 
	   	$arrayChunk = array_slice($array, $start, $pageSize);

	   	// Generisanje linkova za prev i next page. Logika ispod ne dozvoljava da varijabla u linku bude negativan broj
	   	// ili da paginate-a prazan array 
	   	
	    if($page < 2){
			$prevPage = 1;
		} else {
			$prevPage = $page-1;
		}

	   	if (sizeof($arrayChunk)< $pageSize){
	   		$nextPage = $page;
	   	}
	   	else {
	   		$nextPage = $page+1;
	   	}

	   	printf('<a href="homeworkSolution.php?page=%s"> <button> << </button> </a>', $prevPage);
		printf('<a href="homeworkSolution.php?page=%s"> <button> >> </button> </a>', $nextPage);

	   	return $arrayChunk;

	}

	function generateHTMLImage($items)
	{
		$paginatedItems = paginate($items, 2);

		foreach ($paginatedItems as $item) {
			printf('<br>');
			printf('<img src=%s width="500px">', $item);
			printf('<br>');
			printf('<a href=%s> %s </a>', $item, $item);
			printf('<br>');
		}
		
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

<h1> lol.com </h1>
<?php

$links = array('http://img-9gag-fun.9cache.com/photo/aepdVnb_460s.jpg', 'http://img-9gag-fun.9cache.com/photo/am8doQ2_460s_v1.jpg', 'http://img-9gag-fun.9cache.com/photo/anBdOdL_460s_v1.jpg', 'http://img-9gag-fun.9cache.com/photo/a1YxQ0G_460s.jpg', 'http://img-9gag-fun.9cache.com/photo/a1YxmRD_460s.jpg', 'http://img-9gag-fun.9cache.com/photo/a4LxMK6_460s.jpg', 'http://img-9gag-fun.9cache.com/photo/aRVyBQ5_460s.jpg');

echo generateHTMLImage($links);

?>

</body>
</html>