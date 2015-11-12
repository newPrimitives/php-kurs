<?php
    
    include_once('../head.html');
    require_once('../helpers/database.php');

    $database = new Database();
    $authors = $database->getAllAuthors();

?>
<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <form action="form.php" method="POST">
      
      <fieldset>
        <legend>Dodaj novi clanak:</legend>
        
        Naslov: <br>
        <input type="text" name="data[title]" placeholder="Naslov">

        <br><br>

        Tekst:<br>
        <textarea name="data[text]" placeholder="Email"> </textarea>

        <br><br>

        Slika: <br>
        <input type="text" name="data[image]" placeholder="Thumbnail">

        <br><br>

        Autor: <br>
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