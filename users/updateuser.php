<?php


include_once('User.php');
$server = new User();


if(isset($_POST)){
	
	$server->updateUserById($_POST);
	header("Location: https://www.thiscodeschool.com/confab/users/");
}




?>
