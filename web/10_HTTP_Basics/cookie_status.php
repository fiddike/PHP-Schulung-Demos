<?php

if (array_key_exists('DEMO01', $_COOKIE)) {
	echo 'Value of coockie DEMO01: ' . $_COOKIE['DEMO01'];
} else {
	echo 'Coockie DEMO01 is not set.';
}

echo '<br /><br />To set the cookie, click here: <a href="cookie_set.php">set cookie</a>.';
echo '<br /><br />To remove the cookie, click here: <a href="cookie_remove.php">remove cookie</a>.';