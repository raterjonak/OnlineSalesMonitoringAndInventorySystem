<?php
require "core.php";
require "connect2.php";

if(loggedin()){
require "home.php";

}else{
include "loginform.php";
}
?>
