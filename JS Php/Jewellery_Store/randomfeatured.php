<?php
	include("includes/mysqli_connection.php");

	// This first query is just to get the total count of rows
	$sql = "SELECT COUNT(*) FROM jewellery";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_row($query);
	// Here we have the total row count
	$rows = $row[0];
	// This is the number of results we want displayed per page
	$page_rows = 8;

	// This sets the range of rows to query for the chosen $pagenum
	$limit = 'LIMIT ' . $page_rows;
	// This is your query again, it is for grabbing just one page worth of rows by applying $limit
	//$sql = "SELECT * FROM jewellery ORDER BY id ASC $limit";

	$sql = " SELECT * FROM jewellery ORDER BY RAND( ) " . $limit ;

	$query = mysqli_query($db_conx, $sql);
	// This shows the fuser what page they are on, and the total number of pages
	$textline1 = "Random Jewelleries - Refresh To View More Items";

	$list = '';

	$src = "Photos/";

	if(!isset($_SESSION['username']))
	{
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{

		$id = $row["id"];
		$prodname = $row["prodname"];
		$path = $row["path"];
		$category = $row["category"];
		$price = "Rs. " . $row["price"];
		$desc = $row["descr"];
		$width="150px";
		$height="150px";

		$list .='
		<div>
		 <div class="image"><a href="' . $src . $path . '"><img width="' . $width . '" height="' . $height . '" src="' . $src . $path . '" alt = "' . $prodname . '"></a></div>';
		 $list .='
		   <div class="proName">
			<div class="name"><a href="' . $src . $path . '">' . $desc . '</a></div>
			<div class="price">' . $price . '</div>
			<div class="cart">
				<label class="btn">';

				$list .='
				</label>
			</div>
		  </div>
		</div>
		'; // end list here

		}
	}

	else
	{
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{

		$id = $row["id"];
		$prodname = $row["prodname"];
		$path = $row["path"];
		$category = $row["category"];
		$price = "Rs. " . $row["price"];
		$desc = $row["descr"];
		$width="150px";
		$height="150px";

		$list .='
		<div>
		 <div class="image"><a href="' . $src . $path . '"><img width="' . $width . '" height="' . $height . '" src="' . $src . $path . '" alt = "' . $prodname . '"></a></div>';
		 $list .='
		   <div class="proName">
			<div class="name"><a href="' . $src . $path . '">' . $desc . '</a></div>
			<div class="price">' . $price . '</div>
			<div class="cart">
				<label class="btn">';

				$list .='<form method="post" action="view.php"><input type="hidden" name="txtid" value="'.$id.'"><input type="submit" value="Add to Cart" class="button"/></form>';

				$list .='
				</label>
			</div>
		  </div>
		</div>
		'; // end list here

		}
	}
		// Close your database connection
		mysqli_close($db_conx);

		if($rows == 0)
		{
			echo "<h2>Nothing to display</h2>";
		}

		else
		{
			echo "<h2 align='center'>" . $textline1 . "</h2>";
			echo $list;
		}
?>
