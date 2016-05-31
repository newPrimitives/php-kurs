<?php
    
    include_once('../head.html');
    require_once('../helpers/database.php');
    
    $database = new Database();
    $authors = $database->getAllAuthors();
    include_once('addArticleTemplate.php');

?>
