<?php

class ExceptionExample
{
	/*
	
	*/

	public function divide($value1, $value2)
	{
		$output = "Djeljenje brojeva $value1 i $value2";

		if ($value2 == 0) 
		{
			throw new Exception($output . '<br />Djeljenje sa 0 nije moguce!');
		} 
		else 
		{
			$output .= '<br />Rezultat: ' . $value1 / $value2 .'<br><br>';
			return $output;
		}
	}
}

$caj = new ExceptionExample();

/*
	PHP pokusava da izvrsi kod, ukoliko se desi error catch block ga uhvati i ispise bez da rusi aplikaciju
*/

try {
	echo $caj->divide(22, 11);
	echo $caj->divide(22, 0);
} catch (Exception $e) {
	echo $e->getMessage();
}

echo "<hr>";

try {
	$dateString = '2021-01-01';
	echo '<br />String:', $dateString;

	// l = puno ime dana - full day name, 
	// d = mjesec sa dvije cifre - 2 digit day of the month, 
	// F = puno ime mjeseca - full month name, 
	// Y = godina sa 4 cifre - 4 digit year
	
	$futureDate = new DateTime($dateString);
	echo '<br />Datum:', $futureDate->format('l, d F Y');

	echo "<br>";

	/*
		Ovaj dio koda vrati exception s obzirom da datum 2021-33-33 nije validan 
	*/
	
	$dateString = '2021-33-33';
	echo '<br />String:', $dateString;
	$futureDate = new DateTime($dateString);
	echo '<br />Datum:', $futureDate->format('l, d F Y');

} catch (Exception $e) {
	echo '<br />';
	echo 'Unable to process date/time information!';
	echo '<br />';
}

