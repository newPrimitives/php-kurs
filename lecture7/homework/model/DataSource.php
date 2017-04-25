<?php  

include_once ('./model/User.php');

class DataSource 
{
	private $users = [];

	function __construct()
	{
		$this->generateUsers();
	}

	function getUser($gender) {
		$user = $this->findUserForGender($gender);
		return $user;
	}

	private function findUserForGender($gender) {
		$names = array_filter(
		    $this->users,
			function ($e) use ($gender) {
		        return $e->gender == $gender;
		    }
		);

		$key = array_rand($names);
		return $names[$key];
	}

	private function generateUsers() {
		$this->users = [
			new User('Nermin Sehic', 'male', 'BiH'),
			new User('Sara Brock', 'female', 'USA'),
			new User('Ted Chavezc', 'male', 'Spain'),
			new User('Lois Henderson', 'female', 'France'),
			new User('William L. Mitchell', 'male', 'Germany'),
			new User('Nimia Vigil Preciado', 'female', 'Mexico'),
			new User('Jalal Tahir', 'male', 'United Arab Emirates'),
			new User('Konrád Artur', 'male', 'Czech'),
			new User('Samppa Eerikki', 'male', 'Finland'),
			new User('Órfhlaith Muriel', 'female', 'Ireland'),
			new User('Lurdes Priscila', 'female', 'Romania'),
			new User('Jana Michaela', 'male', 'Slovaika'),
		];
	}
}	