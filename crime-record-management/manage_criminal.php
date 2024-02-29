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
<h2>Manage Criminals</h2>
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
<td>Crime Description </td><td><textarea type = text name = crimedesc></textarea></td>
</tr>

<tr>
<td>Crime Date </td><td>  <input type = date name = crimedate></td>
</tr>

<tr>
<td>Crime Time  </td> <td><input type = time name = crimetime></td>
</tr>

<tr>
<td>Nationality   </td><td><input type = text name = nationality></td>
</tr>

<tr>
<td>Address  </td> <td><input type = text name = address></td>
</tr>
<tr>
<td>Sex  </td><td> <input type = text name = sex></td>
</tr>
<tr>
<td>Contact   </td><td><input type = text name = contact></td>
</tr>

<tr>
<td>Age  </td><td> <input type = text name = age></td>
</tr>

<tr>

<td>Blood Group</td><td>  <input type = text name = bloodgroup></td>
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
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
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



$query = "insert into newcriminal values('','$criminalname','$cimage','$crimetype','$crimedesc','$crimedate','$crimetime','$nationality','$address','$sex','$contact','$age','$bloodgroup','$retinascan','$dnainformation')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
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

$query = "update newcriminal set criminalname='$criminalname',cimage='$cimage',crimetype=$crimetype,crimedesc=$crimedesc,crimedate=$crimedate,crimetime=$crimetime,nationality=$nationality,address=$address,sex=$sex,contact=$contact,age=$age,bloodgroup=$bloodgroup,retinascan=$retinascan,bloodgroup=$bloodgroup=$totalamount where customernumber=$customerno";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{

$criminalid = $_POST['criminalid'];
$query = "delete from newcriminal where criminalid=$criminalid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
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

$query = "select * from newcriminal";
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