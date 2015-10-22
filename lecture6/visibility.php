<?php

class Visibility
{
	// dva property-a sa razlicitim visibility parametrom
	public $publicVar = 'PUBLIC';
	private $privateVar = 'PRIVATE';
	
	// dvije metode sa razlicitim visibility parametrom
	public function publicMethod()
	{
		return 'PUBLIC';
	}
	private function privateMethod()
	{
		return 'PRIVATE';
	}

	public function getPrivateMethod()
	{
		return $this->privateVar;
	}
	
}


$visibility = new Visibility();

echo '<br />', $visibility->publicVar;
echo '<br />', $visibility->publicMethod();

//echo '<br />', $visibility->privateVar;
//echo '<br />', $visibility->privateMethod();

//echo '<br />', $visibility->getPrivateMethod();