<?php
include_once('Sessionterm.php');
$server = new Sessionterm();
$message ="";
if(isset($_POST)){
	$server->postSessionterms($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>