<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "mpimages/bns.jpg">
<?php    include "top.php" ?>
<a href="admin_home.php">Admin home</a>
<div style = "text-align : center">
<br/>
<h2>Manage Missing Persons Information</h2>
<form method = post enctype='multipart/form-data'>
<table align = center>

<tr>
<td>Missing ID </td><td><input type = text name = missingid></td>
</tr>

<tr>
<td>Name </td><td><input type = text name = name></td>
</tr>

<tr>
<td>
Image </td><td> <input type = file name = image id = image></td>
</tr>

<tr>
<td>Father Name  </td><td> <input type = text name = fathername></td>
</tr>

<tr>
<td>Address </td><td><textarea type = text name = address></textarea></td>
</tr>

<tr>
<td>Age</td><td>  <input type = text name = age></td>
</tr>


<tr>

<td>Height</td><td>  <input type = text name = height></td>
</tr>



<tr>
<td>
Built   </td><td><input type = text name = built></td>
</tr>

<tr>
<td>
Face   </td><td><input type = text name = face></td>
</tr>




<tr>
<td>
Complexion   </td><td><input type = text name = complexion></td>
</tr>

<tr>
<td>
Dress   </td><td><input type = text name = Dress></td>
</tr>

<tr>
<td>
Date of Missing   </td><td><input type = text name = dateofmissing></td>
</tr>


<tr>
<td>
Firno   </td><td><input type = text name = firno></td>
</tr>


<tr>
<td>
Fir Date   </td><td><input type = text name = firdate></td>
</tr>

<tr>
<td>
Police Station  </td><td><input type = text name = policestation></td>
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
$missingid = $_POST['missingid'];
$name = $_POST['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"missing/".$_FILES['image']['name']);
			$image = "missing/".$_FILES['image']['name'];

$fathername = $_POST['fathername'];
$address = $_POST['address'];
$age = $_POST['age'];
$height = $_POST['height'];
$built = $_POST['built'];
$face = $_POST['face'];
$complexion = $_POST['complexion'];
$Dress = $_POST['Dress'];
$dateofmissing = $_POST['dateofmissing'];
$firno = $_POST['firno'];
$firdate = $_POST['firdate'];
$policestation = $_POST['policestation'];









$query = "insert into missing values('','$name','$image','$fathername','$address','$age','$height','$built','$face','$complexion','$Dress','$dateofmissing','$firno','$firdate','$policestation')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$missingid = $_POST['missingid'];
$name = $_POST['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"missing/".$_FILES['image']['name']);
			$image = "missing/".$_FILES['image']['name'];

$fathername = $_POST['fathername'];
$address = $_POST['address'];
$age = $_POST['age'];
$height = $_POST['height'];
$built = $_POST['built'];
$face = $_POST['face'];
$complexion = $_POST['complexion'];
$Dress = $_POST['Dress'];
$dateofmissing = $_POST['dateofmissing'];
$firno = $_POST['firno'];
$firdate = $_POST['firdate'];
$policestation = $_POST['policestation'];

$query = "update missing set name='$name',image='$image',fathername='$fathername',address='$address',age='$age',height='$height',built='$built',face='$face',complexion='$complexion',Dress='$Dress',dateofmissing='$dateofmissing',firno='$firno',firdate='$firdate',policestation='$policestation' where missingid=$missingid";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$missingid = $_POST['missingid'];
$name = $_POST['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"missing/".$_FILES['image']['name']);
			$image = "missing/".$_FILES['image']['name'];

$fathername = $_POST['fathername'];
$address = $_POST['address'];
$age = $_POST['age'];
$height = $_POST['height'];
$built = $_POST['built'];
$face = $_POST['face'];
$complexion = $_POST['complexion'];
$Dress = $_POST['Dress'];
$dateofmissing = $_POST['dateofmissing'];
$firno = $_POST['firno'];
$firdate = $_POST['firdate'];
$policestation = $_POST['policestation'];

$query = "delete from missing where missingid=$missingid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$missingid = $_POST['missingid'];
$name = $_POST['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"missing/".$_FILES['image']['name']);
			$image = "missing/".$_FILES['image']['name'];

$fathername = $_POST['fathername'];
$address = $_POST['address'];
$age = $_POST['age'];
$height = $_POST['height'];
$built = $_POST['built'];
$face = $_POST['face'];
$complexion = $_POST['complexion'];
$Dress = $_POST['Dress'];
$dateofmissing = $_POST['dateofmissing'];
$firno = $_POST['firno'];
$firdate = $_POST['firdate'];
$policestation = $_POST['policestation'];

$query = "select * from missing";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Missing Id</td>";
echo "<td>Name</td>";
echo "<td>Image</td>";
echo "<td>Father Name</td>";
echo "<td>Address</td>";
echo "<td>Age</td>";
echo "<td>Height</td>";
echo "<td>Built</td>";
echo "<td>Face</td>";
echo "<td>Complexion</td>";
echo "<td>Dress</td>";
echo "<td>Date of Missing</td>";
echo "<td>FIR No.</td>";
echo "<td>FIR Date</td>";
echo "<td>Police Station</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['image'].'" width="100"></td>';
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
echo "<td>$column[12]</td>";
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