<?php
session_start();
include("includes/mysqli_connection.php");

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
	echo "<script>alert('Web Master Says : : Login First :-( !!!')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index-1.php'>";
	exit();
}

else if(!isset($_SESSION['status']) )
{
	echo "<script>alert('INTRUDER!!!: :')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index-1.php'>";
	exit();
}

else
{
	$admin = $_SESSION['username'];
}

?>

<?php

if(isset($_SESSION['username']))
{
	$userid = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Userid']));
	$Name = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Name']));
	$Surname = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Surname']));
	$Username = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Username']));
	$Password = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['pw1']));
	$Repass = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['pw2']));
	$Email = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Email']));
	$Address = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Address']));
	$Tel = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Tel']));
	$Type = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Type']));
	$Status = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Status']));
}

else
{
	echo "ERROR!!!";
	$userid = "";
}
	
	$updateuser = "UPDATE users SET name='$Name', surname='$Surname', username='$Username', password='$Password', email='$Email', address='$Address', tel='$Tel', ac_type='$Type', user_status='$Status' WHERE user_id='$userid'";
	
	$query = mysqli_query($db_conx,$updateuser);
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='viewusers.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='viewusers.php';</script>";
	}
?>