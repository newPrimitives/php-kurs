<?php

/*
	include_once("model/Books.php") ukljucuje fajl Books.php i sve njegove funkcije u Controller cineci ih dostupnim za koristenje		
*/

include_once("model/Books.php");


class Controller {

	public $books;
	
	/*
		Inicijalizira novi objekat tipa Books 
		Koristeci funkciju __construct() incijalizacija ce se desiti cim se instancira Controller 
	*/

	public function __construct()  
    {  
        $this->books = new Books();

    } 


	/*
		Funkcija invoke koja poziva view zavisno od vrijednosti u linku
		invoke() je pozvan u fajlu index.php
	*/

	public function invoke()
	{
		if (!isset($_GET['book']))
		{
			/*
				Ukoliko u linku nema varijable book pozivamo funkciju getBookList() iz modela koja nam vraca sve knjige 
				te vrijednosti spasimo u varijablu $books koju ispisujemo u view booklist.php
			*/
			
			$books = $this->books->getBookList();
			include 'view/htmlHead.php';
			include 'view/booklist.php';
		}

		else
		{
			/*
				Ukoliko se u linku nalazi varijabla book sa nekom vrijednosti pozivamo funkciju getBook iz 
				modela i proslijedimo ime knjige
			*/
				
			$book = $this->books->getBook($_GET['book']);
			include 'view/htmlHead.php';
			include 'view/viewbook.php';
		}

	}
}

?>
