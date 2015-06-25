
<?php 
@session_start();
$user_id=$_SESSION['user_id'];
require "connect2.php";
if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['phone'])&&!empty($_POST['productid1'])&&!empty($_POST['quantity1'])){
if(!empty($_POST['productid2'])&&!empty($_POST['quantity2'])){
if(!empty($_POST['productid3'])&&!empty($_POST['quantity3'])){

$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$productid1=$_POST['productid1'];
$quantity1=$_POST['quantity1'];
$productid2=$_POST['productid2'];
$quantity2=$_POST['quantity2'];
$productid3=$_POST['productid3'];
$quantity3=$_POST['quantity3'];

$mkdate=mktime(0,0,0,date("m")+6,date("d"),date("Y"));
  $validity=date("Y-m-d", $mkdate);
  $date=date('Y-m-d');
  
   $query5="UPDATE `product` SET `p_quantity`=`p_quantity`-'$quantity1' WHERE `product_id`='$productid1'";
   mysql_query($query5);
 $query6="UPDATE `product` SET `p_quantity`=`p_quantity`-'$quantity2' WHERE `product_id`='$productid2'";
   mysql_query($query6);
   $query7="UPDATE `product` SET `p_quantity`=`p_quantity`-'$quantity3' WHERE `product_id`='$productid3'";
   mysql_query($query7);
  
$sql="INSERT INTO `customer` (`customer_name`,`customer_address`,`phone_number`,`validity`) VALUES ('$name','$address','$phone','$validity')";
mysql_query($sql);

$sql2 = mysql_query("select * from product where product_id = '$productid1'");
$ro = mysql_fetch_assoc($sql2);
$rate1 = $ro['rate'];
$price1 = $quantity1 *$rate1;

$sql3 = mysql_query("select * from product where product_id = '$productid2'");
$ro = mysql_fetch_assoc($sql3);
$rate2 = $ro['rate'];
$price2 = $quantity2 *$rate2;

$sql4 = mysql_query("select * from product where product_id = '$productid3'");
$ro = mysql_fetch_assoc($sql4);
$rate3 = $ro['rate'];
$price3 = $quantity3 *$rate3;

$SQL = mysql_query("select * from customer where customer_name = '$name'");
$rows = mysql_fetch_assoc($SQL);

$customer_id = $rows['customer_id'];

$query="INSERT INTO `sales`(`sale_id`,`user_id`,`date`,`customer_id`,`product_id`,`c_quantity`,`price`)VALUES('','$user_id','$date','$customer_id','$productid1','$quantity1','$price1')";
mysql_query($query);

$query1="INSERT INTO `sales`(`sale_id`,`user_id`,`date`,`customer_id`,`product_id`,`c_quantity`,`price`)VALUES('','$user_id','$date','$customer_id','$productid2','$quantity2','$price2')";
mysql_query($query1);

$query2="INSERT INTO `sales`(`sale_id`,`user_id`,`date`,`customer_id`,`product_id`,`c_quantity`,`price`)VALUES('','$user_id','$date','$customer_id','$productid3','$quantity3','$price3')";
mysql_query($query2);

$sql1 = mysql_query("select * from customer where customer_id = '$customer_id'");

$row = mysql_fetch_assoc($sql1);
$customer_name = $row['customer_name'];
$customer_address = $row['customer_address'];
$phone_number = $row['phone_number'];

$totalprice1=$price1+$price2+$price3;

require"form.php";

}else{require "process2.php";}
}else{ require "process1.php";}
}
else 
require "empty.php";
?>




 
 
 
 
 
 
 
 
 
 
 