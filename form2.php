<html>
<title>Invoice</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<head>
<style type='text/css'>
div.ex{
width:870px;
padding:10px;
margin:5px;
border:2px solid black;
background-color:#9ACD32;
box-shadow:0 0 80px #7B68EE;
}
body{background-image:url('In-Blue-Only-Yet-There-Really-Are-Changes-You-Won-t-Ever-be-Bored-in-Vision-HD-Single-Color-Wallpaper.jpg');}
img{
float:right;
margin:10px;
width:370px;
height:270px;   
}
input{background-color:#8FBC8F;}
p{text-align:center;}p2{margin:200px;}p3{font-size:25px;}p4{margin:700px;}a{font-size:16px;color:black;margin:230px;}p5{margin:260px}
</style>
</head>
<body>
<div class='ex'>
<p4><b>Date:</b><?php  echo $date;?></p4>
<p><p3><b><big>Gallery Appex</big></b></p3><br>
<b>Adress:</b><u>Noakhali,Maijdee.</u></p> <br>
<img src='Buy_2012_Nike_Free_Run+_3_Womens_Shoes_Blue_Silver_Top_Fashion_02_thumb.jpg'>
<table border=0pt cellpadding='5' >
<tr>
   <td><b>Customer id:</b><?php  echo $customer_id;?></td>
  <td><b>Customer name:</b><?php  echo $customer_name;?></td>                                                                     
</tr>
<tr>

	 <td><b>Phone number:</b><?php echo $phone_number;?></td> 
	 <td><b>Customer address:</b><?php  echo $customer_address;?></td>
</tr>
</table>
<br>
<table border=0pt cellpadding='15pt'  >
      <tr>
           <th>Product_id</th><th>Quantity</th><th>Rate.</th><th>Price</th>	  
	  </tr>
	  <tr>
	       <td><?php echo $productid1; ?></td> <td><?php echo $quantity1;?></td> <td><?php echo  $rate1;?></td> <td><?php echo  $price1;?></td>
	  </tr>
	   <tr>
	       <td><?php echo $productid2; ?></td> <td><?php echo $quantity2;?></td> <td><?php echo  $rate2;?></td> <td><?php echo  $price2;?></td>
	  </tr>
	   <tr>
	     <td></td> <td></td> <td></td> <td></td>
	  </tr>
	   <tr>
	       <td></td> <td></td> <td></td> <td></td>
	  </tr>
	   <tr>
	       <td></td> <td></td> <td></td> <td></td>
	  </tr>
	  
</table>
<p2><b>Total Price:</b><?php echo  $totalprice." ";?>TK.</p2>	 <br>    <br> 
<?php
echo "<SCRIPT LANGUAGE=\"JavaScript\">
if (window.print) {
document.write('<form> '
+ '<input type=button name=print value=\"Print\" '
+ 'onClick=\"javascript:window.print()\"> </form>');
}
</script>";

?>
<a href='index.php'><u>www.GalleryAppex.com</u></a><br><p5>@Contact us.</p5>
</div>
</body>
 </html>

