<?php


include_once('School.php');
$server = new School();


if(isset($_POST)){
	
	$server->updateSchool($_POST);
	header("Location: https://www.thiscodeschool.com/confab/school/");
}




?>
