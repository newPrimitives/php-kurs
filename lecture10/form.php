<?php 
  if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    echo $firstname . ' ' . $lastname . ' ' . $gender;
  } 
?>

<form action="index.php" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" value="" placeholder="Upisi svoje ime">
    <br>
    Last name:<br>
    <input type="text" name="lastname" placeholder="Upisi svoje prezime">
    <br><br>
     <input type="radio" name="gender" value="1" checked>Musko
    <br>
    <input type="radio" name="gender" value="2">Zensko <br> <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>