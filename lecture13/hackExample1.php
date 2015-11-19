<?php

	$value = "<script> alert('hacked'); </script>";
	echo filter_var($value, FILTER_SANITIZE_STRING);

	echo '<br>';

	$value = "EMAIL @ EMPTY . COM"; 
	echo filter_var($value, FILTER_SANITIZE_EMAIL);

	echo "<br>";

	$value = "one";
	echo (int) $value;