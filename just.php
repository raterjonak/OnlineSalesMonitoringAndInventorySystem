<?php
	       
			include "connect2.php";  
			if(!empty($_POST['date']))
     {
            $date=$_POST['date'];
			$sql = mysql_query("SELECT * FROM `sales` WHERE `date`='$date' ORDER BY sale_id");
			
			  echo "<table cellpadding='6'><tr><td><b>Product</b></td><td><b>Price</b></td></tr></table> ";
			while($row = mysql_fetch_array($sql)) {
			   $productid=$row['product_id'];
		       $price=$row['price'];
			    $date=$row['date'];
			
		  echo "<table cellpadding='6'><tr><td> ". $productid ."</td><td> </td><td> </td><td> ".$price." </td></tr></table> ";
		   
		   $totalprice= $totalprice+$price;
		   
			}
           echo  "In Date:".$date." The total sold product price is ".$totalprice." .TK";
			mysql_close();
			
		}
?>
<html>
<body>


</body>
</html>
<?php 
echo "
 <select onchange=\"window.open(this.options[this.selectedIndex].value)\">
        <option value=\"\">Go to page...</option>
        <option value=\"http://stackoverflow.com/\">stackoverflow</option>
        <option value=\"http://facebook.com/\">facebook</option>
        <option value=\"http://twitter.com/\">twitter</option>
    </select>
	";
	?>
