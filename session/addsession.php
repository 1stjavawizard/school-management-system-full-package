<?php
include_once('Session.php');
$server = new Session();
$message ="";
if(isset($_POST['schoolsession'])){
	$server->postSessionItems($_POST);
	$message = "ok";
	header("Location: https://www.thiscodeschool.com/confab/session/");
}
else{
	$messge = "wrong";
	return $message;
}

 ?>