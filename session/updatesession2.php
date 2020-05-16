<?php


include_once('Session.php');
$server = new Session();


if(isset($_POST)){
	
	$server->updateSession($_POST);
	header("Location: https://www.thiscodeschool.com/confab/session/");
}




?>
