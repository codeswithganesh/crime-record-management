<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "mpimages/bns.jpg">
<?php    include "top.php" ?>
<?php include "dbconfigure.php";?>
<a href="Police_Officers_home.php">Go Back</a>
<div style = "text-align : center">
<br/>
<h2>Search Criminals</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>Enter Criminal ID</td><td> <input type = text name = criminalid></td>
</tr>
<tr>
<td>Enter Criminal Name </td><td><input type = text name = criminalname></td>
</tr>
<tr>
<td>Criminal Image   </td><td><input type = file name = cimage id = "cimage"></td>
</tr>

<tr>
<td>Crime Type  </td><td> <input type = text name = crimetype></td>
</tr>





<tr>
<td>
Retina Scan  </td><td> <input type = file name = retinascan id = retinascan></td>
</tr>

<tr>
<td>
DNA Information   </td><td><input type = text name = dnainformation></td>
</tr>
</table>
<br/>
<input type = submit name = searchViaID value = "Search Via ID">
<input type = submit name = searchViaName value = "Search Via Name">
<input type = submit name = searchViaCrimeType value = "Search Via Crime Type">
<input type = submit name = searchViaDNA value = "Search Via DNA Information">
<input type = submit name = searchViaImage value = "Search Via Image">
<input type = submit name = searchViaRetina value = "Search Via Retina">

<br/>
<br/>



<?php
if(isset($_POST['searchViaDNA']))
{
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];


move_uploaded_file($_FILES['cimage']['tmp_name'],"criminalsimage/".$_FILES['cimage']['name']);
			$cimage = "criminalsimage/".$_FILES['cimage']['name'];




$crimetype = $_POST['crimetype'];
$crimedesc = $_POST['crimedesc'];
$crimedate = $_POST['crimedate'];
$crimetime = $_POST['crimetime'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];



move_uploaded_file($_FILES['retinascan']['tmp_name'],"criminalsimage/".$_FILES['retinascan']['name']);
			$retinascan = "criminalsimage/".$_FILES['retinascan']['name'];



$dnainformation = $_POST['dnainformation'];

$query = "select * from newcriminal where dnainformation='$dnainformation'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>














<?php
if(isset($_POST['searchViaName']))
{

$criminalname = $_POST['criminalname'];




$query = "select * from newcriminal where criminalname = '$criminalname'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>












<?php
if(isset($_POST['searchViaID']))
{
$criminalid = $_POST['criminalid'];


$query = "select * from newcriminal where criminalid=$criminalid";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>

















<?php




















if(isset($_POST['searchViaRetina']))
{







move_uploaded_file($_FILES['retinascan']['tmp_name'],"criminalsimage/".$_FILES['retinascan']['name']);
			$retinascan = "criminalsimage/".$_FILES['retinascan']['name'];





$query = "select * from newcriminal where retinascan='$retinascan'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>







<?php
if(isset($_POST['searchViaImage']))
{




			$cimage = "criminalsimage/".$_FILES['cimage']['name'];






$query = "select * from newcriminal where cimage = '$cimage'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>













<?php
if(isset($_POST['searchViaCrimeType']))
{
$crimetype = $_POST['crimetype'];
$query = "select * from newcriminal where crimetype = '$crimetype'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Criminal Id</td>";
echo "<td>Criminal Name</td>";
echo "<td>Criminal Image</td>";
echo "<td>Crime Type</td>";
echo "<td>Crime Description</td>";
echo "<td>Crime Date</td>";
echo "<td>Crime Time</td>";
echo "<td>Nationality</td>";
echo "<td>Address</td>";
echo "<td>Sex</td>";
echo "<td>Contact</td>";
echo "<td>Age</td>";
echo "<td>Blood Group</td>";
echo "<td>Retina Scan</td>";
echo "<td>DNA Information</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['cimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";
echo "<td>$column[12]</td>";
echo '<td><img src="'.$column['retinascan'].'" width="100"></td>';
echo "<td>$column[14]</td>";
echo "</tr>";
}
echo "</table>";
}
?>

</div>
<?php  include "bottom.php "?>
</body>
</html>