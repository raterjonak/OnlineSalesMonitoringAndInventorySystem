<?php
require "connect2.php";
if(!empty($_POST['customerid'])&&(!empty($_POST['productid'])))
{
$customerid=$_POST['customerid'];
$productid=$_POST['productid'];

$sql=mysql_query("SELECT * FROM `customer` WHERE `customer_id`='$customerid'");
$row=mysql_fetch_assoc($sql);
  $customerid1=$row['customer_id'];
  $customername=$row['customer_name'];
  $customeraddress=$row['customer_address'];
  $phone_number=$row['phone_number'];
  $validity=$row['validity'];
  
  $sql1=mysql_query("SELECT * FROM `sales` WHERE `product_id`='$productid'AND `customer_id`='$customerid'");
  $row=mysql_fetch_assoc($sql1);
     $productid1=$row['product_id'];
     $c_quantity=$row['c_quantity'];
	 $price=$row['price'];
	 $date=$row['date'];
	 $userid=$row['user_id'];
	 
  $sql2=mysql_query("SELECT * FROM `product` WHERE `product_id`='$productid'");
  $row=mysql_fetch_assoc($sql2);
     $rate=$row['rate'];
	 $size=$row['size'];
	 $details=$row['details'];
	 
	 require "infocustomer.php";
}
else {
 require "empty.php";
}
?>
