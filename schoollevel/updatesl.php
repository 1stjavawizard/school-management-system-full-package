<?php


include_once('Schoollevel.php');
$server = new Schoollevel();


if(isset($_POST)){
	
	$server->updateSchoollevel($_POST);
	header("Location: https://www.thiscodeschool.com/confab/schoollevel/");
}




?>
