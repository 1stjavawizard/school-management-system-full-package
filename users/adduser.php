<?php
include_once('User.php');
$server = new User();
$message ="";

	$server->postUseritems($_POST,$_FILES);
	$message = "ok";
	header('Location: https://www.thiscodeschool.com/confab/users/');

 ?>