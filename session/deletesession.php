<?php
include_once('Session.php');
$server = new Session();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deleteSession($id);
	header("Location: https://www.thiscodeschool.com/confab/session/");
}


 ?>