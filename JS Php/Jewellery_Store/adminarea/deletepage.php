<?php
 // connect to the database
 include('includes/connect-db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $contentid = $_GET['id'];
 
 	if($contentid=="")
	{
		?>
        <script language="javascript">
 
 			alert('Nothing Selected.');
 
 		</script>
        <?php
		exit;
	}
	else
	{
?>
 
 <script language="javascript">
 
 var delmsg = confirm("Do you confirm to delete page <?php echo $contentid; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Page Deletion Confirmed');
		
		location.href='delconfirm.php?type=page&paginated=no&id=<?php echo $contentid; ?>';	
	}
 	else
 	{
		alert('Page Deletion Cancelled');
		location.href='viewpage.php';
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href='viewpage.php';</script>

<?php
 }
 
?>
