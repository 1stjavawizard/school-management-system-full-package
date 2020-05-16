<?php
include_once('Assignteachertoclassandsubject.php');
$server = new Assignteachertoclassandsubject();
$message ="";
if(isset($_POST)){
	$server->postAssignteachertoclassandsubject($_POST);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>