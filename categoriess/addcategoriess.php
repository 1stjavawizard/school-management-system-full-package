<?php
include_once('Categoriess.php');
$server = new Categoriess();
$message ="";
if(isset($_POST['categoriess'])){
	$server->postcategoriessItems($_POST);
	$message = "ok";
	header("Location: https://www.thiscodeschool.com/confab/categoriess/");
}
else{
	$messge = "wrong";
	return $message;
}

 ?>