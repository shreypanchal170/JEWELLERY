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
	$id = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Contentid']));
	$content = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Content']));
	$webpage = mysqli_real_escape_string($db_conx,htmlspecialchars($_POST['Webpage']));
}

else
{
	echo "ERROR!!!";
	$contentid = "";
}
	
	$updatesubcat = "UPDATE webcontent SET content='$content', webpage='$webpage' WHERE content_id='$id'";
	
	$query = mysqli_query($db_conx,$updatesubcat);
	
	if($query)
	{
		echo "<script>alert('Successfully Updated!')</script>";
		echo "<script>window.location.href='viewpage.php';</script>";
	}
	
	else
	{
		echo "Could not update data";
		echo "<script>window.location.href='viewpage.php';</script>";
	}
?>