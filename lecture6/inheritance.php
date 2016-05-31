<?php

class Html 
{

	public function docType($title)
	{
		return 
		'<!doctype html>
			<html lang="en">
			<head>
				<meta charset="utf-8">

				<title> '. $title . '</title>
				<meta name="description" content="'. $title . '">
				<meta name="author" content="Nermin Sehic">

				<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
				<![endif]-->
				  
			</head>' . PHP_EOL;
	}

}

class Website extends Html
{	

	public function helloWorld()
	{
		$result = $this->docType('Hello World');
		$result .= "<h1> Hello World </h1> \n"; 

		return $result;
	}

}

$website = new Website();
echo $website->helloWorld();
