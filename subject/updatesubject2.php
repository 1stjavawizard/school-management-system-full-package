<?php


include_once('Subject.php');
$server = new Subject();


if(isset($_POST)){
	
	$server->updateSubject($_POST);
	header("Location: https://www.thiscodeschool.com/confab/subject/");
}




?>
