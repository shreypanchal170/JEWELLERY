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
echo "<br />Code: " . $code;
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
		<div class="box mb0" id="checkout">
		<div class="box-heading-1"><span>CHECKOUT</span></div>
			<div class="box-content-1">
				<div class="box-product-1" >
					<?php

						include("includes/mysqli_connection.php");
						
						$sql = "SELECT COUNT(*) FROM cart WHERE cust_id = $userid AND checkout = 'n'";
						
						$query = (mysqli_query($db_conx,$sql));
						
						$row = mysqli_fetch_row($query);
						
						// Here we have the total row count
						$rows = $row[0];
						
						$countrows = $rows;
						
						$totalquantity = 0;
						
						$subtotal = 0;
						
						$totalamount = 0;
						
						$vat1 = 0;
						
						$delivery = 500;
						
						$selectproducts = "SELECT * FROM cart , jewellery, users WHERE cart.cust_id = $userid AND users.user_id = $userid AND cart.checkout = 'n' AND jewellery.id = cart.jewel_id";
						
						$query = mysqli_query($db_conx, $selectproducts);
						
						$list = "";
						$src = "Photos/";
						
						if($rows == 0)
						{
							echo "<script>alert('Buy an Item First!')</script>";
							echo "<script>window.location.href='index-1.php';</script>";
						}
						
						else
						{
							echo "<center><b><u>ITEMS IN YOUR CART</u></b></center><br />";
							echo "<table align='center' border='1' cellspacing='1' cellpadding='0' width='50%'>
									<th align='center' bgcolor='e6e6e6'>JEWEL ID</th><th align='center' bgcolor='e6e6e6''>PRODUCT</th>
									<th align='center' bgcolor='e6e6e6''>QUANTITY</th><th align='center' bgcolor='e6e6e6''>PRICE</th>
									<th align='center' bgcolor='e6e6e6''>AMOUNT</th>";
							
							for($loop = 0; $loop < $countrows; $loop++)
							{
								
								while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
								{
									$jewelid = $row['jewel_id'];
									$qty = $row['qty'];
									$userid = $row['cust_id'];
									$checkout = $row['checkout'];
									$added = $row['added'];
									$checked = $row['checkedon'];
									//$row['trans'] = $code;
									$trans = $row['trans'];
									
									$prodname = $row['prodname'];
									$path = $row['path'];
									$category = $row['category'];
									$price = $row['price'];
									$desc = $row['descr'];
									$width="150px";
									$height="150px";
									
									$user_id = $row['user_id'];
									$name = $row['name'];
									$surname = $row['surname'];
									$uname = $row['username'];
									$pass = $row['password'];
									$email = $row['email'];
									$address = $row['address'];
									$tel = $row['tel'];
									$type = $row['ac_type'];
									$status = $row['user_status'];
									
									
									$amount = ($qty * $price);
									
									$totalquantity = $totalquantity + $qty;
									$subtotal = $subtotal + $amount;
									$vat1 = round(0.15 * $subtotal);
									
									$totalamount = ($subtotal + $vat1 + $delivery);
									
									$amount = round($amount);
									if (round($amount*10) == $amount*10 && round($amount)!=$amount) $amount = "$amount"."0"; //to avoid prices like 17.5 - write 17.50 instead
									{
										if (round($amount) == $amount) //add .00
										{
											$amount  = "$amount".".00";
										}
									}
									
									$list ="<tr align='center'><td>" . $jewelid . "</td><td>" . $prodname . "</td><td>" . $qty . "</td>";
									
									$list .= "<td>" . $price . "</td><td>" . $amount . "</tr>";

									echo $list;	
								}
							}
							echo "</table></center><br />";
						}
					?>
					<script type="text/javascript">
					<!--  Begin

					function resetform()
					{
					document.forms[0].elements[6]=="";
					}

					function submitForms()
					{
					if (isCard())
					if (confirm("\n You are about to submit this form. \n\nPress Ok to submit. Cancel to abort."))
					{
					alert(document.forms[0].elements[2].value + " " + document.forms[0].elements[1].value +"\n\n\nYour Checkout form has been sent successfully. \n\n\nThank you!");
					return true;
					}
					else
					{
					alert("You have chosen to abort the checkout.");
					return false;
					}
					else 
					return false;
					}


					function isCard()
					{
					T = document.forms[0].elements[6].value;
					if(T == "")
					{
					alert("Credit Card cannot be blank")
					document.forms[0].elements[6].focus();
					return false;                
					}

					else
					{
					if(T == 0)
					{
					alert("Credit Card cannot be less or equal to zero");
					document.forms[0].elements[6].focus();
					return false;  
					}

					else
					{
					if(T.length<14)
					{
					alert("Credit Card Number must be 14 digits");
					document.forms[0].elements[6].focus();
					return false;  
					}

					else
					{
					if(T.indexOf(".")==1)
					{
					alert("Credit Card cannot contain dot sign");
					document.forms[0].elements[6].focus();
					return false;  
					}

					return true;
					}
					}
					}
					}
					// End -->
					</script>

						<table border="1" align="center" width="300px">
							<tr align="center">
								<td width="150px"><b>Total Quantity</b></td><td width="150px"><?php echo $totalquantity;?></td>
							</tr>
							<tr align="center">
								<td width="150px"><b>Total Items</b></td><td width="150px"><?php echo $rows;?></td>
							</tr>
							<tr align="center">
								<td><b>Sub Total</b></td><td><?php echo $subtotal;?></td>
							</tr>
							<tr align="center">
								<td><b>VAT (15%)</b></td><td><?php echo $vat1;?></td>
							</tr>
							<tr align="center">
								<td><b>Delivery Cost</b></td><td><?php echo $delivery;?></td>
							</tr>
							<tr align="center">
								<td><b>Total Amount</b></td><td><?php echo $totalamount;?></td>
							</tr>
						</table>
						
						<br />

					<p align="center"><b>CHECKOUT FORM</b></p>

					<table border="0" cellpadding="1" cellspacing="0" width="80%" align="center">
					  <tr>
						<td colspan="5" height="96">
							<form name="formCheckout" method="post" action="confirmcheckout.php" onSubmit="return submitForms()">
							<table width="400" align="center" border="0">
							<tr>
								<td bgColor="c6d3ce">
								  <table width="400" border="0">
								  <tr bgColor="dee7e7">
									 <td width="165"><strong>ID</strong></td>
									 <td><input type="text" name="Userid" size="8" value="<?php echo $user_id;?>" disabled="TRUE" /></td>
								  </tr>
									<tr bgColor="dee7e7">
									  <td width="165"><strong>Name</strong></td>
									  <td><b><input type="text" size="25" name="Name" value="<?php echo strtoupper($name); ?>" disabled="TRUE" /></b></td>
									</tr>
									<tr bgColor="e7efef">
									  <td><strong>Surname</strong></td>
									  <td><b><input type="text" size="25" name="Surname" value="<?php echo strtoupper($surname); ?>" disabled="TRUE" /></b></td>
									</tr>
									
									<tr bgColor="e7efef">
									  <td><strong>Email</strong></td>
									  <td><b><input type="text" size="30" name="Email" value="<?php echo $email; ?>" disabled="TRUE" /></b></td>
									</tr>
									<tr bgColor="dee7e7">
									  <td><strong>Billing Address</strong></td>
									  <td><b><textarea rows="3" name="Address" cols="20" disabled="TRUE"><?php echo $address; ?></textarea></b></td>
									</tr>
									<tr bgColor="e7efef">
									  <td><strong>Telephone</strong></td>
									  <td><b><input type="text" size="10" maxlength="8" name="Tel" value="<?php echo $tel; ?>" disabled="TRUE" /></b></td>
									</tr>				
									<tr bgColor="e7efef">
									  <td><strong>Credit Card</strong></td>
									  <td><b><input type="text" size="15" maxlength="14" name="Card" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></b></td>
									</tr>
									</table>
								</td>
							</tr>
							</table>
							<br>
							<table width="400" align="center" border="0">
							  <tr>
								<td align="center" width="200"><input type="submit" value="Submit"></td>
								<td align="center" width="200"><input type="reset" name="reset" value="Reset Form" onClick="return confirm('Are you sure you want to reset the current information?');"></td>
							  </tr>
							</table>
						  </form>
						</td>
					  </tr>
					</table>
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