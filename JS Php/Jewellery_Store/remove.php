<?php
session_start();

if (isset($_SESSION['user_id']))
{
	$userid = $_SESSION['user_id'];
}

if (isset($_SESSION['username']))
{
	$User = $_SESSION['username'];
}

else
{
	$User = "";
}
?>

<?php

$jewelid = $_POST['txtjewelid'];

include("includes/mysqli_connection.php");

$sql = "DELETE FROM cart WHERE cust_id = $userid AND jewel_id = $jewelid";

mysqli_query($db_conx, $sql);

// Close your database connection
mysqli_close($db_conx);

echo "<script>alert('Item Successfully Removed');</script>";
echo "<script>window.location.href = 'index-1.php';</script>";
?>
 