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

$sql = "SELECT * FROM cart WHERE cust_id = '$userid' AND jewel_id = '$jewelid' AND checkout = 'n'";
$query = mysqli_query($db_conx, $sql);

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	$id = $row['id'];
	$jewelid = $row["jewel_id"];
	$qty = $row["qty"];
	$userid = $row["cust_id"];
	$checkout = $row['checkout'];
}

if($qty <= 1)
{
	echo "<script>alert('You cannot remove more than this!')</script>";
	echo "<script>alert('Click on X to remove this item completely!')</script>";
}

else
{
	$qty = $qty - 1;
	$sql = "UPDATE cart SET qty = '$qty' WHERE id = '$id'";
	mysqli_query($db_conx, $sql);
}

// Close your database connection
mysqli_close($db_conx);

//echo "<script>header(location='cart.php');</script>";
header("location:cart.php");
?>
 