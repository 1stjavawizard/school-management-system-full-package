<?php
include_once('Academicsession.php');
$server = new Academicsession();
$message ="";
if(isset($_POST['schoolsession'])){
	$server->postacademicsessionItems($_POST);
	$message = "ok";
	header("Location: https://www.thiscodeschool.com/confab/academicsession/");
}
else{
	$messge = "wrong";
	return $message;
}

 ?>