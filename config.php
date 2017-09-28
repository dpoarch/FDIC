<?php
ini_set( "display_errors", 0);
session_start();
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "fdicwebcast");
// Database password
define("PASS", "P@ssw0rd");
// Database name
define("DB", "fdicwebcast");
 
############## Make the mysql connection ###########
$conn = new mysqli(HOST,DBUSER,PASS,DB);
if (!$conn)
{
	// the connection failed so quit the script
	die('Could not connect !<br />Please contact the site\'s administrator.');
}
?>
