<?php
	if(isset($_POST['submit'])){
		$phone = (int) $_POST['phone'];

		if($phone == 0){
			echo "Pogresan format!";
		}
	}
?>

<form action="hackExample2.php" method="POST">
	<input type="text" placeholder="phone" name="phone">
	<input type="submit" value="submit" name="submit">
</form>