<?php
	session_start();
	
	if (isset($_SESSION['counter'])) {
		$_SESSION['counter'] = $_SESSION['counter']+1;
	} else {
		$_SESSION['counter'] = 0;
	}
	
	echo 'Aktueller Wert von $_SESSION[\'counter\']: ' . $_SESSION['counter'];
	
	echo '<br /><br />Sessions werden gespeichert in: ' . session_save_path();
	
	echo '<br /><br />Session beenden: <a href="session_end.php">Session end</a>';	