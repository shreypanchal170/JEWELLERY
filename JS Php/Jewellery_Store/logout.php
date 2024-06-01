<script type="text/javascript">
	ht = document.getElementsByTagName("body");
	ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
		if(confirm('Are you sure you want to log out?'))
		{
			return true;
			
			<?php
				session_start(); # Starts the session
				session_unset(); #removes all the variables in the session
				session_destroy(); #destroys the session
			?>
		}
		else
		{
			ht[0].style.filter = "";
			return false;
		}
 </script>
	
<?php 
	if(!isset($_SESSION['username']))
	{
		echo "<script>alert('Successfully logged out!')</script>";
   		echo "<script>window.location.href='index-1.php'</script>";
	}
	
	else
	{
		echo "<script>alert('Error Occured!')</script>";
	}
?>