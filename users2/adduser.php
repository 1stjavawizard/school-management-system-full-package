<?php
include_once('User.php');
$user = new User();
$message ="";
if(isset($_FILES)){
	$user->postUseritems($_POST,$_FILES);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>