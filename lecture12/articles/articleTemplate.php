<?php
	// Template za jedan clanak - cisti HTML koji samo ispisuje vrijednosti iz baze kroz PHP 
	include_once('../head.php');
	echo '
	<div class="container center" style="margin-top: 30px; margin-bottom: 30px;"> 
		<article">
			<h1 class="title"> ' . $article['title']. ' </h1>
			<br>
			<img src='. $article['image'].'> 
			<p> ' . $article['text']. ' </p>
		</article>
	</div>';

	echo '<div class="container" style="margin-top: 30px; margin-bottom: 30px;"> ';
	if(isset($_SESSION['logged_user'])){
		echo '
			<div style="text-align: left"> 
			<h3> Napisi komentar </h3>
			
			<form method="POST" action="../comments/form.php"> 

				<textarea style="width: 100%; height: 70px;" name="data[text]"> </textarea>
				<input type="hidden" name="data[article_id]" value="'. $article['id'].'">   
				<input type="submit" value="Submit" class="submit">
			</form>';
	}
	echo '
		<br>
		<h3> Komentari </h3>';
			
			foreach ($comments as $comment){

				echo '
					<div style="font-weight: bold;"> '. $comment['name'] .' je napisao/la: </div>
					<div> '. $comment['text'].' </div>
					<hr>
				';
			};

	echo '</div>';
		
	
			
			
			
			
			
