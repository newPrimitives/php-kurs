<?php include_once('../head.html'); ?>

<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    
    <form action="form.php" method="POST">
      
      <fieldset>
        <legend>Dodaj novog autora:</legend>
        Ime: <br>
        <input type="text" name="data[name]" placeholder="Ime">

        <br><br>

        Email:<br>
        <input type="email" name="data[email]" placeholder="Email">

        <br><br>

        Mjesto rodjenja:<br>
        <input type="text" name="data[pob]" placeholder="Mjesto rodjenja">

        <br><br>

        Datum rodjenja:<br>
        <input type="date" name="data[dob]">

        <br><br>

        <input type="submit" value="Submit" class="submit">

      </fieldset>

    </form>

</div>