<?php
include_once('Assignteachertoclassandsubject.php');
$server = new Assignteachertoclassandsubject();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteAssignteachertoclassandsubject($id);
	echo "deleted";
}


 ?>