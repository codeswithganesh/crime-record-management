<html>
<head>
<?php
include "header.php";
?>
</head>
<body background =  "mpimages/bns.jpg">
<?php    include "top.php" ?>
<div style = "text-align : center">
<br/>
<h2>Manage Missing Persons Information</h2>
<?php
include "dbconfigure.php";





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

?>
</div>
<?php  include "bottom.php "?>
</body>
</html>