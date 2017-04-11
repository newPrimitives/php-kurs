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

	   	$base = basename(__FILE__, '.php');
	   	printf('<a href="$base?page=%s"> <button> << </button> </a>', $prevPage);
		printf('<a href="$base?page=%s"> <button> >> </button> </a>', $nextPage);

	   	return $arrayChunk;

	}


	/**
	 * Funkcija generise HTML ul listu 
	 *
	 * @param  array    $array  Niz (data) 
	 * @return HTML lista sa vrijednostima arraya 
	 */ 
	
	function generateHTMLList($items) 
	{	

		$paginatedItems = paginate($items, 2);

		printf('<ul>');
		
		foreach ($paginatedItems as $item)
		{
			printf('<li> %s </li>', $item);
		}

		printf('</ul>');	

		return TRUE;
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Pagination </title>
  <meta name="description" content="Pagination">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

<?php

	$cities = array('Sarajevo', 'Banja Luka', 'Tuzla', 'Zenica', 'Mostar', 'Bihac', 'Travnik', 'Visegrad', 'Prijedor');
	generateHTMLList($cities);

?>


</body>
</html>