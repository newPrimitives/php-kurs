<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <form action="form.php" method="POST" >
      
      <fieldset>
        <legend>Dodaj novi clanak:</legend>
        
        Naslov: <br>
        <input type="text" name="data[title]" required="required" placeholder="Naslov">
        
        <br><br>

        Tekst:<br>
        <textarea name="data[text]" required="required" placeholder="Email"> 
        </textarea>
        
        <br><br>
        
        Slika: <br>
        <input type="text" name="data[image]" required="required" placeholder="Thumbnail">
        
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