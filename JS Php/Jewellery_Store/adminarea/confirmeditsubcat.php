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
	$menuid = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Menuid']));
	$Mainid = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Mainid']));
	$Name = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Name']));
	$Link = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Link']));
}

else
{
	echo "ERROR!!!";
	$menuid = "";
}
	
	$updatesubcat = "UPDATE sub_menu SET mmenu_id='$Mainid', smenu_name='$Name', smenu_link='$Link' WHERE id='$menuid'";
	
	$query = mysqli_query($db_conx,$updatesubcat);
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='viewsubcat.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='viewsubcat.php';</script>";
	}
?>