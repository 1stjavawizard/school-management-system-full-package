<?php
include_once('Subjecttoclass.php');
$server = new Subjecttoclass();
$message ="";
if(isset($_POST)){
	$server->postSubjecttoclass($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>