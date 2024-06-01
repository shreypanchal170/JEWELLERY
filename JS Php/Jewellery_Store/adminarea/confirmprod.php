<?php
 // Included configuration file in our code.
//include("includes/config.php");
include ("includes/mysqli_connection.php");

$prodname = mysqli_real_escape_string($db_conx,$_POST['Name']);
$path = mysqli_real_escape_string($db_conx,$_POST['Path']);
$category = mysqli_real_escape_string($db_conx,$_POST['Category']);
$price = mysqli_real_escape_string($db_conx,$_POST['Price']);
$desc = mysqli_real_escape_string($db_conx,$_POST['Desc']);
$type = mysqli_real_escape_string($db_conx,$_POST['Type']);
$views = mysqli_real_escape_string($db_conx,$_POST['Views']);

	// This first query is just to get the total count of rows
	$sql = "SELECT COUNT(*) FROM jewellery WHERE prodname = '$prodname'";
	
	$query = mysqli_query($db_conx, $sql);
	
	$row = mysqli_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];
	
	if($rows == 0)
	{	
		$insertSQL = "INSERT INTO jewellery (prodname, path, category, price, descr, type, noviews)
				VALUES ('$prodname', '$path', '$category', '$price', '$desc', '$type', '$views')";
			
		mysqli_query($db_conx, $insertSQL);
		
		if($insertSQL)
		{
			echo "<script>alert('Successfully Added!')</script>";
			
			echo "<script>window.location.href='viewprod.php'</script>";
        }
        else
		{
            echo 'An error occured while uploading the entry to database. Please try again later.';
        }
	}
	
	else
	{
		echo "<font color='red'>Sorry This Product already exists!</font>";
		echo "<script>alert('Redirecting...')</script>";
   		echo "<script>window.location.href='newprod.php'</script>";
	}
	
	// Close your database connection
	mysqli_close($db_conx);
?>