<?php
	
	// Ovaj file je specifican jer ima logiku koja odlucuje da li se prikazuju svi clanci ili samo jedan specifican clanak
	require_once('../helpers/database.php');
    $database = new Database();

    // Ukoliko se u URLu nalazi varijabla article, npr: localhost:8000/articles?&artcle='neki-clanak' onda prikazujemo samo jedan clanak koristeci vrijednost te varijable iz URLa da radimo pretragu po bazi  Ukoliko se u URLu ne nalazi varijabla article onda jednostavno uzmemo sve clanke 
   	// NOTE: 'isset() == false' je isto kao i '!isset()'
	if (!isset($_GET['article']))
	{
		$articles = $database->getAllArticles();
		include_once 'articlesTemplate.php';		
	}
	else
	{
		$article = $database->getArticle($_GET['article']);
		$comments = $database->getAllComments($article['id']);
		include_once 'articleTemplate.php';
	}

?>