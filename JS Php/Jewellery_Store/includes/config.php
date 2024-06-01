<?php
error_reporting(E_ALL); // Set error reporting to display all types of errors

$host = "localhost";
$username = "root";
$password = "";
$db_name = "bbjewels";

// Create a connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
if (!mysqli_select_db($conn, $db_name)) {
    die("Could not select database: " . mysqli_error($conn));
}

// Now you can perform queries on the database
// ...

// Close the connection
mysqli_close($conn);
?>
