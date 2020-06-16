<?php 
	require('db.php');
 	$auth = $factory->createAuth();
	$customToken = $auth->createCustomToken('ablaptop');
	//console.log($customToken);
 	SESSION_START();   
    $_SESSION['admin'] = $customToken; 
    if(empty($_SESSION['admin'])){
        header('Location:../login.php');
    }else{
    	  return ;
    }
 ?>