<?php


include_once('Subjecttoclass.php');
$server = new Subjecttoclass();


if(isset($_POST)){
	
	$server->updateSubjecttoclass($_POST);
	echo "success";
}




?>
