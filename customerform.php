<html>
<head>
<title>SalesForm</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<style>
img{
float:right;
margin:1px;
width:520px;
height:400px;}
div.ex{
float:left;
width:900px;
margin:0px;
padding:10px;
border:0pt solid black;
background-color:#556B2F;}
div.ex1{
       float:right; 
	   height:200px;
        width:490px;
        padding:10px;
        margin:0px;
      border:0px solid black;
      background-color:#556B2F; 
      	  }
input{background-color:#BDB76B;}
h1{text-align:center;color:#9ACD32;background-color:#006400;}p{font-size:20px;color:#00FFFF; }
</style>
</head>
<body bgcolor='#556B2F'>
<h1>Sales Form</h1><br>
<div class='ex'>

<img src='image/best_seller_jordan_shoes_nike_shoes_adidas_shoes.jpg'>
<form method='post' action='process.php'>
<table>
<tr><td><big>Customer name:</big></td><td><input type='text' name='name' size='25'></td></tr>
<tr><td><big>Customer address:</big></td><td><input type='text' name='address' size='25'></td></tr>
<tr><td><big>Phone number:</big></td><td><input type='text' name='phone' size='25'></td></tr>	
<tr><td><b><u><big>Product</big></u></b></td></tr>
<tr><td><big>Product id1:</big></td><td><input type='text' name='productid1' size='25' ></td></tr>
<tr><td>Quantity:</td><td><input type='text' name='quantity1' size='25'></td></tr>
<tr><td><big>Product id2:</big></td><td><input type='text' name='productid2' size='25'></td></tr>
<tr><td>Quantity:</td><td><input type='text' name='quantity2' size='25'></td></tr>
<tr><td><big>Product id3:</big></td><td><input type='text' name='productid3' size='25'></td></tr>
<tr><td>Quantity:</td><td><input type='text' name='quantity3' size='25'></td></tr>
<tr><td>  </td></tr><tr><td>  </td></tr><tr><td>  </td></tr>	
<tr><td colspan='2' ><input type='submit' value='Submit'><input type='reset' value='Reset' ></td></tr>
<tr></tr>
</table></form>

</div>
<div class='ex1'>
<p>If you want to know the total sales of respective date.<br>
Please enter the date.<br>
</p><table><form method='POST' action='dateprocess.php'>
<tr><td><big><b>Date:</b></big></td><td><input type='text' name='date' size='25'></td><td><input type='submit' value='submit'></td></tr>
</form></table>
</div>
</body>
</html>