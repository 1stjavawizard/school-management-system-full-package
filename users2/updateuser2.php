<?php


include_once('User.php');
$user = new User();


if(isset($_POST)){
	
	$user->updateUserById($_POST);
	echo "success";
}




?>
