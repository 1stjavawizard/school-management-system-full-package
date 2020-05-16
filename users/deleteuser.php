<?php
include_once('User.php');
$server = new User();
if(isset($_POST['id'])){
	$id = json_decode($_POST['id']);
	$server->deleteUser($id);
	header("Location: https://www.thiscodeschool.com/confab/users/");
}


 ?>