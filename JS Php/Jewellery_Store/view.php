<?php
session_start();

if (isset($_SESSION['user_id']))
{
	$userid = $_SESSION['user_id'];
	echo "userid: " . $userid;
}

else
{
	$userid = "";
}
?>

<?php
$_SESSION['code'] = rand();
$code = $_SESSION['code'];
?>


<?php
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['username']))
{
	$User = $_SESSION['username'];
}

else
{
	$User = "";
}
?>

<!-- Head1 Part Start-->
<?php include("head1.html");?>
<!-- Head1 Part End-->

<!-- Top Part Start-->
<?php
if($User != "")
{
	include("top_links2.php");
}
else
{
	include("top_links.php");
}
?>
<!-- Top Part End-->


<!-- Main Div Tag Start-->
<div id="wrapper">


	<!-- Header Part Start-->
	<?php
	if($User != "")
	{
		include("header2.php");
	}
	else
	{
		include("header.php");
	}
	?>
	<!-- Header Part Start-->

	<!-- Middle Part Start-->
	<!-- Section Start-->
	<?php include("section.html"); ?>
	<!--Section End-->
	<!--Middle Part End-->

		<!--Random Featured Product Start-->
		<div class="box mb0" id="viewproducts">
		<div class="box-heading-1"><span>VIEW PRODUCTS</span></div>
			<div class="box-content-1">
				<div class="box-product-1" >
					<center>
					<?php
						// Included configuration file in our code.
						include("includes/mysqli_connection.php");

						$id = $_POST['txtid'];
						//echo $id;

						$sql = "SELECT COUNT(*) FROM jewellery WHERE  id =".$id;
						$query = mysqli_query($db_conx, $sql);
						$row = mysqli_fetch_row($query);
						// Here we have the total row count
						$rows = $row[0];

						$sql = " SELECT * FROM jewellery WHERE  id =".$id;
						$query = mysqli_query($db_conx, $sql);

						$list = '';
						$src = "Photos/";

						while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
						{

							$id = $row["id"];
							$prodname = $row["prodname"];
							$path = $row["path"];
							$category = $row["category"];
							$price = "Rs. " . $row["price"];
							$desc = $row["descr"];
							$type = $row["type"];
							$noviews = $row["noviews"];
							$width="150px";
							$height="150px";

							$list .='
								<br />
								<table border="1" bordercolor="#FF0000" cellpadding="15">
									<tr><td><b>Name</b><td>' . $prodname . '</td></tr>
									<tr><td><b>Image</b></td><td><img width="' . $width . '" height="' . $height . '" src="' . $src . $path . '" alt = "' . $prodname . '"></td></tr>';
								 $list .='
									<tr><td><b>Description</b></td><td>' . $desc . '</<td></tr>
									<tr><td><b>Price</b></td><td>' . $price . '</td></tr>
								  </tr>
								</table>
								<br />'; // end list here
						}

						$noviews += 1;

						$updateview = "UPDATE jewellery SET noviews = $noviews WHERE id =".$id;
						mysqli_query($db_conx, $updateview);

						echo "<b>Number of times viewed: </b> <font size='5px'> <font face='monotype corsiva'>" .  $noviews . "</font></font>";

					?>
						<br />
						<script type="text/javascript">
						function checkIt(evt)
						{
						evt = (evt) ? evt : window.event;
						var charCode = (evt.charCode) ? evt.charCode :
						((evt.which) ? evt.which : evt.keyCode);

						if (charCode > 31 && (charCode < 48 || charCode > 57))
						{
						status = "This field accepts numbers only.";
						return false;
						}
						status = "";
						return true;
						}
						</script>

						<script type="text/javascript">
						<!--  Begin
						function submitForms()
						{
						if (isCart())
						if (confirm("\n You are about to add this product to your cart. \n\nPress Ok to submit. Cancel to abort."))
						{
						return true;
						}
						else
						{
						alert("Product not added to cart");
						return false;
						}
						else
						return false;
						}

						function isCart()
						{
						T = document.forms[0].elements[0].value;
						if(T == "")
						{
						alert("Quantity cannot be blank")
						document.forms[0].elements[0].focus();
						return false;
						}

						else
						{
						if (T < 1)
						{
						alert("Quantity must not be less than 1")
						document.forms[0].elements[0].focus();
						return false;
						}

						else
						{
						if (T > 100)
						{
						alert("To order more than 100 contact CP JEWELS")
						document.forms[0].elements[0].focus();
						return false;
						}
						return true;
						}
						}
						}

						// End -->
						</script>
						<form action="processcheckout.php" method="post" onSubmit="return submitForms()" "returninPosInteger()">
						<?php echo $list;?>
						Enter Quantity:<input type="text" name="txtQty" size="8" onkeypress="return checkIt(event)">
						<input type="hidden" name="txtuserid" value="<?php echo $userid;?>">
						<input type="hidden" name="jewelid" value="<?php echo $id;?>">
						<input type="submit" value="Add to Cart">
						</form>
					</center>
				</div>
			</div>
		</div>
		<!--Random Featured Product End-->

		<!--Special Promo Banner Start-->
		<div class="box-promo" id="box-promo">
			<div class="box-heading-1"><span>PROMO ON FEATURED ITEMS</span></div>
			<div id="banner0" class="banner">
				<div style="display:block;"><img src="image/addBanner-940x145.jpg" alt="Special Offers" title="Special Offers" /></div>
			</div>
		</div>
		<!--Special Promo Banner End-->

		<!--Coming Soon Product Start-->
		<!--
		<div class="box-heading-1" id="soon">
			<div class="box-heading-1"><span>Coming Soon</span></div>
				<div id="carousel0">
					<ul class="jcarousel-skin-opencart">
					-->
		<!--Coming Soon Product End-->

					<!--Carousel Start-->
					<!--
					<?php
						// Included configuration file in our code.
						//include("comingsoon.php");
					?>

					</ul>
				</div>
		</div>
		-->
		<!--Carousel End-->

	<!--Footer Part Start-->
		<?php include("footer.php");?>
	<!--Footer Part End-->
</div>
<!-- Main Div Tag End-->

	<!--Flexslider Javascript Part Start-->
		<?php include("flexslider.php");?>
	<!--Flexslider Javascript Part End-->
</body>
</html>
