<?php
	define('SITE_NAME', "project");
	define('DB_USER', "root");
	define('DB_PASS',"");
	define('DB_SERVER_NAME', "localhost");
	define('DB_NAME', "voting_db");
	
	$conn = mysql_pconnect(DB_SERVER_NAME, DB_USER, DB_PASS) or die("Unable to connect to mysql server: ". mysql_error());
	$db = mysql_select_db(DB_NAME) or die("Unable to select db". mysql_error())
?>