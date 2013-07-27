<?php
	header('Set-Cookie: DEMO01=DEMO01_Cookie_Value_Yeah'); 
	// setcookie ("DEMO01", "DEMO01_Cookie_Value_Yeah");
	header("Location: cookie_status.php",true,302);
