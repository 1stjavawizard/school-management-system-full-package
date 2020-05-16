<?php
include_once('School.php');
$server = new School();
$message ="";

	$server->postschoolitems($_POST,$_FILES);
	$message = "ok";
	header('Location: https://www.thiscodeschool.com/confab/school/');

 ?>