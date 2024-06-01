<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>NEW CATEGORY PAGE</title>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
<script type="text/javascript">
<!--  Begin

function resetform()
{
document.forms[0].elements[1]=="";
}

function submitForms()
{
if (isName() && isLink())
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


function acceptw()
{
	if(event.keyCode>45 && event.keyCode<57)
	{
		event.returnValue=false
		window.alert("Sorry ! You can only enter Words.")
	}
	else
	{
		if(event.which>45 && event.which<57)
		{
			event.returnValue=false
			window.alert("Sorry ! You can only enter Words.")
		}
	}
}


function isName()
{
if (document.forms[0].elements[0].value == "")
{
alert ("The Name field is blank. Please enter Name.")
document.forms[0].elements[0].focus();
return false;
}
return true;
}


function isLink()
{
if (document.forms[0].elements[1].value == "")
{
alert ("The Link field is blank. \n\nPlease enter Link.")
document.forms[0].elements[1].focus();
return false;
}
return true;
}

// End -->
</script>
</head>
<body>

<?php

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

<p align="center"><b>NEW CATEGORY PAGE</b></p>

<?php echo 'Hi, <strong>' . $admin . '</strong> Good To See You Working! || <a href="logout.php"> Logout </a>'; ?>

<br />
<div align="center">
	<?php include("adminmenu.php");?>
</div>

<br />

<div align="center">
<table border="0" cellpadding="1" cellspacing="0" width="100%">
  <tr>
    <td colspan="5" height="96">
		<form name="formRegister" method="post" action="confirmcategory.php" onSubmit="return submitForms()">
        <table width="400" align="center" border="0">
        <tr>
            <td bgColor="c6d3ce">
              <table width="400" border="0">
                <tr bgColor="dee7e7">
                  <td width="165">Name</td>
                  <td><b><input type="text" size="25" name="Name" onkeypress="acceptw()"></b></td>
                </tr>
                <tr bgColor="e7efef">
                  <td>Link</td>
                  <td><b><input type="text" size="25" name="Link"></b></td>
				</tr>
				</table>
            </td>
        </tr>
        </table>
        <br>
        <table width="400" align="center" border="0">
          <tr>
            <td align="center" width="200"><input type="submit" value="Submit"></td>
            <td align="center" width="200"><input type="reset" name="reset" value="Reset Form" onClick="return confirm('Are you sure you want to clear the current information?');"></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
</div>
</body>
</html>