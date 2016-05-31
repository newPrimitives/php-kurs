<?php
	include_once('../head.html');

	echo '
	<div class="container center" style="margin-top: 30px; margin-bottom: 30px;"> 
		<article">
			<h1 class="title"> ' . $article['title']. ' </h1>
			<br>
			<img width="50%" src='. $article['image'].'> 
			<p> ' . $article['text']. ' </p>
		</article>
	</div>
	';