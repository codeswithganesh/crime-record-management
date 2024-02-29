<html>
<head>
<?php
include "header.php";
?>
</head>
<body background = "mpimages/bns.jpg">
<?php    include "top.php" ?>
<div>
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{
if(fetchrole()=='Jail SuperIntendent')
	{
	$un=fetchusername();
	$msg="Welcome $un , <br /><a 	href='signout.php'>Signout</a>";
	}
	else
	{
header("Location:loginerror.php");
	}
}
else
{
header("Location:loginerror.php");
}
?>



<html >
<head>

</head>
<body>
<?php
echo $msg;

?>
			
				<h2 align = center>Jail Superintendent Home Page</h2>
				
				
					<p style = "font-size : 30pt">Services
<ul style = "color : red">
<li><a href = managecriminal.php>Register New Criminal</a></li>
<li><a href = managehotels.php>Manage Hotels</a></li>
<li><a href = managelocations.php>Manage Locations</a></li>
<li><a href = managecustomers.php>Manage Customers</a></li>
<li><a href = siteuser.php>Manage Siteusers</a></li>
<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>