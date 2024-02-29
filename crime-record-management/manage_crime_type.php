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
<h2>Record New Crime Type</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>Crime Category ID</td><td> <input type = text name = crimecategoryid></td>
</tr>
<tr>
<td>Crime Category Name </td><td><input type = text name = crimecategoryname></td>
</tr>
<tr>
<td>Description </td><td><textarea name = description rows = 5></textarea></td>
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
$crimecategoryid = $_POST['crimecategoryid'];
$crimecategoryname = $_POST['crimecategoryname'];


$description = $_POST['description'];

$query = "insert into  crimecategory values('','$crimecategoryname','$description')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$crimecategoryid = $_POST['crimecategoryid'];
$crimecategoryname = $_POST['crimecategoryname'];


$description = $_POST['description'];



$query = "update  crimecategory set crimecategoryname='$crimecategoryname',description='$description' where crimecategoryid=$crimecategoryid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$crimecategoryid = $_POST['crimecategoryid'];
$crimecategoryname = $_POST['crimecategoryname'];


$description = $_POST['description'];

$query = "delete from  crimecategory where crimecategoryid=$crimecategoryid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$crimecategoryid = $_POST['crimecategoryid'];
$crimecategoryname = $_POST['crimecategoryname'];


$description = $_POST['description'];

$query = "select * from crimecategory";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Crime Category Id</td>";
echo "<td>Crime Category Name</td>";
echo "<td>Description</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";

echo "<td>$column[2]</td>";

echo "</tr>";
}
echo "</table>";
}
?>
</div>
<?php  include "bottom.php "?>
</body>
</html>