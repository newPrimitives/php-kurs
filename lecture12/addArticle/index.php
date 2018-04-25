<?php
    // Ukljucujemo head.php file da radi reuse-anja HTML koda koji je isti na svakoj stranici i radi menija 
    include_once('../head.php');

    // Ukoliko user nije logovan a pokusa otvoriti ovaj page - redirectamo ga na login 
    if(!isset($_SESSION['logged_user'])){
        // PHP kod za reidrect 
        header('location: ../login');
    }
        
    // Ukljucujemo konekciju na bazu 
    require_once('../helpers/database.php');

    // Pravimo novi objekat $database iz kojeg zovemo funkciju getAllAuthors() koja nam iz baze vrati sve upisane autore 
    $database = new Database();
    $authors = $database->getAllAuthors();

?>

<!-- HTML forma za upis novog clanka. enctype="multipart/form-data" se koristi prilikom upload-a slika unutar form--> 
<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <form action="form.php" method="POST" enctype="multipart/form-data">
      
      <fieldset>
        <legend>Dodaj novi clanak:</legend>
            
        Naslov: <br>
        <input type="text" name="data[title]" required="required" placeholder="Naslov">

        <br><br>

        Tekst:<br>
        <textarea name="data[text]" required="required" placeholder="Email"> </textarea>

        <br><br>

        Slika: <br>
        <input type="file" name="image" required="required">

        <br><br>

        Autor: <br>
        <!-- Unutar select dropdown-a ispisujemo sve autore ['id'] koristimo pri upisu u bazu a ['name'] prikazujemo korisniku radi boljeg UI-a. --> 
        <select name="data[author]">
            <?php
                foreach ($authors as $author){
                    echo "<option value=" . $author['id'] . ">" . $author['name']. "</option>";      
                }
            ?>
        </select>

        <br> <br>
        
        <input type="submit" value="Submit" class="submit">

      </fieldset>

    </form>
</div>