<?php
 // Included configuration file in our code.
//include("includes/config.php");
include ("includes/mysqli_connection.php");

$Fname = mysqli_real_escape_string($db_conx,$_POST['Name']);
$Lname = mysqli_real_escape_string($db_conx,$_POST['Surname']);
$Uname = mysqli_real_escape_string($db_conx,$_POST['Username']);
$Pass = mysqli_real_escape_string($db_conx,$_POST['pw1']);
$Email = mysqli_real_escape_string($db_conx,$_POST['Email']);
$Address = mysqli_real_escape_string($db_conx,$_POST['Address']);
$Tel = mysqli_real_escape_string($db_conx,$_POST['Tel']);
$Type = mysqli_real_escape_string($db_conx,$_POST['Type']);
$Status = mysqli_real_escape_string($db_conx,$_POST['Status']);


	// This first query is just to get the total count of rows
	$sql = "SELECT COUNT(*) FROM users WHERE email LIKE '$Email'";
	
	$query = mysqli_query($db_conx, $sql);

	$row = mysqli_fetch_row($query);
	
	// Here we have the total row count
	$rows = $row[0];

	if($rows == 0)
	{	
		$insertSQL = "INSERT INTO users (name, surname, username, password, email, address, tel, ac_type, user_status)
				VALUES ('$Fname', '$Lname', '$Uname', '$Pass', '$Email', '$Address', '$Tel', '$Type', '$Status')";
			
		mysqli_query($db_conx, $insertSQL);
		
		if($insertSQL)
		{
			echo "<script>alert('Successfully Added!')</script>";
			
			echo "<script>window.location.href='viewusers.php'</script>";
        }
        else
		{
            echo 'An error occured while uploading the entry to database. Please try again later.';
        }
	}
	
	else
	{
		echo "<font color='red'>Sorry This Email address already exists!</font>";
		echo "<script>alert('Redirecting...')</script>";
   		echo "<script>window.location.href='newuser.php'</script>";
	}
	
	// Close your database connection
	mysqli_close($db_conx);
?>