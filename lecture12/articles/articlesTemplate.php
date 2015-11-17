<?php
	
	include_once('../head.php');

	echo '<div class="container" style="margin-top: 30px; margin-bottom: 30px;">'; 
	
	foreach ($articles as $article){
		echo "<h1>", $article['title'], "</h1>";
		echo "<h3> Autor: ", $article['name'], "</h3>";
		echo '
			<article> 
			<div class="left"> 
				<img src=" '. $article["image"]. '" width="300px"> 		
			</div> 
			<div>
				<p> 
					' . $article["text"]. '
				</p>
			</div>
			<div style="clear:both"> </div>
			<a href="index.php?article='.$article['id'].'" class="read-more"> Procitaj cijeli clanak </a>
			</article>	
		';
	}

	echo "</div>";
