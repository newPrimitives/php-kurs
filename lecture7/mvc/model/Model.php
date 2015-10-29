<?php

include_once("model/Book.php");

class Model {

	/*
		Simulacija vracanja svih elementa iz baze 
	*/
		
	public function getBookList()
	{

		/*
			Koristeci __construct funckiju unutar modela Book u jednoj liniji koda instanciramo objekat i dodjelimo
			mu nove vrijednost bez pozivanja dodatnih funkcija
		 */
		
		return array(
			"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);
	}

	
	/*
		Simulacija vracanja jednog elementa iz baze
	*/

	public function getBook($title)
	{
		
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
	
	
}

?>