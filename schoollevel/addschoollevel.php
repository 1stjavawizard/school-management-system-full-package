<?php
include_once('Schoollevel.php');
$server = new Schoollevel();
$message ="";

	$server->postSchoollevelItem($_POST);
	$message = "ok";
	header('Location: https://www.thiscodeschool.com/confab/schoollevel');

 ?>