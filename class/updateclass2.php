<?php


include_once('Classlevel.php');
$server = new Classlevel();


if(isset($_POST)){
	
	$server->updateClasslevel($_POST);
	header("Location: https://www.thiscodeschool.com/confab/class/");
}




?>
