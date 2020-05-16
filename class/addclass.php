<?php
include_once('Classlevel.php');
$server = new Classlevel();
$message ="";
if(isset($_POST['schoolsession'])){
	$server->postClasslevelItems($_POST);
	$message = "ok";
	header("Location: https://www.thiscodeschool.com/confab/class/");
}
else{
	$messge = "wrong";
	return $message;
}

 ?>