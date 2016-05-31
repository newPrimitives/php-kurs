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
}

// Kreiranje objekta $user koji je instanca klase User van scop-a klase 
$user = new User();

// Primjer dodjeljivanja vrijednosti varijabli 

$user->firstName = 'John';
$user->lastName = 'Doe';
$user->accountNumber = 998877;
$user->balance = 1230467.88;
$user->isMember = TRUE;
$user->preferences = array('Cigars', 'Conservative Party', 'Polo');

echo '<pre>', var_dump($user), '</pre>';