<?php
session_start();
include("includes/mysqli_connection.php");

// User is already logged in. Redirect them somewhere useful.
if (!isset($_SESSION['username']))
{
	echo "<script>alert('Web Master Says : : Login First :-( !!!')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index-1.php'>";
	exit();
}

else if(!isset($_SESSION['status']) )
{
	echo "<script>alert('INTRUDER!!!: :')</script>";
    echo "<meta http-equiv='refresh' content='2;url=../index-1.php'>";
	exit();
}

else
{
	$admin = $_SESSION['username'];
}

?>

<?php

if(isset($_SESSION['username']))
{
	$contentid = $_GET['id'];
	
	$sql = ("SELECT * FROM webcontent WHERE content_id=$contentid");
	$query = mysqli_query($db_conx,$sql);
	
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
		$id = $row['content_id'];
		$content = $row['content'];
		$webpage = $row['webpage'];
	}
}

else
{
	echo "ERROR!!!";
	$contentid = "";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>EDIT <?php echo strtoupper($row['webpage']);?> PAGE</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
<script type="text/javascript">
<!--  Begin

function resetform()
{
document.forms[0].elements[0]=="";
}

function submitForms()
{
if (isMainID() && isName() && isLink())
if (confirm("\n You are about to submit this form. \n\nPress Ok to submit. Cancel to abort."))
{
alert("Form Submitted!");
return true;
}
else
{
alert("You have chosen to cancel this submission.");
return false;
}
else 
return false;
}



function isMainID()
{
if (document.forms[0].elements[1].value == "")
{
alert ("The Content field is blank. Please enter Content.")
document.forms[0].elements[1].focus();
return false;
}
return true;
}


function isName()
{
if (document.forms[0].elements[2].value == "")
{
alert ("The Webpage Name field is blank. Please enter webpage Name.")
document.forms[0].elements[2].focus();
return false;
}
return true;
}

// End -->
</script>
</head>
<body>

<p align="center"><b>EDIT SUB CATEGORY PAGE</b></p>

<?php echo 'Hi, <strong>' . strtoupper($admin) . '</strong> Good To See You Working! || <a href="logout.php"> Logout </a>'; ?>

<br />
<div align="center">
	<?php include("adminmenu.php");?>
</div>

<br />

<div align="center">
<table border="0" cellpadding="1" cellspacing="0" width="100%">
  <tr>
    <td colspan="5" height="96">
		<form name="formRegister" method="post" action="confirmeditpage.php" onSubmit="return submitForms()">
        <table width="500" align="center" border="0">
        <tr>
            <td bgColor="c6d3ce">
              <table width="500" border="0">
			  <tr bgColor="dee7e7">
				 <td width="165"><strong>ID : <?php echo $contentid; ?></strong></td>
				 <td><input type="hidden" name="Contentid" value="<?php echo $contentid; ?>"></td>
			  </tr>
			    <tr bgColor="dee7e7">
                  <td width="165">Content</td>
                  <td><b><textarea name="Content" id="Content" rows="10" cols="50"><?php echo $content; ?></textarea></b></td>
                </tr>
				<tr bgColor="dee7e7">
                  <td width="165">Webpage</td>
                  <td><b><input type="text" size="25" name="Webpage" value="<?php echo $webpage; ?>"></b></td>
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
</body>
</html>