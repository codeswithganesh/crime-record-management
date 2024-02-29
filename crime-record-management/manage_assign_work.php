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
<h2>Assign Work</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>Enter Work Id</td><td> <input type = text name = workid></td>
</tr>
<tr>
<td>Enter Criminal ID </td><td><input type = text name = criminalid></td>
</tr>


<tr>
<td>Criminal Name  </td><td> <input type = text name = criminalname></td>
</tr>

<tr>
<td>Work Assign </td><td><input type = text name = workassign></td>
</tr>

<tr>
<td>Work Start Date</td><td>  <input type = date name = workstartdate></td>
</tr>

<tr>
<td>Salary </td> <td><input type = text name = salary></td>
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
$workid = $_POST['workid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$workassign = $_POST['workassign'];
$workstartdate = $_POST['workstartdate'];
$salary = $_POST['salary'];



$query = "insert into work values('','$criminalid','$criminalname','$workassign','$workstartdate','$salary')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{

$workid = $_POST['workid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$workassign = $_POST['workassign'];
$workstartdate = $_POST['workstartdate'];
$salary = $_POST['salary'];

$query = "update work set criminalid=$criminalid,criminalname='$criminalname',workassign='$workassign',workstartdate='$workstartdate',salary='$salary' where workid=$workid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$workid = $_POST['workid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$workassign = $_POST['workassign'];
$workstartdate = $_POST['workstartdate'];
$salary = $_POST['salary'];

$query = "delete from work where workid=$workid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$workid = $_POST['workid'];
$criminalid = $_POST['criminalid'];
$criminalname = $_POST['criminalname'];
$workassign = $_POST['workassign'];
$workstartdate = $_POST['workstartdate'];
$salary = $_POST['salary'];

$query = "select * from work";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Work ID</td>";
echo "<td>Criminal ID</td>";
echo "<td>Criminal Name</td>";
echo "<td>Work Assign</td>";
echo "<td>Work Start Date</td>";
echo "<td>Salary</td>";


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