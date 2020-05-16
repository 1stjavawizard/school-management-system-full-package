<?php


include_once('Academicsession.php');
$server = new Academicsession();


if(isset($_POST)){
	
	$server->updateacademicsession($_POST);
	header("Location: https://www.thiscodeschool.com/confab/academicsession/");
}




?>
