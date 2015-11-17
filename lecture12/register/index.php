<?php  
    include_once('../head.php');
?>
<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
    <form action="form.php" method="POST">
      
      <fieldset>
        <legend>Registracija:</legend>
        
        Ime i prezime: <br>
        <input type="text" name="data[name]" required="required" placeholder="Ime i prezime">

        <br><br>

        Email:<br>
        <input type="email" name="data[email]" required="required" placeholder="Email">

        <br><br>

        Password: <br>
        <input type="password" name="data[password]" required="required" placeholder="Password">

        <br> <br>

        <input type="submit" value="Submit" class="submit">

      </fieldset>

    </form>
</div>