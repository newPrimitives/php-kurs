
<h1> Timestamps </h1>

<?php

	// Trenutno vrijeme u sekundama koje je proteklo od unix timestamp-a 
	echo 'Current Timestamp: ', time();

	// l = puno ime dana 
	// d = mjesec sa dva broja
	// F = puno ime mjeseca
	// Y = format godine sa 4 broja
	echo '<br />Danasnji datum ', date('l, d F Y', time());

	// Konverzija datuma u timestamp 
	$timeStamp = mktime(0, 0, 0, 11, 19, 2015);
	echo '<br />Timestamp za 11 Novembar 2015 u ponoc: ', $timeStamp;

	// Konverzija datuma u obliku stringa u timestamp 
	$timeStamp = strtotime('2015-11-19');
	echo '<br />Timestamp za 2015-11-19: ', $timeStamp;

?>

<h1> Rad sa datumima </h1>

<?php

	printf('<div>Dan: %s</div>', 	date('l'));
	printf('<div>Mjesec: %s</div>', date('F (M)'));
	printf('<div>Godina %s</div>', 	date('Y'));
	printf('<div> Sati, minute, PM/AM: %s</div>', date('h:i A'));
	printf('<div> m/d/y: %s</div>', date('m/d/y'));
	printf('<div>d M Y: %s</div>', date('d M Y'));
	printf('<div> Godina-mjesec-dan-sati-minute-sekunde: %s</div>', date('Y-m-d H:i:s'));

?>

<h1> Operacije sa datumima </h1>

<?php

	echo "Trenutno vrijeme: ", date('d-m-Y H:i:s', time());
	$timestamp = time()+86400;
	echo "<br> Sutrasnji dan: ", date('d-m-Y H:i:s',$timestamp);
	$timestamp = time()-86400;
	echo "<br> Jucerasnji dan: ", date('d-m-Y H:i:s',$timestamp);


