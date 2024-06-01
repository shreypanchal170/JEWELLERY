<?php
//db connection settings
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bbjewels"; // Database name

$conn = mysql_connect($host, $username, $password);// or trigger_error(mysql_error(mysql_error(),E_USER_ERROR)
mysql_select_db($db_name, $conn) or die("could not" . mysql_error());
?>