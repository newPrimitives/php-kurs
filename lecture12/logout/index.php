<?php

session_start();
unset($_SESSION['logged_user']);
header('location: ../index.php');

?>