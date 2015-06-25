
<html>
<head>
<title>TotalIncome</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<style>
div.ex{
width:800px;
margin:0px;
padding:10px;
border:1pt solid black;
background-color:#8FBC8F;
box-shadow:0 0 50px #7B68EE;}
body{background-image:url('l.jpg');}
h1{text-align:center;background-image:url('image/The Thing_2.png');color:#FF4500;}p{font-size:18px;color:blue; }
a{font-size:16px;color:black;margin:230px;}p5{margin:260px}
</style>
</head>
<body>
<center><div class='ex'>
<h1>Total Sales</h1><br>
<?php
	       
			include "connect2.php";  
			if(!empty($_POST['date']))
     {
            $date=$_POST['date'];
			$totalprice=0;
			$sql = mysql_query("SELECT * FROM `sales` WHERE `date`='$date' ORDER BY sale_id");
			
			  echo "<table cellpadding='9'><tr><td><b>Product</b></td><td><b>Quantity</b></td><td> </td><td><b>Price</b></td></tr></table> ";
			while($row = mysql_fetch_array($sql)) {
			   $productid=$row['product_id'];
		       $price=$row['price'];
			   $c_quantity=$row['c_quantity'];
			    $date=$row['date'];
			
		  echo "<table cellpadding='8'><tr><td> ". $productid ."</td><td> </td><td> </td><td> </td><td> ".$c_quantity." </td><td> </td><td> </td><td> </td><td> ".$price." </td></tr></table> ";
		   
		   $totalprice= $totalprice+$price;
		   
			}
           echo  "<br><p>In Date:<u>".$date."</u> The total sold product price is <u>".$totalprice."</u>.TK</p>";
			mysql_close();
			
		}
?>
<a href='index.php'><u>www.GalleryAppex.com</u></a><br><p5>@Contact us.</p5>
</div></center>
</body>
</html>