<html>
<head>
<title>Customer Information</title>
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
<h1>Customer Information</h1>
<div class='ex'>
<img src='image/nike-mens-nike-shoes-mens-blazer-hi-mid-blue-36002.jpg'>
<table cellspacing=3pt cellpadding=7pt>
<tr>
           <td><strong>User id:</strong></td> <td><?php echo $userid;?> </td>
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
<tr>
        <td><strong>phone number:</strong> </td><td>   <?php echo $phone_number;?></td>
</tr>
<tr>
        <td><strong>Product id:</strong> </td><td> <?php echo $productid;?></td>
</tr>
<tr>
        <td><strong>Size:</strong> </td><td> <?php echo $size;?></td>
</tr>
<tr>
        <td><strong>Rate:</strong> </td><td> <?php echo $rate;?></td>
</tr>
<tr>
        <td><strong>Quantity:</strong> </td><td> <?php echo $c_quantity;?></td>
</tr>
<tr>
        <td><strong>Price:</strong> </td><td> <?php echo $price;?></td>
</tr>
<tr>
        <td><strong>Date:</strong> </td><td> <?php echo $date;?></td>
</tr>
<tr>
        <td><strong>Validity:</strong> </td><td> <?php echo $validity;?></td>
</tr>
<tr>
        <td><strong>Details:</strong> </td><td> <?php echo $details;?></td>
</tr>

 </table> 
 <br><br><a href='index.php'>Home</a></div>
 
</body><html>