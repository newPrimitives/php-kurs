<?php

// Klasa Connection koja jednostavno pravi konekciju na bazu. Poziva se prilikom svake interakcije sa bazom
class Connection {

	public function connect() 
	{
		return new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
	}

}

