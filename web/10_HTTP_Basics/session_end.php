<?php
	session_start();
	// löscht die session Datei, lässt PHP Variable und Cookie am Platz.
	// Daten können gelesen werden und eine Neues Session Datei wird ggf. mit der Alten ID wieder angelegt.
	session_destroy(); 
	echo 'session_destroy() wurde aufgerufen.<br /><br />';

	if (isset($_SESSION['counter'])) {
	echo 'Aktueller Wert von $_SESSION[\'counter\']: ' . $_SESSION['counter'];
	} else {
	echo '$_SESSION[\'counter\'] is aktuell nicht gesetzt.';
	}
	
	echo '<br /><br />Session starten und zaehlen: <a href="session_start_and_count_ip.php">session_start_and_count_ip</a>';	