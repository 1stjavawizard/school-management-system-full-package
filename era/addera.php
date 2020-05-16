<?php
include_once('Era.php');
$era = new Era();
$message ="";
if(isset($_POST)){
	$era->postEra($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>