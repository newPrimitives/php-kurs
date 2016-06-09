<?php

class App {

	// Default controller and default method when the app is bootstraped 
	protected $controllerString = 'home';
	protected $method = 'index';
	protected $params = [];

	// Method which parses the url, splits controller, method and params, does error handling in case something goes wrong and presents the passed parameters as PHP classes 
	public function __construct() {
		
		// Calls the parseUrl() method 
		$url = $this->parseUrl();

		// If the valid controller has been passed to the url set its value to $this->controller else leave the default home controller. Also unsets that array element 
		if(file_exists('../app/controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}

		// Regardless of weather the above if was satisfied require the file since there is a default value 
		require_once('../app/controllers/' . $this->controller. '.php');

		// Create an object from this file/controller since method_exists function requires and object to check if it contains a method
		$this->controller = new $this->controller;

		if(isset($url[1])) {

			if(method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// Rebase the index so index 2 becomes index 0
		// Long version of the code below 
		// for ($i = 2; $i < size_of($url); $i++) {
		// 	if($url[$i] != null) {
		// 		array_push($this->params, $url[$i])
		// 	}
		// }
		$this->params = $url ? array_values($url) : [];

		// Method from PHP which calls the function from the class if given an array which contains controller and that function as well as parameters which can be an empty array
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	// Method which explodes the URL by / sign so the controller, method, and params can be extracted, trims the whitespace and / from the end and sanitizes URL so any special character in the URL will not appear 
	protected function parseUrl() {

		if(isset($_GET['url'])) {

			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}

}