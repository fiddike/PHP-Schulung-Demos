<?php
	header('Set-Cookie: DEMO01=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT'); 
//	setcookie ("DEMO01", "", time() - 3600);
	header("Location: cookie_status.php",true,302);
