<?php

include_once ('./model/DataSource.php');

/**
* 
*/
class RandomViewController
{
	protected $dataSource;
	
	function __construct()
	{
		$this->dataSource = new DataSource();
	}

	function index() {
		$gender = 'male';
		if(isset($_GET['gender'])) {
			$gender = $_GET['gender'];
		}
		 
		$user = $this->dataSource->getUser($gender);
		include('./view/index.php');
	}
}