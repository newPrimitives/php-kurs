<?php

require_once 'connection.php';

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

}