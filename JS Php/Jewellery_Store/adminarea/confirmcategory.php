<?php
 // Included configuration file in our code.
//include("includes/config.php");
include ("includes/mysqli_connection.php");

$name = mysqli_real_escape_string($db_conx,$_POST['Name']);
$link = mysqli_real_escape_string($db_conx,$_POST['Link']);

	// This first query is just to get the total count of rows
	$sql = "SELECT COUNT(*) FROM main_menu WHERE mmenu_name LIKE '$name'";
	
	$query = mysqli_query($db_conx, $sql);

	$row = mysqli_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];
	
	if($rows == 0)
	{	
		$insertSQL = "INSERT INTO main_menu (mmenu_name, mmenu_link)
				VALUES ('$name', '$link')";
			
		mysqli_query($db_conx, $insertSQL);
		
		if($insertSQL)
		{
			echo "<script>alert('Successfully Added!')</script>";
			
			echo "<script>window.location.href='viewcategories.php'</script>";
        }
        else
		{
            echo 'An error occured while uploading the entry to database. Please try again later.';
        }
	}
	
	else
	{
		echo "<font color='red'>Sorry This Menu already exists!</font>";
		echo "<script>alert('Redirecting...')</script>";
   		echo "<script>window.location.href='newcategory.php'</script>";
	}
	
	// Close your database connection
	mysqli_close($db_conx);
?>