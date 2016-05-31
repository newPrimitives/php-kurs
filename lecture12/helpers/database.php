<?php

require_once 'connection.php';
require_once 'password.php';

class Database extends Connection
{	
	public $pdo;

	// Construct funkcija koja povecuje klasu Database za bazom iz klase Connection 
	public function __construct() {
        $this->pdo = $this->connect();
    }
    

    /*
    	Funkcija vraca se autore iz baze 
    */
   
	public function getAllAuthors() 
	{

		$query = $this->pdo->prepare("SELECT * FROM author ORDER BY id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}


	/*
    	Funkcija vraca se clanke iz baze 
    */

	public function getAllArticles()
	{
		$query = $this->pdo->prepare("SELECT article.id as 'id', article.title as 'title', article.text as 'text', article.image as 'image', author.name as 'name' FROM author, article WHERE
			article.author_id = author.id ORDER BY article.id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}


	/*
    	Funkcija kao parametar prima id clanka i vrati sve atribute iz baze za taj clanak  
    */

	public function getArticle($id)
	{
		$query = $this->pdo->prepare("SELECT article.id as 'id', article.title as 'title', article.text as 'text', article.image as 'image', author.name as 'name' FROM author, article WHERE
			article.author_id = author.id AND article.id = $id ORDER BY article.id DESC");
		$query->execute();
		$result = $query->fetch();
		return $result;
	}


	/*
    	Funkcija se poziva prilikom registracije, prima kao parametar email i provjerava da li on vec postoji u bazi.
    	Ukoliko ne postoji vraca true, a ukoliko da vraca false.  
    */

	public function isEmailFree($email)
	{	
		$query = $this->pdo->prepare("SELECT * FROM user WHERE email = '$email'");
		$query->execute();
		$result = $query->fetch();

		if (empty($result)){

			return true;
		}
		else {
			return false;
		}
	}


	/*
    	Funkcija se poziva prilikom logina, prima kao parametre email i password, pronalazi u bazi usera na osnovu emaila. Ukoliko
    	result nije prazan, provjerava password. Ukoliko nema errora znaci da je user logovan. 
    */
   
	public function getUser($email, $formPassword)
	{	
		$query = $this->pdo->prepare("SELECT * FROM user WHERE email = '$email'");
		$query->execute();
		$result = $query->fetch();
 
 		if (!empty($result)){
 			$password = new Password();

 			if($password->password_verify($formPassword, $result['password']) == 1){
 				
		       return $result;
		    }  

		    // Linije 95 - 99 isto kao
		    // $var = $password->password_verify($formPassword, $result['password'])
		    // if($var == 1){
 				
		    //    return $result;
		    // }  

		    else {
	 			echo "<h1> Pogresan password. </h1>";
	 		}
 		}

 		else {
 			echo "<h1> Pogresan email. </h1>";
 		}
		
	}


	/*
    	Funkcija se poziva prilikom ispisivanja jednog clanka. Prima kao parameter id od clanka i iz table comments ispisuje sve komentare 
    	vezane za taj clanak.
    */
   
	public function getAllComments($article_id)
	{
		$query = $this->pdo->prepare("SELECT comments.text as text, user.name as name FROM comments, user, article
			WHERE comments.user_id = user.id AND comments.article_id = article.id AND article.id = $article_id ORDER BY comments.id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

}