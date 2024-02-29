<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "mpimages/bns.jpg">
<?php    include "top.php" ?>
<a href="Police_Officers_home.php">Go Back</a>
<div style = "text-align : center">
<br/>
<h2>Transfer The Criminal To Another Jail</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>Enter Transfer ID</td><td> <input type = text name = transferid></td>
</tr>
<tr>
<td>Enter Criminal ID </td><td><input type = text name = criminalid></td>
</tr>


<tr>
<td>Criminal Name  </td><td> <input type = text name = criminalname></td>
</tr>

<tr>
<td>Transfer From</td><td><input type = text name = transferfrom></td>
</tr>

<tr>
<td>Transfer To</td><td>  <input type = text name = transferto></td>
</tr>

<tr>
<td>Transfer Date </td> <td><input type = date name = transferdate></td>
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
$transferid = $_POST['transferid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$transferfrom = $_POST['transferfrom'];
$transferto = $_POST['transferto'];
$transferdate = $_POST['transferdate'];



$query = "insert into criminaltransfer values('','$criminalid','$criminalname','$transferfrom','$transferto','$transferdate')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{

$transferid = $_POST['transferid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$transferfrom = $_POST['transferfrom'];
$transferto = $_POST['transferto'];
$transferdate = $_POST['transferdate'];

$query = "update criminaltransfer set criminalid=$criminalid,criminalname='$criminalname',transferfrom='$transferfrom',transferto='$transferto',transferdate='$transferdate' where transferid=$transferid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$transferid = $_POST['transferid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$transferfrom = $_POST['transferfrom'];
$transferto = $_POST['transferto'];
$transferdate = $_POST['transferdate'];

$query = "delete from criminaltransfer where transferid=$transferid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$transferid = $_POST['transferid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$transferfrom = $_POST['transferfrom'];
$transferto = $_POST['transferto'];
$transferdate = $_POST['transferdate'];

$query = "select * from criminaltransfer";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Transfer ID</td>";
echo "<td>Criminal ID</td>";
echo "<td>Criminal Name</td>";
echo "<td>Transfer From</td>";
echo "<td>Transfer To</td>";
echo "<td>Transfer Date</td>";
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



echo "</tr>";
}
echo "</table>";
}
?>
</div>
<?php  include "bottom.php "?>
</body>
</html>