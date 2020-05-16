<?php
include_once('Note.php');
$server = new Note();
$message ="";
if(isset($_FILES)){
	$server->postUserNote($_POST,$_FILES);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>