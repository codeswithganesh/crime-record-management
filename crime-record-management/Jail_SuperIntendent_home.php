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
if(fetchrole()=='Jail_SuperIntendent')
	{
	$un=fetchusername();
	$msg="Welcome $un , <br /><a href='signout.php'>Signout</a>";
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
<li><a href = manage_criminal.php>Register New Criminal</a></li>
<li><a href = manage_crime_type.php>Record New Crime Type</a></li>
<li><a href = manage_meeting.php>Maintain Meeting Records With Outsiders</a></li>
<li><a href = manage_assign_work.php>Assign Work</a></li>
<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>