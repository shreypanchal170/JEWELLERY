<?PHP
include_once('popup-contactform.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="STYLESHEET" type="text/css" href="popup-contact.css">
</head>

<body onload="javascript:fg_popup_form('fg_formContainer','fg_form_InnerContainer','fg_backgroundpopup');">

<a href="javascript:fg_hideform('fg_formContainer','fg_form_InnerContainer','fg_backgroundpopup');"></a>

<?php
//echo "<script>location='../default.php'";
?>

<?PHP
include_once('contactform-code.php');
?>

</body>
</html>