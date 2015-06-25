
<?php 
@session_start();
$user_id=$_SESSION['user_id'];
require "connect2.php";
if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['phone'])&&!empty($_POST['productid1'])&&!empty($_POST['quantity1'])){


$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$productid1=$_POST['productid1'];
$quantity1=$_POST['quantity1'];

$mkdate=mktime(0,0,0,date("m")+6,date("d"),date("Y"));
   $validity=date("Y-m-d", $mkdate);
  $date=date('Y-m-d ');
  
   $query5="UPDATE `product` SET `p_quantity`=`p_quantity`-'$quantity1' WHERE `product_id`='$productid1'";
   mysql_query($query5);

  
$sql="INSERT INTO `customer` (`customer_name`,`customer_address`,`phone_number`,`validity`) VALUES ('$name','$address','$phone','$validity')";
mysql_query($sql);

$sql2 = mysql_query("select * from product where product_id = '$productid1'");
$ro = mysql_fetch_assoc($sql2);
$rate1 = $ro['rate'];
$price1 = $quantity1 *$rate1;

$SQL = mysql_query("select * from customer where customer_name = '$name'");
$rows = mysql_fetch_assoc($SQL);

$customer_id = $rows['customer_id'];

$query="INSERT INTO `sales`(`sale_id`,`user_id`,`date`,`customer_id`,`product_id`,`c_quantity`,`price`)VALUES('','$user_id','$date','$customer_id','$productid1','$quantity1','$price1')";
mysql_query($query);



$sql1 = mysql_query("select * from customer where customer_id = '$customer_id'");

$row = mysql_fetch_assoc($sql1);
$customer_name = $row['customer_name'];
$customer_address = $row['customer_address'];
$phone_number = $row['phone_number'];


require"form1.php";


}
else 
 require "empty.php";
?>