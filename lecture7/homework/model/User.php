<?php 

class User 
{
	public $name;
	public $gender;
	public $country;

	function __construct($name, $gender, $country)
	{
		$this->gender = $gender;
		$this->name = $name;
		$this->country = $country;
	}
}
