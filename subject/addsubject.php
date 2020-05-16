<?php
include_once('Subject.php');
$server = new Subject();
$message ="";
if(isset($_POST)){
	$server->postSubjectItems($_POST);
	$message = "ok";
	
}
else{
	$messge = "wrong";
	return $message;
}

 ?>