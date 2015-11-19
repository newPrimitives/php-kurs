<?php

if(isset($_POST["submit"])) {
		
		// Definisanje foldera za upload
	 	$target_dir = "uploads/";

	 	// uzimanje imena uploadovanog file-a 
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		// Incijalizacija varijable uploadOK sa default vrijednoscu true
		$uploadOk = 1;

		// Uzimanje ekstenzije slike (.jpg, .png...) 
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// Provjera da li je uploadovani file slika 
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        echo "Fajl nije slika";
	        $uploadOk = 0;
	    }

		if ($uploadOk == 0) {
		    echo "Greska, pokusajte ponovo.";
		} else {

			// Ukoliko je uploadOk == 1 prebacujemo sliku u prethodno definisani folder 
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "Fajl ". basename( $_FILES["fileToUpload"]["name"]). " je uploadovan.";
		    } else {
		        echo "Greska pokusajte ponovo.";
		    }
		}

	}

?>

<!-- forma koja ima element file mora imati definisan parametar enctype="multipart/form-data" --> 
<form action="fileUpload.php" method="POST" enctype="multipart/form-data">
	
	<input type="file" placeholder="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Submit" name="submit">

</form>
