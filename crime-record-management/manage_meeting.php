<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "mpimages/bns.jpg">
<?php    include "top.php" ?>
<a href="Jail_SuperIntendent_home.php">Go Back</a>
<div style = "text-align : center">
<br/>
<h2>Maintain Meeting Records With Outsiders</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>Enter Meeting ID</td><td> <input type = text name = meetingid></td>
</tr>
<tr>
<td>Enter Criminal ID </td><td><input type = text name = criminalid></td>
</tr>


<tr>
<td>Outsider ID  </td><td> <input type = text name = outsiderid></td>
</tr>

<tr>
<td>Outsider Name </td><td><textarea type = text name = outsidername></textarea></td>
</tr>

<tr>
<td>Meeting Purpose</td><td>  <input type = text name = meetingpurpose></td>
</tr>

<tr>
<td>Meeting Time  </td> <td><input type = time name = meetingtime></td>
</tr>

<tr>
<td>Meeting Date   </td><td><input type = date name = meetingdate></td>
</tr>


</table>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$meetingid = $_POST['meetingid'];
$criminalid = $_POST['criminalid'];
$outsiderid = $_POST['outsiderid'];
$outsidername = $_POST['outsidername'];
$meetingpurpose = $_POST['meetingpurpose'];
$meetingtime = $_POST['meetingtime'];
$meetingdate = $_POST['meetingdate'];








$query = "insert into meeting values('','$criminalid','$outsiderid','$outsidername','$meetingpurpose','$meetingtime','$meetingdate')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{

$meetingid = $_POST['meetingid'];
$criminalid = $_POST['criminalid'];
$outsiderid = $_POST['outsiderid'];
$outsidername = $_POST['outsidername'];
$meetingpurpose = $_POST['meetingpurpose'];
$meetingtime = $_POST['meetingtime'];
$meetingdate = $_POST['meetingdate'];

$query = "update meeting set criminalid=$criminalid,outsiderid=$outsiderid,meetingpurpose='$meetingpurpose',meetingtime='$meetingtime',meetingdate='$meetingdate' where meetingid=$meetingid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$meetingid = $_POST['meetingid'];
$criminalid = $_POST['criminalid'];
$outsiderid = $_POST['outsiderid'];
$outsidername = $_POST['outsidername'];
$meetingpurpose = $_POST['meetingpurpose'];
$meetingtime = $_POST['meetingtime'];
$meetingdate = $_POST['meetingdate'];

$query = "delete from meeting where meetingid=$meetingid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$meetingid = $_POST['meetingid'];
$criminalid = $_POST['criminalid'];
$outsiderid = $_POST['outsiderid'];
$outsidername = $_POST['outsidername'];
$meetingpurpose = $_POST['meetingpurpose'];
$meetingtime = $_POST['meetingtime'];
$meetingdate = $_POST['meetingdate'];

$query = "select * from meeting";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Meeting ID</td>";
echo "<td>Criminal ID</td>";
echo "<td>Outsider ID</td>";
echo "<td>Outsider Name</td>";
echo "<td>Meeting Purpose</td>";
echo "<td>Meeting Time</td>";
echo "<td>Meeting Date</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";


echo "</tr>";
}
echo "</table>";
}
?>
</div>
<?php  include "bottom.php "?>
</body>
</html>