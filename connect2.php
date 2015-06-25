<?php
$host='localhost';
$username='root';
$passwd='';
$db='a_database';
if(mysql_connect($host,$username,$passwd)){
if(mysql_select_db($db)){
   //echo "connectd";
 
 	}
else 
echo "could not connected";
}
?>