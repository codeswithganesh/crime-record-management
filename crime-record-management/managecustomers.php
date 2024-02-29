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
<h2>Manage Customers</h2>
<form method = post>
Enter Customer No. <input type = text name = customernumber>
<br/>
Enter Customer Name <input type = text name = customername>
<br/>
Customer Address   <input type = text name = customeraddress>
<br/>
Date of Journey   <input type = text name = dateofjourney>
<br/>
Location No.   <input type = text name = locationno>
<br/>
No. of Seats   <input type = text name = noofseats>
<br/>
Hotel No.   <input type = text name = hotelno>
<br/>
Bus No.   <input type = text name = busno>
<br/>
Total Amount   <input type = text name = totalamount>
<br/>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$customerno = $_POST['customernumber'];
$customername = $_POST['customername'];
$customeraddress = $_POST['customeraddress'];
$dateofjourney = $_POST['dateofjourney'];
$locationno = $_POST['locationno'];
$noofseats = $_POST['noofseats'];
$hotelno = $_POST['hotelno'];
$busno = $_POST['busno'];
$totalamount = $_POST['totalamount'];

$query = "insert into customer values($customerno,'$customername','$customeraddress','$dateofjourney',$locationno,$noofseats,$hotelno,$busno,$totalamount)";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$customerno = $_POST['customernumber'];
$customername = $_POST['customername'];
$customeraddress = $_POST['customeraddress'];
$dateofjourney = $_POST['dateofjourney'];
$locationno = $_POST['locationno'];
$noofseats = $_POST['noofseats'];
$hotelno = $_POST['hotelno'];
$busno = $_POST['busno'];
$totalamount = $_POST['totalamount'];

$query = "update customer set customername='$customername',customeraddress='$customeraddress',dateofjourney=$dateofjourney,locationno=$locationno,noofseats=$noofseats,hotelno=$hotelno,busno=$busno,totalamount=$totalamount where customernumber=$customerno";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$customerno = $_POST['customernumber'];
$customername = $_POST['customername'];
$customeraddress = $_POST['customeraddress'];
$dateofjourney = $_POST['dateofjourney'];
$locationno = $_POST['locationno'];
$noofseats = $_POST['noofseats'];
$hotelno = $_POST['hotelno'];
$busno = $_POST['busno'];
$totalamount = $_POST['totalamount'];

$query = "delete from customer where customernumber=$customerno";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
$customerno = $_POST['customernumber'];
$customername = $_POST['customername'];
$customeraddress = $_POST['customeraddress'];
$dateofjourney = $_POST['dateofjourney'];
$locationno = $_POST['locationno'];
$noofseats = $_POST['noofseats'];
$hotelno = $_POST['hotelno'];
$busno = $_POST['busno'];
$totalamount = $_POST['totalamount'];

$query = "select * from customer";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Customer No.</td>";
echo "<td>Customer Name</td>";
echo "<td>Customer Address</td>";
echo "<td>Date of Journey</td>";
echo "<td>Location No.</td>";
echo "<td>No. of Seats</td>";
echo "<td>Hotel No.</td>";
echo "<td>Bus No.</td>";
echo "<td>Total Amount</td>";
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
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "</tr>";
}
echo "</table>";
}
?>
</div>
<?php  include "bottom.php "?>
</body>
</html>