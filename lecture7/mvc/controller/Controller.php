<?php

/*
	include_once("model/Model.php") ukljucuje fajl Model.php i sve njegove funkcije u Controller cineci
	ih dostupnim za koristenje		
*/

include_once("model/Model.php");


class Controller {

	public $model;
	
	/*
		Inicijalizira novi objekat tipa Model 
		Koristeci funkciju __construct() incijalizacija ce se desiti cim se instancira Controller 
	*/

	public function __construct()  
    {  
        $this->model = new Model();

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
			
			$books = $this->model->getBookList();
			include 'view/htmlHead.php';
			include 'view/booklist.php';
		}

		else
		{
			/*
				Ukoliko se u linku nalazi varijabla book sa nekom vrijednosti pozivamo funkciju getBook iz 
				modela i proslijedimo ime knjige
			*/
		
			$book = $this->model->getBook($_GET['book']);
			include 'view/htmlHead.php';
			include 'view/viewbook.php';
		}

	}
}

?>