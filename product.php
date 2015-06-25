
	
<html>
<head>
<title>ProductGallery</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<style>
div.ex{
width:900px;
margin:0px;
padding:10px;
border:1pt solid black;
background-color:#98FB98;
box-shadow:0 0 50px #00FFFF;}
body{background-image:url('3ff3e35d_72399c8c2d101faa4130e1c5c832fcba.png');}
h1{text-align:center;background-image:url('The Thing_4.png');color:red;} select{background-color:#8FBC8F;}
</style>
</head>
<body>
<center><div class='ex'>
<h1>Product Gallery</h1><br>
<?php
			include "connect2.php";  
		
			$sql = mysql_query("select * from product ORDER BY product_id");
			
			   echo "<table cellpadding='9'><tr><td><b>Product</b></td><td><b>Size</b></td><td><b>Quantity</b></td><td><b>Rate</b></td><td> </td><td> </td><td><b>Details</b></td></tr></table> ";
			while($row = mysql_fetch_array($sql)) {
			   $productid=$row['product_id'];
		       $size=$row['size'];
			   $p_quantity=$row['p_quantity'];
			   $rate=$row['rate'];
			   $details=$row['details'];
			   $edit="
    <select onchange=\"window.open(this.options[this.selectedIndex].value)\">
        <option value=\"\">edit...</option>
        <option value=\"update.php\">update</option>
        <option value=\"insert.php\">insert</option>
        <option value=\"delete.php\">delete</option>
    </select>
	";
		 echo "<table cellpadding='8'><tr><td> ".$edit."</td><td> ". $productid ."</td><td> </td><td>  </td><td> ".$size." </td><td> </td><td> ".$p_quantity." </td><td> </td><td> </td><td> ".$rate." </td><td> </td><td> </td><td> ".$details." </td></tr></table> ";
		   		   
			}
			mysql_close();
			
		
?>
</div></center>
</body>
</html>		