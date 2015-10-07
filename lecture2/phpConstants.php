<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Konstante u PHP </title>
  <meta name="description" content="Konstante u PHP">
  <meta name="author" content="Academy387">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<h1> Konstante u PHP </h1>	

	<!-- Inicijalizacija konstante Int tipa -->

  <h3> Integer </h3>
	
  <?php
		define('INT_CONSTANT', 1, false);
		echo INT_CONSTANT;
	?>

  <br>

  <!-- Inicijalizacija konstante String tipa -->

  <h3> String </h3>
  
  <?php
    define('STRING_CONSTANT', "Some string", false);
    echo STRING_CONSTANT;
  ?>

  <br>

  <!-- Inicijalizacija konstante Bool tipa -->

  <h3> Boolean </h3>
  
  <?php
    define('BOOL_CONSTANT', true, false);
    echo BOOL_CONSTANT;
  ?>

  <br>
  
  <h3> String varijabla </h3>
  
  <?php
    $stringVariable = STRING_CONSTANT;
    echo $stringVariable;
  ?>


</body>
</html>