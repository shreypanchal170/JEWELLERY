<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CP Jewellery :: Login Screen</title>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script>
$('#btnClose').click(function(e) {
    $('#SearchDiv').hide(0);
});


function resetform()
{
document.forms[0].elements[1]=="";
}

function submitForms()
{
if (isSearch())
if (confirm("\n Do you want to search?"))
{
return true;
}
else
{
alert("Search Cancelled!");
return false;
}
else
return false;
}


function isSearch()
{
if (document.forms[0].elements[0].value == "")
{
alert ("The Search Box is blank")
document.forms[0].elements[0].focus();
return false;
}
return true;
}

// End -->
</script>
</head>
<body>
<form id="ajaxform" method="post" action="searchresult.php" onSubmit="return submitForms()">
<div id="search" style="text-align:center">
	<div id="closeLogin" style="text-align:right;">
    <a href="#">
    	<img src="image/close.jpg" width="10%" height="10%" id="btnClose" /></a>
	</div>

	<div id="inputDivLogin">
        <div id="LoginInput"><input type="text" name="search" /></div>
    </div>

	<br />

    <div id="inputDivLogin">
		<div id="LoginInput">
			<select size="1" name="select">
				<option value="name">Name</option>
				<option value="desc">Description</option>
				<option selected value="type">Type</option>
				<option value="price">Price</option>
				<option value="views">Views</option>
			</select>
		</div>
    </div>

	<br />

    <div id="inputDivLoginControl">
    	<div>
        	<input type="submit" value="Search" />
            <input class="LoginButton" id="btnClear" type="reset" value="Clear" />
		</div>
	</div>
</div>
</form>

</body>
</html>
