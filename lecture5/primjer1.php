<?php
	
	function dropDownList($items) 
	{
		$result = '<select>';
			
		foreach($items as $item) {
				$result .= '<option value='. $item.'>'. $item.'</option>';
		}

		$result .= '</select>';

		return $result;
	}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> Hello World</title>
  <meta name="description" content="Hello World">
  <meta name="author" content="Nermin Sehic">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body>

	<?php
		
		$cities = array('Sarajevo', 'Banja Luka', 'Tuzla', 'Zenica', 'Mostar', 'Bihac', 'Travnik', 'Visegrad', 'Prijedor');
		echo dropDownList($cities);

		$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		echo dropDownList($days);
	?>

</body>
</html>