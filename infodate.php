<html>
<head>
<title>Sales Information</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
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
border:2pt solid #98FB98;
background-color:#98FB98;}
h1{text-align:center;color:#red;background-color:#9ACD32;}a{color:#FF4500;margin:20px;}
</style>
</head>
<body bgcolor='#98FB98'>
<h1>Sales Information</h1>
<div class='ex'>
<img src='nike-mens-nike-shoes-mens-blazer-hi-mid-blue-36002.jpg'>
<table cellspacing=3pt cellpadding=7pt>
<tr>
           <td><strong>User id:</strong></td> <td><?php echo $u;?> </td>
</tr>
<tr>
           <td><strong>Customer id:</strong></td> <td><?php echo $customerid1;?> </td>
</tr>
<tr>
        <td><strong>Customer name:</strong> </td> <td><?php echo $customername;?> </td>
</tr>

<tr>
        <td> <strong>Customer address:</strong></td> <td><?php echo $customeraddress;?> </td>
</tr>


 </table> 
 <br><br><a href='index.php'>Home</a></div>
 
</body><html>