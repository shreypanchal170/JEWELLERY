<?php
 // connect to the database
 include('includes/connect-db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 $paginated = $_GET['paginated'];
 
	if($paginated == "yes")
	{
		$paginated == "yes";
	}
	
	else
	{
		$paginated == "no";
	}
 
 	if($id=="")
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
 
 var delmsg = confirm("Do you confirm to delete category <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Category Deletion Confirmed');
		
		location.href='delconfirm.php?type=cat&paginated=<?php echo $paginated;?>&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Category Deletion Cancelled');
		location.href='viewcategories.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href='viewcategories.php';</script>

<?php
 }
 
?>
