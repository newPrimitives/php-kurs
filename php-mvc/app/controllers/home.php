<?php

// Single controller used to manipulate the view based on the input from the url 
class Home extends Controller {
	
	// method called by the route 	
	public function index ($param = '') {
		
		$user = $this->model('User');
		$user->name = $param;
			
		$this->view('home/index', ['name' => $user->name]);
	}	
	
	public function second ($param = '') {
		
		$user = $this->model('User');
		$user->name = $param;

		$this->view('home/second', ['name' => $user->name]);
	}
}