<?php
include_once('Subjecttostudent.php');
$server = new Subjecttostudent();
$message ="";
if(isset($_POST)){
	$server->postSubjecttostudent($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>