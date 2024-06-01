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
	$userid = "";
	echo "<script>alert('Login First')</script>";
	echo "<script>window.location.href='index-1.php';</script>";
}

$today = date("l, d F, Y");

?>


<!DOCTYPE html>
<html>
<head>
<title>ITEMS BOUGHT</title>
<link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>

<table align="right">
	<tr>
		<td>
		<script Language="Javascript">
		function printit()
		{
			if (window.print)
			{
				window.print() ;
			}
			
			else 
			{
				var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
				document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
				WebBrowser1.ExecWB(6, 2);//Use a 1 vs. a 2 for a prompting dialog box    WebBrowser1.outerHTML = "";
			}
		}
		</script>
		
		<script Language="Javascript">
			var NS = (navigator.appName == "Netscape");
			var VERSION = parseInt(navigator.appVersion);
			
			if (VERSION > 3)
			{
				document.write('<form> <input type=button value="Print this Page" name="Print" onClick="printit()"> </form>');
			}
		</script>
		</td>
		<td>
			<form><input type="button" value="Close" onClick="JavaScript:window.close()" /></form>
			<!--<form><input type="button" value="Close" onClick="window.location.href='default.php'" /></form>-->
		</td>
	</tr>
</table>
<p align="center"><img src="image/logo.png" /></p>
<p align="center"><b><u>ALL ITEMS BOUGHT</u></b></p>

<?php

	include("includes/mysqli_connection.php");
	
	$sql = "SELECT * FROM users WHERE user_id = $userid";
	
	$query = (mysqli_query($db_conx,$sql));
	
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
		$user_id = $row['user_id'];
		$name = $row['name'];
		$surname = $row['surname'];
		$uname = $row['username'];
		$pass = $row['password'];
		$email = $row['email'];
		$address = $row['address'];
		$tel = $row['tel'];
		$type = $row['ac_type'];
		$status = $row['user_status'];	
	}
?>

<p align="left"><b> DATE : <?php echo $today;?></b></p>

<table border="0" width="auto">
	<tr>
		<td width="100%" colspan="3"></td>
	</tr>
	
	<tr>
		<td width="25%"><strong>Name</strong></td>
		<td width="3%"><b>:</b></td>
		<td width="auto"><?php echo strtoupper($surname); ?> <?php echo strtoupper($name); ?></td>
	</tr>
	
	<tr>
	  <td width="25%"><strong>Email</strong></td>
	  <td width="3%"><b>:</b></td>
	  <td width="auto"><?php echo $email; ?></td>
	</tr>
	
	<tr>
	  <td width="25%"><strong>Billing Address</strong></td>
	  <td width="3%"><b>:</b></td>
	  <td width="auto"><?php echo $address; ?></td>
	</tr>
	
	<tr>
	  <td width="25%"><strong>Telephone</strong></td>
	  <td width="3%"><b>:</b></td>
	  <td width="auto"><?php echo $tel; ?></td>
	</tr>
</table>

<br />

<?php
	include("includes/mysqli_connection.php");
	
	$sql = "SELECT COUNT(*) FROM cart , jewellery, users WHERE cart.cust_id = $userid AND users.user_id = $userid AND cart.checkout = 'y' AND jewellery.id = cart.jewel_id";
	$query = (mysqli_query($db_conx,$sql));
	
	$row = mysqli_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];
	
	$countrows = $rows;
	
	$selectproducts = "SELECT * FROM cart , jewellery, users WHERE cart.cust_id = $userid AND users.user_id = $userid AND cart.checkout = 'y' AND jewellery.id = cart.jewel_id";
	$query = mysqli_query($db_conx, $selectproducts);
	
	$list = "";
	$src = "Photos/";
	
	if($rows == 0)
	{
		echo "<script>alert('Nothing Bought Yet!')</script>";
		//echo "<script>window.close();</script>";
	}
	
	else
	{
		echo "<table align='center' cellspacing='1' cellpadding='0' width='80%'>
				<tr><td colspan='7'><hr></td></tr>
				<th align='center' bgcolor='e6e6e6'>DATE</th>
				<th align='center' bgcolor='e6e6e6'>TRANSACTION CODE</th>
				<th align='center' bgcolor='e6e6e6'>JEWEL ID</th>
				<th align='center' bgcolor='e6e6e6'>PRODUCT</th>
				<th align='center' bgcolor='e6e6e6'>QUANTITY</th>
				<th align='center' bgcolor='e6e6e6'>PRICE</th>
				<th align='center' bgcolor='e6e6e6'>AMOUNT</th>";
		
		for($loop = 0; $loop < $countrows; $loop++)
		{
			
			while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
			{
				$id = $row['id'];
				$jewelid = $row['jewel_id'];
				$qty = $row['qty'];
				$userid = $row['cust_id'];
				$checkout = $row['checkout'];
				$added = $row['added'];
				$checked = $row['checkedon'];
				$trans = $row['trans'];
				
				$date = date("Y-m-d H:i:s");
				
				$prodname = $row['prodname'];
				$path = $row['path'];
				$category = $row['category'];
				$price = $row['price'];
				$desc = $row['descr'];
				$width="150px";
				$height="150px";
				
				$user_id = $row['user_id'];
				$name = $row['name'];
				$surname = $row['surname'];
				$uname = $row['username'];
				$pass = $row['password'];
				$email = $row['email'];
				$address = $row['address'];
				$tel = $row['tel'];
				$type = $row['ac_type'];
				$status = $row['user_status'];

				$amount = ($qty * $price);
				
				$amount = round($amount);
				if (round($amount*10) == $amount*10 && round($amount)!=$amount) $amount = "$amount"."0"; //to avoid prices like 17.5 - write 17.50 instead
				{
					if (round($amount) == $amount) //add .00
					{
						$amount  = "$amount".".00";
					}
				}
				
				$list ="<tr align='center'><td>" . $checked . "</td><td>" . $trans . "</td><td>" . $jewelid . "</td><td>" . $prodname . "</td><td>" . $qty . "</td>";
				
				$list .= "<td>" . $price . "</td><td>" . $amount . "</td></tr>";

				echo $list;	
			}
		}
	}
?>
<tr>
	<td colspan="7"><hr></td>
</tr>

</table>

<?php mysqli_close($db_conx); ?>

<br />

<center>
<p><b>THANK YOU FOR CHOSING BB JEWELLERY<b></p>
</center>
</body>
</html>