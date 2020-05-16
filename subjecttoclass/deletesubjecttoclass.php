<?php
include_once('Subjecttoclass.php');
$server = new Subjecttoclass();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteSubjecttoclass($id);
	echo "deleted";
}


 ?>