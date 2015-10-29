
<table>

	<tr>
		<td>Title</td>
		<td>Author</td>
		<td>Description</td>
	</tr>

	<?php 

		/*
			booklist.php je ukljucen u Controller zbog cega su sve varijable unutar controllera dostupne 
		*/
	
		foreach ($books as $title => $book)
		{
			echo '
			<tr>
				<td>
					<a href="index.php?book='.$book->title.'">'.$book->title.'</a>
				</td>
				<td>'.$book->author.'</td>
				<td>'.$book->description.'</td>

			</tr>';
		};

	?>

</table>

</body>
</html>