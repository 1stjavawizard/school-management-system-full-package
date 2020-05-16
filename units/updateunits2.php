<?php


include_once('Units.php');
$server = new Units();


if(isset($_POST)){
	
	$server->updateUnits($_POST);
	echo "success";
}




?>
