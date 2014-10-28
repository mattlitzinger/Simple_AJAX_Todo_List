<?php
	$server = "localhost";
	$db_name = ""; // Enter your database name
	$db_user = ""; // Enter your username
	$db_pass = ""; // Enter your password
	

	mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
	mysql_select_db($db_name) or die("Could not connect to database!");
?>