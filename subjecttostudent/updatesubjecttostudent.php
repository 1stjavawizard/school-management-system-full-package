<?php
include_once('Subjecttostudent.php');
$server = new Subjecttostudent();


if(isset($_POST)){
	
	$server->updateSubjecttostudent($_POST);
	echo "success";
}




?>
