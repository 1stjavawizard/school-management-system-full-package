<?php
include_once('Units.php');
$server = new Units();
$message ="";
if(isset($_POST)){
	$server->postUnitsItems($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>