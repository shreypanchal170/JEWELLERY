<?php
date_default_timezone_set("Asia/Muscat");
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
$_SESSION['code'] = rand();
$code = $_SESSION['code'];
?>

<?php

include("includes/mysqli_connection.php");

$sql = "SELECT * FROM cart WHERE cust_id = '$userid' AND checkout = 'n'";
$query = mysqli_query($db_conx, $sql);

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	$id = $row['id'];
	$jewelid = $row["jewel_id"];
	$qty = $row["qty"];
	$userid = $row["cust_id"];
	$checkout = $row['checkout'];
	$added = $row['added'];
	$checked = $row['checkedon'];
	$trans = $row['trans'];

	$today = date("Y-m-d H:i:s");
	
	//$topsell = "UPDATE jewellery SET topsell=(topsell + 1) WHERE jewellery.id = $jewelid";
	//mysqli_query($db_conx,$topsell);
	
	$sql = "UPDATE cart SET checkout = 'y', checkedon = '$today', trans = '$code' WHERE id = '$id'";
	mysqli_query($db_conx, $sql);
}
	// Close your database connection
	mysqli_close($db_conx);
	
	echo "<script>alert('Thank You for Your Purchase!')</script>";
	echo "<script>window.location.href='receipt.php'</script>";
?>
 