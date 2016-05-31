<?php
// Managing the Code -- OOP: Adding Properties

class User
{
	// Property klase moze imati inicijalnu vrijednost ili biti prazna varijabla 
	
	public $firstName = '';
	public $lastName = '';
	public $accountNumber = 0;
	public $balance = 0;
	public $isMember = FALSE;
	public $preferences = array();

	public function setupUser($fname, $lname, $accountNumber, $balance, $isMember, $preferences)
	{
		$this->firstName = $fname;
		$this->lastName = $lname;
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
		$this->isMember = $isMember;
		$this->preferences = $preferences;
	}
}

// Kreiranje objekta $user koji je instanca klase User van scop-a klase 
$user = new User();

// Primjer dodjeljivanja vrijednosti varijabli 

$user->setupUser('John', 'Doe', 998877, 123456.88, TRUE, array('Cigars', 'Conservative Party', 'Polo'));

echo $user->firstName;