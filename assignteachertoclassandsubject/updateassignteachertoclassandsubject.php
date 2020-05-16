<?php
include_once('Assignteachertoclassandsubject.php');
$server = new Assignteachertoclassandsubject();


if(isset($_POST)){
	
	$server->updateAssignteachertoclassandsubject($_POST);
	echo "success";
}




?>
