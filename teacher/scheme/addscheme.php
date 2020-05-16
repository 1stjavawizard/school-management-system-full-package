<?php
include_once('Scheme.php');
$server = new Scheme();
$message ="";
if(isset($_FILES)){
	$server->postUserScheme($_POST,$_FILES);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>