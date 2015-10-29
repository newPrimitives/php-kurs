<?php

/*
	Klasa Book koja ima property-e title, author, description
	Funkcija __construct() ih inicijalizira prilikom instanciranja objekta Book  
*/
class Book {
	
	public $title;
	public $author;
	public $description;
	
	public function __construct($title, $author, $description)  
    {  
        $this->title = $title;
	    $this->author = $author;
	    $this->description = $description;
    } 
}

?>