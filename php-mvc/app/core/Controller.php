<?php

// Base controller extended by every controller handles easy initialization of models and passing data to views 
class Controller {

	// Protected method used to initialize a model 
	protected function model ($model) {
		
		require_once('../app/models/' . $model . '.php');
		return new $model();
	}

	// Protected method used to present and pass the data to view 
	protected function view($view, $data = []) {

		require_once('../app/views/' . $view . '.php');
	}
}