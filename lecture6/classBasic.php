<?php
	
/*
	Deklaracija klase
	Ime klase uvijek pocinje velikim slovom i u kodu i u imenu PHP file-a
 */	

class UserProfile()
{	
	// Property klase 
	
	public $firstName;
	public $lastName;
	public $gender;
	public $address;

	// Metode klase 
	
	public function generateUserCard($firstName, $lastName, $gender, $address)
	{
		// Neki kod
	}

	public function getUserData($id)
	{
		// Neki kod 
	}

}

?>