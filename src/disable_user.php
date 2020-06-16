<?php 
require('auth.php');
if(isset($_GET['id'])){
 $uid = $_GET['id'];
   $auth->disableUser($uid);
 	header('Location:viewallusers.php');
	}