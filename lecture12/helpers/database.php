<?php

require_once 'connection.php';
require_once 'password.php';

class Database extends Connection
{	
	public $pdo;

	public function __construct() {
        $this->pdo = $this->connect();
    }

	public function getAllAuthors() 
	{

		$query = $this->pdo->prepare("SELECT * FROM author ORDER BY id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

	public function getAllArticles()
	{
		$query = $this->pdo->prepare("SELECT article.id as 'id', article.title as 'title', article.text as 'text', article.image as 'image', author.name as 'name' FROM author, article WHERE
			article.author_id = author.id ORDER BY article.id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

	public function getArticle($id)
	{
		$query = $this->pdo->prepare("SELECT article.id as 'id', article.title as 'title', article.text as 'text', article.image as 'image', author.name as 'name' FROM author, article WHERE
			article.author_id = author.id AND article.id = $id ORDER BY article.id DESC");
		$query->execute();
		$result = $query->fetch();
		return $result;
	}

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

		    else {
	 			echo "<h1> Pogresan email ili password. </h1>";
	 		}
 		}

 		else {
 			echo "<h1> Pogresan email ili password. </h1>";
 		}
		
	}

	public function getAllComments($article_id)
	{
		$query = $this->pdo->prepare("SELECT comments.text as text, user.name as name FROM comments, user, article
			WHERE comments.user_id = user.id AND comments.article_id = article.id AND article.id = $article_id ORDER BY comments.id DESC");
		$query->execute();
		$result = $query->fetchAll();

		return $result;
	}

}