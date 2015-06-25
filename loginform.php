<?php

if(isset($_POST['username'])&&isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username)&&!empty($password)){
$sql="SELECT `id`FROM `user`WHERE `username`='$username' AND`password`='$password'";
if($query_run=mysql_query($sql)){
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0){
$invalid="<span style='color:red;'><blink>Invalid username and password combination.</blink></span>";
}else if($query_num_rows==1){
  $user_id=mysql_result($query_run,0,'id');
 $_SESSION['user_id']=$user_id; 
 header('Location:index.php');

}

}
}else{
$supply="Please supply require field.";
} 
}
?>
<html>
<title>GalleryAppex</title>
<link rel="shortcut icon" type="image/image/x-icon" href="favicon.ico">
<head>
<style type='text/css'>

div.ex1{
	   float:left; 
	   height:470px;
       width:625px;
	   padding:10px;
        margin:20px;
	   border:3px solid black;
	    box-shadow:0 0 60px #7B68EE;
		background-image:url('image/appex1.JPG');
	  }

div.ex{
       float:left; 
	   height:470px;
        width:515px;
        padding:10px;
        margin:20px;
      border:3px solid black;
      background-color:#00BFFF;
	  box-shadow:0 0 60px #7B68EE;
       color:#98FB98;	  
      	  
      }
	  
	  h1{
	  font-size:50px;
	  text-align:center;
	  background-color:#7B68EE;
	  color:whitesmoke;
	  }
	  p{text-align:center;}
	  img{float:right;width:250px;height:220px;margin:20px;}
	 h2{text-align:center;font-size:30px;
	    background-image:url('DSC09892-900.jpg');
		color:green;
	 }p3{color:#FF4500;}p4{font-size:25px;color:red;}p5{font-size:20px;color:green;}p6{color:red;}
	 body{background-image:url('background-wide-wallpaper-1440x900-048.jpg');}
	</style>
</head>
<body >
<h1>Welcome to Gallery Appex world.</h1>
<div class='ex1'>
 <center><p4><b>Welcome to Gallery Appex!</b></p4><br><br>
 <p5>The appropriate way for sales monitoring<br> is available here.It operates efficiently<br> 
 to calculate product price per quantity,<br>provide payment bill and customer inform-<br>tions.</p5></center>
                           
</div>
<div class='ex'>
 <form action='<?php echo $current_file; ?>' method='post'> 
 <h2>Gallery Appex</h2>
 <p><b>Address:</b><u>Maijdee,Noakhali.</u></p><br>
 <p3><marquee width='500pt'><big><b>You are Welcome.</b></big></marquee></p3><br><br>
 <abbr title='Modern Shoes'><img src='image/believe_in_5ive_002.jpg' ></abbr>
 <b><big><u>login</u></b></big><br>
 
 <big>Name :<br>
 <input type='text' name='username' size='30' ><br>
 Password:<br>
 <input type='password' name='password' size='30'><br><br>
 <i>Please click buttons:</i><br>
 <input type='submit' value='Enter' ></a>
 <input type='reset' value='Reset'></a></big>
 </form>
</div>

</body>
</html>
