<?php 
require('auth.php');
if(isset($_GET['id'])){
 $uid = $_GET['id'];
   $auth->enableUser($uid);
 	header('Location:viewallusers.php');
	}