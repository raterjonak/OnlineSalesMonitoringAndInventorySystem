<?php
require "connect2.php";
if(!empty($_POST['size'])&&!empty($_POST['p_quantity'])&&!empty($_POST['rate'])&&!empty($_POST['details'])){

$size=$_POST['size'];
$p_quantity=$_POST['p_quantity'];
$rate=$_POST['rate'];
$details=$_POST['details'];
 
$sql=mysql_query("INSERT INTO `product` (`size`,`p_quantity`,`rate`,`details`) VALUES ('$size','$p_quantity','$rate','$details')");
}

?>
<html>
<head>
<title>Insert</title>
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
<h1>Insert</h1><br>
<div class='ex'>

<img src='images (2).jpg'>
<form method='post' action=''>
<table>
<tr><td><big>Size:</big></td><td><input type='text' name='size' size='25'></td></tr>
<tr><td><big>Quantity:</big></td><td><input type='text' name='p_quantity' size='25'></td></tr>
<tr><td><big>Rate:</big></td><td><input type='text' name='rate' size='25'></td></tr>	
<tr><td><big>Details:</big></td><td><input type='text' name='details' size='25'></td></tr>	
<tr><td>  </td></tr><tr><td>  </td></tr><tr><td>  </td></tr>	
<tr><td colspan='2' ><input type='submit' value='Submit'><input type='reset' value='Reset' ></td></tr>
<tr></tr>
</table></form>
</div>
</body>
</html>
