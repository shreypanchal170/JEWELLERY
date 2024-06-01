<?php
 // connect to the database
 include('includes/connect-db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 
 // get id value
 $id = $_GET['id'];
 
 $type = $_GET['type'];
 $paginated = $_GET['paginated'];
 
 
switch($type)
{
	case 'prod':
	$sql = "DELETE FROM jewellery WHERE id=$id";
	if($paginated == "yes")
	{
		$location = "viewprod-paginated.php";
	}
	
	else
	{
		$location = "viewprod.php";
	}
	
	break;
	
	
	case 'user':
	$sql = "DELETE FROM users WHERE user_id=$id";
	if($paginated == "yes")
	{
		$location = "viewusers-paginated.php";
	}
	
	else
	{
		$location = "viewusers.php";
	}
	break;

	
	case 'subcat':
	$sql = "DELETE FROM sub_menu WHERE id=$id";
	if($paginated == "yes")
	{
		$location = "viewsubcat-paginated.php";
	}
	
	else
	{
		$location = "viewsubcat.php";
	}
	break;
	
	
	case 'cat':
	$sql = "DELETE FROM main_menu WHERE mmenu_id=$id";
	if($paginated == "yes")
	{
		$location = "viewcategories-paginated.php";
	}
	
	else
	{
		$location = "viewcategories.php";
	}
	break;
	
	
	case 'page':
	$sql = "DELETE FROM webcontent WHERE content_id=$id";
	if($paginated == "yes")
	{
		$location = "viewpage.php";
	}
	
	else
	{
		$location = "viewpage.php";
	}
	break;
}
	
// delete the entry
$result = mysql_query($sql)
or die(mysql_error()); 

?>

<script>alert("Successfully Deleted!");	
	window.location.href='<?php echo $location;?>';
 </script>
 