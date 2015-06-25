<html>
<head>
<title>CustomerInformation</title>
<link rel="shortcut icon" type="image/image/x-icon" href="favicon.ico">
<style>
img{
float:right;
margin:1px;
width:610px;
height:420px;}
div.ex{
width:1100px;
margin:0px;
padding:10px;
border:2pt solid #556B2F;
background-color:#556B2F;}
input{background-color:#BDB76B;}
h1{text-align:center;color:#9ACD32;background-color:#006400;}p{font-size:20px;}
</style>
</head>
<body bgcolor='#556B2F'>
<h1>Search Customer information</h1>
<br>
<div class='ex'>
<img src='image/nike-mens-nike-shoes-mens-air-force-1-high-tops-black-neon-yellow-360061.jpg'>
<form action="infoprocess.php" method='POST' >
<p>Please! enter the data</p>
<table cellpadding=7pt>
<tr>
           <td><strong>Customer id:</strong></td><td><input type='text' name='customerid' size='20'></td>
</tr>
<tr>
           <td><strong>Product id :</strong></td><td><input type='text' name='productid' size='20'></td>
</tr>
<tr>
        <td><input type='submit' value='submit'></td>
</tr>
 </table></form></div>
</body>
</html>