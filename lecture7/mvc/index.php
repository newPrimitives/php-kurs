<?php 
	/*
		Funkcija include_once iz foldera Controller ukljuci file Controller.php koji je nas inicijalni kontroler 
	*/
	
	include_once("controller/Controller.php");


	// Instancira novi objekat Controller u varijablu $controller 
	
	$controller = new Controller();


	/*
		Poziva funkciju invoke() iz objekta $controller
	*/
		
	$controller->invoke();

?>